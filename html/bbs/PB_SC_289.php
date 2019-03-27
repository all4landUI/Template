<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>게시판 관리</h2>
            <ul role="menu">
                <li><a href="PB_SC_281.php">공지사항</a></li>
                
                <li><a href="PB_SC_285.php">Q&amp;A</a></li>
                
                <li class="current"><a href="PB_SC_288.php">공지사항 알림</a></li>
                <li><a href="PB_SC_292.php">극지 동영상</a></li>
                <li><a href="PB_SC_296.php">극지사진 갤러리</a></li>
                <li><a href="PB_SC_300.php">극지지도 내려받기</a></li>
                <li><a href="PB_SC_301.php">GNSS 커뮤니티</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Content -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">공지사항 알림</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>공지사항 알림</li>
            </ol>
            <!-- /Location -->

            <!-- 공지사항 알림 상세보기 -->
            <div class="table-vertical type2">
                <h3 class="title-table">국토정보플랫폼</h3>
                <table>
                    <caption class="blind">공지사항 알림 상세보기</caption>
                    <colgroup>
                        <col style="width:150px;">
                        <col>
                        <col style="width:150px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">쿠키이름</th>
                            <td colspan="3">noticepopup</td>
                        </tr>
                        <tr>
                            <th scope="row">가로위치(x)</th>
                            <td>300</td>
                            <th scope="row">세로위치(y)</th>
                            <td>300</td>
                        </tr>
                        <tr>
                            <th scope="row">가로크기(w)</th>
                            <td>450</td>
                            <th scope="row">세로크기(h)</th>
                            <td>230</td>
                        </tr>
                        <tr>
                            <th scope="row">시작일자</th>
                            <td>2016.11.01</td>
                            <th scope="row">종료일자</th>
                            <td>2016.11.03</td>
                        </tr>
                        <tr>
                            <th scope="row">내용</th>
                            <td colspan="3" style="style:100px;">
                                극지정보서비스 중지 안내 <br>
                                극지정보서비스 이용에 불편을 드려 죄송합니다.<br>
                                추후 새로운 극지정보서비스로 찾아뵙겠습니다.
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">첨부파일목록</th>
                            <td colspan="3">
                                <ul class="list-file">
                                    <li>bg_sistem.gif[32.800byte] <button type="button" class="bt down">다운로드</button></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /공지사항 알림 상세보기 -->

            <div class="bt-area text-right">
                <button type="button" class="bt reset">삭제</button>
                <button type="button" onclick="location.href='PB_SC_291.php'" class="bt reset">수정</button>
                <button type="button" onclick="location.href='PB_SC_288.php'" class="bt list">목록</button>
            </div>

        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

	<!-- Footer -->
	<footer>
		<div class="inner">
			<p class="f-logo">올포랜드 로고</p>
			<ul>
				<li><a href="#"><em>개인정보 처리방침</em></a></li>
				<li><a href="#">저작권정책</a></li>
				<li><a href="#">이메일무단수집거부</a></li>
			</ul>
            <address>서울특별시 금천구 가산디지털1로 145</address>
            <span>TEL : 02 - 855 - 5724</span>
            <span>FAX : 02 - 857 - 5746</span>
            <small>© ALLFORLAND, All rights reserved.</small>

			<select title="관련기관 바로가기" class="family-site">
				<option value="">관련기관목록</option>
			</select>
		</div>
	</footer>
	<!-- /Footer -->  

</body>
</php>