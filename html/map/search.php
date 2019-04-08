<?php
    include_once('../head.php');
?>
    
    <!-- Container -->
    <article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>지도 관리</h2>
            <ul role="menu">
                <li><a href="search.php">지도 검색</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Contents -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">지도 검색</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>지도 관리</li>
                <li>지도 검색</li>
            </ol>
            <!-- /Location -->

            <!-- Search : Start -->
            <div class="searchbox">             
                <form>
                <fieldset>
                    <legend>목록 검색</legend>
                    <table>
                        <caption class="blind">상세검색</caption>
                        <colgroup>
                            <col style="width:70px;">
                            <col style="width:auto;">
                            <col style="width:70px;">
                            <col style="width:150px;">
                            <col style="width:70px;">
                            <col style="width:250px;">
                            <col style="width:70px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <!-- 시군구 -->
                                <th scope="row"><label for="s-addr">시군구</label></th>
                                <td>
                                    <select id="s-addr" name="s-addr-sido" title="시">
                                        <option value="">전라남도</option>
                                    </select>
                                    <!-- <select id="s-addr2" name="s-addr-gungu" title="군">
                                        <option value="">신안군</option>
                                    </select>
                                    <select id="s-addr3" name="s-addr-dongmyeon" title="구">
                                        <option value="">비금면</option>
                                    </select> -->
                                </td>
                                <!-- /시군구 -->

                                <!-- 관리번호 -->
                                <th scope="row"><label for="s-ad-num">관리번호</label></th>
                                <td><input type="text" id="s-ad-num" name="" value="" class="full"></td>
                                <!-- /관리번호 -->

                                <!-- 도서명 -->
                                <th scope="row"><label for="s-doseo">도서명</label></th>
                                <td><input type="text" id="s-doseo" name="" value="" class="full"></td>
                                <!-- /도서명 -->
                                
                                <td><button type="botton" class="bt">검색</button></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                </form> 
                <!-- <button type="button" class="ico close mobile"><span class="blind">레이어 닫기</span></button> -->
            </div>
            <!-- /Search -->

            <div class="map-area">
               
                
                <!-- Map List -->
                <div class="map-list" style="float:none">
                    <!-- 조사대상 무인도서 목록 -->
                    <p class="count">총 <em>17</em>건이 있습니다.</p>
                    <div class="table-horizontal hover">
                        <table>
                            <caption class="blind">조사대상 무인도서 목록</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col style="width:auto">
                                <col style="width:180px;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">관리번호</th>
                                    <th scope="col">행정구역</th>
                                    <th scope="col">조사대상 도서명</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="current">
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>장구섬(구분시리3)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.htmllist.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                                <tr>
                                    <td>888888888888888</td>
                                    <td class="subject"><a href="list.html">전남 신안군 비금면 내월리 산 269</a></td>
                                    <td>구분시리(곡도)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /조사대상 무인도서 목록 -->
                </div>
                <!-- /Map List -->
                
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
