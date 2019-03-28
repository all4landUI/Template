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

        <section id="content" class="content">
            <h1 class="title-sub-h1">회원가입</h1>
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

                <div id="join_form">
                    <div>
                        <h4>회원정보 필수입력</h4>
                        <p><span>*</span>표시는 필수 입력 사항입니다.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <th><span class="red">*</span>이름</th>
                                    <td>올포랜</td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>아이디</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호확인</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>비밀번호 힌트</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>비밀번호 힌트답변</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>주소</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>상세주소</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>이메일 주소</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>휴대전화번호</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span></th>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

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