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
            <h1 class="title-sub-h1">로그인</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>로그인</li>
                <li>로그인</li>
            </ol>
            <!-- /Location -->
            
            <!-- management wrap -->
            <nav class="tab-menu type-menu ea2">
                <button type="button" rel="tabLogin1" class="current">행정전자서명 로그인</button>
                <button type="button" rel="tabLogin2">일반 로그인</button>
            </nav>
            
            <div class="tab-content">
                <!-- 행정전자서명 로그인 -->
                <div id="tabLogin1" class="login_con" style="display: block;">
                    <div class="i-user-form">
                        <form action="" id="" name="">
                            <fieldset>
                            <legend>행정전자서명 로그인</legend>
                            <div>
                                <h3><img src="../../dist/images/ico/ico_login1.png" alt="아이콘"><em>행정전자서명</em>로그인</h3>
                                <p>행정전자서명 로그인이 안 될 경우,아이디/비밀번호 로그인 후<br>
                                    행정전자서명 관리에서 행정전자서명 초기화 및 등록을 진행해주십시오.</p>
                                <button type="button" title="새창열림" class="bt login full bt-2">행정전자서명 로그인</button>
                                <a href="#" onclick="alert('준비중입니다.')"><img src="../../dist/images/ico/ico_login2.png" alt="아이콘">회원가입  &gt;</a>
                                <a href="#" onclick="alert('준비중입니다.')"><img src="../../dist/images/ico/ico_login3.png" alt="아이콘">행정전자서명 다운로드  &gt;</a>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- /행정전자서명 로그인 -->
                
                <!-- 일반 로그인 -->
                <div id="tabLogin2" class="login_con">
                    <div class="i-user-form">
                        <form action="" id="" name="">
                            <fieldset>
                            <legend>일반 로그인</legend>
                            <div>
                                <h3><img src="../../dist/images/ico/ico_login1.png" alt="아이콘"><em>일반</em>로그인</h3>
                                <dl>
                                    <dt><label for="u-id"><span class="blind">아이디</span></label></dt>
                                    <dd><input type="text" id="u-id" name="u-id" value="" placeholder="아이디"></dd>
                                    <dt><label for="u-pw"><span class="blind">비밀번호</span></label></dt>
                                    <dd><input type="password" id="u-pw" name="u-pw" value="" placeholder="비밀번호"></dd>
                                </dl>
                                <button type="button" title="새창열림" class="bt login full bt-2">로그인</button>
                                <a href="#" onclick="alert('준비중입니다.')"><img src="../../dist/images/ico/ico_login2.png" alt="아이콘">아이디 찾기  &gt;</a>
                                <a href="#" onclick="alert('준비중입니다.')"><img src="../../dist/images/ico/ico_login3.png" alt="아이콘">비밀번호 찾기  &gt;</a>
                            </div>
                            </fieldset>
                        </form>
                    </div>
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
