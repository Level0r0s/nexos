<?PHP

/*
 * GameQ - CounterStrike:Source protocol (http://gameq.sf.net)
 * Copyright (C) 2003 Tom Buskens (tombuskens@users.sourceforge.net)
 * Slightly Modified by Neil Myers (http://www.voicesinmyead.net) Using Toms Halflife Protocol as a base
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
    $i = 5;
    $d = substr($data[0], $i);
echo "<pre>";
print_r($data);
echo "</pre>";
	/* parse variables */
	$output['address']      = $this->aux->HLString($d, $i);
	$output['hostname']     = $this->aux->HLString($d, $i);
	$output['map']          = $this->aux->HLString($d, $i);
	$output['game_dir']     = $this->aux->HLString($d, $i);
	$output['game_type']    = $this->aux->HLString($d, $i);
		//application id (something to do with steam)
		//but none of the servers i queried returned it
		//if some of your data is off by 1 then try uncommenting this
		//$output['app_id']		= ord($d{$i++}.$d{$i++});
	$output['num_players']  = ord($d{$i++});
	$output['max_players']  = ord($d{$i++});
	//bot_players returns 32 on windows - 47 on linux so i dont know why its called bot_players
	$output['bot_players']	= ord($d{$i++});
	$output['dedicated']    = $d{$i++};
	$output['server_os']    = $d{$i++};
	$output['needpass']     = ord($d{$i++});
	$output['secure']          = ord($d{$i++});

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
    $d = substr($d, 7);

    /* process string */
    $pieces = explode("\x00", $d);
    $count  = count($pieces);

    for ($i = 1; $i < $count; $i += 2) {
        $output[$pieces[$i - 1]] = $pieces[$i];
    }

}
?>
