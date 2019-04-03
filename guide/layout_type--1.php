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
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>OPEN API 관리</h2>
            <ul role="menu">
                <li class="current"><a href="PB_SC_305.php">바로e맵 오픈 API목록</a></li>
                <li><a href="PB_SC_307.php">바로e맵 오픈 API 통계보기</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">바로e맵 오픈 API 상세보기</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>OPEN API관리</li>
                <li>바로e맵 오픈 API목록</li>
            </ol>
            <!-- /Location -->
        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->
	
	<!-- Footer -->
	<footer>
		<div class="inner">
			<p class="f-logo">올포랜드 로고</p>
			<ul>
				<li><a href="#"><em>개인정보 처리방침</em></a></li>
				<li><a href="#">저작권정책</a></li>
				<li><a href="#">이메일무단수집거부</a></li>
			</ul>
	        <address>서울특별시 금천구 가산디지털1로 145</address>
	        <span>TEL : 02 - 855 - 5724</span>
	        <span>FAX : 02 - 857 - 5746</span>
	        <small>© ALLFORLAND, All rights reserved.</small>

			<select title="관련기관 바로가기" class="family-site">
				<option value="">관련기관목록</option>
			</select>
		</div>
	</footer>
	<!-- /Footer -->
</body>
</html>

