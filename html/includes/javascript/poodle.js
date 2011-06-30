/*	Poodle WCMS, Copyright (c) since 2005 The Poodle Dev. Group. All rights reserved.

	This source file is free software; you can redistribute it and/or
	modify it under the terms of the Poodle Public License as published
	by the Poodle Development Group; either version 1.1 of the License, or
	(at your option) any later version.

	$Revision: 1.14 $

	http://yura.thinkweb2.com/named-function-expressions/
	http://peter.michaux.ca/articles/an-important-pair-of-parens
*/

var $LNG = new Array();
function _(txt) { return ($LNG[txt] ? $LNG[txt] : txt); }

/**
 * PHP Alike
 */

function defined(v)    { var d; return d !== v; }
function is_function(v){ return typeof v === "function" && (!Function.prototype.call || typeof v.call === "function"); } // IE seems to think that some functions are objects rather than functions
function is_number(v)  { return typeof v === "number" && isFinite(v); }
function is_object(v)  { return typeof v === "object"; }
function is_string(v)  { return typeof v === "string"; }
/*
function is_bool(v)    { return typeof v === "boolean"; }
function is_numeric(v) { return is_number(v) || (is_string(v) && '' !== v.trim() && !isNaN(v)); }
function is_int(v)     { return is_number(v) && !(v % 1); }
function is_float(v)   { return is_number(v) && !!(v % 1); }
function is_null(v)    { return null === v; }
function is_array(v)   { return v instanceof Array; }
*/
//ENT_HTML_QUOTE_NONE   = 0;
//ENT_HTML_QUOTE_SINGLE = 1;
//ENT_HTML_QUOTE_DOUBLE = 2;
ENT_NOQUOTES = 0;
ENT_COMPAT   = 2;
ENT_QUOTES   = 3;
htmlspecialchars = (function(de,se,gt,lt,sq,dq){
	return function(str, quote_style, double_encode)
	{
		str = (""+str)
			.replace((!defined(double_encode)||double_encode)?de:se,'&amp;')
			.replace(gt,'&lt;')
			.replace(lt,'&gt;');
		if (!is_number(quote_style)) { quote_style = 2; }
		if (quote_style & 1) { str = str.replace(sq,'&#039;'); }
		return (quote_style & 2) ? str.replace(dq,'&quot;') : str;
	}
})(/&/g,/&(?![\w\#]+;)/gi,/</g,/>/g,/'/g,/"/g /*"'*/);

strip_tags = (function(m){
	return function(str) { return str.replace(m, '').trim(); }
})(/<\s*\/?\s*(\w+|!)[^>]*>/gi);

function floatval(v, def)
{
	var i = parseFloat(v);
	return isFinite(i)?i:def?def:0.0;
}

function intval(v, d) { return Math.round(floatval(v, d)) }

/**
 * Initialize Poodle DOM
 */

(function(){

function lc(v){return v.toLowerCase()}

var version = "$Revision: 1.14 $"
	.replace(/[^0-9\.]+([0-9\.]+).*/, "$1")
,doc = document
,emptyTags = /^(area|base|br|col|hr|img|input|link|meta|param)$/i
,fbug=["assert","debug","error","info","log","profile","profileEnd","warn" // firebug/WebKit
      ,"count","dir","dirxml","group","groupEnd","time","timeEnd","trace"] // firebug
,i
,nav = navigator
,ua  = {ie:0/*@cc_on +(document.documentMode||@_jscript_version*10-50)@*/}
,win = window
,DCL = "DOMContentLoaded"
,DFCL = "DOMFrameContentLoaded"
// http://www.w3.org/TR/html5-diff/
,HTML5 = "article,aside,audio,canvas,command,datalist,details,figcaption,figure,footer,header,hgroup,keygen,mark,menu,meter,nav,output,progress,section,time,video".split(',')
,cssFloat = "cssFloat"
,cssPrefix = ""
,dom_events = {
	/**
	 * http://en.wikipedia.org/wiki/DOM_events
	 * http://www.quirksmode.org/dom/events/
	 * http://www.w3.org/TR/DOM-Level-3-Events/
	 * http://www.w3schools.com/html5/html5_ref_eventattributes.asp
	 * event: [Bubbles, Cancelable]
	 */
	// Mouse
	 click:     [1, 1]
	,dblclick:  [1, 1]
	,mousedown: [1, 1]
	,mouseenter:[0, 1]
	,mouseleave:[0, 1]
	,mouseup:   [1, 1]
	,mouseover: [1, 1]
	,mousemove: [1, 0]
	,mouseout:  [1, 1]
	,mousewheel:[1, 1]
	// Mouse HTML 5
	,DOMMouseScroll:[0, 0]
	,contextmenu:[1, 1]
	,drag:       [1, 1]
	,dragend:    [1, 1]
	,dragenter:  [1, 1]
	,dragleave:  [1, 1]
	,dragover:   [1, 1]
	,dragstart:  [1, 1]
	,drop:       [1, 1]
	,selectstart:[1, 1] // IE, css -moz-user-select:none
	// Keyboard
	,keydown:   [1, 1]
	,keypress:  [1, 1]
	,keyup:     [1, 1]
	// Text Events
	,textInput: [1, 1]
	// HTML frame/object
	,load:      [0, 0]
	,unload:    [0, 0]
	,abort:     [1, 0]
	,error:     [1, 0]
	,resize:    [1, 0]
	,scroll:    [1, 0]
	// HTML form
	,select:    [1, 0]
	,change:    [1, 0]
	,submit:    [1, 1]
	,reset:     [1, 0]
	,formchange:[0, 0]
	,forminput: [0, 0]
	,input:     [0, 0]
	,invalid:   [0, 0]
	// User interface
	,DOMActivate: [1, 1] // DOMActivate, IE's onactivate & Gecko oncommand are similar
	,focus:     [0, 0]
	,focusin:   [1, 0]
	,focusout:  [1, 0]
	,blur:      [0, 0]
	// Mutation
	,DOMSubtreeModified:          [1, 0]
	,DOMNodeInserted:             [1, 0]
	,DOMNodeRemoved:              [1, 0]
	,DOMNodeRemovedFromDocument:  [0, 0]
	,DOMNodeInsertedIntoDocument: [0, 0]
	,DOMAttrModified:             [1, 0] // IE's onpropertychange is similar
	,DOMCharacterDataModified:    [1, 0]
	// Firefox, Opera 9+ & Safari 3.1+
	,DOMContentLoaded:      [0, 0]
	,DOMFrameContentLoaded: [0, 0]
	// Mutation Name
	,DOMAttributeNameChanged: [0, 0]
	,DOMElementNameChanged:   [0, 0]
	/** HTML 5 */
	,hashchange: [1, 1]
	,message:    [0, 1]
	/** IE's events */
	,selectstart: [1, 1] // css -moz-user-select:none
};

/**
 * getfirebug.com
 */

if (win.loadFirebugConsole) loadFirebugConsole();
if (!win.console) win.console = {};
function alertError(e){
	var msg = (e.name?e.name+": ":"")+(e.message?e.message:e);
	if (e.fileName||e.sourceURL) { msg += "\n\n@"+(e.fileName||e.sourceURL)+"#"+(e.lineNumber||e.line); } // Gecko||WebKit
	alert(msg);
}
for (i=0;i<fbug.length;++i) {
	if (!console[fbug[i]]) try {
		console[fbug[i]] = win.debug ? debug : (2==i ? (win.opera && win.opera.postError ? opera.postError : alertError) : function(){});
	} catch (e) {}
}

/**
 * Browser Detection
 * Reference: howtocreate.co.uk/tutorials/jsexamples/sniffer.html
 */

if (win.opera) { ua.opera=opera.version?floatval(opera.version()):true; cssPrefix = "-o-"; }
else if (ua.ie) { ua.trident3 = 8>ua.ie; if(8>doc.documentMode){alert("Please turn off IE"+ua.ie+" Compatibility View")}; cssPrefix = "-ms-"; }
else {
	var v = floatval((nav.userAgent.match(/(?:KHTML|WebKit|Gecko)\/([\d\.]+)/i)||[0,0])[1]);
	if ("KDE" == nav.vendor) { ua.khtml = v||3; cssPrefix = "-khtml-"; }
	else if (doc.childNodes && !doc.all && !nav.taintEnabled /*&& !accentColorName*/) { ua.webkit = v||1; cssPrefix = "-webkit-"; }
	else if (doc.getBoxObjectFor != null || v) { ua.gecko = intval(v); cssPrefix = "-moz-"; }
}
ua[lc((nav.platform.match(/Mac|Win|Linux|BSD|SunOS/i) || ["other"])[0])] = true;
ua.dom = !!win.Element; // Node not supported by IE8
ua.html5 = "onhashchange" in win && !ua.trident3;

/**
 * Event Handling
 */

function bindEvent(type, listener)
{
	if (lc(DCL) == lc(type)) { Poodle.onDOMReady(listener); }
	else {
		if ("beforesubmit" == type) { this.addEventBeforeSubmit(listener); return; }
		if ("submit" == type) { this.addEventBeforeSubmit(); }
		this.addEventListener(type, listener, false);
		if (!dom_events[type]) { console.log("Custom Event type: "+type); }
 		if ("hashchange" == type && !ua.html5) { simulate_hashchange.start(); }
	}
	return this;
}

function unbindEvent(type, listener)
{
	this.removeEventListener(type, listener, false);
	return this;
}

function simulateEvent(type, props, bubbles, cancelable)
{
	var evt, doc=this.$D();
	if (dom_events[type]) {
		bubbles    = 0<dom_events[type][0];
		cancelable = 0<dom_events[type][1];
	} else {
		bubbles = (3>arguments.length||bubbles)?true:false;
		cancelable = (4>arguments.length||cancelable)?true:false;
	}
	if (doc.createEvent) {
		evt = doc.createEvent("HTMLEvents");
		evt.initEvent(type, bubbles, cancelable);
		this.dispatchEvent(extendDOM(evt, props));
	} else {
		console.error("Can't simulate "+type+" event");
	}
	return this;
}

function beforeSubmit(e) { e.target.beforesubmit.callFunctions(e, this); }

// simulate_hashchange does all the work of triggering the window.onhashchange
// event for browsers that don't natively support it, including creating a
// polling loop to watch for hash changes and in IE 6/7 creating a hidden
// Iframe to enable back and forward.
var simulate_hashchange = (function(){
	var timer, iframe, set_history, get_history, re_hash = /^[^#]*#?(.*)$/;
	function get_hash(url) { return (url || window.location.href).replace(re_hash, '$1'); }
	// Initialize. In IE 6/7, creates a hidden Iframe for history handling.
	function init() {
		// Most browsers don't need special methods here..
		set_history = get_history = function(val){ return val; };
		// But IE6/7 do!
		if (ua.trident3) {
			// Create hidden Iframe after the end of the body to prevent initial
			// page load from scrolling unnecessarily.
			iframe = doc.$B().$A('iframe',{src:"javascript:0",style:{display:"none"}}).contentWindow;
			// Get history by looking at the hidden Iframe's location.hash.
			get_history = function() { return get_hash(iframe.document.location.href); };
			// Set a new history item by opening and then closing the Iframe
			// document, *then* setting its location.hash.
			set_history = function(hash, history_hash) {
				if (hash !== history_hash) {
					var doc = iframe.document;
					doc.open().close();
					doc.location.hash = '#' + hash;
				}
			};
			// Set initial history.
			set_history(get_hash());
		}
	};
	return {
		start: function() {
			if (!timer) {
				// Remember the initial hash so it doesn't get triggered immediately.
				var last_hash = get_hash();
				// Initialize if not yet initialized.
				set_history || init();
				// This polling loop checks every $.hashchangeDelay milliseconds to see if
				// location.hash has changed, and triggers the 'hashchange' event on
				// window when necessary.
				timer = setInterval(function(){
					var hash = get_hash(), history_hash = get_history(last_hash);
					if (hash !== last_hash) {
						set_history(last_hash = hash, history_hash);
						win.trigger("hashchange");
					} else if (history_hash !== last_hash) {
						window.location.href = window.location.href.replace(/#.*/, '') + '#' + history_hash;
					}
				}, 100);
			}
		},
		stop: function() {
			if (!iframe) {
				timer && clearInterval(timer);
				timer = 0;
			}
		}
	};
})();

/**
 * Helper functions
 */

function extendDOM(obj, elements)
{
	if (obj && is_object(elements)) {
		var k, o;
		for (k in elements)
		try {
			if (!(k in obj || (obj.hasOwnProperty && obj.hasOwnProperty(k))))
			{
				o = elements[k];
				if (is_object(o) && ("value" in o || "get" in o || "set" in o)) {
					console.info('defineProperty: '+k);
					Object.defineProperty(obj, k, o);
				} else {
					obj[k] = o;
				}
			}
		} catch (e) { console.error(e); }
	}
	return obj;
}

/** Object extending. extend() is used by Selection object */
function extendNode(target, obj)
{
	if (obj) {
		if (!is_object(obj)) { obj = new obj }
		// copy properties
		var k, v;
		for (k in obj) {
			v=obj[k];
			// Skip prototype additions
			if (v != Object.prototype[k]) {
				try { switch (k) {
					case "class":
					case "className": target.setClass(v); break;
					case "for":
					case "htmlFor":   target.attr("for", v); break;
					case "cssText":   target.attr("style", v); break;
					case "innerHTML": target.html(v); break;
					case "style":     extendObj(target.style, v); break;
					default:
						if (0 === k.indexOf("on") && dom_events[k.substr(2)] && is_function(v) && target.bind) {
							target.bind(k.substr(2), v);
						} else {
							target[k] = v;
						}
				} } catch (e) {} // IE or read-only
			}
		}
	}
	return target;
}

function extendObj(target, obj, ignoreProto)
{
	if (obj) {
		if (!is_object(obj)) { obj = new obj };
		var k, v;
		for (k in obj) {
			v=obj[k];
			// Skip prototype additions?
			if (ignoreProto || v !== Object.prototype[k]) {
				try {
					target[k] = is_object(v) ? extendObj(target[k], v, ignoreProto) : v;
				} catch (e) {} // IE or read-only
			}
		}
	}
	return target;
}

var CSS = [];
function createCSS(rule, media, newStyle)
{
	var m = is_string(media) ? media : "screen";
	if (newStyle || !CSS[m]) { CSS[m] = doc.$H().$A("style",{type:"text/css",media:m}); CSS[m] = CSS[m].sheet||$IE7(CSS[m].styleSheet) }
	if (CSS[m]) { CSS[m].insertRule(rule, CSS[m].cssRules.length); }
}

function cssrule(r)
{
	return r=="float"?cssFloat:r.replace(/\-(\w)/g, function(d,m){return m.toUpperCase()});
}

/**
 * ECMAScript 5
 */
if (!Object.defineProperty)
Object.defineProperty = function(o, p, d) {
	var hasOwnProp = Object.prototype.hasOwnProperty;
	if (hasOwnProp && is_object(d)) {
		if (hasOwnProp.call(d, "value")) {
			if (!(o.__lookupGetter__ && o.__lookupGetter__(p)) && !(o.__lookupSetter__ && o.__lookupSetter__(p)))
				o[p] = d.value; // data property defined and no pre-existing accessors
			if ((hasOwnProp.call(d, "get") || hasOwnProp.call(d, "set"))) // descriptor has a value prop but accessor already exists
				throw new TypeError("Object doesn't support this action"); // exactly what IE throws
		}
/*
		// can't implement these features, allow false but not true
		if (!(hasOwnProp.call(d, "writable")? d.writable : 1)
		 || !(hasOwnProp.call(d, "enumerable")? d.enumerable : 1)
		 || !(hasOwnProp.call(d, "configurable")? d.configurable : 1)
		) throw new RangeError("This implementation of Object.defineProperty does not support configurable, enumerable, or writable.");
		//Message: 'writable' attribute on the property descriptor cannot be set to 'true' on this object
*/
		if (is_function(d.get) && o.__defineGetter__) o.__defineGetter__(p, d.get);
		if (is_function(d.set) && o.__defineSetter__) o.__defineSetter__(p, d.set);
	}
	return o;
};
if (!Object.getOwnPropertyDescriptor)
Object.getOwnPropertyDescriptor = function(o, p){
	return {
		get:o.__lookupGetter__?o.__lookupGetter__(p):null,
		set:o.__lookupSetter__?o.__lookupSetter__(p):null
	}
};

/**
 * HTML5 DOMTokenList
 */
function createDOMTokenList(obj, prop)
{
	var c = obj[prop].trim();
	// Simulate DOMTokenList
	function getIndex(a, token) {
		if ("" === token) { throw "SYNTAX_ERR"; }
		if (/\s/.test(token)) { throw "INVALID_CHARACTER_ERR"; }
		return a.indexOf(token);
	}
	function setAttr(a){ obj[prop] = a.join(" ") }
	c = c.length?c.split(/\s+/):[];
	c.contains = function(token) { return -1 !== getIndex(this, token) };
	c.add = function(token) {
		if (!this.contains(token)) {
			this.push(token);
			setAttr(this);
		}
	};
	c.remove = function(token) {
		var i = getIndex(this, token);
		if (-1 !== i) {
			this.splice(i, 1);
			setAttr(this);
		}
	};
	c.toggle = function(token) {
		var a = !this.contains(token);
		a ? this.add(token) : this.remove(token);
		return a;
	};
	c.toString = function() { return obj[prop] };
	return c;
}

/**
 * Internet Explorer, and other old browsers
 */

function $IE7(o){return o}
if (!ua.dom)
{
	/** Override default methods to allow extending */
	function IE7_Override(o)
	{
		function IE7_Attr(k)
		{
			return ua.trident3 ? ("for"===k ? "htmlFor" : ("class"===k ? "className" : ("style"===k ? "cssText" : k))) : k;
		}

		var override=["getAttribute","removeAttribute","setAttribute","createElement","getElementById","getElementsByName","getElementsByTagName","createTHead","createTFoot","createCaption","insertRow","insertCell"],i=-1,fn;
		while (fn = override[++i]) {
			if (o[fn]) try {
				o[fn] = (function(f,i){
					if (2>i){return function(a){return f(IE7_Attr(a))}}
					// http://reference.sitepoint.com/javascript/Element/setAttribute
					if (2==i){return function(a,v){this[(a=IE7_Attr(a))]=v;f(a,v)}}
					return function(a,no){var r=defined(a)?f(a):f(); return no?r:$IE7(r)}
				})(o[fn],i);
			} catch(e){}
		}
		return o;
	}

	$IE7 = function(o) {
		if (o) {
			// must be a NODE_ELEMENT
			if (1 == o.nodeType) {
				if (!defined(o.lowerName)) {
					IE7_Override(extendDOM(o, win.HTMLElement.prototype));
					if (o.style) { extendDOM(o.style, win.CSSStyleDeclaration.prototype); }
				}
				if (!defined(o.classList)) { o.classList = createDOMTokenList(o, "className"); }
				var n=o.lowerName();
				if (!o.getFieldByName && "form" == n) { extendDOM(o, win.HTMLFormElement.prototype); }
				if (!o.$Doc && "object" == n) { extendDOM(o, win.HTMLObjectElement.prototype); }
				if (!o.$Doc && "iframe" == n) { extendDOM(o, win.HTMLIFrameElement.prototype); }
				if ("style" == n) { extendDOM(o, win.HTMLStyleElement.prototype); }
			}

			if (defined(o.rules)) {
				o.cssRules  = o.rules;
				o.ownerNode = o.owningElement;
				extendDOM(o, win.CSSStyleSheet.prototype);
			} else if (o.length && defined(o[0])) {
				for (var i=0; i<o.length; ++i) { $IE7(o[i]) }
			}
		}
		return o;
	};
}

/**
 * ProgID is one of: DOMDocument, FreeThreadedDOMDocument, MXHTMLWriter,
 * MXNamespaceManager, MXXMLWriter, SAXAttributes, SAXXMLReader,
 * ServerXMLHTTP, XMLHTTP, XMLSchemaCache, XSLTemplate
 *
 * blogs.msdn.com/xmlteam/archive/2006/10/23/using-the-right-version-of-msxml-in-internet-explorer.aspx
 */
function MSXML(ProgID)
{
	try { return new ActiveXObject("Msxml2."+ProgID+".6.0"); }catch(e){} // Vista / Windows 7
	try { return new ActiveXObject("Msxml2."+ProgID); }catch(e){console.error(e)}
	return null;
};

/**
 * W3C DOM
 */
function $B()    { return this.$D().$B() }
function $C(t,a) { return this.$D().$C(t,a) }
function $T(name){ return this.getElementsByTagName(name) }
if (ua.trident3) $T = function(name){ return this.getElementsByTagName(name,arguments[1])};
/** http://www.w3.org/TR/selectors-api/ */
function $Q(expr,one)
{
	var qs = one?"querySelector":"querySelectorAll";
	if (this[qs]) try { return this[qs](expr) }catch(e){}
	return new PoodleSelector(expr).exec(this, one);
}
/** https://developer.mozilla.org/en/XPath, could define getElementsByXPath() */
function $X(expression, altfn)
{
	if (!this.$D().evaluate) { return is_function(altfn)?altfn.call(this):false; }
	var n, result = [],
		q = this.$D().evaluate(expression, this, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null);
	while (n = q.iterateNext()) result.push(n);
	return $IE7(result);
}
function contentDoc() { try { return this.contentDocument || this.contentWindow.document }catch(e){}; }
function gEBCN(cn)
{
	cn = cn.split(/\s+/);
	var expr = "contains(concat(' ', @class, ' '), ' ";
	return this.$X(".//*["+expr+cn.join(" ') and "+expr)+" ')]", function(){
		var i = -1, result = [], s = this.$T("*",1), re = new RegExp("(?:^|\\s)(" + cn.join("|") + ")(?:\\s|$)"), m;
		while (s[++i]) {
			m = s[i].className.replace(/\s/g,"  ").match(re);
			if (m && m.length >= cn.length) result.push($IE7(s[i]));
		}
		return result;
	});
}

var DOM = {

	CSSStyleSheet: {
		/** Make Firefox compatible to others non-W3C */
		rules:  {get:function(){return this.cssRules}},
		cssText:{get:function(){return this.ownerNode.innerHTML}, set:function(txt){this.ownerNode.appendChild(this.ownerNode.$D().createTextNode(txt))}}
	},
	CSSStyleDeclaration: {},

	/** http://www.w3.org/TR/cssom-view/#clientrect */
	ClientRect: {
		contains:  function(p){return this.containsX(p.x) && this.containsY(p.y)},
		containsX: function(x){return x>=this.left && x<this.right},
		containsY: function(y){return y>=this.top && y<this.bottom}
	},

	Node: {
		lowerName: function(){return lc(this.nodeName)}
		,parent: function(){return $IE7(this.parentNode)}
		,next:   function(){return $IE7(this.nextSibling)}
		,prev:   function(){return $IE7(this.previousSibling)}
		,first:  function(){return $IE7(this.firstChild)}
		,last:   function(){return $IE7(this.lastChild)}

		,insertAfter: function(node, ref) { return this.insertBefore(node, ref.next()); }
		,after:  function(node){return node.parent().insertAfter(this, node)}
		,before: function(node){return node.parent().insertBefore(this, node)}
		,remove: function(){return this.parent().removeChild(this)}
		,replaceWith: function(node){return this.parent().replaceChild(node, this)}
		,compareDocumentPosition: function(node) {
			return this.contains
			? 0 + (this != node && this.contains(node) && 16)
				+ (this != node && node.contains(this) && 8)
				+ (this.sourceIndex >= 0 && node.sourceIndex >= 0 ? (this.sourceIndex < node.sourceIndex && 4) + (this.sourceIndex > node.sourceIndex && 2) : 1)
			: 0;
		}
	},

	Document: {
		 $:  function(id){return this.getElementById(id)}
		,$D: function(){return this}
		,$T: $T
		,$W: function(){return this.defaultView||this.parentWindow} // parentWindow is IE
		,$X: $X
	},

	Element: {
		/** Gecko 1.9.2 (Firefox 3.6) */
		classList:{get:function(){return createDOMTokenList(this, "className")}},
		/** http://www.w3.org/TR/ElementTraversal/ */
		nextElementSibling:     {get:function(){ var e = this; while (e = e.nextSibling)     { if (1 === e.nodeType) return e; } return null; }},
		previousElementSibling: {get:function(){ var e = this; while (e = e.previousSibling) { if (1 === e.nodeType) return e; } return null; }},
		firstElementChild:      {get:function(){ var e = e.firstChild; while (e) { if (1 === e.nodeType) return e; e = e.nextSibling; } return null; }},
		lastElementChild:       {get:function(){ var e = e.lastChild;  while (e) { if (1 === e.nodeType) return e; e = e.previousSibling; } return null; }},
		childElementCount:      {get:function(){ var e = e.firstChild, i=0; while (e) { if (1 === e.nodeType) ++i; e = e.nextSibling; } return i; }},

		 $D: function(){return $IE7(this.ownerDocument)}
		,$T: $T
		,$W: function(){return this.$D().$W()}
		,$X: $X
		,attr: function(k,v)
		{
			var pv = this.getAttribute(k);
			if (!defined(v)) { return pv; }
			try{ null!==v ? this.setAttribute(k, v) : this.removeAttribute(k); }catch(e){/*no harm, probably k=type|name which fails in IE for "security reasons"*/}
//			if (!ua.ie) { this.trigger("propertychange", {attrName:k, newValue:v, prevValue:pv, propertyName:k}); }
			return this;
		}
		,getElementById: function(id)
		{
			var n = this.ownerDocument.getElementById(id), p=n;
			if (p) do { p = p.parentNode; } while (p && this != p);
			return p ? n : null;
		}
	},

	Event: {
		stop: function(p)
		{
			this.preventDefault();
			if (!p) this.stopPropagation();
		}
	},

	HTMLDocument: {
		/** HTML 5 */
		head:{get:function(){return this.$T("head")[0]}},
		scripts:{get:function(){return this.$T("script")}},

		 $B: function() { return $IE7(this.body||this.documentElement) } // Quirks||Standard
		,$C: function(tagname, a)
		{
			var ns = this.$B().namespaceURI, n=lc(tagname), o = ns ? this.createElementNS(ns, n) : this.createElement(n);
			// Cross browser DOMFrameContentLoaded
			if ("iframe" === n || "object" === n) {
				(function(){
					var DOMListeners = [], DOMLoaded, doc=this;
					function DOMReady(e)
					{
						if (!e.target) { e.target=this; }
						if (!DOMLoaded && o===e.target) {
							var fn = arguments.callee;
							DOMLoaded = true;
							doc.unbind(DFCL, fn);
							if ("object" != n) { e.target.unbind("load", fn); }
							if (doc.detachEvent) { doc.detachEvent("load", fn); }
							DOMListeners.callFunctions(e, e.target);
						}
					};
					doc.bind(DFCL, DOMReady);
					o.onDOMReady = function(fn) { DOMLoaded ? fn() : DOMListeners.push(fn); };
					try { o.bind("load", DOMReady); } catch(e){} // Crash in IE8 on object
					if (ua.ie && "object" === n) {
						doc.attachEvent("onload", DOMReady.bind(o));
					}
				})();
			}
			return extendNode(o, a);
		}
		,$H: function() { return this.head||this.$T("head")[0]; }
		,$Q: $Q
//		,getElementsByName: function(n)
		,getElementsByClassName: gEBCN
		,getScrollPoint: function()
		{
			var w = this.$W(), b = this.isStrict()?this.documentElement:this.body;
			if (is_number(w.pageYOffset)) { return new PoodlePoint(w.pageXOffset, w.pageYOffset); }
			if (b && (b.scrollLeft || b.scrollTop)) { return new PoodlePoint(b.scrollLeft, b.scrollTop); }
			return new PoodlePoint(0,0);
		}
		,isStrict:function(){return("BackCompat"!=this.compatMode)}
		/** Event Handling */
		,bind:   bindEvent
		,unbind: unbindEvent
		,trigger:simulateEvent
	},

	HTMLElement: {
		$A: function(t,a)
		{
			if (is_string(t)) { t = this.$D().$C(t); }
			return this.appendChild(extendNode(t, a));
		}
		,$B:$B
		,$C:$C
		,$Q:$Q

		/** HTML 5 */
		,click: function(){
			var evt=this.createEvent("MouseEvents");
			evt.initMouseEvent("click",true,true,this.$W(),1,0,0,0,0,false,false,false,false,0,null);
			this.dispatchEvent(evt);
		}

		,show: function(){this.style.visibility="visible";return this;}
		,hide: function(){this.style.visibility="hidden";return this;}

		// getNodeAbsLeft getNodeAbsTop getNodeBoundingRect
		,getBoundingLeft: function(stopat) { return Math.max(0,this.getBoundingRect(stopat).left); }
		,getBoundingTop:  function(stopat) { return Math.max(0,this.getBoundingRect(stopat).top); }
		,getBoundingRect: function(stopat)
		{
			var br = this.getBoundingClientRect();
			if (stopat && stopat.getBoundingClientRect) {
				stopat = stopat.getBoundingClientRect();
				return new PoodleRect(br.left-stopat.left, br.top-stopat.top, br.right-stopat.right, br.bottom-stopat.bottom);
			}
			return new PoodleRect(br.left, br.top, br.right, br.bottom);
		}
		,getBoundingPageRect: function()
		{
			var br = this.getBoundingClientRect(), s=this.$D().getScrollPoint();
			return new PoodleRect(br.left+s.x, br.top+s.y, br.right+s.x, br.bottom+s.y);
		}
		,getBoundingPagePos: function()
		{
			var br = this.getBoundingPageRect();
			return new PoodlePoint(br.left, br.top);
		}
		,getBoundingPageX: function() { return this.getBoundingPageRect().left; }
		,getBoundingPageY: function() { return this.getBoundingPageRect().top; }
		/** http://www.w3.org/TR/cssom-view/#the-getclientrects-and-getboundingclient */
		,getBoundingClientRect: function()
		{
			var n=this, x=0, y=0, o=n, f;
			while (o) {
				x += o.offsetLeft;
				y += o.offsetTop;
				f = ("fixed" == o.css("position"));
				if (f) { break; }
				o = $IE7(o.offsetParent);
				if (o && o.offsetParent)
				{
					x -= o.scrollLeft;
					y -= o.scrollTop;
				}
			}
			if (!f) {
				o = n.$D().getScrollPoint();
				x -= o.x;
				y -= o.y;
			}
			if (f && 9.51 == ua.opera) {
				console.warn("getBoundingClientRect(): Opera 9.51 has offsetTop bug, see http://www.greywyvern.com/code/opera/Bug-PositionFixedoffsetTop");
			}
			return { top:y, right:x+n.offsetWidth, bottom:y+n.offsetHeight, left:x };
		}

		// http://www.quirksmode.org/dom/w3c_css.html
		//cssValue
		,css: function(rule, force)
		{
			var n=this, v=null;
			try {
				if (!force) { v = n.style.getPropertyValue(rule) || n.style.getPropertyValue(cssPrefix+rule) }
				if (!v) { v = n.$W().getComputedStyle(n, null).getPropertyValue(rule) }
			} catch (e) {}
			return v;
		}

		,setCSS:function(css){
			for (var p in css) {
				try{
					this.style.setProperty(cssPrefix+p, css[p], null);
					this.style.setProperty(p, css[p], null);
				}catch(e){console.error(e)}
				try{
					this.style[cssrule(cssPrefix+p)] = this.style[cssrule(p)] = css[p];
				}catch(e){console.error(e)}
			}
			return this;
		}

		// addClassName, getNodeClass
		,addClass: function(name) { this.classList.add(name); return this; }
		,getClass: function()  { return this.attr("class") || this.className; }
		,setClass: function(v) { return this.attr("class", v ? v.trim() : v); }
		,hasClass: function(name) { return this.classList.contains(name); }
		,replaceClass: function(from, to) { return this.setClass((this.getClass()?this.getClass():"").replace(from, to)); }
		// stripClassName
		,removeClass: function(name) { this.classList.remove(name); return this; }
		,toggleClass: function(name) { this.classList.toggle(name); return this; }

		,getElementsByClassName: gEBCN

		,getNextByNodeName: function(name)
		{
			var n = this;
			name = name||n.nodeName;
			while (n = n.next()) { if (n.nodeName == name) return n; }
		}
		,getPrevByNodeName: function(name)
		{
			var n = this;
			name = name||n.nodeName;
			while (n = n.prev()) { if (n.nodeName == name) return n; }
		}
		,getRChildNode: function(type, r, min)
		{
			if (!min) { min = r+1; }
			var n = this.$T(type);
			return (n.length>=min) ? n[n.length-1-r] : null;
		}

		,getHeight: function(def)
		{
			/** .client* is without border, offset* with border */
			var n=this;
			return Math.max(n.clientHeight, (def?def:0))
				-intval(n.css("padding-top"))
				-intval(n.css("padding-bottom"));
		}

		,getMousePos:function(e)
		{
			var br = this.getBoundingRect();
			return new PoodlePoint(intval(e.clientX-br.left), intval(e.clientY-br.top));
		}

		,getWidth: function(def)
		{
			var n=this;
			return Math.max(n.clientWidth, (def?def:0))
				-intval(n.css("padding-left"))
				-intval(n.css("padding-right"));
		}
		// getNodeHasFixed
		,hasFixedPosition: function()
		{
			var n = this, f = false;
			while (n && !f) {
				f |= ("fixed" == $IE7(n).css("position"));
				n = n.offsetParent;
			}
			return f;
		}

		// appendNodeHTML
		,appendHTML: function(txt) { return this.html(this.innerHTML + txt); }
		// setNodeHTML
		,html: function(v) {
			if (defined(v)) {
				try {
					this.innerHTML = v;
					return this;
				} catch (e) {
					console.error(e);
					try {
						var doc = new DOMParser().parseFromString(v, "text/xml").documentElement;
						if (lc(doc.nodeName) == "parsererror") {
							console.debug(doc.firstChild.data);
						} else {
							o.appendChild(this.$D().importNode(doc, true));
							return this;
						}
					} catch (e) {
						console.error(e);
					}
					return false;
				}
			}
			return this.innerHTML;
		}
		// 'text' property is used by A. Use "<![CDATA["+v+"]]>" ??
		,txt:  function(v) { return defined(v) ? this.html(htmlspecialchars(v)) : this.textContent||this.innerText; }
		// HTMLElement.prototype.__defineGetter__("outerHTML",
		,getOuterHTML: function() {
			if (this.outerHTML) { return this.outerHTML; }
			var a = this.attributes, t = this.lowerName(), str = "<" + t, i = 0, l = a.length;
			for (; i < l; ++i) { str += " " + a[i].name + "=\"" + a[i].value + "\""; }
			return str + (emptyTags.test(t) ? (this.namespaceURI ? " />" : ">") : ">" + this.innerHTML + "</" + t + ">");
		}

		/** Event Handling */
		,bind:   bindEvent
		,unbind: unbindEvent
		,trigger:simulateEvent
	},

	HTMLFormElement: {
		// Events.addBeforeSubmit
		addEventBeforeSubmit: function(listener)
		{
			if ("form" != this.lowerName()) { return false; }
			if (!this.beforesubmit) {
				this.beforesubmit = [];
				this.addEventListener("submit", beforeSubmit, false);
			}
			if (listener) this.beforesubmit.push(listener);
			return true;
		}
		// getFormInputsByType
		,getInputsByType: function(type)
		{
			return this.$X('.//input[@type="'+type+'"]', function(){
				var result=[], i=-1,
					s = this.$T("input"),
					re = new RegExp("^"+type+"$");
				while (s[++i]) { if (re.test(s[i].type)) result.push(s[i]); }
				return result;
			});
		}
		/** find form field element by name */
		,getFieldByName: function(name, tag)
		{
			var i=0, n = this.$T(tag||"input"), l=n.length;
			for (;i<l;++i) { if (n[i].name==name) { return n[i]; } }
		}
	},

	HTMLIFrameElement: { $Doc: contentDoc },
	HTMLObjectElement: { $Doc: contentDoc },

	HTMLStyleElement: {},

	Window: {
		 $: function(id){return this.$D().$(id)}
		,$B:$B
		,$C:$C
		,$D:function(){return this.document}
		,$Q:function(s){return this.$D().$Q(s)}
		,$W:function(){return this}
		/** Event Handling */
		,bind:   bindEvent
		,unbind: unbindEvent
		,trigger:(ua.khtml||ua.opera)?function(){}:simulateEvent // Fails on Konqueror and Opera
	}
};


DOM.Array = {
	callFunctions: function(e, o) {
		this.forEach(function(f){
			try {
				if (is_function(f)) { f.call(o, e); }
			} catch (er) {
				er.message += (e ? "\n"+e.target.nodeName+".on"+e.type+"=" : " in\n")+f;
				console.error(er);
			}
		});
	}
	,item: function(i) { return this[i] || null; }
	/** JS 1.6 */
	,every: function(fn)
	{
		if (!is_function(fn)) throw new TypeError();
		var i = 0, l = this.length >>> 0, thisp = arguments[1];
		for (;i<l;++i) {
			if (i in this && !fn.call(thisp, this[i], i, this)) return false;
		}
		return true;
	}
	,filter: function(fn)
	{
		if (!is_function(fn)) throw new TypeError();
		var i = 0, l = this.length >>> 0, thisp = arguments[1], res = [], v;
		for (;i<l;++i) {
			if (i in this) {
				v = this[i]; // in case fn mutates this
				if (fn.call(thisp, v, i, this)) res.push(v);
			}
		}
		return res;
	}
	,forEach: function(fn)
	{
		if (!is_function(fn)) throw new TypeError();
		var i = 0, l = this.length >>> 0, thisp = arguments[1];
		for (;i<l;++i) {
			if (i in this) fn.call(thisp, this[i], i, this);
		}
	}
	,indexOf: function(str) {
		var i = 0, l = this.length >>> 0;
		for (;i<l;++i) { if (str === this[i]) return i; }
		return -1;
	}
	,lastIndexOf: function(elt)
	{
		var l = this.length, i = Number(arguments[1]);
		if (!isNaN(i)) {
			i = (i < 0) ? Math.ceil(i) : Math.floor(i);
			if (i < 0) i += l;
		}
		if (isNaN(i) || i >= l) i = l - 1;
		for (;i>-1;--i) { if (elt === this[i]) return i; }
		return -1;
	}
	,map: function(fn)
	{
		if (!is_function(fn)) throw new TypeError();
		var i = 0, l = this.length >>> 0, thisp = arguments[1], res = new Array(l);
		for (;i<l;++i) {
			if (i in this) res[i] = fn.call(thisp, this[i], i, this);
		}
		return res;
	}
	,some: function(fn)
	{
		if (!is_function(fn)) throw new TypeError();
		var i = 0, l = this.length >>> 0, thisp = arguments[1];
		for (;i<l;++i) {
			if (i in this && fn.call(thisp, this[i], i, this)) return true;
		}
		return false;
	}
};
/** array creator */
Array.from = (function(s){ return function(o) {
	if (o.item){
		var l = o.length, a = new Array(l);
		while (l--) a[l] = o[l];
		return a;
	}
	return o.toArray ? o.toArray() : s.call(o,0);
} })([].slice);
if (!Array.filter) { Array.filter = function(o,fn){return DOM.Array.filter.call(o,fn)} }


DOM.Boolean = { toJSON: function() { return this.valueOf(); } };


DATE_ISO8601 = "Y-m-d\\TH:i:sO";
DATE_RFC822  = "D, d M y H:i:s O";
DATE_RFC850  = "l, d-M-y H:i:s T";
DATE_RFC1036 = DATE_RFC822;
DATE_RFC1123 = "D, d M Y H:i:s O";
DATE_RFC2822 = DATE_RFC1123;
DATE_RFC3339 = "Y-m-d\\TH:i:sP";
DATE_ATOM    = DATE_RFC3339;
//DATE_COOKIE  = DATE_RFC850;
DATE_RSS     = DATE_RFC1123;
DATE_W3C     = DATE_RFC3339;
Date.longDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
Date.shortDays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
Date.longMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
Date.shortMonths = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
DOM.Date = {
	 getDayOfYear:   function() { return Math.floor((Date.UTC(this.getFullYear(),this.getMonth(),this.getDate()) - Date.UTC(this.getFullYear(),0,1)) / 86400000); }
	,getDaysInMonth: function() { return 32 - new Date(this.getFullYear(), this.getMonth(), 32).getDate(); }
	,getISODay:      function() { var d = this.getDay(); return d>0 ? d : 7; }
	,getISOYear:     function() { return new Date(this.getFullYear(), this.getMonth(), this.getDate() - ((this.getDay() + 6) % 7) + 3).getFullYear(); }
	,getWeek: function() {
		var d = new Date(this.getFullYear(),0,1),
			wd = d.getISODay(),
			w = Math.ceil((this.getDayOfYear()+wd) / 7);
		/* ISO 8601 states that week 1 is the week with january 4th in it */
		if (4 < wd) { --w; }
		return (1 > w ? (new Date(this.getFullYear()-1,11,31)).getWeek() /* previous year, last week */ : (52 < w && 4 > this.getISODay() ? 1 /* next year, first week */ : w) );
	}
	,isDaylightSavingTime: function() {
		return this.getTimezoneOffset() != Math.max(new Date(this.getFullYear(), 0, 1).getTimezoneOffset(), new Date(this.getFullYear(), 6, 1).getTimezoneOffset());
	}
	,isLeapYear: function() { var y = this.getFullYear(); return (y%400==0||(y%4==0&&y%100!=0)); }
	,toJSON: function() { return this.format(DATE_ISO8601, true); }
	,format: function (str, UTC) {
		UTC = UTC||str.match(/\\Z$/);
		var x = this, d = {
			D:(UTC?x.getUTCDay():x.getDay()),
			Y:(UTC?x.getUTCFullYear():x.getFullYear()),
			m:(UTC?x.getUTCMonth():x.getMonth()),
			d:(UTC?x.getUTCDate():x.getDate()),
			H:(UTC?x.getUTCHours():x.getHours()),
			Z:(UTC?0:-x.getTimezoneOffset())
		};
		return !str
		? this.toString()
		: str.replace(/\\?[a-zA-Z]/g,
			function (m) {
				if (m.charAt(0) === "\\") { return m.replace("\\", ""); }
				switch (m) {
				// Day
				case "d": return d.d.pad(2);
				case "D": return Date.shortDays[d.D];
				case "j": return d.d;
				case "l": return Date.longDays[d.D];
				case "N": return x.getISODay();
				case "S": return (d.d % 10 == 1 && d.d != 11 ? "st" : (d.d % 10 == 2 && d.d != 12 ? "nd" : (d.d % 10 == 3 && d.d != 13 ? "rd" : "th")));
				case "w": return d.D;
				case "z": return x.getDayOfYear();
				// Week
				case "W": return x.getWeek().pad(2);
				// Month
				case "F": return Date.longMonths[d.m];
				case "m": return (d.m + 1).pad(2);
				case "M": return Date.shortMonths[d.m];
				case "n": return d.m + 1;
				case "t": return x.getDaysInMonth();
				// Year
				case "L": return (((d.Y%4==0)&&(d.Y%100 != 0)) || (d.Y%400==0)) ? "1" : "0";
				case "o": return x.getISOYear();
				case "Y": return d.Y;
				case "y": return ("" + d.Y).substr(2);
				// Time
				case "a": return d.H < 12 ? "am" : "pm";
				case "A": return d.H < 12 ? "AM" : "PM";
//				case "B": return ""; // Swatch Internet time, Not Yet Supported
				case "g": return d.H % 12 || 12;
				case "G": return d.H;
				case "h": return (d.H % 12 || 12).pad(2);
				case "H": return d.H.pad(2);
				case "i": return (UTC?x.getUTCMinutes():x.getMinutes()).pad(2);
				case "s": return (UTC?x.getUTCSeconds():x.getSeconds()).pad(2);
				case "u": return x.getMilliseconds().pad(3);
				// Timezone
//				case "e": return ""; // Timezone identifier, Not Yet Supported
				case "I": return UTC ? 0 : x.isDaylightSavingTime() ? 1 : 0;
				case "O": return UTC ? "Z" : (d.Z > 0 ? "+" : "-") + Math.abs(d.Z / 60).pad(2) + "00";
				case "P": return UTC ? "Z" : (d.Z > 0 ? "+" : "-") + Math.abs(d.Z / 60).pad(2) + ":" + Math.abs(d.Z % 60).pad(2);
				case "T": return UTC ? "UTC" : new Date(d.Y, 0, 1).toTimeString().replace(/^.+ \(?([^\)]+)\)?$/, "$1");
				case "Z": return d.Z * 60;
				// Full Date/Time
				case "c": return x.format(DATE_ISO8601);
				case "r": return x.format(DATE_RFC2822);
				case "U": return x.getTime() / 1000;
				}
				return m;
			}
		);
	}
};
document.cookie = 'PoodleTimezoneOffset='+(new Date().getTimezoneOffset()*60)+'; path=/';


DOM.Function = {
	/** function delegation */
	bind: function(){
		var __method = this, args = Array.from(arguments), object = args.shift();
		return function() { return __method.apply(object, args.concat(Array.from(arguments))); }
	}
};


DOM.Number = {
	pad: function(l) { return (""+this).pad(l,"0",0); }
	,toJSON: function() { return this.valueOf(); }
};


//DOM.Object = {};


function fillString(s, n) {
	var r = '';
	while (n>0) {
		if (n & 1) r += s;
		n >>= 1;
		if (n) s += s;
	}
	return r;
}
STR_PAD_LEFT  = 0;
STR_PAD_RIGHT = 1;
STR_PAD_BOTH  = 2;
DOM.String = {
	addQueryParam: function(key, value) { return (this==""?"":this+"&")+key+"="+encodeURIComponent(value); }
	,contains: function(s, sep) { return -1 < (sep ? (sep + this + sep).indexOf(sep + s + sep) : this.indexOf(s)) }
	,pad: function(l, s, t) {
		s = s || " ";
		return (l -= this.length) < 1 ? this : (s = fillString(s, Math.ceil(l/s.length))).substr(0, t = !t ? l : t == 1 ? 0 : Math.ceil(l / 2)) + this + s.substr(0, l - t);
	}
	,trim: function() { return this.replace(/^\s+|\s+$/g, ""); }
	,toJSON: function() { return this.valueOf(); }
	,toDate: function(format)
	{
		var i = -1,
			d = {Y:0, m:0, d:1, H:0, i:0, s:0},
			f = format.match(/([YmdHis])/g),
			m,
			s = this;
		if (m = s.match(RegExp("("+Date.longMonths.join("|")+")")))  { d.m = Date.longMonths.indexOf(m[1])+1;  s = s.replace(m[1],""); } else
		if (m = s.match(RegExp("("+Date.shortMonths.join("|")+")"))) { d.m = Date.shortMonths.indexOf(m[1])+1; s = s.replace(m[1],""); }
		if (m = s.match(RegExp("("+Date.longDays.join("|")+")")))    { s = s.replace(m[1],""); } else
		if (m = s.match(RegExp("("+Date.shortDays.join("|")+")")))   { s = s.replace(m[1],""); }
		if (m = s.match(/\d{4}/)) { d.Y = m[0]; }
		if (d.Y && (m = s.match(/\-W(0[1-9]|[1-4][0-9]|5[0-3])/))) {
			var fd=0, w;
			do { w = new Date(d.Y,0,1+(fd++)); } while (w.getWeek() != 1);
			w = new Date(w.getTime()+(1000*60*60*24*7*(m[1]-1)));
			d.m = w.getMonth()+1;
			d.d = w.getDate();
		} else {
			m = s.trim().match(RegExp(format.trim()
				.replace(/[^YmdH]+/g,".")
				.replace("d","(3[01]|[12][0-9]|0[1-9])?")
				.replace("m","(1[012]|0[1-9])?")
				.replace("Y","(\\d{4})?")
				.replace("H","(?:([01][0-9]|2[0-3]):([0-5][0-9])(?::([0-5][0-9]))?)?")
//				.replace(/[is]/g,"([0-5]?[0-9])?")
				.replace(/\./g,"[^\\d]*")));
			if (f && m) { while (f[++i]) { if (m[i+1]) d[f[i]] = m[i+1]; } }
		}
		d = (d.Y&&d.m) ? new Date(d.Y, d.m-1, d.d, d.H, d.i, d.s) : null;
		return (d && s.match(/Z$/)) ? new Date(d.getTime()-(d.getTimezoneOffset()*60000)) : d;
	}
};

/**
 * Internet Explorer
 * Simulate DOM
 * http://www.w3.org/TR/DOM-Level-2-Core/
 * http://www.w3.org/TR/DOM-Level-2-Events/
 * http://www.w3.org/TR/DOM-Level-2-Style/
 * http://www.w3.org/TR/DOM-Level-2-Traversal-Range/
 * http://www.w3.org/TR/DOM-Level-2-Views/
 *
 * Year: 2003
 * http://www.w3.org/TR/DOM-Level-2-HTML/
 *
 * Year: 2004
 * http://www.w3.org/TR/DOM-Level-3-Core/
 */
if (ua.ie) {
	if (8>ua.ie) {
		extendObj(DOM,{
			Node: {
				/** DOM 2 methods */
				hasAttributes: function(){return(this.attributes && this.attributes.length>0)}
				,isSupported: function(f,v){return document.implementation.hasFeature(f,v)}
				/** DOM 3 DOMImplementation */
				,getFeature: function(f,v){return null}
				,setUserData:function(k,v,h){this[k]=v}
				,getUserData:function(k){return this[k]}
			},
			Element:{
				/** DOM 2 methods */
				hasAttribute: function(k) { var v=this.getAttribute(k); return defined(v) && v.length; }
			}
		});
	}

	if (9>ua.ie) {
		var HTMLTextInput = {
			selectionStart:{
				get:function(){
					var r = document.selection.createRange().duplicate()
					r.moveEnd('character', this.value.length)
					if (r.text == '') return this.value.length
					return o.value.lastIndexOf(this.text)
				}
			},
			selectionEnd:{
				get:function(){
					var r = document.selection.createRange().duplicate()
					r.moveStart('character', -this.value.length)
					return r.text.length
				}
			}
			,setSelectionRange:function(start, end){
				var r = this.createTextRange();
				r.collapse(true);
				r.moveStart('character', start);
				r.moveEnd('character', end);
				r.select();
			}
		};
		cssFloat = "styleFloat";
		extendObj(DOM,{
			/** http://www.w3.org/TR/DOM-Level-2-Style/css#CSS-CSSStyleSheet */
			CSSStyleSheet: {
				cssRules: {get:function(){return this.rules}},
				ownerNode:{get:function(){return this.owningElement}},
				insertRule: function(rule)
				{
					if (defined(this.cssText)) {
						this.cssText += rule;
					} else {
						var i=1, v = rule.replace(/[\r\n]+/g,'').match(/([^{;}]+)/g), doc = this.$D(), l=v.length;
						if (this.addRule && v && l>1) {
							for (;i<l;++i) { this.addRule(v[0].trim(), v[i].trim()) }
						} else if (doc.createTextNode) {
							this.appendChild(doc.createTextNode(rule));
						}
					}
				},
				deleteRule: function(i){this.removeRule(i)}
			},

			/** http://www.w3.org/TR/DOM-Level-2-Style/css#CSS-CSSStyleDeclaration */
			CSSStyleDeclaration: {
				opacity:{
					get:function(){return DOM.CSSStyleDeclaration.getPropertyValue.call(this,"opacity")},
					set:function(v){DOM.CSSStyleDeclaration.setProperty.call(this,"opacity",v)}
				},
				getPropertyValue:    function(n){
					if (n==="opacity") {
						n = (this.filter||this.MsFilter||"").match(/opacity\=(\d+)/i);
						return n ? n[1]/100 : ""
					}
					return this[cssrule(n)]
				},
				removeProperty:      function(n){this[cssrule(n)]=''},
				setProperty:         function(n,v){n==="opacity"?this.filter="alpha(opacity="+(100*v)+")":this[cssrule(n)]=v},
				/* 9.0.7874>ua.ie */
				getPropertyCSSValue: function(n){return this.getPropertyValue(n)}
			},

			Event: {
				CAPTURING_PHASE:1
				,AT_TARGET:     2
				,BUBBLING_PHASE:3
				,bubbles:true
				,cancelable:true
				,timeStamp:0
				,stopPropagation:function(){this.cancelBubble=true}
				,preventDefault: function(){this.returnValue=false}
				,preventCapture: function(){} // No capture phase
				,initEvent: function(t,b,c){this.type=t;this.bubbles=!!b;this.cancelable=!!c}
				,initMouseEvent: function(t,b,c,v,d,sX,sY,cX,cY,cK,aK,sK,mK,btn,rT){
					with (this) {
						initEvent(t,b,c);
						view=v;
						detail=d;
						screenX=sX;
						screenY=sY;
						clientX=cX;
						clientY=cY;
						ctrlKey=!!cK;
						altKey=!!aK;
						shiftKey=!!sK;
						metaKey=!!mK;
						button=btn;
						relatedTarget=rT;
					}
				}
			},

			Node: {
				ELEMENT_NODE                :  1,
				ATTRIBUTE_NODE              :  2,
				TEXT_NODE                   :  3,
				CDATA_SECTION_NODE          :  4,
				ENTITY_REFERENCE_NODE       :  5,
				ENTITY_NODE                 :  6,
				PROCESSING_INSTRUCTION_NODE :  7,
				COMMENT_NODE                :  8,
				DOCUMENT_NODE               :  9,
				DOCUMENT_TYPE_NODE          : 10,
				DOCUMENT_FRAGMENT_NODE      : 11,
				NOTATION_NODE               : 12
			},

			Document: {
				/** DOM 2 methods */
				createAttributeNS: function(ns,n){return this.createAttribute(n)},
				createElementNS: function(ns,n){return this.createElement(n)},
				getElementsByTagNameNS: function(ns,n){return this.getElementsByTagName(n)},
				importNode: function(node, recursive){
					switch (node.nodeType)
					{
					case 1: // ELEMENT_NODE
						var i, name, o=this.createElement(node.nodeName), l;
						if (node.hasAttributes())
							for (i=0,l=node.attributes.length; i<l; ++i) {
								name = node.attributes[i].nodeName;
								o.setAttribute(name, node.getAttribute(name));
							}
						if (recursive && node.hasChildNodes())
							for (i=0,l=node.childNodes.length; i<l; ++i)
								o.appendChild(this.importNode(node.childNodes[i], 1));
						return o;
					case 3: // TEXT_NODE
					case 4: // CDATA_SECTION_NODE
					case 8: // COMMENT_NODE
						return this.createTextNode(node.nodeValue);
					}
				},
				/** DOM 2 DocumentEvent */
				createEvent: function(type){return extendDOM(this.createEventObject(),DOM.Event)},
				/** DOM 3 methods */
				adoptNode: function(n){var o=this.importNode(n,true);if(o)n.parentNode.removeChild(n);return o}
			},

			/** http://www.w3.org/TR/DOM-Level-3-Core/core#ID-1950641247 */
			Element: {
				textContent:{get:function(){return this.innerText}}
			},

			/** http://www.w3.org/TR/DOM-Level-2-Views/views#Views-DocumentView */
			HTMLDocument: {
				defaultView:{get:function(){return this.parentWindow}}
			},

			HTMLInputElement:HTMLTextInput,
			HTMLTextAreaElement:HTMLTextInput,

			/** http://www.w3.org/TR/DOM-Level-2-Style/stylesheets#StyleSheets-LinkStyle */
			HTMLStyleElement: {
				sheet:{get:function(){return this.styleSheet}}
			},

			Window: {
				/** http://www.w3.org/TR/DOM-Level-2-Style/css#CSS-ViewCSS */
				getComputedStyle: function(elt, pseudo)
				{
					// http://www.w3.org/TR/DOM-Level-2-Style/css#CSS-CSSStyleDeclaration
					var o=elt,s=o.style;
					s.getPropertyValue = function(n)
					{
						n = cssrule(n);
						var v=s[n], cs=o.currentStyle, rs=o.runtimeStyle;
						if (!v && cs) v = cs[n];
						if (!v && "backgroundPosition"==n) v = "0px 0px";
						// From the awesome hack by Dean Edwards
						// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291
						// If we're not dealing with a regular pixel number
						// but a number that has a weird ending, we need to convert it to pixels
						if (!/^\d+(px)?$/i.test(v) && /^\d[^\d]*$/.test(v)) {
							// Remember the original values
							var sl = s.left, rsl = rs.left;
							// Put in the new values to get a computed value out
							rs.left = cs.left;
							s.left = v || 0;
							v = s.pixelLeft + "px";
							// Revert the changed values
							s.left = sl;
							rs.left = rsl;
						}
						return v;
					};
					return s;
				}
			}
		});

		/**
		 * Internet Explorer < 9
		 * Simulate DOM Level 2 Events Specification because
		 * IE calls events last to first and has a wrong 'this'
		 */

		if (!window.addEventListener){(function()
		{
			function IE_onevent(e) { if (this.events[e.type]) { extendEvent(e, this); this.events[e.type].callFunctions(e, this); } };
			var IE_Listeners = [],
			methods = {
				addEventListener: function(type, listener, useCapture)
				{
					type = lc(type);
					if ("domattrmodified" == type) type = "propertychange";
					if ("dommousescroll"  == type) type = "mousewheel";
					if (!this.events) { this.events = {}; }
					if (!this.events[type]) {
						var ev = "on"+type, fn, el = IE_Listeners, l = el.length;
						this.events[type] = [];
						if (!l) {
							window.attachEvent("onunload", function() {
								var i=0, l=el.length;
								for (; i<l; ++i) try { el[i][0].detachEvent(el[i][1], el[i][2]); } catch (e) {}
								IE_Listeners = null;
								window.detachEvent("onunload", arguments.callee);
							});
						}
						el[l] = [this, ev, IE_onevent.bind(this)];
						this.attachEvent(ev, el[l][2]);
					}
					var f=this.events[type], i=f.length;
					while (i--) { if (listener == f[i]) { console.log("Listener already attached\n"+listener); return; } }
					this.events[type].push(listener);
				}

				,dispatchEvent: function(e)
				{
					var o = e.originalTarget = this, t = lc(e.type);
					extendEvent(e);
					while (o) {
						/** Bubble phase */
						if (o.events && o.events[t]) { o.events[t].callFunctions(e, o); }
						if (!e.bubbles || e.cancelBubble) break;
						e.currentTarget = o = o.parentNode;
						e.eventPhase = 3;
					}
				}

				,removeEventListener: function(type, listener, useCapture)
				{
					if (this.events && this.events[type])
					{
						var f=this.events[type], i=f.length;
						while (i--) { if (listener == f[i]) { f.splice(i,1); break; } }
					}
				}
			};

			function extendEvent(e, o)
			{
				// quirksmode.org/dom/events/index.html
				if (!e) { e = (o?o.$W():window).event; }
				if (!defined(e.target)) try
				{
					extendObj(e, DOM.Event);
					e.target = e.srcElement||e.originalTarget;
					o = o ? o : e.target;
					// must be a NODE_ELEMENT or NODE_DOCUMENT
					while (o && o.nodeType && 1 != o.nodeType && 9 != o.nodeType) { o = o.parentNode; }
					e.currentTarget = o;
					e.metaKey = e.ctrlKey;
					e.eventPhase = (e.target != e.currentTarget) ? 3 : 2;
					e.pageX = 0;
					e.pageY = 0;
					e.relatedTarget = null;
					e.time = (new Date).getTime();
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
					if (e.wheelDelta) { e.detail = -e.wheelDelta/40; }
					// w3.org/TR/2000/REC-DOM-Level-2-Events-20001113/events.html#Events-MutationEvent
					if (e.propertyName) {
						e.attrName = e.propertyName.replace(/([^\.]+).*/, "$1"); // propertychange vs DOMAttrModified
						e.newValue = e.target[e.attrName];
		//				e.prevValue = null;
					}
					if (o && o.$D && null != e.clientX && o.$D()) {
						// might be 2px off
						var s = o.$D().getScrollPoint();
						e.pageX = e.clientX + intval(o.$D().$B().clientLeft) + s.x;
						e.pageY = e.clientY + intval(o.$D().$B().clientTop ) + s.y;
					}
				} catch (er) { console.error(er); }
				return e;
			}

			extendObj(DOM.Node, methods);
			extendObj(DOM.Window, methods);
		})()}
	}
}

/**
 * IE/WebKit DOMParser workaround
 */
if (!win.DOMParser) {
	DOM.Window.DOMParser = function() {};
	DOM.Window.DOMParser.prototype.parseFromString = function(str, contentType) {
		var o;
		if (win.XMLHttpRequest)
		{
			o = new XMLHttpRequest;
			if (!contentType) { contentType = "application/xml"; }
			o.open("GET", "data:" + contentType + ";charset=utf-8," + encodeURIComponent(str), false);
			if (o.overrideMimeType) { o.overrideMimeType(contentType); }
			o.send(null);
			o = o.responseXML;
		}
		else if (o = MSXML("DOMDocument"))
		{
			o.async = false;
			o.loadXML(str);
		}
		return o;
	};
}

/**
 * Poodle Classes
 */

PoodlePoint = function(x,y) { this.x = x; this.y = y; };

PoodleRect = function(l,t,r,b)
{
	this.top   = t;
	this.right = r;
	this.bottom= b;
	this.left  = l;
	this.width = function(){return this.right-this.left};
	this.height= function(){return this.bottom-this.top};
};
extendObj(PoodleRect.prototype, DOM.ClientRect);

/**
 * Ajax
 * http://www.w3.org/TR/XMLHttpRequest/
 */
var PoodleXHR_requests = 0;
PoodleXHR = function()
{
	/** Privileged */
	this.oncomplete = null;

	this.get = function(uri, callback) {
		this.oncomplete = callback;
		return request(this, uri);
	};

	this.post = function(uri, callback, data) {
		this.oncomplete = callback;
		return request(this, uri, true, data);
	};

	this.abort = function() {
		if (this.xhr) with (this.xhr)
		{
			if (readyState && this.xhr.abort) {
				onreadystatechange = function(){}; // null makes IE crash
				abort();
				decPXHR();
			}
			onreadystatechange = onStateChange.bind(this);
		}
	};

	/** Public */
	try {
		this.xhr = new XMLHttpRequest();
	} catch(e) {
		this.xhr = MSXML("XMLHTTP");
	}

	/** Private */
	function decPXHR() { if (--PoodleXHR_requests<1) document.$B().removeClass("ajax-loading"); }

	function onStateChange()
	{
		if (4 == this.xhr.readyState) {
			this.type = this.xhr.getResponseHeader("content-type").replace(/^.*\/([a-z]+).*$/, "$1");
			if (is_function(this.oncomplete)) { try { this.oncomplete(this); }catch(e){} }
			decPXHR();
		}
	}

	function request(pxhr, uri, post, data)
	{
		if (!pxhr.xhr) return false;
		pxhr.abort();
		if (++PoodleXHR_requests<2) document.$B().addClass("ajax-loading");
		with (pxhr.xhr) {
			open(post?"post":"get", uri, true);
			setRequestHeader("X-Requested-With", "XMLHttpRequest");
			// http://www.iana.org/assignments/media-types/
			setRequestHeader("Accept", "application/xml,text/xml,text/html,application/xhtml+xml,application/javascript,application/json,text/plain,*/*");
			if (post && data) {
				setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				setRequestHeader("Content-Length", data.length);
				send(data);
			}
		}
		return true;
	}
};

/** Start Selectors API */

(function(){

	var UID=1;
	$uid = function(node){return node.uniqueID||(node.uniqueID=UID++)};

	var Cache = {nth:{}, parsed:{}},

	RegExps = {
		id: (/#([\w-]+)/),
		tag: (/^(\w+|\*)/),
		quick: (/^(\w+|\*)$/),
		classname: (/^\.(\w+)$/),
		splitter: (/\s*([+>~\s])\s*([a-zA-Z#.*:\[])/g),
		combined: (/\.([\w-]+)|\[(\w+)(?:([!*^$~|]?=)(["']?)([^\4]*?)\4)?\]|:([\w-]+)(?:\(["']?(.*?)?["']?\)|$)/g),
		nth:/^([+-]?\d*)?([a-z]+)?([+-]?\d*)?$/
	},

	Getters = {
		' ': function(found, node, tag, id, uniques) {
	//		return Array.filter(getByTagAndID(node, tag, id), function(elem){return chk(elem, uniques)});
			var nodes = getByTagAndID(node, tag, id), i = 0, l = nodes.length, n;
			for (;i<l;++i) {
				n = nodes[i];
				if (chk(n, uniques)) found.push(n);
			}
			return found;
		},

		// E > F an F element child of an E element
		'>': function(found, node, tag, id, uniques) {
			var nodes = getByTagAndID(node, tag, id), i = 0, l = nodes.length, n;
			for (;i<l;++i) {
				n = nodes[i];
				if (n.parentNode === node && chk(n, uniques)) found.push(n);
			}
			return found;
		},

		// E + F an F element immediately preceded by an E element
		'+': function(found, node, tag, id, uniques) {
			while (node = node.nextSibling) {
				if (1 === node.nodeType) {
					if (chk(node, uniques) && byTag(node, tag) && byID(node, id)) found.push(node);
					break;
				}
			}
			return found;
		},

		// E ~ F an F element preceded by an E element
		'~': function(found, node, tag, id, uniques) {
			while (node = node.nextSibling) {
				if (1 === node.nodeType) {
					if (!chk(node, uniques)) break;
					if (byTag(node, tag) && byID(node, id)) found.push(node);
				}
			}
			return found;
		}
	},

	/** http://www.w3.org/TR/ElementTraversal/ */
	Traversal = defined(document.firstChild.nextElementSibling),
	firstChild = Traversal
		? function(elem){return !elem.previousElementSibling}
		: function(elem){return !DOM.Element.previousElementSibling.get.call(elem)},
	lastChild = Traversal
		? function(elem){return !elem.nextElementSibling}
		: function(elem){return !DOM.Element.nextElementSibling.get.call(elem)},

	Pseudo = {
		/**
		 * W3C Pseudo-classes
		 * http://www.w3.org/TR/CSS2/selector#pseudo-class-selectors
		 * http://www.w3.org/TR/css3-selectors/#pseudo-classes
			:first-of-type       matches the first child element of the specified element type
			:last-of-type        matches the last child element of the specified element type
			:nth-last-child(N)   matches elements on the basis of their positions within a parent element’s list of child elements
			:nth-of-type(N)      matches elements on the basis of their positions within a parent element’s list of child elements of the same type
			:nth-last-of-type(N) matches elements on the basis of their positions within a parent element’s list of child elements of the same type
			:only-of-type        matches an element that’s the only child element of its type
			:root                matches the element that’s the root element of the document
			:target              matches an element that’s the target of a fragment identifier in the document’s URI
		*/

		checked: function(elem){return !!("checked" in elem ? elem.checked : elem.selected)},

		empty:   function(elem){
			var cn = elem.childNodes, i=cn.length;
			while (i--) {
				var nt = cn[x].nodeType;
				if (1 === nt || 3 === nt) { return false; }
			}
			return true;
			return !elem.txt().length
		},

	//	disabled: is attribute
		enabled: function(elem){return (false===elem.disabled)},

		not:     function(elem,selector){return !match(elem, selector)},

		'first-child': firstChild,
		'last-child':  lastChild,
		'only-child':  function(elem){return firstChild(elem) && lastChild(elem)},

		'nth-child': function(elem, argument, local) {
			argument = (argument === undefined) ? 'n' : argument;
			var parsed = parseNthArgument(argument);
			if (parsed.mode !== 'n') return Pseudo[parsed.mode](elem, parsed.a, local);
			var count = 0;
			local.positions = local.positions || {};
			var uid = $uid(elem);
			if (!local.positions[uid]) {
				var self = elem;
				while (self = self.previousSibling) {
					if (1 !== self.nodeType) continue;
					count ++;
					var position = local.positions[$uid(self)];
					if (position !== undefined) {
						count = position + count;
						break;
					}
				}
				local.positions[uid] = count;
			}
			return (local.positions[uid] % parsed.a === parsed.b);
		},

		// custom pseudo selectors

		contains:function(elem, text){return (elem.textContent || elem.innerText || '').indexOf(text) >= 0},

		index: function(elem, index) {
			var root = elem.parentNode;
			var i = 0,
				tret = root.children||root.childNodes,
				ei = (elem["_i"]||-1),
				rl = (root["_l"]||-1);
			if (tret) {
				var l = tret.length, te;
				// we calculate the parent length as a cheap way to invalidate the
				// cache. It's not 100% accurate, but it's much more honest than what
				// other libraries do
				if (rl != l || ei < 0 || rl < 0) {
					root["_l"] = l;
					ei = -1;
					if (Traversal) {
						te = root.firstElementChild;
						while (te) { te["_i"] = i++; te = elem.nextElementSibling }
					} else {
						te = root.firstChild;
						while (te) {
							if (1 === elem.nodeType) { te["_i"] = i++; te = elem.nextSibling }
						}
					}
					ei = elem["_i"]||-1;
				}
			}
			return (ei === index);
		}
	},

	Attributes = {
		 '=': function(e, name, v){return v === e.getAttribute(name)},
		'*=': function(e, name, v){return -1 < (e.getAttribute(name)||"").indexOf(v)},
		'^=': function(e, name, v){return v === (e.getAttribute(name)||"").substr(0, v.length)},
		'$=': function(e, name, v){var val = e.getAttribute(name); return (val && v === val.substr(val.length - v.length))},
		'~=': function(e, name, v){return (e.getAttribute(name)||"").contains(v, ' ')},
		'|=': function(e, name, v){return (e.getAttribute(name)||"").contains(v, '-')},
		// Custom
		'!=': function(e, name, v){return v != e.getAttribute(name)}
	};

	/** Filters */

	function byTag(node,tag){return ('*' === tag || (node.tagName && lc(node.tagName) === tag))}

	function byID(node, id){return (!id || id === node.id)}

	/** Utils */

	function chk(node, uniques)
	{
		if (!uniques) return true;
		var uid = $uid(node);
		return (uniques[uid] ? false : uniques[uid]=true);
	}

	function parseNthArgument(argument)
	{
		if (Cache.nth[argument]) return Cache.nth[argument];
		var parsed = argument.match(RegExps.nth);
		if (!parsed) return false;
		var a = intval(parsed[1],1),
			b = intval(parsed[3]),
		mode = parsed[2] || false;
		if (0 !== a) {
			b--;
			while (b < 1) b += a;
			while (b >= a) b -= a;
		} else {
			a = b;
			mode = 'index';
		}
		switch (mode) {
			case 'n':    parsed = {a: a, b: b, mode: 'n'}; break;
			case 'odd':  parsed = {a: 2, b: 0, mode: 'n'}; break;
			case 'even': parsed = {a: 2, b: 1, mode: 'n'}; break;
			case 'first':parsed = {mode: 'first-child'}; break;
			case 'last': parsed = {mode: 'last-child'}; break;
			case 'only': parsed = {mode: 'only-child'}; break;
			default: parsed = {a: (a - 1), mode: 'index'};
		}

		return Cache.nth[argument] = parsed;
	}

	function parseTagAndID(selector)
	{
		var tag = selector.match(RegExps.tag), id = selector.match(RegExps.id);
		return [tag ? tag[1] : '*', id ? id[1] : false];
	}

	function getByTagAndID(ctx, tag, id)
	{
		if (id) {
			var n = ctx.getElementById(id);
			return (n && byTag(n, tag)) ? [n] : [];
		}
		return ctx.getElementsByTagName(tag);
	}

	function parseSelector(selector)
	{
		selector = selector.replace("nth-child(even)","nth-child(2n)").replace("nth-child(odd)","nth-child(2n+1)");
		if (Cache.parsed[selector]) return Cache.parsed[selector];
		var m, parsed = {classes: [], pseudos: [], attributes: []};
		while (m = RegExps.combined.exec(selector)) {
			if (m[1]) {
				parsed.classes.push(m[1]);
			} else if (m[2]) {
				parsed.attributes.push({name: m[2], operator: m[3], value: m[5]});
			} else if (m[6]) {
				if (Pseudo.hasOwnProperty(m[6])) parsed.pseudos.push({parser: Pseudo[m[6]], argument: m[7]});
				else parsed.attributes.push({name: m[6], operator: '=', value: m[7]});
			}
		}
		if (!parsed.classes.length) delete parsed.classes;
		if (!parsed.attributes.length) delete parsed.attributes;
		if (!parsed.pseudos.length) delete parsed.pseudos;
		return Cache.parsed[selector] = (parsed.classes || parsed.attributes || parsed.pseudos) ? parsed : null;
	}

	function filter(node, parsed, local)
	{
		var i;
		if (parsed.classes) {
			for (i = parsed.classes.length; i--; i) {
				var c = node.className;
				if (!(c && c.contains(parsed.classes[i], ' '))) return false;
			}
		}
		if (parsed.attributes) {
			for (i = parsed.attributes.length; i--; i) {
				var a = parsed.attributes[i], u;
				if (a.operator ? !Attributes[a.operator](node, a.name, a.value) : u != node.getAttribute(name)) {
					return false;
				}
			}
		}
		if (parsed.pseudos) {
			for (i = parsed.pseudos.length; i--; i) {
				var psd = parsed.pseudos[i];
				if (!psd.parser(node, psd.argument, local)) return false;
			}
		}
		return true;
	}

	function match(node, selector)
	{
		if (!selector || (selector === node)) return true;
		var tagid = parseTagAndID(selector), tag = tagid[0], id = tagid[1];
		if (!byID(node, id) || !byTag(node, tag)) return false;
		var parsed = parseSelector(selector);
		return (parsed) ? filter(node, parsed, {}) : true;
	}

	PoodleSelector = function(selector)
	{
		var expressions = selector.split(',');

		this.search = function(parent, expression, local)
		{
			var nodes, filtered, node, i=0,
			splitters = [],
			selectors = expression.trim().replace(RegExps.splitter, function(m0, m1, m2){
				splitters.push(m1);
				return ':)' + m2;
			}).split(':)'),
			l = selectors.length;
			for (;i<l;++i)
			{
				var selector = selectors[i];
				if (0 === i && RegExps.quick.test(selector)) {
					nodes = parent.getElementsByTagName(selector);
					continue;
				}
				if (0 === i && RegExps.classname.test(selector)) {
					nodes = parent.getElementsByClassName(selector.substr(1));
					continue;
				}
				var tagid = parseTagAndID(selector),
				tag = tagid[0], id = tagid[1];
				if (0 === i) {
					nodes = getByTagAndID(parent, tag, id);
				} else {
					var uniques = {}, found = [], j = 0, k = nodes.length;
					for (;j<k;++j) found = Getters[splitters[i-1]](found, nodes[j], tag, id, uniques);
					nodes = found;
				}
				var parsed = parseSelector(selector);
				if (parsed) { nodes = Array.filter(nodes, function(elem){return filter(elem, parsed, local)}); }
			}
			return Array.from(nodes);
		};

		this.exec = function(node, one)
		{
			var i = 0, nodes=[], l = expressions.length, local={};
			for (; i<l; ++i) {
				nodes = nodes.concat(this.search(node, expressions[i], local));
				if (one && nodes[0]) return nodes[0];
			}
			return one?null:nodes;
		};
	};

})();

/** End Selectors API */

PoodleDOM = function(w)
{
	var k, doc = w.document, P = this;

	/**
	 * short notations
	 */
	this.$=function(id) {return doc.$(id)};
	P.$B = function()   {return doc.$B()};
	P.$C = function(t,a){return doc.$C(t,a)};
	P.$D = function()   {return doc};
	P.$H = function()   {return doc.$H()};
	P.$Q = function(s)  {return doc.$Q(s)};
	P.$T = function(s)  {return doc.$T(s)};
	P.$IE7 = $IE7;

	/**
	 * DOM Prototype
	 */
	P.DOM = DOM;
	P.extend = extendObj;
	P.extendDOM = extendDOM;
	P.extendNode = extendNode;

	/**
	 * DOM Prototyping
	 * Internet Explorer 8 missing Node, Document & HTMLElement
	 */
	if (!w.Node) {
		extendObj(DOM.Document, DOM.Node);
		extendObj(DOM.Element,  DOM.Node);
	}
	if (!w.Document) { extendObj(DOM.HTMLDocument, DOM.Document); if (w.HTMLDocument) w.Document = w.HTMLDocument; }
	if (!w.HTMLElement) {
		if (w.Element) {
			extendObj(DOM.Element, DOM.HTMLElement);
			w.HTMLElement = w.Element;
			/** IE8 HTMLObjectElement not extended bug */
			DOM.Document.$ = function(id){ var o = this.getElementById(id); return (!o || o.bind) ? o : extendDOM(o,w.Element.prototype); };
		} else {
			extendObj(DOM.HTMLElement, DOM.Element);
			IE7_Override(doc);
 		}
		// Enable HTML5
		if (ua.ie && 9>ua.ie) for(k=0;k<HTML5.length;++k) doc.createElement(HTML5[k]);
	}

	for (k in DOM) { if (!w[k]) w[k]=function(){}; if (w[k].prototype) extendDOM(w[k].prototype, DOM[k]); }

	function watchProp(object, name)
	{
		var opd=Object.getOwnPropertyDescriptor(o, name);
		Object.defineProperty(o, name, {set:function(v){
			var ov=this[name];
			opd.set.call(this, v);
			v=this[name];
			if (ov!=v) this.trigger("DOMControlValueChanged",{propertyName:name, newValue:v, prevValue:ov})
		}});
	}
	/** el in this order or Firefox throws an exception: "Illegal operation on WrappedNative prototype object" */
	//var el=["HTMLSelectElement","HTMLTextAreaElement","HTMLInputElement"], i=0;
	var o = w.HTMLInputElement.prototype;
	watchProp(o, "value");
	watchProp(o, "checked");

	/**
	 * IE/WebKit DOM Window/Document workaround
	 */
	if (!w.bind) { extendDOM(w, DOM.Window); }
	if (!doc.bind) { extendDOM(doc, DOM.HTMLDocument); }

	/**
	 * Poodle
	 */
	P.UA = extendObj({}, ua);
	P.MSXML = MSXML;
	P.createCSS = createCSS;
	P.getCSSMediaType = function()
	{
		var i=1, id = "PoodleMediaInspector", o = doc.$(id),
		t = ["all","aural","braille","embossed","handheld","print","projection","screen","speech","tty","tv"];
		if (!o) {
			createCSS("#"+id+"{display:none;width:0px}","all");
			for (;i<11;++i) { createCSS("#"+id+"{width:"+i+"px}",t[i]); }
			o = doc.$B().$A(doc.$C("div", {id:id}));
		}
		return t[o?intval(o.css("width",1)):0];
	};
	P.getCookie = function(name)
	{
		var m = document.cookie.match(new RegExp("(?:^|;\\s*)"+name+"=([^;]*)"));
		return m ? m[1] : null;
	};
	P.version = function(){return version};
	P.loadScript = function(file){doc.head.$A("script", {type:"text/javascript",src:file.replace(/&amp;/gi,"&")})};

	k = doc.location;
	P.HOST = k.protocol+"//"+k.host;
	k = doc.scripts;
	k = (new RegExp("://[^/]+((.*/)(?:includes/javascript/))[^/]*$")).exec(k[k.length-1].src)||["","/includes/javascript/","/"];
	P.PATH = k[2];
	P.JS_URI = k[1];
//	var x = (new RegExp("([^\"']*/)([^\"'/]+\.php/)?css/([^\"'/]+)/[^\"']*style")).exec(doc.head.innerHTML);
//	if (!P.CSS_PATH) P.CSS_PATH = x[1]+x[2]+"css/"+x[3]+"/";
//	if (!P.TPL) P.TPL = x[3];

	/**
	 * Cross-browser DOMContentLoaded
	 * Inspired by Dean Edwards' blog: http://dean.edwards.name/weblog/2006/06/again/
	 * Will fire an event when the DOM is loaded (supports: Gecko, IE, Opera9+, WebKit)
	 */
	if (window === w) {
		var DOMListeners = [], DOMLoaded, DOMTimer;
		function callFn()
		{
			if (DOMLoaded) { return; }
			DOMLoaded = true;
			if (DOMTimer) {
				clearInterval(DOMTimer);
				DOMTimer = 0;
			}
			console.info("Poodle\t"+version);
//			console.info("CSS \t"+P.getCSSMediaType());
			console.info("DOM \t"+ua.dom);
			console.info("XMLNS\t"+(doc.$B().namespaceURI||"none"));
			DOMListeners.callFunctions(null, doc);
			DOMListeners = [];
			doc.removeEventListener(DCL, callFn, false);
			w.unbind("load", callFn);
//			if ("Quirks" == P.getCSSMediaType()) { console.error("DOCTYPE declaration is missing"); }
			console.log(DCL);
		};
		doc.addEventListener(DCL, callFn, false);
		if (ua.ie && 9>ua.ie) try {
			P.IE_DOMLoaded = function(o) { if("complete"==o.readyState){ o.parentNode.removeChild(o); callFn(); delete P.IE_DOMLoaded; } };
			doc.write("<scr"+'ipt defer src="//:" onreadyStatechange="Poodle.IE_DOMLoaded(this)"></scr'+"ipt>");
		} catch (e) {}
		if (((ua.webkit && ua.webkit<525) || ua.khtml) && defined(doc.readyState)) {
			DOMTimer = setInterval(function(){if (/loaded|complete/.test(doc.readyState)) { doc.trigger(DCL); }}, 10);
		}
		w.bind("load", callFn);
		P.onDOMReady = function(fn) { DOMLoaded ? fn() : DOMListeners.push(fn); };
		/** Force z-index due to bugs in Internet Explorer 4-7 */
		if (ua.trident3) {
			function fix_zIndexes(nodes)
			{
				var i, n, l=nodes.length, z = 0;
				while (l>0)
				{
					n = nodes[--l];
					z += 20;
					i = intval(n.css("z-index"));
					n.style.zIndex = i ? i+z : z;
					if (n.hasClass("menu")) {
						fix_zIndexes(n.$T("li"));
						fix_zIndexes(n.$T("ul"));
					}
				}
			}
			DOMListeners.push(function(){fix_zIndexes(doc.$T("div"))});
		}
	} else {
		extendDOM(w, window);
	}
};

/**
 * JSON
 * Based on http://www.json.org/json2.js 2010-03-20
 * See http://www.JSON.org/js.html
 * Included in http://www.ecma-international.org/publications/standards/Ecma-262.htm #15.2
 * Native in: Firefox 3.5, IE8, WebKit r44974
 */
DOM.Window.JSON = new function(){

	var cx = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
	escapable = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,
	gap,
	indent,
	meta = {    // table of character substitutions
		'\b': '\\b',
		'\t': '\\t',
		'\n': '\\n',
		'\f': '\\f',
		'\r': '\\r',
		'"' : '\\"',
		'\\': '\\\\'
	},
	rep;

	function q(s)
	{
		return '"' + s.replace(escapable, function (a) { return defined(meta[a]) ? meta[a] : '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4); }) + '"';
	}

	function str(key, holder)
	{
		var i,          // The loop counter.
			k,          // The member key.
			v,          // The member value.
			length,
			mind = gap,
			partial,
			value = holder[key];
		if (value && is_object(value) && is_function(value.toJSON)) { value = value.toJSON(key); }
		if (is_function(rep)) { value = rep.call(holder, key, value); }
		switch (typeof value)
		{
		case "string": return q(value);
		case "number": return isFinite(value) ? String(value) : 'null';
		case "boolean":
		case "null":   return String(value);
		case "object":
			if (!value) { return 'null'; }
			gap += indent;
			partial = [];
			if (Object.prototype.toString.apply(value) === '[object Array]') {
				length = value.length;
				for (i = 0; i < length; i += 1) {
					partial[i] = str(i, value) || 'null';
				}
				v = partial.length === 0 ? '[]' :
					gap ? '[\n' + gap +
							partial.join(',\n' + gap) + '\n' +
								mind + ']' :
						  '[' + partial.join(',') + ']';
				gap = mind;
				return v;
			}
			if (rep && is_object(rep)) {
				length = rep.length;
				for (i = 0; i < length; i += 1) {
					k = rep[i];
					if (is_string(k)) {
						v = str(k, value);
						if (v) {
							partial.push(q(k) + (gap ? ': ' : ':') + v);
						}
					}
				}
			} else {
				for (k in value) {
					if (Object.hasOwnProperty.call(value, k)) {
						v = str(k, value);
						if (v) {
							partial.push(q(k) + (gap ? ': ' : ':') + v);
						}
					}
				}
			}
			v = partial.length === 0 ? '{}' :
				gap ? '{\n' + gap + partial.join(',\n' + gap) + '\n' +
						mind + '}' : '{' + partial.join(',') + '}';
			gap = mind;
			return v;
		}
	}

	this.stringify = function (value, replacer, space)
	{
		if (replacer && !is_function(replacer) &&
				(!is_object(replacer) ||
				 !is_number(replacer.length))) {
			throw new Error('JSON.stringify');
		}
		gap = '';
		indent = (is_number(space) ? "".pad(space) : (is_string(space) ? space : ""));
		rep = replacer;
		return str('', {'': value});
	};

	this.parse = function (text, reviver) {
		function walk(holder, key) {
			var k, v, value = holder[key];
			if (value && is_object(value)) {
				for (k in value) {
					if (Object.hasOwnProperty.call(value, k)) {
						v = walk(value, k);
						if (v !== undefined) {
							value[k] = v;
						} else {
							delete value[k];
						}
					}
				}
			}
			return reviver.call(holder, key, value);
		}

		text = String(text);
		cx.lastIndex = 0;
		if (cx.test(text)) {
			text = text.replace(cx, function (a) { return '\\u' + ('0000' + a.charCodeAt(0).toString(16)).slice(-4); });
		}
		if (/^[\],:{}\s]*$/
			.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, '@')
			.replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']')
			.replace(/(?:^|:|,)(?:\s*\[)+/g, '')))
		{
			var j = eval('(' + text + ')');
			return is_function(reviver) ? walk({'': j}, '') : j;
		}
		throw new SyntaxError('JSON.parse');
	};
};

/**
 * End Poodle DOM initialization
 */
})();

Poodle = new PoodleDOM(window);
