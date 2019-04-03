<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<link rel="stylesheet" type="text/css" href="/plugin/prism/prism.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>


	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">버튼</h2>
		<!--// guide-title -->

		<!-- g-content //-->
		<div class="g-content">
			
			<!-- 기본버튼 //-->
			<h3>기본</h3>
			<p>a태그와 button태그에 <code>class="bt"</code>로 사용</p>
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
<pre><code class="language-html">&lt;a href="#" class="bt"&gt;a태그 버튼&lt;/a&gt;
&lt;button href="#" class="bt"&gt;buttn태그 버튼&lt;/button&gt;
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
					<a href="#" class="bt bt-1">등록 1</a>
					<a href="#" class="bt bt-2">확인 2</a>
					<a href="#" class="bt bt-3">수정 3</a>
					<a href="#" class="bt bt-4">취소 4</a>
					<a href="#" class="bt bt-5">삭제 5</a>
					<a href="#" class="bt bt-6">목록 6</a>
				</div>
				<div class="meta">
					<div class="description">
						<code>등록 > 확인 > 수정 > 취소 > 삭제 > 목록</code>순으로 나열한다.<br>
						<code>class="bt bt-1"</code>bt-1 ~ 6 속성에 대한 컬러를 지정하여 사용.
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;a href="#" class="bt bt-1"&gt;등록 1&lt;/a&gt;
&lt;a href="#" class="bt bt-2"&gt;확인 2&lt;/a&gt;
&lt;a href="#" class="bt bt-3"&gt;수정 3&lt;/a&gt;
&lt;a href="#" class="bt bt-4"&gt;취소 4&lt;/a&gt;
&lt;a href="#" class="bt bt-5"&gt;삭제 5&lt;/a&gt;
&lt;a href="#" class="bt bt-6"&gt;목록 6&lt;/a&gt;
</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			

			<p class="margin-top-0">게시판 목록 및 기본은 센터</p>
			<div class="demo-block">
				<div class="source">
					<!-- 샘플 //-->
					<div class="table-horizontal margin-bottom-15">
		                <table>
		                    <caption class="blind">공지사항 목록</caption>
		                    <colgroup>
		                        <col style="width:50px;">
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
		                        	<th scope="col"><input type="checkbox" name="chkall" id="chkall" onclick="check_all(this.form)"></th>
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
		                        	<td><input type="checkbox" name="chk[]" value="0" id="chk_0"></td>
		                            <td><span class="txt-gray"></span>2</td>
		                            <td>GNSS서비스</td>
		                            <td class="subject"><a href="board_view.php">순천 위성기준점 시설 개량공사</a></td>
		                            <td>국토측량과</td>
		                            <td><span class="txt-gray">2015.07.30</span></td>
		                            <td><span class="has-file">첨부파일 있음</span></td>
		                            <td><span class="txt-gray">10</span></td>
		                        </tr>
		                        <tr>
		                        	<td><input type="checkbox" name="chk[]" value="1" id="chk_1"></td>
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
		            <!--// 샘플  -->

		            <!-- 버튼소스 //-->
					<div class="bt-area bt-center margin-bottom-0">
						<a href="#" class="bt bt-1">등록 1</a>
						<a href="#" class="bt bt-2">확인 2</a>
						<a href="#" class="bt bt-3">수정 3</a>
						<a href="#" class="bt bt-4">취소 4</a>
						<a href="#" class="bt bt-5">삭제 5</a>
						<a href="#" class="bt bt-6	">목록 6</a>
					</div>
					<!--// 버튼소스 -->
				</div>
				<div class="meta">
					<div class="description">
						 <code>class="bt-area bt-center"</code> 추가한다
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- 버튼소스 //--&gt;
&lt;div class="bt-area bt-center margin-bottom-0"&gt;
	&lt;a href="#" class="bt bt-1"&gt;등록 1&lt;/a&gt;
	&lt;a href="#" class="bt bt-2"&gt;확인 2&lt;/a&gt;
	&lt;a href="#" class="bt bt-3"&gt;수정 3&lt;/a&gt;
	&lt;a href="#" class="bt bt-4"&gt;취소 4&lt;/a&gt;
	&lt;a href="#" class="bt bt-5"&gt;삭제 5&lt;/a&gt;
	&lt;a href="#" class="bt bt-6	"&gt;목록 6&lt;/a&gt;
&lt;/div&gt;
&lt;!--// 버튼소스 --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			<p class="margin-top-0">게시판상세일 때는 우측정렬</p>
			<div class="demo-block">
				<div class="source">

					<!-- 샘플 //-->
					<!-- 공지사항 등록 -->
		            <div class="table-vertical margin-bottom-15">
		                <h3 class="title-table">구글 크롬 설치파일</h3>
		                <table>
		                    <caption class="blind">공지사항 등록</caption>
		                    <colgroup>
		                        <col style="width:150px;">
		                        <col>
		                        <col style="width:150px;">
		                        <col>
		                    </colgroup>
		                    <tbody>
		                        <tr>
		                            <th scope="row">구분</th>
		                            <td colspan="3">국토정보플랫폼</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">등록일자</th>
		                            <td>2016.07.30</td>
		                            <th scope="row">조회수</th>
		                            <td>1110</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">담당자</th>
		                            <td>국토정보</td>
		                            <th scope="row">담당부서</th>
		                            <td>국토조사과</td>
		                        </tr>
		                        
		                    </tbody>
		                </table>
		            </div>
		            <!-- /공지사항 등록 -->

		            <!-- 이전/다음글 -->	
		            <div class="table-vertical type-page margin-bottom-15">
		                <table>
		                    <caption class="blind">공지사항 등록</caption>
		                    <colgroup>
		                        <col style="width:150px;">
		                        <col>
		                    </colgroup>
		                    <tbody>
		                        <tr>
		                            <th scope="row"><span class="txt-prev">이전글</span></th>
		                            <td class="subject"><a href="#">공간정보제공 수수료 조정</a></td>
		                        </tr>
		                        <tr>
		                            <th scope="row"><span class="txt-next">다음글</span></th>
		                            <td class="subject"><a href="#">영상정보 기관 회원 신청방법 안내</a></td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>	
		            <!-- /이전/다음글 -->
					<!--// 샘플 -->

					<!-- 버튼소스 //-->
					<div class="bt-area bt-right margin-bottom-0">
						<a href="#" class="bt bt-1">등록 1</a>
						<a href="#" class="bt bt-2">확인 2</a>
						<a href="#" class="bt bt-3">수정 3</a>
						<a href="#" class="bt bt-4">취소 4</a>
						<a href="#" class="bt bt-5">삭제 5</a>
						<a href="#" class="bt bt-6	">목록 6</a>
					</div>
					<!--// 버튼소스 -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="bt-area bt-right"</code> 추가한다
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- 버튼소스 //--&gt;
&lt;div class="bt-area bt-right margin-bottom-0"&gt;
	&lt;a href="#" class="bt bt-1"&gt;등록 1&lt;/a&gt;
	&lt;a href="#" class="bt bt-2"&gt;확인 2&lt;/a&gt;
	&lt;a href="#" class="bt bt-3"&gt;수정 3&lt;/a&gt;
	&lt;a href="#" class="bt bt-4"&gt;취소 4&lt;/a&gt;
	&lt;a href="#" class="bt bt-5"&gt;삭제 5&lt;/a&gt;
	&lt;a href="#" class="bt bt-6	"&gt;목록 6&lt;/a&gt;
&lt;/div&gt;
&lt;!--// 버튼소스 --&gt;</code></pre>
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