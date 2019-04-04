<?php
    include_once('../head.php');
?>

	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>회원관리</h2>
            <ul role="menu">
                <li class=""><a href="">개인정보수정</a></li>
                <li class="current"><a href="#">권한관리</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->
            
        <section id="content" class="content">
            <h1 class="title-sub-h1">권한관리</h1>
            
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
                    <h3>지정메뉴<a href="" class="bt dark-gray table check">전체선택</a></h3>
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
                    <h3>메뉴 리스트<a href="" class="bt dark-gray table check">전체선택</a></h3>
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
                <button type="button" class="move-add"><img src="../../../images/bt/bt_move_add.png" alt="추가"></button>
                <button type="button" class="move-delete"><img src="../../../images/bt/bt_move_delete.png" alt="제거"></button>
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

<?php
    include_once('../../foot.php');
?>