<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/french/reviews.php,v $
  $Revision: 9.4 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Votre Nom');
define('_SORTASC','Ordre Alphabetique');
define('_SORTDESC','Ordre Inversé');
define('_CANCEL','Annuler');
define('_SCORE','Score:');
define('_REPLYMAIN','Poster un commentaire');
define('_ALLOWEDHTML','HTML Autorisé:');
define('_POSTANON','Poster Anonymement');
define('_WRITEREVIEW','Ecrire un Compte-Rendu');
define('_WRITEREVIEWFOR','Ecire un Compre-Rendu pour');
define('_ENTERINFO','Veuillez entrer les informations correspondantes aux spécifications');
define('_PRODUCTTITLE','Titre du produit');
define('_NAMEPRODUCT','Nom du produit examiné.');
define('_REVIEW','Compte rendu');
define('_CHECKREVIEW','Votre compte rendu actuel. Veuillez respecter une grammaire correcte! Utilisez au moins une centaine de mots, d\'accord? Vous pouvez aussi employer les tags HTML si vous savez comment les utiliser.');
define('_FULLNAMEREQ','Votre Nom complet. Requis.');
define('_REMAIL','Votre Email');
define('_REMAILREQ','Votre adresse e-mail. Requise.');
define('_SELECTSCORE','Ce Score de Produit');
define('_RELATEDLINK','Lien en relation');
define('_PRODUCTSITE','Site Web officiel du produit. Assurez-vous que l\'URL commence par "http://"');
define('_LINKTITLE','Titre du Lien');
define('_LINKTITLEREQ','Requis si vous avez un lien associé, optionnel sinon.');
define('_RIMAGEFILE','Nom du Fichier de l\'Image');
define('_RIMAGEFILEREQ','Nom de l\'image de couverture, localisée dans images/reviews/. Optionnel.');
define('_CHECKINFO','Veuillez vous assurer que l\'information entrée est 100% correcte et respecte la grammaire et la capitalisation. N\'entrez pas votre texte entièrement en majuscule: il sera rejeté.');
define('_INVALIDTITLE','Titre non valide... Ne peut pas être à blanc');
define('_INVALIDSCORE','Score non valide... Doit être compris entre 1 et 10');
define('_INVALIDTEXT','Texte de compte-rendu non valide... Ne peut pas être à blanc');
define('_INVALIDHITS','Le nombre de hits doit être un entier positif');
define('_CHECKNAME','Vous devez entrer ET votre nom, ET votre e-mail');
define('_INVALIDEMAIL','E-mail invalide (ex.: vous@yahoo.com)');
define('_INVALIDLINK','Vous devez entrer à la fois ET le titre du lien, ET l\'URL du lien; ou laisser les 2 champs vides');
define('_ADDED','Ajouté:');
define('_REVIEWER','Critique:');
define('_REVIEWID','ID du Compte-Rendu');
define('_LOOKSRIGHT','Ceci est-il correct ?');
define('_RMODIFIED','modifié');
define('_RADDED','ajouté');
define('_ADMINLOGGED','Connecté en tant qu\'administrateur... Ce compte rendu sera immédiatement');
define('_RTHANKS','Merci pour votre proposition de compte rendu');
define('_MODIFICATION','modification');
define('_ISAVAILABLE','Il est maintenant disponible dans notre banque de données.');
define('_EDITORWILLLOOK','Les éditeurs vont examiner votre compte rendu. Il sera disponible prochainement!');
define('_RBACK','Retour à l\'index des comptes rendus');
define('_RWELCOME','Bienvenue dans la rubrique des comptes rendus');
define('_10MOSTPOP','10 Comptes-Rendus les plus Populaires');
define('_10MOSTREC','10 Comptes-Rendus les plus Récents');
define('_THEREARE','Il y a');
define('_REVIEWSINDB','Comptes-Rendus dans la Base de Données');
define('_REVIEWSLETTER','Comptes-Rendus pour la lettre');
define('_NOREVIEWS','Il n\'y a pas de comptes rendus pour la lettre');
define('_TOTALREVIEWS','Total des Comptes-Rendus trouvés.');
define('_RETURN2MAIN','Retour au menu principal');
define('_REVIEWCOMMENT','Commentaire sur le compte rendu:');
define('_YOURNICK','Votre Pseudonyme:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Créer</a> un compte');
define('_YOURCOMMENT','Votre commentaire:');
define('_MYSCORE','Mon score:');
define('_REVIEWMOD','Modification du compte rendu');
define('_RDATE','Date:');
define('_RTITLE','Titre:');
define('_RTEXT','Texte:');
define('_REVEMAIL','E-mail:');
define('_RLINK','Lien:');
define('_RLINKTITLE','Titre du lien:');
define('_COVERIMAGE','Image de Couverture:');
define('_PREMODS','Prévisualisation de la Modification');
define('_PAGE','Page');
define('NO_GET','Please use our form as no GET requests are allowed');

/**************************
  ADMNINISTRATION SECTION
**************************/

define('_REVADMIN','Reviews Administration');
define('_REVTITLE','Reviews Page Title');
define('_REVDESC','Reviews Page Description');
define('_REVWAITING','Reviews Waiting for Validation');
define('_REVIMGINFO','Store your 150*150 image in images/reviews');
define('_NOREVIEW2ADD','No reviews to add');
define('_ADDREVIEW','Add Review');
define('_CLICK2ADDREVIEW','Click here to write a review');
define('_DELMODREVIEW','Delete / Modify a review');
define('_MODREVINFO','You can simply delete/modify reviews by browsing <a href="'.getlink('Reviews').'">Reviews</a> as Admin.');
