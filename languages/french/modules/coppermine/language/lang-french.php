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
// Traduction complétée  - Juin 2004                                        //
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
define('LANG_NAME_NATIVE', 'Français');
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
define('LASTCOM_DATE_FMT', '%m/%d/%y Ã  %H:%M');
define('LASTUP_DATE_FMT', '%B %d, %Y');
define('REGISTER_DATE_FMT', '%B %d, %Y');
define('LASTHIT_DATE_FMT', '%B %d, %Y Ã  %I:%M %p');
define('COMMENT_DATE_FMT', '%B %d, %Y Ã  %I:%M %p');

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
define('TOPRATED', 'Les mieux notées');
define('LASTHITS', 'Les dernières vues');
define('SEARCH', 'Résultats de la recherche');
define('FAVPICS', 'Photos préférées');

// lang_errors
define('ACCESS_DENIED', 'Vous n\'avez pas la permission d\'accéder à  cette page.');
define('PERM_DENIED', 'Vous n\'avez pas la permission d\'effectuer cette opération.');
define('PARAM_MISSING', 'Script appelé sans les paramètres nécessaires.');
define('NON_EXIST_AP', 'L\'album/la photo demandé(e) n\'existe pas !');
define('QUOTA_EXCEEDED', 'Espace disque dépassé<br /><br />Vous avez un quota d\'espace de [quota]K, vos photos utilisent [space]K, le fait d\'ajouter cette photo vous ferait dépasser votre quota.');
define('GD_FILE_TYPE_ERR', 'L\'utilisation de \"GD image library\" ne vous permet d\'utiliser que de images de type JPEG et PNG.');
define('INVALID_IMAGE', 'L\'image que vous avez uploadée est corrompue ou ne peut pas être prise en charge par GD library');
define('RESIZE_FAILED', 'Impossible de créer l\'vignette ou l\'image réduite.');
define('NO_IMG_TO_DISPLAY', 'Pas d\'image à  afficher');
define('NON_EXIST_CAT', 'La catégorie sélectionnée n\'existe pas');
define('ORPHAN_CAT', 'Une catégorie a un parent inexistant, utilisez le gestionnaire de catégories afin de remédier au problème.');
define('DIRECTORY_RO', 'Le réperetoire \'%s\' n\'est pas inscriptible : les images ne peuvent être supprimées.');
define('NON_EXIST_COMMENT', 'Le commentaire sélectionné n\'existe pas.');
define('PIC_IN_INVALID_ALBUM', 'L\'image se trouve dans un album qui n\'existe pas (%s)!?');
define('BANNED', 'Vous êtes pour l\'instant banni de ce site.');
define('NOT_WITH_UDB', 'Cette fonction est désactivée dans Coppermine parce que la gallerie est intégrée à  un forum. Soit l\'action que vous essayez d\'effectuer n\'est pas disponible dans cette configuration, soit vous devez l\'effectuer à partir du forum auquel vous avez intégré la galerie.');
define('MEMBERS_ONLY', 'Cette fonction est réservée aux membres, inscrivez vous.');
define('MUSTBE_GOD', 'Cette fonction est réservée à l\'administrateur. Vous devez être loggué en tant qu\'adminpour utiliser cette fonction');

// lang_main_menu
define('ALB_LIST_TITLE', 'Aller à la liste des albums');
define('ALB_LIST_LNK', 'Liste des albums');
define('MY_GAL_TITLE', 'Aller dans ma galerie personnelle');
define('MY_GAL_LNK', 'Ma galerie');
define('MY_PROF_LNK', 'Mon profil');
define('MY_PROF_TITLE','Vérifier le quota de votre disque et vos groupes');
define('ADM_MODE_TITLE', 'Passer en mode admin');
define('ADM_MODE_LNK', 'Mode admin');
define('USR_MODE_TITLE', 'Passer en mode utilisateur');
define('USR_MODE_LNK', 'Mode utilisateur');
define('UPLOAD_PIC_TITLE', 'Envoyer une image dans un album');
define('UPLOAD_PIC_LNK', 'Envoyer une image');
define('REGISTER_TITLE', 'Créer un compte');
define('REGISTER_LNK', 'Inscription');
define('LOGIN_LNK', 'S\'identifier');
define('LOGOUT_LNK', 'Quitter');
define('LASTUP_LNK', 'Derniers ajouts');
define('LASTUP_TITLE', 'Images récemment téléchargées');
define('LASTCOM_TITLE',  'Images dans l\'ordre des dernier commentaires');
define('LASTCOM_LNK',  'Derniers commentaires');
define('TOPN_TITLE', 'Images les plus vues');
define('TOPN_LNK', 'Images les plus populaires');
define('TOPRATED_TITLE', 'Images ayant été notées le plus de fois');
define('TOPRATED_LNK',  'Images les mieux notées');
define('SEARCH_LNK', 'Rechercher');
define('FAV_LNK', 'Mes favoris');
define('HELP_LNK', "<img src=\"$CPG_M_DIR/images/help.gif\"  vspace=\"2\" height=\"20\" width=\"20\" align=\"middle\" alt=\"HELP\"  border=\"0\" />");

// lang_gallery_admin_menu
define('UPL_APP_LNK', 'Fichiers en attente');
define('CONFIG_LNK', 'Configuration');
define('ALBUMS_LNK', 'Albums');
define('CATEGORIES_LNK', 'Catégories');
define('USERS_LNK', 'Utilisateurs');
define('GROUPS_LNK', 'Groupes');
define('COMMENTS_LNK', 'Commentaires');
define('SEARCHNEW_LNK', 'FTP =>');
define('UTIL_LNK', 'Redimensionner les images');
define('BAN_LNK', 'Bannir des utilisateurs');

// lang_user_admin_menu
define('ALBMGR_LNK', 'Créer / classer mes albums');
define('MODIFYALB_LNK', 'Modifier mes albums');
define('MY_PROF_LNK', 'Mon profil');

// lang_cat_list
define('CATEGORY', 'Catégorie');
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
define('SORT_RA', 'Classer par évaluation ascendante');
define('SORT_RD', 'Classer par évaluation descendants');
define('RATING', 'Evaluation');
define('SORT_TITLE', 'Classer les images par:');

// lang_img_nav_bar
define('THUMB_TITLE', 'Retourner à la page des vignettes');
define('PIC_INFO_TITLE', 'Afficher / cacher les informations sur l\'image');
define('SLIDESHOW_TITLE', 'Diaporama');
define('SLIDESHOW_DISABLED', 'les e-cartes sont desactivées');
define('SLIDESHOW_DISABLED_MSG', 'Cette fonction est réservée aux membres. Inscrivez vous.');
define('ECARD_TITLE', 'Envoyer cette image en tant que carte électronique');
define('ECARD_DISABLED', 'les cartes électroniques sont désactivées');
define('ECARD_DISABLED_MSG', 'Vous n\'avez pas l\'autorisation d\'envoyer des cartes');
define('PREV_TITLE', 'Voir l\'image précédente');
define('NEXT_TITLE', 'Voir l\'image suivante');
define('PIC_POS', 'PHOTO %s/%s');
define('NO_MORE_IMAGES', 'Il n\'y a pas plus d\'images dans cette galerie');
define('NO_LESS_IMAGES', 'C\'est la première image dans la galerie');

// lang_rate_pic
define('RATE_THIS_PIC', 'Noter cette image ');
define('NO_VOTES', '(Pas encore de vote)');
define('RATING', '(note actuelle : %s / 5 pour %s votes)');
define('RUBBISH', 'Très mauvais');
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
define('DATE_ADDED', 'Ajouté le : ');

// lang_get_pic_data
define('N_COMMENTS', '%s commentaires');
define('N_VIEWS', '%s téléchargements');
define('N_VOTES', '(%s votes)');

// lang_smilies_inc_php
define('EXCLAMATION', 'Exclamation');
define('QUESTION', 'Question');
define('VERY HAPPY', 'Très heureux');
define('SMILE', 'Sourire');
define('SAD', 'Triste');
define('SURPRISED', 'Surpris');
define('SHOCKED', 'Choqué');
define('CONFUSED', 'Confus');
define('COOL', 'Cool');
define('LAUGHING', 'Rire');
define('MAD', 'Fou');
define('RAZZ', 'Razz');
define('EMBARASSED', 'Embarassé');
define('CRYING OR VERY SAD', 'Pleure ou très triste');
define('EVIL OR VERY MAD', 'Diabolique ou très en colère');
define('TWISTED EVIL', 'Sadique');
define('ROLLING EYES', 'Lève les yeux au ciel');
define('WINK', 'Clin d\'oeil');
define('IDEA', 'Idée');
define('ARROW', 'Flèche');
define('NEUTRAL', 'Neutre');
define('MR. GREEN', 'Mr. Green');

// lang_admin_php
define('LV_ADMIN', 'Déconnexion du mode administrateur...');
define('ENT_ADMIN', 'Passage au mode administrateur...');

// lang_albmgr_php
define('ALB_NEED_NAME', 'Les albums doivent avoir un nom !');
define('CONFIRM_MODIFS', 'Voulez-vous vraiment effectuer ces modifications ?');
define('NO_CHANGE', 'Vous n\'avez effectué aucun changement !');
define('NEW_ALBUM', 'Nouvel album');
define('CONFIRM_DELETE1', 'Voulez vous vraiment supprimer cet album ?');
define('CONFIRM_DELETE2', '\\Toutes les images et tous les commentaires seront perdus !');
define('SELECT_FIRST', 'Selectionnez d\'abord un album');
define('ALB_MRG', 'Gestionnaire d\'album');
define('MY_GALLERY', '* Ma galerie *');
define('NO_CATEGORY', '* Pas de catégorie *');
define('DELETE', 'Supprimer');
define('NEW', 'Nouveau');
define('APPLY_MODIFS', 'Appliquer les modifications');
define('SELECT_CATEGORY', 'Sélectionner une categorie');

// lang_catmgr_php
define('MISS_PARAM', 'Les paramètres requis pour l\'\'%s\'operation sont manquants !');
define('UNKNOWN_CAT', 'La catégorie sélectionnée n\'existe pas dans la base de données');
define('USERGAL_CAT_RO', 'La galerie des utilisateurs ne peut pas être supprimée!');
define('MANAGE_CAT', 'Gérer les catégories');
define('CONFIRM_DELETE', 'Voulez vous vraiment SUPPRIMER cette catégorie ?');
define('CATEGORY', 'Categorie');
define('OPERATIONS', 'Opérations');
define('MOVE_INTO', 'Déplacer dans');
define('UPDATE_CREATE', 'Mettre à jour / créer la catégorie');
define('PARENT_CAT', 'Catégorie parente');
define('CAT_TITLE', 'Titre de la catégorie');
define('CAT_DESC', 'Description de la catégorie');

// lang_config_php
define('TITLE', 'Configuration');
define('RESTORE_CFG', 'Restorer les paramètres d\'origine');
define('SAVE_CFG', 'Sauvergarder la nouvelle configuration');
define('NOTES', 'Notes');
define('INFO', 'Information');
define('UPD_SUCCESS', 'La configuration de Coppermine a été mise à  jour');
define('RESTORE_SUCCESS', 'La configuration d\'origine de Coppermine a été restaurée');
define('NAME_A', 'Nom ascendant');
define('NAME_D', 'Nom descendant');
define('TITLE_A', 'Titre ascendand');
define('TITLE_D', 'Titre descendant');
define('DATE_A', 'Date ascendante');
define('DATE_D', 'Date descendante');
define('RATING_A', 'évaluation ascendante');
define('RATING_D', 'évaluation descendante');
define('TH_ANY', 'Taille Maximum');
define('TH_HT', 'Hauteur');
define('TH_WD', 'Largeur');

// lang_config_data
define('CONFIG_GENSET', 'Paramètres généraux');
define('GALLERY_NAME', 'Nom de la galerie');
define('GALLERY_DESCRIPTION', 'Description de la galerie');
define('GALLERY_ADMIN_EMAIL', 'Email de l\'administrateur de la galerie');
define('ECARDS_MORE_PIC_TARGET', 'Adresse sur laquelle le lien \'Voir plus de photos\' des e-cards doit pointer');
define('LANG', 'Langage');
define('CPGTHEME', 'Thème');
define('NICE_TITLES', 'Page Specific Titles instead of >Coppermine');
define('RIGHT_BLOCKS', 'Show blocks on the right');
define('ALB_LIST_VIEW_TITLE', 'Affichage de la liste des albums');
define('MAIN_TABLE_WIDTH', 'Largeur du tableau principal (pixels ou %)');
define('SUBCAT_LEVEL', 'Nombre de niveaux de catégories à afficher');
define('ALBUMS_PER_PAGE', 'Nombre d\'albums à afficher');
define('ALBUM_LIST_COLS', 'Nombre de colonnes pour la liste des albums');
define('ALB_LIST_THUMB_SIZE', 'Taille des vignettes en pixels');
define('MAIN_PAGE_LAYOUT', 'Le contenu de la page principale');
define('FIRST_LEVEL', 'Afficher les vignettes de l\'album du premier niveau avec la catégorie');
define('THUMB_VIEW_TITLE', 'Affichage des vignettes');
define('THUMBCOLS', 'Nombre de colonnes sur la page des vignettes');
define('THUMBROWS', 'Nombre de lignes sur la page des vignettes');
define('MAX_TABS', 'Nombre maximal d\'onglets à afficher');
define('CAPTION_IN_THUMBVIEW', 'Afficher la légende de l\'image (en plus de son titre) sous la vignette');
define('DISPLAY_COMMENT_COUNT', 'Afficher le nombre de commentaires sous les vignettes');
define('DEFAULT_SORT_ORDER', 'Classement par défaut des images');
define('MIN_VOTES_FOR_RATING', 'Nombre minimum de votes nécessaires pour qu\'une image apparaisse dans la liste des images les mieux notées');
define('SEO_ALTS', 'Alts and title tags of thumbnail show title and keyword instead of picinfo');
define('IMAGE_COMMENT_VIEW_TITLE', 'Affichage des images &amp; paramètres des commentaires');
define('PICTURE_TABLE_WIDTH', 'Largeur du tableau pour l\'affichage des images (pixels ou %)');
define('DISPLAY_PIC_INFO', 'Les informations relatives à l\'image sont affichées par défaut');
define('FILTER_BAD_WORDS', 'Filtrer les gros mots dans les commentaires');
define('ENABLE_SMILIES', 'Autoriser les smileys dans les commentaires');
define('DISABLE_FLOOD_PROTECTION', 'Permettre plusieurs commentaires consécutifs sur une image par le même utilisateur');
define('COMMENT_EMAIL_NOTIFICATION', 'Envoyer un Email à l\'administrateur avant de soumettre un commentaire');
define('MAX_IMG_DESC_LENGTH', 'Longueur maximale pour la description des images');
define('MAX_COM_WLENGTH', 'Nombre maximal de lettres pour un mot');
define('MAX_COM_LINES', 'Nombre maximal de lignes pour un commentaire');
define('MAX_COM_SIZE', 'Longueur maximale d\'un commentaire');
define('DISPLAY_FILM_STRIP', 'Afficher le négatif');
define('MAX_FILM_STRIP_ITEMS', 'Nombre d\'images par négatif');
define('ALLOW_ANON_FULLSIZE', 'Autoriser les anonymes à voir les images en grand');
define('KEEP_VOTES_TIME', 'Nombre de jours avant de pouvoir voter pour la même image');
define('PIC_THUMB_SETTING_TITLE', 'Paramètres des images et vignettes');
define('JPEG_QUAL', 'Qualité pour les fichiers JPG');
define('THUMB_WIDTH', 'Dimension maximale pour les vignettes <b>*</b>');
define('THUMB_USE', 'Utiliser la dimension ( largeur ou hauteur ou aspect max pour la vignette)<b>*</b>');
define('MAKE_INTERMEDIATE', 'Créer des images intermédiaires');
define('PICTURE_WIDTH', 'Largeur ou hauteur maximale pour une image intermédiaire <b>*</b>');
define('MAX_UPL_SIZE', 'Poids max des images à  uploader (Ko)');
define('MAX_UPL_WIDTH_HEIGHT', 'Longueur ou hauteur maximale pour les images uploadées (en pixels)');
define('USER_SETTING_TITLE', 'Paramètres Utilisateurs');
define('ALLOW_USER_REGISTRATION', 'Autoriser de nouvelles inscriptions');
define('REG_REQUIRES_VALID_EMAIL', 'L\'inscription d\'un nouvel utilisateur doit être validée');
define('ALLOW_DUPLICATE_EMAILS_ADDR', 'Autoriser deux utilisateurs à  avoir le même e-mail');
define('ALLOW_PRIVATE_ALBUMS', 'Les utilisateurs peuvent avoir un album personnel');
define('CUSTOM_FIELDS_TITLE', 'Champs libres pour les descriptions d\'images (à  laisser tel quel si vous n\'utilisez pas cette fonction)');
define('USER_FIELD1_NAME', 'Nom du champ 1');
define('USER_FIELD2_NAME', 'Nom du champ 2');
define('USER_FIELD3_NAME', 'Nom du champ 3');
define('USER_FIELD4_NAME', 'Nom du champ 4');
define('PIC_ADV_SETTING_TITLE', 'Paramètres avancés des images et vignettes');
define('SHOW_PRIVATE', 'Afficher l\'icône des albums privés aux utilisateurs non indentifiés');
define('FORBIDEN_FNAME_CHAR', 'Caratères interdits dans les noms de fichiers');
define('ALLOWED_FILE_EXTENSIONS', 'Extensions de fichiers acceptées pour les images à uploader');
define('THUMB_METHOD', 'Méthode utilisée pour redimensionner les images');
define('IMPATH', 'Chemin vers l\'utilitaire de conversion ImageMagick (exemple : /usr/bin/X11/)');
define('ALLOWED_IMG_TYPES', 'Type d\'images autorisées (valide seulement pour ImageMagick)');
define('IM_OPTIONS', 'Options de ligne de commande pour ImageMagick');
define('READ_EXIF_DATA', 'Lire les informations EXIF dans les fichiers JPEG');
define('READ_IPTC_DATA', 'Lire les informations IPTC dans les fichiers JPEG');
define('FULLPATH', 'Répertoire de stockage de l\'album <b>*</b>');
define('USERPICS', 'Répertoire pour les images des utilisateurs <b>*</b>');
define('NORMAL_PFX', 'Préfixe des images intermédiares <b>*</b>');
define('THUMB_PFX', 'Préfixe pour les vignettes <b>*</b>');
define('DEFAULT_DIR_MODE', 'Mode par défaut des répertoires');
define('DEFAULT_FILE_MODE', 'Mode par défaut des images');
define('PICINFO_DISPLAY_FILENAME', 'Picinfo display filename');
define('PICINFO_DISPLAY_ALBUM_NAME', 'Picinfo display album name');
define('PICINFO_DISPLAY_FILE_SIZE', 'Picinfo display_file_size');
define('PICINFO_DISPLAY_DIMENSIONS', 'Picinfo display_dimensions');
define('PICINFO_DISPLAY_COUNT_DISPLAYED', 'Picinfo display_count_displayed');
define('PICINFO_DISPLAY_URL', 'Picinfo display_URL');
define('PICINFO_DISPLAY_URL_BOOKMARK', 'Picinfo display URL as bookmark link');
define('PICINFO_DISPLAY_FAVORITES', 'Picinfo display fav album link');
define('COOKIE_SETTING_TITLE', 'Cookies &amp; paramètres d\'encodage des caractères');
define('COOKIE_NAME', 'Nom du cookie utilisé par le script');
define('COOKIE_PATH', 'Chemin du cookie utilisé par le script');
define('CHAR_SET', 'Encodage des caractères');
define('MISC_SETTING_TITLE', 'Divers');
define('DEBUG_MODE', 'Activer le mode debug');
define('ADVANCED_DEBUG_MODE', 'Activer le mode debug avancé');
define('SHOWUPDATE', 'Avertir l\'administrateur des mise à jour de Coppermine');
define('NOCHANGE_FOOTER_TITLE', '<br /><div align="center">(*) Les champs marqués d\'un * ne doivent pas être modifiés si des images existent déjà  !</div><br />');

// lang_db_input_php
define('EMPTY_NAME_OR_COM', 'Vous devez taper votre nom et un commentaire');
define('COM_ADDED', 'Commentaire ajouté');
define('ALB_NEED_TITLE', 'Vous devez donner un titre à  l\'album !');
define('NO_UDP_NEEDED', 'Aucune mise à jour n\'est nécessaire.');
define('ALB_UPDATED', 'Album mis à  jour');
define('UNKNOWN_ALBUM', 'L\'album sélectionné n\'existe pas ou bien vous n\'avez pas la permission d\'uploader dans cet album');
define('NO_PIC_UPLOADED', 'Aucune image n\'a été uploadée !<br /><br />Si vous avez vraiment sélectionné une image à  uploader, vérifier que le serveur autorise l\'upload de fichiers...');
define('ERR_MKDIR', 'Impossible de créer le répertoire %s !');
define('DEST_DIR_RO', 'Le répertoire de destination (%s) ne dispose pas des droits d\'écriture nécessaires pour le script!');
define('ERR_MOVE', 'Impossible de déplacer %s vers %s !');
define('ERR_FSIZE_TOO_LARGE', 'La taille de l\'image que vous avez uploadé est trop grande (le maximum autorisé est de %s x %s) !');
define('ERR_IMGSIZE_TOO_LARGE', 'Le poids du fichier que vous avez uploadé est trop important (le maximum autorisé est de %s Ko) !');
define('ERR_INVALID_IMG', 'Le fichier que vous avez uploadé n\'est pas une image valide!');
define('ALLOWED_IMG_TYPES', 'Vous ne pouvez uploader que %s images.');
define('ERR_INSERT_PIC', 'Les images \'%s\' ne peuvent pas être insérées dans l\'album ');
define('UPLOAD_SUCCESS', 'Votre image a été correctement uploadée<br /><br />Elle sera visible après validation de l\'administrateur.');
define('INFO', 'Information');
define('ERR_COMMENT_EMPTY', 'Votre commentaire est vide!');
define('ERR_INVALID_FEXT', 'Seuls les fichiers avec les extensions suivantes sont autorisés : <br /><br />%s.');
define('NO_FLOOD', 'Nous sommes désolés, mais vous êtes déjà  l\'auteur du dernier commentaire posté au sujet de cette image.<br /><br />Vous pouvez tout simplement éditer votre message précédent si vous souhaitez le modifier ou bien ajouter des informations.');
define('REDIRECT_MSG', 'Redirection en cours.<br /><br /><br />Cliquez sur \'CONTINUER\' si la page ne se recharge pas automatiquement');
define('UPL_SUCCESS', 'Votre image a été correctement ajoutée');

// lang_delete_php
define('CAPTION', 'Légende');
define('FS_PIC', 'image en taille réelle');
define('DEL_SUCCESS', 'suppression réussie');
define('NS_PIC', 'image en taille normale');
define('ERR_DEL', 'ne peut pas être supprimé');
define('THUMB_PIC', 'vignette');
define('COMMENT', 'commentaire');
define('IM_IN_ALB', 'image dans l\'album');
define('ALB_DEL_SUCCESS', 'Album \'%s\' supprimés');
define('ALB_MGR', 'Gestionnaire d\'album');
define('ERR_INVALID_DATA', 'Données non valides reçues dans \'%s\'');
define('CREATE_ALB', 'Création de l\'album \'%s\'');
define('UPDATE_ALB', 'Mise à jour de l\'album \'%s\' avec le titre \'%s\' et index \'%s\'');
define('DEL_PIC', 'Supprimer l\'image');
define('DEL_ALB', 'Supprimer l\'album');
define('DEL_USER', 'Supprimer l\'utilisateur');
define('ERR_UNKNOWN_USER', 'L\'utilisateur sélectionné n\'existe pas !');
define('COMMENT_DELETED', 'Le commentaire a été supprimé avec succès');

// lang_display_image_php
define('CONFIRM_DEL', 'Voulez vous vraiment SUPPRIMER cette image?\\nLes commentaires seront également supprimés.');
define('DEL_PIC', 'SUPPRIMER CETTE IMAGE');
define('SIZE', '%s x %s pixels');
define('VIEWS', '%s fois');
define('SLIDESHOW', 'Diaporama');
define('STOP_SLIDESHOW', 'ARRETER LE DIAPORAMA');
define('VIEW_FS', 'Cliquez pour voir l\'image en taille réelle');
define('EDIT_PIC', 'EDIT PICTURE INFO');

// lang_picinfo
define('TITLE', 'Informations sur l\'image');
define('FILENAME', 'Nom du fichier');
define('ALBUM NAME', 'Nom de l\'album');
define('RATING', 'Note (%s votes)');
define('KEYWORDS', 'Mots clefs');
define('FILE SIZE', 'Taille du fichier');
define('DIMENSIONS', 'Dimensions');
define('DISPLAYED', 'Affichées');
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
define('CLICK_TO_CLOSE', 'Cliquez sur l\'image pour fermer la fenÃªtre');

// lang_ecard_php
define('TITLE', 'Envoyer en tant que e-card');
define('INVALID_EMAIL', '<b>Attention</b> : cette adresse e-mail n\'est pas valide !');
define('ECARD_TITLE', 'Une e-card pour vous, de la part de %s');
define('VIEW_ECARD', 'Si votre e-card ne s\'affiche pas correctement, cliquez ici');
define('VIEW_MORE_PICS', 'Suivez ce lien pour découvrir davantage de photos !');
define('SEND_SUCCESS', 'Votre ecard a été envoyée');
define('SEND_FAILED', 'Nous sommes désolés, mais le serveur n\'a pu envoyer votre e-card...');
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
define('RESET_VIEW_COUNT', 'Remettre le compteur des téléchargements à zéro');
define('RESET_VOTES', 'Remettre le compteur de votes à zéro');
define('DEL_COMM', 'Supprimer les commentaires');
define('UPL_APPROVAL', 'Autorisation d\'upload');
define('EDIT_PICS', 'Modifier les images');
define('SEE_NEXT', 'Voir les images suivantes');
define('SEE_PREV', 'Voir les images précédentes');
define('N_PIC', '%s images');
define('N_OF_PIC_TO_DISP', 'Numéro de l\'image à afficher');
define('APPLY', 'Appliquer les modifications');

// lang_groupmgr_php
define('GROUP_NAME', 'Nom du groupe');
define('DISK_QUOTA', 'Quota disque');
define('CAN_RATE', 'Peut noter les images');
define('CAN_SEND_ECARDS', 'Peut envoyer des ecards');
define('CAN_POST_COM', 'Peut écrire des commentaires');
define('CAN_UPLOAD', 'Peut mettre des photos en ligne');
define('CAN_HAVE_GALLERY', 'Peut avoir une galerie perso');
define('APPLY', 'Appliquer les modifications');
define('CREATE_NEW_GROUP', 'Créer un nouveau groupe');
define('DEL_GROUPS', 'Supprimer le(s) groupe(s) sélectionné(s)');
define('CONFIRM_DEL', 'Attention, lorsque vous supprimez un groupe, les utilisateurs de ce groupe seront transférés dans le groupe d\'utilisateurs \'Enregistré\'!\\n\\nSouhaitez-vous continuer?');
define('TITLE', 'Gérer les groupes d\'utilisateurs');
define('APPROVAL_1', 'Autorisation d\'upload pub. (1)');
define('APPROVAL_2', 'Autorisation d\'upload priv. (2)');
define('NOTE1', '<b>(1)</b> Les uploads dans un album public doivent Ãªtre approuvés par un administrateur');
define('NOTE2', '<b>(2)</b> Les uploads dans un album qui appartient à l\'utilisateur doivent Ãªtre approuvés par un admin');
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
define('STAT1', '<b>[pictures]</b> photos dans <b>[albums]</b> albums et <b>[cat]</b> catégories avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois');
define('STAT2', '<b>[pictures]</b> photos dans <b>[albums]</b> albums affichées <b>[views]</b> times');
define('XX_S_GALLERY', '%s\'s Galerie');
define('STAT3', '<b>[pictures]</b> photos dans <b>[albums]</b> albums avec <b>[comments]</b> commentaires affichées <b>[views]</b> fois');

// lang_list_users
define('USER_LIST', 'Liste d\'utilisateurs');
define('NO_USER_GAL', 'Il n\'y a pas de nouvelle galerie d\'utilisateurs');
define('N_ALBUMS', '%s album(s)');
define('N_PICS', '%s photo(s)');

// lang_list_albums
define('N_PICTURES', '%s photos');
define('LAST_ADDED', ', la dernière a été ajoutée le %s');

// lang_modifyalb_php
define('UPD_ALB_N', 'Mettre à jour l\'album %s');
define('GENERAL_SETTINGS', 'Paramètres généraux');
define('ALB_TITLE', 'Titre de l\'album');
define('ALB_CAT', 'Catégorie de l\'album');
define('ALB_DESC', 'Description de l\'album');
define('ALB_THUMB', 'vignette de l\'album');
define('ALB_PERM', 'Permissions pour cet album');
define('CAN_VIEW', 'Cet album peut Ãªtre consulté par');
define('CAN_UPLOAD', 'Les visiteurs peuvent mettre des photos en ligne');
define('CAN_POST_COMMENTS', 'Les visiteurs peuvent poster des commentaires');
define('CAN_RATE', 'Les visiteurs peuvent noter les photos');
define('USER_GAL', 'Galerie de l\'utilisateur');
define('NO_CAT', '* Pas de catégorie *');
define('ALB_EMPTY', 'L\'album est vide');
define('LAST_UPLOADED', 'Dernier upload');
define('PUBLIC_ALB', 'Tout le monde (album public)');
define('ME_ONLY', 'Moi seulement');
define('OWNER_ONLY', 'Le propriétaire de l\'album (%s) seulement');
define('GROUPP_ONLY', 'Membres du groupe \'%s\'');
define('ERR_NO_ALB_TO_MODIFY', 'Il n\'y a pas d\'album modifiable dans la base.');
define('UPDATE', 'Mettre l\'album à jour');

// lang_rate_pic_php
define('ALREADY_RATED', 'Vous aviez déjà noté cette photo');
define('RATE_OK', 'Votre vote a été pris en compte');

// lang_register_disclamer
define('REGISTER_DISCLAMER', 'Bien que les administrateurs de {SITE_NAME} fassent en sortent de supprimer ou modifier toute donnée à caractère répréhensible le plus rapidement possible, il est impossible de scruter systématiquement l\'intégralité des posts. Vous Ãªtes par conséquent conscient que tous les posts effectués sur ce site expriment les points de vue et opinions de leur auteur et non ceux des administrateurs ou du webmaster (sauf, évidemment dans le cas des posts effectués par ces derniers), qui ne pourront par conséquent pas Ãªtre considérés comme responsables.
<br />
<br />
Vous acceptez de ne poster aucune donnée à caractère injurieux, obscène, vulgaire, diffamatoire, menaÃ§ant, sexuels ou tout autre contenu susceptible de violer la loi. Vous acceptez que le webmaster et les modérateurs de {SITE_NAME} aient le droit de supprimer ou modifier n\'importe quel contenu, si cela leur semble opportun. En tant qu\'utilisateur, vous acceptez que toutes les informations entrées plus haut soient stockées dans une base de données. Bien que ces informations ne soient pas communiquées à des tiers sans votre consentement, le webmaster et les administrateurs ne peuvent pas Ãªtre tenus pour responsables dans le cas de tentatives de hack qui pourraient compromettre les données.<br />
<br />
Ce site utilise des cookies pour stocker des informations sur votre ordinateur. Ces cookies ne servent qu\'à améliorer votre navigation sur ce site. Votre adresse e-mail ne sera utilisée que pour confirmer les données de votre inscription ainsi que votre mot de passe.<br />
<br />
En cliquant sur \'J\'accepte\' ci-dessous, vous acceptez de vous soumettre à ces conditions.');

// lang_register_php
define('PAGE_TITLE', 'inscription d\'utilisateur');
define('TERM_COND', 'Conditions générales d\'inscription');
define('I_AGREE', 'J\'accepte');
define('SUBMIT', 'S\'inscrire');
define('ERR_USER_EXISTS', 'Le nom d\'utilisateur que vous avez entré existe déjà, merci de bien vouloir en choisir un autre');
define('ERR_PASSWORD_MISMATCH', 'Les deux mots de passe ne correspondent pas, merci de les entrer à nouveau');
define('ERR_UNAME_SHORT', 'Le nom d\'utilisateur doit comprendre au moins 2 caractères');
define('ERR_PASSWORD_SHORT', 'Le mot de passe doit comprendre au moins 2 caractères');
define('ERR_UNAME_PASS_DIFF', 'Le nom d\'utilisateur et le mot de passe doivent Ãªtre différents');
define('ERR_INVALID_EMAIL', 'L\'adresse e-mail n\'est pas valide');
define('ERR_DUPLICATE_EMAIL', 'Un autre utilisateur s\'est déjà enregisté avec l\'adresse e-mail que vous avez entrée');
define('ENTER_INFO', 'Entrez les informations relatives à votre inscription');
define('REQUIRED_INFO', 'Informations requises');
define('OPTIONAL_INFO', 'Informations optionnelles');
define('USERNAME', 'Nom d\'utilisateur / login');
define('PASSWORD', 'Mot de passe');
define('PASSWORD_AGAIN', 'Entrez à nouveau le mot de passe');
define('EMAIL', 'Email');
define('LOCATION', 'Localisation');
define('INTERESTS', 'IntérÃªts');
define('WEBSITE', 'Site web');
define('OCCUPATION', 'Activité');
define('ERROR', 'ERREUR');
define('CONFIRM_EMAIL_SUBJECT', '%s - Confirmation d\'inscription');
define('INFORMATION', 'Informations');
define('FAILED_SENDING_EMAIL', 'L\'e-mail de confirmation d\'inscription n\'a pu Ãªtre envoyé!');
define('THANK_YOU', 'Merci pour votre inscription.<br /><br />Un e-mail contenant les informations sur l\'activation de votre compte vous a été envoyé à l\'adresse e-mail que vous nous avez communiquée.');
define('ACCT_CREATED', 'Votre compte a bien été crée. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe');
define('ACCT_ACTIVE', 'Votre compte a bien été activé. Vous pouvez maintenant vous identifier avec votre login et votre mot de passe');
define('ACCT_ALREADY_ACT', 'Votre compte est déjà actif!');
define('ACCT_ACT_FAILED', 'Ce compte ne peut pas Ãªtre activé!');
define('ERR_UNK_USER', 'L\'utilisateur sélectionné n\'existe pas!');
define('X_S_PROFILE', 'Profil de %s');
define('GROUP', 'Groupe');
define('REG_DATE', 'Date d\'inscription');
define('DISK_USAGE', 'Utilisation du disque');
define('CHANGE_PASS', 'Changer mon mot de passe');
define('CURRENT_PASS', 'Mot de passe actuel');
define('NEW_PASS', 'Nouveau mot de passe');
define('NEW_PASS_AGAIN', 'Nouveau mot de passe (à nouveau)');
define('ERR_CURR_PASS', 'Le mot de passe actuel n\'est pas correct');
define('APPLY_MODIF', 'Appliquer les modifications');
define('UPDATE_SUCCESS', 'Votre profil a été mis à jour');
define('PASS_CHG_SUCCESS', 'Votre mot de passe a été modifié');
define('PASS_CHG_ERROR', 'Votre mot de passe n\'a pas été modifié');

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
define('TITLE', 'Vérifier les commentaires');
define('NO_COMMENT', 'Il n\'y a pas de commentaire à vérifier');
define('N_COMM_DEL', '%s commentaire(s) supprimé(s)');
define('N_COMM_DISP', 'Nombre de commentaires à afficher');
define('SEE_PREV', 'Voir précédent(s)');
define('SEE_NEXT', 'Voir suivant(s)');
define('DEL_COMM', 'Supprimer les commentaires sélectionnés');

// lang_search_php
define('SEARCH', 'Rechercher une image dans la galerie');

// lang_search_new_php
define('PAGE_TITLE', 'Rechercher les nouvelles photos');
define('SELECT_DIR', 'Selectionnez le répertoire');
define('SELECT_DIR_MSG', 'Cette fonction vous permet d\'ajouter un groupe de photos que vous avez uploadé sur votre serveur FTP.<br /><br />Sélectionnez le répertoire oÃ¹ vous avez uploadé vos photos');
define('NO_PIC_TO_ADD', 'Il n\'y a pas de photo à  ajouter');
define('NEED_ONE_ALBUM', 'Vous avez besoin d\'au moins un album pour effectuer cette opération');
define('WARNING', 'Avertissement');
define('CHANGE_PERM', 'le script ne peut pas écrire dans ce répertoire, vous devez changer ses permissions à  755 ou 777 avant d\'essayer d\'ajouter les photos !');
define('TARGET_ALBUM', '<b>Mettre les photos de &quot;</b>%s<b>&quot; dans </b>%s');
define('FOLDER', 'Répertoire');
define('IMAGE', 'Image');
define('ALBUM', 'Album');
define('RESULT', 'Résultat');
define('DIR_RO', 'Non inscriptible. ');
define('DIR_CANT_READ', 'Illisible. ');
define('INSERT', 'Ajouter de nouvelles images à  la galerie');
define('LIST_NEW_PIC', 'Liste des nouvelles images');
define('INSERT_SELECTED', 'Insérer les photos sélectionnées');
define('NO_PIC_FOUND', 'Aucune image n\'a été trouvée');
define('BE_PATIENT', 'Soyez patient. Le script a besoin de temps pour mettre les photos en ligne');
define('NOTES', '<ul><li><b>OK</b> : signifie que l\'image a bien été mise en ligne<li><b>DP</b> : signifie que la photo existe déjà dans la base de données<li><b>PB</b> : signifie que la photo n\'a pas pu Ãªtre ajoutée, vérifiez votre configuration et les permissions des répertoires dans lesquels les images se trouvent<li>Si les signes OK, DP, PB n\'apparaissent pas, cliquez sur l\'image cassée afin de voir le message d\'erreur généré par PHP<li>Si votre browser cesse d\'effectuer la tâche (timeout), cliquez sur le bouton actualiser</ul>');
define('SELECT_ALBUM', 'Select album');
define('NO_ALBUM', 'No album name was selected, click back and select an album to put your pictures in');

// lang_upload_php
define('TITLE', 'Mettre une photo en ligne');
define('MAX_FSIZE', 'Le poids maximal autorisé pour une image est de %s Ko');
define('ALBUM', 'Album');
define('PICTURE', 'Photo');
define('PIC_TITLE', 'Titre de la photo');
define('DESCRIPTION', 'Description de la photo');
define('KEYWORDS', 'Mots clefs (séparés par des espaces)');
define('ERR_NO_ALB_UPLOADABLES', 'Nous sommes désolés, mais il n\'existe pas d\'album dans lequel vous ayiez le droit d\'uploader des photos');

// lang_usermgr_php
define('TITLE', 'Gérer les utilisateurs');
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
define('ERR_EDIT_SELF', 'Vous ne pouvez pas modifier votre propre profil, utilisez le lien \'Mon profil\' pour effectuer cette opération');
define('EDIT', 'EDITER');
define('DELETE', 'SUPPRIMER');
define('NAME', 'Nom d\'utilisateur');
define('GROUP', 'Groupe');
define('INACTIVE', 'Inactif');
define('OPERATIONS', 'Opérations');
define('PICTURES', 'Photos');
define('DISK_SPACE', 'Espace utilisé / quota');
define('REGISTERED_ON', 'Enregistré le');
define('U_USER_ON_P_PAGES', '%d utilisateur(s) sur %d page(s)');
define('CONFIRM_DEL', 'Voulez vous vraiment SUPPRIMER cet utilisateur?\\nToutes ses photos et albums seront également supprimés');
define('MAIL', 'E-MAIL');
define('ERR_UNKNOWN_USER', 'L\'utilisateur sélectionné n\'existe pas!');
define('MODIFY_USER', 'Modifier l\'utilisateur');
define('NOTES', 'Commentaires');
define('NOTE_LIST', '<li>Si vous ne souhaitez pas modifier le mot de passe actuel, laisse le champs \"mot de passe\" vide.');
define('PASSWORD', 'Mot de Passe');
define('USER_ACTIVE_CP', 'L\'utilisateur est actif');
define('USER_GROUP_CP', 'Groupe de l\'utilisateur');
define('USER_EMAIL', 'e-mail de l\'utilisateur');
define('USER_WEB_SITE', 'Site web de l\'utilisateur');
define('CREATE_NEW_USER', 'Créer un nouvel utilisateur');
define('USER_FROM', 'Localisation de l\'utilisateur');
define('USER_INTERESTS', 'Centres d\'intérêt de l\'utilisateur');
define('USER_OCC', 'Activité de l\'utilisateur');

// lang_util_php
define('TITLE', 'Redimensionner les photos');
define('WHAT_IT_DOES', 'Fonctionnalités');
define('WHAT_UPDATE_TITLES', 'Met à jour les titres à partir des noms de fichier');
define('WHAT_DELETE_TITLE', 'Supprime les titres');
define('WHAT_REBUILD', 'Regénère les vignettes et les photos redimensionnées');
define('WHAT_DELETE_ORIGINALS', 'Supprime les photos originales et les remplace par leur version redimensionnée');
define('FILE', 'Fichier');
define('TITLE_SET_TO', 'titre changé en');
define('SUBMIT_FORM', 'valider');
define('UPDATED_SUCCESFULLY', 'modifié avec succès');
define('ERROR_CREATE', 'ERREUR lors de la création');
define('CONTINUE', 'Continuer avec plus d\'images');
define('MAIN_SUCCESS', 'Le fichier %s est maintenant utilisé comme image principale');
define('ERROR_RENAME', 'Erreur lors du changement du nom de %s à  %s');
define('ERROR_NOT_FOUND', 'Le fichier %s n\'a pas été trouvé');
define('BACK', 'retour à la page principale');
define('THUMBS_WAIT', 'Mise à jour des vignettes et/ou images redimensionnées, merci de patienter...');
define('THUMBS_CONTINUE_WAIT', 'Continuer la mise à jour des vignettes et/ou des images redimensionnées...');
define('TITLES_WAIT', 'Mise à jour des titres, merci de patienter...');
define('DELETE_WAIT', 'Suppression des titres, merci de patienter...');
define('REPLACE_WAIT', 'Suppression des originaux et remplacement de ces derniers par les images redimensionnées, merci de patienter...');
define('INSTRUCTION', 'Instructions rapides');
define('INSTRUCTION_ACTION', 'Selectionnez une action');
define('INSTRUCTION_PARAMETER', 'Définissez les paramètres');
define('INSTRUCTION_ALBUM', 'Sélectionnez un album');
define('INSTRUCTION_PRESS', 'Appuyez sur %s');
define('UPDATE', 'Mettre à jour les vignettes et/ou les photos redimensionnés');
define('UPDATE_WHAT', 'Ce qui doit être mis 0 jour');
define('UPDATE_THUMB', 'Seulement les vignettes');
define('UPDATE_PIC', 'Seulement les photos redimensionnées');
define('UPDATE_BOTH', 'Les vignettes et les images redimensionnées');
define('UPDATE_NUMBER', 'Nombre d\'images traitées par clic');
define('UPDATE_OPTION', '(essayez de réduire cette valeur si vous avez des problèmes de timeout)');
define('FILENAME_TITLE', 'Nom du fichier / Titre de l\'image');
define('FILENAME_HOW', 'Comment le nom du fichier doit-il Ãªtre modifié ?');
define('FILENAME_REMOVE', 'Supprimer la fin .jpg et remplacer _ (underscore) par des espaces');
define('FILENAME_EURO', 'Changer 2003_11_23_13_20_20.jpg en 23/11/2003 13:20');
define('FILENAME_US', 'Changer 2003_11_23_13_20_20.jpg en 11/23/2003 13:20');
define('FILENAME_TIME', 'Changer 2003_11_23_13_20_20.jpg en 13:20');
define('DELETE', 'Supprimer le titre des photos ou les photos dans leur taille d\'origine');
define('DELETE_TITLE', 'Supprimer le titre des photos');
define('DELETE_ORIGINAL', 'Supprimer les photos dans leur taille d\'origine');
define('DELETE_REPLACE', 'Supprime les images originales en les remplaÃ§ant par les versions redimensionnées');
define('SELECT_ALBUM', 'Selectionner un album');

// lang_pagetitle_php
define('DIVIDER', '>');
define('VIEWING', 'Viewing Photo');
define('USR', '\'s Photo Gallery');
define('PHOTOGALLERY', 'Gallerie Photos');
?>