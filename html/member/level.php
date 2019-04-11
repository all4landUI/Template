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
            <h1 class="title-sub-h1">권한 관리</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>회원 관리</li>
                <li>권한관리</li>
            </ol>
            <!-- /Location -->

            <!-- management wrap -->
            <div class="box-move row">
                <!-- 권한정보 -->
                <div class="col">
                    <h3>권한정보</h3>
                    <dl>
                        <dt class="blind"><label for="w-title">권한명</label></dt>
                        <dd><input type="text" id="w-title" name="w-title" class="full"></dd>
                        <dt><label for="w-content">권한설명</label></dt>
                        <dd><textarea id="w-content" name="" rows="16" cols="" class="full" readonly=""></textarea></dd>
                    </dl>
                </div>
                <!-- /권한정보 -->

                <!-- 지정메뉴 -->
                <div class="col">
                    <h3>지정메뉴<a href="" class="bt table check">전체선택</a></h3>
                    <h4>포털</h4>
                    <ul class="list-dot">
                        <li>
                            <a href="#" class="a-toggle">해양관측</a>
                            <div class="a-content" style="display: block;">
                                <ul class="list-hyphen">
                                     <li><a href="#">소개자료</a></li>
                                     <li><a href="#">관측자료</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /지정메뉴 -->

                <!-- 메뉴 리스트 -->
                <div class="float-right">
                    <h3>메뉴 리스트<a href="" class="bt table check">전체선택</a></h3>
                    <h4>포털</h4>
                    <ul class="list-dot">
                        <li>
                            <a href="#" class="a-toggle">해양관측</a>
                            <div class="a-content" style="display: block;">
                                <ul class="list-hyphen">
                                     <li class="current"><a href="#">소개자료</a></li>
                                     <li><a href="#">관측자료</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="a-toggle">해양생태</a>
                            <div class="a-content">
                                <ul class="list-hyphen">
                                     <li><a href="#">소개자료</a></li>
                                     <li><a href="#">관측자료</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="a-toggle">해양보존</a>
                            <div class="a-content">
                                <ul class="list-hyphen">
                                     <li><a href="#">소개자료</a></li>
                                     <li><a href="#">관측자료</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="a-toggle">해양관리</a>
                            <div class="a-content">
                                <ul class="list-hyphen">
                                     <li><a href="#">소개자료</a></li>
                                     <li><a href="#">관측자료</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /메뉴 리스트 -->
                <button type="button" class="move-add"><img src="../../dist/images/bt/bt_move_add.png" alt="추가"></button>
                <button type="button" class="move-delete"><img src="../../dist/images/bt/bt_move_delete.png" alt="제거"></button>
            </div>
            
            <div class="list-bottom text-right">
                <a href="mei05_01_01.html" class="bt bt-2">저장</a>
                <a href="mei05_01_01.html" class="bt bt-4">취소</a>
            </div>
            <!-- management wrap -->


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
