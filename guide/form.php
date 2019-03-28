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
			<li class="g-depth1 g-depth-view"><a href="#">단일페이지</a>
				<ul class="g-depth2">
					<li><a href="./board.php">기본게시판</a></li>
					<li><a href="./gallery_board.php">갤러리게시판</a></li>
					<li><a href="./join.php">회원가입</a></li>
					<li><a href="./lib.php">용어사전</a></li>
				</ul>
			</li>

			<li class="g-depth1 g-depth-view"><a href="#">UI PATTEN</a>
				<ul class="g-depth2">
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
		<h2 class="g-title">Form</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			
			<h3>Select</h3>
			<p><code>class=""</code>값이 없이 기본 사용</p>
			<div class="demo-block">
				<div class="source">
					<!-- select //-->
					<select name="" id="">
						<option value="">선택해주세요.</option>
						<option value="">이상입니다.</option>
					</select>
					<!--// select -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-number height-number"</code>로 크기조절 가능
					</div>
					<div class="highlight">
						<pre><code class="language-html"></code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>input</h3>
			<p>input type="" 사용 <code>class=""</code>값이 없이 기본 사용</p>
			<div class="demo-block">
				<div class="source">
					<!-- input text //-->
					<input type="text" name="" value="" class="" id="" placeholder="기본 input text">
					<!--// input text -->

					<!-- input password //-->
					<input type="password" name="" value="" class="" id="" placeholder="비활성화 disabled" disabled>
					<!--// input password -->

					<!-- input checkbox //-->
					<label for="commcheckbox"><input type="checkbox" name="" value="" class="" id="commcheckbox"></label>
					<!--// input checkbox -->

					<!-- input radio //-->
					<label for="commradi1"><input type="radio" name="count" value="" class="" id="commradio1"></label>
					<label for="commradi2"><input type="radio" name="count" value="" class="" id="commradio2"></label>
					<!--// input radio -->

					<!-- input file //-->
					<input type="file" name="" value="" class="" id="" placeholder="">
					<!--// input file -->

				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-number height-number"</code>로 크기조절 단 <code>type="text or password"</code>만 가능
					</div>
					<div class="highlight">
						<pre><code class="language-html"></code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>textarea</h3>
			<p><code>class="textarea"</code>기본 100%x150 종축스크롤 자동생성</p>
			<div class="demo-block">
				<div class="source">
					<!-- input text //-->
					<textarea name="" class="textarea" id="" placeholder="기본사이즈 100%x150 scroll auto"></textarea>
					<!--// input text -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="width-number height-number"</code>로 크기조절 단 <code>type="text or password"</code>만 가능
					</div>
					<div class="highlight">
						<pre><code class="language-html"></code></pre>
					</div>
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