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
		<h2 class="g-title">테이블</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본형 - 가로형</h3>
			<p>가장 기본형식으로써, 각 테이블간의 간격은 설정해야함</p>
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
		                        <tr>
		                            <td><span class="txt-gray">1</span></td>
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
<pre><code class="language-html">&lt;!-- table-horizontal //--&gt;
&lt;div class="table-horizontal"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;공지사항 목록&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:50px;"&gt;
            &lt;col style="width:130px;"&gt;
            &lt;col&gt;
            &lt;col style="width:100px;"&gt;
            &lt;col style="width:100px;"&gt;
            &lt;col style="width:75px;"&gt;
            &lt;col style="width:60px;"&gt;
        &lt;/colgroup&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;번호&lt;/th&gt;
                &lt;th scope="col"&gt;서비스 구분&lt;/th&gt;
                &lt;th scope="col"&gt;제목&lt;/th&gt;
                &lt;th scope="col"&gt;담당부서&lt;/th&gt;
                &lt;th scope="col"&gt;등록일&lt;/th&gt;
                &lt;th scope="col"&gt;첨부파일&lt;/th&gt;
                &lt;th scope="col"&gt;조회수&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;10&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;GNSS서비스&lt;/td&gt;
                &lt;td class="subject"&gt;&lt;a href="PB_SC_282.php"&gt;순천 위성기준점 시설 개량공사&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;국토측량과&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;2015.07.30&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="has-file"&gt;첨부파일 있음&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;10&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;1&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;GNSS서비스&lt;/td&gt;
                &lt;td class="subject"&gt;&lt;a href="PB_SC_282.php"&gt;순천 위성기준점 시설 개량공사&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;국토측량과&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;2015.07.30&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="has-file"&gt;첨부파일 있음&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;10&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;!--// table-horizontal --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>기본형 - 세로형</h3>
			<p>가장 기본형식으로써, 각 테이블간의 간격은 설정해야함</p>
			<div class="demo-block">
				<div class="source">
					<!-- table-horizontal //-->
					<div class="table-vertical">
		                <table>
		                    <caption class="blind">공지사항 목록</caption>
		                    <colgroup>
		                        <col style="width:150px;">
		                        <col>
		                    </colgroup>
		                    <tbody>
			                    <tr>
		                            <th scope="row">구분</th>
		                            <td>국토정보플랫폼</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">작성자</th>
		                            <td>정명훈</td>
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
<pre><code class="language-html">&lt;!-- table-horizontal //--&gt;
&lt;div class="table-vertical"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;공지사항 목록&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:150px;"&gt;
            &lt;col&gt;
        &lt;/colgroup&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;구분&lt;/th&gt;
                &lt;td&gt;국토정보플랫폼&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;작성자&lt;/th&gt;
                &lt;td&gt;정명훈&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;!--// table-horizontal --&gt;</code></pre>
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