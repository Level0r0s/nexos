<?php
/**************************************************************  
  CPG-NUKE: Advanced Content Management System
********************************************
  A highly modified version of PHP-Nuke 6.5
  which is Copyright (c) 2002 by Francisco Burzi
  http://phpnuke.org
  Under the GNU General Public License version 2
***************************************************************
  Your_Account language file
  Last modification: 
  Now UTF-8 encoded 
  Francisco César Manhães francisco@quixote.com.br                                                    
  $Id: lang-brazilian.php,v 1.1 2004/07/16 03:57:08 akamu Exp $    
***************************************************************/

//lang_translation_info

define("_REQUIREADMIN", "Requer aprovação do Administrador");
define("_ACTALLOWREG", "Permite registro de usuário");
define("_ACTNOTIFYADD", "Notificar Administrado do Registro de Usuário");
define("_ACTALLOWDELETE", "Permite auto-exclusão do Usuário");
define("_ACTNOTIFYDELETE", "Notificar o Administrador da exclusão do Usuário");
define("_ACTALLOWTHEME", "Permite a seleção de Tema pelo Usuário");
define("_ACTALLOWMAIL", "Permite mudança de Email pelo Usuário");
define("_SERVERMAIL", "Servidor pode enviar mensagem");
define("_USEACTIVATE", "Use email Activation");
define("_USEREGISTERMSG", "Use Registration Agreement");

define("_MA_HIDDEN", "Oculto");
define("_MA_VISIBLE", "Visível");
define("_MA_REQUIRED", "Requerido");

// User Registration Config
define("_MA_PROFILE_INFO", "Informação de Perfil");
define("_MA_ADDITIONAL", "Informação adicional");
define("_MA_REALNAME", "Nome verdadeiro");
define("_MA_FAKEMAIL", "Email falso");
define("_MA_HOMEPAGE", "Home Page");
define("_MA_ICQ", "ICQ Number");
define("_MA_AIM", "AIM Address");
define("_MA_YIM", "Yahoo Messenger");
define("_MA_MSNM", "MSN Messenger");
define("_MA_LOCATION", "Minha localização");
define("_MA_OCCUPATION", "Minha ocupação");
define("_MA_INTERESTS", "Meus interesses");
define("_MA_SIGNATURE", "Minha assinatura");
define("_MA_EXTRAINFO", "Informação extra");
define("_MA_PREFERENCES", "Preferências");
define("_MA_TIMEZONE", "Fuso horário");
define("_MA_DATEFORMAT", "Formato da data");
define("_MA_RECEIVENEWSLETTER", "Receber boletim");
define("_MA_SHOWEMAIL", "Mostrar meu endereço de Email");
define("_MA_SHOWONLINE", "Mostrar meu status online");
define("_MA_ALLOWBBCODE", "Permitir sempre BBcode");
define("_MA_ALLOWHTML", "Sempre permitir HTML");
define("_MA_ALLOWSMILIES", "Sempre habilitar Smilies");
define("_MA_NOTIFYREPLY", "Avisar-me de respostas");
define("_MA_NOTIFYPM", "Avisar-me de novas Mensagens Privadas por Email");
define("_MA_POPUPPM", "Pop up em nova Mensagem Privada");
define("_MA_ATTACHSIG", "Sempre anexar minha assinatura");
define("_MA_PRIVATE", "Informação Privada");
define("_MA_FIRSTNAME", "Nome de batismo");
define("_MA_LASTNAME", "Sobrenome paterno");
define("_MA_GENDER", "Sexo");
define("_MALE", "Masculino");
define("_FEMALE", "Femenino");
define("_MA_BIRTHDAY", "Data de nascimento");
define("_MA_BIRTHDAYMSG", "Preencha no formato mês/dia/ano");
define("_MA_TELEPHONE", "Telefone");
define("_MA_FAX", "Fax");
define("_OSC_NEWSLETTER", "Recieve Shop newsletter");
define("_OSC_NEWSLETTERMSG", "This is a seperate e-mail about new shop items and discounts");

// License agreement
define("_BOUNDREGISTRATION", "By clicking Register below you agree to be bound by these conditions.");
define("_MA_REGISTRATION", "Registration Agreement Terms");
define("_MA_AGREE_OVER_13", "Concordo com as condições e tenho <b>13</b> ou <b>mais</b> anos de idade");
define("_MA_AGREE_UNDER_13", "Concordo com as condições e tenho <b>menos</b> de 13 anos de idade");
define("_MA_DO_NOT_AGREE", "Não concordo com as condições apresentadas");

// Registration form
define("_MA_REGISTRATION_INFO", "Informação de Registro");
define("_MA_ITEMS_REQUIRED", "Items marked with a * are required unless stated otherwise.");
define("_MA_PROFILE_INFO_NOTICE", "This information will be publicly viewable");
define("_USERNAME", "Nome do Usuário");
define("_EMAILADDRESS", "Endereço de Email");
define("_BLANKFORAUTO", "Deixe em branco caso prefira que a senha seja gerada automaticamente");
define("_CONFIRMPASSWORD", "Confirme a senha");
define("_SUBMIT", "Enviar");
define("_RESET", "Reset");
define("_MA_FAKEMAILMSG", "(This Email will be public. Just type what you want, Spam proof)");
define("_MA_DATEFORMATMSG", "The syntax used is identical to the PHP <a href=\"http://www.php.net/date\">date()</a> function");
define("_MA_SIGNATUREMSG", "This is a block of text that can be added to posts you make. There is a 255 character limit");
define("_MA_NOTIFYREPLYMSG", "Sends an email when someone replies to a topic you have posted in. This can be changed whenever you post");
define("_MA_POPUPPMMSG", "Will open a new popup window to inform you when new private messages arrive");

// config options
define("_ACTDISABLED", "This function has been <b>DISABLED</b> by the site admin.");

// Register steps
define("_USERFINALSTEP", "User Registration: Final Step");
define("_USERCHECKDATA", "please check the following information. If all is correct you can proceed with the registration by clicking on \"Finish\" button, otherwise \"Go Back\" and change whatever information is needed.");
define("_YOURPASSWORD", "Your Password is");
define("_YOUWILLRECEIVE", "You will receive a confirmation email with a link to a page you should visit to activate your account in the next 24 hours.");
define("_YOUWILLRECEIVE2", "You will receive an email with login information.");
define("_WAITAPPROVAL", "The site Administrator will review your application and send you an activation link if you are approved.");
define("_FINISH", "Finish");

// Register finish
define("_YOUUSEDEMAIL", "You or someone else has used your email account");
define("_TOREGISTER", "to register an account at");
define("_USERREGLOGIN", "User Registration/Login");
define("_USERAPPLOGIN", "User Application/Login");
define("_ACCOUNTCREATED", "New User Account Created!");
define("_YOUAREREGISTERED", "Welcome! You are now registered as a member.");
define("_FINISHUSERCONF", "Your request for a new account has been processed. You'll receive an email in the next few seconds with a activation link that should be visited in the next 24 hours to be able to activate your account.");
define("_FINISHUSERCONF2", "Your request for a new account has been processed. You can now ");
define("_FINISHUSERCONF3", "login here");
define("_TOFINISHUSER", "To finish the registration process you should visit the following link in the next 24 hours to activate your user account, otherwise the information will be automaticaly deleted by the system and you should apply again:");
define("_ACTIVATIONSUB", "User Account Activation");
define("_REGISTRATIONSUB", "User Account Registration");
define("_THANKSUSER", "Thank you for registering at");
define("_FOLLOWINGMEM", "Following is the member information:");
define("_TOAPPLY", "to apply for an account at");
define("_APPLICATIONSUB", "User Account Application");
define("_YOUAREPENDING", "Welcome! Your application as a new member is pending. The site administrator will contact you when your application is processed.");
define("_THANKSAPPL", "Thank you for appling at");
define("_MEMADD", "Member Added");
define("_MEMAPL", "Member Applied");

// Register errors
define("_ERRORINVEMAIL", "ERROR: Invalid Email");
define("_NICK2SHORT", "Nickname is too short. It must be more than 3 characters");
define("_SECCODEINCOR", "Security Code is incorrect, Please go back and type it exactly as given...");
define("_ERROREMAILSPACES", "ERROR: Email addresses do not contain spaces");
define("_ERRORINVNICK", "ERROR: Invalid Nickname");
define("_NICK2LONG", "Nickname is too long. It must be less than 26 characters");
define("_NAMERESERVED", "ERROR: This Name is Reserved");
define("_NAMEDENIED","ERROR: This part of your chosen user name may not be used :");
define("_NICKNOSPACES", "ERROR: There cannot be any spaces in the Nickname");
define("_NICKTAKEN", "ERROR: Nickname already taken");
define("_EMAILREGISTERED", "ERROR: Email address already registered");
define("_PASSDIFFERENT", "Both passwords are different. They need to be identical.");
define("_YOUPASSMUSTBE", "Your Password must be");
define("_CHARLONG", "characters long");
define("_ACCOUNTRESERVED", "New User Account Reserved!");
define("_EMAILNOTUSABLE", "ERROR: Email address is not usable");

// User activation
define("_ACTIVATIONYES", "User Activation");
define("_ACTMSG", "Your account has been activated. Please login from <a href=\"getlink()\">this link</a> using your assigned Username and Password.");
define("_ACTIVATIONERROR", "User Activation Error");
define("_ACTERROR1", "User verification number is invalid.<br><br>Please be sure to click on the link you received by email or apply for a new account <a href=\"getlink()\">here</a>.");
define("_ACTERROR2", "There is no user in the database with this information.<br><br>You can register a new user from <a href=\"getlink()\">here</a>.");

// Edit user profile
define("_CURRENTPASSWORD", "Current password");
define("_CURRENTPASSWORDMSG", "You must confirm your current password if you wish to change it or alter your e-mail address");
define("_NEWPASSWORD", "New password");
define("_NEWPASSWORDMSG", "You only need to supply a password if you want to change it");
define("_CONFIRMPASSWORDMSG", "You only need to confirm your password if you changed it above");
define("_SUREDELETE", "Are you sure you want to delete your account?");
define("_CURRENT_IMAGE", "Current Image");
define("_DELETE_IMAGE", "Delete Image");
define("_AVATAR_CONTROL", "Avatar control panel");
define("_AVATAR_INFO", "Displays a small graphic image below your details in posts. Only one image can be displayed at a time, its width can be no greater than 80 pixels, the height no greater than 80 pixels, and the file size no more than 6 KB.");
define("_AVATAR_OFFSITE","Link to off-site Avatar");
define("_AVATAR_OFFSITEMSG","Enter the URL of the location containing the Avatar image you wish to link to.");
define("_AVATAR_SELECT", "Select Avatar from gallery");
define("_SHOW_GALLERY", "Show gallery");
define("_AVATAR_UPLOAD", "Upload Avatar from your machine");

// Avatar section
define("_AVATAR_GALLERY", "Avatar gallery");
define("_CATEGORY_SELECT", "Select category");
define("_SELECT_AVATAR", "Select avatar");
define("_CANCEL_AVATAR", "Cancel avatar");

// Profile page
define("_THISISYOURPAGE", "Esta é sua Página Pessoal");
define("_PERSONALINFO", "Informação Pessoal");
define("_ABOUT_USER", "All about ");
define("_CONTACTINFO", "Contact Information");
define("_PM", "Private Message");
define("_JOINED", "Joined");
define("_RANK", "Rank");
define("_LAST10BBTOPIC", "Last 10 Forum Topics");
define("_LAST10BBTOPICS", "Last 10 Forum Topics started by");
define("_LAST10COMMENT", "Last 10 Comments");
define("_LAST10DOWNLOAD", "Last 10 Downloads");
define("_LAST10DOWNLOADS", "Last 10 Downloads by");
define("_LAST10SUBMISSION", "Last 10 News Submissions");
define("_LAST10WEBLINK", "Last 10 Web Links");
define("_LAST10WEBLINKS", "Last 10 Web Links by");
define("_MEMBERGROUPS", "Group Memberships");
define("_AVATAR", "Avatar");
define("_WEBSITE", "Homepage");
define("_LOCATION", "Endereço");
define("_OCCUPATION", "Profissão");
define("_INTERESTS", "Interesses");
define("_SIGNATURE", "Assinatura");

define("_USERSTATUS", "Status atual do Usuário");
define("_ONLINE", "on-line");
define("_OFFLINE", "off-line");
define("_NOTSUBSCRIBED", "Você não está cadastrado para receber nossos Boletins.");
define("_SUBSCRIBED", "Você está cadastrado para receber nossos Boletins.");

define("_BROADCAST", "Broadcast Public Message");
define("_BROADCASTTEXT", "Você pode enviar uma <i>Mensagem Pública</i> daqui. (máximo de 255 caracteres). Esta mensagem será mostrada para TODOS os Usuários que estiverem on-line nos próximos 10 minutos! Qualquer usuário on-line poderá ver sua mensagem dentro de uma caixa vermelha abaixo do Logotipo do Site. Todo Usuário pode também desativar esse recurso clicando <a href=\"modules.php?name=Your_Account&amp;op=edithome\">aqui</a>. Por favor, mantenha a fineza e não abuse da liberdade! NÃO É PERMITIDO O USO DE HTML.");
define("_SEND", "Enviar");
define("_BROADCASTSENT", "Sua Mensagenm Pública foi transmitida.");
define("_BROADCASTNOTSENT", "<b><b>ERRO</b>:</b> Sua Mensagem Pública está vazia ou já foi transmitida uma mensagem recentemente. Para publicar outra mensagem você DEVE esperar 10 MINUTOS.");
define("_RETURNPAGE", "Retornar para sua Página Pessoal");

define("_MYHEADLINES", "Minhas Notícias de outros Sites");
define("_SELECTASITE", "Selecione o Site doqual você quer ler as Notícias:");
define("_SELECTASITE2", "Selecione um WEbSite");
define("_ORTYPEURL", "Ou digite a URL RSS/XML do Site que você deseja:");
define("_GO", "Ir");
define("_HEADLINESFROM", "Notícias de");

define("_READMYJOURNAL", "Read My Journal");

// Errors
define("_ACCDELETED", "Account has been Deleted");
define("_SERVERNOMAIL", "This server does not have mail access. Please contact the site admin for assistance.");
define("_ACCSUSPENDED", "Account has been Suspended");
define("_BESUREACT", "Be sure you have activated your account.");
define("_MEMDEL", "Member Deleted");
define("_YOUBAD", "ERROR: You have attempted to perform an illegal operation!");
define("_NOINFOFOR", "Não nenhuma informação disponível para");
define("_SORRYNOUSERINFO", "Desculpe, não foi encotrada nenhuma informação do Usuário correspondente");
define("_LOGININCOR", "<b>Login Incorreto!</b> Por favor tente novamente...");
define("_UPDATEFAILED", "Está tendo dificuldades em incluir/alterar suas informações, entre em contato com o Administrador do Site");

// Navbar
define("_ACCTCHANGE", "Change<br>Info");
define("_ACCTCOMMENTS", "Comments<br>Setup");
define("_ACCTEXIT", "Logout<br>Exit");
define("_ACCTHOME", "Change<br>Home");
define("_ACCTJOURNAL", "Your<br>Journals");
define("_ACCTTHEME", "Select<br>Theme");
define("_CHANGEHOME", "Mudar Site");
define("_CHANGEYOURINFO", "Inclua/altere suas Informações Pessoais");
define("_CONFIGCOMMENTS", "Edição de Comentários");
define("_DELETEACCT", "Delete<br>Account");
define("_LOGOUTEXIT", "Logout/Sair");
define("_MESSAGES", "Mensagens");
define("_RETURNACCOUNT", "Retornar para sua Página Pessoal");
define("_SELECTTHETHEME", "Selecionar um Tema");

// Admin area
define("_DELETEREASON", "Reason for Deletion");
define("_SUSPENDREASON", "Reason for Suspension");
define("_DENYREASON", "Reason for Denial");
define("_CHECKNUM", "Activation #");
define("_REGDATE", "Date Added");
define("_ACCTAPPROVE", "Account Approved");
define("_ACCTDELETE", "Account Deleted");
define("_ACCTDENY", "Account Denied");
define("_ACCTREMOVE", "Account Removed");
define("_ACCTRESTORE", "Account Restored");
define("_ACCTSUSPEND", "Account Suspended");
define("_ACTIVEUSERS", "Active Users");
define("_ADDUSER", "Add a New User");
define("_ADDUSERBUT", "Add User");
define("_ALLOWUSERS", "Allow other users to view my email address");
define("_APPROVE", "Approve");
define("_APPROVEUSER", "Approve User");
define("_DELETEUSER", "Delete User");
define("_DELETEUSERS", "Deleted Users");
define("_DENY", "Deny");
define("_DENYUSER", "Deny User");
define("_DETUSER", "User Details");
define("_EDITUSER", "Editar Usuário");
define("_FORCHANGES", "(For Changes Only)");
define("_FUNCTIONS", "Functions");
define("_HASAPPROVE", "has been approved.");
define("_HASDELETE", "has been deleted.");
define("_HASDENY", "has been denied.");
define("_HASREMOVE", "has been removed.");
define("_HASRESTORE", "has been restored.");
define("_HASSUSPEND", "has been suspended.");
define("_ID", "ID");
define("_MODIFY", "Modify");
define("_NAME", "Name");
define("_NEWSLETTER", "Newsletter");
define("_OK", "Ok!");
define("_OPTION", "Opção");
define("_OR", "or");
define("_PERMISSIONS", "Permissions");
define("_PROMOTE", "Promote");
define("_PROMOTEUSER", "Promote User");
define("_REMOVE", "Remove");
define("_REMOVEUSER", "Remove User");
define("_REQUIREDNOCHANGE", "(required, can't be changed later)");
define("_RESEND", "Resend");
define("_RESENDMAIL", "Resend Activation Email");
define("_RESTORE", "Restore");
define("_RESTOREUSER", "Restore User");
define("_RETYPEPASSWD", "Retype Password");
define("_SAVECHANGES", "Save Changes");
define("_SHOWMAIL", "Show Email");
define("_SORRYTO", "Your account at");
define("_SURE2APPROVE", "Are you sure you want to approve user");
define("_SURE2DELETE", "Are you sure you want to delete user");
define("_SURE2DENY", "Are you sure you want to deny user");
define("_SURE2PROMOTE", "Are you sure you want to promote user");
define("_SURE2REMOVE", "Are you sure you want to remove user");
define("_SURE2RESEND", "Are you sure you want to resend activation email");
define("_SURE2RESTORE", "Are you sure you want to restore user");
define("_SURE2SUSPEND", "Are you sure you want to suspend user");
define("_SUSPEND", "Suspend");
define("_SUSPENDUSER", "Suspend User");
define("_SUSPENDUSERS", "Suspended Users");
define("_URL", "URL");
define("_USERADMIN", "User's Administration");
define("_USERID", "User ID");
define("_USERPROMOTED", "User has been promoted to Admin.");
define("_USERUPDATE", "Update User");
define("_WAITINGUSER", "Waiting User");
define("_WAITINGUSERS", "Waiting Users");

define("_ARTICLES", "Articles");
define("_BBFORUM", "Forum");
define("_CONTENT", "Content");
define("_DOWNLOAD", "Downloads");
define("_ENCYCLOPEDIA", "Encyclopedia");
define("_FAQ", "FAQ");
define("_REVIEWS", "Reviews");
define("_SECTIONS", "Sections");
define("_SURVEYS", "Surveys");
define("_TOPICS", "Topics");
define("_WEBLINKS", "Web Links");

// Admin errors
define("_ADDERROR", "ERROR: There was a problem with the database.");
define("_NAMEERROR", "ERROR: This Admin name is already in use.");
define("_NEEDTOCOMPLETE", "You need to complete all required fields");
define("_PASSWDNOMATCH", "Sorry, the new passwords doesn't match. Go Back and Try Again");
define("_USERNOEXIST", "User Doesn't Exists!");

/*****************************************************/
/* Originals : modules/Your_Account/*.*              */
/*****************************************************/
define("_USERLOGIN", "Login do Usuário");
define("_USERREGLOGIN", "User Registration/Login");
define("_REGNEWUSER", "<b>Novo Registro de Usuário</b>");
define("_PASSWORDLOST", "Perdeu sua Senha?");

define("_NOPROBLEM", "Sem problemas. Entre com o seu Nome de usuário e clique no botão Enviar. Em breve você receberá um e-mail automático com um <b>Código de Confirmação</b>. De posse desse Código de Confirmação, redigite seu nome de Usuário e o Código de Confirmação para que o Sistema possa gerar e enviar um NOVA SENHA.<br><b>NOTA:</b> Este processo é TOTALMENTE automatizado, sem receber a interferência de nenhuma pessoa. Se você encontrar dificuldades em conseguir seu senha, entre em contato com o ADMINISTRADOR do Site apenas. Não dê sua senha para outras pessoas!");
define("_CONFIRMATIONCODE", "Código de Confirmação");
define("_SENDPASSWORD", "Enviar Senha");

define("_YOUARELOGGEDOUT", "Você saiu de sua conta!");

define("_USERACCOUNT", "Conta do Usuário");
define("_AT", "a");
define("_HASTHISEMAIL", "está associada a este e-mail.");
define("_AWEBUSERFROM", "Um Usuário da Web");
define("_HASREQUESTED", "pediu se sua senha fosse enviada.");
define("_YOURNEWPASSWORD", "Sua Nova Senha é:");
define("_YOUCANCHANGE", "Você pode alterá-la para uma mais facilmente memorizável após efetuar seu login. Na parte inferior da Página Pessoal há dois campos para serem alteradas a Senha.");
define("_IFYOUDIDNOTASK", "Se você não solicitou sua Senha, não se preocupe, somente você está vendo esta mensagem. Se houve algum engano, por favor nos desculpe. Efetue o login com a senha apresentada neste e-mail e depois altere-a para a sua de costume.");

define("_PASSWORD4", "Senha Para");
define("_MAILED", "Remetida.");

define("_CODEREQUESTED", "foi pedido um Código de Confirmação para alterar a Senha.");
define("_YOURCODEIS", "Seu Código de Confirmação é:");
define("_WITHTHISCODE", "Com este Código você pode agora especificar uma nova Senha");
define("_IFYOUDIDNOTASK2", "Se você não solicitou este e-mail não se preocupe. Apague-o sem maiores problemas!");

define("_CODEFOR", "Código de Confirmação para");
define("_USERPASSWORD4", "Senha do Usuário para");

define("_255CHARMAX", "(Máximo de 255 caracteres. Digite sua assinatura em HTML)");
define("_CANKNOWABOUT", "(Máximo de 255 caracteres. Estas informações podem ajudá-lo ser localizado por pessoas que compartilham os mesmo interesses que você!)");
define("_SOMETHINGWRONG", "Ooooooooops.... Você arruinou tudo? Se odeia por isso???");
define("_CHARLONG", "characters long");

// Edit comments view
define("_COMMENTSCONFIG", "Configuração de Comentário");
define("_DISPLAYMODE", "Exibir Modo");
define("_NOCOMMENTS", "Sem comentários");
define("_NESTED", "Alojados");
define("_FLAT", "Plano");
define("_THREAD", "Discussão");
define("_SORTORDER", "Ordenar do Tipo");
define("_OLDEST", "Antigos primeiro");
define("_NEWEST", "Novos primeiro");
define("_HIGHEST", "Pontuação alta primeiro");
define("_THRESHOLD", "Início");
define("_COMMENTSWILLIGNORED", "Comentários abaixo dessa pontuação serão ignorados.");
define("_UNCUT", "Sem nexo");
define("_EVERYTHING", "Quase tudo");
define("_FILTERMOSTANON", "Filtrar Anônimos");
define("_USCORE", "Pontuação");
define("_SCORENOTE", "Publicações Anônimas começam em 0, publicações de Usuários Registrados começam em 1. Os Moderadores somam e subtraem pontos.");
define("_NOSCORES", "Não exibir pontuações");
define("_HIDDESCORES", "(Esconder pontuação: DEsse modo você não verá os pontos.)");
define("_MAXCOMMENT", "Tamanho máximo do Comentário");
define("_TRUNCATES", "(Comentários muito longos e truncados tem grandes chances de não serem publicados)");
define("_BYTESNOTE", "bytes (1024 bytes = 1K)");

define("_PRIVATEMESSAGES", "Suas Mensagens Privadas");
define("_BROWSEUSERS", "Visualizar Usuários");
define("_SEARCHUSERS", "Procurar por um Usuário");
define("_SENDPRIVATEMSG", "Send a Private Message to");

// Change theme
define("_THEMESELECTION", "Seleção de Tema");
define("_SELECTTHEME", "Selecione um Tema");
define("_THEMETEXT1", "Esta opção mudará o visual de TODO o Site.");
define("_THEMETEXT2", "Estas alterações personalizadas se aplicam SOMENTE para você.");
define("_THEMETEXT3", "Cada Usuário pode visualizar o site com um tema diferente.");

// Edit home
define("_HOMECONFIG", "Configuração do Site");
define("_NEWSINHOME", "Número de Artigos no Site (Homepage)");
define("_MAX127", "(127 máx. caracteres):");
define("_MESSAGEACTIVATE", "Ativar Mensagens Públicas?");
define("_ACTIVATEPERSONAL", "Ative seu <b>Menu Pessoal</b>");
define("_CHECKTHISOPTION", "(Cheque esta opção e o texto descrito aparecerá em um Bloco na Homepage)");
define("_YOUCANUSEHTML", "(Você pode usar HTML para adicionar um link para um Sistema de Busca, por exemplo)");
?>