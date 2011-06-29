<?php
/***************************************************************************
 *						lang_extend_merge.php [danish]
 *						-------------------------------
 *	begin				: 28/09/2003
 *	copyright			: Ptirhiik
 *	email				: ptirhiik@clanmckeen.com
 *
 *	version				: 1.0.1 - 21/10/2003
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

// admin part
if ( $lang_extend_admin )
{
	$lang['Lang_extend_merge'] = 'flet emner';
}

$lang['Refresh'] = 'Opdater';
$lang['Merge_topics'] = 'flet emner';
$lang['Merge_title'] = 'Ny titel på emne';
$lang['Merge_title_explain'] = 'Dette vil blive den nye titel på det færdige emne. Lad det stå tomt hvis du vil lad systemet bruge titlen fra bestemmelsessteds emne';
$lang['Merge_topic_from'] = 'Emne der skal flettes fra';
$lang['Merge_topic_from_explain'] = 'Dette emne vil blive flettet sammen med det andet emne. Du kan skrive emne id, url\'en til emnet, eller url\'en af en postering i dette emne';
$lang['Merge_topic_to'] = 'Emne der skal flettes til';
$lang['Merge_topic_to_explain'] = 'Dette emne vil få alle posteringer fra "Emne der skal flettes fra".Du kan skrive emne id, url\'en til emnet, eller url\'en af en postering i dette emnet';
$lang['Merge_from_not_found'] = 'Emne der skal flettes fra, blev ikke fundet';
$lang['Merge_to_not_found'] = 'Emne der skal flettes til, blev ikke fundet';
$lang['Merge_topics_equals'] = 'Du kan ikke flette et emne med sig selv';
$lang['Merge_from_not_authorized'] = 'Du har ikke redaktør adgang til at flette dette emne';
$lang['Merge_to_not_authorized'] =  'Du har ikke redaktør afgang til det emne du prøver flette til';
$lang['Merge_poll_from'] = 'Der er en afstemning på emnet du fletter fra. Den vil blive kopieret til emnet du fletter til';
$lang['Merge_poll_from_and_to'] = 'Emnet du fletter til har allerede en afstemning. Afstemningen for emnet du fletter fra vil blive slettet';
$lang['Merge_confirm_process'] = 'Er du sikker på at du vil flette <br />"<b>%s</b>"<br />med<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'Emnerne blev vellykket flettet sammen.';

?>