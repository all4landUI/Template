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
            <h1 class="title-sub-h1">페이지뷰 현황</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>통계 관리</li>
                <li>페이지뷰 현황</li>
            </ol>
            <!-- /Location -->

            <!-- 접속현황 조회 조건 선택 -->
            <form action="">
                <fieldset>
                    <legend>선택 배경지도 통계 조회 조건 선택</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">페이지뷰 현황 조회 조건</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col>
                                <col style="width:150px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-date">조회기간</label></th>
                                    <td>
                                        <div class="search-form">
                                            <span class="search-date"><input type="text" id="s-date" name="s-date" value="" class="datepicker" title="조회기간 설정 시작일"></span>
                                            - 
                                            <span class="search-date"><input type="text" id="s-date2" name="s-date2" value="" class="datepicker" title="조회기간 설정 종료일"></span>
                                        </div>
                                    </td>
                                    <th scope="row"><label for="s-type">서비스 구분</label></th>
                                    <td>
                                        <select id="s-type" name="s-type" title="서비스 구분 선택">
                                            <option value="">전체</option>
                                            <option value="">국토정보플랫폼</option>
                                            <option value="">극지공간정보</option>
                                            <option value="">GNSS서비스</option>
                                            <option value="">바로e맵</option>
                                            <option value="">국토변화정보포털</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /접속현황 조회 조건 선택 -->

            <div class="bt-area bt-right">
                <button type="button" class="bt dark-gray">조회</button>
            </div>

            <!-- 페이지뷰 현황 목록 -->
            <div class="table-horizontal hover">
                <table>
                    <caption class="blind">페이지뷰 현황 목록</caption>
                    <colgroup>
                        <col style="width:70px;">
                        <col style="width:180px;">
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">서비스구분</th>
                            <th scope="col">메뉴명</th>
                            <th scope="col">건수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>국토정보서비스</td>
                            <td>활용-자료유형정보</td>
                            <td>26,409</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /페이지뷰 현황 목록 -->

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
