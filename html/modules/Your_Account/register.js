Poodle.onDOMReady(function()
{
	var uname = Poodle.$("register-username"), xhr;
	if (uname) {
		xhr = new PoodleXHR();
		xhr.label = uname.parent().$A("label");
//		uname.bind("blur", function(){xhr.post(Poodle.PATH+"xml-http.php", onComplete, "validate_username="+encodeURIComponent(uname.value))});
		uname.bind("blur", function(){xhr.post(uname.form.action, onComplete, "validate_username="+encodeURIComponent(uname.value))});
	}
	function onComplete(pxhr)
	{
		xhr.label.html(pxhr.xhr.responseText);
		xhr.label.className = (200 == pxhr.xhr.status)?"ok":"error";
	};
});
