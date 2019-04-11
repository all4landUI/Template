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
            <h1 class="title-sub-h1">개인정보수정</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>회원 관리</li>
                <li>개인정보수정</li>
            </ol>
            <!-- /Location -->

            <!-- join wrap -->

                <div id="join_form">
                    <div>
                        <!-- <h4>회원정보 필수입력</h4> -->
                        <p class="margin-bottom-5"><span style="color:#ff0000">*</span>표시는 필수 입력 사항입니다.</p>
                        <table class="table-vertical">
                            <colgroup>
                                <col style="width:25%">
                                <col style="width:75%">
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th><span class="red">*</span>이름</th>
                                    <td>올포랜드</td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>아이디</th>
                                    <td>all4land</td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호</th>
                                    <td>
                                        <input type="text">
                                        <div>
                                            <p>9~12자까지 모든 문자+숫자+특수문자 : 영문 대소문자는 구별하여 입력해 주세요)</p>
                                            <p>- 사용불가능한 특수문자 예 : <, >, _, ", '</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><span class="red">*</span>비밀번호확인</th>
                                    <td><input type="text"></td>
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
                                        <input type="text"><span> @ </span><input type="text">
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

                    </div>
                </div>
            </div> 

            <div class="bt-area bt-right">
                <button type="submit" class="bt bt-2">저장</button>
                <button type="reset" class="bt bt-4">취소</button>
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
