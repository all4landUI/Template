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
            <h1 class="title-sub-h1">갤러리</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>갤러리</li>
            </ol>
            <!-- /Location -->

            <!-- Search -->
            <div class="search-form">
                <form action="" class="float-right">
                    <fieldset>
                        <legend>리스트 검색</legend>
                        <label for="w-type" class="blind">서비스 구분</label>
                        <select id="w-type" name="w-type">
                            <option value="">전체</option>
                        </select>

                        <label for="w-require" class="blind">검색 조건 선택</label>
                        <select id="w-require" name="w-require">
                            <option value="">전체</option>
                        </select>

                        <label for="s-input" class="blind">검색어 입력</label>
                        <input type="text" id="s-input" name="" value="">
                        <button type="button" class="bt">검색</button>    
                    </fieldset>
                </form>

                <p class="count float-left">게시글 수 <em>17</em></p>
            </div>
            <!-- /Search -->

            <ul class="list-gallery column-4">
                <li><a href="gallery.view.php"><span class="wrap-galleryImg"><img src="../../dist/images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
                <li><a href="gallery.view.php"><span class="wrap-galleryImg"><img src="../../dist/images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="gallery.view.php"><span class="wrap-galleryImg"><img src="../../dist/images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="gallery.view.php"><span class="wrap-galleryImg"><img src="../../dist/images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
            </ul>

            <!-- Pagination -->
            <div class="pagination">
                <button type="button" class="prev">이전</button>  
                <div>
                    <button type="button" class="current">1</button>
                    <button type="button">2</button>
                    <button type="button">3</button>
                    <button type="button">4</button>
                    <button type="button">5</button>
                    <button type="button">6</button>
                    <button type="button">7</button>
                    <button type="button">8</button>
                    <button type="button">9</button>
                    <button type="button">10</button>
                </div>
                <button type="button" class="next">다음</button>
            </div>
            <!-- /Pagination -->

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
