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
		<h2 class="g-title">기본게시판 - <small>상세</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>게시판 상세</h3>
			<p>많이 쓰는 기본 형식</p>
			<div class="demo-block">
				<div class="source">
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
		                        <tr>
		                            <th scope="row">이메일</th>
		                            <td>asdf@email.com</td>
		                            <th scope="row">전화번호</th>
		                            <td>02-1234-5678</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">내용</th>
		                            <td colspan="3" style="height:100px;">
		                                국토정보플랫폼 헬프데스크입니다. <br>
		                                지명관리시스템 일부 기능이 인터넷 익스플로러 프로그램이 제대로 실행되지 않을 때<br>
		                                구글 크롬을 설치하시어 크롬으로 진행하시기 바랍니다.
		                            </td>
		                        </tr>
		                        <tr>
		                            <th scope="row">첨부파일</th>
		                            <td colspan="3">
		                                <ul class="list-file">
		                                    <li>test-1.hwp<button type="button" class="bt down">다운로드</button></li>
		                                    <li>test-2.hwp<button type="button" class="bt down">다운로드</button></li>
		                                </ul>
		                            </td>
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


		            <div class="comment-wrap">
		            	<div class="comment_cont">
		            		<header>
		            			<h4>글쓴이</h4>
		            			<span class="cmt_date">2019.01.01</span>
		            		</header>

		            		<div class="comment_body">
		            			답변 내용!!
		            		</div>

		            		<div class="comment_manege">
		            			<button class="bt">수정</button>
		            			<button class="bt">삭제</button>
		            		</div>

		            	</div>

		            </div>

		            <!-- 코멘트 //-->
		            <div class="table-vertical type-page margin-bottom-15">
		                <table>
		                    <caption class="blind">코멘트관리</caption>
		                    <colgroup>
		                        <col style="width:150px;">
		                        <col>
		                        <col style="width:150px;">
		                    </colgroup>
		                    <tbody>
		                        <tr>
		                            <th scope="row">답변내용</th>
		                            <td>
		                            	<textarea name="" id="" cols="30" rows="10" class="textarea"></textarea>
		                            </td>
		                            <td>
		                            	<button class="bt">답변등록</button>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>	
		            <!--// 코멘트 -->


		            <div class="bt-area bt-right">
		            	<a href="./board_write.php" class="bt">등록</a>
		            	<a href="#" class="bt">수정</a>
		            	<a href="#" class="bt" onclick="history.back(-1)">목록</a>
		            </div>

				</div>
				<div class="meta">
					<div class="description">
						컨텐츠 <code>.table-vertical</code>
						버튼UI <code>.table-vertical.type-page</code>
						버튼 <code>.bt-area.bt-right</code>
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