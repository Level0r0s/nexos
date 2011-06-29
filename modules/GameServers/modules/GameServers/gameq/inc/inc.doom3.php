<?PHP

/*
 * GameQ - Doom3 protocol (http://gameq.sf.net)
 * Copyright (C) 2003 Tom Buskens (tombuskens@users.sourceforge.net)
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA.
 *
 */

// Only one string to parse
if (isset($data[0])) {

    $d = $data[0];

    if (preg_match("/^\xff\xff\xffinfoResponse.{5}(.)(.)\x00/", $d, $match)) {

        $output['version'] = ord($match[1]) . ord($match[2]);
        $d = substr($d, strlen($match[0]));

        // Get variable / value pairs
        while (preg_match("/^([^\x00]+)\x00([^\x00]*)\x00/", $d, $match)) {
            $output[$match[1]] = $output[$match[2]];
            $d = substr($d, strlen($match[0]));
        }

        // End marker
        if (preg_match("/^\x00\x00/", $d, $match)) {
            $d = substr($d, 2);

            // Players
            $i = 0;
            while (preg_match("/^(.)(..)(.)(.)(..)([^\x00]+)\x00/", $d, $match)) {
                $player['id']   = ord($match[1]);
                $ping           = unpack('Sint', $match[2]);
                $player['ping'] = $ping['int'];

                // Team variable?
                switch ($match[3]) {
                    case "\x80":
                        $team = 1;
                        break;

                    case "\x50":
                        $team = 2;
                        break;

                    default:
                        $team = 'unknown';
                        break;
                }

                $player['team'] = $team;
                $player['name'] = $match[6];
                $output['players'][$i++] = $player;
            }
        }
    }
}
?>
