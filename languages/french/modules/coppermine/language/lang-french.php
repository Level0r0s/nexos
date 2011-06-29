<?
/****************************************************************************/
/* Coppermine Photo Gallery 1.2.3 for CMS                                   */
/****************************************************************************/
/****************************************************************************/
/* Port Copyright (C) 2004 Coppermine for CMS Dev Team  		    */
/* http://coppermine.findhere.org/                                          */
/****************************************************************************/
/* Updated by the Coppermine Dev Team  2003                                 */
/* (http://coppermine.sf.net/team/)                                         */
/* see /docs/credits.html for details                                       */
// ------------------------------------------------------------------------ //
// Traduction compl�t�e  - Juin 2004                                        //
// Patrick  A.   -->  dyno@ifrance.com                                      //
// ------------------------------------------------------------------------ //
/****************************************************************************/
/* Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               */
/* http://www.chezgreg.net/coppermine/                                      */
/* This program is free software; you can redistribute it and/or modify     */
/* it under the terms of the GNU General Public License as published by     */
/* the Free Software Foundation; either version 2 of the License, or        */
/* (at your option) any later version.                                      */
/****************************************************************************/
/*   $Id: lang-french.php,v 1.1 2004/07/27 20:33:52 akamu Exp $            */
/****************************************************************************/
// info about translators and translated language
define('LANG_NAME_ENGLISH', 'French');
define('LANG_NAME_NATIVE', 'Fran�ais');
define('LANG_COUNTRY_CODE', 'fr');
define('TRANS_NAME', 'mels');
define('TRANS_EMAIL', 'mels@wanadoo.fr');
define('TRANS_WEBSITE', 'http://www.everlasting-star.net/');
define('TRANS_DATE', '2003-10-15');

// charset this should be utf-8 or the same as nuke uses for this language
define('CHARSET', 'ISO-8859-1');

// ltr or rtl
define('TEXT_DIR', 'ltr');

// left is for port compliancy
define('YES', 'Oui');
define('NO', 'Non');

// some common strings
define('BACK', 'Retour');
define('CONTINUE', 'CONTINUER');
define('INFO', 'Information');
define('ERROR', 'Erreur');

//// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
define('ALBUM_DATE_FMT', '%B %d, %Y');
define('LASTCOM_DATE_FMT', '%m/%d/%y à %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y à %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y à %I:%M %p');

// short names for Byte, Kilo, Mega
$lang_byte_units = array('Octets','Ko','Mo',);

// lang_meta_album_names
define('RANDOM', 'Images au hasard');
define('LASTUP', 'Derniers ajouts');
define('LASTUPBY', 'Mes derniers Ajouts');
define('LASTALB', 'Derniers albums mis en ligne');
define('LASTCOM', 'Derniers commentaires');
define('LASTCOMBY', 'Mes Derniers commentaires');
define('TOPN', 'Les plus populaires');
define('TOPRATED', 'Les mieux not�es');
define('LASTHITS', 'Les derni�res vues');
define('SEARCH', 'R�sultats de la recherche');
define('FAVPICS', 'Photos pr�f�r�es');

// lang_errors
define('ACCESS_DENIED', 'Vous n\'avez pas la permission d\'acc�der � cette page.');
define('PERM_DENIED', 'Vous n\'avez pas la permission d\'effectuer cette op�ration.');
define('PARAM_MISSING', 'Script appel� sans les param�tres n�cessaires.');
define('NON_EXIST_AP', 'L\'album/la photo demand�(e) n\'existe pas !');
define('QUOTA_EXCEEDED', 'Espace disque d�pass�<br /><br />Vous avez un quota d\'espace de [quota]K, vos photos utilisent [space]K, le fait d\'ajouter cette photo vous ferait d�passer votre quota.');
define('GD_FILE_TYPE_ERR', 'L\'utilisation de \"GD image library\" ne vous permet d\'utiliser que de images de type JPEG et PNG.');
define('INVALID_IMAGE', 'L\'image que vous avez upload�e est corrompue ou ne peut pas �tre prise en charge par GD library');
define('RESIZE_FAILED', 'Impossible de cr�er l\'vignette ou l\'image r�duite.');
define('NO_IMG_TO_DISPLAY', 'Pas d\'image � afficher');
define('NON_EXIST_CAT', 'La cat�gorie s�lectionn�e n\'existe pas');
define('ORPHAN_CAT', 'Une cat�gorie a un parent inexistant, utilisez le gestionnaire de cat�gories afin de rem�dier au probl�me.');
define('DIRECTORY_RO', 'Le r�peretoire \'%s\' n\'est pas inscriptible : les images ne peuvent �tre supprim�es.');
define('NON_EXIST_COMMENT', 'Le commentaire s�lectionn� n\'existe pas.');
define('PIC_IN_INVALID_ALBUM', 'L\'image se trouve dans un album qui n\'existe pas (%s)!?');
define('BANNED', 'Vous �tes pour l\'instant banni de ce site.');
define('NOT_WITH_UDB', 'Cette fonction est d�sactiv�e dans Coppermine parce que la gallerie est int�gr�e � un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer � partir du forum auquel vous avez int�gr� la galerie.');
define('MEMBERS_ONLY', 'Cette fonction est r�serv�e aux membres, inscrivez vous.');
define('MUSTBE_GOD', 'Cette fonction est r�serv�e � l\'administrateur. Vous devez �tre loggu� en tant qu\'adminpour utiliser cette fonction');

// lang_main_menu
define('ALB_LIST_TITLE', 'Aller � la liste des albums');
define('ALB_LIST_LNK', 'Liste des albums');
define('MY_GAL_TITLE', 'Aller dans ma galerie personnelle');
define('MY_GAL_LNK', 'Ma galerie');
define('MY_PROF_LNK', 'Mon profil');
define('MY_PROF_TITLE','V�rifier le quota de votre disque et vos groupes');
define('ADM_MODE_TITLE', 'Passer en mode admin');
define('ADM_MODE_LNK', 'Mode admin');
define('USR_MODE_TITLE', 'Passer en mode utilisateur');
define('USR_MODE_LNK', 'Mode utilisateur');
define('UPLOAD_PIC_TITLE', 'Envoyer une image dans un album');
define('UPLOAD_PIC_LNK', 'Envoyer une image');
define('REGISTER_TITLE', 'Cr�er un compte');
define('REGISTER_LNK', 'Inscription');
define('LOGIN_LNK', 'S\'identifier');
define('LOGOUT_LNK', 'Quitter');
define('LASTUP_LNK', 'Derniers ajouts');
define('LASTUP_TITLE', 'Images r�cemment t�l�charg�es');
define('LASTCOM_TITLE',  'Images dans l\'ordre des dernier commentaires');
define('LASTCOM_LNK',  'Derniers commentaires');
define('TOPN_TITLE', 'Images les plus vues');
define('TOPN_LNK', 'Images les plus populaires');
define('TOPRATED_TITLE', 'Images ayant �t� not�es le plus de fois');
define('TOPRATED_LNK',  'Images les mieux not�es');
define('SEARCH_LNK', 'Rechercher');
define('FAV_LNK', 'Mes favoris');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Fichiers en attente');
define('CONFIG_LNK', 'Configuration');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Cat�gories');
define('USERS_LNK', 'Utilisateurs');
define('GROUPS_LNK', 'Groupes');
define('COMMENTS_LNK', 'Commentaires');
define('SEARCHNEW_LNK', 'FTP =>');
define('UTIL_LNK', 'Redimensionner les images');
define('BAN_LNK', 'Bannir des utilisateurs');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Cr�er / classer mes albums');
define('MODIFYALB_LNK', 'Modifier mes albums');
define('MY_PROF_LNK', 'Mon profil');

// lang_cat_list
define('CATEGORY', 'Cat�gorie');
define('ALBUMS', 'Albums');
define('PICTURES', 'Images');

// lang_album_list
define('ALBUM_ON_PAGE', '%d albums sur %d page(s)');

// lang_thumb_view
define('DATE', 'DATE');
define('NAME', 'NOM DU FICHIER');
define('TITLE', 'TITRE');
define('SORT_DA', 'Classer par date ascendantes');
define('SORT_DD', 'Classer par date descendantes');
define('SORT_NA', 'Classer par nom ascendants');
define('SORT_ND', 'Classer par nom descendants');
define('SORT_TA', 'Classer par titre ascendants');
define('SORT_TD', 'Classer par titre descendants');
define('PIC_ON_PAGE', '%d photos sur %d page(s)');
define('USER_ON_PAGE', '%d utilisateurs sur %d page(s)');
define('SORT_RA', 'Classer par �valuation ascendante');
define('SORT_RD', 'Classer par �valuation descendants');
define('RATING', 'Evaluation');
define('SORT_TITLE', 'Classer les images par:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retourner � la page des vignettes');
define('PIC_INFO_TITLE', 'Afficher / cacher les informations sur l\'image');
define('SLIDESHOW_TITLE', 'Diaporama');
define('SLIDESHOW_DISABLED', 'les e-cartes sont desactiv�es');
define('SLIDESHOW_DISABLED_MSG', 'Cette fonction est r�serv�e aux membres. Inscrivez vous.');
define('ECARD_TITLE', 'Envoyer cette image en tant que carte �lectronique');
define('ECARD_DISABLED', 'les cartes �lectroniques sont d�sactiv�es');
define('ECARD_DISABLED_MSG', 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes');
define('PREV_TITLE', 'Voir l\'image pr�c�dente');
define('NEXT_TITLE', 'Voir l\'image suivante');
define('PIC_POS', 'PHOTO %s/%s');
define('NO_MORE_IMAGES', 'Il n\'y a pas plus d\'images dans cette galerie');
define('NO_LESS_IMAGES', 'C\'est la premi�re image dans la galerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Noter cette image ');
define('NO_VOTES', '(Pas encore de vote)');
define('RATING', '(note actuelle : %s / 5 pour %s votes)');
define('RUBBISH', 'Tr�s mauvais');
define('POOR', 'Pauvre');
define('FAIR', 'Moyen');
define('GOOD', 'Bon');
define('EXCELLENT', 'Excellent');
define('GREAT', 'Superbe');

// lang_cpg_die
define('INFORMATION', 'Information');
define('ERROR', 'Erreur');
define('CRITICAL_ERROR', 'Erreur Critique');
define('FILE', 'Fichier: ');
define('LINE', 'Ligne: ');

// lang_display_thumbnails
define('FILENAME', 'Nom du fichier : ');
define('FILESIZE', 'Poids du fichier : ');
define('DIMENSIONS', 'Dimensions : ');
define('DATE_ADDED', 'Ajout� le : ');

// lang_get_pic_data
define('N_COMMENTS', '%s commentaires');
define('N_VIEWS', '%s t�l�chargements');
define('N_VOTES', '(%s votes)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamation');
define('QUESTION', 'Question');
define('VERY HAPPY', 'Tr�s heureux');
define('SMILE', 'Sourire');
define('SAD', 'Triste');
define('SURPRISED', 'Surpris');
define('SHOCKED', 'Choqu�');
define('CONFUSED', 'Confus');
define('COOL', 'Cool');
define('LAUGHING', 'Rire');
define('MAD', 'Fou');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarass�');
define('CRYING OR VERY SAD', 'Pleure ou tr�s triste');
define('EVIL OR VERY MAD', 'Diabolique ou tr�s en col�re');
define('TWISTED EVIL', 'Sadique');
define('ROLLING EYES', 'L�ve les yeux au ciel');
define('WINK', 'Clin d\'oeil');
define('IDEA', 'Id�e');
define('ARROW', 'Fl�che');
define('NEUTRAL', 'Neutre');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'D�connexion du mode administrateur...');
define('ENT_ADMIN', 'Passage au mode administrateur...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Les albums doivent avoir un nom !');
define('CONFIRM_MODIFS', 'Voulez-vous vraiment effectuer ces modifications ?');
define('NO_CHANGE', 'Vous n\'avez effectu� aucun changement !');
define('NEW_ALBUM', 'Nouvel album');
define('CONFIRM_DELETE1', 'Voulez vous vraiment supprimer cet album ?');
define('CONFIRM_DELETE2', '\\Toutes les images et tous les commentaires seront perdus !');
define('SELECT_FIRST', 'Selectionnez d\'abord un album');
define('ALB_MRG', 'Gestionnaire d\'album');
define('MY_GALLERY', '* Ma galerie *');
define('NO_CATEGORY', '* Pas de cat�gorie *');
define('DELETE', 'Supprimer');
define('NEW', 'Nouveau');
define('APPLY_MODIFS', 'Appliquer les modifications');
define('SELECT_CATEGORY', 'S�lectionner une categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Les param�tres requis pour l\'\'%s\'operation sont manquants !');
define('UNKNOWN_CAT', 'La cat�gorie s�lectionn�e n\'existe pas dans la base de donn�es');
define('USERGAL_CAT_RO', 'La galerie des utilisateurs ne peut pas �tre supprim�e!');
define('MANAGE_CAT', 'G�rer les cat�gories');
define('CONFIRM_DELETE', 'Voulez vous vraiment SUPPRIMER cette cat�gorie ?');
define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Op�rations');
define('MOVE_INTO', 'D�placer dans');
define('UPDATE_CREATE', 'Mettre � jour / cr�er la cat�gorie');
define('PARENT_CAT', 'Cat�gorie parente');
define('CAT_TITLE', 'Titre de la cat�gorie');
define('CAT_DESC', 'Description de la cat�gorie');

// lang_config_php
define('TITLE', 'Configuration');
define('RESTORE_CFG', 'Restorer les param�tres d\'origine');
define('SAVE_CFG', 'Sauvergarder la nouvelle configuration');
define('NOTES', 'Notes');
define('INFO', 'Information');
define('UPD_SUCCESS', 'La configuration de Coppermine a �t� mise � jour');
define('RESTORE_SUCCESS', 'La configuration d\'origine de Coppermine a �t� restaur�e');
define('NAME_A', 'Nom ascendant');
define('NAME_D', 'Nom descendant');
define('TITLE_A', 'Titre ascendand');
define('TITLE_D', 'Titre descendant');
define('DATE_A', 'Date ascendante');
define('DATE_D', 'Date descendante');
define('RATING_A', '�valuation ascendante');
define('RATING_D', '�valuation descendante');
define('TH_ANY', 'Taille Maximum');
define('TH_HT', 'Hauteur');
define('TH_WD', 'Largeur');

// lang_config_data
define('CONFIG_GENSET', 'Param�tres g�n�raux');
define('GALLERY_NAME', 'Nom de la galerie');
define('GALLERY_DESCRIPTION', 'Description de la galerie');
define('GALLERY_ADMIN_EMAIL', 'Email de l\'administrateur de la galerie');
define('ECARDS_MORE_PIC_TARGET', 'Adresse sur laquelle le lien \'Voir plus de photos\' des e-cards doit pointer');
define('LANG', 'Langage');
define('CPGTHEME', 'Th�me');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Affichage de la liste des albums');
define('MAIN_TABLE_WIDTH', 'Largeur du tableau principal (pixels ou %)');
define('SUBCAT_LEVEL', 'Nombre de niveaux de cat�gories � afficher');
define('ALBUMS_PER_PAGE', 'Nombre d\'albums � afficher');
define('ALBUM_LIST_COLS', 'Nombre de colonnes pour la liste des albums');
define('ALB_LIST_THUMB_SIZE', 'Taille des vignettes en pixels');
define('MAIN_PAGE_LAYOUT', 'Le contenu de la page principale');
define('FIRST_LEVEL', 'Afficher les vignettes de l\'album du premier niveau avec la cat�gorie');
define('THUMB_VIEW_TITLE', 'Affichage des vignettes');
define('THUMBCOLS', 'Nombre de colonnes sur la page des vignettes');
define('THUMBROWS', 'Nombre de lignes sur la page des vignettes');
define('MAX_TABS', 'Nombre maximal d\'onglets �afficher');
define('CAPTION_IN_THUMBVIEW', 'Afficher la l�gende de l\'image (en plus de son titre) sous la vignette');
define('DISPLAY_COMMENT_COUNT', 'Afficher le nombre de commentaires sous les vignettes');
define('DEFAULT_SORT_ORDER', 'Classement par d�faut des images');
define('MIN_VOTES_FOR_RATING', 'Nombre minimum de votes n�cessaires pour qu\'une image apparaisse dans la liste des images les mieux not�es');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Affichage des images &amp; param�tres des commentaires');
define('PICTURE_TABLE_WIDTH', 'Largeur du tableau pour l\'affichage des images (pixels ou %)');
define('DISPLAY_PIC_INFO', 'Les informations relatives � l\'image sont affich�es par d�faut');
define('FILTER_BAD_WORDS', 'Filtrer les gros mots dans les commentaires');
define('ENABLE_SMILIES', 'Autoriser les smileys dans les commentaires');
define('DISABLE_FLOOD_PROTECTION', 'Permettre plusieurs commentaires cons�cutifs sur une image par le m�me utilisateur');
define('COMMENT_EMAIL_NOTIFICATION', 'Envoyer un Email � l\'administrateur avant de soumettre un commentaire');
define('MAX_IMG_DESC_LENGTH', 'Longueur maximale pour la description des images');
define('MAX_COM_WLENGTH', 'Nombre maximal de lettres pour un mot');
define('MAX_COM_LINES', 'Nombre maximal de lignes pour un commentaire');
define('MAX_COM_SIZE', 'Longueur maximale d\'un commentaire');
define('DISPLAY_FILM_STRIP', 'Afficher le n�gatif');
define('MAX_FILM_STRIP_ITEMS', 'Nombre d\'images par n�gatif');
define('ALLOW_ANON_FULLSIZE', 'Autoriser les anonymes � voir les images en grand');
define('KEEP_VOTES_TIME', 'Nombre de jours avant de pouvoir voter pour la m�me image');
define('PIC_THUMB_SETTING_TITLE', 'Param�tres des images et vignettes');
define('JPEG_QUAL', 'Qualit� pour les fichiers JPG');
define('THUMB_WIDTH', 'Dimension maximale pour les vignettes <b>*</b>');
define('THUMB_USE', 'Utiliser la dimension ( largeur ou hauteur ou aspect max pour la vignette)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Cr�er des images interm�diaires');
define('PICTURE_WIDTH', 'Largeur ou hauteur maximale pour une image interm�diaire <b>*</b>');
define('MAX_UPL_SIZE', 'Poids max des images � uploader (Ko)');
define('MAX_UPL_WIDTH_HEIGHT', 'Longueur ou hauteur maximale pour les images upload�es (en pixels)');
define('USER_SETTING_TITLE', 'Param�tres Utilisateurs');
define('ALLOW_USER_REGISTRATION', 'Autoriser de nouvelles inscriptions');
define('REG_REQUIRES_VALID_EMAIL', 'L\'inscription d\'un nouvel utilisateur doit �tre valid�e');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Autoriser deux utilisateurs � avoir le m�me e-mail');
define('ALLOW_PRIVATE_ALBUMS', 'Les utilisateurs peuvent avoir un album personnel');
define('CUSTOM_FIELDS_TITLE', 'Champs libres pour les descriptions d\'images (� laisser tel quel si vous n\'utilisez pas cette fonction)');
define('USER_FIELD1_NAME', 'Nom du champ 1');
define('USER_FIELD2_NAME', 'Nom du champ 2');
define('USER_FIELD3_NAME', 'Nom du champ 3');
define('USER_FIELD4_NAME', 'Nom du champ 4');
define('PIC_ADV_SETTING_TITLE', 'Param�tres avanc�s des images et vignettes');
define('SHOW_PRIVATE', 'Afficher l\'ic�ne des albums priv�s aux utilisateurs non indentifi�s');
define('FORBIDEN_FNAME_CHAR', 'Carat�res interdits dans les noms de fichiers');
define('ALLOWED_FILE_EXTENSIONS', 'Extensions de fichiers accept�es pour les images � uploader');
define('THUMB_METHOD', 'M�thode utilis�e pour redimensionner les images');
define('IMPATH', 'Chemin vers l\'utilitaire de conversion ImageMagick (exemple : /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Type d\'images autoris�es (valide seulement pour ImageMagick)');
define('IM_OPTIONS', 'Options de ligne de commande pour ImageMagick');
define('READ_EXIF_DATA', 'Lire les informations EXIF dans les fichiers JPEG');
define('READ_IPTC_DATA', 'Lire les informations IPTC dans les fichiers JPEG');
define('FULLPATH', 'R�pertoire de stockage de l\'album <b>*</b>');
define('USERPICS', 'R�pertoire pour les images des utilisateurs <b>*</b>');
define('NORMAL_PFX', 'Pr�fixe des images interm�diares <b>*</b>');
define('THUMB_PFX', 'Pr�fixe pour les vignettes <b>*</b>');
define('DEFAULT_DIR_MODE', 'Mode par d�faut des r�pertoires');
define('DEFAULT_FILE_MODE', 'Mode par d�faut des images');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; param�tres d\'encodage des caract�res');
define('COOKIE_NAME', 'Nom du cookie utilis� par le script');
define('COOKIE_PATH', 'Chemin du cookie utilis� par le script');
define('CHAR_SET', 'Encodage des caract�res');
define('MISC_SETTING_TITLE', 'Divers');
define('DEBUG_MODE', 'Activer le mode debug');
define('ADVANCED_DEBUG_MODE', 'Activer le mode debug avanc�');
define('SHOWUPDATE', 'Avertir l\'administrateur des mise � jour de Coppermine');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Les champs marqu�s d\'un * ne doivent pas �tre modifi�s si des images existent d�j� !</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vous devez taper votre nom et un commentaire');
define('COM_ADDED', 'Commentaire ajout�');
define('ALB_NEED_TITLE', 'Vous devez donner un titre � l\'album !');
define('NO_UDP_NEEDED', 'Aucune mise � jour n\'est n�cessaire.');
define('ALB_UPDATED', 'Album mis � jour');
define('UNKNOWN_ALBUM', 'L\'album s�lectionn� n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album');
define('NO_PIC_UPLOADED', 'Aucune image n\'a �t� upload�e !<br /><br />Si vous avez vraiment s�lectionn� une image � uploader, v�rifier que le serveur autorise l\'upload de fichiers...');
define('ERR_MKDIR', 'Impossible de cr�er le r�pertoire %s !');
define('DEST_DIR_RO', 'Le r�pertoire de destination (%s) ne dispose pas des droits d\'�criture n�cessaires pour le script!');
define('ERR_MOVE', 'Impossible de d�placer %s vers %s !');
define('ERR_FSIZE_TOO_LARGE', 'La taille de l\'image que vous avez upload� est trop grande (le maximum autoris� est de %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Le poids du fichier que vous avez upload� est trop important (le maximum autoris� est de %s Ko) !');
define('ERR_INVALID_IMG', 'Le fichier que vous avez upload� n\'est pas une image valide!');
define('ALLOWED_IMG_TYPES', 'Vous ne pouvez uploader que %s images.');
define('ERR_INSERT_PIC', 'Les images \'%s\' ne peuvent pas �tre ins�r�es dans l\'album ');
define('UPLOAD_SUCCESS', 'Votre image a �t� correctement upload�e<br /><br />Elle sera visible apr�s validation de l\'administrateur.');
define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Votre commentaire est vide!');
define('ERR_INVALID_FEXT', 'Seuls les fichiers avec les extensions suivantes sont autoris�s : <br /><br />%s.');
define('NO_FLOOD', 'Nous sommes d�sol�s, mais vous �tes d�j� l\'auteur du dernier commentaire post� au sujet de cette image.<br /><br />Vous pouvez tout simplement �diter votre message pr�c�dent si vous souhaitez le modifier ou bien ajouter des informations.');
define('REDIRECT_MSG', 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement');
define('UPL_SUCCESS', 'Votre image a �t� correctement ajout�e');

// lang_delete_php
define('CAPTION', 'L�gende');
define('FS_PIC', 'image en taille r�elle');
define('DEL_SUCCESS', 'suppression r�ussie');
define('NS_PIC', 'image en taille normale');
define('ERR_DEL', 'ne peut pas �tre supprim�');
define('THUMB_PIC', 'vignette');
define('COMMENT', 'commentaire');
define('IM_IN_ALB', 'image dans l\'album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' supprim�s');
define('ALB_MGR', 'Gestionnaire d\'album');
define('ERR_INVALID_DATA', 'Donn�es non valides re�ues dans \'%s\'');
define('CREATE_ALB', 'Cr�ation de l\'album \'%s\'');
define('UPDATE_ALB', 'Mise � jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'');
define('DEL_PIC', 'Supprimer l\'image');
define('DEL_ALB', 'Supprimer l\'album');
define('DEL_USER', 'Supprimer l\'utilisateur');
define('ERR_UNKNOWN_USER', 'L\'utilisateur s�lectionn� n\'existe pas !');
define('COMMENT_DELETED', 'Le commentaire a �t� supprim� avec succ�s');

// lang_display_image_php
define('CONFIRM_DEL', 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront �galement supprim�s.');
define('DEL_PIC', 'SUPPRIMER CETTE IMAGE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s fois');
define('SLIDESHOW', 'Diaporama');
define('STOP_SLIDESHOW', 'ARRETER LE DIAPORAMA');
define('VIEW_FS', 'Cliquez pour voir l\'image en taille r�elle');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informations sur l\'image');
define('FILENAME', 'Nom du fichier');
define('ALBUM NAME', 'Nom de l\'album');
define('RATING', 'Note (%s votes)');
define('KEYWORDS', 'Mots clefs');
define('FILE SIZE', 'Taille du fichier');
define('DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Affich�es');
define('CAMERA', 'Appareil photos');
define('DATE TAKEN', 'Date de la prise de vue');
define('APERTURE', 'Ouverture');
define('EXPOSURE TIME', 'Temps d\'exposition');
define('FOCAL LENGTH', 'Focale');
define('COMMENT', 'Commentaires');
define('ADDFAV', 'Ajouter aux favoris');
define('ADDFAVPHRASE', 'Favoris');
define('REMFAV', 'Supprimer des favoris');
define('IPTCTITLE', 'IPTC Title');
define('IPTCCOPYRIGHT', 'IPTC Copyright');
define('IPTCKEYWORDS', 'IPTC Keywords');
define('IPTCCATEGORY', 'IPTC Category');
define('IPTCSUBCATEGORIES', 'IPTC Sub Categories');
define('BOOKMARK_PAGE', 'Bookmark Image');

// lang_display_comments
define('OK', 'OK');
define('EDIT_TITLE', 'Modifier ce commentaire');
define('CONFIRM_DELETE', 'Voulez vous vraiment supprimer ce commentaire?');
define('ADD_YOUR_COMMENT', 'Ajoutez votre commentaire');
define('NAME', 'Nom');
define('COMMENT', 'Commentaire');
define('YOUR_NAME', 'Anonyme');

// lang_fullsize_popup
define('CLICK_TO_CLOSE', 'Cliquez sur l\'image pour fermer la fenêtre');

// lang_ecard_php
define('TITLE', 'Envoyer en tant que e-card');
define('INVALID_EMAIL', '<b>Attention</b> : cette adresse e-mail n\'est pas valide !');
define('ECARD_TITLE', 'Une e-card pour vous, de la part de %s');
define('VIEW_ECARD', 'Si votre e-card ne s\'affiche pas correctement, cliquez ici');
define('VIEW_MORE_PICS', 'Suivez ce lien pour d�couvrir davantage de photos !');
define('SEND_SUCCESS', 'Votre ecard a �t� envoy�e');
define('SEND_FAILED', 'Nous sommes d�sol�s, mais le serveur n\'a pu envoyer votre e-card...');
define('FROM', 'De la part de');
define('YOUR_NAME', 'Votre nom');
define('YOUR_EMAIL', 'Votre adresse e-mail');
define('TO', 'A');
define('RCPT_NAME', 'Nom du destinataire');
define('RCPT_EMAIL', 'Adresse e-mail du destinataire');
define('GREETINGS', 'Introduction');
define('MESSAGE', 'Message');

// lang_editpics_php
define('PIC_INFO', 'Informations sur l\'image');
define('ALBUM', 'Album');
define('TITLE', 'Titre');
define('DESC', 'Description');
define('KEYWORDS', 'Mots clefs');
define('PIC_INFO_STR', '%sx%s - %sKo - %s affichages - %s votes');
define('APPROVE', 'Approuver');
define('POSTPONE_APP', 'Approuver plus tard');
define('DEL_PIC', 'Supprimer l\'image');
define('READ_EXIF', 'Read EXIF info again');
define('RESET_VIEW_COUNT', 'Remettre le compteur des t�l�chargements � z�ro');
define('RESET_VOTES', 'Remettre le compteur de votes � z�ro');
define('DEL_COMM', 'Supprimer les commentaires');
define('UPL_APPROVAL', 'Autorisation d\'upload');
define('EDIT_PICS', 'Modifier les images');
define('SEE_NEXT', 'Voir les images suivantes');
define('SEE_PREV', 'Voir les images pr�c�dentes');
define('N_PIC', '%s images');
define('N_OF_PIC_TO_DISP', 'Num�ro de l\'image � afficher');
define('APPLY', 'Appliquer les modifications');

// lang_groupmgr_php
define('GROUP_NAME', 'Nom du groupe');
define('DISK_QUOTA', 'Quota disque');
define('CAN_RATE', 'Peut noter les images');
define('CAN_SEND_ECARDS', 'Peut envoyer des ecards');
define('CAN_POST_COM', 'Peut �crire des commentaires');
define('CAN_UPLOAD', 'Peut mettre des photos en ligne');
define('CAN_HAVE_GALLERY', 'Peut avoir une galerie perso');
define('APPLY', 'Appliquer les modifications');
define('CREATE_NEW_GROUP', 'Cr�er un nouveau groupe');
define('DEL_GROUPS', 'Supprimer le(s) groupe(s) s�lectionn�(s)');
define('CONFIRM_DEL', 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transf�r�s dans le groupe d\'utilisateurs \'Enregistr�\'!\\n\\nSouhaitez-vous continuer?');
define('TITLE', 'G�rer les groupes d\'utilisateurs');
define('APPROVAL_1', 'Autorisation d\'upload pub. (1)');
define('APPROVAL_2', 'Autorisation d\'upload priv. (2)');
define('NOTE1', '<b>(1)</b> Les uploads dans un album public doivent être approuv�s par un administrateur');
define('NOTE2', '<b>(2)</b> Les uploads dans un album qui appartient � l\'utilisateur doivent être approuv�s par un admin');
define('NOTES', 'Remarques');

// lang_index_php
define('WELCOME', 'Bienvenue !');

// lang_album_admin_menu
define('CONFIRM_DELETE', 'Voulez-vous VRAIMENT supprimer cet album ? \\nToutes les photos et tous les commentaires seront perdus.');
define('DELETE', 'SUPPRIMER');
define('MODIFY', 'PROPRIETES');
define('EDIT_PICS', 'MODIFIER LES PHOTOS');

// lang_list_categories
define('HOME', 'Accueil');
define('STAT1', '<b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> cat�gories avec <b>[comments]</b> commentaires affich�es <b>[views]</b> fois');
define('STAT2', '<b>[pictures]</b> photos dans <b>[albums]</b> albums affich�es <b>[views]</b> times');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affich�es <b>[views]</b> fois');

// lang_list_users
define('USER_LIST', 'Liste d\'utilisateurs');
define('NO_USER_GAL', 'Il n\'y a pas de nouvelle galerie d\'utilisateurs');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s photo(s)');

// lang_list_albums
define('N_PICTURES', '%s photos');
define('LAST_ADDED', ', la derni�re a �t� ajout�e le %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Mettre � jour l\'album %s');
define('GENERAL_SETTINGS', 'Param�tres g�n�raux');
define('ALB_TITLE', 'Titre de l\'album');
define('ALB_CAT', 'Cat�gorie de l\'album');
define('ALB_DESC', 'Description de l\'album');
define('ALB_THUMB', 'vignette de l\'album');
define('ALB_PERM', 'Permissions pour cet album');
define('CAN_VIEW', 'Cet album peut être consult� par');
define('CAN_UPLOAD', 'Les visiteurs peuvent mettre des photos en ligne');
define('CAN_POST_COMMENTS', 'Les visiteurs peuvent poster des commentaires');
define('CAN_RATE', 'Les visiteurs peuvent noter les photos');
define('USER_GAL', 'Galerie de l\'utilisateur');
define('NO_CAT', '* Pas de cat�gorie *');
define('ALB_EMPTY', 'L\'album est vide');
define('LAST_UPLOADED', 'Dernier upload');
define('PUBLIC_ALB', 'Tout le monde (album public)');
define('ME_ONLY', 'Moi seulement');
define('OWNER_ONLY', 'Le propri�taire de l\'album (%s) seulement');
define('GROUPP_ONLY', 'Membres du groupe \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Il n\'y a pas d\'album modifiable dans la base.');
define('UPDATE', 'Mettre l\'album � jour');

// lang_rate_pic_php
define('ALREADY_RATED', 'Vous aviez d�j� not� cette photo');
define('RATE_OK', 'Votre vote a �t� pris en compte');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Bien que les administrateurs de {SITE_NAME} fassent en sortent de supprimer ou modifier toute donn�e � caract�re r�pr�hensible le plus rapidement possible, il est impossible de scruter syst�matiquement l\'int�gralit� des posts. Vous êtes par cons�quent conscient que tous les posts effectu�s sur ce site expriment les points de vue et opinions de leur auteur et non ceux des administrateurs ou du webmaster (sauf, �videmment dans le cas des posts effectu�s par ces derniers), qui ne pourront par cons�quent pas être consid�r�s comme responsables.
<br />
<br />
Vous acceptez de ne poster aucune donn�e � caract�re injurieux, obsc�ne, vulgaire, diffamatoire, menaçant, sexuels ou tout autre contenu susceptible de violer la loi. Vous acceptez que le webmaster et les mod�rateurs de {SITE_NAME} aient le droit de supprimer ou modifier n\'importe quel contenu, si cela leur semble opportun. En tant qu\'utilisateur, vous acceptez que toutes les informations entr�es plus haut soient stock�es dans une base de donn�es. Bien que ces informations ne soient pas communiqu�es � des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent pas être tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les donn�es.<br />
<br />
Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu\'� am�liorer votre navigation sur ce site. Votre adresse e-mail ne sera utilis�e que pour confirmer les donn�es de votre inscription ainsi que votre mot de passe.<br />
<br />
En cliquant sur \'J\'accepte\' ci-dessous, vous acceptez de vous soumettre � ces conditions.');

// lang_register_php
define('PAGE_TITLE', 'inscription d\'utilisateur');
define('TERM_COND', 'Conditions g�n�rales d\'inscription');
define('I_AGREE', 'J\'accepte');
define('SUBMIT', 'S\'inscrire');
define('ERR_USER_EXISTS', 'Le nom d\'utilisateur que vous avez entr� existe d�j�, merci de bien vouloir en choisir un autre');
define('ERR_PASSWORD_MISMATCH', 'Les deux mots de passe ne correspondent pas, merci de les entrer � nouveau');
define('ERR_UNAME_SHORT', 'Le nom d\'utilisateur doit comprendre au moins 2 caract�res');
define('ERR_PASSWORD_SHORT', 'Le mot de passe doit comprendre au moins 2 caract�res');
define('ERR_UNAME_PASS_DIFF', 'Le nom d\'utilisateur et le mot de passe doivent être diff�rents');
define('ERR_INVALID_EMAIL', 'L\'adresse e-mail n\'est pas valide');
define('ERR_DUPLICATE_EMAIL', 'Un autre utilisateur s\'est d�j� enregist� avec l\'adresse e-mail que vous avez entr�e');
define('ENTER_INFO', 'Entrez les informations relatives � votre inscription');
define('REQUIRED_INFO', 'Informations requises');
define('OPTIONAL_INFO', 'Informations optionnelles');
define('USERNAME', 'Nom d\'utilisateur / login');
define('PASSWORD', 'Mot de passe');
define('PASSWORD_AGAIN', 'Entrez � nouveau le mot de passe');
define('EMAIL', 'Email');
define('LOCATION', 'Localisation');
define('INTERESTS', 'Int�rêts');
define('WEBSITE', 'Site web');
define('OCCUPATION', 'Activit�');
define('ERROR', 'ERREUR');
define('CONFIRM_EMAIL_SUBJECT', '%s - Confirmation d\'inscription');
define('INFORMATION', 'Informations');
define('FAILED_SENDING_EMAIL', 'L\'e-mail de confirmation d\'inscription n\'a pu être envoy�!');
define('THANK_YOU', 'Merci pour votre inscription.<br /><br />Un e-mail contenant les informations sur l\'activation de votre compte vous a �t� envoy� � l\'adresse e-mail que vous nous avez communiqu�e.');
define('ACCT_CREATED', 'Votre compte a bien �t� cr�e. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe');
define('ACCT_ACTIVE', 'Votre compte a bien �t� activ�. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe');
define('ACCT_ALREADY_ACT', 'Votre compte est d�j� actif!');
define('ACCT_ACT_FAILED', 'Ce compte ne peut pas être activ�!');
define('ERR_UNK_USER', 'L\'utilisateur s�lectionn� n\'existe pas!');
define('X_S_PROFILE', 'Profil de %s');
define('GROUP', 'Groupe');
define('REG_DATE', 'Date d\'inscription');
define('DISK_USAGE', 'Utilisation du disque');
define('CHANGE_PASS', 'Changer mon mot de passe');
define('CURRENT_PASS', 'Mot de passe actuel');
define('NEW_PASS', 'Nouveau mot de passe');
define('NEW_PASS_AGAIN', 'Nouveau mot de passe (� nouveau)');
define('ERR_CURR_PASS', 'Le mot de passe actuel n\'est pas correct');
define('APPLY_MODIF', 'Appliquer les modifications');
define('UPDATE_SUCCESS', 'Votre profil a �t� mis � jour');
define('PASS_CHG_SUCCESS', 'Votre mot de passe a �t� modifi�');
define('PASS_CHG_ERROR', 'Votre mot de passe n\'a pas �t� modifi�');

// lang_register_confirm_email
define('REGISTER_CONFIRM_EMAIL', 'Merci pour votre inscription sur {SITE_NAME}

Votre nom d\'utilisateur/login est : "{USER_NAME}"
Votre mot de passe est : "{PASSWORD}"

Afin d\'activer votre compte, vous devez cliquer sur le lien suivant, ou bien en faire un copier/coller dans la barre d\'adresse de votre navigateur.

{ACT_LINK}

Cordialement,

L\'equipe de {SITE_NAME}
');

// lang_reviewcom_php
define('TITLE', 'V�rifier les commentaires');
define('NO_COMMENT', 'Il n\'y a pas de commentaire � v�rifier');
define('N_COMM_DEL', '%s commentaire(s) supprim�(s)');
define('N_COMM_DISP', 'Nombre de commentaires � afficher');
define('SEE_PREV', 'Voir pr�c�dent(s)');
define('SEE_NEXT', 'Voir suivant(s)');
define('DEL_COMM', 'Supprimer les commentaires s�lectionn�s');

// lang_search_php
define('SEARCH', 'Rechercher une image dans la galerie');

// lang_search_new_php
define('PAGE_TITLE', 'Rechercher les nouvelles photos');
define('SELECT_DIR', 'Selectionnez le r�pertoire');
define('SELECT_DIR_MSG', 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez upload� sur votre serveur FTP.<br /><br />S�lectionnez le r�pertoire où vous avez upload� vos photos');
define('NO_PIC_TO_ADD', 'Il n\'y a pas de photo � ajouter');
define('NEED_ONE_ALBUM', 'Vous avez besoin d\'au moins un album pour effectuer cette op�ration');
define('WARNING', 'Avertissement');
define('CHANGE_PERM', 'le script ne peut pas �crire dans ce r�pertoire, vous devez changer ses permissions � 755 ou 777 avant d\'essayer d\'ajouter les photos !');
define('TARGET_ALBUM', '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s');
define('FOLDER', 'R�pertoire');
define('IMAGE', 'Image');
define('ALBUM', 'Album');
define('RESULT', 'R�sultat');
define('DIR_RO', 'Non inscriptible. ');
define('DIR_CANT_READ', 'Illisible. ');
define('INSERT', 'Ajouter de nouvelles images � la galerie');
define('LIST_NEW_PIC', 'Liste des nouvelles images');
define('INSERT_SELECTED', 'Ins�rer les photos s�lectionn�es');
define('NO_PIC_FOUND', 'Aucune image n\'a �t� trouv�e');
define('BE_PATIENT', 'Soyez patient. Le script a besoin de temps pour mettre les photos en ligne');
define('NOTES', '<ul><li><b>OK</b> : signifie que l\'image a bien �t� mise en ligne<li><b>DP</b> : signifie que la photo existe d�j� dans la base de donn�es<li><b>PB</b> : signifie que la photo n\'a pas pu être ajout�e, v�rifiez votre configuration et les permissions des r�pertoires dans lesquels les images se trouvent<li>Si les signes OK, DP, PB n\'apparaissent pas, cliquez sur l\'image cass�e afin de voir le message d\'erreur g�n�r� par PHP<li>Si votre browser cesse d\'effectuer la t�che (timeout), cliquez sur le bouton actualiser</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Mettre une photo en ligne');
define('MAX_FSIZE', 'Le poids maximal autoris� pour une image est de %s Ko');
define('ALBUM', 'Album');
define('PICTURE', 'Photo');
define('PIC_TITLE', 'Titre de la photo');
define('DESCRIPTION', 'Description de la photo');
define('KEYWORDS', 'Mots clefs (s�par�s par des espaces)');
define('ERR_NO_ALB_UPLOADABLES', 'Nous sommes d�sol�s, mais il n\'existe pas d\'album dans lequel vous ayiez le droit d\'uploader des photos');

// lang_usermgr_php
define('TITLE', 'G�rer les utilisateurs');
define('NAME_A', 'Nom ascendant');
define('NAME_D', 'Nom descendant');
define('GROUP_A', 'Groupe ascendant');
define('GROUP_D', 'Groupe descendant');
define('REG_A', 'Date d\'inscription ascendante');
define('REG_D', 'Date d\'inscription descendante');
define('PIC_A', 'Nombre de photos ascendant');
define('PIC_D', 'Nombre de photos descendant');
define('DISKU_A', 'Utilisation espace disque ascendant');
define('DISKU_D', 'Utilisation espace disque descendant');
define('SORT_BY', 'Classer les utilisateurs par');
define('ERR_NO_USERS', 'La table d\'utilisateurs est vide!');
define('ERR_EDIT_SELF', 'Vous ne pouvez pas modifier votre propre profil, utilisez le lien \'Mon profil\' pour effectuer cette op�ration');
define('EDIT', 'EDITER');
define('DELETE', 'SUPPRIMER');
define('NAME', 'Nom d\'utilisateur');
define('GROUP', 'Groupe');
define('INACTIVE', 'Inactif');
define('OPERATIONS', 'Op�rations');
define('PICTURES', 'Photos');
define('DISK_SPACE', 'Espace utilis� / quota');
define('REGISTERED_ON', 'Enregistr� le');
define('U_USER_ON_P_PAGES', '%d utilisateur(s) sur %d page(s)');
define('CONFIRM_DEL', 'Voulez vous vraiment SUPPRIMER cet utilisateur?\\nToutes ses photos et albums seront �galement supprim�s');
define('MAIL', 'E-MAIL');
define('ERR_UNKNOWN_USER', 'L\'utilisateur s�lectionn� n\'existe pas!');
define('MODIFY_USER', 'Modifier l\'utilisateur');
define('NOTES', 'Commentaires');
define('NOTE_LIST', '<li>Si vous ne souhaitez pas modifier le mot de passe actuel, laisse le champs \"mot de passe\" vide.');
define('PASSWORD', 'Mot de Passe');
define('USER_ACTIVE_CP', 'L\'utilisateur est actif');
define('USER_GROUP_CP', 'Groupe de l\'utilisateur');
define('USER_EMAIL', 'e-mail de l\'utilisateur');
define('USER_WEB_SITE', 'Site web de l\'utilisateur');
define('CREATE_NEW_USER', 'Cr�er un nouvel utilisateur');
define('USER_FROM', 'Localisation de l\'utilisateur');
define('USER_INTERESTS', 'Centres d\'int�r�t de l\'utilisateur');
define('USER_OCC', 'Activit� de l\'utilisateur');

// lang_util_php
define('TITLE', 'Redimensionner les photos');
define('WHAT_IT_DOES', 'Fonctionnalit�s');
define('WHAT_UPDATE_TITLES', 'Met � jour les titres � partir des noms de fichier');
define('WHAT_DELETE_TITLE', 'Supprime les titres');
define('WHAT_REBUILD', 'Reg�n�re les vignettes et les photos redimensionn�es');
define('WHAT_DELETE_ORIGINALS', 'Supprime les photos originales et les remplace par leur version redimensionn�e');
define('FILE', 'Fichier');
define('TITLE_SET_TO', 'titre chang� en');
define('SUBMIT_FORM', 'valider');
define('UPDATED_SUCCESFULLY', 'modifi� avec succ�s');
define('ERROR_CREATE', 'ERREUR lors de la cr�ation');
define('CONTINUE', 'Continuer avec plus d\'images');
define('MAIN_SUCCESS', 'Le fichier %s est maintenant utilis� comme image principale');
define('ERROR_RENAME', 'Erreur lors du changement du nom de %s � %s');
define('ERROR_NOT_FOUND', 'Le fichier %s n\'a pas �t� trouv�');
define('BACK', 'retour � la page principale');
define('THUMBS_WAIT', 'Mise � jour des vignettes et/ou images redimensionn�es, merci de patienter...');
define('THUMBS_CONTINUE_WAIT', 'Continuer la mise � jour des vignettes et/ou des images redimensionn�es...');
define('TITLES_WAIT', 'Mise � jour des titres, merci de patienter...');
define('DELETE_WAIT', 'Suppression des titres, merci de patienter...');
define('REPLACE_WAIT', 'Suppression des originaux et remplacement de ces derniers par les images redimensionn�es, merci de patienter...');
define('INSTRUCTION', 'Instructions rapides');
define('INSTRUCTION_ACTION', 'Selectionnez une action');
define('INSTRUCTION_PARAMETER', 'D�finissez les param�tres');
define('INSTRUCTION_ALBUM', 'S�lectionnez un album');
define('INSTRUCTION_PRESS', 'Appuyez sur %s');
define('UPDATE', 'Mettre � jour les vignettes et/ou les photos redimensionn�s');
define('UPDATE_WHAT', 'Ce qui doit �tre mis 0 jour');
define('UPDATE_THUMB', 'Seulement les vignettes');
define('UPDATE_PIC', 'Seulement les photos redimensionn�es');
define('UPDATE_BOTH', 'Les vignettes et les images redimensionn�es');
define('UPDATE_NUMBER', 'Nombre d\'images trait�es par clic');
define('UPDATE_OPTION', '(essayez de r�duire cette valeur si vous avez des probl�mes de timeout)');
define('FILENAME_TITLE', 'Nom du fichier / Titre de l\'image');
define('FILENAME_HOW', 'Comment le nom du fichier doit-il être modifi� ?');
define('FILENAME_REMOVE', 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces');
define('FILENAME_EURO', 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20');
define('FILENAME_US', 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20');
define('FILENAME_TIME', 'Changer 2003_11_23_13_20_20.jpg en 13:20');
define('DELETE', 'Supprimer le titre des photos ou les photos dans leur taille d\'origine');
define('DELETE_TITLE', 'Supprimer le titre des photos');
define('DELETE_ORIGINAL', 'Supprimer les photos dans leur taille d\'origine');
define('DELETE_REPLACE', 'Supprime les images originales en les remplaçant par les versions redimensionn�es');
define('SELECT_ALBUM', 'Selectionner un album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Gallerie Photos');
?>