<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/french/downloads.php,v $
  $Revision: 9.9 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:53 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','Le téléchargement demandé n\'existe pas.');
define('_CATEGORIES','catégories');
define('_LVOTES','votes');
define('_TOTALVOTES','Total des votes:');
define('_THEREARE','Il y a');
define('_NOMATCHES','Aucune correspondance trouvée à votre requête');
define('_SCOMMENTS','Commentaires');
define('_UNKNOWN','Inconnus');
define('_AUTHORNAME','Nom de l\'auteur');
define('_AUTHOREMAIL','Email de l\'auteur');
define('_DOWNLOADNAME','Nom du fichier');
define('_ADDTHISFILE','Ajouter ce fichier');
define('_INBYTES','en octets');
//define('_FILESIZE','Taille');
//define('_VERSION','Version');
//define('_AUTHOR','Auteur');
define('_HOMEPAGE','Page d\'accueil');
define('_DOWNLOADNOW','Télécharger ce fichier maintenant !');
define('_RATERESOURCE','Evaluer un fichier');
define('_FILEURL','Lien vers le fichier');
define('_ADDDOWNLOAD','Ajouter un fichier téléchargeable');
define('_DOWNLOADSMAIN','Téléchargement - Page principale');
define('_DOWNLOADCOMMENTS','Téléchargement - Commentaires');
define('_DOWNLOADSMAINCAT','Téléchargement - Catégories principales');
define('_ADDADOWNLOAD','Ajouter un nouveau fichier');
define('_DSUBMITONCE','Veuillez ne soumettre un même fichier qu\'une seule fois.');
define('_DPOSTPENDING','Tous les fichiers sont publiés après vérification.');
define('_RESSORTED','Les fichiers sont actuellement triés par');
define('_DOWNLOADSNOTUSER1','Vous n\'êtes pas un utilisateur enregistré, ou vous ne vous êtes pas connecté.');
define('_DOWNLOADSNOTUSER2','Si vous étiez un utilisateur enregistré, vous pourriez proposer vos fichiers en téléchargement depuis ce site.');
define('_DOWNLOADSNOTUSER3','Devenir un membre enregistré est un processus simple et rapide.');
define('_DOWNLOADSNOTUSER4','Pourquoi l\'enregistrement est-il nécessaire pour accéder à certaines options ?');
define('_DOWNLOADSNOTUSER5','Nous pouvons vous offrir de cette manière un contenu de la plus haute qualité,');
define('_DOWNLOADSNOTUSER6','chaque élément est examiné individuellement et approuvé par notre équipe.');
define('_DOWNLOADSNOTUSER7','Nous espérons vous offrir ainsi uniquement des informations de valeur.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink('Your_Account').'">Ouvrir un compte</a>');
define('_DOWNLOADALREADYEXT','ERREUR: Cet URL est déjà présent dans la base de données!');
define('_DOWNLOADNOTITLE','ERREUR: Vous devez saisir un TITRE pour votre URL!');
define('_DOWNLOADNOURL','ERREUR: Vous devez saisir un URL pour votre URL!');
define('_DOWNLOADNODESC','ERREUR: Vous devez saisir une DESCRIPTION pour votre URL!');
define('_DOWNLOADRECEIVED','Nous avons reçu votre proposition de fichier. Merci !');
define('_NEWDOWNLOADS','Nouveaux fichiers');
define('_TOTALNEWDOWNLOADS','Total des nouveaux fichiers');
define('_DTOTALFORLAST','Total des nouveaux fichiers depuis');
define('_DBESTRATED','Les produits les mieux cotés - Top');
define('_TRATEDDOWNLOADS','fichiers évalués au total');
define('_SORTDOWNLOADSBY','Trier les fichiers par');
define('_DCATNEWTODAY','Nouveaux fichiers dans cette catégorie ajoutés aujourd\'hui');
define('_DCATLAST3DAYS','Nouveaux fichiers dans cette catégorie ajoutés dans les 3 derniers jours');
define('_DCATTHISWEEK','Nouveaux fichiers dans cette catégorie ajoutés cette semaine');
define('_DDATE1','Date (Anciens fichiers affichés en premier)');
define('_DDATE2','Date (Nouveaux fichiers affichés en premier)');
define('_DOWNLOADS','fichiers');
define('_DOWNLOADPROFILE','Téléchargement - Profil');
define('_DOWNLOADRATINGDET','Détails des évaluations');
define('_EDITTHISDOWNLOAD','Editer ce produit');
define('_DOWNLOADRATING','Evaluation des produits');
define('_DOWNLOADVOTE','Votez !');
define('_DONLYREGUSERSMODIFY','Seuls les membres enregistrés peuvent suggérer des modifications sur les fichiers. Veuillez vous <a href="'.getlink("Your_Account").'">connecter ou enregistrer</a>.');
define('_REQUESTDOWNLOADMOD','Requête de modification pour un produit');
define('_DOWNLOADID','ID du produit');
define('_DLETSDECIDE','Les contributions d\'utilisateurs tels que vous aideront d\'autres visiteurs à mieux choisir les fichiers à télécharger.');
define('_DRATENOTE4','Vous pouvez voir une liste des <a href="'.getlink("Downloads&amp;d_op=TopRated").'">produits les mieux cotés</a>.');
define('_POPULAR','Populaires');
define('_TOPRATED','Mieux cotés');
define('_ADDITIONALDET','Détails additionnels');
define('_EDITORREVIEW','Compte-rendu de l\'éditeur');
define('_REPORTBROKEN','Signaler un lien mort');
define('_AND','et');
define('_INDB','dans notre base de donnée');
define('_INSTRUCTIONS','Instructions');
define('_USERANDIP','L\'identifiant utilisateur et le numéro IP sont enregistrés, n\'abusez pas du système svp.');
define('_LDESCRIPTION','Description: (255 caractères max)');
define('_CHECKFORIT','Vous n\'avez pas entré votre adresse Email.  Nous vérifierons cependant votre lien prochainement.');
define('_LASTWEEK','La semaine dernière');
define('_LAST30DAYS','Les 30 derniers jours');
define('_1WEEK','1 semaine');
define('_2WEEKS','2 semaines');
define('_30DAYS','30 jours');
define('_ADDEDON','Ajouté le');
define('_RATING','Evaluation');
define('_DETAILS','Détails');
define('_OF','de');
define('_TVOTESREQ','minimum de votes requis');
define('_SHOWTOP','Montrer le Top');
define('_MOSTPOPULAR','Les plus populaires - Top');
define('_OFALL','de tous les');
define('_POPULARITY','Popularité');
define('_SELECTPAGE','Selectionnez la page');
define('_MAIN','Principal');
define('_NEWTODAY','Nouveau aujourd\'hui');
define('_NEWLAST3DAYS','Nouveau ces 3 derniers jours');
define('_NEWTHISWEEK','Nouveaux cette semaine');
define('_POPULARITY1','Popularité (du plus petit au plus grand nombre de hits)');
define('_POPULARITY2','Popularité (du plus grand au plus petit nombre de hits)');
define('_TITLEAZ','Titre (de A à Z)');
define('_TITLEZA','Title (de Z à A)');
define('_RATING1','Evaluation (du plus petit au plus grand score)');
define('_RATING2','Evaluation (du plus grand au plus petit score)');
define('_SEARCHRESULTS4','Résultats de la recherche pour');
define('_USUBCATEGORIES','Sous-catégories');
define('_TRY2SEARCH','Essayez de rechercher');
define('_INOTHERSENGINES','dans d\'autres moteurs de recherche');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Compte rendu par');
define('_NOEDITORIAL','Il n\'y a pas de compte rendu disponible pour ce site.');
define('_RATETHISSITE','Evaluez ce site Web');
define('_ISTHISYOURSITE','S\'agit-il de votre site Web ? ');
define('_ALLOWTORATE','Autoriser les autres utilisateurs à voter depuis votre site Web !');
define('_OVERALLRATING','Evaluation générale');
define('_TOTALOF','Total de');
define('_USER','Utilisateur');
define('_USERAVGRATING','Moyenne des évaluations de l\'utilisateur');
define('_NUMRATINGS','Nbre d\'évaluations');
define('_REGISTEREDUSERS','Utilisateurs enregistrés');
define('_NUMBEROFRATINGS','Nombre d\'évaluations');
define('_NOREGUSERSVOTES','Pas de votes d\'utilisateurs enregistrés');
define('_BREAKDOWNBYVAL','Découpage des évaluations par valeur');
define('_LTOTALVOTES','vote(s) au total');
define('_HIGHRATING','Cote la plus haute');
define('_LOWRATING','Cote la plus basse');
define('_NUMOFCOMMENTS','Nombre de commentaires');
define('_WEIGHNOTE','* Note: Le poid que donne ce site aux évaluations des utilisateurs enregistrés par rapport à celles des utilisateurs anonymes est de');
define('_NOUNREGUSERSVOTES','Pas de votes d\'utilisateurs non-enregistrés');
define('_WEIGHOUTNOTE','* Note: Le poid que donne ce site aux évaluations des utilisateurs enregistrés par rapport à celles des utilisateurs extérieurs est de');
define('_NOOUTSIDEVOTES','Pas de votes d\'électeurs extérieurs');
define('_OUTSIDEVOTERS','Electeurs extérieurs');
define('_UNREGISTEREDUSERS','Utilisateurs non-enregistrés');
define('_PROMOTEYOURSITE','Faites la promo de votre site Web');
define('_PROMOTE01','Peut-être serez-vous intéressé par une de nos nombreuses options pour \'Evaluer un site\' à distance.  Celles-ci vous permettent de placer une image (ou un formulaire d\'évaluation) sur votre site pour augmenter le nombre de votes que votre site recevra.  Choisissez une des options présentées ci-dessous:');
define('_TEXTLINK','Lien textuel');
define('_PROMOTE02','Un des moyens de mener vers le formulaire d\'évaluation est l\'utilisation d\'un lien textuel:');
define('_HTMLCODE1','Le code HTML à utiliser dans ce cas est::');
define('_THENUMBER','Le nombre');
define('_IDREFER','dans le source HTML référence l\'ID de votre site dans la base de données de $sitename.  Assurez vous que ce nombre est présent.');
define('_BUTTONLINK','Lien \'bouton\'');
define('_PROMOTE03','Si vous cherchez d\'autres solutions qu\'un simple lien textuel, vous choisirez peut-être un lien par bouton:');
define('_RATEIT','Votez pour ce site !');
define('_HTMLCODE2','Le code source pour l\'utilisation du bouton ci-dessus est:');
define('_REMOTEFORM','Formulaire d\'évaluation à distance');
define('_PROMOTE04','Si vous tentez de tricher ici, nous enleverons votre lien. Ceci étant dit, voici à quoi ressemble le formulaire d\'évaluation à distance.');
define('_VOTE4THISSITE','Votez pour ce site !');
define('_HTMLCODE3','L\'utilisation de ce formulaire autorise vos visiteurs à voter pour votre site directement depuis vos pages Web, et l\'évaluation sera enregistrée ici.  Le formulaire ci-dessus est inactif, mais le code source suivant fonctionnera si vous le copiez et le collez sur une de vos pages Web.  Voici le code source:');
define('_PROMOTE05','Merci !  Et bonne chance pour l\'évaluation de votre site !');
define('_THANKSBROKEN','Merci de votre aide pour maintenir l\'intégrité de ce répertoire.');
define('_SECURITYBROKEN','Pour des raisons de sécurité, votre nom d\'utilisateur et votre numéro IP seront temporairement enregistrés.');
define('_THANKSFORINFO','Merci pour cette information.');
define('_LOOKTOREQUEST','Nous examinerons votre requête rapidement.');
define('_SENDREQUEST','Envoyer votre requête');
define('_THANKSTOTAKETIME','Merci de prendre le temps d\'évaluer les sites sur');
define('_RETURNTO','Retour à');
define('_RATENOTE1','Ne votez pas pour le même site plus d\'une fois SVP.');
define('_RATENOTE2','L\'échelle est de 1 à 10, 1 étant <I> faible </I> et 10 <I> excellent </I>.');
define('_RATENOTE3','Soyez objectif dans votre vote, si chacun reçoit un 1 ou un 10, le système d\'évaluation n\'est plus très utile.');
define('_RATENOTE5','Ne votez pas pour votre propre site ou le site d\'un concurrent.');
define('_YOUAREREGGED','Vous êtes un utilisateur enregistré et vous êtes connecté.');
define('_FEELFREE2ADD','Votre commentaire à propos de ce site est le bienvenu.');
define('_YOUARENOTREGGED','Vous n\'êtes pas un utilisateur enregistré, ou vous ne vous êtes pas connecté.');
define('_IFYOUWEREREG','Si vous étiez enregistré, vous pourriez commenter ce site.');
define('_MODIFY','Modifier');
define('_COMPLETEVOTE1','Votre vote est enregistré.');
define('_COMPLETEVOTE2','Vous avez déjà  voté pour cette ressource dans le passé $anonwaitdays jour(s).');
define('_COMPLETEVOTE3','Votez pour une ressource seulement une fois<br />Tous les votes sont loggés');
define('_COMPLETEVOTE4','Vous ne pouvez pas voter sur un lien que vous avez proposez.<br />Tous les votes sont loggés');
define('_COMPLETEVOTE5','Aucune note n\'a été choisie - Le vote n\'a pas été pri en compte');
define('_COMPLETEVOTE6','Seul un vote par adresse IP est autorisé tous les $outsidewaitdays jour(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transferer tous els téléchargements vers une catégorie');
define('_DELEZDOWNLOADSCATWARNING','Attentetion, Etes-vous certain de vouloir supprimer cette catégorie, Toutes les sous catégories et leurs fichiers seront égalements supprimés!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Supprimer la catégorie');
define('_DOWNLOADTITLE','Titre du Téléchargement');
define('_DOWNLOADSINDB','Téléchargements dans notre base de données');
define('_DOWNLOADSWAITINGVAL','Téléchargements en attente de validation');
define('_CLEANDOWNLOADSDB','Nettoyer les votes des téléchargements');
define('_BROKENDOWNLOADSREP','Téléchargements morts');
define('_DOWNLOADMODREQUEST','Modifications');
define('_ADDNEWDOWNLOAD','Ajouter un fichier');
define('_MODDOWNLOAD','Modifier un fichier');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','Aucun lien mort n\'a été repporté');
define('_DUSERREPBROKEN','L\'Utilisateur A rapporté Des liens morts');
define('_DIGNOREINFO','Ignorer (Supprime toutes <b><i>demandes</i></b> pour un téléchargement donné)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Auteur');
define('_DUSERMODREQUEST','Requêtes les modifications des utilisateurs');
define('_DOWNLOADVALIDATION','Télécharger la validation');
define('_CHECKALLDOWNLOADS','Vérifier tous les téléchargements');
define('_VALIDATEDOWNLOADS','Valider les téléchargements');
define('_NEWDOWNLOADADDED','Nouveaufichier crrectement ajouté à la base de données');
