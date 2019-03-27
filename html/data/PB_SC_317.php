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
                <li class="current"><a href="PB_SC_317.php">측량기준점현황</a></li>
                <li><a href="PB_SC_322.php">주요기지설비</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <section id="content" class="content">
            <h1 class="title-sub-h1">측량기준점현황</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>데이터관리</li>
                <li>측량기준점현황</li>
            </ol>

            <!-- 측량기준점현황 조회 조건 선택 -->
            <form action="">
                <fieldset>
                    <legend>선택 배경지도 통계 조회 조건 선택</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">측량기준점현황 조회 조건</caption>
                            <colgroup>
                                <col style="width:15%;">
                                <col>
                                <col style="width:15%;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-type">점의 종류</label></th>
                                    <td>
                                        <select id="s-type" name="s-type">
                                            <option value="">전체</option>
                                        </select>
                                    </td>
                                    <th scope="row"><label for="s-address">소재지</label></th>
                                    <td>
                                        <select id="s-address" name="s-address">
                                            <option value="">전체</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /측량기준점현황 조회 조건 선택 -->

            <div class="bt-area text-right">
                <button type="button" class="bt dark-gray">조회</button>
            </div>

            <p class="count">총 <em>10</em>건의 글이 등록되었습니다.</p>

            <!-- 측량기준점현황 조회 목록 -->
            <div class="table-horizontal hover">
                <table>
                    <caption class="blind">측량기준점현황 목록</caption>
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
                            <th scope="col">점의조서ID</th>
                            <th scope="col">점의종류</th>
                            <th scope="col">점번호</th>
                            <th scope="col">소재지</th>
                            <th scope="col">방위표성과 경도</th>
                            <th scope="col">방위표성과 위도</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr aria-edit-div="PB-SC-318" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>삼각점</td>
                            <td>11111</td>
                            <td>테라노바베이 지역</td>
                            <td>164.19928</td>
                            <td>-74.62603</td>
                        </tr>
                        <tr aria-edit-div="PB-SC-318" class="show-layer">
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>20110009</td>
                            <td>삼각점</td>
                            <td>11111</td>
                            <td>테라노바베이 지역</td>
                            <td>164.19928</td>
                            <td>-74.62603</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /측량기준점현황 조회 목록 -->

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
                <button type="button" aria-edit-div="PB-SC-319" class="bt submit show-layer">개별추가</button>
                <button type="button" aria-edit-div="PB-SC-320" class="bt submit show-layer">일괄추가</button>
            </div>

        </section>
        <!-- /Contents -->
    
    
        <!-- 측량기준점 상세보기 팝업 -->
        <section id="PB-SC-318" class="layer-popup">
            <h1 class="layer-header">측량기준점 상세보기</h1>
            <div class="layer-contents">
                <div class="table-vertical">
                    <table>
                        <caption class="blind">측량기준점 내용 상세</caption>
                        <colgroup>
                            <col style="width:150px;" />
                            <col>
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">구분</th>
                                <th scope="col">상세내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">점의조서 ID</th>
                                <td>20110003</td>
                            </tr>
                            <tr>
                                <th scope="row">점의종류</th>
                                <td>기타</td>
                            </tr>
                            <tr>
                                <th scope="row">점번호</th>
                                <td>KSJ2</td>
                            </tr>
                            <tr>
                                <th scope="row">해당도엽번호</th>
                                <td>63003088</td>
                            </tr>
                            <tr>
                                <th scope="row">점의상태</th>
                                <td>신설</td>
                            </tr>
                            <tr>
                                <th scope="row">사용가능여부</th>
                                <td>완료</td>
                            </tr>
                            <tr>
                                <th scope="row">소재지</th>
                                <td>남극 남쉐틀랜드 군도 킹조지 섬</td>
                            </tr>
                            <tr>
                                <th scope="row">소재영역 ID</th>
                                <td>1000063101072G001100000000001992</td>
                            </tr>
                            <tr>
                                <th scope="row">지목</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">연결수전점 시점</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">연결수준점 종점</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시준점 기계점</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">시전점 후시점</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 경도</th>
                                <td>-58.78429</td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 위도</th>
                                <td>-62.22313</td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 타원체고</th>
                                <td>34.585</td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 표고</th>
                                <td>14.585</td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 지오이드고</th>
                                <td>20.367</td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 중력값</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 UTM X</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">통합기준점성과 UTM Y</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 경도</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 위도</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 타원체고</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 표고</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 방위각</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 방향각</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 UTM X</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표성과 UTM Y</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">평명직각좌표계</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">선점일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">매설일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">관측일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">고시일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">선점자</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">매설자</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">관측자</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">마지막조사일</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">조사기관</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">기준점 경로</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">방위표 경로</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Reserved</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">점위치(주변상세)사진</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">점위치약도그림</th>
                                <td></td>
                            </tr>
                        </tbody>	
                    </table>
                </div>
            </div>
            <div class="layer-footer">
                <button type="button" class="bt reset">삭제</button>	
                <button type="button" aria-edit-div="PB-SC-321" class="bt submit show-layer">수정</button>	
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /측량기준점 상세보기 팝업 -->


        <!-- 측량기준점현황 추가 팝업 -->
        <section id="PB-SC-319" class="layer-popup">
            <h1 class="layer-header">측량기준점현황 추가</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>측량기준점 추가</legend>	
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">측량기준점 추가</caption>
                                <colgroup>
                                    <col style="width:150px;" />
                                    <col />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">구분</th>
                                        <th scope="col">정보입력</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><label for="w-t1" class="txt-red">점의조서 ID</label></th>
                                        <td><input type="text" id="w-t1" name="w-t1" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t2">점의종류</label></th>
                                        <td>
                                            <select title="점의종류 선택" id="w-t2" name="w-t2" style="width:170px">
                                                <option value="">삼각점</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t3" class="txt-red">점번호</label></th>
                                        <td><input type="text" id="w-t3" name="w-t3" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t4" class="txt-red">해당도엽번호</label></th>
                                        <td><input type="text" id="w-t4" name="w-t4" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t5">점의상태</label></th>
                                        <td>
                                            <select title="점의상태" id="w-t5" name="w-t5" style="width:170px">
                                                <option value="">신설</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t6">사용가능여부</label></th>
                                        <td>
                                            <select title="사용가능여부" id="w-t6" name="w-t6" style="width:170px">
                                                <option value="">완료</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t7">소재지</label></th>
                                        <td><input type="text" id="w-t7" name="w-t7" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t8">소재영역 ID</label></th>
                                        <td><input type="text" id="w-t8" name="w-t8" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t9">지목</label></th>
                                        <td><input type="text" id="w-t9" name="w-t9" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t10">연결수전점 시점</label></th>
                                        <td><input type="text" id="w-t10" name="w-t10" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t11">연결수준점 종점</label></th>
                                        <td><input type="text" id="w-t11" name="w-t11" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t12">시준점 기계점</label></th>
                                        <td><input type="text" id="w-t12" name="w-t12" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t13">시전점 후시점</label></th>
                                        <td><input type="text" id="w-t13" name="w-t13" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t14" class="txt-red">통합기준점성과 경도</label></th>
                                        <td><input type="text" id="w-t14" name="w-t14" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t15" class="txt-red">통합기준점성과 위도</label></th>
                                        <td><input type="text" id="w-t15" name="w-t15" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t16">통합기준점성과 타원체고</label></th>
                                        <td><input type="text" id="w-t16" name="w-t16" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t17" class="txt-red">통합기준점성과 표고</label></th>
                                        <td><input type="text" id="w-t17" name="w-t17" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t18">통합기준점성과 지오이드고</label></th>
                                        <td><input type="text" id="w-t18" name="w-t18" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t19">통합기준점성과 중력값</label></th>
                                        <td><input type="text" id="w-t19" name="w-t19" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t20">통합기준점성과 UTM X</label></th>
                                        <td><input type="text" id="w-t20" name="w-t20" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t21">통합기준점성과 UTM Y</label></th>
                                        <td><input type="text" id="w-t21" name="w-t21" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t22">방위표성과 경도</label></th>
                                        <td><input type="text" id="w-t22" name="w-t22" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t23">방위표성과 위도</label></th>
                                        <td><input type="text" id="w-t23" name="w-t23" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t24">방위표성과 타원체고</label></th>
                                        <td><input type="text" id="w-t24" name="w-t24" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t25">방위표성과 표고</label></th>
                                        <td><input type="text" id="w-t25" name="w-t25" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t26">방위표성과 방위각</label></th>
                                        <td><input type="text" id="w-t26" name="w-t26" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t27">방위표성과 방향각</label></th>
                                        <td><input type="text" id="w-t27" name="w-t27" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t28">방위표성과 UTM X</label></th>
                                        <td><input type="text" id="w-t28" name="w-t28" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t29">방위표성과 UTM Y</label></th>
                                        <td><input type="text" id="w-t29" name="w-t29" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t30">평명직각좌표계</label></th>
                                        <td><input type="text" id="w-t30" name="w-t30" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t31">선점일</label></th>
                                        <td><input type="text" id="w-t31" name="w-t31" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t32">매설일</label></th>
                                        <td><input type="text" id="w-t32" name="w-t32" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t33">관측일</label></th>
                                        <td><input type="text" id="w-t33" name="w-t33" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t34">고시일</label></th>
                                        <td><input type="text" id="w-t34" name="w-t34" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t35">선점자</label></th>
                                        <td><input type="text" id="w-t35" name="w-t35" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t36">매설자</label></th>
                                        <td><input type="text" id="w-t36" name="w-t36" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t37">관측자</label></th>
                                        <td><input type="text" id="w-t37" name="w-t37" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t38">마지막조사일</label></th>
                                        <td><input type="text" id="w-t38" name="w-t38" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t39">조사기관</label></th>
                                        <td><input type="text" id="w-t39" name="w-t39" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t40">기준점 경로</label></th>
                                        <td><input type="text" id="w-t40" name="w-t40" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t41">방위표 경로</label></th>
                                        <td><input type="text" id="w-t41" name="w-t41" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t42">Reserved</label></th>
                                        <td><input type="text" id="w-t42" name="w-t42" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t43">점위치(주변상세)사진</label></th>
                                        <td><input type="text" id="w-t43" name="w-t43" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-t44">점위치약도그림</label></th>
                                        <td><input type="text" id="w-t44" name="w-t44" style="width:170px"></td>
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
        <!-- /측량기준점현황 추가 팝업 -->


        <!-- 측량기준점현황 일괄추가 팝업 -->
        <section id="PB-SC-320" class="layer-popup">
            <h1 class="layer-header">측량기준점현황 일괄추가</h1>
            <div class="layer-contents">
                <p class="table-top txt-bold txt-gray">
                    엑셀파일로 아라온 경로를 일괄 추가하세요.
                    <button type="button" class="bt down">엑셀 샘플파일 다운받기</button>
                </p>
                <form action="">
                    <fieldset>
                        <legend>측량기준점 추가</legend>	
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">측량기준점현황 파일 추가</caption>
                                <colgroup>
                                    <col style="width:150px;" />
                                    <col />
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th scope="row"><label for="w-upload">파일 추가하기</label></th>
                                        <td><input type="file" id="w-upload" name="w-upload" class="full" /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <strong class="txt-notice">유의사항</strong>
                                            <ul class="list-bullet">
                                                <li>파일 데이터의 항목 순서가 맞아야 합니다.</li>
                                                <li>점의조서ID, 점의종류, 점번호, 해당도엽번호, 점의상태, 사용가능여부, 통합기준점성과 경도, 통합기준점성과 위도, 통합기준점성과 표고는 필수 입력 항목입니다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>	
                            </table>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="layer-footer">
                <button type="button" class="bt submit">추가하기</button>	
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /측량기준점현황 일괄추가 팝업 -->


        <!-- 측량기준점 수정 팝업 -->
        <section id="PB-SC-321" class="layer-popup">
            <h1 class="layer-header">측량기준점현황 수정</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>측량기준점 추가</legend>	
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">측량기준점 수정</caption>
                                <colgroup>
                                    <col style="width:150px;" />
                                    <col />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th scope="col">구분</th>
                                        <th scope="col">정보입력</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><label for="e-t1" class="txt-red">점의조서 ID</label></th>
                                        <td><input type="text" id="e-t1" name="e-t1" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t2">점의종류</label></th>
                                        <td>
                                            <select title="점의종류 선택" id="e-t2" name="e-t2" style="width:170px">
                                                <option value="">삼각점</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t3" class="txt-red">점번호</label></th>
                                        <td><input type="text" id="e-t3" name="e-t3" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t4" class="txt-red">해당도엽번호</label></th>
                                        <td><input type="text" id="e-t4" name="e-t4" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t5">점의상태</label></th>
                                        <td>
                                            <select title="점의상태" id="e-t5" name="e-t5" style="width:170px">
                                                <option value="">신설</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t6">사용가능여부</label></th>
                                        <td>
                                            <select title="사용가능여부" id="e-t6" name="e-t6" style="width:170px">
                                                <option value="">완료</option>
                                            </select>	
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t7">소재지</label></th>
                                        <td><input type="text" id="e-t7" name="e-t7" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t8">소재영역 ID</label></th>
                                        <td><input type="text" id="e-t8" name="e-t8" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t9">지목</label></th>
                                        <td><input type="text" id="e-t9" name="e-t9" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t10">연결수전점 시점</label></th>
                                        <td><input type="text" id="e-t10" name="e-t10" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t11">연결수준점 종점</label></th>
                                        <td><input type="text" id="e-t11" name="e-t11" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t12">시준점 기계점</label></th>
                                        <td><input type="text" id="e-t12" name="e-t12" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t13">시전점 후시점</label></th>
                                        <td><input type="text" id="e-t13" name="e-t13" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t14" class="txt-red">통합기준점성과 경도</label></th>
                                        <td><input type="text" id="e-t14" name="e-t14" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t15" class="txt-red">통합기준점성과 위도</label></th>
                                        <td><input type="text" id="e-t15" name="e-t15" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t16">통합기준점성과 타원체고</label></th>
                                        <td><input type="text" id="e-t16" name="e-t16" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t17" class="txt-red">통합기준점성과 표고</label></th>
                                        <td><input type="text" id="e-t17" name="e-t17" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t18">통합기준점성과 지오이드고</label></th>
                                        <td><input type="text" id="e-t18" name="e-t18" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t19">통합기준점성과 중력값</label></th>
                                        <td><input type="text" id="e-t19" name="e-t19" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t20">통합기준점성과 UTM X</label></th>
                                        <td><input type="text" id="e-t20" name="e-t20" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t21">통합기준점성과 UTM Y</label></th>
                                        <td><input type="text" id="e-t21" name="e-t21" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t22">방위표성과 경도</label></th>
                                        <td><input type="text" id="e-t22" name="e-t22" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t23">방위표성과 위도</label></th>
                                        <td><input type="text" id="e-t23" name="e-t23" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t24">방위표성과 타원체고</label></th>
                                        <td><input type="text" id="e-t24" name="e-t24" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t25">방위표성과 표고</label></th>
                                        <td><input type="text" id="e-t25" name="e-t25" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t26">방위표성과 방위각</label></th>
                                        <td><input type="text" id="e-t26" name="e-t26" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t27">방위표성과 방향각</label></th>
                                        <td><input type="text" id="e-t27" name="e-t27" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t28">방위표성과 UTM X</label></th>
                                        <td><input type="text" id="e-t28" name="e-t28" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t29">방위표성과 UTM Y</label></th>
                                        <td><input type="text" id="e-t29" name="e-t29" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t30">평명직각좌표계</label></th>
                                        <td><input type="text" id="e-t30" name="e-t30" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t31">선점일</label></th>
                                        <td><input type="text" id="e-t31" name="e-t31" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t32">매설일</label></th>
                                        <td><input type="text" id="e-t32" name="e-t32" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t33">관측일</label></th>
                                        <td><input type="text" id="e-t33" name="e-t33" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t34">고시일</label></th>
                                        <td><input type="text" id="e-t34" name="e-t34" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t35">선점자</label></th>
                                        <td><input type="text" id="e-t35" name="e-t35" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t36">매설자</label></th>
                                        <td><input type="text" id="e-t36" name="e-t36" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t37">관측자</label></th>
                                        <td><input type="text" id="e-t37" name="e-t37" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t38">마지막조사일</label></th>
                                        <td><input type="text" id="e-t38" name="e-t38" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t39">조사기관</label></th>
                                        <td><input type="text" id="e-t39" name="e-t39" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t40">기준점 경로</label></th>
                                        <td><input type="text" id="e-t40" name="e-t40" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t41">방위표 경로</label></th>
                                        <td><input type="text" id="e-t41" name="e-t41" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t42">Reserved</label></th>
                                        <td><input type="text" id="e-t42" name="e-t42" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t43">점위치(주변상세)사진</label></th>
                                        <td><input type="text" id="e-t43" name="e-t43" style="width:170px"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-t44">점위치약도그림</label></th>
                                        <td><input type="text" id="e-t44" name="e-t44" style="width:170px"></td>
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
        <!-- /측량기준점 수정 팝업 -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>
    
    
