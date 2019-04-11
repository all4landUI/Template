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
            <h1 class="title-sub-h1">통계 현황</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>통계 관리</li>
                <li>통계 현황</li>
            </ol>
            <!-- /Location -->

            <!-- 통계현황 조회 조건 -->
            <form action="">
                <fieldset>
                    <legend>선택 배경지도 통계 조회 조건 선택</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">통계현황 조회 조건</caption>
                            <colgroup>
                                <col style="width:15%;">
                                <col>
                                <col style="width:15%;">
                                <col>
                                <col style="width:15%;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-type">사용자 구분</label></th>
                                    <td colspan="5">
                                        <select id="s-type" name="s-type" title="사용자 구분 선택">
                                            <option value="">전체</option>
                                            <option value="">사용자ID</option>
                                            <option value="">사용자명</option>
                                        </select>
                                        <label for="w-type" class="blind">사용자 구분</label>
                                        <input type="text" id="w-type" name="w-type">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="s-map">지도 종류</label></th>
                                    <td>
                                        <select id="s-map" name="s-map" title="챠트 종류 선택">
                                            <option value="">국토영상정보</option>
                                        </select>
                                    </td>
                                    <th scope="row"><label for="s-purpose">구매목적</label></th>
                                    <td>
                                        <select id="s-purpose" name="s-purpose" title="구매목적 선택">
                                            <option value="">전체</option>
                                            <option value="">측량 및 지도제작</option>
                                        </select>
                                    </td>
                                    <th scope="row"><label for="s-how">구매방법</label></th>
                                    <td>
                                        <select id="s-how" name="s-how" title="구매방법 선택">
                                            <option value="">전체</option>
                                            <option value="">온라인</option>
                                            <option value="">방문</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="s-agency">제공기관</label></th>
                                    <td colspan="5">
                                        <select id="s-agency" name="s-agency" title="제공기관 선택">
                                            <option value="">전체</option>
                                            <option value="">수원시</option>
                                            <option value="">인천광역시</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="s-date">조회기간 설정</label></th>
                                    <td colspan="5">
                                        <div class="search-form">
                                            <div class="bt-area bt-left">
                                                <button class="bt white bt table mr-5" style="width:70px;">1개월</button>
                                                <button class="bt white bt table mr-5" style="width:70px;">3개월</button>
                                                <button class="bt white bt table mr-5" style="width:70px;">6개월</button>
                                                <button class="bt white bt table mr-5" style="width:70px;">1년</button>
                                                <button class="bt white bt table mr-5" style="width:90px;">2013년</button>
                                                <button class="bt white bt table mr-5" style="width:90px;">2014년</button>
                                                <button class="bt white bt table mr-5" style="width:90px;">2015년</button>
                                                <button class="bt white bt table">2016년</button>
                                            </div>
                                            <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
                                            - 
                                            <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /통계현황 조회 조건 -->

            <div class="bt-area bt-right">
                <button type="button" class="bt dark-gray">조회</button>
                <button type="button" class="bt dove">대장생성</button>
            </div>

            <!-- 그래프영역 850*380 -->
            <div class="area-chart mb-50" style="height:380px;">
            </div>
            <!-- /그래프영역 850*380 -->

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
