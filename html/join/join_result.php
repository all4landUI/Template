<?php
    include_once('../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>회원</h2>
            <ul role="menu">
                <li class="current"><a href="PB_SC_323.php">회원가입</a></li>
                <li class=""><a href="#">정보수정</a></li>
                <li class=""><a href="#">회원탈퇴</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <section id="content" class="content">
            <h1 class="title-sub-h1">회원가입</h1>
            <div class="join_wrap">
                <div>
                    <ul class="join_procsee">
                        <li class="current">
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">01.</strong>
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
                    <div>
                        <ul>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                </div>
            </div> 

			<div class="bt-area text-right">
                <button type="reset" class="bt reset">취소</button>
                <button type="submit" class="bt submit">저장</button>
            </div>

        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>