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