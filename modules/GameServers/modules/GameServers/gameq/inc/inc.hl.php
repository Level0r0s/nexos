<?PHP

/* 
 * GameQ - HalfLife protocol (http://gameq.sf.net)
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


/* status string */
if (!empty($data[0]))
{
    $d = $data[0];
    $i = 5;
	
	/* parse variables */
    $output['address']      = $this->aux->HLString($d, $i);
	$output['hostname']     = $this->aux->HLString($d, $i);
	$output['map']          = $this->aux->HLString($d, $i);
	$output['game_dir']     = $this->aux->HLString($d, $i);
	$output['game_type']    = $this->aux->HLString($d, $i);
	$output['num_players']  = ord($d{$i++});
	$output['max_players']  = ord($d{$i++});
	$output['net_protocol'] = ord($d{$i++});
	$output['dedicated']    = $d{$i++};
	$output['server_os']    = $d{$i++};
	$output['needpass']     = ord($d{$i++});
	$output['mod']          = ord($d{$i++});
	
	/* parse mod variables */
	if ($output['mod'])
	{
		$output['http_info']     = $this->aux->HLString($d, $i);
		$output['http_download'] = $this->aux->HLString($d, $i);
		$i+=8;
		$output['mod_ssonly']    = ord($d{$i++});
		$output['mod_customdll'] = ord($d{$i++});
	}
}


/* player string */
if (!empty($data[1]))
{
	$d      = $data[1];
	$strlen = strlen($d);
    $i      = 5;

    /* get player number */
    $player_cnt = ord($d{$i++});
    
    for ($j = 0; $j != $player_cnt && $i < $strlen; $j++)
    {
        /* player id */
        $player['id'] = ord($d{$i++});

        /* player name */
        for ($start = $i; $i != $strlen && $d{$i} != "\x00"; $i++);
        $player['name'] = htmlentities(substr($d, $start, $i - $start));
        $i++;

        $score = unpack("Llint",  substr($d, $i, 4)); $i += 4;
        $time  = unpack("ffloat", substr($d, $i, 4)); $i += 4;

        $player['score'] = $score['lint'];
        $player['time']  = date("H:i:s", mktime(0, 0, $time['float']));
        $output['players'][$j] = $player;       
    }
		
	$this->aux->sortPlayers($output, 'quake');
}

/* rules string */
if (!empty($data[2])) {
   
    $d = $data[2];

    /* check for second packet, paste it behind first one */
    if ($d{0} === "\xFE") {
        if (!empty($data[3])) {
            $d = $data[3] . substr($data[2], 4);
        }
    }
    elseif (!empty($data[3])) {
        $d .= substr($data[3], 4);
    }

    /* cut off header */
    $d = substr($d, 4);

    /* process string */
    $pieces = explode("\x00", $d);
    $count  = count($pieces);

    for ($i = 1; $i < $count; $i += 2) {
        $output[$pieces[$i - 1]] = $pieces[$i];
    }
    
}
?>
