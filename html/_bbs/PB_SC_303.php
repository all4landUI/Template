<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">	
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>게시판 관리</h2>
            <ul role="menu">
                <li><a href="PB_SC_281.php">공지사항</a></li>
                
                <li><a href="PB_SC_285.php">Q&amp;A</a></li>
                
                <li><a href="PB_SC_288.php">공지사항 알림</a></li>
                <li><a href="PB_SC_292.php">극지 동영상</a></li>
                <li><a href="PB_SC_296.php">극지사진 갤러리</a></li>
                <li><a href="PB_SC_300.php">극지지도 내려받기</a></li>
                <li class="current"><a href="PB_SC_301.php">GNSS 커뮤니티</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <!-- Content -->
        <section id="content" class="content">
            <h1 class="title-sub-h1">GNSS 커뮤니티</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>게시판관리</li>
                <li>GNSS 커뮤니티</li>
            </ol>
            <!-- /Location -->

            <!-- GNSS 커뮤니티 등록 -->
            <form action="">
                <fieldset>
                    <legend>GNSS 커뮤니티 등록</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">GNSS 커뮤니티 등록</caption>
                            <colgroup>
                                <col style="width:150px;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="w-title">제목</label></th>
                                    <td><input type="text" id="w-title" name="w-title" value="" style="width:550px;"></td>
                                </tr>
                                <tr>
                                    <th>작성자</th>
                                    <td>이근수</td>
                                </tr>
                                <tr>
                                    <th scope="row"><label for="w-content">내용</label></th>
                                    <td><textarea type="text" id="w-content" name="w-content" value="" rows="20" style="width:550px;"></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /GNSS 커뮤니티 등록 -->

            <div class="bt-area text-right">
                <button type="button" onclick="location.href='PB_SC_301.php'" class="bt reset">취소</button>
                <button type="button" class="bt submit">등록</button>
            </div>
        </section>
        <!-- /Contents -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>