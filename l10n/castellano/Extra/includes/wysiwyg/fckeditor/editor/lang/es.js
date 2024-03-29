﻿/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * File Name: es.js
 * 	Spanish language file.
 * 
 * Version:  2.0 RC2
 * Modified: 2004-11-26 01:58:26
 * 
 * File Authors:
 * 		Gabriel Schillaci (contact@lampminds.com)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir                                        : "ltr",

ToolbarCollapse                : "Contraer Barra",
ToolbarExpand                : "Expandir Barra",

// Toolbar Items and Context Menu
Save                                : "Guardar",
NewPage                                : "Nueva Página",
Preview                                : "Vista Previa",
Cut                                        : "Cortar",
Copy                                : "Copiar",
Paste                                : "Pegar",
PasteText                        : "Pegar como texto plano",
PasteWord                        : "Pegar desde Word",
Print                                : "Imprimir",
SelectAll                        : "Seleccionar Todo",
RemoveFormat                : "Eliminar Formato",
InsertLinkLbl                : "Enlace",
InsertLink                        : "Insertar/Editar Enlace",
RemoveLink                        : "Eliminar Enlace",
InsertImageLbl                : "Imagen",
InsertImage                        : "Insertar/Editar Imagen",
InsertTableLbl                : "Tabla",
InsertTable                        : "Insertar/Editar Tabla",
InsertLineLbl                : "Línea",
InsertLine                        : "Insertar Línea Horizontal",
InsertSpecialCharLbl: "Caracter Especial",
InsertSpecialChar        : "Insertar Caracter Especial",
InsertSmileyLbl                : "Emoticonos",
InsertSmiley                : "Insertar Emoticonos",
About                                : "Acerca de FCKeditor",
Bold                                : "Negrita",
Italic                                : "Cursiva",
Underline                        : "Subrayado",
StrikeThrough                : "Tachado",
Subscript                        : "Subíndice",
Superscript                        : "Superíndice",
LeftJustify                        : "Alinear a Izquierda",
CenterJustify                : "Centrar",
RightJustify                : "Alinear a Derecha",
BlockJustify                : "Justificado",
DecreaseIndent                : "Disminuir Sangría",
IncreaseIndent                : "Aumentar Sangría",
Undo                                : "Deshacer",
Redo                                : "Rehacer",
NumberedListLbl                : "Numeración",
NumberedList                : "Insertar/Eliminar Numeración",
BulletedListLbl                : "Viñetas",
BulletedList                : "Insertar/Eliminar Viñetas",
ShowTableBorders        : "Mostrar Bordes de Tablas",
ShowDetails                        : "Mostrar saltos de Párrafo",
Style                                : "Estilo",
FontFormat                        : "Formato",
Font                                : "Fuente",
FontSize                        : "Tamaño",
TextColor                        : "Color de Texto",
BGColor                                : "Color de Fondo",
Source                                : "Fuente HTML",
Find                                : "Buscar",
Replace                                : "Reemplazar",

// Context Menu
EditLink                        : "Editar Enlace",
InsertRow                        : "Insertar Fila",
DeleteRows                        : "Eliminar Filas",
InsertColumn                : "Insertar Columna",
DeleteColumns                : "Eliminar Columnas",
InsertCell                        : "Insertar Celda",
DeleteCells                        : "Eliminar Celdas",
MergeCells                        : "Combinar Celdas",
SplitCell                        : "Dividir Celda",
CellProperties                : "Propiedades de Celda",
TableProperties                : "Propiedades de Tabla",
ImageProperties                : "Propiedades de Imagen",

FontFormats                        : "Normal;Formateado;Dirección;Encabezado 1;Encabezado 2;Encabezado 3;Encabezado 4;Encabezado 5;Encabezado 6",

// Alertas y Mensajes
ProcessingXHTML                : "Procesando XHTML. Por favor, espere...",
Done                                : "Hecho",
PasteWordConfirm        : "El texto que quieres parece provenir de Word. ¿Quieres depurarlo antes de pegarlo?",
NotCompatiblePaste        : "Este comando está disponible sólo para Internet Explorer version 5.5 or superior. ¿Quieres pegarlo sin depurar?",
UnknownToolbarItem        : "Item de barra desconocido \"%1\"",
UnknownCommand                : "Nombre de comando desconocido \"%1\"",
NotImplemented                : "Comando no implementado",
UnknownToolbarSet        : "Nombre de barra \"%1\" no definido",

// Ventanas de Dialogo
DlgBtnOK                        : "OK",
DlgBtnCancel                : "Cancelar",
DlgBtnClose                        : "Cerrar",
DlgAdvancedTag                : "Avanzado",

// Titulos de Ventanas de Dialogo
DlgGenNotSet                : "&lt;No definido&gt;",
DlgGenId                        : "Id",
DlgGenLangDir                : "Orientación de idioma",
DlgGenLangDirLtr        : "Izquierda a Derecha (LTR)",
DlgGenLangDirRtl        : "Derecha a Izquierda (RTL)",
DlgGenLangCode                : "Código de idioma",
DlgGenAccessKey                : "Clave de Acceso",
DlgGenName                        : "Nombre",
DlgGenTabIndex                : "Índice de tabulación",
DlgGenLongDescr                : "Descripción larga URL",
DlgGenClass                        : "Clases de hojas de estilo",
DlgGenTitle                        : "Título",
DlgGenContType                : "Tipo de Contenido",
DlgGenLinkCharset        : "Fuente de caracteres vinculado",
DlgGenStyle                        : "Estilo",

// Ventanas de Dialogo de Imagen
DlgImgTitle                        : "Propiedades de Imagen",
DlgImgInfoTab                : "Información de Imagen",
DlgImgBtnUpload                : "Enviar al Servidor",
DlgImgURL                        : "URL",
DlgImgUpload                : "Cargar",
DlgImgBtnBrowse                : "Visualizar Servidor",
DlgImgAlt                        : "Texto Alternativo",
DlgImgWidth                        : "Anchura",
DlgImgHeight                : "Altura",
DlgImgLockRatio                : "Proporcional",
DlgBtnResetSize                : "Tamaño Original",
DlgImgBorder                : "Borde",
DlgImgHSpace                : "Esp.Horiz",
DlgImgVSpace                : "Esp.Vert",
DlgImgAlign                        : "Alineación",
DlgImgAlignLeft                : "Izquierda",
DlgImgAlignAbsBottom: "Abs inferior",
DlgImgAlignAbsMiddle: "Abs centro",
DlgImgAlignBaseline        : "Línea base",
DlgImgAlignBottom        : "Pie",
DlgImgAlignMiddle        : "Centro",
DlgImgAlignRight        : "Derecha",
DlgImgAlignTextTop        : "Tope del texto",
DlgImgAlignTop                : "Tope",
DlgImgPreview                : "Vista Previa",
DlgImgMsgWrongExt        : "Sólo se aceptan los siguientes tipos de archivo:\n\n" + FCKConfig.ImageUploadAllowedExtensions + "\n\nOperación cancelada.",
DlgImgAlertSelect        : "Por favor seleccione una imagen a cargar",
DlgImgAlertUrl                : "Por favor escribe la URL de la imagen",

// Ventanas de Dialogo de Vinculos
DlgLnkWindowTitle        : "Enlace",
DlgLnkInfoTab                : "Información de Enlace",
DlgLnkTargetTab                : "Destino",

DlgLnkType                        : "Tipo de Enlace",
DlgLnkTypeURL                : "URL",
DlgLnkTypeAnchor        : "Referencia en esta página",
DlgLnkTypeEMail                : "Correo",
DlgLnkProto                        : "Protocolo",
DlgLnkProtoOther        : "&lt;otro&gt;",
DlgLnkURL                        : "URL",
DlgLnkBtnBrowse                : "Visualizar Servidor",
DlgLnkAnchorSel                : "Seleccionar una referencia",
DlgLnkAnchorByName        : "Por Nombre de Referencia",
DlgLnkAnchorById        : "Por ID de elemento",
DlgLnkNoAnchors                : "&lt;No hay referencias disponibles en el documento&gt;",
DlgLnkEMail                        : "Dirección de Correo",
DlgLnkEMailSubject        : "Título del Mensaje",
DlgLnkEMailBody                : "Cuerpo del Mensaje",
DlgLnkUpload                : "Cargar",
DlgLnkBtnUpload                : "Enviar al Servidor",

DlgLnkTarget                : "Destino",
DlgLnkTargetFrame        : "&lt;marco&gt;",
DlgLnkTargetPopup        : "&lt;ventana emergente&gt;",
DlgLnkTargetBlank        : "Nueva Ventana(_blank)",
DlgLnkTargetParent        : "Ventana Padre (_parent)",
DlgLnkTargetSelf        : "Misma Ventana (_self)",
DlgLnkTargetTop                : "Ventana primaria (_top)",
DlgLnkTargetFrame        : "Nombre de Marco de Destino",
DlgLnkPopWinName        : "Nombre de Ventana Emergente",
DlgLnkPopWinFeat        : "Características de Ventana Emergente",
DlgLnkPopResize                : "Ajustable",
DlgLnkPopLocation        : "Barra de ubicación",
DlgLnkPopMenu                : "Barra de Menú",
DlgLnkPopScroll                : "Barras de desplazamiento",
DlgLnkPopStatus                : "Barra de Estado",
DlgLnkPopToolbar        : "Barra de Herramientas",
DlgLnkPopFullScrn        : "Pantalla Completa (IE)",
DlgLnkPopDependent        : "Dependiente (Netscape)",
DlgLnkPopWidth                : "Anchura",
DlgLnkPopHeight                : "Altura",
DlgLnkPopLeft                : "Posición Izquierda",
DlgLnkPopTop                : "Posición Derecha",

DlgLnkMsgWrongExtA        : "Sólo se aceptan los siguientes tipos de archivo:\n\n" + FCKConfig.LinkUploadAllowedExtensions + "\n\nOperación cancelada.",
DlgLnkMsgWrongExtD        : "Los siguientes tipos de archivo no son aceptados:\n\n" + FCKConfig.LinkUploadDeniedExtensions + "\n\nOperación cancelada.",

DlnLnkMsgNoUrl                : "Por favor escribe el Enlace URL",
DlnLnkMsgNoEMail        : "Por favor escribe la dirección de Correo",
DlnLnkMsgNoAnchor        : "Por favor seleccione una referencia",

// Ventanas de Dialogo de Color
DlgColorTitle                : "Seleccionar Color",
DlgColorBtnClear        : "Ninguno",
DlgColorHighlight        : "Resaltado",
DlgColorSelected        : "Seleccionado",

// Ventanas de Dialogo de Emoticonos
DlgSmileyTitle                : "Insertar un Emoticono",

// Ventanas de Dialogo de Caracteres Especiales
DlgSpecialCharTitle        : "Seleccione un caracter especial",

// Ventanas de Dialogo de Tablas
DlgTableTitle                : "Propiedades de Tabla",
DlgTableRows                : "Filas",
DlgTableColumns                : "Columnas",
DlgTableBorder                : "Tamaño de Borde",
DlgTableAlign                : "Alineación",
DlgTableAlignNotSet        : "<No establecido>",
DlgTableAlignLeft        : "Izquierda",
DlgTableAlignCenter        : "Centrado",
DlgTableAlignRight        : "Derecha",
DlgTableWidth                : "Anchura",
DlgTableWidthPx                : "pixeles",
DlgTableWidthPc                : "porcentaje",
DlgTableHeight                : "Anchura",
DlgTableCellSpace        : "Esp. e/celdas",
DlgTableCellPad                : "Esp. interior",
DlgTableCaption                : "Título",

// Ventanas de Dialogo de Celdas de Tablas
DlgCellTitle                : "Propiedades de Celda",
DlgCellWidth                : "Anchura",
DlgCellWidthPx                : "pixeles",
DlgCellWidthPc                : "porcentaje",
DlgCellHeight                : "Altura",
DlgCellWordWrap                : "Cortar Línea",
DlgCellWordWrapNotSet        : "<No establecido>",
DlgCellWordWrapYes        : "Si",
DlgCellWordWrapNo        : "No",
DlgCellHorAlign                : "Alineación Horizontal",
DlgCellHorAlignNotSet        : "<No establecido>",
DlgCellHorAlignLeft        : "Izquierda",
DlgCellHorAlignCenter        : "Centrado",
DlgCellHorAlignRight: "Derecha",
DlgCellVerAlign                : "Alineación Vertical",
DlgCellVerAlignNotSet        : "<Not establecido>",
DlgCellVerAlignTop        : "Tope",
DlgCellVerAlignMiddle        : "Medio",
DlgCellVerAlignBottom        : "ie",
DlgCellVerAlignBaseline        : "Línea Base",
DlgCellRowSpan                : "Abarcar Filas",
DlgCellCollSpan                : "Abarcar Columnas",
DlgCellBackColor        : "Color de Fondo",
DlgCellBorderColor        : "Color de Borde",
DlgCellBtnSelect        : "Seleccione...",

// Ventanas de Dialogo de Busqueda
DlgFindTitle                : "Buscar",
DlgFindFindBtn                : "Buscar",
DlgFindNotFoundMsg        : "El texto especificado no ha sido encontrado.",

// Ventanas de Dialogo de Reemplazo
DlgReplaceTitle                        : "Reemplazar",
DlgReplaceFindLbl                : "Texto a buscar:",
DlgReplaceReplaceLbl        : "Reemplazar con:",
DlgReplaceCaseChk                : "Coincidir may/min",
DlgReplaceReplaceBtn        : "Reemplazar",
DlgReplaceReplAllBtn        : "Reemplazar Todo",
DlgReplaceWordChk                : "Coincidir toda la palabra",

// Ventanas de Dialogo de Operaciones de pegado
PasteErrorPaste        : "La configuración de seguridad de este navegador no permite la ejecución automática de operaciones de pegado. Por favor use el teclado (Ctrl+V).",
PasteErrorCut        : "La configuración de seguridad de este navegador no permite la ejecución automática de operaciones de cortado. Por favor use el teclado (Ctrl+X).",
PasteErrorCopy        : "La configuración de seguridad de este navegador no permite la ejecución automática de operaciones de copiado. Por favor use el teclado (Ctrl+C).",

PasteAsText                : "Pegar como Texto Plano",
PasteFromWord        : "Pegar desde Word",

DlgPasteMsg                : "El editor no pudo ejecutar automáticamente el pegado debido a la <STRONG>configuración de seguridad</STRONG> de tu navegador.<BR>Por favor pegua dentro del siguiente recuadro usando el teclado (<STRONG>Ctrl+V</STRONG>) y pulsa <STRONG>OK</STRONG>.",

// Selector de Color
ColorAutomatic        : "Automático",
ColorMoreColors        : "Más Colores...",

// Ventanas de Dialogo Acerca de
DlgAboutVersion        : "versión",
DlgAboutLicense        : "Licenciado bajo los términos de GNU Lesser General Public License",
DlgAboutInfo        : "Para más información por favor dirigirse a"
}