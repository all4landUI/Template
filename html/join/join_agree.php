<?php
    include_once('../../head.php');
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
        <pre>

        </pre>
        <section id="content" class="content">
            <h1 class="title-sub-h1">회원가입</h1>
            <div class="join_wrap">
                <div>
                    <ul class="join_procsee">
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">01.</strong>
                            </div>
                            회원구분(본인인증)
                        </li>
                        <li class="current">
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

                <div id="join_argee">
                    <div class="advice">
                        <p class="txt"><span class="red">*</span>회원약관에 동의하셔야 회원가입이 가능합니다.</p>
                    </div>
                    <form action="">
                        <div class="agree_item">
                            <h3 class="agree_tit">이용약관</h3>
                            <div class="agree_cont">
                                <strong>제 1장 총칙</strong>
                            </div>
                        </div>

                        <p class="check_area">
                            <input type="checkbox" class="custorm" name="useStplatAgreYn" id="useStplatAgreYn" title="동의합니다." value="Y">
                            <label for="useStplatAgreYn"><span></span>위 이용약관에 동의합니다.</label>
                        </p>

                        <div class="agree_item">
                            <h3 class="agree_tit">개인정보 수집 및 이용 동의</h3>
                            <div class="agree_cont">
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 2장 총칙</strong><br>
                                <strong>제 3장 총칙</strong><br>
                                <strong>제 4장 총칙</strong><br>
                                <strong>제 5장 총칙</strong><br>
                                <strong>제 6장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong><br>
                                <strong>제 1장 총칙</strong>
                            </div>
                        </div>

                        <p class="check_area">
                            <input type="checkbox" class="custorm" name="indvdlInfoUseAgreYn" id="indvdlInfoUseAgreYn" title="동의합니다." value="Y">
                            <label for="indvdlInfoUseAgreYn"><span></span>위 개인정보 수집에 동의합니다.</label>
                        </p>
                    </form>
                </div>
            </div> 

			<div class="bt-area">
                <button type="reset" class="bt reset">동의</button>
                <button type="submit" class="bt submit">취소</button>
            </div>

        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

<?php
    include_once('../../foot.php');
?>