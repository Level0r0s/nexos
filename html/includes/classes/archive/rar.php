<?php
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
class archive_rar
{

	private $toc;
	private $filename;
	private $type = 'rar';

	function __construct($filename)
	{
		$this->filename = $filename;
		$this->load_toc();
	}

	public function load_toc()
	{
		if ($fp = rar_open($this->filename)) {
			$entries = rar_list($fp);
			$this->toc['cd']['entries'] = count($entries);
			$dir = NULL;
			for ($i=0; $i<$this->toc['cd']['entries']; ++$i) {
//			foreach ($entries as $entry) {
				$entry['filename'] = $entries[$i]->getName();
				$entry['crc']  = $entries[$i]->getCrc();
				$entry['mode'] = $entries[$i]->getAttr();
				$entry['size'] = $entries[$i]->getUnpackedSize();
				$entry['compressed_size'] = $entries[$i]->getPackedSize();
				$entry['mtime'] = strtotime($entries[$i]->getFileTime());
				$entry['version'] = $entries[$i]->getVersion();
				if (substr($entry['filename'],-1) != '/') {
					$this->toc['files'][$i] = $entry;
					$dir['entries'][$i] =& $this->toc['files'][$i];
				} else {
					$this->toc['dirs'][$i] = $entry;
					$dir =& $this->toc['dirs'][$i];
				}
			}
			rar_close($fp);
			return true;
		}
		return false;
	}

	public function extract($id, $to=false)
	{
		if (empty($this->toc['files'][$id])) {
			if (empty($this->toc['dirs'][$id])) {
				trigger_error("'$id' is not a valid entry.", E_USER_ERROR);
			} else {
				trigger_error("'$id' is not a file.", E_USER_ERROR);
			}
		}
		if (!$to) {
			trigger_error('Rar entry must be saved to file', E_USER_WARNING);
			return false;
		}
		if ($fp = rar_open($this->filename)) {
			$file = $this->toc['files'][$id];
			$entry = rar_entry_get($fp, $file['filename']);
			$file['tmp_name'] = $to.'/'.md5($file['filename'].$file['crc']);
			$entry->extract(false, $file['tmp_name']);
/*
			$host_os = $entry->getHostOs();
			$attr = $entry->getAttr();
			switch ($host_os) {
				case RAR_HOST_MSDOS:
				case RAR_HOST_OS2:
				case RAR_HOST_WIN32:
				case RAR_HOST_MACOS:
					printf("%c%c%c%c%c%c\n",
							($attr & 0x08) ? 'V' : '.',
							($attr & 0x10) ? 'D' : '.',
							($attr & 0x01) ? 'R' : '.',
							($attr & 0x02) ? 'H' : '.',
							($attr & 0x04) ? 'S' : '.',
							($attr & 0x20) ? 'A' : '.');
					break;
				case RAR_HOST_UNIX:
				case RAR_HOST_BEOS:
					switch ($attr & 0xF000)
					{
						case 0x4000:
							printf("d");
							break;
						case 0xA000:
							printf("l");
							break;
						default:
							printf("-");
							break;
					}
					printf("%c%c%c%c%c%c%c%c%c\n",
							($attr & 0x0100) ? 'r' : '-',
							($attr & 0x0080) ? 'w' : '-',
							($attr & 0x0040) ? (($attr & 0x0800) ? 's':'x'):(($attr & 0x0800) ? 'S':'-'),
							($attr & 0x0020) ? 'r' : '-',
							($attr & 0x0010) ? 'w' : '-',
							($attr & 0x0008) ? (($attr & 0x0400) ? 's':'x'):(($attr & 0x0400) ? 'S':'-'),
							($attr & 0x0004) ? 'r' : '-',
							($attr & 0x0002) ? 'w' : '-',
							($attr & 0x0001) ? 'x' : '-');
					break;
			}
*/
			rar_close($fp);
			return $file;
		}
		return false;
	}

}
