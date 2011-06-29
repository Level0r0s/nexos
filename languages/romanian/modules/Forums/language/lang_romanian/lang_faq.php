<?php
/***************************************************************************
 *                          lang_faq.php [română]
 *                            -------------------
 *   begin                : Wednesday Aug 7, 2002
 *   last update          : May 29, 2003
 *   language version     : 3.0
 *   copyright            : Romanian phpBB online community
 *   website              : http://www.phpbb.ro
 *   copyright 1          : (C) Robert Munteanu
 *   email     1          : rombert@go.ro
 *   copyright 2          : (C) Bogdan Toma
 *   email     2          : bogdan@phpbb.ro
 *
 *   $Id: lang_faq.php,v 1.2 2004/08/05 01:37:35 akamu Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Probleme de autentificare şi înregistrare");
$faq[] = array("De ce nu mă pot autentifica?", "V-aţi înregistrat? Serios vorbind, trebuie să vă înregistraţi pentru a vă autentifica. Aţi fost exclus de pe site (un mesaj vă apare pentru a vă indica acest lucru) ? Dacă da, ar trebui să contactaţi adminstratorul site-ului sau forumului pentru a afla motivul. Dacă sunteţi înregistrat şi nu sunteţi exclus şi tot nu vă puteţi autentifica, atunci verificaţi foarte bine numele de utilizator şi parola. De obicei, aceasta este problema. Dacă nici aceasta nu este soluţia, luaţi legătura cu administratorul forumului pentru că forumul ar putea fi incorect configurat.");
$faq[] = array("De ce trebuie să mă înregistrez?", "S-ar putea să nu fie nevoie, depinde de adminstratorul forumului dacă e nevoie să vă înregistraţi sau nu. Oricum, înregistrarea vă va oferi acces la opţiuni care nu sunt disponibile utilizatorilor anonimi cum ar fi imagini asociate, mesaje private, trimiterea de email-uri altor utilizatori, înscrierea în grupuri  etc. Durează doar câteva momente să vă înregistraţi , aşa că vă recomandăm să vă înregistraţi.");
$faq[] = array("De ce sunt scos afară din forum automat?", "Dacă nu activaţi opţiunea <i>Autentifică-mă automat la fiecare vizită</i>, atunci când vă autentificaţi veţi fi autentificat doar pentru o perioadă prestabilită. Această măsură previne ca cineva să se folosească de contul dumneavoastră. Pentru a rămâne autentificat, bifaţi această opţiune la autentificare, dar acest lucru nu este recomandat dacă accesaţi forumul de la un calculator utilizat de mai multe persoane, cum ar fi de la o bibliotecă, cafenea internet, facultate etc");
$faq[] = array("Cum fac să nu îmi apară numele de utilizator pe listele de utilizatori conectaţi?", "În profilul dumneavoastră veţi găsi o opţiune <i>Ascundeţi indicatorul de conectare</i>, şi dacă veţi seta această opţiune pe <i>Da</i> veţi fi vizibil doar pentru administratori şi pentru dumneavoastră. Veţi fi numărat ca utilizator ascuns.");
$faq[] = array("Mi-am pierdut parola!", "Nu intraţi în panică! Parola dumneavoastră nu poate fi refăcută, dar poate fi resetată. Pentru a realiza acest lucru, mergeţi la pagina de autentificare şi folosiţi legătura <i>Mi-am uitat parola</i>, urmaţi instrucţiunile şi ar trebui să puteţi să vă autentificaţi în scurt timp.");
$faq[] = array("Sunt înregistrat dar nu mă pot autentifica!", "Mai intâi verificaţi dacă aţi introdus numele de utilizator şi parola corect. Dacă sunt corecte, atunci fie, dacă este activată opţiunea COPPA şi aţi dat bifat <i>Sunt de acord cu aceste condiţii şi declar că am sub 13 ani</i> la înregistrare, va trebui să urmaţi instrucţiunile primite, fie contul dumneavoastră trebuie să fie activat. Unele forumuri obligă ca toţi utilizatori noi să îşi activeze conturile , fie către dumneavoastră personal, fie de către administrator înainte de a vă puteţi autentifica. Când v-aţi înregistrat aţi fi aflat dacă este necesară activarea. Dacă aţi primit un email atunci urmaţi instrucţiunile. Dacă nu, sunteţi sigur că aţi specificat corect adresa de mail ? Unul din motivele pentru care activarea este folosită este pentru a preveni abuzul de către utilizatori <i>pirat</i> anonimi. Daca sunteţi sigur că adresa de mail folosită este corectă atunci încercaţi să contactaţi administratorul.");
$faq[] = array("M-am înregistrat cu ceva timp în urmă dar nu mă mai pot autentifica?!", "Cele mai probabile motive sunt: aţi folosit un nume de utilizator inexistent sau o parolă greşită (verificaţi-vă email-ul pe care l-aţi primit când v-aţi înregistrat) sau administratorul a şters contul dumneavoastră dintr-un motiv sau altul. Dacă motivul este al doilea, atunci poate nu aţi scris nici un mesaj ? Se obişnuieşte ca forumurile să excludă periodic utilizatorii care nu au scris nimic pentru a reduce mărimea bazei de date. Încercaţi să vă înregistraţi din nou şi să vă implicaţi în discuţii.");


$faq[] = array("--","Preferinţe şi setări");
$faq[] = array("Cum îmi schimb setările?", "Toate setările dumneavoastră (dacă sunteţi înregistrat) sunt stocate în baza de date. Pentru a le schimba folosiţi legătura <i>Profil</i> (în general afişată în partea superioară a paginilor dar nu întotdeauna). Acest lucru vă va permite să vă schimbaţi toate setările.");
$faq[] = array("Orele nu sunt corecte!", "Orele sunt aproape sigur corecte, dar ceea ce dumneavoastră s-ar putea să vedeţi că toate orele afişate sunt într-o zonă cu fus orar diferit faţă de cea în care sunteţi. Dacă este aşa, ar trebui să vă schimbaţi setarea din profil pentru zona de fus orar în care sunteţi, cum ar fi Bucureşti, Londra, Paris, etc. Vă rugăm, să observaţi că schimbarea zonei de fus orar, ca majoritatea setărilor, poate fi făcută doar de utilizatorii înregistraţi. Deci dacă nu sunteţi înregistrat, acesta este un moment bun să o faceţi, dacă îmi permiteţi jocul de cuvinte!");
$faq[] = array("Am schimbat zona de fus orar şi ora tot este greşita!", "Dacă sunteţi sigur că aţi setat zona de fus orar corect şi ora înca este diferită, cel mai probabil răspuns este ora de vară. Programul nu a fost gândit să se plieze după schimbările făcute între ora standard şi cea de vară aşa că în timpul lunilor de vară ora poate fi diferită cu 60 de minute faţă de cea locală reală.");
$faq[] = array("Limba mea nu este în listă!", "Cele mai probabile motive sunt fie că administratorul nu a instalat limba dumneavoastră sau că cineva nu a tradus înca acest program în limba dumneavoastră. Încercaţi să îl întrebaţi pe administrator dacă poate instala limba de care aveţi nevoie şi dacă nu există, atunci sunteţi liber să creaţi o nouă traducere. Mai multe informaţii pot si gasite pe site-ul grupului phpBB. Urmăriţi legătura din partea inferioară  paginilor)");
$faq[] = array("Cum pot afişa o imagine sub numele meu de utilizator?", "Pot fi două imagini sub numele de utilizator când vizualizaţi mesajele. Prima este o imagine asociata cu rangul dumneavoastră, în general acestea luând forma de stele sau blocuri indicând câte mesaje aţi scris sau statutul dumneavoastră pe forumuri. Sub aceasta ar putea fi o imagine mai mare cunoscută sub numele de <i>avatar</i> (imagine asociată). Aceasta este, în general, unică sau personală fiecărui utilizator. Administratorul decide dacă să activeze imaginile asociate şi au posibilitatea de a alege modalitatea prin care imaginile asociate pot fi folosite. Dacă nu puteţi folosi imaginile asociate, atunci aceasta este decizia administratorului şi ar trebui să-l întrebaţi pe acesta despre motivele care au dus la această decizie (suntem siguri că vor fi întemeiate!)");
$faq[] = array("Cum îmi schimb rangul?", "În general nu puteţi schimba direct rangurile (rangul apare direct sub numele dumneavoastră de utilizator, în mesaje şi în profilul dumneavoastră, depinde de stilul folosit). Majoritatea forumurilor folosesc rangurile pentru a indica numărul de mesaje pe care le-aţi scris şi pentru a identifica anumiţi utilizatori, cum ar fi moderatorii şi administratorii. Vă rugăm, să nu abuzaţi de forum scriind mesaje inutile doar pentru a vă creşte rangul, pentru că probabil veţi descoperi ca moderatorul sau administratorul vă va scădea pur şi simplu numărul de mesaje scrise.");
$faq[] = array("De ce când folosesc legătura de email al unui utilizator îmi cere să mă autentific?", "Doar utilizatorii înregistraţi pot trimite mesaje altor utilizatori prin formularul încorporat de mail (dacă administratorul permite acest lucru). Acest lucru se întamplă pentru a preveni folosirea maliţioasa a sistemului de mesagerie de către utilizatorii anonimi.");


$faq[] = array("--","Probleme de scriere/publicare a mesajelor");
$faq[] = array("Cum deschid un subiect în forum?", "Simplu. Apasaţi pe butonul specific, fie din forum, fie pe ecranul cu subiecte. Este posibil să fie nevoie să vă înregistraţi înainte de a scrie un mesaj. Facilităţile care vă sunt disponibile sunt trecute în partea de jos a ecranului (de genul <i>Puteţi crea un subiect nou în acest forum</i> )");
$faq[] = array("Cum pot modifica sau şterge un mesaj?", "În afara cazului în care sunteţi administratorul forumului sau moderatorul, puteţi modifica sau şterge doar mesajele dumneavoastră. Puteţi modifica un mesaj (uneori doar pentru o scurta perioadă după publicare) apăsând butonul <i>modifică</i> pentru mesajul respectiv. Veţi observa o mică secţiune de text sub mesaj când reveniţi la subiect. Aceasta arată de cate ori l-aţi modificat. Aceasta va apărea doar dacă nimeni nu v-a răspuns. De asemenea, nu va apărea dacă moderatorii sau administratorii modifică mesajul (aceştia ar trebui să lase un mesaj în care să spună ce au modificat şi de ce). Observaţi că utilizatorii normali nu pot modifica un mesaj odată ce cineva a răspuns.");
$faq[] = array("Cum pot să îmi adaug semnatura la mesaj?", "Pentru a adauga o semnatură trebuie întâi să vă creaţi una, lucru pe care îl puteţi face accesandu-vă profilul. Odată ce semnătura este creată, puteţi să bifaţi opţiunea <i>Adaugă semnatura</i> de pe formularul de publicare pentru a vă adăuga semnătura. Puteţi, de asemenea, să vă adăugaţi direct semnătura la toate mesajele bifând opţiunea corespunzatoare din profil (puteţi să preveniţi adăugarea semnăturii unor anumite mesaje dacă ştergeţi bifa respectivă din formularul de publicare)");
$faq[] = array("Cum pot crea un sondaj?", "Este uşor să creaţi un sondaj. Când creaţi un subiect nou (sau modificaţi primul mesaj al unui subiect, dacă aveţi permisiunea), ar trebui să vedeţi o secţiune <i>Adaugă un chestionar</i> sub zona principală de publicare (dacă nu vedeţi acest lucru probabil că nu aveţi privilegiile de acces necesare pentru a crea sondaje). Ar trebui să introduceţi un titlu pentru chestionar şi cel puţin două opţiuni (pentru a alege o opţiune scrieţi întrebarea sondajului şi apăsaţi pe butonul <i>Adaugă o opţiune</i>). Puteţi să schimbaţi şi valabilitatea sondajului, unde perioada 0 înseamnă un sondaj perpetuu. Va exista şi o limita a numărului de opţiuni pe care îl puteţi folosi, specificată de către administrator.");
$faq[] = array("Cum modific sau şterg un sondaj?", "Ca şi în cazul mesajelor, sondajele pot fi modificate doar de autor, de moderator sau de un administrator. Pentru a modifica un sondaj efectuaţi un click pe primul mesaj din cadrul subiectului (acesta este întotdeauna asociat cu sondajul). Dacă nimeni nu a votat, atunci poate fi şters sau modificat, însă dacă cineva a votat deja, doar moderatorul sau administratorul poate modifica sau şterge sondajul. Acest lucru previne sabotarea sondajelor sau schimbarea inoportună a opţiunilor."); 
$faq[] = array("De ce nu pot să accesez un forum?", "Unele forumuri pot fi limitate pentru anumiţi utilizatori sau grupuri. Pentru a vedea, citi, publica, etc. este nevoie probabil de autorizaţie specială pe care o pot acorda doar moderatorul forumului şi administratorul. Ar trebui să luaţi legatura cu ei.");
$faq[] = array("De ce nu pot vota în sondaje?", "Doar utilizatorii înregistraţi pot vota în sondaje (pentru a preveni falsificarea rezultatelor). Daca v-aţi înregistrat şi tot nu puteţi vota atunci probabil că nu aveţi drepturile de acces necesare.");


$faq[] = array("--","Formatări şi tipuri de mesaje");
$faq[] = array("Ce este codul BB?", "Codul BB este o implementare specială a HTML-ului. Posibilitatea de a folosi codul BB este dată de decizia administratorului (puteţi dezactiva acest cod de la mesaj la mesaj din formularul de publicare). Codul BB este similar ca stil cu HTML-ul, balizele (tag-urile) sunt închise în paranteze pătrate [ şi ] mai degrabă decât &lt; şi &gt; şi oferă un control mai bun asupra a ce şi cum se afişează. Pentru mai multe informaţii despre codul BB, consultaţi ghidul care poate fi accesat de pe pagina de publicare.");
$faq[] = array("Pot folosi HTML?", "Acest lucru depinde de administrator, care are control complet. Dacă vă este permis să îl folosiţi, probabil că veţi descoperi că doar câteva balize funcţionează. Aceasta este o masură de <i>securitate</i> pentru a preîntampina abuzurile care ar duce la distrugerea aşezării în pagină sau ar cauza alte probleme. Daca HTML este activat, îl puteţi dezactiva de la mesaj la mesaj din formularul de publicare.");
$faq[] = array("Ce sunt <i>Zâmbetele</i>?", "Zâmbetele sau iconiţele emotive sunt imagini mici care pot fi folosite pentru a exprima anumite sentimente folosind un cod scurt. Spre exemplu :) înseamnă vesel , :( înseamnă trist. Lista completă poate fi vazută în formularul de publicare. Încercaţi totuşi să nu îi folosiţi prea mult pentru că pot face un mesaj ilizibil şi un moderator se poate hotărî să îi scoată din mesaj sau să şteargă mesajul cu totul.");
$faq[] = array("Pot publica imagini?", "Imaginile pot fi afişate în mesajele dumneavoastră. Cu toate acestea, nu există nici o posibilitate în acest forum pentru încarcarea imaginilor direct în forum. De aceea, trebuie să scrieţi o legatură către o imagine stocată pe un server accesibil publicului, cum ar fi <i>http://un.server.oarecare.ro/imaginea-mea.gif</i>. Nu puteţi să faceţi legatura cu imagini de pe calculatorul dumneavoastră (doar dacă este un server), nici cu imagini stocate în spatele unui mecanism de autentificare, cum ar fi casuţele de mail, site-uri protejate cu parolă, etc. Pentru a afişa imaginea, folosiţi fie baliza codului BB [img] sau cod HTML (dacă este permis).");
$faq[] = array("Ce sunt anunţurile?" ,"Anunţurile deseori conţin informaţii importante şi ar trebui să le citiţi cât de repede puteţi. Anunţurile apar în partea de sus a fiecărei pagini în forumul de care aparţin. Dacă puteţi sau nu posta un anunţ depinde de permisiunile necesare, care sunt stabilite de administrator.");             
$faq[] = array("Ce sunt subiectele lipicioase (sticky)?", "Subiectele lipicioase apar sub anunţuri în forum şi doar pe prima pagină. Deseori sunt destul de importante şi ar trebui să le citiţi dacă puteţi. Ca şi cu anunţurile, administratorul alege ce permisiuni sunt necessre pentru pentru a le publica.");
$faq[] = array("Ce sunt subiectele blocate?", "Subiectele sunt blocate fie de către moderator, fie de către administrator. Nu puteţi răspunde unui subiect blocat şi orice chestionar conţinut este închis automat. Subiectele pot fi închise din mai multe motive.");


$faq[] = array("--","Niveluri de utilizatori şi grupuri");
$faq[] = array("Cine sunt administratorii?", "Administratorii sunt cei care au cel mai mare nivel de control asupra întregului forum. Aceşti utilizatori controlează toate detaliile forumurilor, încluzând permisiunile de acces, excluderea utilizatorilor, crearea grupurilor şi a moderatorilor, etc. De asemenea, au capacitatea de a modera toate formurile.");
$faq[] = array("Cine sunt moderatorii?", "Moderatorii sunt persoane (sau grupuri de persoane) a căror menire este să aibă grijă de forumuri în mod constant. Au permisiunea de a modifica sau şterge mesajele şi de a bloca, debloca, muta, şterge şi împărţi subiectele de discuţie în forumurile pe care le moderează. În mod general, moderatorii există pentru a avea grijă ca utilizatorii să nu scrie \"pe lângă subiect\" şi să nu scrie materiale abuzive sau ofensatoare.");
$faq[] = array("Ce sunt grupurile de utilizatori?", "Grupurile de utilizatori sunt o modalitate de grupare a utilizatorilor. Fiecare utilizator poate aparţine mai multor grupuri (acest lucru diferă de majoritatea celorlalte programe) şi fiecare grup are drepturi de acces individuale. Acest lucru uşurează munca administratorilor dacă doresc ca mai mulţi utilizatori să modereze un forum sau să le ofere acces într-un forum privat.");
$faq[] = array("Cum pot să fac parte dintr-un grup de utilizatori?", "Pentru a intra într-un grup folosiţi legatura de <i>Grupuri de utilizatori</i> din partea de sus a paginii (acest lucru poate fi diferit de la pagină la pagină). Nu toate grupurile sunt deschise, unele sunt închise şi altele pot fi chiar ascunse. Dacă grupul o permite, puteţi să cereţi să fiţi înscris apăsând butonul respectiv. Moderatorul va trebui să vă aprobe cererea. Este posibil să vă întrebe care sunt motivele pentru care vă doriţi să intraţi în grup. Vă rugăm să nu hărţuiţi un moderator de grup dacă vă respinge cererea pentru că are motive întemeiate.");
$faq[] = array("Cum pot deveni moderatorul unui grup de utilizatori?", "Grupurile de utilizatori sunt create de către administrator şi în acel moment este numit un moderator. Dacă doriţi să creaţi un grup de utilizatori atunci primul lucru pe care trebuie să îl faceţi este să luaţi legatura cu administratorul.");


$faq[] = array("--","Mesaje private");
$faq[] = array("Nu pot trimite mesaje private!", "Există trei posibile motive: nu sunteţi înregistrat şi/sau autentificat, administratorul nu a activat mesajele private pentru toţi utilizatorii sau administratorul a restricţionat pentru dumneavoastră folosirea mesajelor private. În ultimul caz ar trebui să îl intrebaţi ce motive a avut.");
$faq[] = array("Tot primesc mesaje private nedorite!", "În viitor vom adauga o listă de persoane ale căror mesaje să fie ignorate. Deocamdată dacă primiţi în continuare aceste mesaje anunţaţi administratorul, pentru că el are posibilitatea de a opri un utilizator să trimită mesaje private.");
$faq[] = array("Am primit spam-uri sau mesaje abuzive de la cineva din forum!", "Ne pare rău să auzim acest lucru. Formularul pentru trimiterea unui mesaj include măsuri de siguranţă pentru a observa care utlizatori trimit astfel de mesaje. Ar trebui să trimiteţi administratorului o copie completă a mesajului primit, inclusiv antetul (acestea oferă detalii despre utilizatorul care a trimis mesajul). Astfel, el poate acţiona.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Întrebări despre phpBB 2");
$faq[] = array("Cine a scris acest program?", "Acest program (în forma nemodificată) este produs, lansat şi aflat sub copyright-ul <a href=\"http://www.phpbb.com/\" target=\"_blank\">grupului phpBB</a>. Este disponibil sub Licenţa Generală Publică GNU şi poate fi distribuit liber; folosiţi legătura către grup mai multe detalii.");
$faq[] = array("De ce nu este facilitatea X disponibilă?", "Acest program a fost scris şi licenţiat de către grupul phpBB. În cazul în care consideraţi că o facilitate trebuie să fie adaugată, vă rugăm să vizitaţi site-ul phpBB.com şi să vedeţi ce are de spus grupul phpBB. Vă rugăm să nu publicaţi cereri de facilităţi pe forumurile de la phpbb.com, pentru că grupul phpBB foloseşte sourceforge pentru a delega sarcinile legate de noile facilităţi. Vă rugăm să treceţi prin aceste forumuri şi să vedeţi, dacă există, care este poziţia noastră legată de o facilitate şi să urmaţi procedura explicată acolo.");
$faq[] = array("Cu cine iau legatura pentru probleme legate de abuzuri şi/sau juridice legate de acest program?", "Ar trebui să luaţi legatura cu administratorul forumului. Dacă nu puteţi să faceţi acest lucru, ar trebui să încercaţi cu unul din moderatorii de forumuri şi să îi intrebaţi cu cine aţi putea lua legatura. Dacă tot nu primiţi răspuns, ar trebui să luaţi legătura cu posesorul domeniului dumneavoastră (efectuaţi o interogare whois) sau, dacă acesta este pe un domeniu gratuit (yahoo, free.fr, etc.), conducerea sau departamentul pentru abuzuri. Grupul phpBB nu are absolut nici un fel de control şi nu poate fi tras la răspundere pentru cum, unde sau de către cine este folosit acest program. Este inutil să luaţi legatura cu grupul phpBB pentru orice fel de probleme juridice care nu sunt legate direct de pagina phpbb.com sau de program în sine. Dacă trimiteţi un mesaj către grupul phpBB despre orice folosire a unui terţ a acestui program, nu asteptaţi un răspuns pentru că nu veţi primi.");

//
// This ends the FAQ entries
//

?>