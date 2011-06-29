/**	MOO CMS, Copyright (c) since 2005 The MOO Dev. Group. All rights reserved.
	$Revision: 1.3 $
*/
if(window.console&&window.console.warn)window.console.warn("Please use the new poodle.js instead of framework2.js");

var swfobject = null, $ga_id = null;

function $T(tagname, parentNode) { return (parentNode||document).getElementsByTagName(tagname); }

/** xbrowser events.
 * NOTE: IE html onclick="function(event, this)" and such you must forward "this" to this function!
 */
var Events =
{
	/** xbrowser add event listener */
	add: function(obj, type, fn, o) { obj.bind(type, o?fn.bind(o):fn) },
	remove: function(obj, type, fn) { obj.unbind(type, fn) },
	simulate: function(obj,type,b,c){ obj.trigger(type, {}, b, c) },
	addBeforeSubmit: function(obj,f){ obj.addEventBeforeSubmit(f) },
	stop: function(e, keepPropagation)
	{
		if (!e) { e = window.event; }
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
		if (!keepPropagation) { e.stopPropagation ? e.stopPropagation() : e.cancelBubble = true; }
		return false;
	},
	IE2DOM: function(e,o,exec)
	{
		// quirksmode.org/dom/events/index.html
		if (!e) { e = (o?o.$W():window).event; }
		e.target = e.srcElement;
		o = o ? o : e.target;
		// must be a NODE_ELEMENT or NODE_DOCUMENT
		while (o && 1 != o.nodeType && 9 != o.nodeType) { o = o.parentNode; }
		e.currentTarget = o;
		e.metaKey = e.ctrlKey;
		e.cancelable = true;
		e.preventDefault  = function(){this.returnValue = false;};
		e.stopPropagation = function(){this.cancelBubble = true;};
		e.pageX = 0;
		e.pageY = 0;
		e.relatedTarget = null;
		e.time = (new Date).getTime();
		e.which = 1;
		switch (e.type)
		{
		// quirksmode.org/js/events_mouse.html
		case "mouseout":  e.relatedTarget = e.toElement; break;
		case "mouseover": e.relatedTarget = e.fromElement; break;
		// quirksmode.org/js/keys.html
		case "keypress": e.which = e.charCode = e.keyCode; break;
		case "keydown":
		case "keyup": e.which = e.keyCode; e.charCode = 0; break;
		}
		if (e.wheelDelta) { e.detail = -event.wheelDelta/120*3; }
		// w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-MutationEvent
		if (e.propertyName) { e.attrName = e.propertyName.replace(/([^\.]+).*/, "$1"); } // propertychange vs DOMAttrModified
		if (o)
		{
			var doc = ((9 == o.nodeType) ? o : (o.document ? o.document : null));
			if (e.clientX != null && doc)
			{
				// might be 2px off
				var s = doc.getScrollPoint(),
					doce = doc.documentElement, // Standard
					body = doc.body;            // Quirks
				e.pageX = e.clientX + intval(doce.clientLeft||body.clientLeft) + s.x;
				e.pageY = e.clientY + intval(doce.clientTop ||body.clientTop ) + s.y;
			}
			if (exec) {
				var f=o.events[e.type], l=f.length, i=-1;
				while (++i<l) { if (f[i]) f[i](e); }
			}
		}
		return e;
	}
};
function addEvent(obj, type, fn, o) { Events.add(obj, type, fn, o); }
function removeEvent(obj, type, fn) { obj.unbind(type, fn); }
function stopEvent(e, keepPropagation) { return Events.stop(e, keepPropagation); }

var MOO =
{
	NS: null,
	HOST: null,
	PATH: null,
	TPL: null,
	JS_PATH: null,
	CSS_PATH: null,
	version: "$Revision: 1.3 $".replace(/[^0-9\.]+([0-9\.]+).*/, "$1"),

	base_uri:function() { return MOO.HOST+MOO.PATH; },

	init:function()
	{
		MOO.NS = document.documentElement.namespaceURI;
		MOO.msg.box = $("messagesbox");
		console.info("MOO JS Version:\t"+MOO.version);
		console.info("CSS media type:\t"+MOO.getCSSMediaType());
		console.info("Browser JS DOM:\t"+(window.Node ? "true" : "false"));
		console.info("XML namespace:\t"+(MOO.NS ? MOO.NS : "none"));
		if (swfobject) {
			var fv = swfobject.getFlashPlayerVersion();
			console.info("Flash: "+fv.major+"."+fv.minor+"."+fv.release);
		}
		MOO.init_paths();
		var x, y, z, rows, nodes = $T("tbody");
		for (x = 0; x < nodes.length; ++x) {
			if (hasClassName(nodes[x].parentNode, "fancy")) {
				rows = $T("tr", nodes[x]);
				for (y = 1; y < rows.length; y+=2) { rows[y].className = "s"; }
			}
		}
		nodes = $T("a");
		for (x = 0; x < nodes.length; ++x)
		{
			if (nodes[x].getAttribute("href") && MOO.strContains(nodes[x].getAttribute("rel"), "external"))
			{
				nodes[x].target = "_blank";
			}
		}
		if ($ga_id && defined(typeof(_gat)))
		{
			var pageTracker=_gat._getTracker($ga_id);
			pageTracker._trackPageview();
		}
		/** Force z-index due to bugs in IE 4-7 */
		if (window.trident3)
		{
			nodes = $T('div');
			z = 20*nodes.length;
			for (x = 0; x < nodes.length; ++x)
			{
				y = parseInt(MOO.getCSSPropertyValue(nodes[x],'z-index'));
				nodes[x].style.zIndex = (isNaN(y) || !y) ? z : y+z;
				z -= 20;
			}
		}
	},
	init_paths:function()
	{
		MOO.HOST = self.location.protocol+"//"+self.location.host;
		var x = (new RegExp("([^\"']*/)([^/]+\.php/)?css/([^/]+)/[^\"']*style")).exec($T("head")[0].innerHTML);
		x = x||["","/"];
		x[2] = x[2]||"";
		x[3] = x[3]||"default";
		if (!MOO.PATH) MOO.PATH = x[1];
		if (!MOO.CSS_PATH) MOO.CSS_PATH = x[1]+x[2]+"css/"+x[3]+"/";
		if (!MOO.JS_PATH) MOO.JS_PATH  = x[1]+x[2]+"js/";
		if (!MOO.TPL) MOO.TPL = x[3];
	},

	capsLock:function(e)
	{
		kc = e.keyCode||e.which;
		sk = e.shiftKey?e.shiftKey:(kc == 16);
		return (((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk));
	},
	key_numerical:function(e, o)
	{
		e = Events.IE2DOM(e, o);
		if ("keypress" != e.type) { return; }
		var kc = e.keyCode, cc = e.which; // e.charCode
		// unixpapa.com/js/key.html
		if (8 == kc || 9 == kc || 13 == kc || 35 == kc || 36 == kc || 37 == kc || 39 == kc || 46 == kc
		 || (!e.shiftKey && cc >= 48 && cc <= 57))
		{
			return true;
		}
		var n = e.currentTarget, v = intval(n.value?n.value:0);
		if (43 == cc) { n.value = v+1; }
		if (45 == cc) { n.value = v-1; }
		if (33 == kc) { n.value = v+10; }
		if (34 == kc) { n.value = v-10; }
	},

	getElementsByClassName:function(cn,t,p){return (p||Poodle.$B().parentNode).getNodesByClassName(cn,t)},
	getFormInputsByType:function(t,f){return f.getInputsByType(t)},
	addNodeAfter:function(n,r){return n.after(r)},
	/** find element by name */
	getNodeByName:function(name,tag,o)
	{
		var i, n = $T(tag||"input", o);
		for (i=0;i<n.length;++i) { if (n[i].name==name) { return n[i]; } }
	},
	getNodeHasFixed:function(o){return o.hasFixedPosition()},
	getBoundingClientRect:function(n){return n.getBoundingClientRect()},
	getNodeBoundingRect:function(n,s){return n.getBoundingRect(s)},
	getNodeAbsLeft:function(o,s){return o.getBoundingLeft(s)},
	getNodeAbsTop:function(o,s){return o.getBoundingTop(s)},
	getNodeName:function(o){return o.getName()},
	getNodeClass:function(o){return o.getClass()},
	setNodeClass:function(o,v){o.setClass(v)},
	appendNodeHTML:function(o,v){return o.appendHTML(v)},
	cleanNodeHTML:function(o){return o.html("")},
	setNodeHTML:function(o,v){return o.html(v)},
	getNextNode:function(o,s){return s?o.getNextByNodeName():o.next()},
	getPrevNode:function(o,s){return s?o.getPrevByNodeName():o.prev()},
	getRChildNode:function(o,t,r,m){return o.getRChildNode(t,r,m)},
	getMousePos:function(e,n){return n.getMousePos(e)},
	getDocScroll:function(doc){return (doc?doc:document).getScrollPoint()},
	strContains:function(src,str){return (src&&src.contains(str))},
	getRenderMode:function()
	{
		var m=document.compatMode;
		return (m=='BackCompat' ? 'Quirks' : (m=='CSS1Compat' ? 'Standards Compliance' : m));
	},
	getCSSMediaType:function(){return Poodle.getCSSMediaType()},
	getCSSPropertyValue:function(o, rule)
	{
		try {
			var win = o.$W();
			if (win && win.getComputedStyle)
			{
				return win.getComputedStyle(o, "").getPropertyValue(rule);
			}
			if (o.currentStyle)
			{
				return o.currentStyle[rule.replace(/\-(\w)/g, function(strMatch, p1){return p1.toUpperCase();})];
			}
		} catch (e) {}
		return null;
	},
	$C:function(d,n,a){return d.$C(n,a)}
};

MOO.msg =
{
	box : null,
	error : function(msg) { return this.show(msg, "error"); },
	loading : function(msg) { return this.show(msg, "loading"); },
	ok : function(msg) { return this.show(msg, "ok", 10); },
	apply : function(msg) { this.show(msg, 'apply'); },
	warning : function(msg) { this.show(msg, "warning"); },
	show : function(msg, type, close)
	{
		var n, o;
		if (o = this.box) {
			n = $C("div", {className:type, innerHTML:msg});
			Events.add(n, "click", this.close.bind(this));
			o.appendChild(n);
			o.style.visibility = "visible";
			if (close) { setTimeout(function(){MOO.msg.close(n)}, close*1000); }
			return n;
		}
	},
	close : function(n)
	{
		if (this.box) {
			n = n.currentTarget?n.currentTarget:n;
			var o = n.parentNode;
			if (o) {
				try { o.removeChild(n); } catch (e) {}
				if (!o.hasChildNodes() && o.style) { o.style.visibility = "hidden"; }
			}
		}
	}
};

MOO.rectangle = PoodleRect;

MOO.Resizer = function(o, w, h, wo, ho)
{
	/** public */
	this.obj = o;
	this.w_obj = wo;
	this.h_obj = ho;
	this.min_w = w;
	this.min_h = h;
	this.getCursor = function(e, o)
	{
		var c = "";
		if (o == this.obj)
		{
			var p = MOO.getMousePos(e, o);
			if (p.x >= 0 && p.x < o.offsetWidth
			 && p.y >= 0 && p.y < o.offsetHeight)
			{
				if (this.h_obj && p.y > o.offsetHeight-10) { c = "s"; }
				if (this.w_obj && p.x > o.offsetWidth-10) { c = "e"; }
				if (this.h_obj && this.w_obj && p.x > o.offsetWidth-20 && p.y > o.offsetHeight-20) { c = "se"; }
			}
		}
		return c;
	};
	// mousecursor
	this.hover = function(e)
	{
		if (!MOO.mouseOffset)
		{
			var o = this.obj,
			    s = document.$B().style,
			    c = this.getCursor(e, e.currentTarget);
			if (c) { c += "-resize"; }
			if (c != o.cursor || c != s.cursor) {
				s.cursor = o.cursor = c;
				stripClassName(o, "[se]+\-resize");
				if ("" != c) { addClassName(o, c); }
			}
			Events.stop(e);
		}
	};
	this.onmousedown = null;
	this.mousedown = function(e)
	{
		if (!this.getCursor(e, e.currentTarget)) return;
		var w = 0, h = 0, wo = this.w_obj, ho = this.h_obj;
		if (wo) {
		    w = wo.clientWidth
			  - intval(MOO.getCSSPropertyValue(wo, "padding-left"),0)
			  - intval(MOO.getCSSPropertyValue(wo, "padding-right"),0);
		}
		if (ho) {
		    h = ho.clientHeight
			  - intval(MOO.getCSSPropertyValue(ho, "padding-top"),0)
			  - intval(MOO.getCSSPropertyValue(ho, "padding-bottom"),0);
		}
		MOO.mouseOffset = new PoodlePoint(e.pageX-w, e.pageY-h);
		var d = document;
		d.old_onmousemove = d.onmousemove;
		d.old_onmouseup = d.onmouseup;
		d.onmousemove = this.mousemove.bind(this);
		d.onmouseup = this.mouseup.bind(this);
		if (this.onmousedown) this.onmousedown(e);
		Events.stop(e);
	};
	this.onresize = null;
	this.mousemove = function(e)
	{
		if (MOO.mouseOffset)
		{
			e = e||Events.IE2DOM(e,this.obj);
			var ws = (this.w_obj?this.w_obj:this.obj).style,
			    hs = (this.h_obj?this.h_obj:this.obj).style,
			    s = new PoodlePoint(e.pageX-MOO.mouseOffset.x, e.pageY-MOO.mouseOffset.y),
			    m = this.obj.cursor.replace("-resize","");
			if (this.onresize) this.onresize(e, s, m);
			s.x = Math.max(this.min_w, s.x);
			s.y = Math.max(this.min_h, s.y);
			// set the new size
			switch (m)
			{
			case "e": ws.width  = s.x+"px"; break;
			case "s": hs.height = s.y+"px"; break;
			case "se": hs.height = s.y+"px"; ws.width = s.x+"px"; break;
			}
			Events.stop(e);
		}
	};
	this.onmouseup = null;
	this.mouseup = function(e)
	{
		if (MOO.mouseOffset)
		{
			e = e||Events.IE2DOM(e,this.obj);
			var d = document;
			d.onmousemove = d.old_onmousemove;
			d.onmouseup = d.old_onmouseup;
			d.$B().style.cursor = "";
			MOO.mouseOffset = null;
			if (this.onmouseup) this.onmouseup(e);
			Events.stop(e);
		}
	};

	Events.add(o, "mouseout", this.hover, this);
	Events.add(o, "mousemove", this.hover, this);
	Events.add(o, "mousedown", this.mousedown, this);
};

function hasClassName(o,n) { console.warn("hasClassName(o, name) deprecated, use o.hasClass(name)"); return o.hasClass(n); }
function addClassName(o,n) { console.warn("addClassName(o, name) deprecated, use o.addClass(name)"); o.addClass(n); }
function replaceClassName(o,f,t) { console.warn("replaceClassName(o, from, to) deprecated, use o.replaceClass(from, to)"); o.replaceClass(f,t); }
function stripClassName(o,n) { console.warn("stripClassName(o, name) deprecated, use o.removeClass(name)"); o.removeClass(n); }

/** CMS stuff */

function switch_display(o) { if (o = $(o)) { o.style.display = ("none" == o.style.display) ? "" : "none"; } }

function switch_title(obj) { obj.title = obj.options[obj.selectedIndex].title; }

function switch_visibility(o, sender)
{
	if (!(o = $(o))) { return; }
	if ("collapse" == o.style.visibility || "none" == o.style.display) {
		if ("collapse" == o.style.visibility) { o.style.visibility = "visible"; }
		else { o.style.display = ""; }
		if (sender) { sender.className = sender.className.replace("collapsed", "expanded"); }
	} else {
		try { o.style.visibility = "collapse"; }
		catch (e) { o.style.display = "none"; }
		if (sender) { sender.className = sender.className.replace("expanded", "collapsed"); }
	}
}

var onDomLoad = {addEvent:function(fn,o){Poodle.onDOMReady(o?fn.bind(o):fn)}};
Poodle.onDOMReady(function(){MOO.init()});

function extendWithClass(descendant,target){extendWithFunction(descendant.toString().replace(/(^[^{]+{|}\s*$)/g, ""), target)}
function extendWithFunction(descendant,target){eval(target.toString().replace(/}\s*$/, descendant.toString()+'}').replace(/^\s*function\s*([^\(\)]*)\(/, '$1 = function(')+";")}
