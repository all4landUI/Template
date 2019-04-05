<!DOCTYPE HTML>
<html lang="ko">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico">
<link rel="stylesheet" type="text/css" href="/dist/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/dist/css/fonts/NotoSansKR.css">
<link rel="stylesheet" type="text/css" href="/dist/js/libs/jQuery-ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/dist/css/ngii-mng.css">
<link rel="stylesheet" type="text/css" href="/dist/css/style_2018.css">
<link rel="stylesheet" type="text/css" href="/dist/css/css/join.css">
<title>UI ELEMENT - 가이드</title>
<script type="text/javascript" src="/dist/js/libs/jQuery/1.12.3/jquery.min.js"></script>
<script type="text/javascript" src="/dist/js/libs/jQuery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/dist/js/ngii-mng.js"></script>
<script type="text/javascript" src="/dist/js/pub.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/dist/js/libs/html5shiv.min.js"></script>
	<script type="text/javascript" src="/dist/js/libs/respond.min.js"></script>
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
	            <a href="/html/join/join.php">회원가입</a>
	            <a href="/html/sitemap/sitemap.php">사이트맵</a>
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
					<button role="button" title="전체메뉴열기" id="btn_allmenu"><i class="fa fa-align-right" aria-hidden="true"></i></button>
					<button role="button" title="검색박스열기" id="btn_allsearch"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
	    </nav>

	    <!-- #sitemap -->
		<div id="sitemap">
			<div class="sitemap-open">
				<div class="sitemap-open-inner">
					<nav>
						<ul class="sitemap">
							
		                    <li class="tree-menu">
		                        <h2>게시판 관리</h2>
								<ul class="tree-group">
									<li><a href="/html/bbs/notice.php">공지사항</a></li>
									<li><a href="/html/bbs/qna.php">묻고 답하기</a></li>
									<li><a href="/html/bbs/faq.php">자주하는 질문</a></li>
									<li><a href="/html/bbs/gallery.php">갤러리</a></li>
								</ul>
		                    </li>
		                    <li class="tree-menu">
		                        <h2>정보관리</h2>
					            <ul class="tree-group">
					                <li><a href="/html/info/notice.php">상세 정보 관리</a></li>
					                <li><a href="/html/info/lib.php">용어사전</a></li>
					            </ul>
		                    </li>
		                    <li class="tree-menu">
		                        <h2>지도 관리</h2>
					            <ul class="tree-group">
					                <li><a href="/html/map/search.php">지도 검색</a></li>
					            </ul>
		                    </li>
		                    <li class="tree-menu margin-top-30" style="clear:left">
		                        <h2>통계 관리</h2>
								<ul class="tree-group">
									<li><a href="/html/statistics/status.php">통계 현황</a></li>
									<li><a href="/html/statisticsvisit.php">접속 현황</a></li>
									<li><a href="/html/statisticspageview.php">페이지뷰 현황</a></li>
									<li><a href="/html/statisticsanalysis.php">통합검색 분석 및 통계</a></li>
									<li><a href="/html/statisticskeyword.php">검색어 통계</a></li>
								</ul>
		                    </li>
		                    <li class="tree-menu margin-top-30">
		                        <h2>서비스 관리</h2>
								<ul class="tree-group">
									<li><a href="/html/service/about.php">소개</a></li>
									<li><a href="/html/service/info.php">서비스 정보</a></li>
									<li><a href="/html/service/table.php">표 정보</a></li>
									<li><a href="/html/service/calendar.php">행사 및 일정</a></li>
								</ul>
		                    </li>
		                    <li class="tree-menu margin-top-30">
		                        <h2>회원 관리</h2>
								<ul class="tree-group">
									<li><a href="/html/member/list.php">개인정보수정</a></li>
									<li><a href="/html/member/level.php">권한관리</a></li>
								</ul>
		                    </li>
		                </ul>

					</nav>
					<p class="btn-sitemap-close"><button type="button"><span class="blind">전체메뉴 닫기</span></button></p>
				</div>
			</div>
		</div>
		<!-- #sitemap -->
	</header>
	<!-- /Header -->

