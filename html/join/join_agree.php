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

            <!-- join wrap -->
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
                <!-- <button type="submit" class="bt bt-2">동의</button> -->
                <a href="join_form.php" class="bt bt-2">동의</a>
                <button type="reset" class="bt bt-5">취소</button>

            </div>

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
