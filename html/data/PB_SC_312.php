<?php
    include_once('../../head.php');
?>
	
	<!-- Container -->
	<article class="container">
    
        <!-- Sub Menu -->
        <section id="lnb" class="lnb">
            <h2>데이터 관리</h2>
            <ul role="menu">
                <li class="current"><a href="PB_SC_312.php">아라온 이동경로</a></li>
                <li><a href="PB_SC_317.php">측량기준점현황</a></li>
                <li><a href="PB_SC_322.php">주요기지설비</a></li>
            </ul>
        </section>
        <!-- /Sub Menu -->

        <section id="content" class="content">
            <h1 class="title-sub-h1">아라온 이동경로</h1>

            <!-- Location -->
            <ol class="location">
                <li><i class="fa fa-home"></i><span class="blind">홈</span></li>
                <li>데이터관리</li>
                <li>아리온 이동경로</li>
            </ol>

            <!-- 아리온 이동경로 조회 조건 선택 -->
            <form action="">
                <fieldset>
                    <legend>선택 배경지도 통계 조회 조건 선택</legend>
                    <div class="table-vertical type2">
                        <table>
                            <caption class="blind">아리온 이동경로 조회 조건</caption>
                            <colgroup>
                                <col style="width:15%;">
                                <col>
                                <col style="width:15%;">
                                <col>
                            </colgroup>
                            <tbody>
                                <tr>
                                    <th scope="row"><label for="s-date">도착예정일</label></th>
                                    <td>
                                        <div class="search-form">
                                            <span class="search-date"><input type="text" id="s-date" name="s-date" value="" class="datepicker" title="도착예정일 설정 시작일"></span>
                                            - 
                                            <span class="search-date"><input type="text" id="s-date2" name="s-date2" value="" class="datepicker" title="도착예정일 설정 종료일"></span>
                                        </div>
                                    </td>
                                    <th scope="row"><label for="s-id">소속경로ID</label></th>
                                    <td>
                                        <select id="s-id" name="s-id">
                                            <option value="">전체</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
            <!-- /아리온 이동경로 조회 조건 선택 -->

            <div class="text-right">
                <button type="button" class="bt dark-gray">조회</button>
            </div>

            <p class="count">총 <em>10</em>건의 글이 등록되었습니다.</p>

            <!-- 아리온 이동경로 조회 목록 -->
            <div class="table-horizontal hover">
                <table>
                    <caption class="blind">아라온 이동경로 조회 목록</caption>
                    <colgroup>
                        <col style="width:50px;" />
                        <col style="width:70px;" />
                        <col />
                        <col />
                        <col />
                        <col style="width:150px;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col"><label><input type="checkbox" title="전체선택"><span class="blind">전체선택</span></label></th>
                            <th scope="col">번호</th>
                            <th scope="col">소속경로ID</th>
                            <th scope="col">X좌표</th>
                            <th scope="col">Y좌표</th>
                            <th scope="col">위치도착예정일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>1</td>
                            <td class="subject"><a aria-edit-div="PB-SC-313" class="show-layer" title="아라온 이동경로 상세보기">2006.11-2016.11</a></td>
                            <td>126.372</td>
                            <td>37.449</td>
                            <td>2016.11.30</td>
                        </tr>
                        <tr>
                            <td><label><input type="checkbox"><span class="blind">선택</span></label></td>
                            <td>2</td>
                            <td class="subject"><a aria-edit-div="PB-SC-313" class="show-layer" title="아라온 이동경로 상세보기">2006.11-2016.11</a></td>
                            <td>126.372</td>
                            <td>37.449</td>
                            <td>2016.11.30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /아리온 이동경로 조회 목록 -->

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
                <button type="button" aria-edit-div="PB-SC-314" class="bt submit show-layer">개별추가</button>
                <button type="button" aria-edit-div="PB-SC-315" class="bt submit show-layer">일괄추가</button>
            </div>

        </section>
        <!-- /Contents -->
    
        <!-- 아라온 이동경로 상세보기 팝업 -->
        <section id="PB-SC-313" class="layer-popup">
            <h1 class="layer-header">아라온 이동경로 상세보기</h1>
            <div class="layer-contents">
                <div class="table-vertical">
                    <table>
                        <caption class="blind">아라온 이동경로 내용 상세</caption>
                        <colgroup>
                            <col style="width:150px;" />
                            <col />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">구분</th>
                                <th scope="col">상세내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">소속경로 ID</th>
                                <td>20110003</td>
                            </tr>
                            <tr>
                                <th scope="row">위치도착예정일</th>
                                <td>2016.11.03</td>
                            </tr>
                            <tr>
                                <th scope="row">X좌표</th>
                                <td>96.123454</td>
                            </tr>
                            <tr>
                                <th scope="row">Y좌표</th>
                                <td>12.123456</td>
                            </tr>
                        </tbody>	
                    </table>
                </div>
            </div>
            <div class="layer-footer">
                <button type="button" class="bt reset">삭제</button>	
                <button type="button" aria-edit-div="PB-SC-314" class="bt submit show-layer">수정</button>	
            </div>
            <button type="button" class="bt close">팝업닫기</button>
        </section>
        <!-- /아라온 이동경로 상세보기 팝업 -->


        <!-- 아라온 이동경로 추가 팝업 -->
        <section id="PB-SC-314" class="layer-popup">
            <h1 class="layer-header">아라온 이동경로 추가</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>아라온 이동경로 추가</legend>
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">아라온 이동경로 추가 내용 상세</caption>
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
                                        <th scope="row"><label for="w-upload">소속경로 ID</label></th>
                                        <td><input type="text" id="w-upload" name="w-upload" title="소속경로 ID" style="width:170px" /></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-date">위치도착예정일<br>(예:20100909)</label></th>
                                        <td><span class="search-date"><input type="text" id="w-date" name="w-date" value="" class="datepicker" title="위치도착예정일"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-position-x">X좌표</label></th>
                                        <td><input type="text" id="w-position-x" name="w-position-x" title="X좌표" style="width:170px" /></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="w-position-y">Y좌표</label></th>
                                        <td><input type="text" id="w-position-y" name="w-position-y" title="Y좌표" style="width:170px" /></td>
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
        <!-- /아라온 이동경로 추가 팝업 -->


        <!-- 아라온 이동경로 일괄추가 -->
        <section id="PB-SC-315" class="layer-popup">
            <h1 class="layer-header">아라온 이동경로 일괄추가</h1>
            <div class="layer-contents">
                <p class="table-top txt-bold txt-gray">
                    엑셀파일로 아라온 경로를 일괄 추가하세요.
                    <button type="button" class="bt down">엑셀 샘플파일 다운받기</button>
                </p>
                <form action="">
                    <fieldset>
                        <legend>아라온 이동경로 일괄추가</legend>				
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">아라온 이동경로 일괄추가 내용 상세</caption>
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
                                                <li>일시, 위치(X), 위치(Y)는 필수 입력 항목입니다.</li>
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
        <!-- /아라온 이동경로 일괄추가 -->


        <!-- 아라온 이동경로 수정 -->
        <section id="PB-SC-316" class="layer-popup">
            <h1 class="layer-header">아라온 이동경로 수정</h1>
            <div class="layer-contents">
                <form action="">
                    <fieldset>
                        <legend>아라온 이동경로 추가</legend>
                        <div class="table-vertical">
                            <table>
                                <caption class="blind">아라온 이동경로 추가 내용 상세</caption>
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
                                        <th scope="row"><label for="e-upload">소속경로 ID</label></th>
                                        <td><input type="text" id="e-upload" name="e-upload" title="소속경로 ID" style="width:170px" /></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-date">위치도착예정일<br>(예:20100909)</label></th>
                                        <td><span class="search-date"><input type="text" id="e-date" name="e-date" value="" class="datepicker" title="위치도착예정일"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-position-x">X좌표</label></th>
                                        <td><input type="text" id="e-position-x" name="e-position-x" title="X좌표" style="width:170px" /></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label for="e-position-y">Y좌표</label></th>
                                        <td><input type="text" id="e-position-y" name="e-position-y" title="Y좌표" style="width:170px" /></td>
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
        <!-- /아라온 이동경로 수정 -->

    </article>
	<!-- /Container -->

	<?php
    include_once('../../foot.php');
?>