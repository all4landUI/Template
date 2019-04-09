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
            <h1 class="title-sub-h1">접속 현황</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>통계 관리</li>
                <li>접속 현황</li>
            </ol>
            <!-- /Location -->

             <!-- 접속현황 조회 조건 선택 -->
            <form action="">
                <fieldset>
                    <legend>접속현황 조회 조건</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">접속현황 조회 조건</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-date">조회기간</label></th>
                                    <td>
                                        <select id="s-date" name="s-date" title="년도 선택" style="width:100px;">
                                            <option value="">2016</option>
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
                <button type="button" class="bt dove">대장생성</button>
            </div>

            <!-- 접속현황 목록 -->
            <div class="table-horizontal hover">
                <table>
                    <caption class="blind">접속현황 목록</caption>
                    <colgroup>
                        <col style="width:100px;">
                        <col>
                        <col style="width:130px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">년도</th>
                            <th scope="col">서비스 구분</th>
                            <th scope="col">건수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2016</td>
                            <td>유통 데이터</td>
                            <td>9,574</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /접속현황 목록 -->

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
