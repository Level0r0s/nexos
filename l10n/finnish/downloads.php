<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/finnish/downloads.php,v $
  $Revision: 9.8 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Ladattavaa tiedostoa ei löydy.');
define('_CATEGORIES','Aihepiirit');
define('_LVOTES','ääntä');
define('_TOTALVOTES','Ääniä :');
define('_THEREARE','Tietokannassa on');
define('_NOMATCHES','Tietoja antamillasi hakuehdoilla ei löytynyt');
define('_SCOMMENTS','Kommentit');
define('_UNKNOWN','tuntematon');
define('_AUTHORNAME','Nimi');
define('_AUTHOREMAIL','Sähköposti');
define('_DOWNLOADNAME','Tiedoston nimi');
define('_ADDTHISFILE','Lisää tiedosto');
define('_INBYTES','kt');
//define('_FILESIZE','tiedostokoko');
//define('_VERSION','Versio');
//define('_AUTHOR','Nimi');
define('_HOMEPAGE','Kotisivut');
define('_DOWNLOADNOW','Imuroi tämä tiedosto!');
define('_RATERESOURCE','Arvostele');
define('_FILEURL','Tiedoston URL');
define('_ADDDOWNLOAD','Lisää tiedosto');
define('_DOWNLOADSMAIN','Etusivu');
define('_DOWNLOADCOMMENTS','Kommentit');
define('_DOWNLOADSMAINCAT','Kategoriat');
define('_ADDADOWNLOAD','Lisää tiedosto');
define('_DSUBMITONCE','Lisää tiedosto vain kerran.');
define('_DPOSTPENDING','Kaikki tiedostot hyväksytetään ylläpitäjällä ennen niiden julkaisemista.');
define('_RESSORTED','Lajiteltu');
define('_DOWNLOADSNOTUSER1','Et ole joko rekisteröitynyt tai kirjautunut.');
define('_DOWNLOADSNOTUSER2','Rekisteröityneenä käyttäjänä sinulla on mahdollisuus lisätä tiedostoja sivuille');
define('_DOWNLOADSNOTUSER3','Rekisteröityminen on helppoa ja vaivatonta.');
define('_DOWNLOADSNOTUSER4','Miksi me vaadimme käytttäjiämme rekisteröitymään?');
define('_DOWNLOADSNOTUSER5','Jotta voimme antaa teille parhaimman laadun,');
define('_DOWNLOADSNOTUSER6','kaikki tiedostot ovat tarkistettuja ja ylläpitäjän hyväksymiä.');
define('_DOWNLOADSNOTUSER7','Pyrimme myös tarjoamaan tarpeellisen tiedon tiedostosta.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink('Your_Account&amp;file=register').'">rekisteröidy</a> (tai kirjaudu)');
define('_DOWNLOADALREADYEXT','VIRHE: Tiedosto löytyy jo tietokannastamme!');
define('_DOWNLOADNOTITLE','VIRHE: Annappas tiedostolle nimi!');
define('_DOWNLOADNOURL','VIRHE: URL unohtui!');
define('_DOWNLOADNODESC','VIRHE: Kuvaus unohtui!');
define('_DOWNLOADRECEIVED','Me saimme tiedoston hyväksyttäväksi - kiitos!');
define('_NEWDOWNLOADS','Uudet');
define('_TOTALNEWDOWNLOADS','Uusia');
define('_DTOTALFORLAST','Uudet tiedostot viimeiseltä');
define('_DBESTRATED','Eniten ääniä - TOP ');
define('_TRATEDDOWNLOADS','Ääniä kaikkiaan');
define('_SORTDOWNLOADSBY','Lajittele');
define('_DCATNEWTODAY','Uudet tiedostot, jotka on lisätty tänään');
define('_DCATLAST3DAYS','Uudet tiedostot, jotka ovat lisätty viimeisen 3 päivän aikana');
define('_DCATTHISWEEK','Uudet tiedostot, jotka lisätty tällä viikolla');
define('_DDATE1','Päivä (Vanhat ensimmäisenä)');
define('_DDATE2','Päivä (Uudet ensimmäisenä)');
define('_DOWNLOADS','imurointia');
define('_DOWNLOADPROFILE','Profiili');
define('_DOWNLOADRATINGDET','Arvostelujen tiedot');
define('_EDITTHISDOWNLOAD','Muokkaa');
define('_DOWNLOADRATING','Arvostelut');
define('_DOWNLOADVOTE','Arvostele!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Muokkaa');
define('_DOWNLOADID','ID');
define('_DLETSDECIDE','Juuri näitten arvostelujen perusteella muut surffaajat voivat paremmin päättää mitä itse tahtovat imuroida.');
define('_DRATENOTE4','Katso <a href="'.getlink("Downloads&amp;d_op=TopRated").'">Parhaat äänet</a>.');
define('_POPULAR','Suosittu');
define('_TOPRATED','Huippuluokiteltu');
define('_ADDITIONALDET','Lisätiedot');
define('_EDITORREVIEW','Toimittajan valinnat');
define('_REPORTBROKEN','Ilmoita toimimattomasta linkistä');
define('_AND','ja');
define('_INDB','kannassamme');
define('_INSTRUCTIONS','Ohjeet');
define('_USERANDIP','Käyttäjätunnus ja IP talletetaan, joten ethän käytä järjestelmää väärin.');
define('_LDESCRIPTION','Kuvaus: (255 merkkiä max)');
define('_CHECKFORIT','Et kirjoittanut sähköpostiosoitettasi. Tarkistamme kuitenkin linkkisi pian.');
define('_LASTWEEK','viime viikolta');
define('_LAST30DAYS','viimeisiltä 30 päivältä');
define('_1WEEK','1 viikon ajalta');
define('_2WEEKS','2 viikon ajalta');
define('_30DAYS','30 päivän ajalta');
define('_ADDEDON','lisätty');
define('_RATING','Sija');
define('_DETAILS','Yksityiskohdat');
define('_OF','of');
define('_TVOTESREQ','äänten määrän minimi');
define('_SHOWTOP','Näytä Top');
define('_MOSTPOPULAR','Suosituimmat - Top');
define('_OFALL','kaikista');
define('_POPULARITY','Suosio');
define('_SELECTPAGE','Valitse sivu');
define('_MAIN','Etusivu');
define('_NEWTODAY','Uusia tänään');
define('_NEWLAST3DAYS','Uudet viimeisten 3 päivän ajalta');
define('_NEWTHISWEEK','Uudet tältä viikolta');
define('_POPULARITY1','Suosio (Vähiten suosituista eniten suosittuihin)');
define('_POPULARITY2','Suosio (Vähiten suosituista eniten suosittuihin)');
define('_TITLEAZ','Otsikko (A - Z)');
define('_TITLEZA','Otsikko (Z - A)');
define('_RATING1','Tila (Viimeisestä ensimmäiseen)');
define('_RATING2','Tila (Ensimmäisestä viimeiseen)');
define('_SEARCHRESULTS4','Hakutulokset');
define('_USUBCATEGORIES','Alakategoriat');
define('_TRY2SEARCH','Yritä etsiä');
define('_INOTHERSENGINES','muilla hakukoneilla');
define('_EDITORIAL','Kommentti');
define('_EDITORIALBY','Kommentoinut:');
define('_NOEDITORIAL','Tälle sivulle ei tällä hetkellä ole kommenttia.');
define('_RATETHISSITE','Arvostele tätä lähdettä');
define('_ISTHISYOURSITE','Onko tämä lähteesi?');
define('_ALLOWTORATE','Anna muiden käyttäjien arvostella sitä omalta sivultasi!');
define('_OVERALLRATING','Yleisarvostelu');
define('_TOTALOF','Yhteensä');
define('_USER','Käyttäjä');
define('_USERAVGRATING','Käyttäjän keskimääräinen sija');
define('_NUMRATINGS','Äänien määrä');
define('_REGISTEREDUSERS','Rekisteröityneet käyttäjät');
define('_NUMBEROFRATINGS','Äänien määrä');
define('_NOREGUSERSVOTES','Ei rekisteröityneiden käyttäjien ääniä');
define('_BREAKDOWNBYVAL','Sijoituksien erittely arvostelun mukaan');
define('_LTOTALVOTES','yhteensä ääniä');
define('_HIGHRATING','Korkea sija');
define('_LOWRATING','Huono sija');
define('_NUMOFCOMMENTS','Kommenttien määrä');
define('_WEIGHNOTE','* Huom: Tämä lähde punnitsee rekisteröityjen vs. rekisteröitymättömien käyttäjien arvostelut');
define('_NOUNREGUSERSVOTES','Ei rekisteröitymättömien käyttäjien ääniä');
define('_WEIGHOUTNOTE','* Huom.: Tämä lähde punnitsee rekisteröityjen vs. rekisteröitymättömien äänestäjien arvostelut');
define('_NOOUTSIDEVOTES','Ei ulkopuolisten ääniä');
define('_OUTSIDEVOTERS','Ulkopuoliset äänestäjät');
define('_UNREGISTEREDUSERS','Rekisteröitymättömät käyttäjät');
define('_PROMOTEYOURSITE','Mainosta sivuasi');
define('_PROMOTE01','Voit ehkä olla kiinnostunut etäisistä \'Arvostele sivua\' vaihtoehdoistamme. Ne antavat sinulle mahdollisuuden laittaa kuvan (tai jopa arvostelun) sivullesi kasvattamaan lähteesi äänien määrää. Valitse yhdestä alla listatuista vaihtosehdoista:');
define('_TEXTLINK','Tekstilinkki');
define('_PROMOTE02','Yksi tapa linkittää arvostelukaavakkeeseen on yksinkertainen tekstilinkki:');
define('_HTMLCODE1','HTML-koodi, jota sinun tulisi tässä tapauksessa käyttää, on seuraava:');
define('_THENUMBER','Määrä');
define('_IDREFER','HTML-lähdekoodissa viitataan sivusi tunnusnumeroon $sivunimi -tietokannassa. Varmista että tämä numero on mainittu.');
define('_BUTTONLINK','Nappilinkki');
define('_PROMOTE03','Jos etsit jotain muuta kuin tekstilinkkiä, saatat haluta käyttää pientä nappilinkkiä:');
define('_RATEIT','Arvostele tätä sivua!');
define('_HTMLCODE2','Lähdekoodi edellä mainitulle napille on:');
define('_REMOTEFORM','Etähallittu arvostelulomake');
define('_PROMOTE04','Jos huijaat tässä, poistamme linkkisi. Tältä näyttää nykyinen etähallittu arvostelulomake.');
define('_VOTE4THISSITE','Äänestä tätä sivua!');
define('_HTMLCODE3','Käyttäen tätä lomaketta käyttäjät voivat arvostella sivuasi suoraan sivultasi ja arvostelu talletetaan tänne. Ylläoleva lomake ei toimi, mutta seuraava lähdekoodi toimii jos yksinkertaisesti leikkaat ja liimaat sen nettisivuusi. Lähdekoodi näkyy alla:');
define('_PROMOTE05','Kiitos! ja onnea arvosteluillesi!');
define('_THANKSBROKEN','Kiitos että autoit pitämään yllä tämän luettelon kokonaisuutta.');
define('_SECURITYBROKEN','Turvallisuussyistä käyttäjätunnuksesi ja IP-osoitteesi talletetaan väkiaikaisesti.');
define('_THANKSFORINFO','Kiitos tiedoista.');
define('_LOOKTOREQUEST','Tarkistamme toiveesi pian.');
define('_SENDREQUEST','Lähetä ehdotus');
define('_THANKSTOTAKETIME','Kiitos ajan käytöstäsi sivun arvosteluun täällä');
define('_RETURNTO','Palaa');
define('_RATENOTE1','Älä äänestä samaa lähdettä enempää kuin kerran.');
define('_RATENOTE2','Asteikko on 1 - 10, jossa 1 on huono ja 10 erinomainen.');
define('_RATENOTE3','Ole puolueeton äänestyksessäsi, jos kaikki saavat 1 tai 10, arvosteluista ei ole paljonkaan hyötyä.');
define('_RATENOTE5','Älä äänestä oman tai kilpailijasi lähteestä.');
define('_YOUAREREGGED','Olet rekisteröity käyttäjä ja olet kirjautunut sisään.');
define('_FEELFREE2ADD','Laita vapaasti kommentti tälle sivulle.');
define('_YOUARENOTREGGED','Et ole rekisteröity käyttäjä tai et ole kirjautunut sisään.');
define('_IFYOUWEREREG','Jos olisit rekisteröitynyt, voisit kommetoida tätä sivua.');
define('_MODIFY','Muokkaa');
define('_COMPLETEVOTE1','Your vote is appreciated.');
define('_COMPLETEVOTE2','You have already voted for this resource in the past $anonwaitdays day(s).');
define('_COMPLETEVOTE3','Vote for a resource only once.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE4','You cannot vote on a link you submitted.<br>All votes are logged and reviewed.');
define('_COMPLETEVOTE5','No rating selected - no vote tallied');
define('_COMPLETEVOTE6','Only one vote per IP address allowed every $outsidewaitdays day(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Siirrä kaikki ladattavat kategoriaan');
define('_DELEZDOWNLOADSCATWARNING','VAROITUS : Haluatko poistaa tämän kategorian? Samalla poistuu myös alakategoriat ja lisätyt ladattavat!');
define('_DELCONTENTCAT','VAROITUS: Haluatko poistaa tämän kategorian? Tämän kategorian alapuoliset sivut, jos niitä on olemassa, ei poisteta, mutta niitä ei siirretä toiseen kategoriaan.');
define('_DELCATEGORY','Poista kategoria');
define('_DOWNLOADTITLE','Ladattavan otsikko');
define('_DOWNLOADSINDB','Ladattavat tietokannassasi');
define('_DOWNLOADSWAITINGVAL','Ladattavat odottaa hyväksyntää');
define('_CLEANDOWNLOADSDB','Tyhjennä ladattavan äänet');
define('_BROKENDOWNLOADSREP','Virheellisiä ladattavia');
define('_DOWNLOADMODREQUEST','Ladattavan muokkausta pyydetään');
define('_ADDNEWDOWNLOAD','Lisää uusi ladattava');
define('_MODDOWNLOAD','Muokkaa ladattavaa');
define('_WEBDOWNLOADSADMIN','Ladattavien ylläpito');
define('_DNOREPORTEDBROKEN','Ei raportoituja virheellisiä ladattavia.');
define('_DUSERREPBROKEN','Käyttäjien raportoimat virheelliset ladattavat');
define('_DIGNOREINFO','Älä hyväksy (Poistaa kaikki  <b><i>pyynnöt</i></b> joita on annettu ladattavista)');
define('_DDELETEINFO','Poista (Poistaa <b><i>virheelliset ladattavat</i></b> ja <b><i>pyynnöt</i></b> joita on annettu ladattavista)');
define('_DOWNLOADOWNER','Tiedoston omistaja');
define('_DUSERMODREQUEST','Käyttäjän pyytämä ladattavan muokkaus pyyntö');
define('_DOWNLOADVALIDATION','Ladattavien hyväksyminen');
define('_CHECKALLDOWNLOADS','Tarkista KAIKKI ladattavat ');
define('_VALIDATEDOWNLOADS','Hyväksy ladattavat');
define('_NEWDOWNLOADADDED','Uudet ladattavat lisätty tietokantaan');
