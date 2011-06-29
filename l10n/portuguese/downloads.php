<?php
/*********************************************
  CPG Dragonfly™ CMS
  ********************************************
  Copyright © 2004-2006 by CPG-Nuke Dev Team
  http://dragonflycms.org

  Dragonfly is released under the terms and conditions
  of the GNU GPL version 2 or any later version

  $Source: /cvs/l10n/portuguese/downloads.php,v $
  $Revision: 9.7 $
  $Author: nanocaiordo $
  $Date: 2006/02/26 21:39:59 $
Encoding test: n-array summation ∑ latin ae w/ acute ǽ
*******************************************************/
if (!defined('CPG_NUKE')) { exit; }
global $sitename,$anonwaitdays,$outsidewaitdays;
define('_DL_NOEXISTS','The download you\'ve requested doesn\'t exists.');
define('_CATEGORIES','Categorias');
define('_LVOTES','votos');
define('_TOTALVOTES','Total de votos:');
define('_THEREARE','Há');
define('_NOMATCHES','Nada encontrado para');
define('_SCOMMENTS','Comentários');
define('_UNKNOWN','Desconhecido');
define('_AUTHORNAME','Nome do Autor');
define('_AUTHOREMAIL','Email do Autor');
define('_DOWNLOADNAME','Nome do Programa');
define('_ADDTHISFILE','Adicionar este arquivo');
define('_INBYTES','em bytes');
//define('_FILESIZE','Tamanho');
//define('_VERSION','Versão');
//define('_AUTHOR','Autor');
define('_HOMEPAGE','Homepage');
define('_DOWNLOADNOW','Faça o download deste ficheiro agora!');
define('_RATERESOURCE','Taxa do Recurso');
define('_FILEURL','Link do Arquivo');
define('_ADDDOWNLOAD','Adicionar Download');
define('_DOWNLOADSMAIN','Índice Downloads');
define('_DOWNLOADCOMMENTS','Comentários sobre Download');
define('_DOWNLOADSMAINCAT','Índice de categorias para Download');
define('_ADDADOWNLOAD','Adicionar um novo Download');
define('_DSUBMITONCE','Envie um arquivo novo somente uma vez.');
define('_DPOSTPENDING','Todos os Downloads tem uma verificação.');
define('_RESSORTED','Recursos actualmente ordenados por');
define('_DOWNLOADSNOTUSER1','Você não é um utilizador registado ou não efectuou o seu login.');
define('_DOWNLOADSNOTUSER2','Se você fosse um utilizador registado poderia adicionar downloads neste site.');
define('_DOWNLOADSNOTUSER3','O processo para se tornar um utilizador registado é rápido e fácil.');
define('_DOWNLOADSNOTUSER4','Por que é que nós pedimos o seu registo para aceder certas áreas?');
define('_DOWNLOADSNOTUSER5','Porque assim poderemos-lhe oferecer somente conteúdo de qualidade,');
define('_DOWNLOADSNOTUSER6','pois cada item é revisto e aprovado individualmente pela nossa equipe.');
define('_DOWNLOADSNOTUSER7','Esperamos oferecer-lhe somente informação de grande valor.');
define('_DOWNLOADSNOTUSER8','<a href="'.getlink("Your_Account").'"><b>Registe</b></a>uma conta');
define('_DOWNLOADALREADYEXT','ERRO: Esta URL já existe na Base de Dados!');
define('_DOWNLOADNOTITLE','ERRO: Você precisa digitar um título para a sua URL!');
define('_DOWNLOADNOURL','ERRO: Você precisa digitar uma URL para a sua URL!');
define('_DOWNLOADNODESC','ERRO: Você precisa digitar uma descrição para a sua URL!');
define('_DOWNLOADRECEIVED','A sua submissão foi recebida. Obrigado!');
define('_NEWDOWNLOADS','Novos Downloads');
define('_TOTALNEWDOWNLOADS','Total de Novos Downloads');
define('_DTOTALFORLAST','Total de novos downloads enviados por últimos');
define('_DBESTRATED','Downloads melhores posicionados - Top');
define('_TRATEDDOWNLOADS','total de downloads taxados');
define('_SORTDOWNLOADSBY','Tipo de Download');
define('_DCATNEWTODAY','Novos Downloads nesta categoria adicionados Hoje');
define('_DCATLAST3DAYS','Novos Downloads nesta categoria adicionados nos últimos 3 dias');
define('_DCATTHISWEEK','Novos Downloads nesta categoria adicionados nesta semana');
define('_DDATE1','Data (Downloads Antigos Listados Primeiro)');
define('_DDATE2','Data (Downloads Novos Listados Primeiro)');
define('_DOWNLOADS','downloads');
define('_DOWNLOADPROFILE','Perfil do Download');
define('_DOWNLOADRATINGDET','Detalhes das classificações do Download');
define('_EDITTHISDOWNLOAD','Editar este Download');
define('_DOWNLOADRATING','Classificando Download');
define('_DOWNLOADVOTE','Vote!');
define('_DONLYREGUSERSMODIFY','Only registered users can suggest downloads modifications. Please <a href="'.getlink("Your_Account").'">register or login</a>.');
define('_REQUESTDOWNLOADMOD','Pedido para modificação de Download');
define('_DOWNLOADID','Download ID');
define('_DLETSDECIDE','Recomendação de utilizadores como você ajudará melhor a outros visitantes fazer o download de determinado arquivo.');
define('_DRATENOTE4','Você pode ver uma lista dos <a href="'.getlink("Downloads&amp;d_op=TopRated").'"><b>Arquivos Melhores Classificados</b></a>.');
define('_POPULAR','Popular');
define('_TOPRATED','Melhor Colocado');
define('_ADDITIONALDET','Detalhes Adicionais');
define('_EDITORREVIEW','Editor da Revisão');
define('_REPORTBROKEN','Indique-nos os links inválidos');
define('_AND','e');
define('_INDB','no nosso web site');
define('_INSTRUCTIONS','Instruções');
define('_USERANDIP','Fica registado o nome do utilizador bem como o ip de quem enviou o Link, por favor não abuse deste sistema.');
define('_LDESCRIPTION','Descrição: (255 máx. caracteres)');
define('_CHECKFORIT','Você não nos indicou o seu Email. De qualquer maneira a nossa equipe irá conferir o seu Link');
define('_LASTWEEK','última semana');
define('_LAST30DAYS','últimos 30 dias');
define('_1WEEK','1 Semana');
define('_2WEEKS','2 Semanas');
define('_30DAYS','30 Dias');
define('_ADDEDON','Adicionado em');
define('_RATING','Avaliação');
define('_DETAILS','Detalhes');
define('_OF','do');
define('_TVOTESREQ','mínimo de votos necessários');
define('_SHOWTOP','Mostrar Top');
define('_MOSTPOPULAR','Os mais populares - top');
define('_OFALL','de todos');
define('_POPULARITY','Popularidade');
define('_SELECTPAGE','Seleccione a página');
define('_MAIN','Índice');
define('_NEWTODAY','Novo de Hoje');
define('_NEWLAST3DAYS','Novo dos últimos 3 dias');
define('_NEWTHISWEEK','Novo desta Semana');
define('_POPULARITY1','Popular (Mais Visitados Primeiro)');
define('_POPULARITY2','Popular (Menos Visitados Primeiro)');
define('_TITLEAZ','Título (A a Z)');
define('_TITLEZA','Título (Z a A)');
define('_RATING1','Classificação (Da Pontuação mais Baixa para Mais Alta)');
define('_RATING2','Classificação (Da Pontuação mais Alta para Mais Baixa)');
define('_SEARCHRESULTS4','Resultado da busca por');
define('_USUBCATEGORIES','Subcategorias');
define('_TRY2SEARCH','Experimente Procurar');
define('_INOTHERSENGINES','em outros sistemas de busca');
define('_EDITORIAL','Editorial');
define('_EDITORIALBY','Editorial por');
define('_NOEDITORIAL','Nenhum editorial está actualmente disponível para este site.');
define('_RATETHISSITE','Classifique este Recurso');
define('_ISTHISYOURSITE','Este é o seu Recurso?');
define('_ALLOWTORATE','Permita que outros utilizadores classifiquem isto a partir do seu site!');
define('_OVERALLRATING','Avaliação Global');
define('_TOTALOF','Total de');
define('_USER','Utilizadores');
define('_USERAVGRATING','A avaliação média do usuário');
define('_NUMRATINGS','# de Avaliações');
define('_REGISTEREDUSERS','utilizadores Registrados');
define('_NUMBEROFRATINGS','Número de Avaliações');
define('_NOREGUSERSVOTES','Sem votos de utilizadores registados');
define('_BREAKDOWNBYVAL','Desarranjo de Avaliações por valor');
define('_LTOTALVOTES','total de votos');
define('_HIGHRATING','Avaliação Alta');
define('_LOWRATING','Avaliação Baixa');
define('_NUMOFCOMMENTS','Número de Comentários');
define('_WEIGHNOTE','* Nota: Este recurso Faz o balanço entre utilizadores registados e utilizadores anónimos');
define('_NOUNREGUSERSVOTES','Nenhum utilizador anónimo vota');
define('_WEIGHOUTNOTE','* Nota: Este recurso faz o balanço entre utilizadores registados e votos fora do nosso site');
define('_NOOUTSIDEVOTES','Nenhum voto de fora');
define('_OUTSIDEVOTERS','Votos de fora');
define('_UNREGISTEREDUSERS','utilizadores anónimos');
define('_PROMOTEYOURSITE','Promova o seu web site');
define('_PROMOTE01','Talvez você possa se interessar por alguns dos nossos sistemas de \'Avaliação de Sites\' que possuímos. Estes sistemas permitem colocar uma imagem (ou até mesmo um formulário de avaliação) no seu site na Web de modo que possa aumentar o número de votos no seu recurso que disponibilizou. Por favor seleccione uma das opções indicada de seguida:');
define('_TEXTLINK','Link de Texto');
define('_PROMOTE02','Uma maneira de fazer o link à forma de avaliação é usar um link de texto simples:');
define('_HTMLCODE1','O código em HTML que você deveria usar neste caso, é o seguinte:');
define('_THENUMBER','O número');
define('_IDREFER','em HTML referente ao número de identificação do seu site na database de $sitename. Certifique-se que este número esteja presente.');
define('_BUTTONLINK','Link de Botão');
define('_PROMOTE03','Se você está à procura de um pouco mais que um Link de texto simples poderá então escolher um botão pequeno como link:');
define('_RATEIT','Avalie este web site!');
define('_HTMLCODE2','O código fonte para o botão acima é:');
define('_REMOTEFORM','Forma de Avaliação a Distância');
define('_PROMOTE04','Se você nos enganar, nós removeremos seu link. Temos dito isto, aqui como uma forma de avaliação remota e séria.');
define('_VOTE4THISSITE','Vote neste Site!');
define('_HTMLCODE3','Usando este formulário irá permitir que os utilizadores avaliem o conteúdo da sua página directamente do seu site ficando esta avaliação armazenada aqui. O método de votação acima é somente de demonstração, mas o código fonte seguinte, mostrado de seguida funciona, bastando que você copie e cole na sua Homepage:');
define('_PROMOTE05','Obrigado! E boa sorte com suas avaliações!');
define('_THANKSBROKEN','Obrigado por manter a integridade deste directório.');
define('_SECURITYBROKEN','Por razões de segurança o seu Nome juntamente com o seu IP serão gravados temporariamente.');
define('_THANKSFORINFO','Obrigado pela Informação.');
define('_LOOKTOREQUEST','Verificaremos brevemente o seu pedido.');
define('_SENDREQUEST','Enviar Pedido');
define('_THANKSTOTAKETIME','Obrigado por dispensar o seu tempo na avaliação de um site aqui em');
define('_RETURNTO','Voltar para');
define('_RATENOTE1','Por favor não vote por mais de uma vez na mesma avaliação.');
define('_RATENOTE2','A escala vai de 1 - 10, sendo 1 para fraco e 10 para excelente.');
define('_RATENOTE3','Por favor seja objectivo no seu voto, pois se todos votarem somente 1 ou 10, as avaliações não serão úteis.');
define('_RATENOTE5','Faça por não votar em você mesmo ou nos seus concorrentes.');
define('_YOUAREREGGED','Você é um utilizador registado e está ligado.');
define('_FEELFREE2ADD','Sinta-se à vontade em comentar este site.');
define('_YOUARENOTREGGED','Você não é um utilizador registado ou não efectuou o seu login.');
define('_IFYOUWEREREG','Se você fosse um utilizador registado poderia comentar neste site.');
define('_MODIFY','Modificar');
define('_COMPLETEVOTE1','Agradecemos o seu voto.');
define('_COMPLETEVOTE2','Já votou sobre isto há $anonwaitdays dia(s).');
define('_COMPLETEVOTE3','Vote apenas uma vez.<br>Todos os votos são registados e revistos.');
define('_COMPLETEVOTE4','Não pode votar num link que você mesmo enviou.<br>Todos os votos são registados e revistos.');
define('_COMPLETEVOTE5','Não preencheu correctamente. Voto inválido');
define('_COMPLETEVOTE6','Apenas um voto por IP permitido por cada $outsidewaitdays dia(s).');

/**************************
  ADMNINISTRATION SECTION
**************************/
define('_ADDDURL','Add this URL');
define('_EZTRANSFERDOWNLOAD','Transfer');
define('_EZTRANSFERDOWNLOADS','Transfer all downloads from category');
define('_DELEZDOWNLOADSCATWARNING','WARNING : Are you sure you want to delete this category? You will delete all sub-categories and attached downloads as well!');
define('_DELCONTENTCAT','WARNING: Are you sure you want to delete this category? Pages under this category, if they exist, will not be removed, but will not be attached to any category.');
define('_DELCATEGORY','Delete Category');
define('_DOWNLOADTITLE','Download Title');
define('_DOWNLOADSINDB','Downloads in our Database');
define('_DOWNLOADSWAITINGVAL','Downloads Waiting for Validation');
define('_CLEANDOWNLOADSDB','Clean Downloads Votes');
define('_BROKENDOWNLOADSREP','Broken Downloads Reports');
define('_DOWNLOADMODREQUEST','Download Modification Requests');
define('_ADDNEWDOWNLOAD','Add a New Download');
define('_MODDOWNLOAD','Modify a Download');
define('_WEBDOWNLOADSADMIN','Web Downloads Administration');
define('_DNOREPORTEDBROKEN','No reported broken downloads.');
define('_DUSERREPBROKEN','User Reported Broken Downloads');
define('_DIGNOREINFO','Ignore (Deletes all <b><i>requests</i></b> for a given download)');
define('_DDELETEINFO','Delete (Deletes <b><i>broken download</i></b> and <b><i>requests</i></b> for a given download)');
define('_DOWNLOADOWNER','Download Owner');
define('_DUSERMODREQUEST','User Download Modification Requests');
define('_DOWNLOADVALIDATION','Download Validation');
define('_CHECKALLDOWNLOADS','Check ALL Downloads');
define('_VALIDATEDOWNLOADS','Validate Downloads');
define('_NEWDOWNLOADADDED','New Download added to the Database');
