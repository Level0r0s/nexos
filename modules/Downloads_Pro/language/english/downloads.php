<?php
/******************************************************
  Downloads Pro: Designed exclusively for Dragonfly CMS
  *****************************************************
  Copyright © 2005 - 2006 by Trevor Eckart and DJMaze
  http://dragonflycms.org

  Please see the included LICENSE.txt for the terms and
  conditions that govern your use of this module

  $Source: /cvs/modules/Downloads_Pro/language/english/downloads.php,v $
  $Revision: 1.7 $
  $Author: phoenix $
  $Date: 2010/11/03 23:13:17 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Previous');
define('_NEXT','Next');
define('_CATEGORIES','Categories');
define('_LVOTES','votes');
define('_TOTALVOTES','Total Votes:');
define('_THEREARE','There are');
define('_NOMATCHES','No matches found to your query');
define('_SCOMMENTS','Comments');
define('_UNKNOWN','Unknown');
define('_AUTHORNAME','Author\'s Name');
define('_AUTHOREMAIL','Author\'s Email');
define('_DOWNLOADNAME','Program Name');
define('_ADDTHISFILE','Add this file');
define('_INBYTES','in bytes');
//define('_FILESIZE','Filesize');
//define('_VERSION','Version');
//define('_AUTHOR','Author');
define('_HOMEPAGE','Homepage');
define('_DOWNLOADNOW','Download this file Now!');
define('_RATERESOURCE','Rate Resource');
define('_FILEURL','File Link');
define('_ADDDOWNLOAD','Add Download');
define('_DOWNLOADSMAIN','Downloads Main');
define('_DOWNLOADCOMMENTS','Download Comments');
define('_DOWNLOADSMAINCAT','Downloads Main Categories');
define('_ADDADOWNLOAD','Add a New Download');
define('_DSUBMITONCE','Submit a unique download only once.');
define('_DPOSTPENDING','All downloads are posted pending verification.');
define('_RESSORTED','Resources currently sorted by');
define('_DOWNLOADSNOTUSER1','You are not a registered user or you have not logged in.');
define('_DOWNLOADSNOTUSER2','If you were registered you could add downloads on this website.');
define('_DOWNLOADSNOTUSER3','Becoming a registered user is a quick and easy process.');
define('_DOWNLOADSNOTUSER4','Why do we require registration for access to certain features?');
define('_DOWNLOADSNOTUSER5','So we can offer you only the highest quality content,');
define('_DOWNLOADSNOTUSER6','each item is individually reviewed and approved by our staff.');
define('_DOWNLOADSNOTUSER7','We hope to offer you only valuable information.');
define('_DOWNLOADSNOTUSER8','<a href="'.URL::index("Your_Account").'">Register for an Account</a>');
define('_DOWNLOADALREADYEXT','ERROR: This URL is already listed in the Database!');
define('_DOWNLOADNOTITLE','ERROR: You need to type a TITLE for your URL!');
define('_DOWNLOADNOURL','ERROR: You need to type a URL for your URL!');
define('_DOWNLOADNODESC','ERROR: You need to type a DESCRIPTION for your URL!');
define('_DOWNLOADRECEIVED','We received your Download submission. Thanks!');
define('_NEWDOWNLOADS','New Downloads');
define('_TOTALNEWDOWNLOADS','Total New Downloads');
define('_DTOTALFORLAST','Total new downloads for last');
define('_DBESTRATED','Best Rated Downloads - Top');
define('_TRATEDDOWNLOADS','total rated downloads');
define('_SORTDOWNLOADSBY','Sort Downloads by');
define('_DCATNEWTODAY','New Downloads in this Category Added Today');
define('_DCATLAST3DAYS','New Downloads in this Category Added in the last 3 days');
define('_DCATTHISWEEK','New Downloads in this Category Added this week');
define('_DDATE1','Date (Old Downloads Listed First)');
define('_DDATE2','Date (New Downloads Listed First)');
define('_DOWNLOADS','Downloads');
define('_DOWNLOADPROFILE','Download Profile');
define('_DOWNLOADRATINGDET','Download Rating Details');
define('_EDITTHISDOWNLOAD','Edit This Download');
define('_DOWNLOADRATING','Downloads Rating');
define('_DOWNLOADVOTE','Vote!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.URL::index("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Request Download Modification');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','Input from users such as yourself will help other visitors better decide which downloads to click on.');
define('_DRATENOTE4','You can view a list of the <a href="'.URL::index("Downloads&amp;d_op=TopRated").'">Top Rated Resources</a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Top Rated');
define('_ADDITIONALDET','Additional Details');
define('_EDITORREVIEW','Editor Review');
define('_REPORTBROKEN','Report Broken Link');
define('_AND','and');
define('_INDB','in our database');
define('_INSTRUCTIONS','Instructions');
define('_USERANDIP','Username and IP are recorded, so please don\'t abuse the system.');
define('_LDESCRIPTION','Description: (255 characters max)');
define('_CHECKFORIT','You didn\'t provide an Email address but we will check your link soon.');
define('_LASTWEEK','Last Week');
define('_LAST30DAYS','Last 30 Days');
define('_1WEEK','1 Week');
define('_2WEEKS','2 Weeks');
define('_30DAYS','30 Days');
define('_ADDEDON','Added on');
define('_RATING','Rating');
define('_DETAILS','Details');
define('_OF','of');
define('_TVOTESREQ','minimum votes required');
define('_SHOWTOP','Show Top');
define('_MOSTPOPULAR','Most Popular - Top');
define('_OFALL','of all');
define('_POPULARITY','Popularity');
define('_SELECTPAGE','Select Page');
define('_MAIN','Main');
define('_NEWTODAY','New Today');
define('_NEWLAST3DAYS','New last 3 days');
define('_NEWTHISWEEK','New This Week');
define('_POPULARITY1','Popularity (Least to Most Hits)');
define('_POPULARITY2','Popularity (Most to Least Hits)');
define('_TITLEAZ','Title (A to Z)');
define('_TITLEZA','Title (Z to A)');
define('_RATING1','Rating (Lowest Scores to Highest Scores)');
define('_RATING2','Rating (Highest Scores to Lowest Scores)');
define('_SEARCHRESULTS4','Search Results for');
define('_USUBCATEGORIES','Sub-Categories');
define('_TRY2SEARCH','Try to search');
define('_INOTHERSENGINES','in others Search Engines');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial by');
define('_NOEDITORIAL','No editorial is currently available for this website.');
define('_RATETHISSITE','Rate this Resource');
define('_ISTHISYOURSITE','Is this your resource?');
define('_ALLOWTORATE','Allow other users to rate it from your web site!');
define('_OVERALLRATING','Overall Rating');
define('_TOTALOF','Total of');
define('_USER','User');
define('_USERAVGRATING','User\'s Average Rating');
define('_NUMRATINGS','# of Ratings');
define('_REGISTEREDUSERS','Registered Users');
define('_NUMBEROFRATINGS','Number of Ratings');
define('_NOREGUSERSVOTES','No Registered User Votes');
define('_BREAKDOWNBYVAL','Breakdown of Ratings by Value');
define('_LTOTALVOTES','total votes');
define('_HIGHRATING','High Rating');
define('_LOWRATING','Low Rating');
define('_NUMOFCOMMENTS','Number of Comments');
define('_WEIGHNOTE','* Note: This Resource weighs Registered vs. Unregistered users ratings');
define('_NOUNREGUSERSVOTES','No Unregistered User Votes');
define('_WEIGHOUTNOTE','* Note: This Resource weighs Registered vs. Outside voters ratings');
define('_NOOUTSIDEVOTES','No Outside Votes');
define('_OUTSIDEVOTERS','Outside Voters');
define('_UNREGISTEREDUSERS','Unregistered Users');
define('_PROMOTEYOURSITE','Promote Your Website');
define('_PROMOTE01','Maybe you can be interested in several of the remote \'Rate a Website\' options we have available. These allow you to place an image (or even a rating form) on your web site in order to increase the number of votes your resource receive. Please choose from one of the options listed below:');
define('_TEXTLINK','Text Link');
define('_PROMOTE02','One way to link to the rating form is through a simple text link:');
define('_HTMLCODE1','The HTML code you should use in this case, is the following:');
define('_THENUMBER','The Number');
define('_IDREFER','in the HTML source references your site\'s ID number in '.$sitename.' database. Be sure this number is present.');
define('_BUTTONLINK','Button Link');
define('_PROMOTE03','If you\'re looking for a little more than a basic text link, you may wish to use a small button link:');
define('_RATEIT','Rate this Site!');
define('_HTMLCODE2','The source code for the above button is:');
define('_REMOTEFORM','Remote Rating Form');
define('_PROMOTE04','If you cheat on this, we\'ll remove your link. Having said that, here is what the current remote rating form looks like.');
define('_VOTE4THISSITE','Vote for this Site!');
define('_HTMLCODE3','Using this form will allow users to rate your resource directly from your site and the rating will be recorded here. The above form is disabled, but the following source code will work if you simply cut and paste it into your web page. The source code is shown below:');
define('_PROMOTE05','Thanks! and good luck with your ratings!');
define('_THANKSBROKEN','Thank you for helping to maintain this directory\'s integrity.');
define('_SECURITYBROKEN','For security reasons your user name and IP address will also be temporarily recorded.');
define('_THANKSFORINFO','Thanks for the information.');
define('_LOOKTOREQUEST','We\'ll look into your request shortly.');
define('_SENDREQUEST','Send Request');
define('_THANKSTOTAKETIME','Thank you for taking the time to rate a site here at');
define('_RETURNTO','Return to');
define('_RATENOTE1','Please do not vote for the same resource more than once.');
define('_RATENOTE2','The scale is 1 - 10, with 1 being poor and 10 being excellent.');
define('_RATENOTE3','Please be objective in your vote, if everyone receives a 1 or a 10, the ratings aren\'t very useful.');
define('_RATENOTE5','Do not vote for your own resource or a competitor\'s.');
define('_YOUAREREGGED','You are a registered user and are logged in.');
define('_FEELFREE2ADD','Feel free to add a comment about this site.');
define('_YOUARENOTREGGED','You are not a registered user or you have not logged in.');
define('_IFYOUWEREREG','If you were registered you could make comments on this website.');
define('_MODIFY','Modify');
define('_COMPLETEVOTE1','Your vote is appreciated.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past '.$anonwaitdays.' day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br />All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every '.$outsidewaitdays.' day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');


////////////////////////////////////////////////////////////////////
///////////////// *** NEW TERMS *** ////////////////////////////////
///////////////////////////////////////////////////////////////////

// Misc
define('_DLP_INACTIVE','Not active');
define('_DLP_PENDING','Pending');
define('_DLP_NEW','New!');
define('_DLP_UPD','Updated!');
define('_DLP_SHORTDESC','Short description');
define('_DLP_GO2DL','Go to latest download');
define('_DLP_ROOT','Root');
define('_DLP_PAGE','Page');
define('_DLP_BACK2TOP','Back to top');
define('_DLP_ASC','Ascending');
define('_DLP_DESC','Descending');
define('_DLP_PUBLISHED','Published');
define('_DLP_UPDATED','Updated');
define('_DLP_SUBCAT','Subcategory');
define('_DLP_SUBCATS','Subcategories');
define('_DLP_LASTADD','Latest addition');
define('_DLP_SUB','Sub');
define('_DLP_APPROVE','Approve');
define('_DLP_REJECT','Reject');
define('_DLP_CLOSEWINDOW','Close window');
define('_DLP_SCREENSHOTS','Screenshots');
define('_DLP_NOSCREENSHOTS','No screenshot');
define('_DLP_ALLCATS','All categories');
define('_DLP_SUBMITTEDTO','Submitted to');
define('_DLP_EDITDL','Edit download');
define('_DLP_ALLFIELDSRQR','All fields are required unless stated otherwise.');
define('_DLP_XML','XML syndication');
define('_DLP_SORT','Sort');

// Broken mirrors
define('_DLP_REPORTBROKEN','Report broken mirror');
define('_DLP_BRKNGIVEINFO','Please give us some information about the trouble you are having using this particular mirror. Helpful information includes:');
define('_DLP_BRKNINFODATE','Date and time at which you attempted to download the file');
define('_DLP_BRKNRESPCODE','Response code (ie. 404, 500)');
define('_DLP_BRKNFIRSTTIME','If this is the first time you have encountered a problem with this mirror');
define('_DLP_BRKNTHANKS','Thanks for the information. We will look into your report as soon as possible.');

// MD5
define('_DLP_MD5UPDATE','Update MD5 sum for remote mirror');
define('_DLP_MD5UPDATED','MD5 sum updated');
define('_DLP_MD5NOTREM','This form is for remotely-hosted mirrors only. Uploaded mirrors generate MD5 sums automatically');

// Mirrors
define('_DLP_MIRRORACTIVE','Mirror is already active');
define('_DLP_MIRRORAPP','Mirror approved');
define('_DLP_MIRRORREJ','Mirror rejected');

// Errors
define('_DLP_FIXERRORS','Please correct the following errors before continuing');
define('_DLP_RQR','%s is required');
define('_DLP_INACTIVEDL','The download is not active');
define('_DLP_UNKNOWNDL','The download could not be found');
define('_DLP_DLFORBIDDEN','You are not allowed to download this file');
define('_DLP_FILEINLIST','The URL/screenshot you tried to add is already in your list');
define('_DLP_FILEEXISTS','The URL/screenshot you tried to add already exists in another download');
define('_DLP_FILEASSOC','The URL/screenshot you tried to add already exists and is associated with <a href="%s">this</a> download');
define('_DLP_FAIL2GETINFO','Failed to obtain file information for %s');
define('_DLP_INVALIDFNAME','%s is not a valid filename');
define('_DLP_ISWEBSITE','%s is a website and not a valid file');
define('_DLP_FILETOOBIG','File size is larger than the maximum: %s');
define('_DLP_FILETOOSMALL','File size is too small');
define('_DLP_EXTFORBIDDEN','The extension is not allowed');
define('_DLP_FILEERROR','An error occurred while processing the file');
define('_DLP_INVALIDFILE','Invalid file/image');
define('_DLP_REGISTER2DL','You must be a <a href="'.URL::index('Your_Account').'">registered</a> member to download this file');
define('_DLP_ADMINDL','This download is available only to administrators');
define('_DLP_GROUPDL','This download is available only to members of the %s group');

// Menu
define('_DLP_RANDOM','Random');
define('_DLP_HISTORY','History');
define('_DLP_PROMOTE','Promote');
define('_DLP_WRITEREVIEW','Write a Review');
define('_DLP_MYDL','My Downloads');

// Admin menu
define('_DLP_CONFIG','Configuration');
define('_DLP_CFIELDS','Custom fields');
define('_DLP_PENDDL','Pending downloads');
define('_DLP_PENDMIR','Pending mirrors');
define('_DLP_BRMIR','Broken mirrors');
// broken mirrors
define('_DLP_DOWNLOAD','Download');
define('_DLP_MIRROR','Mirror');
define('_DLP_OWNEDBY','Owned by');
define('_DLP_REPSUBMITTER','Report submitted by');
define('_DLP_REPDISMISS','Dismiss report');
define('_DLP_REPNOTIFY','Notify owner');
define('_DLP_REPREM','Remove mirror');
// custom fields
define('_DLP_CHANGESSAVED','Your changes have been saved');
define('_DLP_FNAMEFORBIDDEN','The field name "%s" is not allowed');
define('_DLP_FSIZEFORBIDDEN','Field size must be within range');
define('_DLP_FIELDADDED','The field "%s" has been added');
define('_DLP_FIELDPERMANENT','This field cannot be removed');
define('_DLP_FIELDREMOVED','The field "%s" has been removed');
define('_DLP_REMFIELD','Remove field');
define('_DLP_REMFIELDCONF','Are you sure that you want to delete the field "%s"?');
define('_DLP_ADDFIELD','Add field');
define('_DLP_FIELDNAME','Field name');
define('_DLP_FIELDTYPE','Field type');
define('_DLP_FTYPETEXT','Text');
define('_DLP_FTYPETEXTAREA','Textarea');
define('_DLP_FTYPEIMG','Image');
define('_DLP_FIMGPATH','Image path');
define('_DLP_FIMGONLY','For <em>image</em> field type only');
define('_DLP_FIMGALT','Image alternate text');
define('_DLP_FIELDSIZE','Field size');
define('_DLP_FSIZEONLY','for <em>image</em> and <em>yes/no</em> field types, use 0 for NO and 1 for YES');
define('_DLP_EDITFIELD','Edit field');
define('_DLP_FIELD','Field');
define('_DLP_FORMDISPLAY','Form display');
define('_DLP_VISIBLE','Visible');
define('_DLP_REQUIRED','Required');
define('_DLP_ADMINONLY','Admin only');

// Ratings
define('_DLP_NRATED','Not rated');
define('_DLP_RUBBISH','Rubbish');
define('_DLP_BELOWAVG','Below average');
define('_DLP_AVG','Average');
define('_DLP_GOOD','Good');
define('_DLP_VGOOD','Very good');
define('_DLP_EXCELLENT','Excellent');

// Popularity
define('_DLP_NPOPULAR','Not popular');
define('_DLP_SBAVG','Slightly below average');
//define('_DLP_POPULAR','Popular');
define('_DLP_VPOPULAR','Very popular');

// Details
define('_DLP_SUBMITTEDBY','Submitted by');
define('_DLP_ISDLOWNER','You own this download; you may <a href="%s">edit it</a> at any time');
define('_DLP_MIRSUB','<a href="%s">Add your mirror</a> to this download');
define('_DLP_EDNOTE','Editor\'s Note');
define('_DLP_MEMREVIEWS','Member reviews');
define('_DLP_PENDREVIEWS','Pending reviews');
define('_DLP_VIEWALLSCREENS','View all screenshots');
define('_DLP_PAGEVIEWS','Page views');
define('_DLP_EDPICK','Editor\'s Pick');
define('_DLP_DLNOW','Download Now');
define('_DLP_NADL','Not allowed to download');
define('_DLP_REVIEW','Review');