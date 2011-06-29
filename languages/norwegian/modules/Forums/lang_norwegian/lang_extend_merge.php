<?php
/***************************************************************************
 *						lang_extend_merge.php [Norwegian]
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
	$lang['Lang_extend_merge'] = 'Sl� sammen emner';
}

$lang['Refresh'] = 'Oppdater';
$lang['Merge_topics'] = 'Sl� sammen emner';
$lang['Merge_title'] = 'Ny tittel p� emne';
$lang['Merge_title_explain'] = 'Dette vil bli den nye tittelen p� den ferdige emnet. La det st� tomt hvis du vil la systemet bruke tittelen fra bestemmelsessteds emne';
$lang['Merge_topic_from'] = 'Emne til � sl� sammen fra';
$lang['Merge_topic_from_explain'] = 'Dette emnet vil bli sl�tt sammen med det andre emnet. Du kan skrive inn emne id, url\'en til emnet, eller url\'en av en postering i dette emnet';
$lang['Merge_topic_to'] = 'Emne til � sl� sammen til';
$lang['Merge_topic_to_explain'] = 'Dette emnet vil f� alle posteringer fra "Emne til � sl� sammen fra". Du kan skrive inn emne id, url\'en til emnet, eller url\'en av en postering i dette emnet';
$lang['Merge_from_not_found'] = 'Emne for � sl� sammen fra, har ikke blitt funnet';
$lang['Merge_to_not_found'] = 'Emne for � sl� sammen til, har ikke blitt funnet';
$lang['Merge_topics_equals'] = 'Du kan ikke sl� sammen et emne med seg selv';
$lang['Merge_from_not_authorized'] = 'Du har ikke moderator tilgang til � sl� sammen dette emnet';
$lang['Merge_to_not_authorized'] =  'Du har ikke moderator tilgang til det emnet du pr�ver � sl� sammen til';
$lang['Merge_poll_from'] = 'Det er en avstemming p� emnet du skal sl� sammen fra. Det vil bli kopiert til emnet du sl�r sammen til';
$lang['Merge_poll_from_and_to'] = 'Emnet du sl�r sammen til har allerede en avstemming. Avstemmingen for emnet du sl�r sammen fra vil bli slettet';
$lang['Merge_confirm_process'] = 'Er du sikker p� at du vil sl� sammen <br />"<b>%s</b>"<br />med<br />"<b>%s</b>"';
$lang['Merge_topic_done'] = 'Emnene har blitt velykket sl�tt sammen.';

?>