<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/norwegian/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:58 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Ditt navn');
define('_SORTASC','Sorter stigende');
define('_SORTDESC','Sorter synkende');
define('_CANCEL','Avbryt');
define('_SCORE','Poeng:');
define('_REPLYMAIN','Skriv kommentar');
define('_ALLOWEDHTML','Tillatt HTML:');
define('_POSTANON','Skriv anonymt');
define('_WRITEREVIEW','Skriv en anmeldelse');
define('_WRITEREVIEWFOR','Skriv en anmeldelse for');
define('_ENTERINFO','Angi informasjon etter våre spesifikasjoner');
define('_PRODUCTTITLE','Produktnavn');
define('_NAMEPRODUCT','Navnet på produktet du anmelder.');
define('_REVIEW','Anmeldelse');
define('_CHECKREVIEW','Den egentlige anmeldelsen. Forsøk å gjøre den grammatisk korrekt! Skriv minst 100 ord. Du må gjerne bruke HTML-kode dersom du ved hvordan!');
define('_FULLNAMEREQ','Ditt navn. Obligatorisk.');
define('_REMAIL','Din E-postadresse');
define('_REMAILREQ','Din E-postadresse. Obligatorisk.');
define('_SELECTSCORE','Karakter for dette produktet');
define('_RELATEDLINK','Relatert link');
define('_PRODUCTSITE','Produktets ofisielle websted. Merk: adressen må begynne med "http://"');
define('_LINKTITLE','Tittel på linken');
define('_LINKTITLEREQ','Kreves om du har en relatert link.');
define('_RIMAGEFILE','Bildets filnavn');
define('_RIMAGEFILEREQ','Navnet på bildefilen til produktet. Skal ligge i mappen /images/reviews/');
define('_CHECKINFO','Vær sikker på at informasjonen du har angitt er riktig og du bruker riktig grammatikk og tegnsetting.');
define('_INVALIDTITLE','Feil i tittel... Feltet kan ikke være tomt');
define('_INVALIDSCORE','Feil i karakter... Må være mellom 1 og 10');
define('_INVALIDTEXT','Feil i anmeldelsestekst... Feltet kan ikke være tomt');
define('_INVALIDHITS','Treff må være et positivt tall');
define('_CHECKNAME','Du må oppgi både ditt navn og din E-postadresse');
define('_INVALIDEMAIL','Ugyldig E-postadresse. Må være på formen navn@adresse.no');
define('_INVALIDLINK','Du må angi Både tittel på link og relatert link, eller la begge felt være tomme.');
define('_ADDED','Lagt til:');
define('_REVIEWER','Anmelder');
define('_REVIEWID','Anmelder ID');
define('_LOOKSRIGHT','Ser dette riktig ut?');
define('_RMODIFIED','redigert');
define('_RADDED','lagt til');
define('_ADMINLOGGED','Du er innlogget som administrator... Denne anmeldelsen vil bli publisert umiddelbart');
define('_RTHANKS','Takk for at du skrev denne anmeldelsen');
define('_MODIFICATION','modifisering');
define('_ISAVAILABLE','Den er nå tilgjengelig i vår database.');
define('_EDITORWILLLOOK','Våre redaktører vil se på den. Den bør være publisert i løpet av kort tid!');
define('_RBACK','Tilbake til anmeldelser');
define('_RWELCOME','Velkommen til anmeldelsesavdelingen');
define('_10MOSTPOP','10 mest leste anmeldelser');
define('_10MOSTREC','10 nyeste anmeldelser');
define('_THEREARE','Det finnes');
define('_REVIEWSINDB','anmeldelser i databasen');
define('_REVIEWSLETTER','Anmeldelser under bokstaven');
define('_NOREVIEWS','Det finnes ingen anmeldelser under denne bokstaven');
define('_TOTALREVIEWS','Anmeldelse(r) ble funnet.');
define('_RETURN2MAIN','Tilbake til hovedmeny');
define('_REVIEWCOMMENT','Kommentarer til anmeldelsen:');
define('_YOURNICK','Ditt alias:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Bli medlem</a>');
define('_YOURCOMMENT','Din kommentar:');
define('_MYSCORE','Din karakter:');
define('_REVIEWMOD','Kontroller endringer');
define('_RDATE','Dato:');
define('_RTITLE','Tittel:');
define('_RTEXT','Tekst:');
define('_REVEMAIL','E-postbeskjed:');
define('_RLINK','Link:');
define('_RLINKTITLE','Linktittel:');
define('_COVERIMAGE','Bilde:');
define('_PREMODS','Forhåndsvis endring');
define('_PAGE','Side');
define('NO_GET','Vennligst bruk vårt sjema for ingen "GET" forespørsler er tilatt');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Administrasjon av Anmeldelser');
define('_REVTITLE','Tittel på Anmeldersiden');
define('_REVDESC','Beskrivelse');
define('_REVWAITING','Anmeldelser som venter på godkjenning');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','Ingen nye anmeldelser');
define('_ADDREVIEW','Legg til Anmeldelse');
define('_CLICK2ADDREVIEW','Klikk her for å skrive en ny anmeldelse');
define('_DELMODREVIEW','Slett/Rediger en anmeldelse');
define('_MODREVINFO','Du kan enkelt slette/redigere anmeldelser gjennom å bla i <a href="'.getlink("Reviews").'">Anmeldelser</a> som Admin.');
