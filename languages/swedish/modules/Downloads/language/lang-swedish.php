<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  CPG-lang (c)2004 Akamu Akamai
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/swedish/modules/Downloads/language/lang-swedish.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:46 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_PREVIOUS','Föregående Sida');
define('_NEXT','Nästa Sida');
define('_CATEGORIES','Kategorier');
define('_LVOTES','röster');
define('_TOTALVOTES','Totalt antal röster:');
define('_THEREARE','Det finns');
define('_NOMATCHES','Inga träffar hittades på din fråga');
define('_SCOMMENTS','Kommentarer');
define('_UNKNOWN','Okänt');
define('_AUTHORNAME','Författarens Namn');
define('_AUTHOREMAIL','Författarens E-postadress');
define('_DOWNLOADNAME','Programnamn');
define('_ADDTHISFILE','Lägg till denna fil');
define('_INBYTES','i bytes');
define('_FILESIZE','Filestorlek');
define('_VERSION','Version');
define('_AUTHOR','Författare');
define('_HOMEPAGE','Hemsida');
define('_DOWNLOADNOW','Ladda ner denna fil nu!');
define('_RATERESOURCE','Betygsätt');
define('_FILEURL','Fillänk');
define('_ADDDOWNLOAD','Lägg till Nedladdning');
define('_DOWNLOADSMAIN','Nedladdningsindex');
define('_DOWNLOADCOMMENTS','Nedladdningskommentarer');
define('_DOWNLOADSMAINCAT','Nedladdningsavdelningens Huvudkategorier');
define('_ADDADOWNLOAD','Lägg till en Ny Nedladdning');
define('_DSUBMITONCE','Lägg bara till en unik nedladdning endast en gång.');
define('_DPOSTPENDING','Alla nedladdningar sparas i databasen i väntan på verifiering.');
define('_RESSORTED','Resurser sorteras för närvarande på');
define('_DOWNLOADSNOTUSER1','Du är inte en registrerad medlem eller så har du inte loggat in.');
define('_DOWNLOADSNOTUSER2','Om du var registrerad medlem så kunde du lägga till filer för nedladdning på denna webbplats.');
define('_DOWNLOADSNOTUSER3','Att bli medlem är en lätt och snabb process.');
define('_DOWNLOADSNOTUSER4','Varför kräver vi registrering för vissa funktioner?');
define('_DOWNLOADSNOTUSER5','Så vi kan ge dig högsta möjliga kvalitet på innehållet,');
define('_DOWNLOADSNOTUSER6','varje detalj kontrolleras individuellt av vår personal.');
define('_DOWNLOADSNOTUSER7','Vi hoppas kunna erbjuda dig bara värdefull information.');
define('_DOWNLOADSNOTUSER8','<a href="modules.php?name=Your_Account">Registrera dig som medlem</a>');
define('_DOWNLOADALREADYEXT','FEL: Denna URL är redan listad i databasen!');
define('_DOWNLOADNOTITLE','FEL: Du måste skriva en TITEL för din URL!');
define('_DOWNLOADNOURL','FEL: Du måste ange en URL för din URL!');
define('_DOWNLOADNODESC','FEL: Du måste ange en BESKRIVNING för din URL!');
define('_DOWNLOADRECEIVED','Vi har emottagit ditt förslag på Nedladdning. Tack!');
define('_NEWDOWNLOADS','Nya Nedladdningar');
define('_TOTALNEWDOWNLOADS','Totalt Antal Nya Nedladdningar');
define('_DTOTALFORLAST','Totalt Antal Nya Nedladdning för de senaste');
define('_DBESTRATED','Högst Betygsatta Nedladdningar - Topp');
define('_TRATEDDOWNLOADS','totalt antal betygsatta nedladdningar');
define('_SORTDOWNLOADSBY','Sortera Nedladdningar baserat på');
define('_DCATNEWTODAY','Dagens Nya Nedladdningar i den här kategorin');
define('_DCATLAST3DAYS','De senaste 3 dagarnas Nya Nedladdningar i den här kategorin');
define('_DCATTHISWEEK','Den här veckans Nya Nedladdningar i den här kategorin');
define('_DDATE1','Datum (Gamla Nedladdningar visas först)');
define('_DDATE2','Datum (Nya Nedladdningar visas först)');
define('_DOWNLOADS','nedladdningar');
define('_DOWNLOADPROFILE','Nedladdningsprofil');
define('_DOWNLOADRATINGDET','Betygssättningsdetaljer');
define('_EDITTHISDOWNLOAD','Redigera denna nedladdning');
define('_DOWNLOADRATING','Betygssättning');
define('_DOWNLOADVOTE','Rösta!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Begär Modifiering av Nedladdning');
define('_DOWNLOADID','Nedladdnings ID');
define('_DLETSDECIDE','Åsikter från användare som dig själv kommer att hjälpa andra besökare att bättre välja vilka nedladdningar som är värda att ta hänsyn till.');
define('_DRATENOTE4','Du kan se en lista av de <a href="modules.php?name=Downloads&amp;d_op=TopRated">högst betygsatta resurserna</a>.');
define('_POPULAR','Populär');
define('_TOPRATED','Högsta Betyg');
define('_ADDITIONALDET','Ytterligare detaljer');
define('_EDITORREVIEW','Recension av Redaktör');
define('_REPORTBROKEN','Rapportera Bruten Länk');
define('_AND','och');
define('_INDB','i vår databas');
define('_INSTRUCTIONS','Instruktioner');
define('_USERANDIP','Användarnamn och IP sparas, så missbruka ej systemet.');
define('_LDESCRIPTION','Beskrivning: (Max 255 tecken)');
define('_CHECKFORIT','Du skrev ingen E-postadress. Nåja, vi kollar din länk inom kort.');
define('_LASTWEEK','Senaste veckan');
define('_LAST30DAYS','Senaste 30 dagarna');
define('_1WEEK','1 vecka');
define('_2WEEKS','2 veckor');
define('_30DAYS','30 dagar');
define('_ADDEDON','Tillagd');
define('_RATING','Betyg');
define('_DETAILS','Detaljer');
define('_OF','av');
define('_TVOTESREQ','minst antal röster som krävs');
define('_SHOWTOP','Visa Topp');
define('_MOSTPOPULAR','Mest Populära');
define('_OFALL','av alla');
define('_POPULARITY','Populäritet');
define('_SELECTPAGE','Välj Sida');
define('_MAIN','Huvudsida');
define('_NEWTODAY','Nya Idag');
define('_NEWLAST3DAYS','Nya de senaste 3 dagarna');
define('_NEWTHISWEEK','Nya denna vecka');
define('_POPULARITY1','Populäritet (Minst till Mest träffar)');
define('_POPULARITY2','Populäritet (Mest till Minst träffar)');
define('_TITLEAZ','Titel (A till Ö)');
define('_TITLEZA','Titel (Ö till A)');
define('_RATING1','Betyg (Lägst till Högst)');
define('_RATING2','Betyg (Högst till Lägst)');
define('_SEARCHRESULTS4','Sökresultat för');
define('_USUBCATEGORIES','Underkategorier');
define('_TRY2SEARCH','Försök att söka');
define('_INOTHERSENGINES','i andra sökmotorer');
define('_EDITORIAL','Recension');
define('_EDITORIALBY','Recension av');
define('_NOEDITORIAL','Ingen recension är tillgänglig för denna webbplats.');
define('_RATETHISSITE','Betygssätt denna webbplats');
define('_ISTHISYOURSITE','Är detta din webbplats?');
define('_ALLOWTORATE','Tillåt andra besökare att betygssätta den från din webbplats!');
define('_OVERALLRATING','Genomsnittligt betyg');
define('_TOTALOF','Totalt');
define('_USER','Medlemmar');
define('_USERAVGRATING','Medlemmars Genomsnittsbetyg');
define('_NUMRATINGS','# av Betygs');
define('_REGISTEREDUSERS','Medlemmar');
define('_NUMBEROFRATINGS','Antal betyg');
define('_NOREGUSERSVOTES','Inga medlemmar har röstat');
define('_BREAKDOWNBYVAL','Fördelning av betyg baserat på värde');
define('_LTOTALVOTES','totalt antal röster');
define('_HIGHRATING','Högsta betyg');
define('_LOWRATING','Lägsta betyg');
define('_NUMOFCOMMENTS','Antal kommentarer');
define('_WEIGHNOTE','* Obs: Denna webbplats väger medlemmars betyg gentemot icke-medlemmars betyg');
define('_NOUNREGUSERSVOTES','Inga icke-medlemmar har röstat');
define('_WEIGHOUTNOTE','* Obs: Denna webbplats väger medlemmars betyg genotemot betyg från andra webbplatser');
define('_NOOUTSIDEVOTES','Inga betyg från andra webbplatser');
define('_OUTSIDEVOTERS','Betyg från andra webbplatser');
define('_UNREGISTEREDUSERS','Icke registerade medlemmar');
define('_PROMOTEYOURSITE','Marknadsför Din Webbplats');
define('_PROMOTE01','Du kanske kan vara intresserad av de olika \'Betygsättningsmöjligheter\' vi har att tillgå. Dessa tillåter dig ett lägga en bild (eller till och med ett betygsformulär) på din webbplats för att öka antalet betygssättningar på din egen webbplats. Välj en av möjligheterna nedan:');
define('_TEXTLINK','Textlänk');
define('_PROMOTE02','Ett sätt att länka till betygsformuläret är genom en enkel textlänk:');
define('_HTMLCODE1','HTML koden du bör använda i dett fall är följande:');
define('_THENUMBER','Numret');
define('_IDREFER','i HTML koden refererar till din webbplats ID nummer i $sitename databas. Se till att detta nummer finns med.');
define('_BUTTONLINK','Knapplänk');
define('_PROMOTE03','Om du vill ha lite mer än en vanlig textlänk, så kanske du vill ha en liten knapp som länk istället:');
define('_RATEIT','Betygssätt denna webbplats!');
define('_HTMLCODE2','HTML koden för ovanstående knapp är:');
define('_REMOTEFORM','Betygsformulär');
define('_PROMOTE04','Om du fuskar med denna så tar vi bort din länk. Genom att ha sagt detta så är det så här formuläret ser ut.');
define('_VOTE4THISSITE','Betygssätt denna webbplats!');
define('_HTMLCODE3','Genom att använda detta formulär så tillåter du dina besökare att direkt från din webbplats betygssätta och få betyget direkt applicerat här. Ovanstående formulär är \'avstängt\', men följande HTML kod kommer att fungera om du bara klipper ut och klistrar in det på dinn webbsida. HTML koden visas nedan:');
define('_PROMOTE05','Tack! och lycka till med dina betyg!');
define('_THANKSBROKEN','Tack för att du hjälper till att bibehålla detta länkbiblioteks integritet.');
define('_SECURITYBROKEN','Av säkerhetsskäl så sparas ditt användarnamn och IP-adress temporärt.');
define('_THANKSFORINFO','Tack för informationen.');
define('_LOOKTOREQUEST','Vi tar en titt på din begäran inom kort.');
define('_SENDREQUEST','Skicka Begäran');
define('_THANKSTOTAKETIME','Tack för att du tog dig tid att betygssätta en webbplats här på');
define('_RETURNTO','Återvänd till');
define('_RATENOTE1','Betygssätt inte samma plats mer än en gång så är du snäll.');
define('_RATENOTE2','Skalan löper från 1 till 10, där 1 är dålig och 10 är superb.');
define('_RATENOTE3','Var gärna objektiv i din bedöming, om alla får en 1:a eller en 10:a så är inte betygen så särdeles nödvändiga');
define('_RATENOTE5','Betygssätt inte din egen eller en motståndares webbplats.');
define('_YOUAREREGGED','Du är medlem och är inloggad.');
define('_FEELFREE2ADD','Kommentera gärna denna webbplats.');
define('_YOUARENOTREGGED','Du är inte medlem eller är inte inloggad.');
define('_IFYOUWEREREG','Om du var medlem så skulle du kunna kommentera denna webbplats.');
define('_MODIFY','Modifiera');
define('_COMPLETEVOTE1','Din röst uppskattas.');
define('_COMPLETEVOTE2','Du har redan röstat på det här valet de $anonwaitdays dagaran.');
define('_COMPLETEVOTE3','Rösta bara en gång.<br>Alla röster loggas och kontrolleras.');
define('_COMPLETEVOTE4','Du kan inte rösta på din egen länk.<br>Alla röster loggas och kontrolleras.');
define('_COMPLETEVOTE5','Ingen ranking vald - ingen röst räknad');
define('_COMPLETEVOTE6','Bara en röst per IP adress tillåts per $outsidewaitdays dagar).');

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

