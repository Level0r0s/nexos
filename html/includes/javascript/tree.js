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
var groupstree = new TableTree();
groupstree.min_id = 4;
groupstree.onAdd = function(tr,id) {
	/* hidden cell */
	var td = document.createElement('td');
		var i = document.createElement('input');
			i.name='type['+id+'][]';
			i.type='checkbox';
			i.value=1;
			i.checked='checked';
		td.appendChild(i);
	tr.appendChild(td);
	/* closed cell */
	td = document.createElement('td');
		i = document.createElement('input');
			i.name='type['+id+'][]';
			i.type='checkbox';
			i.value=2;
			i.checked='checked';
		td.appendChild(i);
	tr.appendChild(td);
	this.addDeleteCell(tr);
	/* description cell */
	td = document.createElement('td');
		i = document.createElement('textarea');
			i.name='desc['+id+']';
			i.className='groupsdescription';
		td.appendChild(i);
	tr.appendChild(td);
}
