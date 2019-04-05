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
<body class="layout-type-2">
  	<!-- side -->
	<aside id="side">
		<header class="hgroup">
			<h1 class="logo"><a href="../../login.php"></a></h1>
			<div class="user-info">
				<div class="ment">
					<span>홍길동 님</span>환영합니다.
				</div>
				<div class="btn_hgroup">
					<button type="button" class="bt">로그아웃</button>
		            <a href="/html/join/join.php" class="bt">회원가입</a>
		            <!-- <a href="/html/sitemap/sitemap.php" class="bt">사이트맵</a> -->
				</div>
			</div>
		</header>
		
	    <nav id="gnb" style="overflow-y:auto">
			<ul role="menu">
				<li class="depth-1 depth-view"><a href="/html/bbs/notice.php">게시판 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/bbs/notice.php">공지사항</a></li>
						<li><a href="/html/bbs/qna.php">묻고 답하기</a></li>
						<li><a href="/html/bbs/faq.php">자주하는 질문</a></li>
						<li><a href="/html/bbs/gallery.php">갤러리</a></li>
					</ul>
				</li>
				<li class="depth-1 depth-view menu_open"><a href="/html/info/manage.php">정보 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/info/notice.php">상세 정보 관리</a></li>
					    <li><a href="/html/info/lib.php">용어사전</a></li>
					</ul>
				</li>
				<li class="depth-1 depth-view"><a href="/html/map/search.php">지도 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/map/search.php">지도 검색</a></li>
					</ul>
				</li>
				<li class="depth-1 depth-view"><a href="/html/statistics/status.php">통계 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/statistics/status.php">통계 현황</a></li>
						<li><a href="/html/statisticsvisit.php">접속 현황</a></li>
						<li><a href="/html/statisticspageview.php">페이지뷰 현황</a></li>
						<li><a href="/html/statisticsanalysis.php">통합검색 분석 및 통계</a></li>
						<li><a href="/html/statisticskeyword.php">검색어 통계</a></li>
					</ul>
				</li>
				<li class="depth-1 depth-view"><a href="/html/service/about.php">서비스 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/service/about.php">소개</a></li>
						<li><a href="/html/service/info.php">서비스 정보</a></li>
						<li><a href="/html/service/table.php">표 정보</a></li>
						<li><a href="/html/service/calendar.php">행사 및 일정</a></li>
					</ul>
				</li>
				<li class="depth-1 depth-view"><a href="/html/member/list.php">회원 관리</a>
					<ul class="depth-menu">
						<li><a href="/html/member/list.php">개인정보수정</a></li>
						<li><a href="/html/member/level.php">권한관리</a></li>
					</ul>
				</li>
			</ul>
	    </nav>
	</aside>
	<!-- /side -->
	
	<!-- .container //-->
	<div class="container">
		<!-- content //-->
		<div id="content">

			<!-- content-head //-->
			<div class="content-head">
				<h1>바로e맵 오픈 API 상세보기</h1>
				<div id="breadCrumb">
					<span><i class="fa fa-home"></i></span>
					<span>OPEN API관리</span>
					<span class="current">바로e맵 오픈 API목록</span>
				</div>
			</div>
			<!--// content-head -->

			<!-- content-body //-->
			<div class="content-body">
				<div class="table-vertical type2">
	                <table>
	                    <caption class="blind">바로e맵 오픈 API 상세보기</caption>
	                    <colgroup>
	                        <col style="width:150px;">
	                        <col>
	                        <col style="width:150px;">
	                        <col>
	                    </colgroup>
	                    <tbody>
	                        <tr>
	                            <th scope="row">분류</th>
	                            <td>지도 오픈 API</td>
	                            <th scope="row">인증키 신청자</th>
	                            <td>김현일</td>
	                        </tr>
	                        <tr>
	                            <th scope="row">신청사유</th>
	                            <td colspan="3">교육용</td>
	                        </tr>
	                        <tr>
	                            <th scope="row">사용 URL</th>
	                            <td colspan="3">http://killerf.ddns.net</td>
	                        </tr>
	                        <tr>
	                            <th scope="row">인증키</th>
	                            <td>YshBYZNumv37ALwhvQCQwg</td>
	                            <th scope="row">인증키 신청일시</th>
	                            <td>2016.07.30 07:01</td>
	                        </tr>
	                        <tr>
	                            <th scope="row">승인여부</th>
	                            <td>승인</td>
	                            <th scope="row">인증키 승인일시</th>
	                            <td>2016.07.30 07:02</td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
			</div>
			<!--// content-body -->

		</div>
		<!--// content -->

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

	</div>
	<!--// .container -->
	
	
</body>
</html>