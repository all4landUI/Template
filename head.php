<!DOCTYPE HTML>
<html lang="ko">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/fonts/NotoSansKR.css">
<link rel="stylesheet" type="text/css" href="/js/libs/jQuery-ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/css/ngii-mng.css">
<link rel="stylesheet" type="text/css" href="/css/style_2018.css">
<link rel="stylesheet" type="text/css" href="/css/css/join.css">
<title>UI ELEMENT - 가이드</title>
<script type="text/javascript" src="/js/libs/jQuery/1.12.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/libs/jQuery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/ngii-mng.js"></script>
<script type="text/javascript" src="/js/pub.js"></script>
<script type="text/javascript" src="/js/pub.lib.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/js/libs/html5shiv.min.js"></script>
	<script type="text/javascript" src="/js/libs/respond.min.js"></script>
<![endif]-->
<body class="layout-type-1">

	<article id="fixed_search">
		<div class="inner">
			<div>
				<form action="">
					<span>
						<input type="text" name="" id="search_keyword" placeholder="검색어를 입력해주세요.">
						<button type="sumibt" title="검색"><i class="fa fa-search" aria-hidden="true"></i></button>
					</span>
				</form>
			</div>
			<p class="keyword_list">검색어 : 통합, 관리 , 통계</p>
		</div>
	</article>

<?php  if(!$guide){?>
  	<!-- Header -->
	<header id="header">
		<hgroup>
			<h1 class="logo"><a href="../../login.php"><i></i><span class="blind">올포랜드 통합관리자</span></a></h1>
			<div class="user-info">
				<button type="button">로그아웃</button>
	            <a href="../../join.php">회원가입</a>
	            <a href="../../join.php">사이트맵</a>
			</div>
		</hgroup>
		
	    <nav class="gnb_wrap">
	    	<div class="inner">
		    	<div id="gnb">
					<ul role="menu">
						<li><a href="/html/bbs/notice.php">게시판 관리</a></li>
						<li><a href="/html/info/manage.php">정보 관리</a></li>
						<li><a href="/html/map/search.php">지도 관리</a></li>
						<li><a href="/html/statistics/status.php">통계 관리</a></li>
						<li><a href="/html/service/about.php">서비스 관리</a></li>
						<li><a href="/html/member/list.php">회원 관리</a></li>
					</ul>
				</div>
				<div class="addtion_menu">
					<button role="button" title="전체메뉴열기"><i class="fa fa-align-right" aria-hidden="true"></i></button>
					<button role="button" title="검색박스열기" onclick="show_hide('#fixed_search')"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
	    </nav>
	</header>
	<!-- /Header -->
<?php } else { ?>
	<header class="g-header">
		<h1 class="g-logo"><a href="#">UCS UI Element</a></h1>
		<div class="g-gnb">
			<ul>
				<li><a href="/html/api/PB_SC_305.php">통합템플릿</a></li>
				<li><a href="/guide/document.php">UI Element</a></li>
			</ul>
			<button role="button" class="ham-menu"></button>
		</div>
	</header>
<?php } ?>
