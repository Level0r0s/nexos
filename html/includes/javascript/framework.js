/**
* MOO CMS
* Copyright (c) 2005 by CPG-Nuke Dev Team, moocms.com
* $Id: framework.js,v 1.7 2010/04/18 15:23:35 djmaze Exp $
*/

/* xbrowser find event */
function getEvent(e) {
	console.warn("getEvent(e) deprecated");
	return e||window.event;
}
/* xbrowser find event fired element */
function getEventNode(e)
{
	if (!e)  { e = window.event; }
	if (e.nodeType && (e.nodeType == 1 || e.nodeType == 9)) return e; // NODE_ELEMENT or NODE_DOCUMENT
	var o = (e.currentTarget ? e.currentTarget : e.srcElement);
	//if (o.nodeType == 3) { o = (o.parentNode ? o.parentNode : o); } // Safari
	// must be a NODE_ELEMENT or NODE_DOCUMENT
	while (o && !(o.nodeType == 1 || o.nodeType == 9)) { o = o.parentNode; }
	return o;
}
/* xbrowser add event listener */
function addEvent(obj, type, fn) {
	console.warn("addEvent(obj, type, fn) deprecated, use obj.bind(type, fn)");
	obj.bind(type, fn);
}
function removeEvent(obj, type, fn)
{
	console.warn("addEvent(obj, type, fn) deprecated, use obj.unbind(type, fn)");
	obj.unbind(type, fn);
}

/* find input element by name */
function getElementByName(o,name,tag)
{
	console.warn("getElementByName(o,name,tag) deprecated, use form.getFieldByName(name,tag)");
	return o.getFieldByName(name,tag);
}

function getElementLeft(o)
{
	console.warn("getElementLeft(o) deprecated, use o.getBoundingPageX()");
	return o.getBoundingPageX();
}
function getElementTop(o, stopat)
{
	console.warn("getElementLeft(o) deprecated, use o.getBoundingPageX()");
	return o.getBoundingPageY();
}
function getPrevNode(o, same) { return same ? o.getPrevByNodeName(o.nodeName) : o.prev(); }
function getNextNode(o, same) { return same ? o.getNextByNodeName(o.nodeName) : o.next(); }
function getRChildNode(o, type, r, min)
{
	console.warn("getRChildNode(o, type, r, min) deprecated, use o.getRChildNode(type, r, min)");
	return o.getRChildNode(type, r, min);
}
function insertAfter(parent, node, refNode)
{
	console.warn("insertAfter(parent, node, refNode) deprecated, use refNode.after(node) or parent.insertAfter(node, refNode)");
	return parent.insertAfter(node, refNode);
}
function getWindowScroll()
{
	console.warn("getWindowScroll() deprecated, use document.getScrollPoint().y");
	return document.getScrollPoint().y;
}
function mousePos(e){
	return {
		x:(e.pageX?e.pageX:e.clientX+document.body.scrollLeft-(document.body.clientLeft?document.body.clientLeft:0)),
		y:(e.pageY?e.pageY:e.clientY+document.body.scrollTop -(document.body.clientTop?document.body.clientTop:0))
	};
}

/* CMS stuff */

function show_tab(o)
{
	o = o.parentNode;
	var items = o.parentNode.getElementsByTagName('li');
	for (var i=0; i<items.length; ++i) {
		if (items[i].className.indexOf(' current') > 0) {
			items[i].className=items[i].className.substr(0,items[i].className.indexOf(' current'));
		}
	}
	o.className += ' current';
}

function inputnumeral(e)
{
	e = e||window.event;
	var kc = e.keyCode;
	getEventNode(e).onkeyup = inputnumeral;
	return (kc == 8 || kc == 46 || kc == 37 || kc == 39 || (!e.shiftKey && ((kc >= 48 && kc <= 57) || (kc >= 96 && kc <= 105))));
}

function switch_title(obj)
{
	obj.title = obj.options[obj.selectedIndex].title;
}

function expand(sender, o)
{
	o = $(o);
	if (!o) return;
	if (o.style.visibility == 'collapse' || o.style.display == 'none') {
		if (o.style.visibility == 'collapse') { o.style.visibility = 'visible'; }
		else { o.style.display = ''; }
		sender.className = sender.className.replace('collapsed', 'expanded');
	} else {
		try { o.style.visibility = 'collapse'; }
		catch (e) { o.style.display = 'none'; }
		sender.className = sender.className.replace('expanded', 'collapsed');
	}
}

var msgBox = {
	box : null,
	el : null,
	loading : function(msg) { return msgBox._new(msg, 'loading'); },
	error : function(msg) { return msgBox._new(msg, 'error'); },
	ok : function(msg) { return msgBox._new(msg, 'ok'); },
	apply : function(msg, el) { msgBox.el = el; return msgBox._new(msg, 'apply', el); },
	_new : function(msg, type, el)
	{
		if (!msgBox.box) { msgBox.box = $('messagesbox'); }
		if (type == 'apply' && msgBox.box.hasChildNodes()) { return true; }
		var item = document.createElement('div');
		item.className = type;
		item.innerHTML = msg;
		item.onclick   = msgBox.remove.bind(this);
		msgBox.box.appendChild(item);
		msgBox.box.style.display = 'block';
		return item;
	},
	remove : function(e)
	{
		if (typeof(msgBox.el) == 'string') {
			return $(msgBox.el).submit();
		}
		if (!msgBox.box) { msgBox.box = $('messagesbox'); }
		try {
			msgBox.box.removeChild(getEventNode(e));
		} catch (e) {}
		if (!msgBox.box.hasChildNodes()) { msgBox.box.style.display = 'none'; }
	}
}
