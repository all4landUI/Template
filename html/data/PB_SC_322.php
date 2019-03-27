<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>데이터 관리</h2>
            <ul role="menu">
                <li><a href="PB_SC_312.php">아라온 이동경로</a></li>
                <li><a href="PB_SC_317.php">측량기준점현황</a></li>
                <li class="current"><a href="PB_SC_322.php">주요기지설비</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <section id="content" class="content">
            <h1 class="title-sub-h1">주요기지설비 현황</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>데이터관리</li>
                <li>기지시설물현황</li>
            </ol>

            <!-- 바로e맵 오픈 API 상세보기 -->
            <div class="table-vertical type2">
                <table>
                    <caption class="blind">주요기지설비 현황 조회 조건</caption>
                    <colgroup>
                        <col style="width:130px;">
                        <col>
                        <col style="width:130px;">
                        <col>
                        <col style="width:130px;">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th scope="row"><label for="s-type">시설물 종류</label></th>
                            <td>
                                <select id="s-type" name="s-type">
                                    <option value="">전체</option>
                                </select>
                            </td>
                            <th scope="row"><label for="s-id">연구기지 ID</label></th>
                            <td><input type="text" id="s-id" name="s-id" value=""></td>
                            <th scope="row"><label for="s-num">해당도엽번호</label></th>
                            <td><input type="text" id="s-num" name="s-num" value=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bt-area text-right">
                <button type="button" class="bt dark-gray">조회</button>
            </div>

            <p class="count">총 <em>10</em>건의 글이 등록되었습니다.</p>

            <!-- 주요기지설비현황 목록 -->
            <div class="table-horizontal hover">
                <table>
                    <caption class="blind">주요기지설비현황 목록</caption>
                    <colgroup>
                        <col style="width:50px;" />
                        <col style="width:70px;" />
                        <col />
                        <col />
                        <col />
                        <col />
                        <col style="width:150px;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col"><label><input type="checkbox" title="전체선택"><span class="blind">전체선택</span></label></th>	
                            <th scope="col">시설물ID</th>
                            <th scope="col">시설물종류(대분류)</th>
                            <th scope="col">시설물종류(소분류)</th>
                            <th scope="col">연구기지ID</th>
                            <th scope="col">시설물명칭</th>
                            <th scope="col">해당도엽번호</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-323" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>주요지기설비</td>
                            <td>기타설비</td>
                            <td>51</td>
                            <td>시설물명칭</td>
                            <td>63003068</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /주요기지설비현황 목록 -->

            <!-- Pagination -->
            <div class="pagination">
                <button type="button" class="prev">이전</button>	
                <div>
                    <button type="button" class="current">1</button>
                    <button type="button">2</button>
                    <button type="button">3</button>
                    <button type="button">4</button>
                    <button type="button">5</button>
                    <button type="button">6</button>
                    <button type="button">7</button>
                    <button type="button">8</button>
                    <button type="button">9</button>
                    <button type="button">10</button>
                </div>
                <button type="button" class="next">다음</button>
            </div>
            <!-- /Pagination -->

            <div class="bt-area text-right">
                <button type="button" class="bt reset">선택삭제</button>
                <button type="button" aria-edit-div="PB-SC-324" class="bt submit show-layer">개별추가</button>
            </div>

        </section>
        <!-- /Contents -->
    
        <!-- 주요기지설비 상세보기 팝업 -->
        <section id="PB-SC-323" class="layer-popup">
            <h1 class="layer-header">주요기지설비 상세보기</h1>
            <div class="layer-contents">
                <div class="table-vertical">
                    <table>
                        <caption class="blind">주요기지설비 상세보기 내용</caption>
                        <colgroup>
                            <col style="width:180px;">
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="row">구분</th>
                                <th scope="row">상세내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">시설물 ID</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물종류(대분류)</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물종류(소분류)</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">연구기지 ID</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물명칭</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">해당도엽번호</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물상태</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">관리기관</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">설치일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">설치물가격</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물 상세설명</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시설물사진</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="layer-footer">
                <button type="button" class="bt reset">삭제</button>	
                <button type="button" aria-edit-div="PB-SC-325" class="bt submit show-layer">수정</button>
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /주요기지설비 상세보기 팝업 -->


        <!-- 주요기지설비 개별추가 팝업 -->
        <section id="PB-SC-324" class="layer-popup">
            <h1 class="layer-header">주요기지설비 개별추가</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>주요기지설비 개별추가</legend>	
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">주요기지설비 개별추가 내용</caption>
                                <colgroup>
                                    <col style="width:180px;">
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">구분</th>
                                        <th scope="col">정보입력</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><label for="w-t1" class="txt-red">시설물 ID</label></th>
                                        <td><input type="text" id="w-t1" name="w-t1" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">시설물종류(대분류)</th>
                                        <td>주요기지설비</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t2">시설물종류(소분류)</label></th>
                                        <td>
                                            <select id="w-t2" name="w-t2">
                                                <option value="">기상측정장비</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t3" class="txt-red">연구기지 ID</label></th>
                                        <td><input type="text" id="w-t3" name="w-t3" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t4" class="txt-red">시설물명칭</label></th>
                                        <td><input type="text" id="w-t4" name="w-t4" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t5" class="txt-red">해당도엽번호</label></th>
                                        <td><input type="text" id="w-t5" name="w-t5" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t6">시설물상태</label></th>
                                        <td>
                                            <select id="w-t6" name="w-t6">
                                                <option value="">이상무</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t7">관리기관</label></th>
                                        <td><input type="text" id="w-t7" name="w-t7" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t8">설치일</label></th>
                                        <td><input type="text" id="w-t8" name="w-t8" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t9">설치물가격</label></th>
                                        <td><input type="text" id="w-t9" name="w-t9" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t10">시설물 상세설명</label></th>
                                        <td><input type="text" id="w-t10" name="w-t10" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t11">시설물사진</label></th>
                                        <td><input type="file" id="w-t11" name="w-t11"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="layer-footer">
                <button type="button" class="bt submit">저장</button>
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /주요기지설비 개별추가 팝업 -->


        <!-- 주요기지설비 수정 팝업 -->
        <section id="PB-SC-325" class="layer-popup">
            <h1 class="layer-header">주요기지설비 수정</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>주요기지설비 수정</legend>	
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">주요기지설비 수정 내용</caption>
                                <colgroup>
                                    <col style="width:180px;">
                                    <col>
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">구분</th>
                                        <th scope="col">정보입력</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><label for="e-t1" class="txt-red">시설물 ID</label></th>
                                        <td><input type="text" id="e-t1" name="e-t1" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">시설물종류(대분류)</th>
                                        <td>주요기지설비</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t2">시설물종류(소분류)</label></th>
                                        <td>
                                            <select id="e-t2" name="e-t2">
                                                <option value="">기상측정장비</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t3" class="txt-red">연구기지 ID</label></th>
                                        <td><input type="text" id="e-t3" name="e-t3" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t4" class="txt-red">시설물명칭</label></th>
                                        <td><input type="text" id="e-t4" name="e-t4" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t5" class="txt-red">해당도엽번호</label></th>
                                        <td><input type="text" id="e-t5" name="e-t5" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t6">시설물상태</label></th>
                                        <td>
                                            <select id="e-t6" name="e-t6">
                                                <option value="">이상무</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t7">관리기관</label></th>
                                        <td><input type="text" id="e-t7" name="e-t7" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t8">설치일</label></th>
                                        <td><input type="text" id="e-t8" name="e-t8" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t9">설치물가격</label></th>
                                        <td><input type="text" id="e-t9" name="e-t9" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t10">시설물 상세설명</label></th>
                                        <td><input type="text" id="e-t10" name="e-t10" value=""></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t11">시설물사진</label></th>
                                        <td><input type="file" id="e-t11" name="e-t11"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="layer-footer">
                <button type="button" class="bt submit">저장</button>
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /주요기지설비 수정 팝업 -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>