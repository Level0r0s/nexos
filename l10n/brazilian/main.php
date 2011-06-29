<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/brazilian/main.php,v $
  $Revision: 9.32 $
  $Author: estlane $
  $Date: 2009/03/23 00:30:45 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $MAIN_CFG;
define('_BROWSER_LANGCODE','pt-br');

// Translators: only change this link if you have support documentation to offer on your community site, if you have one
define('_HELP_LINK','http://dragonflycms.org/Wiki.html');

define('_DATESTRING','%A, %B %d @ %T %Z');
define('_DATESTRING2','%A, %B %d');
define('_DATESTRING3','%d-%b-%Y');
//%1 is replaced by the month name, %2 day, %3 year
define('_DATESTRING4','%1$s, %2$s %3$s');

define('_NEXTPAGE','Próxima página');
define('_PREVIOUSPAGE','Página anterior');

define('_TEXT_DIR','ltr');
define('_ALIGN_TEXT','left');
define('_SEARCH','Buscar');
define('_LOGIN','Login');
define('_WRITES','Escrever');
define('_POSTEDON','Enviado por');
define('_NICKNAME','Apelido');
define('_PASSWORD','Senha');
define('_WELCOMETO','Bem-vindo(a)');
define('_EDIT','Editar');
define('_DELETE','Apagar');
define('_POSTEDBY','Enviado por');
define('_READS','lido');
define('_GOBACK','[ '.(isset($_SERVER['HTTP_REFERER']) ? '<a href="'.str_replace('&', '&amp;', $_SERVER['HTTP_REFERER']).'">Voltar</a>' : '<a href="javascript:history.go(-1)">Voltar</a>').' ]');
define('_COMMENTS','comentários');
define('_PASTARTICLES','Artigos Anteriores');
define('_OLDERARTICLES','Artigos muito antigos');
define('_BY','por');
define('_ON','em');
define('_LOGOUT','Sair');
define('_WAITINGCONT','Conteudo em Aguardo');
define('_WREVIEWS','Aguardando Revisão');
define('_WLINKS','Aguardando Links');
define('_ONEDAY','Em um dia como hoje...');
define('_ASREGISTERED','Não tem uma conta ainda? Você <a href="'.getlink("Your_Account").'">criar uma agora</a>. Como usuário registrado você dispões de várias configurações pessoais.');
define('_MENUFOR','Menu');
define('_NOBIGSTORY','Não existe ainda uma Boa História para hoje');
define('_BIGSTORY','Artigo mais lido de hoje:');
define('_SURVEY','Pesquisa');
define('_POLLS','Votação');
define('_PCOMMENTS','Comentários:');
define('_RESULTS','Resultados');
define('_HREADMORE','leia mais...');
define('_CURRENTLY','Existem atualmente,');
define('_GUESTS','visitante(s) e');
define('_MEMBERS','usuário(s) online');
define('_YOUARELOGGED','Você está logado como');
define('_YOUHAVE','Você tem');
define('_PRIVATEMSG','Mensagens Privativas.');
define('_YOUAREANON','Você é visitante. Registre-se gratuitamente <a href="'.getlink("Your_Account").'">aqui</a>');
define('_NOTE','Nota:');
define('_ADMIN','Admin.');
define('_WERECEIVED','Recebemos');
define('_PAGESVIEWS','páginas visitadas desde');
define('_TOPIC','Tópico');
define('_UDOWNLOADS','Downloads');
define('_VOTE','Vote');
define('_VOTES','Votos');
define('_MVIEWADMIN','Visível somenta para administradores');
define('_MVIEWUSERS','Ver:  Somente Usuários');
define('_MVIEWANON','Ver: Somente visitantes');
define('_MVIEWALL','Ver: Todos os visitantes');
define('_EXPIRELESSHOUR','Expira: Em menos de 1 hora');
define('_EXPIREIN','Expira em');
define('_UNLIMITED','Ilimitado');
define('_HOURS','Horas');
define('_RSSPROBLEM','Atualmente há um problema com as Notícias deste site');
define('_SELECTLANGUAGE','Selecionar Idioma');
define('_SELECTGUILANG','Selecionar a Interface do Idioma:');
define('_NONE','Nenhum(a)');
define('_BLOCKPROBLEM','<center>No momento há um problema com este bloco.</center>');
define('_BLOCKPROBLEM2','<center>No momento não há conteúdo para ser mostrado neste bloco.</center>');
define('_MODULENOTACTIVE','Desculpe-nos, este Módulo não está ativo!');
define('_NOACTIVEMODULES','Módulos Inativos');
define('_MODULENOEXIST','We\'re sorry, but the requested file, %s, does not appear to exist');
define('_FORADMINTESTS','(para testes)');
define('_BBFORUMS','Foros');
define('_ACCESSDENIED','Acesso Negado!');
define('_RESTRICTEDAREA','Você está acessando uma área restrita.');
define('_MODULEUSERS','Desculpe-nos, mas esta seção do Site é exclusiva para Usuários Registrados <br /><br />Você pode registrar-se gratuitamente clicando <a href="'.getlink('Your_Account&amp;file=register').'">aqui</a>, e então você terá acesso a esta e outras seções exclusivas. Obrigado.<br /><br />');
define('_MODULEUSERS2','You can register for free by following <a href="'.getlink('Your_Account&amp;file=register').'">this</a> link, thus granting you permission to access this area of our site.<br /><br />Thank you for your understanding');
define('_MODULESADMINS','Desculpe-nos, mas esta seção é somentoe para Administradores.<br /><br />');
define('_MODULESGROUPS','group access required');
define('_HOME','Home');
define('_HOMEPROBLEM','Oooops... Há um problema aqui: Não há uma homepage para ser mostrada!!!');
define('_ADDAHOME','Adicionar um módulo na homepage');
define('_HOMEPROBLEMUSER','Nesse momento há um problema com a homepage. Por favor, cheque-o e volte mais tarde.');
define('_MORENEWS','Mais na Seção de notícias');
define('_ALLCATEGORIES','Todas as Categorias');
define('_SPAMGUARDPROTECTED','SpamGuard bloqueou o envio deste email');
define('_M_CHARS','Máximo de %s caracteres');

define('_SYS_MESSAGE','Mensagem do Sistema');
define('_SYS_MESSAGES','Mensagens do Sistema');
define('_SYS_MAINTENANCE','Você está rodando sob o modo de manutenção');
define('_SYS_DEMO','Você está rodando sob modo demonstração de Administração<br />Você não pode fazer nenhuma mudança no banco de dados<br /><a href="'.adminlink('logout').'">Sair</a>');

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
define('_JULY','Jullo');
define('_AUGUST','Agosto');
define('_SEPTEMBER','Setembro');
define('_OCTOBER','Outubro');
define('_NOVEMBER','Novembro');
define('_DECEMBER','Dezembro');

define('_MONDAY','Segundda');
define('_TUESDAY','Terça');
define('_WEDNESDAY','Quarta');
define('_THURSDAY','Quinta');
define('_FRIDAY','Sexta');
define('_SATURDAY','Sábado');
define('_SUNDAY','Domingo');
//three letter abbrev.
define('_ABR_MONDAY','Seg');
define('_ABR_TUESDAY','Ter');
define('_ABR_WEDNESDAY','Qua');
define('_ABR_THURSDAY','Qui');
define('_ABR_FRIDAY','Sex');
define('_ABR_SATURDAY','Sáb');
define('_ABR_SUNDAY','Dom');

define('_BWEL','Bem-vindo(a)');
define('_BPM','Mensagens privadas');
define('_BUNREAD','Não lida(s)');
define('_BREAD','Lida(s)');
define('_BMEMP','Sociedade');
define('_BLATEST','Último(a)');
define('_BTD','Novo(s) hoje');
define('_BYD','Novo(s) ontem');
define('_BOVER','Total');
define('_BVISIT','Pessoas on-line');
define('_BVIS','Visitante(s)');
define('_BMEM','Membro(s)');
define('_BTT','Total');
define('_BON','on-line agora');
define('_BREG','Registre');
define('_BROADCAST','Transmissão de mensagem pública');
define('_BROADCASTFROM','Mensagem pública de');
define('_TURNOFFMSG','Desligar Mensagem pública');
define('_JOURNAL','Jornal');
define('_READMYJOURNAL','Leia meu jornal');
define('_ADD','Adicionar');
define('_YES','Sim');
define('_NO','Não');
define('_INVISIBLEMODULES','Módulos invisíveis');
define('_ACTIVEBUTNOTSEE','(Links ativos, porém invisíveis)');
define('_BOTS','Bots');

define('_UM','Dragonfly Update Service');
define('_UM_F','Falha ao cantactar o serviço de update. Tente novamente mais tarde.');
define('_UM_G','Você está usando a última versão do Dragonfly');
define('_UM_R','Please <a href="%2$s" target="_blank">upgrade</a> to Dragonfly %1$s');

define('_TEAM','Equipe');
define('_LINKAPPROVEDMSG','Congratulações! O link da web que você envio foi aprovado, por favor link um retorno para nós.');
define('_MODREQLINKS','Mod. Links');
define('_BROKENLINKS','Links não funcionando');
define('_MODREQDOWN','Mod. Downloads');
define('_BROKENDOWN','Downloads não funcionando');
define('_PAGEGENERATION','Tempo para gerar esta página:');
define('_SECONDS','segundos');
// http://php.net/sprintf#AEN134707
define('_PAGEFOOTER','Page Generation in %1$s seconds and %2$s DB Queries in %3$s seconds');
define('_YOUHAVEONEMSG','Você tem 1 nova mensagem particular');
define('_NEWPMSG','novas mensagens particulares');
define('_CONTRIBUTEDBY','Contribuição de');
define('_CHAT','Chat');
define('_REGISTERED','Registrados');
define('_CHATGUESTS','Convidados');
define('_USERSTALKINGNOW','usuários conversando agora');
define('_ENTERTOCHAT','Entrar no chat');
define('_CHATROOMS','Salas disponíveis');
define('_ALLTOPICS','Todos os tópicos');
define('_ASSOTOPIC','Tópicos associados');
define('_HELLO','Olá');
define('_ALL','All');
define('_URL','URL');
define('_SUBJECT','Assunto');
define('_PREVIEW','Previsão');
define('_SEND','Enviar');
define('_ANONYMOUS','Anônimo');
define('_BREADCRUMB', 'Breadcrumb Delimiter, separates words in pagetitles');
define('_BC_DELIM',''.isset($MAIN_CFG['global']['crumb']) ? $MAIN_CFG['global']['crumb'] : '&rsaquo;');//''. is for cpglang
define('_RESET','Reset');
define('_AT','at');
define('_LASTMSGS','Last %s Forum Messages');
define('_LASTPOSTBY','Last post by %1$s in %2$s on %3$s');
define('_PRINTER','Imprimir');

define('_CREDITS_TITLE','Créditos');
define('_CREDITS_PRODUCT','Produto');
define('_CREDITS_DESC','Descrição');
define('_CREDITS_AUTHORS','Autor(es)');

define('_PP_TITLE','Política de Privacidade');
define('_PP_MODIFY','Modifique esta mensagem');

define('_SENDEREMAIL','Endereço de e-mail do rementente');
define('_SENDERNAME','Nome do Remetente');
define('_RECIPIENTNAME','Recipient Name');
define('_RECIPIENTEMAIL','Recipient Email');

define('_REASONS_0','As Is');
define('_REASONS_1','Off Topic');
define('_REASONS_2','Flamebait');
define('_REASONS_3','Troll');
define('_REASONS_4','Redundant');
define('_REASONS_5','Insightful');
define('_REASONS_6','Interesting');
define('_REASONS_7','Informative');
define('_REASONS_8','Funny');
define('_REASONS_9','Overrated');
define('_REASONS_10','Underrated');

/* My Account Tools Block */
define('_TB_BLOCK','Ferramentas da minha conta');
define('_TB_TASKS','Tasks');
define('_TB_INFO','Informação');
define('_TB_PROFILE_INFO','My public profile');
define('_TB_EDIT_PROFILE','My profile information');
define('_TB_EDIT_REG','Meus detalhes de registro');
define('_TB_EDIT_PRIVATE','Minhas informações pessoais');
define('_TB_EDIT_AVATAR','Minha Imagem');
define('_TB_DELETE','Apagar minha conta');
define('_TB_CONFIG','Configuração');
define('_TB_EDIT_PREFS','Minhas preferências');
define('_TB_EDIT_HOME','Setagens da minha Página inicial');
define('_TB_EDIT_COMM','Setagens dos meus comentários');
define('_TB_PERSONAL','Personal');
define('_TB_PERSONAL_GALLERY','My gallery');
define('_TB_PERSONAL_JOURNAL','My journal');
define('_TB_PRIVMSGS','Mensagens Privadas');
define('_TB_PRIVMSGS_INBOX','Caixa de entrada');
define('_TB_PRIVMSGS_OUTBOX','Caixa de saída');
define('_TB_PRIVMSGS_SENTBOX','Mensagens enviadas');
define('_TB_PRIVMSGS_SAVEBOX','Mensagens salvas');
define('_TB_PRIVMSGS_SEND','Enviar Mensagem');
/* END My Account Tools Block */

/* ---- Begin modified block-User_Info english ----*/
define('_USER_INFO','Informações do Usuário');
define('_SECURITYCODE','Código de segurança');
define('_TYPESECCODE','Digite código de segurança');
define('_MEMBERSOPTIONS','Opção para membros');
define('_READSEND','Leia suas mensagens particulares. Envia mensagens para outros.');
define('_INBOX','Entrada');
define('_NEW','Novo');
define('_ACCOUNTOPTIONS','Sua conta. Alterar opções e ler suas mensagens.');
define('_LOGOUTACCT','Sair de sua conta.');
define('_LOGOUTADMINACCT','Sair da conta administrador.');
define('_BLOGIN','Sua conta');
define('_BFLOGIN','Forum Perfil');
define('_BHID','Invisível');
define('_WHOWHERE','Who Is Where');
define('_STAFFONL','Adminitrador Esta On-Lie');
define('_STAFFNONE','No staff members are online!');

/* For Multilingual Modules Block  */
define('_COMMUNITY','Comunidade');
define('_BlogsLANG','Blogs');
define('_ContentLANG','Conteúdo');
define('_coppermineLANG','Galeria de Fotos');
define('_CPGlangLANG','Ajuda e Tradução');
define('_DownloadsLANG','Downloads');
define('_EncyclopediaLANG','Enciclopédia');
define('_ForumsLANG','Community Forums');
define('_ContactLANG','Fale Conosco');
define('_FAQLANG','Perguntas Frequentes');
define('_Members_ListLANG','Lista de Membros');
define('_NewsLANG','Notícias');
define('_ReviewsLANG','Revisões');
define('_SearchLANG','Busca');
define('_StatisticsLANG','Estatisticas');
define('_Stories_ArchiveLANG','Arquivo de Notícias');
define('_Submit_NewsLANG','Enviar Notícias');
define('_SurveysLANG','Enquetes');
define('_TopLANG', 'Top '.$MAIN_CFG['global']['top']);
define('_TopicsLANG','Tópicos');
define('_Private_MessagesLANG','Minhas Mensagens Privadas');
define('_Tell_a_FriendLANG','Recomende-nos');
define('_Web_LinksLANG','Links');
define('_Your_AccountLANG','Minha conta');
define('_CPG_EventsLANG','Calendário');
//missing menu vars http://dragonflycms.org/Projects/bugs/id=582.html Thanks Pitcher
define('_LanguagesLANG', 'Languages!');
define('_SmiliesLANG', 'Smilies');
define('_GroupsLANG','Groups');
define('_RanksLANG', 'Ranks');
define('_HeadlinesLANG', 'Headlines');

define('_COMMUNICATION','Communication');
define('_FRIENDS','Amigos');
define('_STORE','Store');
define('_PRODUCTS','Produtos');
define('_DONATE','Doção');
define('_HELP','Ajuda');
define('_GALLERIES','Galerias');
define('_DOCS','Documentation');
define('_RULES','Rules & regulations');
define('_MENU','Menu Principal');

/* END Multilingual Modules Block */
/* START Newsletter Block */
define('_NEWSLETTERBLOCKSUBSCRIBED','You <strong>are</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKNOTSUBSCRIBED','You are <strong>not</strong> subscribed to<br />our newsletter');
define('_NEWSLETTERBLOCKREGISTER','Você deve ser um <br /><strong>usuário registrado</strong><br /> para  receber nossas notíciais');
define('_NEWSLETTERBLOCKSUBSCRIBE','Cadastrar');
define('_NEWSLETTERBLOCKUNSUBSCRIBE','Descadastrar');
define('_NEWSLETTERBLOCKREGISTERNOW','Registrar agora!');
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
define('_SAVECHANGES','Salvar alteraçoes');
define('_EDITOR_STYLE','Editor style');
define('_LANGUAGE','Idioma');
define('_FUNCTIONS','Funcões');
define('_SHOW','Exibir');
define('_TO','To');
define('_DAY','Dia');
define('_LAST','Last');
define('_ACTIVE','Ativo');
define('_DEACTIVATE','Desativar');
define('_INACTIVE','Inativo');
define('_ACTIVATE','Ativar');
define('_ACTIVATE2','Ativar?');
define('_VIEW','Visible to');
define('_VIEWPRIV','Show this to');
define('_MVADMIN','Apenas Administradores');
define('_MVUSERS','Apenas Usuários Registrados');
define('_MVANON','Apenas Usuários Anônimos');
define('_MVALL','Todos os visitantes');
define('_IMAGE','Image');
define('_GO','Go!');
define('_OPTION','Opção');
define('_CATEGORY','Categoria');
define('_SUBCATEGORY','Sub-categoria');
define('_ID','ID');
define('_EXPIRATION','Expiration');
define('_DAYS','Dias');
define('_WARNING','Warning');
define('_POLLTITLE','Poll Title');
define('_POLLEACHFIELD','Please enter each available option into a single field');
define('_ADDCATEGORY','Add a New Category');
define('_PAGEBREAK','If you want multiple pages you can write <b>&lt;!--pagebreak--&gt;</b> where you want to cut.');
define('_SIGNATURE','Signature');
define('_DESCRIPTION','Description');
define('_EDITCATEGORY','Edit Category');
define('_IN','in');
define('_DESCRIPTION255','Description: (255 characters max)');
define('_MODCATEGORY','Modify a Category');
define('_SUBMITTER','Submitter');
define('_VISIT','Visit');
define('_EXTENDEDTEXT','Extended Text');
define('_CHECKCATEGORIES','Check Categories');
define('_INCLUDESUBCATEGORIES','(include Sub-Categories)');
define('_CHECKSUBCATEGORIES','Check Sub-Categories');
define('_VALIDATELINKS','Validate Links');
define('_FAILED','Failed!');
define('_BEPATIENT','(please be patient)');
define('_VALIDATINGCAT','Validating Category (and all subcategories)');
define('_VALIDATINGSUBCAT','Validating Sub-Category');
define('_OK','Ok!');
define('_CHECK','Check');
define('_IGNORE','Ignore');
define('_HITS','Hits');
define('_FILESIZE', 'File Size');
define("_EZTHEREIS","There are");
define("_EZSUBCAT","sub-categories");
define("_EZATTACHEDTOCAT","under this category");
define("_EZBROKENLINKS","Broken Links");
define("_DELEZLINKCATWARNING","WARNING : Are you sure you want to delete this category ?<br /> You will delete all sub-categories and attached links as well !");

// index.php
define('_DEFHOMEMODULE','Default Homepage Module');
define('_MODULEINHOME','Module loaded in the homepage:');
define('_CHANGE','Change');
define('_WHOSONLINE','Who\'s Online');
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
define('_ADMINID','Apelido');
define('_EMAIL','Email');
define('_SUBMIT','Submit');
define('_YOUARELOGGEDOUT','The system has successfully logged you out');
define('_PASSWDNOMATCH','The passwords do not match. Please go back and re-enter them.');
define('_LOGIN_REMEMBERME','Remember me?');
define('_ADMINMENU_LOGOUT','Administration Menu Logout');
define('_PASSWORD_MALFORMED','Please include at least one number, one capital letter and one lowercase letter in your password');

// admins.php
define('_AUTHORSADMIN','Administrator Control');
define('_NAME','Name');
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
define('_BLOCKSYSTEM','SISTEMA');
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
define('_ARESUREDELBLOCK','Você tem certeza que deseja remover o bloco?');
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
define('_RSSFAIL','Parece haver um problema com a URL deste RSS!');
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
define('_CVS_EXPLAIN','Parece que este módulo tem um diretório CVS. CVS significa sistema de versão simultânea.<br />Com CVS você pode receber as últimas atualizações de arquivos facilmente.<br /><b>MAS</b> a versão recente de um arquivo, pode conter bugs, se não for oficial.<br />Se você estiver familiarizado com PHP pode fazer uma atualização cllicando no link abaixo.<br />Faça um backup antes!!!');
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
define('_EMAILSUBJECT','Assunto do Email');
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
define('_USE_SMTP','Usar servidor SMTP em vez do PHP\'s mailer');
define('_SMTP_HOST','Endereço do servidor SMTP (smtp.host.com.br)');
define('_USE_SMTP_AUTH','O servidor SMTP requer autenticação');
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
define('_ADDSTORY','Add Story');
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
define('_WEBLINKS','Links da Internet');
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
define('_ERROR_NO_POST','Envios por outro sevidor não são permitidos...');
define('_ERROR_NO_GET','Retornos de requisições não são permitidos por esta função...');
define('_ERROR_BAD_CHAR','Os caracteres que você tentou incluir no seu %s não são permitidos...');
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
