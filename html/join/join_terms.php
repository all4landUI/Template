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
                        <li class="current">
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">01</strong>
                            </div>
                            회원구분
                        </li>
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">02</strong>                       
                            </div>
                            약관동의
                        </li>
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">03</strong>
                            </div>
                            회원정보 입력
                        </li>     
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">04</strong>
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
                <button type="submit" class="bt bt-2">확인</button>
                <button type="reset" class="bt bt-5">취소</button>
            </div>
            <!-- join wrap -->

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
