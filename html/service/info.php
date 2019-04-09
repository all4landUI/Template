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
            <h1 class="title-sub-h1">서비스 정보</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>서비스 관리</li>
                <li>서비스 정보</li>
            </ol>
            <!-- /Location -->

            <!-- list-DropDown -->
            <ul class="list-dopdown accordion">
                <li>
                    <h3 class="a-toggle current">해양환경관리법</h3>
                    <div class="a-content" style="display: block">
                        <ul class="list-dot">
                            <li><a href="#">해양환경관리법</a></li>
                            <li>
                                <a href="#">해양환경관리법 시행규칙</a>
                                <div class="depth2">
                                    <ul class="list-hyphen">
                                         <li><a href="#">국가해양환경정보통합관리에 관한 규정</a></li>
                                         <li><a href="#">해양환경측정망 구성·운영계획</a></li>
                                         <li><a href="#">해양환경관리법에 따른 정도관리 규정</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">해양환경관리법 시행령</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <h3 class="a-toggle">공유수면 관리 및 매립에 관한 법률</h3>
                    <div class="a-content">
                        <ul class="list-dot">
                            <li><a href="#">해양환경관리법</a></li>
                            <li><a href="#">해양환경관리법 시행령</a></li>
                            <li>
                                <a href="#">해양환경관리법 시행규칙</a>
                                <div class="depth2">
                                    <ul class="list-hyphen">
                                         <li><a href="#">국가해양환경정보통합관리에 관한 규정</a></li>
                                         <li><a href="#">해양환경측정망 구성·운영계획</a></li>
                                         <li><a href="#">해양환경관리법에 따른 정도관리 규정</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- /list-DropDown -->

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
