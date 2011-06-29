<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/finnish/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Nimesi');
define('_SORTASC','Lajittele alaspäin');
define('_SORTDESC','Laijittele ylöspäin');
define('_CANCEL','Peruuta');
define('_SCORE','Pisteet:');
define('_REPLYMAIN','Lähetä kommentti');
define('_ALLOWEDHTML','HTML sallittu:');
define('_POSTANON','Kirjoita anonyymisti');
define('_WRITEREVIEW','Kirjoita arvostelu');
define('_WRITEREVIEWFOR','Kirjoita arvostelu');
define('_ENTERINFO','Täytä vaadittavat kentät');
define('_PRODUCTTITLE','Otsikko');
define('_NAMEPRODUCT','Arvostelun kohde:');
define('_REVIEW','Arvostelu');
define('_CHECKREVIEW','Oikolue tekstisi. Pituus vähintään 100 sanaa. Voi käyttää HTML -tageja muotoiluun');
define('_FULLNAMEREQ','Kirjoita koko nimesi.');
define('_REMAIL','Sähköpostisi');
define('_REMAILREQ','Kirjoita koko sähköpostiosoitteesi.');
define('_SELECTSCORE','Anna arvostelulle pisteet.');
define('_RELATEDLINK','Aiheeseen liittyvä linkki');
define('_PRODUCTSITE','Esimerkiksi arvosteltavan asian kotisivut. Muista laittaa alkuun: "http://"');
define('_LINKTITLE','Linkin otsikko');
define('_LINKTITLEREQ','Täytetään vain, mikäli aiheeseen liittyvä linkki on annettu.');
define('_RIMAGEFILE','Kuvan tiedostonimi');
define('_RIMAGEFILEREQ','arvosteluun liitetyt kuvat löytyy kansiosta images/reviews/ - mutta kuva ei ole pakollinen.');
define('_CHECKINFO','Tarkista kirjoitusvirheet. Poista capitaalit, älä jätä tyhjiä rivivälejä, ei kovia rivinpäitä (juoksutettu teksti).');
define('_INVALIDTITLE','Virheellinen otsikko... Ei voi jättää tyhjäksi');
define('_INVALIDSCORE','Virheelliset pisteet... Pitää olla 1 ja 10 valillä');
define('_INVALIDTEXT','Virheellinen Teksti... Ei voi jättää tyhjäksi');
define('_INVALIDHITS','Luvun pitää olla positiivinen');
define('_CHECKNAME','Täytä sekä nimi että sähköposti');
define('_INVALIDEMAIL','Virheellinen sähköposti');
define('_INVALIDLINK','Jos kirjoitat linkin, sinun pitää antaa sille myös otsikko.');
define('_ADDED','Lisätty:');
define('_REVIEWER','Arvostelija:');
define('_REVIEWID','Arvostelun tunnus');
define('_LOOKSRIGHT','Näyttääkö tämä oikealta?');
define('_RMODIFIED','Muokattu');
define('_RADDED','Lisätty');
define('_ADMINLOGGED','Olet kirjautunut ylläpitäjänä... Arvostelu lisätään sivulle välittömästi');
define('_RTHANKS','Kiitos kun lisäsit tämän arvostelun');
define('_MODIFICATION','muokkaus');
define('_ISAVAILABLE','Päivitetty tietokantaan.');
define('_EDITORWILLLOOK','Ylläpitäjä tarkastaa arvostelusi. Arvostelusi julkaistaan mahdollisimman pian!');
define('_RBACK','Paluu arvosteluihin');
define('_RWELCOME','Arvostelut');
define('_10MOSTPOP','10 yleisintä arvostelua');
define('_10MOSTREC','10 luetuinta arvostelua');
define('_THEREARE','Tietokannassa on');
define('_REVIEWSINDB','Arvostelua');
define('_REVIEWSLETTER','Aakkoselle');
define('_NOREVIEWS','Ei arvosteluja aakkoselle');
define('_TOTALREVIEWS','Arvosteluja yhteensä.');
define('_RETURN2MAIN','Paluu pääsivulle');
define('_REVIEWCOMMENT','Kommentoi:');
define('_YOURNICK','Nimesi:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Rekisteröidy</a> jäseneksi');
define('_YOURCOMMENT','Kommentti:');
define('_MYSCORE','Arvioni:');
define('_REVIEWMOD','Muokkaa arvostelua');
define('_RDATE','Päivämäärä:');
define('_RTITLE','Otsikko:');
define('_RTEXT','Teksti:');
define('_REVEMAIL','Sähköposti:');
define('_RLINK','Linkki:');
define('_RLINKTITLE','Linkin otsikko:');
define('_COVERIMAGE','Kansikuva:');
define('_PREMODS','Esikatsele');
define('_PAGE','sivu');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Arvostelujen ylläpito');
define('_REVTITLE','Arvostelu sivun otsikko');
define('_REVDESC','Arvostelu sivun kuvaus');
define('_REVWAITING','Arvostelua odottaa hyväksyntää');
define('_REVIMGINFO','Tallenna 150*150 kokoinen kuva images/reviews hakemistoon');
define('_NOREVIEW2ADD','Ei arvosteluja lisättynä');
define('_ADDREVIEW','Lisää arvostelu');
define('_CLICK2ADDREVIEW','Klikkaa tästä kirjoittaaksesi arvostelun');
define('_DELMODREVIEW','Poista / Muokkaa arvostelua');
define('_MODREVINFO','Voit helposti poistaa/muokata arvosteluja selaamalla <a href="'.getlink('Reviews').'">Arvosteluja</a> ylläpitäjänä.');
