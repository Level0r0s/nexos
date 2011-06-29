/**
* CPG Dragonfly CMS
* Copyright (c) 2004-2005 by CPG-Nuke Dev Team, www.dragonflycms.com
* Released under the GNU GPL version 2 or any later version
* $Id: README.txt,v 1.3 2005/02/13 23:43:37 trevor Exp $
*/

To use 1 of these WYSIWYG's you need to upload the FOLDER
to the following directory inside the Dragonfly root:

/includes/wysiwyg/

So you get:

/includes/wysiwyg/fckeditor/
/includes/wysiwyg/htmlarea/
/includes/wysiwyg/spaw/

Use the "includes/wysiwyg/wysiwyg.inc", which is already in Dragonfly,
to control which wysiwyg you want to use.

Example:

<?php
if (!defined('CPG_NUKE')) { exit; }

// include the "base" wysiwyg controller
require_once('includes/wysiwyg/wysiwyg.inc');

// initialize a instance (you can have as many if you want)
// Wysiwyg($type, $field, $width, $height, $content)
// $type = '', 'fckeditor', 'htmlarea' or 'spaw'
$wysiwyg = new Wysiwyg('', 'content', '100%', '400px', 'first area');
$wysiwyg2 = new Wysiwyg('htmlarea', 'content2', '100%', '400px', 'second area');

// Must be called 1 time BEFORE the inclusion of header.php
$wysiwyg->setHeader();

require_once('header.php');
OpenTable();

// Output the wysiwyg <textarea>
$wysiwyg->Show();
$wysiwyg2->Show();

CloseTable();