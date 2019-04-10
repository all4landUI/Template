<?php

	include_once('./guide.head.php');
?>
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

		            <!-- 코멘트  //-->
		            <div class="comment-wrap">
		            	<div class="comment_cont">
		            		<header>
		            			<h4>글쓴이</h4>
		            			<span class="cmt_date">2019.01.01</span>
		            		</header>

		            		<div class="comment_body">
		            			답변 내용!!
		            		</div>

		            		<div class="bt-area bt-right comment_manege">
		            			<button class="bt">수정</button>
		            			<button class="bt">삭제</button>
		            		</div>

		            	</div>
		            </div>
		           
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
		            	<a href="#" class="bt">삭제</a>
		            	<a href="#" class="bt" onclick="history.back(-1)">목록</a>
		            </div>

				</div>
				<div class="meta">
					<div class="description">
						
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- 공지사항 등록 --&gt;
&lt;div class="table-vertical margin-bottom-15"&gt;
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
                &lt;th scope="row"&gt;구분&lt;/th&gt;
                &lt;td colspan="3"&gt;국토정보플랫폼&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;등록일자&lt;/th&gt;
                &lt;td&gt;2016.07.30&lt;/td&gt;
                &lt;th scope="row"&gt;조회수&lt;/th&gt;
                &lt;td&gt;1110&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;담당자&lt;/th&gt;
                &lt;td&gt;국토정보&lt;/td&gt;
                &lt;th scope="row"&gt;담당부서&lt;/th&gt;
                &lt;td&gt;국토조사과&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;이메일&lt;/th&gt;
                &lt;td&gt;asdf@email.com&lt;/td&gt;
                &lt;th scope="row"&gt;전화번호&lt;/th&gt;
                &lt;td&gt;02-1234-5678&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;내용&lt;/th&gt;
                &lt;td colspan="3" style="height:100px;"&gt;
                    국토정보플랫폼 헬프데스크입니다. &lt;br&gt;
                    지명관리시스템 일부 기능이 인터넷 익스플로러 프로그램이 제대로 실행되지 않을 때&lt;br&gt;
                    구글 크롬을 설치하시어 크롬으로 진행하시기 바랍니다.
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;첨부파일&lt;/th&gt;
                &lt;td colspan="3"&gt;
                    &lt;ul class="list-file"&gt;
                        &lt;li&gt;test-1.hwp&lt;button type="button" class="bt down"&gt;다운로드&lt;/button&gt;&lt;/li&gt;
                        &lt;li&gt;test-2.hwp&lt;button type="button" class="bt down"&gt;다운로드&lt;/button&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;!-- /공지사항 등록 --&gt;

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

&lt;!-- 코멘트  //--&gt;
&lt;div class="comment-wrap"&gt;
	&lt;div class="comment_cont"&gt;
		&lt;header&gt;
			&lt;h4&gt;글쓴이&lt;/h4&gt;
			&lt;span class="cmt_date"&gt;2019.01.01&lt;/span&gt;
		&lt;/header&gt;

		&lt;div class="comment_body"&gt;
			답변 내용!!
		&lt;/div&gt;

		&lt;div class="comment_manege"&gt;
			&lt;button class="bt"&gt;수정&lt;/button&gt;
			&lt;button class="bt"&gt;삭제&lt;/button&gt;
		&lt;/div&gt;

	&lt;/div&gt;
&lt;/div&gt;

&lt;div class="table-vertical type-page margin-bottom-15"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;코멘트관리&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:150px;"&gt;
            &lt;col&gt;
            &lt;col style="width:150px;"&gt;
        &lt;/colgroup&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;답변내용&lt;/th&gt;
                &lt;td&gt;
                	&lt;textarea name="" id="" cols="30" rows="10" class="textarea"&gt;&lt;/textarea&gt;
                &lt;/td&gt;
                &lt;td&gt;
                	&lt;button class="bt"&gt;답변등록&lt;/button&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;	
&lt;!--// 코멘트 --&gt;

&lt;div class="bt-area bt-right"&gt;
	&lt;a href="./board_write.php" class="bt"&gt;등록&lt;/a&gt;
	&lt;a href="#" class="bt"&gt;수정&lt;/a&gt;
	&lt;a href="#" class="bt" onclick="history.back(-1)"&gt;목록&lt;/a&gt;
&lt;/div&gt;</code></pre>
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
	include_once('./guide.foot.php');
?>