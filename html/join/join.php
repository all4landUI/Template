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
            <h1 class="title-sub-h1">회원가입</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>로그인</li>
                <li>회원가입</li>
            </ol>
            <!-- /Location -->

            <!-- join_wrap -->
            <div class="join_wrap">
                <div>
                    <ul class="join_procsee">
                        <li class="current">
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">01.</strong>
                            </div>
                            회원구분(본인인증)
                        </li>
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">02.</strong>                       
                            </div>
                            약관동의
                        </li>
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">03.</strong>
                            </div>
                            회원정보 입력
                        </li>     
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">04.</strong>
                            </div>
                            회원가입 완료
                        </li>
                    </ul>
                </div>

                <div id="join_kategorie">
                    <div class="person">
                        <h3>개인</h3>
                        <ul>
                            <li>   
                                <a href="join_certification.php"><i class="fas fa fa-users"></i><span>내국인</span></a>
                            </li>
                            <li>
                                <a href="join_certification.php"><i class="fas fa fa-globe"></i><span>외국인</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="corporate">
                        <h3>법인</h3>
                        <ul>
                            <li>   
                                <a href="join_certification.php"><i class="fas fa fa-users"></i><span>법인사업자(내국인)</span></a>
                            </li>
                            <li>
                                <a href="join_certification.php"><i class="fas fa fa-globe"></i><span>법인사업자(외국인)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> 
            <!-- join_wrap -->

        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>