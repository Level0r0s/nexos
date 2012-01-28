/*
  $Id$ 
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright � 2009 by Myndworx Asylum                          |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | JSCookMenu.js - NexOS JSCook Menu js file                         |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org                                  |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
	|	JSCookMenu v1.23.  (c) Copyright 2002 by Heng Yuan                |
	|                                                                   |
	|	Permission is hereby granted, free of charge, to any person       |
	| obtaining a copy of this software and associated documentation    |
	| files (the "Software"), to deal in the Software without           |
	| restriction, including without limitation the rights to use,      |
	| copy, modify, merge, publish, distribute, sublicense, and/or sell |
	| copies of the Software, and to permit persons to whom the Software|
	| is furnished to do so, subject to the following conditions:       |
  |                                                                   |
	|	The above copyright notice and this permission notice shall be    |
	| included in all copies or substantial portions of the Software.   |
	|                                                                   |
	|	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,   |
	| EXPRESS	OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES   |
	| OF MERCHANTABILITY, ITNESS FOR A PARTICULAR PURPOSE AND           |
	| NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT       |
	| HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,      |
	| WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING      |
	|	FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR     |
	| OTHER DEALINGS IN THE SOFTWARE.                                   |
  +-------------------------------------------------------------------+
   Last modification notes:
    $Author$
    $Date$
    $Rev$
*/


// Globals
var _cmIDCount = 0;
var _cmIDName = 'cmSubMenuID';   // for creating submenu id

var _cmTimeOut = null;		   // how long the menu would stay
var _cmCurrentItem = null;	   // the current menu item being selected;

var _cmNoAction = new Object (); // indicate that the item cannot be hovered.
var _cmSplit = new Object ();	// indicate that the item is a menu split

var _cmItemList = new Array ();  // a simple list of items

// default node properties
var _cmNodeProperties =
{
	// main menu display attributes
	//
	// Note.  When the menu bar is horizontal,
	// mainFolderLeft and mainFolderRight are
	// put in <span></span>.  When the menu
	// bar is vertical, they would be put in
	// a separate TD cell.

	// HTML code to the left of the folder item
	mainFolderLeft: '',
	// HTML code to the right of the folder item
	mainFolderRight: '',
	// HTML code to the left of the regular item
	mainItemLeft: '',
	// HTML code to the right of the regular item
	mainItemRight: '',

	// sub menu display attributes

	// HTML code to the left of the folder item
	folderLeft: '',
	// HTML code to the right of the folder item
	folderRight: '',
	// HTML code to the left of the regular item
	itemLeft: '',
	// HTML code to the right of the regular item
	itemRight: '',
	// cell spacing for main menu
	mainSpacing: 0,
	// cell spacing for sub menus
	subSpacing: 0,
	// auto dispear time for submenus in milli-seconds
	delay: 500
};

//////////////////////////////////////////////////////////////////////
//
// Drawing Functions and Utility Functions
//
//////////////////////////////////////////////////////////////////////

// produce a new unique id
function cmNewID ()
{
	return _cmIDName + (++_cmIDCount);
}

// return the property string for the menu item
function cmActionItem (item, prefix, isMain, idSub, orient, nodeProperties)
{
	// var index = _cmItemList.push (item) - 1;
	_cmItemList[_cmItemList.length] = item;
	var index = _cmItemList.length - 1;
	idSub = (!idSub) ? 'null' : ('\'' + idSub + '\'');
	orient = '\'' + orient + '\'';
	prefix = '\'' + prefix + '\'';
	return ' onmouseover="cmItemMouseOver (this,' + prefix + ',' + isMain + ',' + idSub + ',' + orient + ',' + index + ')" onmouseout="cmItemMouseOut (this,' + nodeProperties.delay + ')" onmousedown="cmItemMouseDown (this,' + index + ')" onmouseup="cmItemMouseUp (this,' + index + ')"';
}

function cmNoActionItem (item, prefix)
{
	return item[1];
}

function cmSplitItem (prefix, isMain, vertical)
{
	var classStr = 'cm' + prefix;
	if (isMain) {
		classStr += 'Main';
		classStr += (vertical ?	'HSplit' : 'VSplit');
	} else
		classStr += 'HSplit';
	var item = eval (classStr);
	return cmNoActionItem (item, prefix);
}

// draw the sub menu recursively
function cmDrawSubMenu (subMenu, prefix, id, orient, nodeProperties)
{
	var str = '<div class="' + prefix + 'SubMenu" id="' + id + '"><table summary="sub menu" cellspacing="' + nodeProperties.subSpacing + '" class="' + prefix + 'SubMenuTable">';
	var strSub = '';
	var item;
	var idSub;
	var hasChild;
	var i;
	var classStr;
	for (i = 5; i < subMenu.length; ++i) {
		item = subMenu[i];
		if (!item) continue;
		hasChild = (item.length > 5);
		idSub = hasChild ? cmNewID () : null;
		str += '<tr class="' + prefix + 'MenuItem"' + cmActionItem (item, prefix, 0, idSub, orient, nodeProperties) + '>';
		if (item == _cmSplit) {
			str += cmSplitItem (prefix, 0, true);
			str += '</tr>';
			continue;
		}
		if (item[0] == _cmNoAction) {
			str += cmNoActionItem (item, prefix);
			str += '</tr>';
			continue;
		}
		classStr = prefix + 'Menu';
		classStr += hasChild ? 'Folder' : 'Item';
		str += '<td class="' + classStr + 'Left">';
		if (item[0] != null && item[0] != _cmNoAction)
			str += item[0];
		else
			str += hasChild ? nodeProperties.folderLeft : nodeProperties.itemLeft;
		str += '<td class="' + classStr + 'Text">' + item[1];
		str += '<td class="' + classStr + 'Right">';
		if (hasChild) {
			str += nodeProperties.folderRight;
			strSub += cmDrawSubMenu (item, prefix, idSub, orient, nodeProperties);
		} else
			str += nodeProperties.itemRight;
		str += '</td></tr>';
	}

	str += '</table></div>' + strSub;
	return str;
}

// The function that builds the menu inside the specified element id.
//
// @param	id	id of the element
//		orient	orientation of the menu in [hv][ab][lr] format
//		menu	the menu object to be drawn
//		nodeProperties	properties for each menu node
function cmDraw (id, menu, orient, nodeProperties, prefix)
{
	var obj = cmGetObject (id);
	if (!nodeProperties) nodeProperties = _cmNodeProperties;
	if (!prefix) prefix = '';
	var str = '<table summary="main menu" class="' + prefix + 'Menu" cellspacing="' + nodeProperties.mainSpacing + '">';
	var strSub = '';
	orient = 'hbr';
	orientSub = 'vbr';
	str += '<tr>';
	// draw the main menu items
	var i;
	var item;
	var idSub;
	var hasChild;
	var classStr;
	for (i = 0; i < menu.length; ++i) {
		item = menu[i];
		if (!item) continue;
		str += '<td class="' + prefix + 'MainItem"';
		hasChild = (item.length > 5);
		idSub = hasChild ? cmNewID () : null;
		str += cmActionItem (item, prefix, 1, idSub, orient, nodeProperties) + '>';
		if (item == _cmSplit) {
			str += cmSplitItem (prefix, 1, false);
			str += '</td>';
			continue;
		}
		if (item[0] == _cmNoAction) {
			str += cmNoActionItem (item, prefix);
			str += '</td>';
			continue;
		}
		classStr = prefix + 'Main' + (hasChild ? 'Folder' : 'Item');

		str += '<span class="' + classStr + 'Left">';
		str += (item[0] == null) ? (hasChild ? nodeProperties.mainFolderLeft : nodeProperties.mainItemLeft) : item[0];
		str += '</span>';
		str += '<span class="' + classStr + 'Text">' + item[1] + '</span>';
		str += '<span class="' + classStr + 'Right">';
		str += hasChild ? nodeProperties.mainFolderRight : nodeProperties.mainItemRight;
		str += '</span>';
		str += '</td>';
		if (hasChild)
			strSub += cmDrawSubMenu (item, prefix, idSub, orientSub, nodeProperties);
	}
	str += '</tr></table>' + strSub;
	obj.innerHTML = str;
}

//////////////////////////////////////////////////////////////////////
//
// Mouse Event Handling Functions
//
//////////////////////////////////////////////////////////////////////

// action should be taken for mouse moving in to the menu item
function cmItemMouseOver (obj, prefix, isMain, idSub, orient, index)
{
	clearTimeout (_cmTimeOut);
	if (!obj.cmPrefix) {
		obj.cmPrefix = prefix;
		obj.cmIsMain = isMain;
	}
	var thisMenu = cmGetThisMenu (obj, prefix);
	// insert obj into cmItems if cmItems doesn't have obj
	if (!thisMenu.cmItems) thisMenu.cmItems = new Array ();
	var i;
	for (i = 0; i < thisMenu.cmItems.length; ++i) {
		if (thisMenu.cmItems[i] == obj)
			break;
	}
	if (i == thisMenu.cmItems.length) {
		//thisMenu.cmItems.push (obj);
		thisMenu.cmItems[i] = obj;
	}

	// hide the previous submenu that is not this branch
	if (_cmCurrentItem) {
		// occationally, we get this case when user
		// move the mouse slowly to the border
		if (_cmCurrentItem == thisMenu) return;
		var thatPrefix = _cmCurrentItem.cmPrefix;
		var thatMenu = cmGetThisMenu (_cmCurrentItem, thatPrefix);
		if (thatMenu != thisMenu.cmParentMenu) {
			if (_cmCurrentItem.cmIsMain)
				_cmCurrentItem.className = thatPrefix + 'MainItem';
			else
				_cmCurrentItem.className = thatPrefix + 'MenuItem';
			if (thatMenu.id != idSub)
				cmHideMenu (thatMenu, thisMenu, thatPrefix);
		}
	}
	// okay, set the current menu to this obj
	_cmCurrentItem = obj;
	// just in case, reset all items in this menu to MenuItem
	cmResetMenu (thisMenu, prefix);
	var item = _cmItemList[index];
	var isDefaultItem = cmIsDefaultItem (item);
	if (isDefaultItem) {
		obj.className = prefix+(isMain ? 'MainItemHover' : 'MenuItemHover');
	}
	if (idSub) {
		var subMenu = cmGetObject(idSub);
		if (subMenu) cmShowSubMenu(obj, prefix, subMenu, orient);
	}
	var descript = '';
	if (item.length > 4)
		descript = (item[4] != null) ? item[4] : (item[2] ? item[2] : descript);
	else if (item.length > 2)
		descript = (item[2] ? item[2] : descript);
	window.defaultStatus = descript;
}

// action should be taken for mouse moving out of the menu item
function cmItemMouseOut (obj, delayTime)
{
	if (!delayTime) delayTime = _cmNodeProperties.delay;
	_cmTimeOut = window.setTimeout ('cmHideMenuTime ()', delayTime);
	window.defaultStatus = '';
}

// action should be taken for mouse button down at a menu item
function cmItemMouseDown (obj, index)
{
	if (cmIsDefaultItem (_cmItemList[index])) {
		obj.className = obj.cmPrefix+(obj.cmIsMain ? 'MainItemActive' : 'MenuItemActive');
	}
}

// action should be taken for mouse button up at a menu item
function cmItemMouseUp (obj, index)
{
	var item = _cmItemList[index];
	var link = null, target = '_self';
	if (item.length > 2) link = item[2];
	if (item.length > 3) target = item[3] ? item[3] : target;
	if (link != null) { window.open (link, target); }
	var prefix = obj.cmPrefix;
	var thisMenu = cmGetThisMenu (obj, prefix);
	var hasChild = (item.length > 5);
	if (hasChild) {
		if (cmIsDefaultItem (item)) {
			if (obj.cmIsMain) obj.className = prefix + 'MainItemHover';
			else obj.className = prefix + 'MenuItemHover';
		}
	}
}

//////////////////////////////////////////////////////////////////////
//
// Mouse Event Support Utility Functions
//
//////////////////////////////////////////////////////////////////////

// move submenu to the appropriate location
//
// @param	obj	the menu item that opens up the subMenu
//		subMenu	the sub menu to be shown
//		orient	the orientation of the subMenu
function cmMoveSubMenu (obj, subMenu, orient)
{
	var mode = String (orient);
	var p = subMenu.offsetParent;
	if (mode.charAt (0) == 'h') {
		if (mode.charAt (1) == 'b')
			subMenu.style.top = (cmGetYAt (obj, p) + obj.offsetHeight) + 'px';
		else
			subMenu.style.top = (cmGetYAt (obj, p) - subMenu.offsetHeight) + 'px';
		if (mode.charAt (2) == 'r')
			subMenu.style.left = (cmGetXAt (obj, p)) + 'px';
		else
			subMenu.style.left = (cmGetXAt (obj, p) + obj.offsetWidth - subMenu.offsetWidth) + 'px';
	} else {
		if (mode.charAt (2) == 'r')
			subMenu.style.left = (cmGetXAt (obj, p) + obj.offsetWidth) + 'px';
		else
			subMenu.style.left = (cmGetXAt (obj, p) - subMenu.offsetWidth) + 'px';
		if (mode.charAt (1) == 'b')
			subMenu.style.top = (cmGetYAt (obj, p)) + 'px';
		else
			subMenu.style.top = (cmGetYAt (obj, p) + obj.offsetHeight - subMenu.offsetHeight) + 'px';
	}
}

// show the subMenu w/ specified orientation
// also move it to the correct coordinates
//
// @param	obj	the menu item that opens up the subMenu
//		subMenu	the sub menu to be shown
//		orient	the orientation of the subMenu
function cmShowSubMenu (obj, prefix, subMenu, orient)
{
	if (!subMenu.cmParentMenu) {
		// establish the tree w/ back edge
		var thisMenu = cmGetThisMenu(obj, prefix);
		subMenu.cmParentMenu = thisMenu;
		if (!thisMenu.cmSubMenu) thisMenu.cmSubMenu = new Array();
		thisMenu.cmSubMenu[thisMenu.cmSubMenu.length] = subMenu;
	}
	// position the sub menu
	cmMoveSubMenu (obj, subMenu, orient);
	subMenu.style.visibility = 'visible';
	// On IE, controls such as SELECT, OBJECT, IFRAME (before 5.5)
	// are window based controls.  So, if sub menu and these controls
	// overlap, sub menu would be hid behind them.  Thus, one needs to
	// turn the visibility of these controls off when the
	// sub menu is showing, and turn their visibility back on
	if (document.all) { // it is IE
		subMenu.cmOverlap = new Array ();
		cmHideControl ("IFRAME", subMenu);
		cmHideControl ("SELECT", subMenu);
		cmHideControl ("OBJECT", subMenu);
	}
}

// reset all the menu items to class MenuItem in thisMenu
function cmResetMenu (thisMenu, prefix)
{
	if (thisMenu.cmItems) {
		var i;
		var str;
		var items = thisMenu.cmItems;
		for (i = 0; i < items.length; ++i) {
			if (items[i].cmIsMain) str = prefix + 'MainItem';
			else str = prefix + 'MenuItem';
			if (items[i].className != str)
				items[i].className = str;
		}
	}
}

// called by the timer to hide the menu
function cmHideMenuTime ()
{
	if (_cmCurrentItem) {
		var prefix = _cmCurrentItem.cmPrefix;
		cmHideMenu (cmGetThisMenu (_cmCurrentItem, prefix), null, prefix);
	}
}

// hide thisMenu, children of thisMenu, as well as the ancestor
// of thisMenu until currentMenu is encountered.  currentMenu
// will not be hidden
function cmHideMenu (thisMenu, currentMenu, prefix)
{
	var str = prefix + 'SubMenu';
	// hide the down stream menus
	if (thisMenu.cmSubMenu) {
		var i;
		for (i = 0; i < thisMenu.cmSubMenu.length; ++i) {
			cmHideSubMenu (thisMenu.cmSubMenu[i], prefix);
		}
	}

	// hide the upstream menus
	while (thisMenu && thisMenu != currentMenu) {
		cmResetMenu (thisMenu, prefix);
		if (thisMenu.className == str) {
			thisMenu.style.visibility = 'hidden';
			cmShowControl (thisMenu);
		}
		else break;
		thisMenu = cmGetThisMenu (thisMenu.cmParentMenu, prefix);
	}
}

// hide thisMenu as well as its sub menus if thisMenu is not already hidden
function cmHideSubMenu (thisMenu, prefix)
{
	if (thisMenu.style.visibility == 'hidden') return;
	if (thisMenu.cmSubMenu) {
		var i;
		for (i = 0; i < thisMenu.cmSubMenu.length; ++i) {
			cmHideSubMenu (thisMenu.cmSubMenu[i], prefix);
		}
	}
	cmResetMenu (thisMenu, prefix);
	thisMenu.style.visibility = 'hidden';
	cmShowControl (thisMenu);
}

// hide a control such as IFRAME
function cmHideControl (tagName, subMenu)
{
	var x = cmGetX (subMenu);
	var y = cmGetY (subMenu);
	var w = subMenu.offsetWidth;
	var h = subMenu.offsetHeight;
	var i;
	for (i = 0; i < document.all.tags(tagName).length; ++i) {
		var obj = document.all.tags(tagName)[i];
		if (!obj || !obj.offsetParent) continue;
		// check if the object and the subMenu overlap
		var ox = cmGetX (obj);
		var oy = cmGetY (obj);
		var ow = obj.offsetWidth;
		var oh = obj.offsetHeight;
		if (ox > (x + w) || (ox + ow) < x) continue;
		if (oy > (y + h) || (oy + oh) < y) continue;
		subMenu.cmOverlap[subMenu.cmOverlap.length] = obj;
		obj.style.visibility = "hidden";
	}
}

// show the control hidden by the subMenu
function cmShowControl (subMenu)
{
	if (subMenu.cmOverlap) {
		var i;
		for (i = 0; i < subMenu.cmOverlap.length; ++i)
			subMenu.cmOverlap[i].style.visibility = "";
	}
	subMenu.cmOverlap = null;
}

// returns the main menu or the submenu table where this obj (menu item) is in
function cmGetThisMenu (obj, prefix)
{
	var str1 = prefix + 'SubMenu';
	var str2 = prefix + 'Menu';
	while (obj) {
		if (obj.className == str1 || obj.className == str2) return obj;
		obj = obj.parentNode;
	}
	return null;
}

// return true if this item is handled using default handlers
function cmIsDefaultItem (item)
{
	if (item == _cmSplit || item[0] == _cmNoAction) return false;
	return true;
}

// returns the object baring the id
function cmGetObject (id)
{
	if (document.all) return document.all[id];
	return document.getElementById (id);
}

// functions that obtain the coordinates of an HTML element
function cmGetX (obj)
{
	var x = 0;
	do {
		x += obj.offsetLeft;
		obj = obj.offsetParent;
	}
	while (obj);
	return x;
}

function cmGetXAt (obj, elm)
{
	var x = 0;
	while (obj && obj != elm) {
		x += obj.offsetLeft;
		obj = obj.offsetParent;
	}
	return x;
}

function cmGetY (obj)
{
	var y = 0;
	do {
		y += obj.offsetTop;
		obj = obj.offsetParent;
	}
	while (obj);
	return y;
}

function cmGetYAt (obj, elm)
{
	var y = 0;
	while (obj && obj != elm) {
		y += obj.offsetTop;
		obj = obj.offsetParent;
	}
	return y;
}
