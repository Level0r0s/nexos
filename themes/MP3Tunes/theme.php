<?php

/************************************************************/
/* Theme Name: MP3Tunes                                   */
/* Theme Design: ladysilver(http://www.elementalmagick.us)  */
/*                                                          */
/* Theme inspired by the phpbb2 style fisubgreen by         */
/* Daz (http://www.forumimages.com/)                        */
/*                                                          */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Define colors for your web site. $bgcolor2 is generaly   */
/* used for the tables border as you can see on OpenTable() */
/* function, $bgcolor1 is for the table background and the  */
/* other two bgcolor variables follows the same criteria.   */
/* $texcolor1 and 2 are for tables internal texts           */
/************************************************************/

$bgcolor1 = "#000000";
$bgcolor2 = "#000000";
$bgcolor3 = "#000000";
$bgcolor4 = "#000000";
$textcolor1 = "#30587B";
$textcolor2 = "#30587B";

include("themes/MP3Tunes/tables.php");

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader() {
    global $user, $sitename, $slogan, $nukeuser, $prefix, $mainindex;
    echo "<body bgcolor=\"#000000\" text=\"#FFFFFF\" onLoad=\"doblocks('themes/MP3Tunes/images/');\">";
    if (!is_user($user)) {
        $theuser = "&nbsp;&nbsp;<a href=\"$mainindex?name=Your_Account&amp;op=new_user\">Create an account</a>";
    } else {
        $theuser = "&nbsp;&nbsp;Welcome $nukeuser[1]!";
    }
    $public_msg = public_message();
    $thefile = implode("", file("themes/MP3Tunes/header.html"));
    $thefile = addslashes($thefile);
    $thefile = '$r_file="'.$thefile.'";';
    eval($thefile);
    print $r_file;
    blocks('left');
    $thefile = implode("", file("themes/MP3Tunes/left_center.html"));
    $thefile = addslashes($thefile);
    $thefile = '$r_file="'.$thefile.'";';
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themefooter()                                   */
/*                                                          */
/* Control the footer for your site. You don't need to      */
/* close BODY and HTML tags at the end. In some part call   */
/* the function for right blocks with: blocks(right);       */
/* Also, $index variable need to be global and is used to   */
/* determine if the page your're viewing is the Homepage or */
/* and internal one.                                        */
/************************************************************/

function themefooter() {
    global $index, $foot1, $foot2, $foot3, $copyright, $totaltime, $footer_message;
    if ($index) {
        $thefile = implode("", file("themes/MP3Tunes/center_right.html"));
        $thefile = addslashes($thefile);
        $thefile = '$r_file="'.$thefile.'";';
        eval($thefile);
        print $r_file;
        blocks('right');
    }    
    $thefile = implode("", file("themes/MP3Tunes/footer.html"));
    $thefile = addslashes($thefile);
    $thefile = '$r_file="'.$thefile.'";';
    eval($thefile);
    print $r_file;
    echo "<center>\n";
    $footer_message = footmsg();
    echo "</center>\n";
    echo "<br>\n";
}

/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath, $mainindex;
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    }
    if ($aid == $informant) {
    $content = "$thetext$notes\n";
    } else {
    if($informant != "") {
        $content = '<a href="'.getlink("Your_Account&amp;op=userinfo&amp;username=$informant")."\">$informant</a> ";
    } else {
        $content = "$anonymous ";
    }
    $content .= _WRITES." <i>\"$thetext\"</i>$notes\n";
    }
    $posted = _POSTEDBY." ".get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";
    $thefile = implode("", file("themes/MP3Tunes/story_home.html"));
    $thefile = addslashes($thefile);
    $thefile = '$r_file="'.$thefile.'";';
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath, $mainindex;
    $posted = _POSTEDON." $datetime "._BY." ".get_author($aid);
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> <i>$notes</i>\n";
    }
    if ($aid == $informant) {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = '<a href="'.getlink("Your_Account&amp;op=userinfo&amp;username=$informant")."\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= _WRITES." <i>\"$thetext\"</i>$notes\n";
    }
    $thefile = implode("", file("themes/MP3Tunes/story_page.html"));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content, $bid) {
    $thefile = implode("", file("themes/MP3Tunes/blocks.html"));
    $thefile = addslashes($thefile);
    $thefile = '$r_file="'.$thefile.'";';
    eval($thefile);
    print stripslashes($r_file);
}

?>
