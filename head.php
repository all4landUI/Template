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
<title>UI ELEMENT - 가이드</title>
<script type="text/javascript" src="/js/libs/jQuery/1.12.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/libs/jQuery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/js/ngii-mng.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/js/libs/html5shiv.min.js"></script>
	<script type="text/javascript" src="/js/libs/respond.min.js"></script>
<![endif]-->
<body class="layout-type-1">
<?php  if(!$guide){?>
  	<!-- Header -->
	<header id="header">
		<hgroup>
			<h1 class="logo"><a href="../../login.php"><i></i><span class="blind">올포랜드 통합관리자</span></a></h1>
			<div class="user-info">
				<span>홍길동 님</span>
				<button type="button">로그아웃</button>
	            <a href="../../join.php">회원가입</a>
			</div>
		</hgroup>
		
	    <nav id="gnb">
			<ul role="menu">
				<li><a href="/guide/">가이드</a></li>
				<li><a href="/html/bbs/PB_SC_281.php">게시판 관리</a></li>
				<li class="current"><a href="/html/api/PB_SC_305.php">OPEN API 관리</a></li>
				<li><a href="/html/statistics/PB_SC_308.php">통계 관리</a></li>
				<li><a href="/html/circulation/PB_SC_311.php">유통 관리</a></li>
				<li><a href="/html/data/PB_SC_312.php">데이터 관리</a></li>
				<li><a href="/html/user/PB_SC_323.php">업무등록</a></li>
			</ul>
	    </nav>
	</header>
	<!-- /Header -->
<?php } else { ?>
<header class="g-header">
	<h1 class="g-logo"><a href="#">UCS UI Element</a></h1>

	<div class="g-gnb">
		<ul>
			<li><a href="#">통합템플릿</a></li>
			<li><a href="#">UI Element</a></li>
		</ul>
		<button role="button" class="ham-menu"></button>
	</div>
</header>

<?php } ?>
