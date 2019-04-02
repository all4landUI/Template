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
		<h2 class="g-title">기본게시판 - <small>목록</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>게시판 목록</h3>
			<p>많이 쓰는 기본 목록형식</p>
			<div class="demo-block">
				<div class="source">
					<!-- search-form //-->
					<div class="search-form">
		                <form action="" class="float-right">
		                    <fieldset>
		                        <legend>리스트 검색</legend>
		                        <label for="s-type" class="blind">서비스 구분</label>
		                        <select id="s-type" name="w-type">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="s-require" class="blind">검색 조건 선택</label>
		                        <select id="s-require" name="w-require">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="s-input" class="blind">검색어 입력</label>
		                        <input type="text" id="s-input" name="s-input" value="">
		                        <button type="button" class="bt">검색</button>	
		                    </fieldset>
		                </form>
		                <p class="count float-left">게시글 수 <em>17</em></p>
		            </div>
		            <!--// search-form -->

					<!-- table-horizontal //-->
					<div class="table-horizontal">
		                <table>
		                    <caption class="blind">공지사항 목록</caption>
		                    <colgroup>
		                        <col style="width:50px;">
		                        <col style="width:130px;">
		                        <col>
		                        <col style="width:100px;">
		                        <col style="width:100px;">
		                        <col style="width:75px;">
		                        <col style="width:60px;">
		                    </colgroup>
		                    <thead>
		                        <tr>
		                            <th scope="col">번호</th>
		                            <th scope="col">서비스 구분</th>
		                            <th scope="col">제목</th>
		                            <th scope="col">담당부서</th>
		                            <th scope="col">등록일</th>
		                            <th scope="col">첨부파일</th>
		                            <th scope="col">조회수</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td><span class="txt-gray"></span>2</td>
		                            <td>GNSS서비스</td>
		                            <td class="subject"><a href="board_view.php">순천 위성기준점 시설 개량공사</a></td>
		                            <td>국토측량과</td>
		                            <td><span class="txt-gray">2015.07.30</span></td>
		                            <td><span class="has-file">첨부파일 있음</span></td>
		                            <td><span class="txt-gray">10</span></td>
		                        </tr>
		                        <tr>
		                            <td><span class="txt-gray">1</span></td>
		                            <td>GNSS서비스</td>
		                            <td class="subject"><a href="board_view.php">순천 위성기준점 시설 개량공사</a></td>
		                            <td>국토측량과</td>
		                            <td><span class="txt-gray">2015.07.30</span></td>
		                            <td><span class="has-file">첨부파일 있음</span></td>
		                            <td><span class="txt-gray">10</span></td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <!--// table-horizontal -->

		            <!-- pagination //-->
					<div class="pagination">
		                <button type="button" class="prev">이전</button>	
		                <div>
		                    <button type="button" class="current">1</button>
		                    <button type="button">2</button>
		                    <button type="button">3</button>
		                    <button type="button">4</button>
		                    <button type="button">5</button>
		                </div>
		                <button type="button" class="next">다음</button>
		            </div>
		            <!--// pagination -->
				</div>
				<div class="meta">
					<div class="description">
						검색 UI Patten  <code>.search-form</code><br>
						목록 <code>.table-horizontal</code><br>
						페이징 <code>.pagination</code> 
					</div>
					<div class="highlight">
						<pre><code class="language-html">html</code></pre>
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