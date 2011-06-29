<?php
/*************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 9.2 2006/02/12 16:02:01 djmaze Exp $
 *
 *
 * Encoding test n-array summation ∑ latin ae with acute ǽ 
 *********************************************************/
/* 2002/09/12 Translated by TankTonk */
/* 2002/12/17 update by Soon-Son Kwon(kss@kldp.org) */
/*************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *********************************************************/

//
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","로그인과 등록 문제");
$faq[] = array("왜 로그인이 안되나요?", "등록을 하셨습니까? 로그인하려면 등록을 먼저 해야 합니다. 게시판에서 퇴출당한 것은 아닌가요(그런 경우 메시지가 나옵니다)? 만약 그렇다면, 웹마스터나 게시판 관리자를 접촉하십시오. 등록도 했고 퇴출당한 것도 아니면서 로그인이 안되면 사용자 이름과 비밀번호를 다시 한번 확인해 보세요. 이상이 일반적인 문제입니다, 그래도 안되면 게시판 관리자를 접촉하십시오. 게시판 설정이 잘못 되었을 수도 있습니다.");
$faq[] = array("왜 등록을 해야 하나요?", "반드시 할 필요는 없습니다, 글을 남기기 위해서 등록을 해야 하는지는 게시판 관리자가 결정합니다. 그러나 등록을 하게 되면 손님에게는 주어지지 않는 부가 기능들, 아바타, 비공개 메시지, 메일링, 사용자 그룹 정기 구독등이 제공됩니다. 등록은 잠시면 되므로 등록할 것을 권합니다.");
$faq[] = array("왜 자동으로 로그아웃되나요?", "로그인할 때에 <i>자동 로그인</i> 박스에 체크를 하지 않으면 일정시간후 게시판은 사용자를 로그 아웃합니다. 이것은 다른 사람이 계정을 남용하는 것을 막아줍니다. 계속 로그인 상태로 있으려면 로그인 할 때 박스에 체크를 하십시오, 도서관이나 인터넷 가페 같이 여러사람이 컴퓨터를 공유하는 곳에서는 사용하지 않는 것이 좋습니다.");
$faq[] = array("내 사용자 이름이 현재 사용자 리스트에 나오지 않게 하려면?", "개인 정보에 가면 <i>온라인 상태 숨기기</i> 옵션이 있습니다, 이것을 바꾸면 자기 자신과 게시판 관리자에게만 보여지며 숨은 사용자로 취급됩니다.");
$faq[] = array("비밀번호를 잊었어요!", "걱정마십시오! 비밀번호를 알아낼 수는 없지만 초기화는 할 수 있습니다. 로그인 화면으로 가서 <u>비밀 번호를 잊었어요</u>를 클릭한 다음, 화면 지시에 따르면 곧 게시판을 다시 사용할 수 있습니다.");
$faq[] = array("등록을 했는데 로그인이 안되요!", "우선 사용자 이름과 비밀번호를 확인해 보십시오. 제대로 입력하였다면 다음 두가지 중에서 하나가 발생했을 수가 있습니다. 만약 COPPA 지원이 사용가능으로 되어 있고 등록 당시에 <u>13세 미만입니다</u> 를 클릭했다면 받은 지시를 따라야만 합니다. 이 경우가 아니라면 계정 인증 필요합니다? 일부 게시판은 새로운 등록시에 로그인 전에 본인이나 게시판 관리자로부터 인증을 요구합니다. 등록을 할 때에 인증이 필요한지 여부를 알려 줍니다. 이메일을 받았다면 지시사항을 따르십시오, 이메일을 받지 않았다면 이메일 주소가 확실한지 확인해 보십시오. 인증을 하는 이유는 나쁜 마음으로 게시판을 남용하는 것을 막기 위한 것입니다. 이메일 주소가 확실하다면 게시판 관리자를 접촉해 보십시오.");
$faq[] = array("과거에 등록을 했는데 지금 더이상 로그인이 안됩니다?!", "대부분의 경우는 사용자 이름과 비밀번호를 잘못 입력했거나(등록시에 받은 이메일을 참조) 관리자가 어떤 연유로 계정을 지운 것 같습니다. 후자의 경우라면 올린 글이 없지는 않습니까? 데이터베이스의 부담을 줄이기 위하여 아무것도 올리지 않는 사용자를 주기적으로 삭제하는것이 요즘의 추세입니다. 재등록하시고 토론에 열심히 참여하십시오.");


$faq[] = array("--","개인 정보");
$faq[] = array("개인 정보는 어떻게 바꾸나요?", "모든 정보는 데이터베이스에 저장되어 있습니다. 수정하려면  <u>개인 정보</u> 링크(일반적으로 화면 상단에 있음)를 클릭하십시오. 여기에서 사용자 정보를 변경할 수 있습니다");
$faq[] = array("시간이 틀립니다!", "시간은 거의 맞습니다만 시간대가 잘못 지정되어 있을 수도 있습니다. 만약 그렇다면 사용자 정보에서 올바른 시간대를 지정하십시오. 시간대 변경은 다른 설정들과 마찬가지로 등록된 사용자만 할 수 있습니다. 그러므로 아직 등록을 안 했다면 지금 등록을 하십시오.");
$faq[] = array("시간대를 변경했는데도 시간이 틀립니다!", "시간대를 정확히 맞추었는데도 시간이 틀린다면 아마도 일광 절약 시간(혹은 섬머타임)때문일 것입니다. 이 게시판은 그 시간 차이에 대한 변경 기능이 없으므로 차이가 있을 수 있습니다.");
$faq[] = array("내가 사용하는 언어가 리스트에 없습니다!", "관리자가 해당 언어를 설치하지 않았거나 게시판을 해당 언어로 번역한 것이 없을 경우입니다. 게시판 관리자에게 필요한 언어의 설치를 요구하거나, 만약 번역된 것이 없다면 번역을 한번 시도해 보십시오. 보다 자세한 사항은 phpBB 그룹 웹사이트를 참조하십시오");
$faq[] = array("어떻게 사용자 이름 아래에 이미지를 표시합니까?", "사용자 이름 밑에 두개의 이미지가 표시될 수 있습니다. 첫번째는 등급에 관련된 것으로 별이나 블럭으로 표시되는데 얼마나 많은 글을 올렸는가 혹은 게시판에서의 위치가 무엇인가를 알려 줍니다. 그 밑에 아바타로 알려진 이미지가 표시될 수 있는데, 이것은 각 사용자에게 고유합니다. 아바타가 사용 가능한지와 아바타를 선택하는 방법은 관리자에게 달려 있습니다. 아바타를 사용할 수 없게 되어 있으면 이것은 게시판 관리자의 결정이므로 관리자에게 그 이유를 물어보십시오.");
$faq[] = array("등급은 어떻게 바꾸나요?", "일반적으로 등급은 직접 바꿀수가 없습니다(등급은 사용자 이름 밑에 표시되며 개인 정보 설정에 따릅니다). 대부분의 게시판은 올린 글 수를 표시하기 위하여 등급을 사용하거나 특정 사용자를 표시하는데 등급을 사용하는데 게시판 관리자나 운영자가 그 예입니다. 단지 등급을 올리기 위하여 쓸데없는 글을 올리는 것을 삼가하기 바랍니다, 관리자나 운영자가 계급을 강등시킬 수도 있습니다.");
$faq[] = array("이메일 링크를 클릭하니까 로그인하라고 하는데요?", "등록된 사용자만이 내장된 이메일 기능을 사용하여 이메일을 보낼 수 있습니다(운영자가 이 기능을 살려 놓은 경우에만). 이것은 무명의 사용자가 이메일 시스템을 남용하는 것을 막고자 함입니다.");


$faq[] = array("--","글쓰기 문제");
$faq[] = array("게시판에 글은 어떻게 올리나요?", "쉬운 문제군요, 게시판이나 주제 화면에서 관련 버튼을 클릭하십시오. 글을 올리기 전에 등록이 되어 있어야 합니다, 사용할 수 있는 기능들은 화면의 아래에 나열되어 있습니다 (<i>글쓰기, 투표하기 등</i> 리스트)");
$faq[] = array("올린글을 어떻게 수정하거나 지우나요?", "게시판 관리자나 운영자가 아닌 경우 오직 자기가 올린 글만 편집, 삭제가 가능합니다. 관련글의 <i>편집</i> 버튼을 클릭하여 수정할 수 있습니다. 이미 누군가가 답글을 남겼다면, 그 글 밑에 몇번이나 수정을 했는지를 나타내는 텍스트가 표시됩니다. 아무도 답글을 남기지 않았다면 표시가 되지 않으며, 관리자나 운영자가 글을 수정했을 때(수정 이유를 남길 것입니다)도 아무것도 나타나지 않습니다. 답글이 있으면 일반 사용자는 게시물을 삭제할 수 없습니다.");
$faq[] = array("게시물에 어떻게 서명을 추가하나요?", "게시물에 서명을 추가하려면 먼저 서명이 있어야 하는데 개인 정보를 통해 할 수 있습니다. 서명이 준비되어 있으면 게시물 양식상의 <i>서명 추가</i> 박스를 체크하여 서명을 추가합니다. 개인 정보에서 해당 옵션을 체크하여 기본으로 서명을 모든 글에 추가하도록 할 수 있습니다(게시물 양식 상의 서명 추가 박스에 체크를 지워서 개별적으로 서명 추가를 안하게 할 수도 있습니다)");
$faq[] = array("투표는 어떻게 만드나요?", "투표를 만드는 것은 쉽습니다, 새로운 글을 올릴때 (혹은 권한이 있으면서 수정할 때) <i>투표 추가</i> 를 볼 수 있습니다 (만약 찾을수 없다면 투표를 만들 권한이 없는 것 입니다). 투표의 제목을 입력하고 최소한 두 개의 옵션을 선택하십시오(옵션을 설정하려면 투표할 질문을 입력하고 <i>옵션 추가</i> 버튼을 클릭하십시오. 또한, 투표의 시간제한을 설정할 수 있는데, 0 은 무한대 투표입니다. 나열 가능한 옵션의 갯수에는 제한이 있는데 이것은 운영자가 결정합니다");
$faq[] = array("어떻게 투표를 수정하거나 삭제하나요?", "올린 글과 마찬가지로 투표도 만든 사람과 게시판 관리자 및 운영자만이 편집할 수 있습니다. 투표를 편집하려면 첫번째 글을 글릭하십시오(첫먼째 글 만이 투표에 연결되어 있습니다). 아무도 투표를 안했다면 투표를 삭제하거나 임의의 투표 옵션을 수정할 수 있지만, 이미 투표가 되었다면 관리자와 운영자만 수정 및 삭제가 가능합니다. 이것은 투표 중간에 옵션등을 바꿈으로써 투표에 영향을 주는 것을 막고자 함 입니다");
$faq[] = array("왜 게시판에 접근이 안 되나요?", "일부 게시판들은 특정 사용자들과 그룹에게만 제한되어 있을 수 있습니다. 이 곳에서 글을 읽거나 쓰려면 특별 허가가 필요한데, 오직 게시판 관리자와 운영자만이 권한을 줄 수 있으므로 이들을 접촉해야 합니다.");
$faq[] = array("왜 투표에 참여할 수 없나요?", "거짓 투표를 막기 위하여 오직 등록된 사용자만 투표에 참여할 수 있습니다. 등록된 사용자인데 투표를 할 수 없다면 해당 권한이 없는 것입니다.");


$faq[] = array("--","포매팅과 주제 형식");
$faq[] = array("BBCode란?", "BBCode는 HTML의 특별 버전으로써 BBCode의 사용 가능 여부는 운영자가 결정합니다 (또한 글 양식에서 각 글에 대하여 개별적으로 BBCode를 억제할 수 있습니다). BBCode는 스타일에 있어 HTML와 흡사하여 , 태그는 &lt; 와 &gt; 대신에 대괄호 [ 와 ] 안에 들어가며, 어떤것을 어떻게 표시할 것인지를 강력하게 제어합니다. BBCode에 대한 보다 자세한 사항은 설명서를 참조하십시오.");
$faq[] = array("HTML을 사용할 수 있나요?", "그것은 운영자가 결정합니다. 만약 사용 가능하다면 소수의 태그들만 동작할 것입니다. 이것은 일부 사람들이 태그를 남용하여 게시판을 망치거나 하는 것을 막기 위한 <i>보안책</i> 입니다. HTML의 사용은 게시 양식에서 조절될 수 있습니다.");
$faq[] = array("스마일은 무엇입니까?", "스마일이나 이모티콘은 간단한 코드를 이용하여 감정을 전달하는데 사용되는 작은 이미지 입니다, 예를 들어 :) 는 기쁘다, :( 는 슬프다. 이모티콘 리스트는 게시 양식에 있습니다. 너무 많은 스마일은 글을 읽기 어렵게 만들므로 적당히 사용 하십시오, 관리자가 임의로 편집 또는 글 전체를 삭제해 버릴수도 있습니다");
$faq[] = array("이미지를 올릴 수 있나요?", "이미지를 보이게는 할 수 있습니다. 그러나 현재 이 게시판으로 직접 이미지를 올리는 기능은 없습니다. 따라서 이미지 파일이 공개 서버와 같은 곳에 있어서 링크가 가능해야 합니다. 개인 컴퓨터(공개 서버가 아니면)상에 있는 이미지나 인증을 거치는 서버상에 있는 이미지도 링크할 수 없습니다. 이미지를 표시하려면 BBCode [img] 태그나 HTML을 이용하십시오.");
$faq[] = array("공지가 무엇인가요?", "공지는 가끔 중요한 정보를 알리므로 가능한 읽는 것이 좋습니다. 공지는 게시판의 맨 위에 위치합니다. 공지글을 올릴 수 있는지는 운영자가 정하는 권한이 있어야 합니다.");
$faq[] = array("끈적이 주제란 무엇인가요?", "끈적이 주제는 공지사항 바로 밑에, 그리고 첫번째 페이지에만 나옵니다. 때로 중요한 정보를 전달하므로 가능한 읽는 것이 좋습니다. 공지와 마찬가지로 운영자가 권한을 주어야 올릴 수 있습니다.");
$faq[] = array("잠긴 주제란 뭔가요?", "주제는 게시판 관리자나 게시판 운영자가 잠글 수 있습니다. 잠긴 주제에는 답글을 달 수 없으며 그 안에 있던 투표는 자동 종료됩니다. 주제는 여러 사정에 의해 잠길 수 있습니다.");


$faq[] = array("--","사용자 등급과 그룹");
$faq[] = array("운영자란?", "운영자란 게시판 전체를 통틀어 최고의 등급을 갖는 사람들을 말합니다. 이들은 권한 설정, 사용자 금지, 사용자 그룹 및 관리자 설정 등 게시판의 모든 것을 제어할 수 있습니다. 또한 그들은 모든 게시판에서 관리자의 권한도 가지고 있습니다.");
$faq[] = array("관리자란?", "관리자는 게시판을 관리하는 개인이나 그룹을 말합니다. 이들은 자신이 관리하는 게시판내에서 주제의 편집, 삭제, 잠금, 해제, 이동 및 분리 등을 할 수 있는 권한을 가지고 있습니다. 일반적으로 관리자들은 주제를 벗어나거나 글올리기를 남용하거나 공격적인 행위들을 막는 역할을 합니다.");
$faq[] = array("사용자 그룹이란?", "사용자 그룹이란 운영자가 사용자들을 분리하는 방도입니다. 각 사용자는 여러 그룹에 속할 수 있으며(다른 게시판에서는 아닐 수도 있음) 각 그룹은 해당 접근 권한을 부여 받습니다. 이로써 운영자는 쉽게 일부 사용자를 관리자로 지정하거나 비공개 게시판에 대한 권한을 줄 수 있습니다.");
$faq[] = array("사용자 그룹 가입은 어떻게 하나요?", "사용자 그룹에 가입하려면 페이지 헤더에 있는 사용자그룹 링크를 클릭하면 모든 사용자 그룹을 볼 수 있을 것입니다. 모든 그룹이 <i>접근 가능</i>은 아니며 일부는 닫혀있으며, 일부는 비공개일 수 있습니다. 원하는 그룹이 공개되어 있으면 해당 버튼을 클릭하여 가입 신청을 할 수 있습니다. 그 그룹의 관리자가 신청을 승인해야 하며 가입 이유를 물을 수도 있습니다.");
$faq[] = array("사용자 그룹 관리자는 어떻게 되나요?", "사용자 그룹은 게시판 관리자에 의해서 만들어지고 게시판 관리자로 지정됩니다. 사용자 그룹을 만들고 싶으면 우선 운영자를 접촉하십시오.");


$faq[] = array("--","비공개 메시지");
$faq[] = array("비공개 메시지를 보낼 수 없어요!", "세가지 이유가 있을 수 있습니다; 등록되지 않았거나 로그인하지 않았습니다, 게시판 운영자가 전체 게시판에 대하여 비밀 메시지 기능을 막아 놓았습니다,  게시판 운영자가 님의 비공개 메시지 기능을 막아 놓았습니다. 만약 마지막 경우에 해당된다면 운영자에게 이유를 물어보기 바랍니다.");
$faq[] = array("원하지 비공개 않는 메시지가 계속 옵니다!", "가까운 미래에 비공개 메시지 기능에 무시 기능을 넣을 것입니다. 원하지 않는 비공개 메시지를 누군가로 부터 계속 받는다면 운영자에게 알리십시오, 그들은 비공개 메시지를 보내지 못하도록 하는 권한이 있으니까요.");
$faq[] = array("이 게시판에 있는 누군가로부터 스팸메일을 받고 있습니다!", "유감이군요. 이 게시판의 이메일 기능에는 그러한 글을 보내는 사람을 추적해서 막는 기능이 있습니다. 받은 메일을 첨부하여 게시판 운영자에게 이메일을 보내십시오, 헤더(이메일을 보낸 사람에 대한 자세한 사항이 있음)를 반드시 포함하여야 합니다. 그러면 곧 조치가 취해질 것입니다.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2 관련");
$faq[] = array("누가 이 게시판 프로그램을 만들었나요?", "이 프로그램은 <a href=\"http://phpbb.com/\" target=\"_blank\">phpBB Group</a> 그룹에 의해서 만들어지고, 릴리즈되며 저작권이 있습니다. GNU General Public Licence 하에 자유스럽게 배포되며 사용될 수 있습니다, 보다 자세한 사항은 링크를 참조하세요");
$faq[] = array("왜 이러한 기능은 없나요?", "이 프로그램은 phpBB 그룹에 의해서 만들어지고 라이센스가 있습니다. 어떤 기능이 필요하시다면 phpbb.com 웹사이트를 방문하셔서 phpBB 그룹의 의견을 먼저 보십시오. 원하는 기능을 phpbb.com 게시판에 올리지 마십시오, 그룹은 sourceforge를 이용하여 새로운 기능 구현을 하고 있습니다. 원하는 기능에 대한 그룹의 입장이 이미 있는지 먼저 확인해 보고 그런 다음에 절차를 따르기 바랍니다.");
$faq[] = array("이 게시판에 관련하여 남용이나 법적 문제를 누구와 상의해야 하나요?", "이 게시판의 운영자와 접촉하십시오. 운영자가 누군지 알 수 없으면 게시판의 관리자를 접촉하여 문의하기 바랍니다. 그래도 답이 없으면 도메인의 관리자를 접촉하거나, 만약 게시판이 무료 호스트(yahoo, free.fr, f2s.com과 같은)상에서 동작하고 있다면 그 곳의 해당 부서에 접촉하십시오. phpBB 그룹은 이 게시판 프로그램이 누구에 의해서 어떻게 어디에서 사용되던 간에 아무런 통제도 할 수 없음을 명시합니다. phpBB.com 웹사이트나 phpBB 프로그램 자체에 대한 직접적인 것 외에 어떠한 법적인 문제에 관련하여 phpBB 그룹을 접촉하는 것은 전혀 무의미합니다. 제 삼자가 이 소프트웨어를 사용하는 것에 관한 메일을 phpBB 그룹으로 보내면 간결한 답변 혹은 무응답일 수 있습니다.");

//
// This ends the FAQ entries
//

