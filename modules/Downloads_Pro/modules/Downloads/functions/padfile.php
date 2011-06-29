<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/modules/Downloads/functions/padfile.php,v $
  $Revision: 1.6 $
  $Author: djmaze $
  $Date: 2010/08/10 16:51:14 $
******************************************************
  Copyright 2004 by Association of Shareware Professionals, Inc.
  All Rights Reserved.
  PAD, PADGen, and PADKit are trademarks of the Association of Shareware
  Professionals in the United States and/or other countries.

  http://www.asp-shareware.org/pad/
*****************************************************/

if (!defined('CPG_NUKE')) { exit; }

# XMLNode class
# Represents a simple XML Node with tag name, value and an array of child nodes
class XMLNode
{
	public $Name;
	public $Value = '';
	public $ParentNode;
	public $ChildNodes;
	public $Level = 0;

	function __construct($Name, XMLNode $parent=null)
	{
		$this->Name = $Name;
		$this->ChildNodes = array();
		$this->ParentNode = $parent;
		$this->Level = $parent->Level + 1;
	}

	# Clear contents
	public function Clear()
	{
		$this->Name = '';
		$this->ChildNodes = array();
		unset($this->ParentNode);
		$this->Level = 0;
	}

	# Append a node
	# IN:      $Name - the tag name of the node to add
	# RETURNS: reference to the XMLNode object that has been created
	public function &AppendNode($Name)
	{
		$node = new XMLNode($Name, $this);
		array_push($this->ChildNodes, &$node);
		return $node;
	}

	# Returns the node according to the path (/-separated)
	# IN:      $Path - the path to the XML node, e.g. Root/Child/Name
	# RETURNS: reference to the XMLNode object, NULL if node is not found
	public function &FindNodeByPath($Path)
	{
		$tags = explode('/', $Path);
		if (count($tags) <= 0) return NULL;
		$node =& $this;
		foreach($tags as $tag) {
			if (($tag != '') && !($node =& $node->FindNodeByName($tag))) return NULL;
		}
		return $node;
	}

	# Returns a node value according to the path (/-separated)
	# IN:      $Path    - the path to the XML node, e.g. Root/Child/Name
	# IN:      $Default - value to use if node does not exists (optional)
	# RETURNS: value of the node as string, empty string or default value if
	#          node is not found
	public function GetValue($Path, $Default = '')
	{
		$node =& $this->FindNodeByPath($Path);
		return ($node) ? $node->Value : $Default;
	}

	# Returns the node according to the name
	# IN:      $Name - the name of the XML child node, e.g. Child
	# RETURNS: reference to the XMLNode object, NULL if node is not found
	public function &FindNodeByName($Name)
	{
		foreach ($this->ChildNodes as $node) {
			if ($node->Name == $Name) return $node;
		}
		return NULL;
	}
}


# PADFile class
# Represents the XML file read from URL (URL or local file).
# Parses the XML into a tree of PADNode objects (property PAD).
class PADFile
{
	// Error values
	const ERR_NO_URL_SPECIFIED     = 1;
	const ERR_READ_FROM_URL_FAILED = 2;
	const ERR_PARSE_ERROR          = 3;

	public $URL = '';
	public $XML;
	public $ParseError = '';
	public $LastError = 0;
	public $OutputEncoding = 'UTF-8';

	private $CurrentNode;

	# IN: $URL - the URL or local path of the XML file (optional)
	function __construct($URL = '')
	{
		$this->URL = $URL;
		$this->XML = new XMLNode('[root]');
	}

	# Load file from URL
	# RETURNS: true  - Success (LastError is 0)
	#          false - Failure (see LastError)
	public function Load()
	{
		# Check if URL exists
		if ($this->URL == '') {
			$this->LastError = self::ERR_NO_URL_SPECIFIED;
			return false;
		}
		if (ereg('://', $this->URL)) {
			$data = get_fileinfo($this->URL);
			if (!isset($data['data'])) {
				$this->LastError = self::ERR_NO_URL_SPECIFIED;
				return false;
			}
			$data = $data['data'];
		} else {
			if (ereg('\.\.', $this->URL) || preg_match("/[*?\"<>|]/i", $this->URL) || !file_exists($this->URL)) {
				$this->LastError = self::ERR_NO_URL_SPECIFIED;
				return false;
			}
			$data = file_get_contents($this->URL);
		}
		# Read in file (line by line)
		if (empty($data)) {
			$this->LastError = self::ERR_READ_FROM_URL_FAILED;
			return false;
		}

		# Remove Byte-Order-Mark (BOM) if existing
		# (needed to avoid problems on some PHP versions)
		# UNCOMMENT THIS LINE IF YOU HAVE PROBLEMS WITH PAD FILES WITH A BOM
		# $data = substr($data, strpos($data, '<'));

		# Parse the raw XML into Nodes
		if (!$this->Parse($data)) {
			$this->LastError = self::ERR_PARSE_ERROR;
			return false;
		}

		# Succeeded
		$this->LastError = 0;
		return true;
	}

	# Read from XML
	# IN:      $Raw  - the XML string
	# RETURNS: true  - Success
	#          false - Failure (see ParseError)
	public function Parse($Raw)
	{
		# Inits
		$this->ParseError = '';
		$this->XML->Clear();
		$this->CurrentNode =& $this->XML;

		# Look up the XML encoding
		$encoding = (preg_match('/<\?xml [^>]*encoding=[\'"](.*?)[\'"][^>]*>.*/', $Raw, $m)) ? strtoupper($m[1]) : 'UTF-8';

		# If the encoding is not natively supported by the PHP XML parser, try to
		# decode on our own (to UTF-8), if decoding is not possible, assume UTF-8,
		# which is the XML default.
		if (($encoding != 'UTF-8') && ($encoding != 'US-ASCII') && ($encoding != 'ISO-8859-1'))
		{
			$encoding = '';
			if (function_exists('mb_convert_encoding')) {
				$encoded_source = mb_convert_encoding($Raw, 'UTF-8', $encoding);
				if ($encoded_source != NULL) {
					$Raw = str_replace($m[0], '<?xml version="1.0" encoding="UTF-8" ?>', $encoded_source);
					$encoding = 'UTF-8';
				}
			}
		}

		# Create and initialize parser
		$xml_parser = xml_parser_create($encoding);
		xml_parser_set_option($xml_parser, XML_OPTION_TARGET_ENCODING, $this->OutputEncoding);
		xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, false);
		xml_set_object($xml_parser, &$this);
		xml_set_element_handler($xml_parser, 'StartElement', 'EndElement');
		xml_set_character_data_handler($xml_parser, 'CharacterData');

		# Parse
		if (!xml_parse($xml_parser, $Raw, true))
		{
			# Save parse error and free parser
			$this->ParseError = sprintf('%s at line %d',
				xml_error_string(xml_get_error_code($xml_parser)),
				xml_get_current_line_number($xml_parser));
			xml_parser_free($xml_parser);
			unset($this->CurrentNode);
			return false;
		}

		# Free parser
		xml_parser_free($xml_parser);
		unset($this->CurrentNode);

		return true;
	}

	# Returns the descriptions from the PAD file that fits best to the
	# following arguments
	# IN: $Length    - the desired length in characters (optional, default is 2000)
	# IN: $Language  - the identifier of the desired language (optional, default is 'English')
	# RETURNS: true  - Success (LastError is 0)
	#          false - Failure (see LastError)
	public function GetBestDescription($Length = 2000, $Language = 'English')
	{
		$Descr = '';

		# Try $Language
		if ($Length >= 2000) {
			$Descr = $this->XML->GetValue('XML_DIZ_INFO/Program_Descriptions/'.$Language.'/Char_Desc_2000');
			if ($Descr != '') return $Descr;
		}
		if ($Length >= 450) {
			$Descr = $this->XML->GetValue('XML_DIZ_INFO/Program_Descriptions/'.$Language.'/Char_Desc_450');
			if ($Descr != '') return $Descr;
		}
		if ($Length >= 250) {
			$Descr = $this->XML->GetValue('XML_DIZ_INFO/Program_Descriptions/'.$Language.'/Char_Desc_250');
			if ($Descr != '') return $Descr;
		}
		if ($Length >= 80) {
			$Descr = $this->XML->GetValue('XML_DIZ_INFO/Program_Descriptions/'.$Language.'/Char_Desc_80');
			if ($Descr != '') return $Descr;
		}
		if ($Length >= 45) {
			$Descr = $this->XML->GetValue('XML_DIZ_INFO/Program_Descriptions/'.$Language.'/Char_Desc_45');
		}
		if ($Descr != '' || $Language == 'English') return $Descr;

		# Try English, if nothing found yet
		return $this->GetBestDescription($Length);
	}

	# XML Parser: Node start
	protected function StartElement($parser, $name, $attrs) { $this->CurrentNode =& $this->CurrentNode->AppendNode($name); }

	# XML Parser: Node end
	protected function EndElement($parser, $name)
	{
		$this->CurrentNode->Value = trim($this->CurrentNode->Value);
		$this->CurrentNode =& $this->CurrentNode->ParentNode;
	}

	# XML Parser: Node value
	protected function CharacterData($parser, $data) { $this->CurrentNode->Value .= $data; }

}
