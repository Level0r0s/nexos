<?php
/*********************************************
  CPG-NUKE: Advanced Content Management System
  ********************************************
  Copyright (c) 2004 by CPG-Nuke Dev Team
  http://www.cpgnuke.com
  Based on Journey Links Hack
  Copyright (c) 2000 by James Knickelbein
  Journey Milwaukee
  http://www.journeymilwaukee.com
  
  CPG-Nuke is released under the terms and conditions
  of the GNU GPL version 2 or any later version.
  This program comes without any warranty.
  $Source: /cvs/languages/swedish/modules/Web_Links/language/lang-swedish.php,v $
  $Revision: 1.2 $
  $Author: akamu $
  $Date: 2004/10/09 04:26:46 $
***********************************************************************/
if (!defined('CPG_NUKE')) { die('You do not have permission to access this file'); }  
  
global $sitename, $anonwaitdays, $outsidewaitdays;
define('_PREVIOUS','Föregående Sida');
define('_NEXT','Nästa Sida');
define('_YOURNAME','Ditt Namn');
define('_CATEGORIES','Kategorier');
define('_LVOTES','röster');
define('_TOTALVOTES','Totalt antal röster:');
define('_LINKTITLE','Titel på länken');
define('_HITS','Träffar');
define('_THEREARE','Det finns');
define('_NOMATCHES','Inga träffar hittades på din fråga');
define('_SCOMMENTS','Kommentarer');
define('_ADDLINK','Addera Länk');
define('_POPULAR','Populär');
define('_TOPRATED','Högsta Betyg');
define('_RANDOM','Slumpmässig');
define('_LINKSMAIN','Huvudsida');
define('_LINKCOMMENTS','Länkkommentarer');
define('_ADDITIONALDET','Ytterligare detaljer');
define('_EDITORREVIEW','Recension av Redaktör');
define('_REPORTBROKEN','Rapportera Bruten Länk');
define('_LINKSMAINCAT','Webblänkare Huvudkategorier');
define('_AND','och');
define('_INDB','i vår databas');
define('_ADDALINK','Lägg till en ny länk');
define('_INSTRUCTIONS','Instruktioner');
define('_SUBMITONCE','Skicka bara in en länk en gång.');
define('_POSTPENDING','Alla länkar skrivs in i databasen i väntan på verifiering.');
define('_USERANDIP','Användarnamn och IP sparas, så missbruka ej systemet.');
define('_PAGETITLE','Webbplatsens Titel');
define('_PAGEURL','Webbplatsens Adress');
define('_YOUREMAIL','Din E-postadress');
define('_LDESCRIPTION','Beskrivning: (Max 255 tecken)');
define('_ADDURL','Lägg till denna adress');
define('_LINKSNOTUSER1','Du är inte medlem eller har inte loggat in.');
define('_LINKSNOTUSER2','Om du var medlem skulle du kunna lägga till länkar på denna webbplats.');
define('_LINKSNOTUSER3','Att bli medlem är en snabb och enkel process.');
define('_LINKSNOTUSER4','Varför kräver vi medlemsskap för vissa funktioner?');
define('_LINKSNOTUSER5','Det är för att kunna erbjuda dig högsta möjliga kvalitet på innehållet,');
define('_LINKSNOTUSER6','varje sak kontrolleras individuellt och godkänns av vår personal.');
define('_LINKSNOTUSER7','Vi hoppas att vi ska kunna erbjuda dig bara värdefull information.');
define('_LINKSNOTUSER8','<a href="modules.php?name=Your_Account">Bli medlem</a>');
define('_LINKALREADYEXT','FEL: Denna adress finns redan listad i vår databas!');
define('_LINKNOTITLE','FEL: Du måste skriva en titel på din adress!');
define('_LINKNOURL','FEL: En länk utan adress är inte så nyttig!');
define('_LINKNODESC','FEL: Du måste beskriva din adress!');
define('_LINKRECEIVED','Vi har tagit emot ditt länkförslag. Tack!');
define('_EMAILWHENADD','Du får ett E-postmeddelande när den är godkänd.');
define('_CHECKFORIT','Du skrev ingen E-postadress. Nåja, vi kollar din länk inom kort.');
define('_NEWLINKS','Nya Länkar');
define('_TOTALNEWLINKS','Totalt antal nya länkar');
define('_LASTWEEK','Senaste veckan');
define('_LAST30DAYS','Senaste 30 dagarna');
define('_1WEEK','1 vecka');
define('_2WEEKS','2 veckor');
define('_30DAYS','30 dagar');
define('_TOTALFORLAST','Totalt antal nya länkar för de senaste');
define('_ADDEDON','Tillagd');
define('_RATING','Betyg');
define('_RATESITE','Betygssätt denna webbplats');
define('_DETAILS','Detaljer');
define('_BESTRATED','Högst betygssatta länkar');
define('_OF','av');
define('_TRATEDLINKS','totalt antal betygssatta länkar');
define('_TVOTESREQ','minst antal röster som krävs');
define('_SHOWTOP','Visa Topp');
define('_MOSTPOPULAR','Mest Populära');
define('_OFALL','av alla');
define('_SORTLINKSBY','Sortera Länkar efter');
define('_SITESSORTED','Webbplatserna sorteras för närvarande efter');
define('_POPULARITY','Populäritet');
define('_SELECTPAGE','Välj Sida');
define('_MAIN','Huvudsida');
define('_NEWTODAY','Nya Idag');
define('_NEWLAST3DAYS','Nya de senaste 3 dagarna');
define('_NEWTHISWEEK','Nya denna vecka');
define('_CATNEWTODAY','Nya länkar i den här kategorin tillagda idag');
define('_CATLAST3DAYS','Nya länkar i den här kategorin tillagda de senaste 3 dagarna');
define('_CATTHISWEEK','Nya länkar i den här kategorin tillagda denna vecka');
define('_POPULARITY1','Populäritet (Minst till Mest träffar)');
define('_POPULARITY2','Populäritet (Mest till Minst träffar)');
define('_TITLEAZ','Titel (A till Ö)');
define('_TITLEZA','Titel (Ö till A)');
define('_DATE1','Datum (Gamla länkar visas först)');
define('_DATE2','Datum (Nya länkar visas först)');
define('_RATING1','Betyg (Lägst till Högst)');
define('_RATING2','Betyg (Högst till Lägst)');
define('_SEARCHRESULTS4','Sökresultat för');
define('_USUBCATEGORIES','Underkategorier');
define('_LINKS','Länkar');
define('_TRY2SEARCH','Försök att söka');
define('_INOTHERSENGINES','i andra sökmotorer');
define('_EDITORIAL','Recension');
define('_LINKPROFILE','Länkprofil');
define('_EDITORIALBY','Recension av');
define('_NOEDITORIAL','Ingen recension är tillgänglig för denna webbplats.');
define('_VISITTHISSITE','Besök denna webbplats');
define('_RATETHISSITE','Betygssätt denna webbplats');
define('_ISTHISYOURSITE','Är detta din webbplats?');
define('_ALLOWTORATE','Tillåt andra besökare att betygssätta den från din webbplats!');
define('_LINKRATINGDET','Betygssättningsdetaljer');
define('_OVERALLRATING','Genomsnittligt betyg');
define('_TOTALOF','Totalt');
define('_USER','Medlemmar');
define('_USERAVGRATING','Medlemmars Genomsnittsbetyg');
define('_NUMRATINGS','# av Betygs');
define('_EDITTHISLINK','Redigera denna länk');
define('_REGISTEREDUSERS','Medlemmar');
define('_NUMBEROFRATINGS','Antal betyg');
define('_NOREGUSERSVOTES','Inga medlemmar har röstat');
define('_BREAKDOWNBYVAL','Fördelning av betyg baserat på värde');
define('_LTOTALVOTES','totalt antal röster');
define('_LINKRATING','Länkbetyg');
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
define('_LINKVOTE','Rösta!');
define('_HTMLCODE3','Genom att använda detta formulär så tillåter du dina besökare att direkt från din webbplats betygssätta och få betyget direkt applicerat här. Ovanstående formulär är \'avstängt\', men följande HTML kod kommer att fungera om du bara klipper ut och klistrar in det på dinn webbsida. HTML koden visas nedan:');
define('_PROMOTE05','Tack! och lycka till med dina betyg!');
define('_THANKSBROKEN','Tack för att du hjälper till att bibehålla detta länkbiblioteks integritet.');
define('_THANKSFORINFO','Tack för informationen.');
define('_LOOKTOREQUEST','Vi tar en titt på din begäran inom kort.');
define('_ONLYREGUSERSMODIFY','Bara registrerade medlemmar kan föreslå modifieringar. Vänligen <a href="modules.php?name=Your_Account">registrerad dig eller logga in</a>.');
define('_REQUESTLINKMOD','Begäran om Länkmodifikation');
define('_LINKID','Länk ID');
define('_SENDREQUEST','Skicka Begäran');
define('_THANKSTOTAKETIME','Tack för att du tog dig tid att betygssätta en webbplats här på');
define('_LETSDECIDE','Åsikter från människor som dig själv kommer att hjälpa våra besökare att bättre bestämma vilka länkar som är värda ett besök.');
define('_RETURNTO','Återvänd till');
define('_RATENOTE1','Betygssätt inte samma plats mer än en gång så är du snäll.');
define('_RATENOTE2','Skalan löper från 1 till 10, där 1 är dålig och 10 är superb.');
define('_RATENOTE3','Var gärna objektiv i din bedöming, om alla får en 1:a eller en 10:a så är inte betygen så särdeles nödvändiga');
define('_RATENOTE4','Du kan se en lista över <a href="modules.php?name=Web_Links&amp;l_op=TopRated">De Högst Betygssatta Webbplatserna</a>.');
define('_RATENOTE5','Betygssätt inte din egen eller en motståndares webbplats.');
define('_YOUAREREGGED','Du är medlem och är inloggad.');
define('_FEELFREE2ADD','Kommentera gärna denna webbplats.');
define('_YOUARENOTREGGED','Du är inte medlem eller är inte inloggad.');
define('_IFYOUWEREREG','Om du var medlem så skulle du kunna kommentera denna webbplats.');
define('_MODIFY','Modifiera');
define('_COMPLETEVOTE1','Din röst är uppskattad.');
define('_COMPLETEVOTE2','Du har redan röstat på denna resurs de senaste $anonwaitdays dagarna.');
define('_COMPLETEVOTE3','Rösta bara en gång på en resurs.<br>Alla röster loggas och gås igenom.');
define('_COMPLETEVOTE4','Du kan inte rösta på en länk du bidragit med<br>Alla röster loggas och gås igenom.');
define('_COMPLETEVOTE5','Ingen betygsnivå vald - denna röst räknas ej');
define('_COMPLETEVOTE6','Endast en röst per IP adress tillåten varje $outsidewaitdays dag. ');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDMAINCATEGORY','Add a MAIN Category');
define('_ADDSUBCATEGORY','Add a SUB-Category');
define('_WEBLINKSADMIN','Web Links Administration');
define('_EZTRANSFERLINKS','Transfer all links from category');
define('_CLEANLINKSDB','Clean Links Votes');
define('_EZTRANSFER','Transfer');
define('_BROKENLINKSREP','Broken Links Reports');
define('_LINKMODREQUEST','Link Modification Requests');
define('_ADDNEWLINK','Add a New Link');
define('_MODLINK','Modify a Link');
define('_LINKSINDB','Links in our Database');
define('_LINKSWAITINGVAL','Links Waiting for Validation');
define('_ERRORURLEXIST','ERROR: This URL is already listed in the Database!');
define('_ERRORNOTITLE','ERROR: You need to type a TITLE for your URL!');
define('_ERRORNOURL','ERROR: You need to type a URL for your URL!');
define('_ERRORNODESCRIPTION','ERROR: You need to type a DESCRIPTION for your URL!');
define('_NEWLINKADDED','New Link added to the Database');
define('_YOURLINKAT','Your Link at');
define('_LINKVALIDATION','Link Validation');
define('_CHECKALLLINKS','Check ALL Links');
//define('_VALIDATELINKS','Validate Links');
//define('_FAILED','Failed!');
//define('_BEPATIENT','(please be patient)');
//define('_VALIDATINGCAT','Validating Category (and all subcategories)');
//define('_VALIDATINGSUBCAT','Validating Sub-Category');
?>