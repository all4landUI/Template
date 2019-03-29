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
			<li class="g-depth1"><a href="#">Layout</a></li>
			<li class="g-depth1"><a href="#">Theme</a></li>
			<li class="g-depth1 g-depth-view"><a href="#">Element</a>
				<ul class="g-depth2">
					<li><a href="./board.php">List</a></li>
					<li><a href="./gallery_board.php">Gallery</a></li>
					<li><a href="./gallery_board.php">Thumbnail</a></li>
					<li><a href="./search.php">Search Box</a></li>
					<li><a href="./tab.php">Tab</a></li>
					<li><a href="./button.php">Button</a></li>
					<li><a href="./form.php">Form</a></li>
					<li><a href="./table.php">Table</a></li>
					<li><a href="./content.php">Contents</a></li>
					<li><a href="./content.php">Popup</a></li>
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