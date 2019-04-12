<?php
    include_once('../head.php');
?>
    <script>
        function validate() {
            var re = /^[a-zA-Z0-9]{4,12}$/
            var re2 = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

            var id = document.getElementById("id");
            var pw = document.getElementById("pw");
            var email = document.getElementById("email");
            var num1 = document.getElementById("num1");
            var num2 = document.getElementById("num2");

            if(join.name.value=="") {
                alert("이름을 입력해 주세요");
                join.name.focus();
                return false;
            }

            if(!check(re,id,"아이디는 4~12자의 영문 대소문자와 숫자로만 입력")) {
                return false;
            }

            if(!check(re,pw,"패스워드는 4~12자의 영문 대소문자와 숫자로만 입력")) {
                return false;
            }

            if(join.pw.value != join.checkpw.value) {
                alert("비밀번호가 다릅니다. 다시 확인해 주세요.")
                join.check.value = "";
                join.checkpw.focus();
                return false;
            }

            if(email.value=="") {
                alert("이메일 입력을 해주세요");
                email.focus();
                return false;
            }

            if(!check(re2,email, "적합하지 않은 이메일 형식입니다.")) {
                return false;
            }

            

            alert("회원가입이 완료되었습니다.");
        }

        function check(re, what, message) {
            if(re.test(what.value)) {
                return true;
            }
            alert(message);
            what.value = "";
            what.focus();
        }
    </script>
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
                        <li>
                            <div>
                                <span class="num">Step</span>
                                <strong class="txt">02.</strong>                       
                            </div>
                            약관동의
                        </li>
                        <li class="current">
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

                <div id="join_form">
                    <!-- <h4>회원정보 필수입력</h4> -->
                    <p class="margin-bottom-5"><span style="color:#ff0000">*</span> 표시는 필수 입력 사항입니다.</p>
                    <form name="join" onsubmit="return validate();" action="join_form.php" method="post" enctype="text/plain">
                        <table class="table-vertical">
                            <colgroup>
                                <col style="width:25%">
                                <col style="width:75%">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><span class="red">*</span>이름</th>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>아이디</th>
                                    <td><input type="text" id="id" name="id"> <button type="button" class="bt">중복확인</button></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호</th>
                                    <td>
                                        <input type="password" id="pw" maxlength="12">
                                        <div>
                                            <p>9~12자까지 모든 문자+숫자+특수문자 : 영문 대소문자는 구별하여 입력해 주세요)</p>
                                            <p>- 사용불가능한 특수문자 예 : <, >, _, ", '</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호확인</th>
                                    <td><input type="password" id="checkpw" maxlength="12"></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>주소</th>
                                    <td><input type="text"> <button class="bt search"></button></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>상세주소</th>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>이메일 주소</th>
                                    <td>
                                        <input type="text" id="email"><span> @ </span><input type="text">
                                        <select name="" id="">
                                            <option value="">이메일 선택</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>휴대전화번호</th>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <th>직장연락처</th>
                                    <td><input type="text"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="bt-area bt-right">
                            <button type="submit"  value="저장" class="bt bt-2">저장</button>
                            <button type="reset" value="취소" class="bt bt-4">취소</button>
                        </div>
                    </form>
                </div>
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
