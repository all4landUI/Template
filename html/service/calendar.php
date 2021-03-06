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
            <h1 class="title-sub-h1">행사 및 일정</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>서비스 관리</li>
                <li>행사 및 일정</li>
            </ol>
            <!-- /Location -->

            <!-- schedule wrap -->
             <div class="schedule calendar">
                <header class="text-center schedule">
                    <button type="button"><i class="ico prev"></i><i class="ico prev"></i><span class="blind">이전년도</span></button>
                    <button type="button"><i class="ico prev"></i><span class="blind">이전월</span></button>
                    <h2>2018년 10월</h2>
                    <button type="button"><i class="ico next"></i><span class="blind">다음월</span></button>
                    <button type="button"><i class="ico next"></i><i class="ico next"></i><span class="blind">다음년도</span></button>
                </header>

                <div class="table-view">
                    <table class="table-horizontal calendar">
                        <colgroup>
                            <col style="width:14%">
                            <col style="width:14%">
                            <col style="width:14%">
                            <col style="width:14%">
                            <col style="width:14%">
                            <col style="width:14%">
                            <col style="width:14%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" class="sun">Sun</th>
                                <th scope="col">Wed</th>
                                <th scope="col">Mon</th>
                                <th scope="col">Tue</th>
                                <th scope="col">Thu</th>
                                <th scope="col">Fri</th>
                                <th scope="col" class="sat">Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="sun"></span></td>
                                <td>1
                                    <div class="calev_wrap">
                                        <span class="cal_ev1">이벤트1</span>
                                        <span class="cal_ev2">이벤트2</span>
                                        <span class="cal_ev3">이벤트3</span>
                                        <span class="cal_ev4">이벤트4</span>
                                        <span class="cal_ev5">이벤트5</span>
                                    </div>
                                </td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td><span class="sat">6</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">7</span></td>
                                <td>8</td>
                                <td>9
                                    <div class="calev_wrap">
                                        <span class="cal_ev1">이벤트1</span>
                                        <span class="cal_ev2">이벤트2이벤트2이벤트2</span>
                                        <span class="cal_ev3">이벤트3이벤트3이벤트3</span>
                                    </div>
                                </td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td><span class="sat">13</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">14</span></td>
                                <td>15</td>
                                <td>16
                                    <div class="calev_wrap">
                                        <span class="cal_ev1">이벤트1</span>
                                        <span class="cal_ev2">이벤트2이벤트2이벤트2</span>
                                        <span class="cal_ev3">이벤트3이벤트3이벤트3</span>
                                    </div>
                                </td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td><span class="sat">20</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">21</span></td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26
                                    <div class="calev_wrap">
                                        <span class="cal_ev1">이벤트1</span>
                                        <span class="cal_ev2">이벤트2이벤트2이벤트2</span>
                                        <span class="cal_ev3">이벤트3이벤트3이벤트3</span>
                                    </div>
                                </td>
                                <td><span class="sat">27</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">28</span></td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                                <td><span class="sat"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- schedule wrap -->
            
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
