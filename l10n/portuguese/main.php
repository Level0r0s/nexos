<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/portuguese/main.php,v $
  $Revision: 9.34 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:54 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','en');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d, %Y (%H:%M:%S)');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Página seguinte');
define('_PREVIOUSPAGE','Página anterior');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Procurar');
define('_LOGIN','Login');
define('_WRITES','escreve');
define('_POSTEDON','Enviado por');
define('_NICKNAME','Nome');
define('_PASSWORD','Senha');
define('_WELCOMETO','Bem-vindo ao');
define('_EDIT','Editar');
define('_DELETE','Apagar');
define('_POSTEDBY','Enviado por');
define('_READS','leituras');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Voltar</a>' : '<a href="javascript:history.go(-1)">Voltar</a>').' ]');
define('_COMMENTS','comentários');
define('_PASTARTICLES','Artigos Passados');
define('_OLDERARTICLES','Artigos Antigos');
define('_BY','por');
define('_ON','em');
define('_LOGOUT','Sair');
define('_WAITINGCONT','Conteúdo em Espera');
define('_WREVIEWS','Revisão em Espera');
define('_WLINKS','Links em Espera');
define('_ONEDAY','Um dia como o de hoje...');
define('_ASREGISTERED','Ainda não estás Registado? Podes fazê-lo <a href="'.getlink("Your_Account&amp;file=register").'"><b>aqui</b></a>. Como Utilizador registado, terás disponíveis mais alguma opções deste Portal.');
define('_MENUFOR','Menú para');
define('_NOBIGSTORY','Não existe o artigo do dia para hoje!');
define('_BIGSTORY','O Artigo mais lido hoje foi:');
define('_SURVEY','Inquéritos');
define('_POLLS','Votações');
define('_PCOMMENTS','Comentários:');
define('_RESULTS','Resultados');
define('_HREADMORE','ler mais...');
define('_CURRENTLY','Existem actualmentee');
define('_GUESTS','convidado(s) e');
define('_MEMBERS','membro(s) que estão online.');
define('_YOUARELOGGED','Está ligado como');
define('_YOUHAVE','Tens');
define('_PRIVATEMSG','mensagens privadas');
define('_YOUAREANON','És um Utilizador Anónimo. Podes registar-te através <a href="'.getlink("Your_Account&amp;file=register").'"><b>deste</b></a> link');
define('_NOTE','Nota:');
define('_ADMIN','Admin:');
define('_WERECEIVED','Recebemos');
define('_PAGESVIEWS','visitantes desde');
define('_TOPIC','Tema');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Vote');
define('_VOTES','Votos');
define('_MVIEWADMIN','Visível apenas a Administradores');
define('_MVIEWUSERS','Visível apenas a Utilizadores Registados');
define('_MVIEWANON','Visível apenas a Utilizadores Anónimos');
define('_MVIEWALL','Visível a todos os Utilizadores');
define('_EXPIRELESSHOUR','Expira em menos de 1 hora');
define('_EXPIREIN','Expira em');
define('_UNLIMITED','Ilimitado');
define('_HOURS','Horas');
define('_RSSPROBLEM','Atualmente há um problema com os cabeçalhos deste site');
define('_SELECTLANGUAGE','Selecionar Idioma');
define('_SELECTGUILANG','Selecionar a Interface do Idioma:');
define('_NONE','Nenhum');
define('_BLOCKPROBLEM','<center>Há um problema agora com este bloco.</center>');
define('_BLOCKPROBLEM2','<center>Neste momento não existe conteúdo para este bloco.</center>');
define('_MODULENOTACTIVE','Desculpe, este módulo não está ativo!');
define('_NOACTIVEMODULES','Modulos inativos');
define('_MODULENOEXIST','Desculpe, mas o arquivo requisitado, %s, não existe');
define('_FORADMINTESTS','(para testes do Admin)');
define('_BBFORUMS','Forums');
define('_ACCESSDENIED','Accesso Negado');
define('_RESTRICTEDAREA','Você tentou aceder uma área restrita.');
define('_MODULEUSERS','Pedimos desculpa, mas esta secção do nosso site é somente para<i>Utlizadores Registados</i> <br /><br />Você pode-se registar de graça clicando <a href="'.getlink("Your_Account&amp;file=register").'"><b>here</b></a>, depois poderá<br />aceder a esta secção sem restricções. Obrigado.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Pedimos desculpa mas esta secção do nosso site é somente para <i>Administradores</i><br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Home');
define('_HOMEPROBLEM','Existe aqui um grande problema: Não existe Homepage!!!');
define('_ADDAHOME','Adicione um Módulo na sua Home');
define('_HOMEPROBLEMUSER','Existe de momento um problema com a página. Por favor volte mais tarde.');
define('_MORENEWS','Mais na secção de Notícias');
define('_ALLCATEGORIES','Todas as Categorias');
define('_SPAMGUARDPROTECTED','SpamGuard has blocked this email from being sent');
define('_M_CHARS','Máx: %s caracteres');

define('_SYS_MESSAGE','Mensagem do Sistema');
define('_SYS_MESSAGES','Mensagens do Sistema');
define('_SYS_MAINTENANCE','You are running under maintenance mode');
define('_SYS_DEMO','You are running under administration demo mode<br />You cannot make any changes to the database<br /><a href="'.adminlink('logout').'">Log me out!</a>');

define('_DATE','Data');
define('_HOUR','Hora');
define('_UMONTH','Mês');
define('_YEAR','Ano');
define('_JANUARY','Janeiro');
define('_FEBRUARY','Fevereiro');
define('_MARCH','Março');
define('_APRIL','Abril');
define('_MAY','Maio');
define('_JUNE','Junho');
define('_JULY','Julho');
define('_AUGUST','Agosto');
define('_SEPTEMBER','Setembro');
define('_OCTOBER','Outubro');
define('_NOVEMBER','Novembro');
define('_DECEMBER','Dezembro');

define('_MONDAY','Segunda Feira');
define('_TUESDAY','Terça Feira');
define('_WEDNESDAY','Quarta Feira');
define('_THURSDAY','Quinta Feira');
define('_FRIDAY','Sexta Feira');
define('_SATURDAY','Sábado');
define('_SUNDAY','Domingo');

define('_ABR_MONDAY','2º F');
define('_ABR_TUESDAY','3º F');
define('_ABR_WEDNESDAY','4º F');
define('_ABR_THURSDAY','5º F');
define('_ABR_FRIDAY','6º F');
define('_ABR_SATURDAY','Sáb');
define('_ABR_SUNDAY','Dom');

define('_BWEL','Bem Vindo');
define('_BPM','Mensagens Privadas');
define('_BUNREAD','Por Lêr');
define('_BREAD','Lida(s)');
define('_BMEMP','Membros');
define('_BLATEST','Ultimo');
define('_BTD','Hoje');
define('_BYD','Ontem');
define('_BOVER','Total');
define('_BVISIT','Pessoas Ligadas');
define('_BVIS','Visitantes');
define('_BMEM','Membros');
define('_BTT','Total');
define('_BON','Online agora');
define('_BREG','Registe-se');
define('_BROADCAST','Exponha a sua mensagem pública');
define('_BROADCASTFROM','Mensagem Pública de');
define('_TURNOFFMSG','Desligar Mensagens Publicas');
define('_JOURNAL','Diário');
define('_READMYJOURNAL','Leia o meu diário');
define('_ADD','Adicionar');
define('_YES','Sim');
define('_NO','Não');
define('_INVISIBLEMODULES','Módulos Invisíveis');
define('_ACTIVEBUTNOTSEE','(Link activo mas invisivel)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Monitor');
define('_UM_F','Falha no contacto do serviço de updates. Por favor volte mais tarde.');
define('_UM_G','Está a usar a ultima versão de Dragonfly');
define('_UM_R','Por favor<a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s ');

define('_TEAM','A equipa');
define('_LINKAPPROVEDMSG','Parabens! O link que submeteu foi aprovado, por favor volte ao link original.');
define('_MODREQLINKS','Links Modificados');
define('_BROKENLINKS','Links Quebrados');
define('_MODREQDOWN','Downloads Modificados');
define('_BROKENDOWN','Downloads Quebrados');
define('_PAGEGENERATION','Geração da Página:');
define('_SECONDS','Segundos');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Tem 1 Nova Mensagem Privada');
define('_NEWPMSG','Novas Mensagens privadas');
define('_CONTRIBUTEDBY','Contribuição de');
define('_CHAT','Conversa');
define('_REGISTERED','Registado');
define('_CHATGUESTS','Convidados');
define('_USERSTALKINGNOW','Utilizadoes conversando');
define('_ENTERTOCHAT','Entrar na Conversa');
define('_CHATROOMS','Salas disponíveis');
define('_ALLTOPICS','Todos os Tópicos');
define('_ASSOTOPIC','Tópicos Associados');
define('_HELLO','Olá');
define('_ALL','Todos');
define('_URL','URL');
define('_SUBJECT','Assunto');
define('_PREVIEW','Rever');
define('_SEND','Send');
define('_ANONYMOUS','Anónimo');
define('_BREADCRUMB', 'Breadcrumb Delimiter, appears in page titles between the words');
define('_BC_DELIM',isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&gt;&gt;');
define('_RESET','Reset');
define('_AT','às');
define('_LASTMSGS','Últimas %s Mensagens no Forum');
define('_LASTPOSTBY','Última Mensagem de %1$s em %2$s às %3$s ');
define('_PRINTER','Imprimir');

define('_CREDITS_TITLE','Créditos');
define('_CREDITS_PRODUCT','Produto');
define('_CREDITS_DESC','Descrição');
define('_CREDITS_AUTHORS','Autor');

define('_PP_TITLE','Política de Privacidade');
define('_PP_MODIFY','Modificar esta Mensagem');

define('_SENDEREMAIL','Email');
define('_SENDERNAME','Nome');
define('_RECIPIENTNAME','Nome do Destinatário');
define('_RECIPIENTEMAIL','Email do Destinatário');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundante');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interessante');
define('_REASONS_7','Informativo');
define('_REASONS_8','Divertido');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','My Account Tools');
define('_TB_TASKS','Tarefas');
define('_TB_INFO','Informação');
define('_TB_PROFILE_INFO','Perfil Público');
define('_TB_EDIT_PROFILE','Informação do meu Perfil');
define('_TB_EDIT_REG','Detalhes do registo');
define('_TB_EDIT_PRIVATE','Minha Informação Privada');
define('_TB_EDIT_AVATAR','Avatar');
define('_TB_DELETE','Remover a Minha Conta');
define('_TB_CONFIG','Configuração');
define('_TB_EDIT_PREFS','Preferências');
define('_TB_EDIT_HOME','Preferências de Homepage');
define('_TB_EDIT_COMM','Preferências de Comentários');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','Minha Galeria');
define('_TB_PERSONAL_JOURNAL','Meu Blog');
define('_TB_PRIVMSGS','Mensagens Privadas');
define('_TB_PRIVMSGS_INBOX','Caixa de Entrada');
define('_TB_PRIVMSGS_OUTBOX','Caisa de Saída');
define('_TB_PRIVMSGS_SENTBOX','Enviadas');
define('_TB_PRIVMSGS_SAVEBOX','Gravadas');
define('_TB_PRIVMSGS_SEND','Enviar Mensagem');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Informação do user');
define('_SECURITYCODE','Código de Segurança');
define('_TYPESECCODE','Type Code');
define('_MEMBERSOPTIONS','Opções de Membro');
define('_READSEND','Ler as minhas mensagens privadas. Enviar mensagens para outros.');
define('_INBOX','Caixa de mensagens recebidas');
define('_NEW','Novo');
define('_ACCOUNTOPTIONS','A minha conta. Actualizar as preferências e ler as minhas mensagens.');
define('_LOGOUTACCT','Sair da minha conta.');
define('_LOGOUTADMINACCT','Sair da conta de admin.');
define('_BLOGIN','Minha Conta');
define('_BFLOGIN','O meu perfil');
define('_BHID','Escondido');
define('_WHOWHERE','Quem Está Onde');
define('_STAFFONL','Membros online');
define('_STAFFNONE','Nenhum membro online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Comunidade');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Content');
define('_coppermineLANG','Galeria');
define('_CPGlangLANG','Ajuda e Tradução');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Enciclopédia');
define('_ForumsLANG','Forums');
define('_ContactLANG','Contacta-nos');
define('_FAQLANG','FAQ - Help');
define('_Members_ListLANG','Lista de membros');
define('_NewsLANG','Noticias');
define('_ReviewsLANG','Revisões');
define('_SearchLANG','Procurar');
define('_StatisticsLANG','Estatisticas');
define('_Stories_ArchiveLANG','Arquivos');
define('_Submit_NewsLANG','Escrever noticia');
define('_SurveysLANG','Enquetes');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Topics');
define('_Private_MessagesLANG','As minhas mensagens privadas');
define('_Tell_a_FriendLANG','Tell a Friend');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','A minha conta');
define('_CPG_EventsLANG','Calendário');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Amigos');
define('_STORE','Loja');
define('_PRODUCTS','Produtos');
define('_DONATE','Donate');
define('_HELP','Ajuda');
define('_GALLERIES','Galerias');
define('_DOCS','Documentação');
define('_RULES','Regras e regulamento');
define('_MENU','Menu principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','You must be a<br /><strong>registered user</strong><br />to receive our newsletter');
define('_NEWSLETTERBLOCKSUBSCRIBE','Subscribe');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Unsubscribe');
define('_NEWSLETTERBLOCKREGISTERNOW','Regista-te agora!!');
/* END Newsletter Block */

/* START class phpmailer lang array */
$PHPMAILER_LANG = array();
$PHPMAILER_LANG['provide_address'] = 'Você deve fornecer pelo menos um endereço de destinatário de email.';
$PHPMAILER_LANG['mailer_not_supported'] = ' mailer não suportado.';
$PHPMAILER_LANG['execute'] = 'Não foi possível executar: ';
$PHPMAILER_LANG['instantiate'] = 'Não foi possível instanciar a função mail.';
$PHPMAILER_LANG['authenticate'] = 'Erro de SMTP: Não foi possível autenticar.';
$PHPMAILER_LANG['from_failed'] = 'Os endereços de rementente a seguir falharam: ';
$PHPMAILER_LANG['recipients_failed'] = 'Erro de SMTP: Os endereços de destinatário a seguir falharam: ';
$PHPMAILER_LANG['data_not_accepted'] = 'Erro de SMTP: Dados não aceitos.';
$PHPMAILER_LANG['connect_host'] = 'Erro de SMTP: Não foi possível conectar com o servidor SMTP.';
$PHPMAILER_LANG['file_access'] = 'Não foi possível acessar o arquivo: ';
$PHPMAILER_LANG['file_open'] = 'Erro de Arquivo: Não foi possível abrir o arquivo: ';
$PHPMAILER_LANG['encoding'] = 'Codificação desconhecida: ';
/* END class phpmailer lang array */

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_SAVECHANGES','Salvar alterações');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Lingua');
define('_FUNCTIONS','Funções');
define('_SHOW','Mostrar');
define('_TO','To');
define('_DAY','Day');
define('_LAST','Last');
define('_ACTIVE','Active');
define('_DEACTIVATE','Deactivate');
define('_INACTIVE','Inactive');
define('_ACTIVATE','Activate');
define('_ACTIVATE2','Activate?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Show this to');
define('_MVADMIN','Apenas admins');
define('_MVUSERS','Apenas utilizadores registados');
define('_MVANON','Anonymous Users Only');
define('_MVALL','Todos as pessoas');
define('_IMAGE','Imagem');
define('_GO','Go!');
define('_OPTION','Opção');
define('_CATEGORY','Categoria');
define('_SUBCATEGORY','Sub-categoria');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','Dias');
define('_WARNING','Warning');
define('_POLLTITLE','Titulo da Votação');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','Adicionar a nova categoria');
define('_PAGEBREAK','If you want multiple pages you can write <b>&lt;!--pagebreak--&gt;</b> where you want to cut.');
define('_SIGNATURE','Assinatura');
define('_DESCRIPTION','Descrição');
define('_EDITCATEGORY','Editar Categoria');
define('_IN','em');
define('_DESCRIPTION255','Descrição: (caracteres máximos: 255)');
define('_MODCATEGORY','Editar Categoria');
define('_SUBMITTER','Submitter');
define('_VISIT','Visit');
define('_EXTENDEDTEXT','Extended Text');
define('_CHECKCATEGORIES','Verificar Categorias');
define('_INCLUDESUBCATEGORIES','(include Sub-Categories)');
define('_CHECKSUBCATEGORIES','Check Sub-Categories');
define('_VALIDATELINKS','Validar Links');
define('_FAILED','Failed!');
define('_BEPATIENT','(please be patient)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ignorar');
define('_HITS','Hits');
define('_FILESIZE', 'Tamanho do ficheiro');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Quem está online');
define('_NP_ADMIN','Notepad');
define('_NP_LOCKED','The notepad has been locked<br />Only a root administrator (super user) can unlock it');
define('_NP_SAVE','Save Notes');
define('_NP_UNLOCK','Unlock Notepad');
define('_NP_LOCK','Lock Notepad');
// news
define('_STICKY','Sticky Articles');
define('_ARTICLEUP','Move article up');
define('_ARTICLEDOWN','Move article down');
define('_UNSTICK','Unstick');
define('_STICK','Sticky');
define('_AUTOMATEDARTICLES','Scheduled Articles');
define('_STORYID','Story ID');
define('_CURRENTPOLL','Current Survey');

// admin.php
define('_ADMINISTRATION','Administration');
define('_NOADMINYET','There are no administrator accounts yet, proceed to create the super user...');
define('_CREATEUSERDATA','Would you like to create a regular user with the same data?');
define('_ADMINLOGIN','Login to administration menu');
define('_ADMINID','Nickname');
define('_EMAIL','Email');
define('_SUBMIT','Submit');
define('_YOUARELOGGEDOUT','The system has successfully logged you out');
define('_PASSWDNOMATCH','As passwords não são iguais. Por favor volta a escreve-la.');
define('_LOGIN_REMEMBERME','Lembrar-me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Por favor inclui pelo menos um número, um maiuscula e um minuscula na tua password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Nome');
define('_REQUIRED','(required)');
define('_MODIFYINFO','Modify Info');
define('_DELAUTHOR','Delete Administrator');
define('_ADDAUTHOR','Add a new administrator');
define('_PERMISSIONS','Permissions');
define('_SUPERUSER','Super User');
define('_SUPERWARNING','Warning: If Super User is checked, the administrator will be granted full permissions');
define('_ADDAUTHOR2','Add Administrator');
define('_RETYPEPASSWD','Retype Password');
define('_FORCHANGES','(For Changes Only)');
define('_COMPLETEFIELDS','You must complete all compulsory fields');
define('_CREATIONERROR','Creation of new administrator failed');
define('_AUTHORDEL','Delete Administrator');
define('_PUBLISHEDSTORIES','This administrator has published stories');
define('_SELECTNEWADMIN','Please choose an existing administrator to assign the stories to');
define('_GODNOTDEL','The super user cannot be deleted!');
define('_MAINACCOUNT','Super User *');
define('_USERS','Users');

// banners.php
define('_BANNERSADMIN','Banners Administration');
define('_DELETEBANNER','Delete Banner');
define('_SURETODELBANNER','Are you sure you want to delete this banner?');
define('_EDITBANNER','Edit Banner');

// blocks.php
define('_BLOCKSADMIN','Blocks Administration');
define('_CENTER','Center');
define('_CENTERUP','Center Up');
define('_CENTERDOWN','Center Down');
define('_BLOCKFILE','(Block File)');
define('_BLOCKFILE2','FILE');
define('_BLOCKSYSTEM','SYSTEM');
define('_ADDNEWBLOCK','Add a New Block');
define('_RSSFILE','RSS/RDF File URL');
define('_ONLYHEADLINES','(Only for headlines)');
define('_REFRESHTIME','Refresh Time');
define('_CREATEBLOCK','Create Block');
define('_EDITBLOCK','Edit Block');
define('_BLOCK','Block');
define('_SAVEBLOCK','Save Block');
define('_BLOCKACTIVATION','Block Activation');
define('_BLOCKPREVIEW','This is the preview for');
define('_WANT2ACTIVATE','Would you like to activate this block?');
define('_ARESUREDELBLOCK','Are you sure you want to remove');
define('_BLOCKUP','Move block up');
define('_BLOCKDOWN','Move block down');
define('_BLOCKTOP','Move block to top');
define('_BLOCKBOTTOM','Move block to bottom');
define('_TITLE','Title');
define('_POSITION','Position');
define('_WEIGHT','Weight');
define('_STATUS','Status');
define('_LEFTBLOCK','Left Block');
define('_LEFT','Left');
define('_RIGHTBLOCK','Right Block');
define('_RIGHT','Right');
define('_TYPE','Type');
define('_CUSTOM','Custom');
define('_FILENAME','Filename');
define('_FILEINCLUDE','If you use this option, ignore the Content and Refresh time fields');
define('_VISIBLEINMODULES', 'Visible in modules');

// comments.php
define('_REMOVECOMMENTS','Delete Comments');
define('_SURETODELCOMMENTS','Are you sure you want to delete the selected comment and all replies associated with it?');

// database.php
define('_SAVEDATABASE','Backup');

// encyclopedia.php, content.php
define('_CURRENTSTATUS','Current Status');
define('_ACTIVATEPAGE','Activate This Page?');

// history.php
define('_EPHEMADMIN','Today in History');
define('_ADDEPHEM','Add a new entry');
define('_EPHEMDESC','Entry description');
define('_EPHEMMAINT','Entry Lookup');
define('_EPHEMEDIT','Edit Entry');
define('_EPHEMDELETE','Delete Entry');

// headlines.php
define('_RSSFAIL','There seems to be a problem with the URL for this RSS feed');
define('_RSSTRYAGAIN','Please check the URL and RSS filename and try again');
define('_RSSCONTENT','(RSS/RDF Content)');
define('_IFRSSWARNING','If you supply a URL, the content you supply will be ignored');
define('_SETUPHEADLINES','Select \'Custom\' and supply the URL to the RSS feed, or just select a site from the dropdown to fetch news headlines');
define('_HEADLINESADMIN','Headlines Administration');
define('_ADDHEADLINE','Add Headline');
define('_EDITHEADLINE','Edit Headlines');
define('_SURE2DELHEADLINE','Are you sure you want to delete this headline?');

// messages.php
define('_MESSAGESADMIN','Messages Administration');
define('_MESSAGETITLE','Title');
define('_MESSAGECONTENT','Content');
define('_ALLMESSAGES','Overview messages');
define('_EDITMSG','Edit message');
define('_ADDMSG','Add message');
define('_REMOVEMSG','Are you sure that you want to delete this message?');
define('_CHANGEDATE','Reset start date to today?');
define('_IFYOUACTIVE','If you activate this message now, the start date will be set to today');

// modules.php
define('_MODULESADMIN','Modules Administration');
define('_HOMECONFIG','Home Configuration');
define('_MODULESADDONS','Modules and Addons');
define('_INHOME','Set as Home Module');
define('_MODULEHOMENOTE','New modules added to the /modules/ folder will automatically be added to the system<br />Removing a module\'s folder from this directory will automatically remove the module from the system<br /><br />The module with a bold title denotes the module set as my homepage<br />This module cannot be deactivated or restricted to certain users');
define('_PUTINHOME','Set as Home');
define('_SURETOCHANGEMOD','Are you sure you want to change your Homepage from');
define('_NOTINMENU','[ <strong>&middot;</strong> ] denotes a module hidden from view in the Modules block');
define('_SHOWINMENU','Show in menu?');
define('_CUSTOMTITLE','Custom Title');
define('_MODULEEDIT','Modules Edit');
define('_VERSION','Version');
define('_UPGRADE','Upgrade to %s');
define('_DBSIZE','DB size');
define('_CVS_EXPLAIN','This module appears to be able to receive updates through our CVS (Concurrent Versioning System). With CVS, you are able to receive the latest updates of a file very easily, but the latest version of a file may contain bugs as it is likely not part of our stable release.<br /><br />If you are familiar with PHP, you can update this module with the latest CVS files by using the link below. <strong>Backup all files first!</strong>');
define('_CVS_UPDATE','Update CVS files');
define('_LOADNEWCVS', 'Load new module from CVS');
define('_SUREALL', 'Are you sure to %s all %s');
define('_UPGRADEFAILED', 'Upgrade failed');
define('_EXAMPLE', 'Usage example');

// newsletter.php
define('_FROM','From');
define('_STAFF','Staff');
define('_NL_RECIPS','Recipients');
define('_SUBSCRIBEDUSERS','Subscribed Members');
define('_NL_ALLUSERS','All Members');
define('_NL_ADMINS','Administrators');
define('_NL_REGARDS','Best Regards');
define('_DISCARD','Discard');
define('_REVIEWTEXT','Please look over your message and check for typos');
define('_MANYUSERSNOTE','Due to the large number of users that will receive this newsletter, the task may take several minutes to complete<br />Please be patient!');
define('_NL_NOUSERS','The group selected to receive this newsletter has zero users<br />Please go back and select a different group');
define('_NUSERWILLRECEIVE','users will receive this newsletter');
define('_NLUNSUBSCRIBE',"We sent you this message because you have selected to receive newsletters from our site\n\nYou can choose to unsubscribe from our mailings at any time by following <a href=\"".getlink('Your_Account&amp;edit=prefs', true, true)."\">this</a> link\n\nIf you would like further assistance, please send an email to <a href=\"mailto:".$MAIN_CFG['global']['adminmail']."\">our administrator</a>");
define('_NEWSLETTERSENT','The newsletter has been sent');

// referers.php
define('_WHOLINKS','Who\'s linking to our site?');
define('_DELETEREFERERS','Delete Referers');

// settings.php
define('_SYSTEM','System');
define('_SITE_DOMAIN','Site Domain');
define('_SITE_PATH','Site Path');
define('_ACTIVATE_LEO','Activate Link Engine Optimization (LEO)');
define('_BLOCK_FRAMES','Block frames');
define('_FOOTER','Footer');
define('_DEBUG', 'Debug');
define('_SITECONFIG','Web Site Configuration');
define('_GENSITEINFO','General Site Information');
define('_SITENAME','Site Name');
define('_SITEURL','Site URL');
define('_SITELOGO','The filename of my site\'s logo (stored in /images)');
define('_SITESLOGAN','My site\'s slogan');
define('_STARTDATE','When my site was founded');
define('_ADMINEMAIL','Administrator Email');
define('_ITEMSTOP','No. of items to rank in Top module');
define('_STORIESHOME','No. of stories to show on main news page');
define('_OLDSTORIES','No. of stories to show in Old Articles block');
define('_ALLOWANONPOST','Allow unregistered users to post news articles');
define('_DEFAULTTHEME','The default theme for my site');
define('_SHOWSEC','Show security code');
define('_TOOLTIPS','Show tooltips on designated fields');
define('_UM_TOGGLE','Enable Update Service');
define('_UM_EXPLAIN','This will retrieve two pieces of information from our website, dragonflycms.org: the current build of Dragonfly, and any important messages that pertain to your version of Dragonfly. The only data sent to our site is your Dragonfly version number; we do <strong>not</strong> log these requests to our server.');
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
define('_MULTILINGUALOPT','Language System');
define('_SELLANGUAGE','Default language for my site');
define('_LOCALEFORMAT','Local time format');
define('_ACTMULTILINGUAL','Activate site-wide multi-lingual features');
define('_ACTUSEFLAGS','Use flags instead of a drop-down box');
// banners
define('_BANNERSOPT','Banner System');
define('_ACTBANNERS','Activate the banner system');
// footer
define('_FOOTERMSG','Page Footer (optional)');
define('_FOOTERLINE1','Footer, line one');
define('_FOOTERLINE2','Footer, line two');
define('_FOOTERLINE3','Footer, line three');
// backend
define('_BACKENDCONF','Syndication');
define('_BACKENDTITLE','Feed title');
define('_BACKENDLANG','Feed language');
// mail stories
define('_MAIL2ADMIN','Pending News Submissions');
define('_NOTIFYSUBMISSION','Notify administrator of pending articles');
define('_EMAIL2SENDMSG','Recipient email address');
define('_EMAILSUBJECT','Subject of email');
define('_EMAILMSG','Message body of email');
define('_EMAILFROM','Sender email address');
// comments
define('_COMMENTSOPT','Comments');
define('_COMMENTSLIMIT','Truncate comments after __ characters');
define('_COMMENTSMOD','Allow moderations of comments');
define('_MODADMIN','Yes, by administrators');
define('_MODUSERS','Yes, by users');
define('_NOMOD','No, do not use moderation');
// adminmenu
define('_GRAPHICOPT','Administration Menu Layout');
define('_BOTH','Both');
define('_GRAPHICAL','Graphical');
define('_SIDEBLOCK','Side-block');
// miscellaneous
define('_MISCOPT','Miscellaneous');
define('_ACTIVATEHTTPREF','Activate logging of HTTP referers');
define('_MAXREF','Set limit on number of referers');
define('_COMMENTSPOLLS','Activate the comment system in surveys');
define('_COMMENTSARTICLES','Activate the comment system in news articles');
define('_PAGE','Page');
define('_PAGES','Pages');
define('_TOGGLE','Toggle Content');

// censor
define('_CENSOROPTIONS','Censor');
define('_CENSORMODE','Mode for matching');
define('_NOFILTERING','No filtering');
define('_EXACTMATCH','Exact match');
define('_MATCHBEG','Match at beginning of text');
define('_MATCHANY','Match anywhere in the text');
define('_CENSORREPLACE','Replacement for restricted word');
// email
define('_EMAILOPTIONS','Mail');
define('_ALLOW_HTML_EMAIL','Allow the use of HTML in email');
define('_USE_SMTP','Use SMTP server as opposed to PHP\'s mailer');
define('_SMTP_HOST','SMTP host address (smtp.example.com)');
define('_USE_SMTP_AUTH','Does server require SMTP authorization');
define('_SMTP_USER_NAME','SMTP username');
define('_SMTP_USER_PASS','SMTP password');

// cpg_adminmenu.php
define('_ADMINMENU','Administration Menu');
define('_ADMINLOGOUT','Log Out');
define('_AMENU0','System');
define('_AMENU1','General');
define('_AMENU2','Members');
define('_AMENU3','Messages');
define('_AMENU4','Forums');
define('_AMENU5','Informative');
define('_AMENU6','Linking');
define('_AMENU7','Commerce');
define('_AMENU8','Multimedia');
define('_AMENU9','Modules');
define('_BMENU1','Help');
// menu items
define('_CACHE','Cache');
define('_PREFERENCES','Main Settings');
define('_DATABASE','Database');
define('_BLOCKS','Blocks');
define('_MODULES','Modules');
define('_EDITADMINS','Admins');
define('_MESSAGES','Messages');
define('_BANNERS','Banners');
define('_HTTPREFERERS','ReferÊncias de HTTP');
define('_EDITUSERS','Members');
define('_USERSCONFIG','Members Config');
define('_NEWSLETTER','Newsletter');
define('_SUBMISSIONS','Envios');
define('_ADDSTORY','Adicionar História');
define('_TOPICS','Tópicos');
define('_ADMPOLLS','Surveys');
define('_EPHEMERIDS','Eventos');
define('_REVIEWS','Revisões');
define('_ENCYCLOPEDIA','Enciclopédia');
define('_SURVEYS','Enquetes');
define('_SECTIONS','Seções');
define('_ARTICLES','Artigos');
define('_FAQ','FAQ');
define('_DOWNLOAD','Downloads');
define('_WEBLINKS','Links da Web');
define('_CONTENT','Conteúdo');
define('_SYSINFO','System Info');
define('_REPORTABUG','Reportar um Bug');
//coppermine admin
define('_W_INSTALL','Qual instalação?');
define('_W_PAGE','Qual página?');
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
define('_ERROR','ERRO');
define('_SEC_ERROR','Erro de Segurança');
define('_ERROR_NOT_SET','%s não foi configurado');
define('_ERROR_NO_POST','Poster de outro host não é permitido');
define('_ERROR_NO_GET','Pedidos de GET não são permitidos para essa função...');
define('_ERROR_BAD_CHAR','Os caracteres que voce tentou incluir no seu pedido são proibidos');
define('_ERROR_BAD_FORMAT','The %s format is not valid.');
define('_ERROR_BAD_LINK','Você tentou acessar estra pagina de um link problemático');
define('_ERROR_NONE_TO_DISPLAY','Não existe %s para mostrar');
define('_ERROR_DELETE_CONF','Você tem certeza que que quer deletar %s?');
define('_ERROR_NO_EXIST','%s não existe');
define('_ERROR_ALREADYEXIST','%s already exists');
define('_TASK_COMPLETED','Operação concluída!');
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
