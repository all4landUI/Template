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
		<h2 class="g-title">갤러리 - <small>목록</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>목록</h3>
			<p><code>class="column-number"</code>을 넣어 한줄에 뿌려지는 개수 조절</p>
			<div class="demo-block">
				<div class="source">
					<!-- Search -->
		            <div class="search-form">
		                <form action="" class="float-right">
		                    <fieldset>
		                        <legend>리스트 검색</legend>
		                        <label for="w-type" class="blind">서비스 구분</label>
		                        <select id="w-type" name="w-type">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="w-require" class="blind">검색 조건 선택</label>
		                        <select id="w-require" name="w-require">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="s-input" class="blind">검색어 입력</label>
		                        <input type="text" id="s-input" name="" value="">
		                        <button type="button" class="bt search">검색</button>	
		                    </fieldset>
		                </form>

		                <p class="count float-left">게시글 수 <em>17</em></p>
		            </div>
		            <!-- /Search -->

		            <ul class="list-gallery column-3">
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		            </ul>
		            <ul class="list-gallery column-3">
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		            </ul>

		            <!-- Pagination -->
		            <div class="pagination">
		                <button type="button" class="prev">이전</button>	
		                <div>
		                    <button type="button" class="current">1</button>
		                    <button type="button">2</button>
		                    <button type="button">3</button>
		                    <button type="button">4</button>
		                    <button type="button">5</button>
		                    <button type="button">6</button>
		                    <button type="button">7</button>
		                    <button type="button">8</button>
		                    <button type="button">9</button>
		                    <button type="button">10</button>
		                </div>
		                <button type="button" class="next">다음</button>
		            </div>
		            <!-- /Pagination -->
				</div>

				<div class="meta">
					<div class="description">
						특이점은 한열당 UL로 다시 LOOP를 돌려야함. 그래야만 글씨의 높낮이에 상관없이, 정렬됨
					</div>
					<div class="highlight">
						ㅇㅇ
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