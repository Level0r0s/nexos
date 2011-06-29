b_help = "Удебеляване: [B]текст[/B]";
i_help = "Курсив: [I]текст[/I]";
u_help = "Подчертаване: [U]текст[/U]";
quote_help = "Цитат: [quote]текст[/quote]";
code_help = "Код: [code]код[/code]";
php_help = "PHP: [php]код[/php]";
img_help = "Вмъкни изображение: [img]връзка към картинката[/img]";
fc_help = "Цвят на шрифта: [color=red]текст[/color] Може да ползвате HTML color=#FF0000";
fs_help = "Размер на шрифта: [size=9]Много малък[/size]";
ft_help = "Шрифт: [font=Andalus]текст[/font]";
rtl_help = "Дясно подравняване";
ltr_help = "Ляво подравняване";
mail_help = "Вмъкни е-маейл: [email]адрес[/email]";
url_help="Вмъкни връзка към страница: [url=линк]наименование[/url]";
right_help="дясно подравняване: [align=right]текст[/align]";
left_help="ляво подравняване: [align=left]текст[/align]";
center_help="центриране: [align=center]текст[/align]";
justify_help="двойно подравняване: [align=justify]текст[/align]";
marqr_help="Скрол текст надясно: [marq=right]текст[/marq]";
marql_help="Скрол текст наляво: [marq=left]текст[/marq]";
marqu_help="Скрол текст нагоре: [marq=up]текст[/marq]";
marqd_help="Скрол текст надолу: [marq=down]текст[/marq]";
hr_help="Вмъкни хоризонтална линия [hr]";
video_help="Вмъкни видео файл: [video width=# height=#]адрес на файла[/video]";
flash_help="Вмъкни флаш анимация: [flash width=# height=#]връзка към анимацията[/flash]";

var bbcode = new Array();
var theSelection = false;

function helpline(form, field, help) {
	document.forms[form].elements["help"+field].value = eval(help + "_help");
	document.forms[form].elements["help"+field].readOnly = "true";
}

function emoticon(form, field, text) { BBCwrite(form, field, '', ' '+text+' ', true); }
function BBChr(form, field) { BBCwrite(form, field, '', "[hr]", true); }
function BBCdir(form, field, dirc) { document.forms[form].elements[field].dir=(dirc); }
function BBCft(form, field, box) { BBCfont(form, field, "font", box); }
function BBCfs(form, field, box) { BBCfont(form, field, "size", box); }
function BBCfc(form, field, box) { BBCfont(form, field, "color", box); }
function BBCfont(form, field, code, box) { BBCwrite(form, field, "["+code+"="+box.value+"]", "[/"+code+"]", true); }

function BBCwmi(form, field, type) {
	if (type == 'img') { var URL = prompt("Моля въвъдете адреса на изображението:","http://"); }
	else { var URL = prompt("Въведете е-мейл адрес:",""); }
	if (URL == null) { return; }
	if (!URL) { return alert("Грешка: Не сте въвели адрес"); }
	BBCwrite(form, field, '', "["+type+"]"+URL+"[/"+type+"]", true);
}

function BBCode(form, field, code, img) {
	var type = img.name;
	if (BBCwrite(form, field, "["+code+"="+type+"]", "[/"+code+"]")) { return; }
	if (bbcode[code+type+form+field] == null) {
		ToAdd = "["+code+"="+type+"]";
		img.src = img.src.replace(type+".", type+"1.");
		bbcode[code+type+form+field] = 1;
	} else {
		ToAdd = "[/"+code+"]";
		img.src = img.src.replace(type+"1.", type+".");
		bbcode[code+type+form+field] = null;
	}
	BBCwrite(form, field, '', ToAdd, true);
}

function BBCcode(form, field, img) {
	var code = img.name;
	if (BBCwrite(form, field, "["+code+"]", "[/"+code+"]")) { return; }
	if (bbcode[form+field+code] == null) {
		ToAdd = "["+code+"]";
		img.src = img.src.replace(code+".", code+"1.");
		bbcode[form+field+code] = 1;
	} else {
		ToAdd = "[/"+code+"]";
		img.src = img.src.replace(code+"1.", code+".");
		bbcode[form+field+code] = null;
	}
	BBCwrite(form, field, '', ToAdd, true);
}

function BBCmm(form, field, type) {
	var URL = prompt("Въведете адреса на "+type+" файла", "http://");
	if (URL == null) { return; }
	if (!URL) { return alert("Грешка: Не сте въвели адреса на "+type+" файла"); }
	var WS = prompt("Въведете "+type+" широчината", "250");
	if (WS == null) { return; }
	if (!WS) { WS = 250; }
	var HS = prompt("Въведете "+type+" височината", "200");
	if (HS == null) { return; }
	if (!HS) { HS = 200; }
	BBCwrite(form, field, '', "["+type+" width="+WS+" height="+HS+"]"+URL+"[/"+type+"]", true);
}

function BBCurl(form, field) {
	var URL = prompt("Въведете адреса:", "http://");
	if (URL == null) { return; }
	if (!URL) { return alert("Грешка: не сте въвели адрес "); }
	if (BBCwrite(form, field, "[url="+URL+"]", "[/url]")) { return; }
	var TITLE = prompt("Въведете името на страницата", "Име на страницата");
	if (TITLE == null) { return; }
	var Add = "]"+URL;
	if (TITLE) { Add = "="+URL+"]"+TITLE; }
	BBCwrite(form, field, '', "[url"+Add+"[/url]", true);
}

function BBCwrite(form, field, start, end, force) {
	var textarea = document.forms[form].elements[field];
	if (textarea.caretPos) {
	  textarea.focus();
		// Attempt to create a text range (IE).
		theSelection = document.selection.createRange().text;
		if (force || theSelection != '') {
			document.selection.createRange().text = start + theSelection + end;
			textarea.focus();
			return true;
		}
	} else if (typeof(textarea.selectionStart) != "undefined") {
		// Mozilla text range replace.
		var text = new Array();
		text[0] = textarea.value.substr(0, textarea.selectionStart);
		text[1] = textarea.value.substr(textarea.selectionStart, textarea.selectionEnd-textarea.selectionStart);
		text[2] = textarea.value.substr(textarea.selectionEnd);
		caretPos = textarea.selectionEnd+start.length+end.length;
		if (force || text[1] != '') {
			textarea.value = text[0]+start+text[1]+end+text[2];
			if (textarea.setSelectionRange) {
				textarea.focus();
				textarea.setSelectionRange(caretPos, caretPos);
			}
			return true;
		}
	} else if (force) {
		// Just put it on the end.
		textarea.value += start+end;
		textarea.focus(textarea.value.length-1);
		return true;
	}
	return false;
}

function storeCaret(text) {
  if (text.createTextRange) text.caretPos = document.selection.createRange().duplicate();
}
