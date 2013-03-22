/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
  | CPG Dragonfly™ CMS                                                |
  | Copyright © 2004 - 2005 by CPG-Nuke Dev Team                      |
  | http://www.dragonflycms.com                                       |
  | Dragonfly is released under the terms and conditions of the GNU   |
  | GPL version 2 or any later version                                |
  +-------------------------------------------------------------------+
*/
function Ajax()
{

	/* Private */

	var cb = null;
	function getTransport() {
		try { return new XMLHttpRequest(); }catch(e){}
		try { return new ActiveXObject('Msxml2.request'); }catch(e){}
		try { return new ActiveXObject('Microsoft.request'); }catch(e){}
		return false;
	};

	/* Privileged */

	this.onStateChange = function() {
		if (this.request.readyState == 4) {
			if (typeof cb == 'function') try { cb(this); }catch(e){}
		}
	};

	this.get = function(url, callback) {
		if (!this.request) { return false; }
		cb = callback;
		this.request.open('get', url, true);
		this.request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		this.request.send(null);
		return true;
	};

	this.post = function(url, data, callback) {
		if (!this.request) { return false; }
		addClassName(document.body, 'ajax_loading');
		cb = callback;
		this.request.open('post', url, true);
		this.request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		this.request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		this.request.setRequestHeader('Content-Length', data.length);
		this.request.send(data);
		return true;
	};

	/* Public */

	this.request = getTransport();
	if (!this.request) { return; }
	this.request.onreadystatechange = this.onStateChange.bind(this);

}

var AjaxGUI =
{

	updateProgress:function(e) {
		addClassName(document.body, 'ajax_loading');
	},
	transferComplete:function(e) {
		stripClassName(document.body, "ajax_loading");
	},
	transferFailed:function(e) {
	},
	transferCanceled:function(e) {
	}
}
