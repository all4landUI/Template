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
		<h2 class="g-title">갤러리게시판 - <small>상세</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<div class="demo-block">
				<div class="source">
					<!-- 공지사항 등록 -->
		            <div class="table-vertical margin-bottom-0">
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
		                        	<th scope="row">작성자</th>
		                        	<td>국토지리정보원</td>
		                        	<th scope="row">드옭일</th>
		                        	<td>2019.01.01</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">첨부파일</th>
		                            <td colspan="3">
		                                <ul class="list-file">
		                                    <li>test-1.hwp<button type="button" class="bt down">다운로드</button></li>
		                                </ul>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>

		            <!-- #bo_v_content //-->
		           <div id="bo_v_content">
		           		컨텐츠
		           </div>
		           <!--// #bo_v_content -->
		            

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