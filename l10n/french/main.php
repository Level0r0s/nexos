<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/french/main.php,v $
  $Revision: 9.36 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:49 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','fr');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%d %B %Y à %H:%M:%S %Z ');
define('_DATESTRING2','%A, %d %B');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Page suivante');
define('_PREVIOUSPAGE','Page précédente');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Recherche');
define('_LOGIN','Ouverture');
define('_WRITES','a écrit:');
define('_POSTEDON','Posté le');
define('_NICKNAME','Surnom');
define('_PASSWORD','Mot de Passe');
define('_WELCOMETO','Bienvenue à');
define('_EDIT','Editer');
define('_DELETE','Supprimer');
define('_POSTEDBY','Posté par');
define('_READS','lectures');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Retour</a>' : '<a href="javascript:history.go(-1)">Retour</a>').' ]');
define('_COMMENTS','commentaires');
define('_PASTARTICLES','Articles précédents');
define('_OLDERARTICLES','Articles plus anciens');
define('_BY','par');
define('_ON','le');
define('_LOGOUT','Se déconnecter');
define('_WAITINGCONT','Contenu en attente');
define('_WREVIEWS','Revues en attente');
define('_WLINKS','Liens en attente');
define('_ONEDAY','Un Jour comme Aujourd\'hui...');
define('_ASREGISTERED','Vous n\'avez pas encore de compte?<br /><a href="'.getlink("Your_Account").'">Enregistrez vous !</a><br />En tant que membre enregistré, vous bénéficierez de privilèges tels que: changer le thème de l\'interface, modifier la disposition des commentaires, signer vos interventions, ...');
define('_MENUFOR','Menu de');
define('_NOBIGSTORY','Il n\'y a pas encore d\'article-phare aujourd\'hui.');
define('_BIGSTORY','Aujourd\'hui, l\'article le plus lu est:');
define('_SURVEY','Sondage');
define('_POLLS','Sondages');
define('_PCOMMENTS','Commentaires:');
define('_RESULTS','Résultats');
define('_HREADMORE','suite...');
define('_CURRENTLY','Il y a en ce moment,');
define('_GUESTS','invité(s) et');
define('_MEMBERS','membre(s) connectés.');
define('_YOUARELOGGED','Vous êtes connecté en tant que');
define('_YOUHAVE','Vous avez');
define('_PRIVATEMSG','message(s) privé(s).');
define('_YOUAREANON','Vous êtes un visiteur anonyme. Vous pouvez vous enregistrer gratuitement en cliquant <a href="'.getlink("Your_Account").'">ici</a>.');
define('_NOTE','Note:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Nous avons généré');
define('_PAGESVIEWS','pages depuis le');
define('_TOPIC','Sujet');
define('_UDOWNLOADS','Téléchargements');
define('_VOTE','Vote');
define('_VOTES','Votes');
define('_MVIEWADMIN','Visualisation: Administrateurs seulement');
define('_MVIEWUSERS','Visualisation: Utilisateurs enregistrés seulement');
define('_MVIEWANON','Visualisation: Utilisateurs anonymes seulement');
define('_MVIEWALL','Visualisation: Tous les visiteurs');
define('_EXPIRELESSHOUR','Expiration: Moins d\'une heure');
define('_EXPIREIN','Expiration dans');
define('_UNLIMITED','Illimitées');
define('_HOURS','heures');
define('_RSSPROBLEM','La manchette de ce site n\'est pas disponible pour le moment.');
define('_SELECTLANGUAGE','Séléctionnez la langue');
define('_SELECTGUILANG','Séléctionnez la langue de l\'interface:');
define('_NONE','Aucun');
define('_BLOCKPROBLEM','<center>Il y a un problème avec ce bloc.</center>');
define('_BLOCKPROBLEM2','<center>Il n\'y a rien dans ce bloc.</center>');
define('_MODULENOTACTIVE','Désolé, ce module n\'est pas activé');
define('_NOACTIVEMODULES','Modules inactifs');
define('_MODULENOEXIST','Nous sommes désolés mais cette page %s n\'existe pas');
define('_FORADMINTESTS','(Pour des tests administratifs)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Accès refusé');
define('_RESTRICTEDAREA','Vous essayez d\'accéder à un espace réservé.');
define('_MODULEUSERS','Nous sommes désolés mais cette section de notre site est réservées aux <i>utilisateurs enregistrés seulement</i><br /><br />Vous pouvez vous enregistrer gratuitement en cliquant <a href="'.getlink("Your_Account&amp;file=register").'">ici</a>, puis vous pouvez<br />accéder à cette section sans restriction. Merci.<br /><br />');
define('_MODULEUSERS2','Vous pouvez vous enregistrer en cliquant sur <a href="'.getlink('Your_Account&amp;file=register').'">ce lien</a>.  Il vous donnera la permission d\'accéder cette partie du site.<br /><br />Merci de votre compréhension.');
define('_MODULESADMINS','Nous sommes désolés mais cette section de notre site est réservée aux <i>administrateurs seulement</i><br /><br />');
define('_MODULESGROUPS','Appartenance à un Groupe obligatoire pour accéder à cette partie');
define('_HOME','Accueil');
define('_HOMEPROBLEM','Il y a un gros problème: nous n\'avons pas de page d\'accueil!!!');
define('_ADDAHOME','Attribuez un nouveau module comme page d\'accueil');
define('_HOMEPROBLEMUSER','Il y a un problème en ce moment sur la page d\'accueil. S\'il vous plait, revenez plus tard.');
define('_MORENEWS','Plus dans la catégorie des Articles');
define('_ALLCATEGORIES','Toutes les catégories');
define('_SPAMGUARDPROTECTED','Cet email a été bloqué par SpamGuard');
define('_M_CHARS','Maximum: %s caractères');

define('_SYS_MESSAGE','Message Système');
define('_SYS_MESSAGES','Messages Système');
define('_SYS_MAINTENANCE','Vous êtes en mode maintenance');
define('_SYS_DEMO','Vous êtes en mode démo administration.<br />Vous ne pouvez pas effectuer de changements à la base de données.<br /><a href="'.adminlink('logout').'">Déconnecter!</a>');

define('_DATE','Date');
define('_HOUR','Heure');
define('_UMONTH','Mois');
define('_YEAR','Année');
define('_JANUARY','Janvier');
define('_FEBRUARY','Février');
define('_MARCH','Mars');
define('_APRIL','Avril');
define('_MAY','Mai');
define('_JUNE','Juin');
define('_JULY','Juillet');
define('_AUGUST','Août');
define('_SEPTEMBER','Septembre');
define('_OCTOBER','Octobre');
define('_NOVEMBER','Novembre');
define('_DECEMBER','Décembre');

define('_MONDAY','Lundi');
define('_TUESDAY','Mardi');
define('_WEDNESDAY','Mercredi');
define('_THURSDAY','Jeudi');
define('_FRIDAY','Vendredi');
define('_SATURDAY','Samedi');
define('_SUNDAY','Dimanche');

define('_ABR_MONDAY','Lun');
define('_ABR_TUESDAY','Mar');
define('_ABR_WEDNESDAY','Mer');
define('_ABR_THURSDAY','Jeu');
define('_ABR_FRIDAY','Ven');
define('_ABR_SATURDAY','Sam');
define('_ABR_SUNDAY','Dim');

define('_BWEL','Bienvenue');
define('_BPM','Messages privés');
define('_BUNREAD','Non-lus');
define('_BREAD','lus');
define('_BMEMP','Adhésion');
define('_BLATEST','Dernier');
define('_BTD','Nouveau aujourd\'hui');
define('_BYD','Nouveau hier');
define('_BOVER','Tous');
define('_BVISIT','Visiteurs en ligne');
define('_BVIS','Visiteurs');
define('_BMEM','Membres');
define('_BTT','Total');
define('_BON','En ligne maintenant');
define('_BREG','Enregistrement');
define('_BROADCAST','Envoyer Message Public');
define('_BROADCASTFROM','Message public de');
define('_TURNOFFMSG','Désactiver les Messages Publics');
define('_JOURNAL','Blog');
define('_READMYJOURNAL','Lire mon journal');
define('_ADD','Ajouter');
define('_YES','Oui');
define('_NO','Non');
define('_INVISIBLEMODULES','Modules Invisibles');
define('_ACTIVEBUTNOTSEE','(Liens actifs mais invisibles)');
define('_BOTS','Bots');

define('_UM','Moniteur de mise à jour Dragonfly');
define('_UM_F','Impossible de joindre le service de mise à jour. Merci de réessayer ultérieurement');
define('_UM_G','Vous utilisez la dernière version de Dragonfly');
define('_UM_R','Veuillez <a href="%2$s" target="_blank">upgrader</a> vers Dragonfly %1$s');

define('_TEAM','Équipe');
define('_LINKAPPROVEDMSG','Félicitations! Le lien que vous avez proposé vient d\'être approuvé. N\'oubliez pas de faire un lien sur notre site en retour.');
define('_MODREQLINKS','Mod. Liens');
define('_BROKENLINKS','Liens morts');
define('_MODREQDOWN','Mod. Téléchargements');
define('_BROKENDOWN','Cas. Téléchargements');
define('_PAGEGENERATION','Génération de la page:');
define('_SECONDS','secondes');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page générée en %1$s secondes avec %2$s accès de la base en %3$s secondes');
define('_YOUHAVEONEMSG','Vous avez 1 nouveau message privé');
define('_NEWPMSG','Nouveaux messages privés');
define('_CONTRIBUTEDBY','Envoyé par');
define('_CHAT','Chat');
define('_REGISTERED','Enregistrés');
define('_CHATGUESTS','Invités');
define('_USERSTALKINGNOW','Actuellement en Ligne');
define('_ENTERTOCHAT','Entrer dans la discussion');
define('_CHATROOMS','Salles disponibles');
define('_ALLTOPICS','Tous les Sujets');
define('_ASSOTOPIC','Sujets associés');
define('_HELLO','Bonjour');
define('_ALL','Tous');
define('_URL','URL');
define('_SUBJECT','Sujet');
define('_PREVIEW','Pré visualiser');
define('_SEND','Envoyer');
define('_ANONYMOUS','Anonyme');
define('_BREADCRUMB', 'Le séparateur, apparait dans les titres des pages entre les mots');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&raquo;');
define('_RESET','Remise à zéro');
define('_AT','at');
define('_LASTMSGS','Les %s Derniers Messages du Forum');
define('_LASTPOSTBY','Dernier poste par %1$s dans %2$s sur %3$s');
define('_PRINTER','Format imprimable');

define('_CREDITS_TITLE','Crédits');
define('_CREDITS_PRODUCT','Produit');
define('_CREDITS_DESC','Description');
define('_CREDITS_AUTHORS','Auteur(s)');

define('_PP_TITLE','Sauvegarde de la vie privée');
define('_PP_MODIFY','Modifier ce Message');

define('_SENDEREMAIL','l\' email de l\'expéditeur');
define('_SENDERNAME','nom de l\'expéditeur');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

define('_REASONS_0','Comme tel');
define('_REASONS_1','Hors Sujet');
define('_REASONS_2','Harcelant');
define('_REASONS_3','Lutin');
define('_REASONS_4','Redondant');
define('_REASONS_5','Révélateur');
define('_REASONS_6','Intéressant');
define('_REASONS_7','Informatif');
define('_REASONS_8','Rigolo');
define('_REASONS_9','Surévalué');
define('_REASONS_10','Sous-évalué');

/* My Account Tools Block */
define('_TB_BLOCK','Mes Outils de Compte');
define('_TB_TASKS','Tâches');
define('_TB_INFO','Information');
define('_TB_PROFILE_INFO','Mon profil public');
define('_TB_EDIT_PROFILE','Les infos relatives à mon profil');
define('_TB_EDIT_REG','Détails de mon compte');
define('_TB_EDIT_PRIVATE','Mes Infos privées');
define('_TB_EDIT_AVATAR','Mon avatar');
define('_TB_DELETE','Supprimer mon Compte');
define('_TB_CONFIG','Configuration');
define('_TB_EDIT_PREFS','Mes préférences');
define('_TB_EDIT_HOME','Configurer ma page d\'accueil');
define('_TB_EDIT_COMM','My comment settings');
define('_TB_PERSONAL','Personnel');
define('_TB_PERSONAL_GALLERY','Ma Galerie');
define('_TB_PERSONAL_JOURNAL','Mon blog');
define('_TB_PRIVMSGS','Messages perso');
define('_TB_PRIVMSGS_INBOX','Boîte d\'entrée');
define('_TB_PRIVMSGS_OUTBOX','Boîte de sortie');
define('_TB_PRIVMSGS_SENTBOX','Boîte d\'envois');
define('_TB_PRIVMSGS_SAVEBOX','Boîte de sauvegarde');
define('_TB_PRIVMSGS_SEND','Envoyer Message');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Infos Utilisateurs');
define('_SECURITYCODE','Code de sécurité');
define('_TYPESECCODE','Type de code de sécurité');
define('_MEMBERSOPTIONS','Options des membres');
define('_READSEND','Lire vos messages privés. Envoyer des messages privés.');
define('_INBOX','Boîte d\'entrée');
define('_NEW','Nouveau');
define('_ACCOUNTOPTIONS','Votre Compte. Changer vos options et lire vos messages privés.');
define('_LOGOUTACCT','Sortir de ce Compte.');
define('_LOGOUTADMINACCT','Sortir du Compte Admin.');
define('_BLOGIN','Votre Compte');
define('_BFLOGIN','Profil du Forum');
define('_BHID','Caché');
define('_WHOWHERE','Qui est Où');
define('_STAFFONL','Admin en Ligne');
define('_STAFFNONE','Pas d\'Admin en ligne!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Communauté');
define('_BlogsLANG','BlogS');
define('_ContentLANG','Contenu');
define('_coppermineLANG','Galerie photos');
define('_CPGlangLANG','Aide à la traduction');
define('_DownloadsLANG','Téléchargement');
define('_EncyclopediaLANG','Encyclopédie');
define('_ForumsLANG','Forums Communautaires');
define('_ContactLANG','Contactez nous');
define('_FAQLANG','Foire aux questions - Aide');
define('_Members_ListLANG','Liste des membres');
define('_NewsLANG','Nouvelles');
define('_ReviewsLANG','Revues');
define('_SearchLANG','Recherche');
define('_StatisticsLANG','Statistiques');
define('_Stories_ArchiveLANG','Nouvelles archivées');
define('_Submit_NewsLANG','Soumettre Nouvelle');
define('_SurveysLANG','Sondages');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Sujets');
define('_Private_MessagesLANG','Mes Messages Privés');
define('_Tell_a_FriendLANG','Dites-le à vos amis');
define('_Web_LinksLANG','Liens');
define('_Your_AccountLANG','Mon Compte');
define('_CPG_EventsLANG','Calendrier');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Amis');
define('_STORE','Magasin');
define('_PRODUCTS','Produits');
define('_DONATE','Donation');
define('_HELP','Aide');
define('_GALLERIES','Galleries');
define('_DOCS','Documentation');
define('_RULES','Règles &amp; Régulations');
define('_MENU','Menu Principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','Vous <strong>êtes</strong> inscrit à<br />notre bulletin');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','Vous <strong>n\'êtes pas</strong> inscrit à<br />notre bulletin');
define('_NEWSLETTERBLOCKREGISTER','Vous devez êtres un<br /><strong>utilisateur enregistré</strong><br />pour recevoir notre bulletin');
define('_NEWSLETTERBLOCKSUBSCRIBE','S\'inscrire');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Désinscrire');
define('_NEWSLETTERBLOCKREGISTERNOW','Enregistrez-vous maintenant!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG["provide_address"] = 'Vous devez fournir au moins une adresse de destinataire.';
$PHPMAILER_LANG["mailer_not_supported"] = ' mailer non supporté.';
$PHPMAILER_LANG["execute"] = 'Ne peut pas lancer l\'exécution: ';
$PHPMAILER_LANG["instantiate"] = 'Impossible d\'instancier la fonction mail.';
$PHPMAILER_LANG["authenticate"] = 'SMTP Erreur: Echec de l\'authentification.';
$PHPMAILER_LANG["from_failed"] = 'L\'adresse From suivante a échoué : ';
$PHPMAILER_LANG["recipients_failed"] = 'SMTP Erreur: Les destinataires suivants sont en erreur : ';
$PHPMAILER_LANG["data_not_accepted"] = 'SMTP Erreur: Data non acceptée.';
$PHPMAILER_LANG["connect_host"] = 'SMTP Erreur: Impossible de connecter le serveur SMTP .';
$PHPMAILER_LANG["file_access"] = 'N\'arrive pas à accéder au fichier: ';
$PHPMAILER_LANG["file_open"] = 'Erreur Fichier: ouverture impossible: ';
$PHPMAILER_LANG["encoding"] = 'Encodage inconnu: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Sauvegarder Modifications');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Langue');
define('_FUNCTIONS','Fonctions');
define('_SHOW','Montrer');
define('_TO','à');
define('_DAY','Jour');
define('_LAST','Derniers');
define('_ACTIVE','Actif');
define('_DEACTIVATE','Désactiver');
define('_INACTIVE','Inactif');
define('_ACTIVATE','Activer');
define('_ACTIVATE2','Activer ?');
define('_VIEW','Visible à');
define('_VIEWPRIV','Qui peut le voir ?');
define('_MVADMIN','Les administrateurs seulement');
define('_MVUSERS','Les utilisateurs enregistrés seulement');
define('_MVANON','Les utilisateurs anonymes seulement');
define('_MVALL','Tous les visiteurs');
define('_IMAGE','Image');
define('_GO','Ok');
define('_OPTION','Option');
define('_CATEGORY','Catégorie');
define('_SUBCATEGORY','Sous-catégorie');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','jours');
define('_WARNING','Attention');
define('_POLLTITLE','Titre du sondage');
define('_POLLEACHFIELD','Entrez toutes les options disponibles dans un seul champs s.v.p.');
define('_ADDCATEGORY','Ajouter une nouvelle catégorie');
define('_PAGEBREAK','Si vous voulez plusieurs pages, écrivez <b>&lt;!--pagebreak--&gt;</b> à l\'endroit où vous désirez un saut de page.');
define('_SIGNATURE','Signature');
define('_DESCRIPTION','Description');
define('_EDITCATEGORY','Editer la catégorie');
define('_IN','Dans');
define('_DESCRIPTION255','Description: (255 caractères max)');
define('_MODCATEGORY','Modifier une catégorie');
define('_SUBMITTER','Proposé par');
define('_VISIT','Visite');
define('_EXTENDEDTEXT','Suite du Texte');
define('_CHECKCATEGORIES','Vérifier les catégories');
define('_INCLUDESUBCATEGORIES','(inclus les sous-catégories)');
define('_CHECKSUBCATEGORIES','Vérifier les sous-catégories');
define('_VALIDATELINKS','Valider les liens');
define('_FAILED','Echec !');
define('_BEPATIENT','(soyez patient)');
define('_VALIDATINGCAT','Valider une catégorie (et toutes les sous-catégories)');
define('_VALIDATINGSUBCAT','Validation de la sous-catégorie');
define('_OK','Ok !');
define('_CHECK','Vérifiez');
define('_IGNORE','Ignorer');
define('_HITS','Accès');
define('_FILESIZE', 'Taille Fichier');
define("_EZTHEREIS","Il y a");
define("_EZSUBCAT","sous-catégories");
define("_EZATTACHEDTOCAT","sous cette catégorie");
define("_EZBROKENLINKS","Liens morts");
define("_DELEZLINKCATWARNING","ATTENTION : Etes-vous certain de vouloir effacer cette catégorie?<br />Vous allez en même temps effacer toutes les sous-catégories et les liens qui y sont rattachés!");

// index.php
define('_DEFHOMEMODULE','Module de page d\'accueil par défaut');
define('_MODULEINHOME','Module chargé sur page d\'accueil:');
define('_CHANGE','Changer');
define('_WHOSONLINE','Qui est en ligne ?');
define('_NP_ADMIN','Bloc-Notes');
define('_NP_LOCKED','Le Bloc-Notes a été verrouillé<br />Seul un Super Utilisateur peut le déverrouiller');
define('_NP_SAVE','Sauvegarder Notes');
define('_NP_UNLOCK','Déverrouiller Bloc-Notes');
define('_NP_LOCK','Verrouiller Bloc-Notes');
// news
define('_STICKY','Articles Collants');
define('_ARTICLEUP','Remonter Article');
define('_ARTICLEDOWN','Redescendre Article');
define('_UNSTICK','Décoller');
define('_STICK','Coller');
define('_AUTOMATEDARTICLES','Articles programmés');
define('_STORYID','ID article');
define('_CURRENTPOLL','Sondage en cours');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','Il n\'existe pas encore de compte Administrateur, continuez pour en créer un…');
define('_CREATEUSERDATA','Voulez-vous créer un utilisateur standard avec les mêmes données?');
define('_ADMINLOGIN','Connexion au Menu Administration');
define('_ADMINID','ID Admin');
define('_EMAIL','E-mail');
define('_SUBMIT','Soumettre');
define('_YOUARELOGGEDOUT','Vous êtes maintenant déconnecté !');
define('_PASSWDNOMATCH','Désolé, les mots de passe ne correspondent pas.  Retournez à la page précédente et essayez à nouveau.');
define('_LOGIN_REMEMBERME','Retenir mon identité?');
define('_ADMINMENU_LOGOUT','Déconnexion du Menu Administration');
define('_PASSWORD_MALFORMED','Veuillez utiliser au moins un chiffre, une majuscule et une minuscule dans votre mot de passe');

// admins.php
define('_AUTHORSADMIN','Contrôle des Administrateurs');
define('_NAME','Nom');
define('_REQUIRED','(requis)');
define('_MODIFYINFO','Modifier l\'Information');
define('_DELAUTHOR','Effacer Administrateur');
define('_ADDAUTHOR','Ajouter un nouvel administrateur');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super Utilisateur');
define('_SUPERWARNING','ATTENTION: Si Super Utilisateur est coché, l\'utilisateur aura tous les droits d\'accès!');
define('_ADDAUTHOR2','Ajouter Administrateur');
define('_RETYPEPASSWD','Retapez votre Mot de Passe');
define('_FORCHANGES','(Pour les changements seulement)');
define('_COMPLETEFIELDS','Vous devez remplir tous les Champs');
define('_CREATIONERROR','Erreur dans la création d\'un compte administrateur');
define('_AUTHORDEL','Effacer Administrateur');
define('_PUBLISHEDSTORIES','Choisissez un nouvel administrateur à qui assigner de articles');
define('_SELECTNEWADMIN','Choisissez un nouvel administrateur à qui les assigner');
define('_GODNOTDEL','* (Le compte Super Utilisateur ne peut pas être effacé!)');
define('_MAINACCOUNT','Super Utilisateur*');
define('_USERS','Utilisateurs');

// banners.php
define('_BANNERSADMIN','Administration des Bannières');
define('_DELETEBANNER','Effacer Bannière');
define('_SURETODELBANNER','Etes-vous sûr de vouloir effacer cette bannière?');
define('_EDITBANNER','Éditer Bannière');

// blocks.php
define('_BLOCKSADMIN','Administration des blocs');
define('_CENTER','Centre');
define('_CENTERUP','Remonter Centre');
define('_CENTERDOWN','Redescendre Centre');
define('_BLOCKFILE','(Fichier Bloc)');
define('_BLOCKFILE2','FICHIER');
define('_BLOCKSYSTEM','SYSTÈME');
define('_ADDNEWBLOCK','Ajouter un nouveau bloc');
define('_RSSFILE','URL du fichier RSS/RDF');
define('_ONLYHEADLINES','(Seulement pour les manchettes)');
define('_REFRESHTIME','Délai de rafraîchissement');
define('_CREATEBLOCK','Créer un bloc');
define('_EDITBLOCK','Editer un bloc');
define('_BLOCK','Bloc');
define('_SAVEBLOCK','Sauvegarder le bloc');
define('_BLOCKACTIVATION','Activation du bloc');
define('_BLOCKPREVIEW','Prévisualisation du bloc');
define('_WANT2ACTIVATE','Voulez-vous activer ce bloc ?');
define('_ARESUREDELBLOCK','Etes-vous sûr de vouloir enlever ce bloc ?');
define('_BLOCKUP','Remonter bloc');
define('_BLOCKDOWN','Redescendre bloc');
define('_BLOCKTOP','Redescendre bloc vers le bas de page');
define('_BLOCKBOTTOM','Remonter bloc vers le haut de page');
define('_TITLE','Titre');
define('_POSITION','Position');
define('_WEIGHT','Importance');
define('_STATUS','Statut');
define('_LEFTBLOCK','Bloc de gauche');
define('_LEFT','Gauche');
define('_RIGHTBLOCK','Bloc de droite');
define('_RIGHT','Droite');
define('_TYPE','Type');
define('_CUSTOM','Autre');
define('_FILENAME','Nom de fichier');
define('_FILEINCLUDE','(Si vous utilisez cette option, les champs de contenu et de rafraîchissement seront ignorés)');

// comments.php
define('_REMOVECOMMENTS','Effacer les commentaires');
define('_SURETODELCOMMENTS','Etes-vous sûr de vouloir supprimer le commentaire sélectionné et toutes les réponses ?');

// database.php
define('_SAVEDATABASE','Sauvegarde de la Base de Données');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Statut actuel');
define('_ACTIVATEPAGE','Activer cette page?');

// history.php
define('_EPHEMADMIN','Éphémérides du jour');
define('_ADDEPHEM','Ajouter une nouvelle éphéméride');
define('_EPHEMDESC','Description de l\'éphéméride');
define('_EPHEMMAINT','Maintenance de l\'éphéméride:');
define('_EPHEMEDIT','Éditer l\'éphéméride');
define('_EPHEMDELETE','Effacer l\'éphéméride');

// headlines.php
define('_RSSFAIL','Il y a un problème avec l\'URL du fichier RSS');
define('_RSSTRYAGAIN','Veuillez vérifier l\'URL et le nom du fichier RSS, et essayez à nouveau.');
define('_RSSCONTENT','(Contenu RSS/RDF)');
define('_IFRSSWARNING','Si vous entrez un URL, le contenu que vous avez écrit ne sera pas affiché !');
define('_SETUPHEADLINES','(Pour obtenir de nouvelles manchettes, sélectionnez un site dans la liste ou choisissez Autre et entrez l\'URL)');
define('_HEADLINESADMIN','Administration des manchettes');
define('_ADDHEADLINE','Ajouter une Manchette');
define('_EDITHEADLINE','Editer les manchettes');
define('_SURE2DELHEADLINE','ATTENTION: Etes-vous sûr de vouloir enlever cette manchette?');

// messages.php
define('_MESSAGESADMIN','Administration des messages');
define('_MESSAGETITLE','Titre');
define('_MESSAGECONTENT','Contenu');
define('_ALLMESSAGES','Aperçu messages');
define('_EDITMSG','Editer message');
define('_ADDMSG','Ajouter message');
define('_REMOVEMSG','Etes-vous sûr de vouloir supprimer ce message ? ');
define('_CHANGEDATE','Changer la date de début à aujourd\'hui ?');
define('_IFYOUACTIVE','(Si vous activez ce message maintenant, la date début sera aujourd\'hui)');

// modules.php
define('_MODULESADMIN','Administration des Modules');
define('_HOMECONFIG','Configuration de la page d\'accueil');
define('_MODULESADDONS','Modules et Addons');
define('_INHOME','Définir comme module d\'accueil');
define('_MODULEHOMENOTE','Les nouveaux modules ajoutés dans le répertoire /modules/ seront automatiquement ajoutés au système<br />En effaçant un module de ce répertoire entraîne qu\'il sera également effacé du système<br /><br />Le module ayant un titre gras correspond au module défini comme l\'accueil<br />Ce module ne peut être ni désactivé ni restreint à certains utilisateurs');
define('_PUTINHOME','Définir comme Accueil');
define('_SURETOCHANGEMOD','Etes vous sûr de vouloir changer votre page d\'accueil de');
define('_NOTINMENU','[ <strong>·</strong> ] indique que ce module est invisible dans le module des blocs');
define('_SHOWINMENU','Afficher dans le menu?');
define('_CUSTOMTITLE','Titre personnalisé');
define('_MODULEEDIT','Éditer Module');
define('_VERSION','Version');
define('_UPGRADE','Upgrade vers %s');
define('_DBSIZE','Taille de la Base de Données');
define('_CVS_EXPLAIN','Il semble que ce module contient un répertoire CVS.<br />A l\'aide de CVS vous pouvez recevoir les dernières mises à jour très facilement.<br /><b>MAIS</b> la dernière version peut contenir des bugs s\'il ne s\'agit pas d\'un release officiel.<br />Si PHP vous est connu, vous pouvez faire un update en cliquant sur le lien ci-contre.<br />N\'oubliez surtout pas de faire un backup avant tout !!!');
define('_CVS_UPDATE','Updater les fichiers CVS');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','De');
define('_STAFF','Equipe');
define('_NL_RECIPS','Destinataires');
define('_SUBSCRIBEDUSERS','Membres ayant souscrit');
define('_NL_ALLUSERS','Tous les membres');
define('_NL_ADMINS','Administrateurs');
define('_NL_REGARDS','Salutations');
define('_DISCARD','Ignorer');
define('_REVIEWTEXT','Merci de vérifier votre texte:');
define('_MANYUSERSNOTE','AAttention! Un grand nombre d\'utilisateurs vont recevoir cet email. Le script pourra tourner durant plusieurs minutes.<br />Veuillez patienter s.v.p.');
define('_NL_NOUSERS','Le groupe sélectionné ne contient aucun utilisateur<br / >Retournez et choisissez un groupe différent');
define('_NUSERWILLRECEIVE','utilisateurs vont recevoir ce bulletin');
define('_NLUNSUBSCRIBE',"Vous recevez ce message parce que vous avez souscrit le bulletin de notre site. Vous pouvez à tout instant renoncer aux envois en cliquent sur ce <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">lien</a>. Pour recevoir de l'assistance vous pouvez envoyer un email à notre <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">administrateur</a>");
define('_NEWSLETTERSENT','Le Bulletin a été envoyé');

// referers.php
define('_WHOLINKS','Qui nous réfère sur son site?');
define('_DELETEREFERERS','Effacer les référants');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Pied de page');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Configuration du site Web');
define('_GENSITEINFO','Infos Générales sur le Site');
define('_SITENAME','Nom du Site');
define('_SITEURL','URL du site');
define('_SITELOGO','Logo du site');
define('_SITESLOGAN','Slogan du site');
define('_STARTDATE','Date de mise en ligne du site');
define('_ADMINEMAIL','Email de l\'administrateur');
define('_ITEMSTOP','Nombre d\'éléments sur la page Top');
define('_STORIESHOME','Nombre d\'articles sur la page d\'accueil');
define('_OLDSTORIES','Nombre d\'articles dans la boîte des Articles Précédents');
define('_ALLOWANONPOST','Accepter des articles d\'utilisateurs anonymes?');
define('_DEFAULTTHEME','Thème par défaut pour votre site');
define('_SHOWSEC','Afficher le code de sécurité');
define('_TOOLTIPS','Afficher aides sur les champs désignés');
define('_UM_TOGGLE','Activer le contrôle de mise à jour');
define('_UM_EXPLAIN','2 informations seront retirés de notre site dragonflycms.org: Le numéro de version actuelle de Dragonfly et s\'il y a d\'autres messages importants concernant votre version actuelle. La seule information envoyée sera votre version de Dragonfly. On <strong>ne sauvegarde pas</strong> ces requêtes sur notre serveur.');
// maintenance
define('_MAINTENANCE','Maintenance');
define('_MESSAGE','Message');
//cookies
define('_BROWSER_COOKIES','Cookies');
define('_SNAME_AS_COOKIE','SERVER_NAME as Cookie Domain');
define('_CURRENT','current');
define('_COOKIE_DOMAIN','else Cookie domain');
define('_COOKIE_PATH','Cookie Path');
define('_ADMIN_COOKIE','Admin cookie name');
define('_USER_COOKIE','Member cookie name');
// multilingual
define('_MULTILINGUALOPT','Système multilingue');
define('_SELLANGUAGE','Langue par défaut de mon site');
define('_LOCALEFORMAT','Format local pour la date et l\'heure');
define('_ACTMULTILINGUAL','Activer Système Multilingue? ');
define('_ACTUSEFLAGS','Utiliser les drapeaux au lieu du dropdown? ');
// banners
define('_BANNERSOPT','Système Bannières');
define('_ACTBANNERS','Activer le Système Bannières');
// footer
define('_FOOTERMSG','Messages de bas de page');
define('_FOOTERLINE1','Pied de page 1');
define('_FOOTERLINE2','Pied de page 2');
define('_FOOTERLINE3','Pied de page 3');
// backend
define('_BACKENDCONF','Configuration syndication');
define('_BACKENDTITLE','Syndication - Titre');
define('_BACKENDLANG','Syndication - Langue');
// mail stories
define('_MAIL2ADMIN','Soumission d\'articles en attente');
define('_NOTIFYSUBMISSION','Notifier soumissions s\'articles en attente à l\'administrateur');
define('_EMAIL2SENDMSG','Email du destinataire');
define('_EMAILSUBJECT','Objet du message');
define('_EMAILMSG','Message');
define('_EMAILFROM','Email de l\'expéditeur');
// comments
define('_COMMENTSOPT','Système de commentaires');
define('_COMMENTSLIMIT','Limite en octets pour les commentaires');
define('_COMMENTSMOD','Modération des commentaires');
define('_MODADMIN','Modération par l\'administrateur');
define('_MODUSERS','Modération par les utilisateurs');
define('_NOMOD','Pas de Modération');
// adminmenu
define('_GRAPHICOPT','Options graphiques');
define('_BOTH','Les deux');
define('_GRAPHICAL','Graphique');
define('_SIDEBLOCK','Bloc du côté');
// miscellaneous
define('_MISCOPT','Options diverses');
define('_ACTIVATEHTTPREF','Activer le traçage des référants HTTP?');
define('_MAXREF','Combien de référants voulez-vous garder au maximum?');
define('_COMMENTSPOLLS','Activer les commentaires pour les Sondages?');
define('_COMMENTSARTICLES','Activer les commentaires pour les Articles?');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Système de censure');
define('_CENSORMODE','Mode de recherche');
define('_NOFILTERING','Pas de filtrage');
define('_EXACTMATCH','Recherche exacte');
define('_MATCHBEG','Recherche qu\'au début du texte');
define('_MATCHANY','Recherche dans le texte');
define('_CENSORREPLACE','Remplacement des mots réservés');
// email
define('_EMAILOPTIONS','Système de Messagerie');
define('_ALLOW_HTML_EMAIL','Accepter email en HTML');
define('_USE_SMTP','Utiliser serveur SMTP au lieu du mailer PHP');
define('_SMTP_HOST','Adresse du host SMTP  (smtp.example.com)');
define('_USE_SMTP_AUTH','Serveur nécessite autorisation SMTP');
define('_SMTP_USER_NAME','Nom d\'utilisateur SMTP');
define('_SMTP_USER_PASS','Mot de passe SMTP');

// cpg_adminmenu.php
define('_ADMINMENU','Menu Administration');
define('_ADMINLOGOUT','Sortie');
define('_AMENU0','System');
define('_AMENU1','Général');
define('_AMENU2','Membres');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informatif');
define('_AMENU6','Liens');
define('_AMENU7','Commerce');
define('_AMENU8','Multimédia');
define('_AMENU9','Modules');
define('_BMENU1','Aide');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Préférences');
define('_DATABASE','Base de Données');
define('_BLOCKS','Blocs');
define('_MODULES','Modules');
define('_EDITADMINS','Éditer l\'Administrateur');
define('_MESSAGES','Messages');
define('_BANNERS','Bannières');
define('_HTTPREFERERS','Référants HTTP');
define('_EDITUSERS','Membres');
define('_USERSCONFIG','Configuration des Membres');
define('_NEWSLETTER','Bulletin');
define('_SUBMISSIONS','Soumissions');
define('_ADDSTORY','Ajouter l\'article');
define('_TOPICS','Sujets');
define('_ADMPOLLS','Sondages');
define('_EPHEMERIDS','Ephémérides');
define('_REVIEWS','Comptes rendus');
define('_ENCYCLOPEDIA','Encyclopédie');
define('_SURVEYS','Sondages');
define('_SECTIONS','Rubriques');
define('_ARTICLES','Articles');
define('_FAQ','FAQ');
define('_DOWNLOAD','Téléchargements');
define('_WEBLINKS','Liens Web');
define('_CONTENT','Contenu');
define('_SYSINFO','System Info');
define('_REPORTABUG','Rapporter une erreur');
//coppermine admin
define('_W_INSTALL','Quelle Installation ?');
define('_W_PAGE','Quelle page? ');
//security admin
define('_SECURITY','Security');
define('_PROTECTION','Protection');
define('_EMAIL_DOMAINS','E-Mail Domains');
define('_FLOODING','Flooding');
define('_UUA','Unknown User-Agents');
define('_FLOODING_TIP','Flooding: Delay<br /><em>timing between each warning</em>');
define('_BAN_TIP','Flooding: Ban Duration<br /><em>how long the ban will last for</em>');
define('_AUTO_UNBAN_TIP','Flooding: Auto Unban<br /><em>clean ban after duration time expires</em>');
define('_FOREVER','forever');
define('_REMOVE_SELECTED','Remove selected');

//errors for cpg_error
define('_ERROR','ERREUR');
define('_SEC_ERROR','Erreur de Sécurité');
define('_ERROR_NOT_SET','%s n\'a pas été réglé');
define('_ERROR_NO_POST','Poster d\'un autre hôte n\'est pas permis...');
define('_ERROR_NO_GET','Les demandes GET ne sont pas acceptés pour cette fonction..');
define('_ERROR_BAD_CHAR','Les caractères que vous avez essayé d\'inclure dans votre %s requête ne sont pas autorisés...');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Vous avez essayé d\'accéder cette page par un mauvais lien...');
define('_ERROR_NONE_TO_DISPLAY','Il n\'y a pas de %s à afficher');
define('_ERROR_DELETE_CONF','Etes-vous sûr de vouloir effacer %s ?');
define('_ERROR_NO_EXIST','%s n\'existe pas');
define('_ERROR_ALREADYEXIST','%s existe déjà');
define('_TASK_COMPLETED','Opération compléte!');
define('_CONFIRM','Confirm');
define('_FOOTER_COPYRIGHTS', 'Interactive software released under <a href="http://dragonflycms.org/GNUGPL.html" target="_blank" title="GNU Public License Agreement">GNU GPL</a>,	<a href="'.getlink('credits').'">Code Credits</a>,	<a href="'.getlink('privacy_policy').'">Privacy Policy</a>');

# time
$LNG = array('_time' => array(
'l' => array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
'D' => array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'),
'F' => array(1=>'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
'M' => array(1=>'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'),
));
$LNG['_time']['l'][7] =& $LNG['_time']['l'][0];
$LNG['_time']['D'][7] =& $LNG['_time']['D'][0];
