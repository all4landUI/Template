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
                
                <li><a href="PB_SC_288.php">공지사항 알림</a></li>
                <li><a href="PB_SC_292.php">극지 동영상</a></li>
                <li><a href="PB_SC_296.php">극지사진 갤러리</a></li>
                <li><a href="PB_SC_300.php">극지지도 내려받기</a></li>
                <li class="current"><a href="PB_SC_301.php">GNSS 커뮤니티</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Content -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">GNSS 커뮤니티</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>GNSS 커뮤니티</li>
            </ol>
            <!-- /Location -->

            <!-- GNSS 커뮤니티 상세내용 -->
            <div class="table-vertical">
                <table>
                    <caption class="blind">GNSS 커뮤니티 상세내용</caption>
                    <colgroup>
                        <col style="width:150px;">
                        <col>
                        <col style="width:150px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <td colspan="4"><span class="tableTitle">상시관측소(강화) - 고시좌표 검토요청</span></td>
                        </tr>
                        <tr>
                            <th scope="row">작성자</th>
                            <td>이근수</td>
                            <th scope="row">작성일자</th>
                            <td>2015.07.04</td>
                        </tr>
                        <tr>
                            <th scope="row">내용</th>
                            <td colspan="3" style="height:100px;">
                                상시관측소 고시좌표(국토지리정보원 고시 제2014-492호) 중 <br>
                                강화(GANH)	<br>
                                IRTF2000, 경위도 및 평면직각좌표 성과 중 <br>
                                평면직각좌표의 <br>
                                현재성과(X=569027.762 Y=146239.621)
                                검토성과(X=569027.792 Y=146239.621) <br>
                                X 방향으로의 3cm 오기로 보여지는데 검토 부탁드리며 답변 부탁드립니다.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /GNSS 커뮤니티 상세내용 -->

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

            <h3 class="title-answer"><i>A</i>답변</h3>
            <!-- 답변 쓰기 내용 -->
            <form action="">
                <fieldset>
                    <legend>답변 쓰기</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">답변 쓰기 내용</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col>
                                <col style="width:120px;">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="a-content">답변내용</label></th>
                                    <td>
                                        <textarea id="a-content" name="a-content" rows="3" class="full"></textarea>
                                    </td>
                                    <td class="ta-c"><button type="button" class="bt light-blue bt table">답변등록</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /답변 쓰기 내용 -->

            <div class="bt-area text-right">
                <button type="button" onclick="location.href='PB_SC_304.php'" class="bt reset">수정</button>
                <button type="button" class="bt reset">삭제</button>
                <button type="button" onclick="location.href='PB_SC_301.php'" class="bt list">목록</button>
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