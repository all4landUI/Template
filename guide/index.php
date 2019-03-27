<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" href="/plugin/prism/prism.css">
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">

	<nav class="g-navi">
		<ul>
			<li class="g-depth1"><a href="/html/api/PB_SC_305.php">관리자</a>
			<li class="g-depth1 g-depth-view"><a href="#">단일페이지</a>
				<ul class="g-depth2">
					<li><a href="./board.php">기본게시판</a></li>
					<li><a href="./gallery_board.php">갤러리게시판</a></li>
					<li><a href="./join.php">회원가입</a></li>
					<li><a href="./lib.php">용어사전</a></li>
					<li><a href="./content.php">컨텐츠</a></li>
				</ul>
			</li>

			<li class="g-depth1 g-depth-view"><a href="#">컴포넌트</a>
				<ul class="g-depth2">
					<li><a href="./form.php">폼</a></li>
					<li><a href="./table.php">테이블</a></li>
					<li><a href="./button.php">버튼</a></li>
					<li><a href="./tab.php">탭</a></li>
					<li><a href="./search.php">검색박스</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">컴포넌트</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>간격</h3>
			<p>클래스를 통한 그리드 간격</p>
			<div class="demo-block">
				<div class="source">
					
				</div>
				<div class="meta">
					<div class="description"></div>
				</div>
				<div class="highlight">
					
				</div>
				<div class="demo-control fa"></div>
			</div>
		</div>
		<!--// g-content  -->

	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('../foot.php');
?>