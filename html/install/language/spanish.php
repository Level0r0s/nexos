<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
*/
/*********************************************
  CPG Dragonfly CMS ™
  ********************************************
  Copyright © 2004 - 2005 por el equipo de desarrollo de CPG-Nuke
  http://www.dragonflycms.com

  Dragonfly esta liberado bajo los términos y condiciones
  de la GNU GPL versión 2 o cualquier versión posterior

  $Source: /cvs/html/install/language/spanish.php,v $
  $Revision: 10.1 $
  $Author: djmaze $
  $Date: 2010/11/11 17:31:45 $
**********************************************/
if (!defined('INSTALL')) { exit; }

$instlang['installer'] = 'Instalador';
$instlang['langselect'] = 'Seleccione el idioma';
$instlang['s_progress'] = 'Progreso de la instalación';
$instlang['s_license'] = 'Licencia';
$instlang['s_builddb'] = 'Crear base de datos';
$instlang['s_gather'] = 'Recopilar información importante';
$instlang['s_create'] = 'Crear cuenta de superadministrador';
$instlang['welcome'] = 'Bienvenido a Dragonfly';
$instlang['info'] = 'Esta instalación le guiará para configurar DragonflyCMS en su sitio web en cuestión de minutos. <br /> El programa de instalación creará la base de datos necesaria y primer usuario o actualizarán su  CPG o PHP Nuke instalado.' ;
$instlang['click'] = 'Haz clic en "Aceptar" si se acepta la siguiente licencia:';
// $instlang['licencia'] = 'Las modificaciones y correcciones hechas por el equipo de CPG-Nuke Dev no se puede utilizar en cualquier versión de Nuke o en el plan o sitio web que requiere el pago, el registro o la compensación para la instalación, soporte o descarga de GPL software con licencia sin remuneración acordada por el Equipo de CPG-Nuke revelador que llevó a cabo este consecuentes considerable, y se distinguió reescritura. <br /> <b> Eso significa que usted puede \ 't vender nuestro código como parte de una versión comercial. </b> ';
$instlang['license_edited'] = 'Su licencia ha sido editado. Póngase en contacto con el equipo de desarrollo de dragonflycms.com inmediatamente. Gracias.';
$instlang['no_zlib'] = 'El servidor no soporta la compresión Zlib. Por lo tanto usted no puede leer nuestra licencia de esta página. Por favor, consulte GPL.txt se encuentran en su distribución CPG-Nuke/DragonflyCMS y haga clic en el botón "Acepto" abajo';
$instlang['agree'] = 'Acepto';
$instlang['next'] = "Siguiente";

$instlang['s1_good'] = 'Nos hace muy felices que haya tomado la decisión de utilizar Dragonfly';
$instlang['s1_already'] = 'Usted ya tiene '.((CPG_NUKE < 9) ? 'CPG-Nuke' : 'Dragonfly').' <b>'.CPG_NUKE.'</b> instalado.';
$instlang['s1_splatt'] = 'Advertencia <b> </b> La antigua base de datos Splatt foro será eliminado! Si todavía quieres tratar de usarlo, selecione a continuación, mantener las tablas. /> <br Mantener la base de datos de los foros Splatt ? <select name="splatt" class="formfield"><option value="0">No</option><option value="1">Sí</option></select>';
$instlang['s1_new'] = 'El instalador no ha podido encontrar una versión anterior, por lo que se instalará una nueva versión para usted';
$instlang['s1_upgrade'] = 'Su versión actual es <b> %s </b>, y será actualizado/convertido a DragonflyCMS. '.CPG_NUKE.' <br /> <b> Asegúrese de tener una copia de seguridad de su base de datos </b>.';
$instlang['s1_unknown'] = 'El instalador no podía detectar qué versión de CPG-Nuke/PHP-Nuke está utilizando. <br /> Usted no puede continuar la instalación. <br /> Por favor, póngase en contacto con el CPG Dev Team ';
$instlang['s1_database'] = 'Este es un resumen de lo que se detectó sobre su configuración en config.php para la conexión de base de datos';

$instlang['s1_dbconfig'] = 'Configuración de base de datos';
$instlang['s1_server'] = 'Versión del servidor';
$instlang['s1_server2'] = 'La versión de %s que está actualmente activa en el servidor';
$instlang['s1_layer'] = 'Capa SQL';
$instlang['s1_layer2'] = 'La capa de SQL para su uso con el sitio web';
$instlang['s1_host'] = 'Nombre de la máquina';
$instlang['s1_host2'] = 'El nombre DNS o la IP del servidor que ejecuta el servidor SQL';
$instlang['s1_username'] = 'Nombre de Usuario';
$instlang['s1_username2'] = 'El nombre de usuario utilizado para iniciar sesión en el servidor SQL';
$instlang['s1_password'] = 'Contraseña de acceso';
$instlang['s1_password2'] = 'La contraseña del usuario para iniciar sesión en el servidor SQL';
$instlang['s1_dbname'] = 'Nombre de base de datos';
$instlang['s1_dbname2'] = 'El nombre de una base de datos específica que contiene las tablas que desee con los datos';
$instlang['s1_prefix'] = 'Prefijo de tabla';
$instlang['s1_prefix2'] = 'Un defecto prefijo para nombres de tablas';
$instlang['s1_userprefix'] = 'prefijo de tabla de usuarios';
$instlang['s1_userprefix2'] = 'El prefijo por defecto para la tabla que contiene todos los datos del usuario';
$instlang['s1_directory_write'] = 'Directorio de acceso de escritura';
$instlang['s1_directory_write2'] = '. Directorios que necesitan acceso de escritura para almacenar información como imágenes cargadas <br /> Si falla, entonces cambie los permisos de escritura con "CHMOD 777" en ese directorio';
$instlang['s1_dot_ok'] = 'OK';
$instlang['s1_dot_failed'] = 'Error pero no crítico';
$instlang['s1_dot_critical'] = 'Error crítico';

$instlang['s1_cache'] = 'Cache';
$instlang['s1_cache2'] = 'Caché de almacemaniento de configuración y de los archivos de plantilla (templates) para la aceleracion de generación de sus páginas';
$instlang['s1_avatars'] = 'avatares';
$instlang['s1_avatars2'] = 'Cuando los miembros están autorizados a subir un avatar, este directorio contendrá sus avatares subidos';
$instlang['s1_albums'] = 'Top';
$instlang['s1_albums2'] = 'Contiene todas las imágenes de la galería de fotos que se suben a través de FTP o cualquier otro método';
$instlang['s1_userpics'] = 'Fotos de Usuario';
$instlang['s1_userpics2'] = 'Mantiene sub-carpetas de cada uno de identificación de miembro y almacena los miembros cargado imágenes allí';
$instlang['s1_config'] = 'Includes';
$instlang['s1_config2'] = 'Archivos de Almacenamiento de Nucleo necesarios para ejecutar el CMS.';

$instlang['s1_correct'] = 'Si la información anterior es correcta, entonces vamos a comenzar a construir la base de datos ';
$instlang['s1_fixerrors'] = 'Por favor, corrija los errores han mencionado anteriormente';
$instlang['s1_fatalerror'] = 'Por favor, en contacto con el CPG-Nuke Dev Team sobre el error <br /> No se puede continuar con la instalación';
$instlang['s1_build_db'] = 'Vamos construir la base de datos ';
$instlang['s1_necessary_info'] = 'Información necesaria';
$instlang['s1_php'] = '<p style="color:#FF0000; font-style:bold"> No Podemos garantizar que DragonflyCMS se ejecutará correctamente con su vieja versión de PHP <br /> Pregunte a su administrador del servidor acerca de cómo actualizar a PHP 4.3.10 o 5.0.3 o superior </p> ';
$instlang['s1_mysql'] = '<p style="color: #FF0000; font-style: bold;"> Lo sentimos, pero se acepta sólo MySQL 4 o superior <br /> Pregunte a su administrador de servidor sobre la actualización a MySQL 4 o superior </p> Su versión actual es: %s ';
$instlang['s1_donenew'] = 'La base de datos ha sido correctamente instalada, ahora vamos a continuar la instalación solicitándole alguna información necesaria!';
$instlang['s1_optimiz'] = 'optimización de bases de datos. La ejecución de este paso puede tomar un tiempo para una gran base de datos ';
$instlang['s1_doneup'] = 'La base de datos ha sido adecuadamente actualizada. Diviértete con DragonflyCMS.<br /> <h2>Elimine o renombre el archivo <b>install.php</b> y el directorio de instalación en este momento. No lo deje para después, pues su sistema es vulnerable mientras se accesible.</h2>! ';

$instlang['s2_info'] = 'Permite la configuración de la información necesaria:';
$instlang['s2_error'] = 'Debes introducir toda la información.';
$instlang['s2_account'] = 'La información necesaria se ha añadido. Vamos a la configuración de su primera cuenta';
$instlang['s2_create'] = 'Crear cuenta';

$instlang['s2_domain'] = 'Nombre de Dominio';
$instlang['s2_domain2'] = 'El nombre de dominio en su sitio web Dragonfly potencia se encuentra alojado, por ejemplo <i> www.mysite.com </i>';
$instlang['s2_path'] = 'Ruta o Path';
$instlang['s2_path2'] = 'La ruta de acceso en su sitio web Dragonfly potencia se encuentra alojado, por ejemplo <i>/html/</i>';
$instlang['s2_email2'] = 'La dirección de correo electrónico principal, donde debe ser enviado a la información del sitio web';
$instlang['s2_session_path'] = 'Guardar ruta de sesión';
$instlang['s2_session_path2'] = 'Esta es la ruta donde se almacenan los archivos de datos. <br /> Debe cambiar esta variable a fin de poder utilizar las funciones de sesión de DragonflyCMS. <br /> La ruta debe ser accesible por PHP como /home/myname/tmp/sessiondata y probablemente sea necesario cambiar los permisos con CHMOD 777.';
$instlang['s2_cookie_domain'] = 'cookie de dominio';
$instlang['s2_cookie_domain2'] = 'El pleno o dominio de nivel superior para almacenar las cookies en, por ejemplo <i>mysite.com</i> o simplemente dejar en blanco ';
$instlang['s2_cookie_path'] = 'Ruta de cookies';
$instlang['s2_cookie_path2'] = 'La dirección de Internet para limitar la cookie, por ejemplo <i>/html/</i>';
$instlang['s2_cookie_admin'] = 'nombre de la cookie de administración';
$instlang['s2_cookie_admin2'] = 'El nombre de la cookie para almacenar la información de inicio de sesión de administrador de este sitio web';
$instlang['s2_cookie_member'] = 'nombre de la cookie para miembros';
$instlang['s2_cookie_member2'] = 'El nombre de la cookie para almacenar información de los miembros entrada de este sitio web';
$instlang['s2_cookie_cpg'] = 'Nombre de la cookie para Galería de fotos';
$instlang['s2_cookie_cpg2'] = 'El nombre de la cookie para almacenar información específica galería de fotos de este sitio web';

$instlang['s2_error_email'] = 'Dirección de correo electrónico no válida';
$instlang['s2_error_empty'] = 'Algunos de los campos quedaron vacíos';
$instlang['s2_error_cookiename'] = 'Nombre de la cookie no válida';
$instlang['s2_error_cookiesettings'] = 'Configuración de las cookies no válida';
$instlang['s2_error_sessionsettings'] = 'Configuración de la sesión incorrecto';

$instlang['s2_cookietest'] = 'Vamos a probar la configuración de las cookies que ha especificado antes de proceder.';
$instlang['s2_test_settings'] = 'Configuración de prueba';

$instlang['s3_sync_schema'] = 'Synchronizing Database Schema';
$instlang['s3_sync_data']   = 'Synchronizing Database Data';
$instlang['s3_exec_queries'] = 'Executing the queries';
$instlang['s3_nick2'] = 'El nombre que utiliza para iniciar sesión en este sitio web como administrador';
$instlang['s3_email2'] = 'Su dirección de correo electrónico';
$instlang['s3_pass2'] = 'La contraseña que utiliza para iniciar sesión en este sitio web. Usted puede utilizar cualquier carácter';
$instlang['s3_timezone'] = 'zona horaria';
$instlang['s3_timezone2'] = 'La zona horaria en la que desea ver la hora de los mensajes enviados';

$instlang['s3_warning'] = 'Asegúrese de que utiliza por lo menos: 1. Mayúsculas, 1 minúsculas y un número en la contraseña';
$instlang['s3_finnish'] = '<h2> DragonflyCMS '.CPG_NUKE.' se ha instalado correctamente. <br /> Ahora quite o renombre el archivo install.php y el directorio de instalación! <br /> Luego disfrute de DragonflyCMS! </h2> <a href="'.$adminindex.'"  "style ="font-size: 14px;">Entra en tu sitio web para configurar el resto de opciones.</ a> ';
