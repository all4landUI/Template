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
            <h1 class="title-sub-h1">묻고 답하기</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>묻고 답하기</li>
            </ol>
            <!-- /Location -->

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
                        <button type="button" class="bt"><i class="fa fa-search" aria-hidden="true"></i></button>    
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
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_3"></td>
                            <td><span class="txt-gray"></span>7</td>
                            <td>GNSS서비스</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_3"></td>
                            <td><span class="txt-gray"></span>6</td>
                            <td>국토정보플랫폼</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_2"></td>
                            <td><span class="txt-gray"></span>6</td>
                            <td>국토정보플랫폼</td>
                            <td class="subject"><a href="qna.view.php"><img src="../../dist/images/ico/ico-re.gif" width="25" alt=""> 순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_3"></td>
                            <td><span class="txt-gray"></span>5</td>
                            <td>GNSS서비스</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_3"></td>
                            <td><span class="txt-gray"></span>4</td>
                            <td>국토정보플랫폼</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_5"></td>
                            <td><span class="txt-gray"></span>3</td>
                            <td>GNSS서비스</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_4"></td>
                            <td><span class="txt-gray"></span>3</td>
                            <td>GNSS서비스</td>
                            <td class="subject"><a href="qna.view.php"><img src="../../dist/images/ico/ico-re.gif" width="25" alt=""> 순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_3"></td>
                            <td><span class="txt-gray"></span>2</td>
                            <td>국토정보플랫폼</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="0" id="chk_2"></td>
                            <td><span class="txt-gray"></span>2</td>
                            <td>국토정보플랫폼</td>
                            <td class="subject"><a href="qna.view.php"><img src="../../dist/images/ico/ico-re.gif" width="25" alt=""> 순천 위성기준점 시설 개량공사</a></td>
                            <td>국토측량과</td>
                            <td><span class="txt-gray">2015.07.30</span></td>
                            <td><span class="has-file">첨부파일 있음</span></td>
                            <td><span class="txt-gray">10</span></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="chk[]" value="1" id="chk_0"></td>
                            <td><span class="txt-gray">1</span></td>
                            <td>GNSS서비스</td>
                            <td class="subject"><a href="qna.view.php">순천 위성기준점 시설 개량공사</a></td>
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
