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
            <h1 class="title-sub-h1">통합검색 분석 및 통계</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>통계 관리</li>
                <li>통합검색 분석 및 통계</li>
            </ol>
            <!-- /Location -->

            <!-- Search -->
            <div class="search-form">
                <form action="" class="float-right">
                    <fieldset>
                        <legend>리스트 검색</legend>
                        <label for="s-type" class="blind">기간별</label>
                        <select id="s-type" name="w-type">
                            <option value="">일별</option>
                            <option value="">주별</option>
                            <option value="">월별</option>
                            <option value="">분기별</option>
                            <option value="">년도별</option>
                        </select>
                                
                        <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
                        - 
                        <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>

                        <label for="s-input" class="blind">검색어 입력</label>
                        <input type="text" id="s-input" name="s-input" value="">
                        <button type="button" class="bt search"></button> 
                    </fieldset>
                </form>
            </div>
            <!-- /Search -->
            
            <div class="owl-carousel owl-theme">
                <div class="item">
                   <div class="search-lanking">
                        <h2>2018.07.01(일)</h2>
                        <ol>
                            <li><a href="#"><i>1</i>ㄱ</a></li>
                            <li><a href="#"><i>2</i>ㄴ</a></li>
                            <li><a href="#"><i>3</i>ㄷ</a></li>
                            <li><a href="#"><i>4</i>ㄹ</a></li>
                            <li><a href="#"><i>5</i>ㅁ</a></li>
                            <li><a href="#"><i>6</i>ㅂ</a></li>
                            <li><a href="#"><i>7</i>ㅅ</a></li>
                            <li><a href="#"><i>8</i>ㅇ</a></li>
                            <li><a href="#"><i>9</i>ㅈ</a></li>
                            <li><a href="#"><i>10</i>ㅊ</a></li>
                        </ol>
                    </div>
                </div>
                
                <div class="item">
                   <div class="search-lanking">
                        <h2>2018.07.01(일)</h2>
                        <ol>
                            <li><a href="#"><i>1</i>ㄱ</a></li>
                            <li><a href="#"><i>2</i>ㄴ</a></li>
                            <li><a href="#"><i>3</i>ㄷ</a></li>
                            <li><a href="#"><i>4</i>ㄹ</a></li>
                            <li><a href="#"><i>5</i>ㅁ</a></li>
                            <li><a href="#"><i>6</i>ㅂ</a></li>
                            <li><a href="#"><i>7</i>ㅅ</a></li>
                            <li><a href="#"><i>8</i>ㅇ</a></li>
                            <li><a href="#"><i>9</i>ㅈ</a></li>
                            <li><a href="#"><i>10</i>ㅊ</a></li>
                        </ol>
                    </div>
                </div>
                <div class="item">
                   <div class="search-lanking">
                        <h2>2018.07.01(일)</h2>
                        <ol>
                            <li><a href="#"><i>1</i>ㄱ</a></li>
                            <li><a href="#"><i>2</i>ㄴ</a></li>
                            <li><a href="#"><i>3</i>ㄷ</a></li>
                            <li><a href="#"><i>4</i>ㄹ</a></li>
                            <li><a href="#"><i>5</i>ㅁ</a></li>
                            <li><a href="#"><i>6</i>ㅂ</a></li>
                            <li><a href="#"><i>7</i>ㅅ</a></li>
                            <li><a href="#"><i>8</i>ㅇ</a></li>
                            <li><a href="#"><i>9</i>ㅈ</a></li>
                            <li><a href="#"><i>10</i>ㅊ</a></li>
                        </ol>
                    </div>
                </div>
                <div class="item">
                   <div class="search-lanking">
                        <h2>2018.07.01(일)</h2>
                        <ol>
                            <li><a href="#"><i>1</i>ㄱ</a></li>
                            <li><a href="#"><i>2</i>ㄴ</a></li>
                            <li><a href="#"><i>3</i>ㄷ</a></li>
                            <li><a href="#"><i>4</i>ㄹ</a></li>
                            <li><a href="#"><i>5</i>ㅁ</a></li>
                            <li><a href="#"><i>6</i>ㅂ</a></li>
                            <li><a href="#"><i>7</i>ㅅ</a></li>
                            <li><a href="#"><i>8</i>ㅇ</a></li>
                            <li><a href="#"><i>9</i>ㅈ</a></li>
                            <li><a href="#"><i>10</i>ㅊ</a></li>
                        </ol>
                    </div>
                </div>
                <div class="item">
                   <div class="search-lanking">
                        <h2>2018.07.01(일)</h2>
                        <ol>
                            <li><a href="#"><i>1</i>ㄱ</a></li>
                            <li><a href="#"><i>2</i>ㄴ</a></li>
                            <li><a href="#"><i>3</i>ㄷ</a></li>
                            <li><a href="#"><i>4</i>ㄹ</a></li>
                            <li><a href="#"><i>5</i>ㅁ</a></li>
                            <li><a href="#"><i>6</i>ㅂ</a></li>
                            <li><a href="#"><i>7</i>ㅅ</a></li>
                            <li><a href="#"><i>8</i>ㅇ</a></li>
                            <li><a href="#"><i>9</i>ㅈ</a></li>
                            <li><a href="#"><i>10</i>ㅊ</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="../../dist/js/libs/owlcarousel/owl.carousel.min.css">
            <script type="text/javascript" src="../../dist/js/libs/owlcarousel/owl.carousel.min.js"></script>
            
            <script type="text/javascript">
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    items:4
                })
            })
            </script>

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
