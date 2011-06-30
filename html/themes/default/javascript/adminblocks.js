var Tack = {
	ft : null,
	ftPos : null,
	id: null,
	mousePos : null,
	root : null,
	src : null,

	move : function(e) {
		if (Tack.src) { return 0;}
		else { return Tack.start(e,this); }
		return 0;
	},
	setCursor : function(o, v){
		o.style.cursor = 'move'; // Opera doesn't support url property for cursor
		o.style.cursor = 'url(themes/default/images/cursors/'+v+'.cur), move';
	},
	start : function(e,o) {
		if (!Tack.src || !Tack.ft) {
			e = e||window.event;
			Tack.src = o;
			// cannot have an integer as element id
			// cannot have an integer as element id
			document.bind("mousemove", Tack.drag);
			document.bind("mouseup"  , Tack.end);
			Tack.mousePos = {x:e.pageX, y:e.pageY};
			Tack.ftPos = Tack.src.getBoundingPagePos();
			Tack.ftPos.scroll = $('blist_fixed') ? document.getScrollPoint().y : 0;
			Tack.ft = document.$C('div',{style:{
				display : 'block',
				width : 'auto',
				position : 'absolute',
				zIndex : 1000,
				top : Tack.ftPos.y+Tack.ftPos.scroll+'px',
				left : Tack.ftPos.x+'px'
			}});
			Tack.setCursor(o,'grabbing');
			Tack.ft.appendChild(o);
			document.body.appendChild(Tack.ft);
		}
	},
	drag : function(e)
	{
		if (Tack.ft) {
			e = e||window.event;
			var mPos = {x:e.pageX, y:e.pageY};
			Tack.ftPos.x += (mPos.x-Tack.mousePos.x);
			Tack.ftPos.y += (mPos.y-Tack.mousePos.y);
			Tack.ft.style.left = Tack.ftPos.x+'px';
			Tack.ft.style.top = Tack.ftPos.y+Tack.ftPos.scroll+'px';
			Tack.mousePos = mPos;
		}
	},
	end : function() {
		if (Tack.src && Tack.ft) {
			document.unbind("mousemove", Tack.drag);
			document.unbind("mouseup"  , Tack.end);
			var home = $('tack_home')||$('tack_holiday'),
			   table = $('blist')||$('blist_fixed');
			Tack.setCursor(Tack.ft.firstChild,'grab');
			if (table.getBoundingPageX()<=Tack.ftPos.x && table.getBoundingPageY()>=Tack.ftPos.y) {
				home.id = 'tack_holiday';
				table.id = 'blist_fixed';
				home.appendChild(Tack.ft.firstChild);
			} else {
				home.id = 'tack_home';
				table.id = 'blist';
				home.appendChild(Tack.ft.firstChild);
			}
		}
		Tack.src = Tack.ft = null;
	}
};

var Block = {
	accept : null,
	childs: null,
	cleanChilds: new Array(),
	uls: new Array(),
	ft : null,
	ftPos : null,
	granPa : null,
	id: null,
	mousePos : null,
	root : null,
	src : null,

	move : function(e) {
		if (Block.src) { return 0;}
		else { return Block.start(e,this); }
		return 0;
	},
	hover : function(o){
		if (!Block.src && o) {
			if (o.nodeName.toLowerCase() == 'td') {
				if (Block.accept) {
					Tack.setCursor(o,'copy');
					o.bind("mousedown", Block.move);
				} else {
					o.style.cursor = 'not-allowed';
					o.unbind("mousedown", Block.move);
				}
			}
			else if (o.nodeName.toLowerCase() == 'li') {
				if (Block.accept) {
					o.style.cursor = 'not-allowed';
					o.unbind("mousedown", Block.move);
				} else {
					Tack.setCursor(o,'grab');
					o.bind("mousedown", Block.move);
				}
			}
		}
	},
	start : function(e,o) {
		if (!Block.src || !Block.ft) {
			Block.src = o;
			// cannot have an integer as element id
			var splitted = Block.src.title.split('.'),
			    title = splitted[0];
			Block.id = splitted[1];
			if (Block.accept && Block.root) {
				var l = document.$C('li');
				l.style.listStyle = 'none';
				l.$A(document.createTextNode(title));
				l.$A('input',{type:'hidden', name:'id[]', value:Block.id});
				l.$A('input',{type:'hidden', name:'side[]', value:''});
				l.$A('input',{type:'hidden', name:'weight[]', value:''});
				if (Block.candrop()) {
					Block.root.appendChild(l);
					Block.src = Block.id = null;
				}
			} else if (!Block.accept) {
				document.bind("mousemove", Block.drag);
				document.bind("mouseup"  , Block.end);
				Block.mousePos = {x:e.pageX, y:e.pageY};
				Block.ftPos = Block.src.getBoundingPagePos();
				Block.ft = document.$C('div', {style:{
					display: 'block',
					width: 'auto',
					position: 'absolute',
					zIndex: 1000,
					top: Block.ftPos.y+'px',
					left: Block.ftPos.x+'px'
				}});
				Tack.setCursor(o,'grabbing');
				// IE doesn't support className dinamical changes
				// Safari will not -even- pickup the url cursor created with javascript
				// no problems with Netscape and Firefox
				//o.style.cursor = null;
				//Block.ft.setAttribute('class', 'grabbing');
				//Block.ft.className = 'grabbing';
				//Tack.setCursor(Block.ft,'grabbing');
				o.style.listStyle = 'none';
				Block.ft.appendChild(o);
				document.body.appendChild(Block.ft);
				Block.getchilds();
				//Block.childs = Block.granPa.getElementsByTagName('li');
			}
		}
	},
	drag : function(e)
	{
		if (Block.ft) {
			var mPos = {x:e.pageX, y:e.pageY};
			Block.ft.setCSS({
				left: (Block.ftPos.x += (mPos.x-Block.mousePos.x)) + 'px',
				top:  (Block.ftPos.y += (mPos.y-Block.mousePos.y)) + 'px'
			});
			Block.mousePos = mPos;
		}
	},
	end : function(e) {
		if (Block.src && Block.ft) {
			document.unbind("mousemove", Block.drag);
			document.unbind("mouseup"  , Block.end);
			if (Block.childs && Block.candrop()) {
				// hardcode to remove all onmouseover events each ul
				// however will be rewritten
				if (Block.uls[0].getBoundingPageX()+50>=Block.ftPos.x) {
					Block.drop(Block.uls[0]);
				} else if (Block.uls[3].getBoundingPageX()-50<=Block.ftPos.x) {
					var r = $(Block.granPa.id+'_recycle').getBoundingPagePos(),
					    m = Block.ftPos;
					if (r.y<=m.y && r.y+32>=m.y && r.x-20<=m.x && r.x+32>=m.x) {
						$(Block.granPa.id+'_recycled').appendChild(Block.ft.firstChild);
					} else {
						Block.drop(Block.uls[3]);
					}
				} else if (Block.uls[1].getBoundingPageY()>=Block.ftPos.y || Block.uls[2].getBoundingPageY()>=Block.ftPos.y) {
					Block.drop(Block.uls[1]);
				}	else if (Block.uls[2].getBoundingPageY()<=Block.ftPos.y) {
					Block.drop(Block.uls[2]);
				}
			}
		}
		Block.src = Block.ft = Block.id = null;
		Block.getchilds();
		Block.dispatchHover();
	},
	drop : function(p) {
		var i, ulChilds = p.getElementsByTagName('li');
		for (i=0; i<ulChilds.length; ++i) {
			if (ulChilds[i].getBoundingPageY()>=Block.ftPos.y && i>0) {
				p.insertBefore(Block.ft.firstChild,ulChilds[i]);
				break;
			}
		}
		if (i == ulChilds.length) {
			p.appendChild(Block.ft.firstChild);
		}
	},
	candrop : function() {
		if (Block.src) {
			var i, els = Block.granPa.getElementsByTagName('input');
			for (i=0; i<els.length; ++i) {
				if (els[i].getAttributeNode('name').nodeValue == 'id[]' && els[i].value == Block.id) {
					Block.id = Block.src = null;
					return 0;
				}
			}
		}
		return 1;
	},
	setparent : function(o) {
		// Block.accept needs to be specified before assigning Block.hover to elements
		if (!Block.root && o) {
			Block.root = o.parentNode;
			Block.accept = true;
			Block.dispatchHover();
			o.className = 'active_parent';
		} else {
			if (Block.root == o.parentNode) {
				Block.root = Block.accept = null;
				Block.dispatchHover();
			} else {
				Block.root = o.parentNode;
				Block.accept = true;
				Block.dispatchHover();
				o.className = 'active_parent';
			}
		}
	},
	dispatchHover : function () {
		for (var i=0; i<Block.childs.length; ++i) {
			if (Block.childs[i].className) {
				Block.childs[i].className = 'parent';
			} else {
				Block.childs[i].unbind("mousedown", Block.move);
				Block.hover(Block.childs[i]);
			}
		}
	},
	getchilds : function () {
		Block.cleanChilds = new Array;
		var all = Block.granPa.getElementsByTagName('li');
		// onmouseover each ul doesn't responde that quick
		// write a better script using OnDrag(), OnMove(), OnDrop()
		// or save more data as possible
		for (var i=0, c=0, u=0; i<all.length; ++i, ++c, ++u) {
			if (all[i].className) {
				Block.uls[u] = all[i].parentNode;
				--c;
			} else {
				Block.cleanChilds[c] = all[i];
				--u;
			}
		}
		return
	},
	activate : function(p, o, tag) {
		if (Block.granPa && Block.granPa != $(o)) return;
		if (Block.root) {
			Block.accept = true;
			Block.dispatchHover();
			Block.accept = Block.root = null;
		}
		p = $(p);
		Block.granPa = $(o);
		var splitted = Block.granPa.id.split('.');
		Block.granPa.name = splitted[0];
		Block.granPa.mid = splitted[1];
		Block.childs = Block.granPa.getElementsByTagName('li');
		var i, tags = p.getElementsByTagName(tag);
		for (i=0; i<tags.length; ++i) {
			if (tags[i].getAttribute('id')) {
				if (tags[i].id == Block.granPa.id) {
					if (Block.granPa.style.display == 'none') {
						Block.granPa.style.display = '';
					} else {
						Block.granPa.style.display = 'none';
						Block.clean();
						return;
					}
				} else {
					tags[i].style.display = 'none';
		}	}	}
		for (i=0, j=0; i<Block.childs.length; ++i, ++j) {
			if (Block.childs[i].className) {
				--j;
			} else {
				Block.cleanChilds[j] = Block.childs[i];
				Block.hover(Block.cleanChilds[j]);
			}
		}
	},
	clean: function() {
		document.unbind("mousemove", this.drag);
		document.unbind("mouseup"  , this.end);
		if (Block.ft) { document.body.removeChild(Block.ft); }
		Block.accept = Block.granPa = Block.id = Block.src = Block.ft = null;
		Block.ftPos = Block.root = Block.childs = null;
		Block.cleanChilds = new Array();
	}
};

Poodle.onDOMReady(function(){
	var i, groups = $("mlist").$Q("div.mgroup");
	for (i=0; i<groups.length; ++i) {
		groups[i].bind("click", function(e){
			var div = e.currentTarget;
			if (e.target == div || e.target.parentNode == div) {
				var form=div.parent();
				Block.activate(form.id, form.getFieldByName("module").value+'.'+form.getFieldByName("mid").value/*'Admin.-1'*/, 'div')
			}
		});
		var x, pos = groups[i].$Q("li.parent");
		for (x=0; x<pos.length; ++x) {
			pos[x].bind("click", function(e){Block.setparent(e.currentTarget)});
		}
	}

	blocks = $("blist").$Q("td.drag_img");
	for (i=0; i<blocks.length; ++i) {
		blocks[i].bind("mouseover", function(e){Block.hover(e.currentTarget)});
	}

	var o = $("tack");
	if (o) {
		Tack.setCursor(o,'grab');
		o.bind("mousedown", Tack.move);
	}
});

function new_block(id) {
	var obj = $(id);
	if (obj.style.display=='inline') {
		obj.style.display = 'none';
		$('add_new_block').style.display = 'none';
	} else if ($('add_new_block').style.display == 'inline') {
		//getting lazy here
		$('new_rss').style.display = 'none';
		$('new_fromfile').style.display = 'none';
		$('new_custom').style.display = 'none';
		obj.style.display = 'inline';
	} else {
		$('add_new_block').style.display = 'inline';
		obj.style.display = 'inline';
	}
}
