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
*/
/*	MOO CMS, Copyright (c) since 2005 The MOO Dev. Group. All rights reserved.
	$Revision: 1.1 $
*/

// attach to window onload event
if (document.getElementById) { onDomLoad.addEvent(Tabs); }

function Tabs() {

	init();
	// make tab content divs resizable
	function init()
	{
		var x=-1, y, z, t, n, nodes = MOO.getElementsByClassName("tabs", "ul");
					console.info(nodes);
		while (nodes[++x])
		{
			y=-1;
			while (t = nodes[x].childNodes[++y])
			{
				if ("li" != MOO.getNodeName(t)) { continue; }
				for (z = 0; z < t.childNodes.length; ++z) {
					n = t.childNodes[z];
					if ("a" == MOO.getNodeName(n)) {
						addEvent(n, "click", show_tab);
					}
					if ("div" == MOO.getNodeName(n) && hasClassName(n, "tabcontent"))
					{
						n.resizer = new MOO.Resizer(n, 0, 200, null, n);
						break;
					}
				}
			}
		}
	}
	/* mouse activities */
	function show_tab(e)
	{
		var i, li = e.currentTarget.parentNode, items = $T("li", li.parentNode);
		for (i=0; i<items.length; ++i) { stripClassName(items[i], "current"); }
		li.className += " current";
		if (hasClassName(li, "ajax")) {
			li.ajax = new Ajax();
			li.ajax.li = li;
			if (!li.ajax.get(e.currentTarget.href, show_cb)) {
				delete li.ajax;
				li.ajax = null;
				return;
			}
		}
		stopEvent(e, true);
	}
	function show_cb(ajax)
	{
		var z, li = ajax.li, n;
		if (ajax.request.status == 200) {
			for (z = 0; z < li.childNodes.length; ++z) {
				n = li.childNodes[z];
				if ("div" == MOO.getNodeName(n) && hasClassName(n, "tabcontent"))
				{
					if (MOO.setNodeHTML(n, ajax.request.responseText))
					{
						stripClassName(li, "ajax");
					}
					break;
				}
			}
		} else {
			MOO.msg.error(ajax.request.responseText);
		}
		delete li.ajax;
		li.ajax = null;
	}

}
