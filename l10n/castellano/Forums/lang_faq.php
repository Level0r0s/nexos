<?php
/*************************************************
 *                          lang_faq.php [español]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *   
 *
 *
 *
 *
************************************************/

/*************************************************
 *
 *   Esta es una aplicación de software libre, puede redistribuirla y/o modificarla
 *   bajo los términos de la GNU (Licencia Pública General), la cual fue publicada
 *   por la Free Software Foundation (Fundación del Software Libre). Esto en la licencia
 *   de la versión 2 o posterior.
 *
 *************************************************/
 




 
// 
// Para agregar una entrada a las FAQ solo agregue una linea con el siguiente formato:
// $faq[] = array("pregunta", "respuesta");
// Si quieres separar una sección escribe $faq[] = array("--","Un texto de separación puede ir aquí si lo deseas");
// Los enlaces se crean automáticamente :)
//
// NO OLVIDE poner ; al final de cada linea.
// NO PONGA dobles comillas (") en las entradas de sus FAQ, si es absolutamente necesario entonces escríbelo así: \"texto\"
//
// Los temas y entradas de las FAQ aparecerán en el mismo orden en el que están en este archivo.
//

  
$faq[] = array("--","Acerca del ingreso (login) y registro");
$faq[] = array("¿Por qué no puedo ingresar?", "¿Ya se registró? Debe registrarse en el sistema antes de poder acceder a él. ¿Ha sido bloqueado en el foro? (si es así un mensaje aparecerá). Si esto sucede envíe un mensaje al administrador del foro para encontrar la causa. Si se ha registrado y no ha sido bloqueado verifique que su nombre de usuario y contraseña coincidan, es el problema mas común. Si esta seguro de que están correctos los datos, envíe un mensaje al administrador, es posible que el foro esté mal configurado y/o tenga fallos en la programación.");
$faq[] = array("¿Por qué me tengo que registrar para todo?", "No esta obligado a hacerlo, la decisión la toman los administradores y moderadores. Sin embargo estar registrado le da muchas ventajas que como usuario invitado no disfrutaría, como tener su gráfico personalizado (avatar), mensajes privados, suscripción a grupos de usuarios, etc.... Solo le tomará unos segundos, es muy recomendable.");
$faq[] = array("¿Por qué mi sesión de usuario expira automáticamente?", "Si no activa la casilla <i>Ingresar automáticamente</i> cuando te conectas al foro, tus datos se guardan en una cookie que se elimina al salir de la página o pasado cierto tiempo. Esto previene que tu cuenta pueda ser usada por alguien más. Para que el sistema te reconozca automáticamente solo activa la casilla al conectar. NO es recomendable si conectas al foro desde un ordenador compartido (café-Internet, biblioteca, colegio ...)");
$faq[] = array("¿Como evito aparecer en las listas de usuarios conectados?", "En su perfil, encontrará la opción <i>Ocultar mi estado de conexión</i>, si activa esta opción aparecerá solo para los administradores, moderadores y para si mismo, para los demás será un usuario oculto.");
$faq[] = array("¡He perdido mi contraseña!", "Calma, si su contraseña no pueda ser recuperada puede desactivarla o cambiarla. Para hacer esto diríjase a la página de registro y haga click en <u>Olvidé mi contraseña</u>, siga las instrucciones y estará dentro en muy poco tiempo");
$faq[] = array("¡Me he registrado y no puedo conectar!", "Primero verifica tus datos (usuario y contraseña). Si todo es correcto hay dos posibles razones. Si el Sistema de Protección Infantil (COPPA) esta activado y cuando te registraste elegiste la opción <u>Soy menor de 13 años</u> entonces tendrás que seguir algunas instrucciones que se te darán para activar la cuenta. En otros casos el administrador pide que las cuentas se activen mediante un correo electrónico, así que revisa su correo y confirma tu suscripción. Algunos foros necesitan confirmación de registro. Si no sucede nada de esto contacta con administrador del foro.");
$faq[] = array("Hace un tiempo me registré, pero ahora no puedo ingresar", "Las posibles razones son: ingresó un nombre de usuario o contraseña incorrectos (verifique el mensaje que se le envía al registrarse). Es posible que el administrador haya borrado su cuenta, esto es muy frecuente, pues si no ha escrito ningún mensaje en cierto tiempo el administrador puede borrar el usuario para que la base de datos no se sature de registros. Si es así regístrese de nuevo y participe :)");


$faq[] = array("--","Preferencias de usuario y configuraciones");
$faq[] = array("¿Cómo puedo cambiar mi configuración?", "Todos tus datos y configuraciones (si estas registrado) están archivados en nuestra base de datos. Para modificarlos pincha en el enlace <u>Perfil</u>, generalmente se encuentra en la parte superior de cada página.");
$faq[] = array("¡El tiempo en los foros no es correcto (horas)!", "Las horas son correctas, es posible que estés viendo las horas correspondientes a otra zona horaria, si este es el caso, ingresa a tu perfil y define tu zona horaria de acuerdo a tu ubicación (ej. Londres, París, New York, Sydney, etc.) Cambiando esto las horas deben de aparecer de acuerdo a tu zona y tiempo. Si no te has registrado es tiempo de hacerlo :)");
$faq[] = array("He cambiado la zona horaria en mi perfil, pero el tiempo sigue siendo incorrecto", "Si estas segur@ de que la zona horaria es correcta es posible que se deba a los horarios de verano implementados por algunos países.");
$faq[] = array("¡Mi idioma no está en la lista!", "Esto se puede deber a que el administrador no ha instalado el paquete de tu lenguaje para el foro o nadie ha creado una traducción :(  si es así, siéntete libre de hacer una traducción (miles de personas te lo agradecerán), la información la encuentras en el  phpBB Group website (Pincha en el enlace que se encuentra al final de la página)");
$faq[] = array("¿Cómo puedo poner una imagen abajo de mi nombre de usuario?", "Hay dos tipos de imágenes debajo de tu nombre de usuario, la primera es el rango, que está asociada con el número de mensajes que has escrito en el foro (generalmente son estrellas o bloques), la segunda es el AVATAR, que es un gráfico generalmente único y personal, el administrador decide si se pueden usar o no, si es posible usarlos puedes introducirlo en tu perfil. En caso de que no exista esa opción, contacta al administrador y pide que sea activada esa opción :)");
$faq[] = array("¿Como puedo cambiar mi rango?", "No puedes cambiar tu rango directamente, ya que este es asociado directamente con el número de mensajes enviados o tu estado de moderador, administrador o rangos especiales. Por favor, no abuses de enviar innecesariamente para incrementar tu rango.");
$faq[] = array("Cuando doy click sobre el enlace de correo me pide que me registre", "Para poder enviar correo a un usuario vía formulario (si el administrador lo tiene activado) necesitas estar registrado, esto para evitar SPAM o mensajes maliciosos de usuarios anónimos.");


$faq[] = array("--","Publicación de mensajes");
$faq[] = array("¿Como puedo publicar un mensaje en el foro?", "Fácil, regístrate como miembro del foro (pinchando en el enlace de registro, generalmente arriba de cada página), después del registro pinchas en <i>Enviar nuevo mensaje<i>, ahí se te presentará un panel con el que fácilmente publicarás un mensaje :)");
$faq[] = array("¿Cómo puedo editar o borrar un mensaje?", "Si no eres el administrador o moderador del foro, solo puedes borrar los mensajes que hayas enviado tu mismo. Puedes editar un mensaje haciendo click en <i>editar</i> si alguien ya ha respondido a tu mensaje, encontrarás un pequeño texto en el tuyo diciendo que ha sido modificado y las veces que lo has hecho, no aparece si fue un moderador o el administrador el que lo edito (la mayoría de las veces dejan un mensaje aclaratorio).");
$faq[] = array("¿Como puedo agregar una firma a mi mensaje?", "Para insertar una firma en tu mensaje primero debes crear una, esto se hace modificando tu perfil. Una vez creada activas la opción <i>Agregar firma</i> cuando envíes un mensaje. También puedes hacer que todos tus mensajes tengan tu firma, activando la opción el tu perfil.");
$faq[] = array("¿Cómo creo una encuesta?", "Crear una encuesta es fácil, cuando inicias un nuevo tema notarás la opción <i>Crear una encuesta</i>, introduces los datos de la encuesta, como titulo y opciones, tienes la posibilidad de poner limite al numero de participantes (0 es infinito)");
$faq[] = array("¿Cómo edito o borro una encuesta?", "Si eres el que inicio la encuesta puedes editarla de la misma manera que tu mensaje, sin embargo esto solo funcionará si la encuesta aun no tiene respuestas, pues de tenerlas solo el administrador o moderadores podrán editarla o borrarla");
$faq[] = array("¿Por qué no puedo acceder a algún foro?", "Algunos foros están limitados a ciertos grupos de usuarios, para verlos, enviar, editar, etc, necesitas tener ciertas autorizaciones, las cuelas solo te puede dar un moderador o administrador del foro.");
$faq[] = array("¿Por qué no puedo votar en las encuestas?", "Solo miembros registrados pueden votar en las encuestas (para prevenir resultados trucados), si te has registrado pero no puedes votar, es posible que no tengas autorización para votar en esa encuesta :(.");


$faq[] = array("--","Formateo de mensajes y tipos de temas");
$faq[] = array("¿Qué es el código BBCode?", "BBCode es una implementación especial del HTM, la forma en la que el BBCode se usa es determinada por el administrador, es muy similar al HTML, las etiquetas van entre corchetes [ y ] para mas información puedes ver el manual de BBCode, el enlace aparece cada vez que vas a publicar un mensaje.");
$faq[] = array("¿Puedo usar HTML?", "Depende de que el administrador tenga habilitada la opción y de cuales etiquetas HTML estén activadas, ya que muchas etiquetas HTML podrían dañar severamente la estructura del mensaje.");
$faq[] = array("¿Qué son los emoticonos?", "Smileys o emoticonos son pequeños gráficos que pueden ser usados para expresar emociones, aparecen introduciendo un pequeño código, por ejemplo:  :) significa feliz, :( significa triste. La lista completa de smileys se despliega cuando envías un mensaje.");
$faq[] = array("¿Puedo enviar imágenes?", "Las imágenes se pueden adjuntar a los mensajes, adjuntandolas al redactar los mensajes. No puedes ser imágenes de sitios de correo, búsquedas o cualquier otro servicio que requiera autentificación (Yahoo, Hotmail...).");
$faq[] = array("¿Qué son los anuncios?", "Los anuncios contienen información importante para los usuarios.");
$faq[] = array("¿Qué son los Temas Importantes?", "Los Temas Importantes aparecen debajo de los anuncios y solo en la primera página, es información muy importante que deberías leer :)");
$faq[] = array("¿Qué son los temas cerrados o bloqueados?", "Los temas cerrados o bloqueados son precisamente eso, temas en los que ya no se puede enviar, esto lo decide el administrador o moderadores.");


$faq[] = array("--","Niveles de usuario y grupos");
$faq[] = array("¿Qué son los administradores?", "Los administradores son gente asignada con alto nivel de control sobre el foro entero, pueden controlar permisos, moderadores y todo tipo de configuraciones.");
$faq[] = array("¿Qué son los moderadores?", "Moderadores son personas que tienen el poder de editar o borrar foros, cerrarlos o abrirlos. Son designados por el administrador  tienen menos opciones que este.");
$faq[] = array("¿Qué son los grupos de usuarios?", "los Grupos de usuarios es una de las formas en las que el administrador del foro puede agrupar usuarios. Un usuario puede pertenecer a varios grupos. Esto se hace con el fin de conceder permisos selectivos sobre el foro (como volver a todo un grupo moderadores).");
$faq[] = array("¿como puedo pertenecer a un Grupo de usuarios?", "Da click en Grupos de usuarios y pide tu inscripción, recibirás un correo si eres aceptado. No todos los grupos son abiertos.");
$faq[] = array("¿Cómo me convierto en el moderador de un grupo de usuarios?", "Solo el administrador puede asignar ese permiso, contacta con el :)");


$faq[] = array("--","Vista para impresión de temas");
$faq[] = array("¿Para qué es el botón :| |: ? - Cambiar la paginación de los foros", "Haciendo click en uno de esos botones puedes evitar la paginación fija de los foros para el tema actual para así dejar a tu explorador hacer la paginación correcta para imprimir (Imprimir página en el menú del explorador) basado en el espaciado actual en lugar del número de mensajes por página.");
$faq[] = array("¿Qué son las casillas que hay en la parte superior de la salida de impresión? - Selección de rango", "hay dos casillas en la parte superior de la página y un botón parecido al de una grabadora O_o. Estos te permiten seleccionar un rango de mensajes. Fíjate en que cada mensaje en la vista de impresión tiene un número. Usa esos números para llenar  las casillas y marcar así el primer y último mensaje que quieres que sea imprimido, y pulsa el botón O_o para volver al tema. otra forma de fijar un rango es poner un número negativo en la segunda casilla, que significa que quieres -n mensajes imprimidos. Por ejemplo, 4 7 imprimirá los mensajes 4, 5, 6, 7. Pero si introduces 4 -7 en la primera y segunda casilla respectivamente, se imprimirán los mensajes 4, 5, 6, 7, 8, 9, 10 después de pulsar el botón de rebobinado.");
$faq[] = array("¿Cómo imprimir sólo un mensaje? - Selección de rango avanzada", "Primero vete a la vista de impresión de pulsando el botón de la impresora en la vista de temas. Encuentra tu mensaje y fíjate en el número que lleva delante. Escribe ese número en la primera casilla de la parte superior izquierda de la vista de impresión. En la segunda casilla pon el valor -1 y pulsa el botón O_o. Esto le dirá a la base de datos que sólo muestre un mensaje desde el primero que le has introducido. Otra forma de conseguir este mismo resultado es poniendo el mismo número en ambas casillas. Digamos que sólo quieres imprimir el mensaje número 16. Rellena las casillas de la parte superior con: 16 -1 y pulsa el botón O_o. por supuesto sólo funcionará si hay al menos dieciséis mensajes en el tema actual.");
$faq[] = array("¿Para qué usar símbolos extraños? / ¿Más preguntas?", "Para poder hacer esta modificación lenguaje-independiente He decidido que sería fácil utilizar símbolos en lugar de palabras. Si tienes algún comentario o consejo en cuanto a mi particular elección de símbolos, u otras cosas en general relacionadas con esta modificación, por favor únete a la discusión en <a href=\"http://phpbb.com/phpBB/viewtopic.php?t=141443\">phpBB mod support</a>");


$faq[] = array("--","Mensajería privada");
$faq[] = array("¡No puedo enviar mensajes privados!", "Hay tres posibles razones: No estas registrado o no has ingresado, el administrador deshabilito el sistema de mensajes privados el administrador ha deshabilitado para ti la mensajería.");
$faq[] = array("¡Quiero evitar mensajes privados no deseados!", "En un futuro será agregada la característica de ignorar mensajes, por ahora solo envía un mensaje al administrador si recibes mensajes no deseados :(.");
$faq[] = array("¡He recibido correo basura o correos maliciosos de alguien en este foro!", "Lo sentimos mucho, la característica de mandar correos tiene amplios conceptos de seguridad y privacidad. Envía el correo al administrador, tal como venia, incluyendo headers y demás, el tomará acciones.");
//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Acerca de phpBB2");
$faq[] = array("¿Quien programó este foro?", "Esta aplicación (en su forma original) es producida, liberada y con derechos de autor pertenecientes al <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Group</a>. Está hecho bajo la GNU (Licencia Pública General) y es de libre distribución (click en el enlace para conocer mas detalles)");
$faq[] = array("¿Por qué este foro no tiene X cosa?", "Este foro fue escrito y licenciado a través de phpBB Group. Si cree que debería tener alguna otra opción o característica visite phpbb.com y mire lo que el phpBB Group tiene que decir. Por favor, no publique mensajes de ese tipo en los foros de phpBB.com, los miembros de Sourceforge están llenos de ideas y en constante innovación para agregarle mejoras a este foro.");
$faq[] = array("¿A quien puedo contactar acerca de abusos o usos ilegales relacionados con este foro?", "Puede contactar al administrador del foro, si no encuentra la forma de contactarlo intente contactando a cualquiera de los moderadores. Si continúas sin respuesta deberías contactar con el propietario del dominio (haz una búsqueda whois) o si está instalado en un servidor gratuito (e.g. yahoo, free.fr, f2s.com, etc.), al responsable de mantenimiento o abusos del servicio. Por favor, se consciente de que el Grupo phpBB no tiene control en absoluto y no puede mantener control de como, donde o por quien se usa este foro. Es absolutamente innecesario contactar con el grupo phpBB en relación a término legales que sean relacionados con la web phpbb.com o el paquete de software phpBB en si mismo. Si envías un correo al grupo phpBB sobre el uso de terceros de este software no esperes una contestación amable o ninguna contestación.");
//
// Attachment Mod Admin Language Variables
//
$faq[] = array("--","Ficheros adjuntos");
$faq[] = array("¿Cómo puedo añadir un fichero adjunto?", "Puedes añadir un adjunto cuando envías un nuevo mensaje. Verás un formulario tal que <i>Añadir Adjunto</i> debajo de la casilla principal del mensaje. Cuando hagas click en el botón <i>Explorar...</i> el diálogo standart Abrir se abrirá. navega hasta el fichero que quieras adjuntar, selecciónala y haz click en OK, Abrir o doble click de acuerdo con el procedimiento habitual de tu ordenador. Si escoges añadir un comentario en el campo <i>Comentario de Fichero</i> este campo será usado como enlace al archivo adjunto. Si no usas el campo comentario el nombre del propio fichero será usado para el enlace al adjunto. Si el administrador del foro te ha dado permisos para subir múltiples adjuntos, podrás hacerlo siguiendo el mismo procedimiento hasta que llegues al límite que de máximos adjuntos permitidos por cada mensaje.<br/><br/>El administrador del foro pone un límite de tamaño y de extensión de ficheros y alguna otra cosa más para los adjuntos en el foro. Quedas advertido de que es tu responsabilidad de que los adjuntos estén de acuerdo con las normas de la web, y de que podrán ser borrados sin ningún aviso.<br/><br/>Háganse cargo de que el propietario de la web, webmaster, administradores y moderadores no se harán cargo de ninguna pérdida de datos.");
$faq[] = array("¿Cómo puedo añadir un adjunto después de haber escrito el mensaje?", "Para poder añadir un adjunto después de haber escrito el mensaje es necesario editar el mensaje original y seguir la descripción anterior para añadir adjuntos. El nuevo adjunto será añadido cuando hagas click en <i>Enviar</i> para añadir el mensaje editado.");
$faq[] = array("¿Cómo puedo borrar un fichero adjunto?", "Para borrar adjuntos necesitas editar tu mensaje y hacer click en el botón <i>Borrar Adjunto</i> que está al lado del adjunto que quieres borrar en el campo <i>Archivos Adjuntos</i>. El adjunto será borrado cuando hagas click en <i>Enviar</i> para añadir el mensaje.");
$faq[] = array("¿Cómo actualizo el comentario de un adjunto?", "Para actualizar el comentario de un adjunto necesitas editar tu mensaje, edita el texto en el campo <i>Comentario de Archivo</i> y haz click en el botón <i>Actualizar Comentario</i> que está al lado de del comentario del fichero que quieres actualizar en el campo de <i>Archivos Adjuntos</i>. El comentario del adjunto será actualizado cuando hagas click en el botón <i>Enviar</i> para añadir el mensaje editado.");
$faq[] = array("¿Por qué ya no se ve mi adjunto en el mensaje?", "Lo más probable es que el fichero o la extensión no estén ya permitidas en el foro, o que un moderador o administrador haya borrado el archivo porque está en conflicto con las condiciones de uso de la web.");
$faq[] = array("¿Por qué no puedo agregar ficheros adjuntos?", "En algunos foros, el añadir ficheros adjuntos puede limitarse a ciertos grupos de usuarios. Para añadir adjuntos necesitas una autorización especial, sólo el administrador de la web y los moderadores te pueden dar ese acceso, deberías de contactar con ellos.");
$faq[] = array("Tengo los permisos necesarios, ¿por qué no puedo agregar ficheros adjuntos?", "El administrador pone un límite máximo de tamaño de archivo, la extensión del archivo y tipos del mismo, para los ficheros adjuntos del foro. El moderador o administrador puede haber cambiado tus permisos, o desactivo los archivos adjuntos en un foro específico. Debes intentar conseguir una explicación en el mensaje del error al intentar agregar un adjunto, si no, podrías ponerte en contacto con el moderador o administrador.");
$faq[] = array("¿Por qué no puedo borrar los ficheros adjuntos?", "En algunos foros borrar los ficheros adjuntos puede limitarse a ciertos usuarios o grupos. Para borrar los archivos adjuntos necesita un nivel de usuario suficiente, sólo el administrador del foro puede conceder este nivel de usuario, usted debe avisarlo.");
$faq[] = array("¿Por qué no puedo ver/descargar los ficheros adjuntos?", "En algunos foros, el ver/descargas ficheros adjuntos puede limitarse a ciertos grupos de usuarios. Para ver/descargar los ficheros adjuntos necesita disponer de un nivel de usuario mínimo definido por el administrador.");
$faq[] = array("¿A quien pregunto sobre adjuntos ilegales o probablemente ilegales?", "Debes ponerte en contacto con el administrador de la web. Si no puedes contactar con él debes de hacerlo con los moderadores y preguntarles a quien debes de pedir permiso en su lugar. Si continúas sin tener respuesta, debes de contactar al propietario de este dominio (haz una búsqueda whois) o, si está corriendo en un servidor gratuito (por ejemplo yahoo, free.fr, f2s.com, etc...), al departamento encargado de ese servicio. Háganse cargo de que el grupo phpBB no tiene ningún control en absoluto y que no va a aceptar responsabilidad legal de ninguna manera sobre como, donde o por quien es usado este foro. Es absolutamente innecesario contactar con el Grupo phpBB en relación a cuestiones legales que no sean directamente relacionados con phphbb.com o el software phpbb propiamente dicho. Si envías un correo al Grupo phpBB sobre el uso de terceros de su software deberás esperar una respuesta inadecuada o ninguna respuesta.");

//
// This ends the FAQ entries
//

