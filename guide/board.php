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
		<h2 class="g-title">기본게시판 - <small>목록</small></h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<br>
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
		                        <button type="button" class="bt search"></button>	
		                    </fieldset>
		                </form>
		                <p class="count float-left">게시글 수 <em>17</em></p>
		            </div>
		            <!--// search-form -->

		            <form action="">
					<!-- table-horizontal //-->
					<div class="table-horizontal">
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
						사용시 주의점은 각 패튼별 사이트 규격 간격을 사용해야한다.
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- search-form //--&gt;
&lt;div class="search-form"&gt;
    &lt;form action="" class="float-right"&gt;
        &lt;fieldset&gt;
            &lt;legend&gt;리스트 검색&lt;/legend&gt;
            &lt;label for="s-type" class="blind"&gt;서비스 구분&lt;/label&gt;
            &lt;select id="s-type" name="w-type"&gt;
                &lt;option value=""&gt;전체&lt;/option&gt;
            &lt;/select&gt;

            &lt;label for="s-require" class="blind"&gt;검색 조건 선택&lt;/label&gt;
            &lt;select id="s-require" name="w-require"&gt;
                &lt;option value=""&gt;전체&lt;/option&gt;
            &lt;/select&gt;

            &lt;label for="s-input" class="blind"&gt;검색어 입력&lt;/label&gt;
            &lt;input type="text" id="s-input" name="s-input" value=""&gt;
            &lt;button type="button" class="bt"&gt;검색&lt;/button&gt;	
        &lt;/fieldset&gt;
    &lt;/form&gt;
    &lt;p class="count float-left"&gt;게시글 수 &lt;em&gt;17&lt;/em&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;!--// search-form --&gt;

&lt;form action=""&gt;
&lt;!-- table-horizontal //--&gt;
&lt;div class="table-horizontal"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;공지사항 목록&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:50px;"&gt;
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
            	&lt;th scope="col"&gt;&lt;input type="checkbox" name="chkall" id="chkall" onclick="check_all(this.form)"&gt;&lt;/th&gt;
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
            	&lt;td&gt;&lt;input type="checkbox" name="chk[]" value="0" id="chk_0"&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;&lt;/span&gt;2&lt;/td&gt;
                &lt;td&gt;GNSS서비스&lt;/td&gt;
                &lt;td class="subject"&gt;&lt;a href="board_view.php"&gt;순천 위성기준점 시설 개량공사&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;국토측량과&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;2015.07.30&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="has-file"&gt;첨부파일 있음&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;10&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
            	&lt;td&gt;&lt;input type="checkbox" name="chk[]" value="1" id="chk_1"&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;1&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;GNSS서비스&lt;/td&gt;
                &lt;td class="subject"&gt;&lt;a href="board_view.php"&gt;순천 위성기준점 시설 개량공사&lt;/a&gt;&lt;/td&gt;
                &lt;td&gt;국토측량과&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;2015.07.30&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="has-file"&gt;첨부파일 있음&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;&lt;span class="txt-gray"&gt;10&lt;/span&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;!--// table-horizontal --&gt;

&lt;!-- pagination //--&gt;
&lt;div class="pagination"&gt;
    &lt;button type="button" class="prev"&gt;이전&lt;/button&gt;	
    &lt;div&gt;
        &lt;button type="button" class="current"&gt;1&lt;/button&gt;
        &lt;button type="button"&gt;2&lt;/button&gt;
        &lt;button type="button"&gt;3&lt;/button&gt;
        &lt;button type="button"&gt;4&lt;/button&gt;
        &lt;button type="button"&gt;5&lt;/button&gt;
    &lt;/div&gt;
    &lt;button type="button" class="next"&gt;다음&lt;/button&gt;
&lt;/div&gt;
&lt;!--// pagination --&gt;</code></pre>
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