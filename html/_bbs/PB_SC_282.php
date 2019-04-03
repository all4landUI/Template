<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>게시판 관리</h2>
            <ul role="menu">
                <li class="current"><a href="PB_SC_281.php">공지사항</a></li>
                <li><a href="PB_SC_285.php">Q&amp;A</a></li>
                <li><a href="PB_SC_288.php">공지사항 알림</a></li>
                <li><a href="PB_SC_292.php">극지 동영상</a></li>
                <li><a href="PB_SC_296.php">극지사진 갤러리</a></li>
                <li><a href="PB_SC_300.php">극지지도 내려받기</a></li>
                <li><a href="PB_SC_301.php">GNSS 커뮤니티</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">공지사항</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>공지사항</li>
            </ol>
            <!-- /Location -->

            <!-- 공지사항 등록 -->
            <div class="table-vertical">
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
            <div class="table-vertical type-page">
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

            <div class="bt-area text-right">
                <button type="button" onclick="location.href='PB_SC_281.php'" class="bt reset">취소</button>
                <button type="button" class="bt submit">저장</button>
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