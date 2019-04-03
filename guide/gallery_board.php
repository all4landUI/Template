<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" href="/plugin/prism/prism.css">
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>
	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">갤러리 - <small>목록</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<br>
			<div class="demo-block">
				<div class="source">
					<script>
						$(function(){
							$(".option_list .bt").click(function(){
								var $value = $(this).prev('select').val();
								$('.list-gallery').removeClass('column-2 column-3 column-4 column-5')
								.addClass('column-'+$value+'')
								return false;
							})
						})
					</script>
					<div class="option_list">
						<label for="columnChoice">행선택</label>
						<select name="columnChoice" id="columnChoice">
							<option value="2">2*n</option>
							<option value="3">3*n</option>
							<option value="4">4*n</option>
							<option value="5">5*n</option>
						</select>
						<button class="bt">적용</button>
					</div>


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
		                        <button type="button" class="bt">검색</button>	
		                    </fieldset>
		                </form>

		                <p class="count float-left">게시글 수 <em>17</em></p>
		            </div>
		            <!-- /Search -->

		            <ul class="list-gallery column-5">
		                <li><a href="gallery_board_view.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
		                <li><a href="gallery_board_view.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		                <li><a href="gallery_board_view.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
		                <li><a href="gallery_board_view.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
		                <li><a href="gallery_board_view.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
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
						<code>class="column-number"</code>을 넣어 한줄에 뿌려지는 개수 조절
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- Search --&gt;
&lt;div class="search-form"&gt;
    &lt;form action="" class="float-right"&gt;
        &lt;fieldset&gt;
            &lt;legend&gt;리스트 검색&lt;/legend&gt;
            &lt;label for="w-type" class="blind"&gt;서비스 구분&lt;/label&gt;
            &lt;select id="w-type" name="w-type"&gt;
                &lt;option value=""&gt;전체&lt;/option&gt;
            &lt;/select&gt;

            &lt;label for="w-require" class="blind"&gt;검색 조건 선택&lt;/label&gt;
            &lt;select id="w-require" name="w-require"&gt;
                &lt;option value=""&gt;전체&lt;/option&gt;
            &lt;/select&gt;

            &lt;label for="s-input" class="blind"&gt;검색어 입력&lt;/label&gt;
            &lt;input type="text" id="s-input" name="" value=""&gt;
            &lt;button type="button" class="bt"&gt;검색&lt;/button&gt;	
        &lt;/fieldset&gt;
    &lt;/form&gt;

    &lt;p class="count float-left"&gt;게시글 수 &lt;em&gt;17&lt;/em&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;!-- /Search --&gt;

&lt;ul class="list-gallery column-5"&gt;
    &lt;li&gt;&lt;a href="gallery_board_view.php"&gt;&lt;span class="wrap-galleryImg"&gt;&lt;img src="../../images/thumb/sample.png" alt="이미지설명"&gt;&lt;/span&gt;&lt;span&gt;캠브리지베이&lt;/span&gt;&lt;/a&gt;&lt;/li&gt; &lt;!-- 이미지 사이즈 170*120 --&gt;
    &lt;li&gt;&lt;a href="gallery_board_view.php"&gt;&lt;span class="wrap-galleryImg"&gt;&lt;img src="../../images/thumb/sample.png" alt="이미지설명"&gt;&lt;/span&gt;&lt;span&gt;캠브리지베이&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="gallery_board_view.php"&gt;&lt;span class="wrap-galleryImg"&gt;&lt;img src="../../images/thumb/sample.png" alt="이미지설명"&gt;&lt;/span&gt;&lt;span&gt;캠브리지베이&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="gallery_board_view.php"&gt;&lt;span class="wrap-galleryImg"&gt;&lt;img src="../../images/thumb/sample.png" alt="이미지설명"&gt;&lt;/span&gt;&lt;span&gt;캠브리지베이&lt;/span&gt;&lt;/a&gt;&lt;/li&gt; &lt;!-- 이미지 사이즈 170*120 --&gt;
    &lt;li&gt;&lt;a href="gallery_board_view.php"&gt;&lt;span class="wrap-galleryImg"&gt;&lt;img src="../../images/thumb/sample.png" alt="이미지설명"&gt;&lt;/span&gt;&lt;span&gt;캠브리지베이&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;!-- Pagination --&gt;
&lt;div class="pagination"&gt;
    &lt;button type="button" class="prev"&gt;이전&lt;/button&gt;	
    &lt;div&gt;
        &lt;button type="button" class="current"&gt;1&lt;/button&gt;
        &lt;button type="button"&gt;2&lt;/button&gt;
        &lt;button type="button"&gt;3&lt;/button&gt;
        &lt;button type="button"&gt;4&lt;/button&gt;
        &lt;button type="button"&gt;5&lt;/button&gt;
        &lt;button type="button"&gt;6&lt;/button&gt;
        &lt;button type="button"&gt;7&lt;/button&gt;
        &lt;button type="button"&gt;8&lt;/button&gt;
        &lt;button type="button"&gt;9&lt;/button&gt;
        &lt;button type="button"&gt;10&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button" class="next"&gt;다음&lt;/button&gt;
&lt;/div&gt;
&lt;!-- /Pagination --&gt;</code></pre>
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