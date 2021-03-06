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
            <br>
			<div class="demo-block">
				<div class="source">
					<div class="table-vertical type2 margin-bottom-15">
                        <table>
                            <caption class="blind">게시판 등록</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="w-title">제목</label></th>
                                    <td><input type="text" id="w-title" name="w-title" value="" placeholder="제목을 입력하세요" style="width:550px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-name">쿠키이름</label></th>
                                    <td><input type="text" id="w-name" name="w-name" value="" placeholder="쿠키를 입력하세요" style="width:550px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-position-x">가로위치(x)</label></th>
                                    <td><input type="text" id="w-position-x" name="w-position-x" value="" placeholder="위치값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-position-y">세로위치(y)</label></th>
                                    <td><input type="text" id="w-position-y" name="w-position-y" value="" placeholder="위치값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-width">가로크기(w)</label></th>
                                    <td><input type="text" id="w-width" name="w-width" value="" placeholder="크기값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-height">세로크기(h)</label></th>
                                    <td><input type="text" id="w-upload" name="w-upload" value="" placeholder="크기값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-date">시작,종료일자</label></th>
                                    <td>
                                        <div class="search-form">
                                            <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
                                            - 
                                            <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="w-content">내용</label></th>
                                    <td><textarea id="w-content" name="w-content" rows="20" style="width:550px;"></textarea></td>
                                </tr>
                                <tr>
                                    <th><label for="w-upload">첨부파일</label></th>
                                    <td>
                                        <ul class="list-bullet">
                                            <li>파일첨부시 팝업차단기능이 해제 되어야 합니다.</li>
                                            <li>파일은 최대 <em>1</em>개의 파일이 업로드 가능합니다. <em>(2MB)</em></li>
                                            <li>첨부파일은 jpg, jpeg, bmp, tif, gif, png로 된 이미지만 가능합니다.</li>
                                        </ul>
                                        <p class="upload-file"><input type="file" id="w-upload" name="w-upload" value="">
                                        <button type="button" class="bt">전체삭제</button></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

		            <div class="bt-area">
		            	<a href="./board_write.php" class="bt">등록</a>
		            	<a href="#" class="bt">수정</a>
		            	<a href="#" class="bt" onclick="history.back(-1)">목록</a>
		            </div>

				</div>
				<div class="meta"> 
                    <div class="description">
						
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
	include_once('./guide.foot.php');
?>