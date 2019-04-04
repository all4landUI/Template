<?php
    include_once('../../head.php');
?>
	

	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>서비스관리</h2>
            <ul role="menu">
                <li class=""><a href="">소개</a></li>
                <li class=""><a href="#">서비스 정보</a></li>
                <li class=""><a href="#">표 정보</a></li>
                <li class="current"><a href="#">행사 및 일정</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->
            
        <section id="content" class="content">
            <h1 class="title-sub-h1">표 정보</h1>
            
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
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" class="sun">Sun</th>
                                <th scope="col">Mon</th>
                                <th scope="col">Tue</th>
                                <th scope="col">Wed</th>
                                <th scope="col">Thu</th>
                                <th scope="col">Fri</th>
                                <th scope="col" class="sat">Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="sun"></span></td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td><span class="sat">6</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">7</span></td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td><span class="sat">13</span></td>
                            </tr>
                            <tr>
                                <td><span class="sun">14</span></td>
                                <td>15</td>
                                <td>16</td>
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
                                <td>26</td>
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

<?php
    include_once('../../foot.php');
?>