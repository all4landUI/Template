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
			<br>
			<div class="demo-block">
				<div class="source">
					<!-- 상세 //-->
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
		                        	<th scope="row">등록일</th>
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
		           		<img src="http://map.ngii.go.kr/img/process/ms/pblictn/preciseRoadMap/map_making_bg.png" alt="">
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
		            	<a href="./board_write.php" class="bt bt-1">등록</a>
		            	<a href="#" class="bt bt-2">수정</a>
		            	<a href="#" class="bt bt-6" onclick="history.back(-1)">목록</a>
		            </div>
		            <!--// 상세  -->
				</div>
				<div class="meta">
					<div class="description">
						
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- 상세 //--&gt;
&lt;div class="table-vertical margin-bottom-0"&gt;
    &lt;h3 class="title-table"&gt;구글 크롬 설치파일&lt;/h3&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;공지사항 등록&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:150px;"&gt;
            &lt;col&gt;
            &lt;col style="width:150px;"&gt;
            &lt;col&gt;
        &lt;/colgroup&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
            	&lt;th scope="row"&gt;작성자&lt;/th&gt;
            	&lt;td&gt;국토지리정보원&lt;/td&gt;
            	&lt;th scope="row"&gt;등록일&lt;/th&gt;
            	&lt;td&gt;2019.01.01&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;첨부파일&lt;/th&gt;
                &lt;td colspan="3"&gt;
                    &lt;ul class="list-file"&gt;
                        &lt;li&gt;test-1.hwp&lt;button type="button" class="bt down"&gt;다운로드&lt;/button&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;

&lt;!-- #bo_v_content //--&gt;
&lt;div id="bo_v_content"&gt;
		&lt;img src="http://map.ngii.go.kr/img/process/ms/pblictn/preciseRoadMap/map_making_bg.png" alt=""&gt;
&lt;/div&gt;
&lt;!--// #bo_v_content --&gt;

&lt;!-- 이전/다음글 --&gt;	
&lt;div class="table-vertical type-page margin-bottom-15"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;공지사항 등록&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:150px;"&gt;
            &lt;col&gt;
        &lt;/colgroup&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;span class="txt-prev"&gt;이전글&lt;/span&gt;&lt;/th&gt;
                &lt;td class="subject"&gt;&lt;a href="#"&gt;공간정보제공 수수료 조정&lt;/a&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;span class="txt-next"&gt;다음글&lt;/span&gt;&lt;/th&gt;
                &lt;td class="subject"&gt;&lt;a href="#"&gt;영상정보 기관 회원 신청방법 안내&lt;/a&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;	
&lt;!-- /이전/다음글 --&gt;

&lt;div class="bt-area bt-right"&gt;
	&lt;a href="./board_write.php" class="bt bt-1"&gt;등록&lt;/a&gt;
	&lt;a href="#" class="bt bt-2"&gt;수정&lt;/a&gt;
	&lt;a href="#" class="bt bt-6" onclick="history.back(-1)"&gt;목록&lt;/a&gt;
&lt;/div&gt;
&lt;!--// 상세  --&gt;</code></pre>
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