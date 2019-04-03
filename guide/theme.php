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
		<h2 class="g-title">테마- 컬러베이스</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본형은 현재 Guide 페이지에서 보고있는 색상</h3>
			<p>기본 내용</p>
			<ul class="list_comm list_st3 margin-top-5">
				<li>해당 사이트의 브랜드 컬러가 있다면, 그에 따라 변경해서 제공</li>	
				<li>브랜드색 , 버튼색 , 폼 보더색 , 테이블색에 대하여, 변수로 제공</li>	
				<li>현재는 기본타입만 완성</li>
			</ul>
			<h3>테마-기본형</h3>
			<p>버튼</p>

			<p>상단배경색 , 하단배경색</p>

			<p>강조 폰트에 대한 색</p>
			<div class="demo-block">
				<div class="source">
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
		                            <td><span class="txt-gray">10</span></td>
		                            <td>GNSS서비스</td>
		                            <td class="subject"><a href="PB_SC_282.php">순천 위성기준점 시설 개량공사</a></td>
		                            <td>국토측량과</td>
		                            <td><span class="txt-gray">2015.07.30</span></td>
		                            <td><span class="has-file">첨부파일 있음</span></td>
		                            <td><span class="txt-gray">10</span></td>
		                        </tr>
		                       
		                    </tbody>
		                </table>
		            </div>
		            <!--// table-horizontal -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="table-horizontal"</code>를 기본으로 사용함.
					</div>
					<div class="highlight">
<pre><code class="language-html"></code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			<p>테이블색</p>
		</div>
		<!--// g-content  -->

	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('../foot.php');
?>