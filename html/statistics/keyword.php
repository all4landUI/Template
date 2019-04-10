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
            <h1 class="title-sub-h1">검색어 통계</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>통계 관리</li>
                <li>검색어 통계</li>
            </ol>
            <!-- /Location -->

             <h3 class="title-sub-h2">선택 배경지도 통계</h3>

            <!-- 선택 배경지도 통계 조회 조건 선택 -->
            <div class="table-vertical type2">
                <table>
                    <caption class="blind">선택 배경지도 통계 조회 조건 선택</caption>
                    <colgroup>
                        <col style="width:15%;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row">선택일자</th>
                            <td>
                                <div class="search-form">
                                    <span class="search-date"><input type="text" id="date" name="" value="" class="datepicker"></span>
                                    <button class="bt bt-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <button class="bt down bt table" style="margin-left:0;">엑셀다운로드</button>
                                    (선택일로부터 <span class="txt-blue">10일</span> 이전)
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /선택 배경지도 통계 조회 조건 선택 -->

            <!-- 그래프영역 850*330 -->
            <div class="area-chart" style="height:330px;">
            </div>
            <!-- /그래프영역 850*330 -->

            <h3 class="title-sub-h2">테마 선택 통계</h3>

            <!-- 테마 선택 통계 조회 조건 선택 -->
            <form action="">
                <fieldset>
                    <legend>선택 배경지도 통계 조회 조건 선택</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="hidden">테마 선택 통계 조회 조건 선택</caption>
                            <colgroup>
                                <col style="width:15%;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-date">선택일자</label></th>
                                    <td>
                                        <div class="search-form">
                                            <span class="search-date"><input type="text" id="s-date" name="s-date" value="" class="datepicker"></span>
                                            <button class="bt bt-2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            <button class="bt down bt table" style="margin-left:0;">엑셀다운로드</button>
                                            (선택일로부터 <span class="txt-blue">10일</span> 이전)
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /테마 선택 통계 조회 조건 선택 -->

            <!-- 그래프영역 850*330 -->
            <div class="area-chart" style="height:330px;">
            </div>
            <!-- /그래프영역 850*330 -->

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
