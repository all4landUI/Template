<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>게시판 관리</h2>
            <ul role="menu">
                <li><a href="PB_SC_281.php">공지사항</a></li>
                
                <li><a href="PB_SC_285.php">Q&amp;A</a></li>
                
                <li><a href="PB_SC_288.php">공지사항 알림</a></li>
                <li><a href="PB_SC_292.php">극지 동영상</a></li>
                <li class="current"><a href="PB_SC_296.php">극지사진 갤러리</a></li>
                <li><a href="PB_SC_300.php">극지지도 내려받기</a></li>
                <li><a href="PB_SC_301.php">GNSS 커뮤니티</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Content -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">극지사진 갤러리</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>극지사진 갤러리</li>
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
                        <button type="button" class="bt search">검색</button>	
                    </fieldset>
                </form>

                <p class="count float-left">게시글 수 <em>17</em></p>
            </div>
            <!-- /Search -->

            <ul class="list-gallery column-3">
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> <!-- 이미지 사이즈 170*120 -->
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <li><a href="PB_SC_297.php"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li>
                <!-- <li><a href="#"><span class="wrap-galleryImg"><img src="../../images/thumb/sample.png" alt="이미지설명"></span><span>캠브리지베이</span></a></li> -->
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

            <div class="bt-area text-right">
                <button type="button" onclick="location.href='PB_SC_298.php'" class="bt submit">등록</button>
            </div>
        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>