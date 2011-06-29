<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version
  
  $Source: /cvs/l10n/brazilian/reviews.php,v $
  $Revision: 9.6 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:48 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
define('_YOURNAME','Seu nome');
define('_SORTASC','Ordem crescente');
define('_SORTDESC','Ordem decrescente');
define('_CANCEL','Cancelar');
define('_SCORE','Pontos:');
define('_REPLYMAIN','Enviar comentário');
define('_ALLOWEDHTML','HTML Permitido:');
define('_POSTANON','Enviar como Anônimo');
define('_WRITEREVIEW','Escreva uma Revisão');
define('_WRITEREVIEWFOR','Escreva uma Revisão para');
define('_ENTERINFO','Por favor entre com as informações de acordo com as especificações');
define('_PRODUCTTITLE','Título do que irá revisar');
define('_NAMEPRODUCT','Nome do que foi revisado.');
define('_REVIEW','Revisão');
define('_CHECKREVIEW','Sua Revisão atual. Por favor atente-se à gramática e grafia! Escreva uma revisão de no mínimo 100 palavras. Você pode inserir código HTML em suas modificações, se souber usar.');
define('_FULLNAMEREQ','Seu nome completo. (Necessário)');
define('_REMAIL','Seu e-mail');
define('_REMAILREQ','Seu endereço de e-mail. (Necessário)');
define('_SELECTSCORE','Pontuação deste Produto');
define('_RELATEDLINK','Links relacionados');
define('_PRODUCTSITE','Website oficial do produto. Confira o endereço e verifique se ele começa com "http://"');
define('_LINKTITLE','Título do Link ');
define('_LINKTITLEREQ','Requerido, se você tem um site relacionado, caso contrário, é opcional.');
define('_RIMAGEFILE','Nome da figura');
define('_RIMAGEFILEREQ','Nome da imagem correspondente, pode ser colocada em /images/reviews. Não é obrigatório');
define('_CHECKINFO','Por favor tenha certeza que a informação que você entrou é 100% correta e está com bom gramática. Por exemplo, não exagere com seu texto, ele pode ser rejeitado.');
define('_INVALIDTITLE','Título inválido... (Não pode estar em branco)');
define('_INVALIDSCORE','Pontuação inválida... (Deve ser entre 1 e 10)');
define('_INVALIDTEXT','Texto de Revisão inválido... (Não pode estar em branco)');
define('_INVALIDHITS','Os números devem ser inteiros e positivos');
define('_CHECKNAME','Você deve informar seu nome e e-mail');
define('_INVALIDEMAIL','e-mail inválido... (seunome@provedor.com)');
define('_INVALIDLINK','Você deve informar o título do link e um link relacionado ou deixar ambos os espaços em branco');
define('_ADDED','Adicionar:');
define('_REVIEWER','Revisor:');
define('_REVIEWID','ID da Revisão');
define('_LOOKSRIGHT','Parece correto?');
define('_RMODIFIED','Modificado');
define('_RADDED','Adicionado');
define('_ADMINLOGGED','Há um Administrdor logado no Site no momento. Esta revisão pode ser incluída imediatamente!');
define('_RTHANKS','Obrigado por enviar sua Revisão');
define('_MODIFICATION','modificação');
define('_ISAVAILABLE','está agora disponível no banco de dados de Revisões.');
define('_EDITORWILLLOOK','O Administrador irá analisar sua Revisão e em breve ela estará disponível.');
define('_RBACK','Voltar ao índice de Revisões');
define('_RWELCOME','Bem-vindo(a) a seção de Revisões');
define('_10MOSTPOP','As 10 primeiras revisões');
define('_10MOSTREC','As 10 revisões mais recentes');
define('_THEREARE','Há');
define('_REVIEWSINDB','Revisões no Banco de Dados');
define('_REVIEWSLETTER','Revisões para carta');
define('_NOREVIEWS','Nem todas as revisões são para carta');
define('_TOTALREVIEWS','Total de Revisão(ões) encontrada(s).');
define('_RETURN2MAIN','Retornar ao Menu Principal');
define('_REVIEWCOMMENT','Faça um Comentário sobre a Revisão:');
define('_YOURNICK','Seu nome:');
define('_RCREATEACCOUNT','<a href="'.getlink("Your_Account").'">Registre-se</a>');
define('_YOURCOMMENT','Seu comentário:');
define('_MYSCORE','Minha pontuação:');
define('_REVIEWMOD','Revisão modificada');
define('_RDATE','Data:');
define('_RTITLE','Título:');
define('_RTEXT','Texto:');
define('_REVEMAIL','e-mail:');
define('_RLINK','Link:');
define('_RLINKTITLE','Título do Link:');
define('_COVERIMAGE','Imagem correspondente:');
define('_PREMODS','Visualizar modificações');
define('_PAGE','Páginas');
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
