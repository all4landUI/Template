<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<link rel="stylesheet" type="text/css" href="/plugin/prism/prism.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">

	<nav class="g-navi">
		<ul>
			<li class="g-depth1 g-depth-view"><a href="#">UI PATTEN</a>
				<ul class="g-depth2">
					<li><a href="./board.php">기본게시판</a></li>
					<li><a href="./gallery_board.php">갤러리게시판</a></li>
					<li><a href="./tab.php">탭</a></li>
					<li><a href="./search.php">검색박스</a></li>
					<li><a href="./content.php">컨텐츠</a></li>
				</ul>
			</li>

			<li class="g-depth1 g-depth-view"><a href="#">컴포넌트</a>
				<ul class="g-depth2">
					<li><a href="./form.php">폼</a></li>
					<li><a href="./table.php">테이블</a></li>
					<li><a href="./button.php">버튼</a></li>
				</ul>
			</li>
		</ul>
	</nav>


	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">버튼</h2>
		<!--// guide-title -->

		<!-- g-content //-->
		<div class="g-content">
			
			<!-- 기본버튼 //-->
			<h3>기본</h3>
			<p><code>class="bt"</code> 버튼 기본스타일 호출 기본 양여백 15px 높이30px</p>
			<div class="demo-block">
				<div class="source">
					<a href="#" class="bt">a태그 버튼</a>
					<button href="#" class="bt">buttn태그 버튼</button>
				</div>
				<div class="meta">
					<div class="description">
						<code>* a태그 같은경우 height값을 변경하면 line-height값도 변경해야한다.</code>
					</div>
					<div class="highlight">
						<pre><code class="language-html">
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;a태그 버튼&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;button href="#" class="bt"&gt;buttn태그 버튼&lt;/button&gt;</font></p>
						</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			<!--// 기본버튼 -->

			<!-- 버튼의 순서 //-->
			<h3>버튼의 순서</h3>
			<p>버튼의 쓰임새에 대한 순서</p>
			<div class="demo-block">
				<div class="source">
					<a href="#" class="bt">등록 1</a>
					<a href="#" class="bt">확인 2</a>
					<a href="#" class="bt">수정 3</a>
					<a href="#" class="bt">취소 4</a>
					<a href="#" class="bt">삭제 5</a>
					<a href="#" class="bt">목록 6</a>
				</div>
				<div class="meta">
					<div class="description">
						<code>등록 > 확인 > 수정 > 취소 > 삭제 > 목록</code>순으로 정리한다
					</div>
					<div class="highlight">
						<pre><code class="language-html">
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;등록 1&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;확인 2&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;수정 3&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;취소 4&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;삭제 5&lt;/a&gt;</font></p>
							<p><font face="Gulim, 굴림">&lt;a href="#" class="bt"&gt;목록 6&lt;/a&gt;</font></p>
						</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			

			<p class="margin-top-0">기본정렬은 항상센터</p>
			<div class="demo-block">
				<div class="source">
					<div class="bt-area bt-center margin-bottom-0">
						<a href="#" class="bt">등록</a>
						<a href="#" class="bt">확인</a>
						<a href="#" class="bt">수정</a>
						<a href="#" class="bt">취소</a>
						<a href="#" class="bt">삭제</a>
						<a href="#" class="bt">목록</a>
					</div>
				</div>
			</div>
			<p class="margin-top-0">게시판상세일 때는 우측정렬</p>
			<div class="demo-block">
				<div class="source">
					<div class="bt-area bt-right margin-bottom-0">
						<a href="#" class="bt">등록</a>
						<a href="#" class="bt">확인</a>
						<a href="#" class="bt">수정</a>
						<a href="#" class="bt">취소</a>
						<a href="#" class="bt">삭제</a>
						<a href="#" class="bt">목록</a>
					</div>
				</div>
			</div>


		</div>
		<!--// g-content  -->
	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('../foot.php');
?>