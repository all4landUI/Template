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
            <h1 class="title-sub-h1">공지사항</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>공지사항</li>
            </ol>
            <!-- /Location -->
            
            <!-- 공지사항 등록 -->
            <div class="table-vertical type2 margin-bottom-15">
                <form action="">
                    <table>
                        <caption class="blind">게시판 등록</caption>
                        <colgroup>
                            <col style="width:150px;">
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row"><label for="w-title">제목</label></th>
                                <td><input type="text" id="w-title" name="w-title" value="" placeholder="제목을 입력하세요" style="width:550px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-name">쿠키이름</label></th>
                                <td><input type="text" id="w-name" name="w-name" value="" placeholder="쿠키를 입력하세요" style="width:550px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-position-x">가로위치(x)</label></th>
                                <td><input type="text" id="w-position-x" name="w-position-x" value="" placeholder="위치값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-position-y">세로위치(y)</label></th>
                                <td><input type="text" id="w-position-y" name="w-position-y" value="" placeholder="위치값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-width">가로크기(w)</label></th>
                                <td><input type="text" id="w-width" name="w-width" value="" placeholder="크기값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-height">세로크기(h)</label></th>
                                <td><input type="text" id="w-upload" name="w-upload" value="" placeholder="크기값을 입력하세요(숫자만 가능)" style="width:200px;"></td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="w-date">시작,종료일자</label></th>
                                <td>
                                    <div class="search-form">
                                            <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
                                            - 
                                            <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>
                                        </div>
                                    </td>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="w-content">내용</label></th>
                                <td><textarea id="w-content" name="w-content" rows="20" style="width:550px;"></textarea></td>
                            </tr>
                            <tr>
                                <th><label for="w-upload">첨부파일</label></th>
                                <td>
                                    <ul class="list-bullet">
                                        <li>파일첨부시 팝업차단기능이 해제 되어야 합니다.</li>
                                        <li>파일은 최대 <em>1</em>개의 파일이 업로드 가능합니다. <em>(2MB)</em></li>
                                        <li>첨부파일은 jpg, jpeg, bmp, tif, gif, png로 된 이미지만 가능합니다.</li>
                                    </ul>
                                    <p class="upload-file"><input type="file" id="w-upload" name="w-upload" value="">
                                    <button type="button" class="bt">전체삭제</button></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>    
                </form>
            </div>

            <div class="bt-area">
                <a href="#" class="bt" onclick="history.back(-1)">등록</a>
                <a href="#" class="bt" onclick="history.back(-1)">취소</a>
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
</php>