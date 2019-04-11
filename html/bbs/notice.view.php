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
            <h1 class="title-sub-h1">공지사항</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>공지사항</li>
            </ol>
            <!-- /Location -->
            
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

                    <div class="comment_manege bt-area">
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
                <a href="notice.write.php" class="bt">등록</a>
                <a href="notice.write.php" class="bt">수정</a>
                <a href="#" class="bt" onclick="history.back(-1)">목록</a>
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