<?php
    include_once('../head.php');
?>
    
    <!-- Container -->
    <article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <?php include_once('./lnb.php');?>         
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">갤러리</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>갤러리</li>
            </ol>
            <!-- /Location -->
                
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
                <a href="notice.write.php" class="bt bt-1">등록</a>
                <a href="notice.write.php" class="bt bt-2">수정</a>
                <a href="#" class="bt bt-6" onclick="history.back(-1)">목록</a>
            </div>
            <!--// 상세  -->

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