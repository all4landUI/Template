<?php
    include_once('../head.php');
?>
    
    <style>
        .tit_article {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        .tit {
            display: block;
            margin: 10px 0 3px;
            font-weight: bold;
        }
        .list_terms .txt_clause {
            padding-left: 13px;
        }
        .list_terms .txt_num {
            float: left;
            width: 14px;
            text-indent: 1px;
        }
    </style>
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
                    <!-- <p class="margin-bottom-5"><span style="color:#ff0000">*</span>회원약관에 동의하셔야 회원가입이 가능합니다.</p> -->
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
                                <strong class="tit_article">제 1 장 총 칙</strong>
                                <span class="tit">제 1 조 목적</span>
                                <p>본 약관은 서비스 이용자가 주식회사 카카오(이하 “회사”라 합니다)가 제공하는 온라인상의 인터넷 서비스(이하 “서비스”라고 하며, 접속 가능한 유∙무선 단말기의 종류와는 상관없이 이용 가능한 “회사”가 제공하는 모든 “서비스”를 의미합니다. 이하 같습니다)에 회원으로 가입하고 이를 이용함에 있어 회사와 회원(본 약관에 동의하고 회원등록을 완료한 서비스 이용자를 말합니다. 이하 “회원”이라고 합니다)의 권리•의무 및 책임사항을 규정함을 목적으로 합니다.</p>
                                <span class="tit">제 2 조 (약관의 명시, 효력 및 개정)</span>
                                <ol class="list_terms">
                                    <li>
                                    <span class="txt_num">①</span>
                                    <p class="txt_clause">회사는 이 약관의 내용을 회원이 쉽게 알 수 있도록 서비스 초기 화면에 게시합니다.</p>
                                    </li>
                                    <li>
                                    <span class="txt_num">②</span>
                                    <p class="txt_clause">회사는 온라인 디지털콘텐츠산업 발전법, 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 소비자기본법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.</p>
                                    </li>
                                    <li>
                                    <span class="txt_num">③</span>
                                    <p class="txt_clause">회사가 약관을 개정할 경우에는 기존약관과 개정약관 및 개정약관의 적용일자와 개정사유를 명시하여 현행약관과 함께 그 적용일자 일십오(15)일 전부터 적용일 이후 상당한 기간 동안, 개정 내용이 회원에게 불리한 경우에는 그 적용일자 삼십(30)일 전부터 적용일 이후 상당한 기간 동안 각각 이를 서비스 홈페이지에 공지하고 기존 회원에게는 회사가 부여한 이메일 주소로 개정약관을 발송하여 고지합니다.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <p class="check_area">
                            <input type="checkbox" class="custorm" name="useStplatAgreYn" id="useStplatAgreYn" title="동의합니다." value="Y">
                            <label for="useStplatAgreYn"><span></span>위 이용약관에 동의합니다.</label>
                        </p>

                        <div class="agree_item">
                            <h3 class="agree_tit">개인정보 수집 및 이용 동의</h3>
                            <div class="mscroll-x mCustomScrollbar ">
                                <div class="agree_cont">
                                   <strong class="tit_article">제 1 장 총 칙</strong>
                                    <span class="tit">제 1 조 목적</span>
                                    <p>본 약관은 서비스 이용자가 주식회사 카카오(이하 “회사”라 합니다)가 제공하는 온라인상의 인터넷 서비스(이하 “서비스”라고 하며, 접속 가능한 유∙무선 단말기의 종류와는 상관없이 이용 가능한 “회사”가 제공하는 모든 “서비스”를 의미합니다. 이하 같습니다)에 회원으로 가입하고 이를 이용함에 있어 회사와 회원(본 약관에 동의하고 회원등록을 완료한 서비스 이용자를 말합니다. 이하 “회원”이라고 합니다)의 권리•의무 및 책임사항을 규정함을 목적으로 합니다.</p>
                                    <span class="tit">제 2 조 (약관의 명시, 효력 및 개정)</span>
                                    <ol class="list_terms">
                                        <li>
                                        <span class="txt_num">①</span>
                                        <p class="txt_clause">회사는 이 약관의 내용을 회원이 쉽게 알 수 있도록 서비스 초기 화면에 게시합니다.</p>
                                        </li>
                                        <li>
                                        <span class="txt_num">②</span>
                                        <p class="txt_clause">회사는 온라인 디지털콘텐츠산업 발전법, 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 소비자기본법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.</p>
                                        </li>
                                        <li>
                                        <span class="txt_num">③</span>
                                        <p class="txt_clause">회사가 약관을 개정할 경우에는 기존약관과 개정약관 및 개정약관의 적용일자와 개정사유를 명시하여 현행약관과 함께 그 적용일자 일십오(15)일 전부터 적용일 이후 상당한 기간 동안, 개정 내용이 회원에게 불리한 경우에는 그 적용일자 삼십(30)일 전부터 적용일 이후 상당한 기간 동안 각각 이를 서비스 홈페이지에 공지하고 기존 회원에게는 회사가 부여한 이메일 주소로 개정약관을 발송하여 고지합니다.</p>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <p class="check_area">
                            <input type="checkbox" class="custorm" name="indvdlInfoUseAgreYn" id="indvdlInfoUseAgreYn" title="동의합니다." value="Y">
                            <label for="indvdlInfoUseAgreYn"><span></span>위 개인정보 수집에 동의합니다.</label>
                        </p>
                    </form>
                </div>
            </div> 

    <!-- ///// 스크롤 작동-->
            <script>
                    (function($){
                        $(window).load(function(){
                            $(".mscroll-x").mCustomScrollbar();
                            $(".mscroll-x").mCustomScrollbar({
                                axis:"x",
                                advanced:{autoExpandHorizontalScroll:true}
                            });                            
                        });
                    })(jQuery);
            </script>
    <!-- ///// 스크롤 작동-->

            <div class="bt-area bt-right">
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
