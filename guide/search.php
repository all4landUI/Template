<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" href="/plugin/prism/prism.css">
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">검색박스</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본 검색</h3>
			<p>기본 게시판 검색</p>
			<div class="demo-block">
				<div class="source">
					<!-- search-form //-->
					<div class="search-form">
		                <form action="" class="float-right">
		                    <fieldset>
		                        <legend>리스트 검색</legend>
		                        <label for="s-type" class="blind">서비스 구분</label>
		                        <select id="s-type" name="w-type">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="s-require" class="blind">검색 조건 선택</label>
		                        <select id="s-require" name="w-require">
		                            <option value="">전체</option>
		                        </select>

		                        <label for="s-input" class="blind">검색어 입력</label>
		                        <input type="text" id="s-input" name="s-input" value="">
		                        <button type="button" class="bt">검색</button>	
		                    </fieldset>
		                </form>
		                <p class="count float-left">게시글 수 <em>17</em></p>
		            </div>
		            <!--// search-form -->
				</div>
				<div class="meta">
					<div class="description">
						검색의 위치에 상관없이 상/하에 사용 후 margin-position(string)-value(numer) 조정
					</div>
					<div class="highlight">
						
					</div>
				</div>
				
				<div class="demo-control fa"></div>
			</div>
			<p>게시판 테이블형 검색</p>
			<div class="demo-block">
				<div class="source">
					<form action="">
			            <fieldset>
			                <legend>선택 배경지도 통계 조회 조건 선택</legend>
			                <div class="table-vertical type2">
			                    <table>
			                        <caption class="blind">페이지뷰 현황 조회 조건</caption>
			                        <colgroup>
			                            <col style="width:150px;">
			                            <col>
			                            <col style="width:150px;">
			                            <col>
			                        </colgroup>
			                        <tbody>
			                            <tr>
			                                <th scope="row"><label for="s-date">조회기간</label></th>
			                                <td>
			                                    <div class="search-form">
			                                        <span class="search-date"><input type="text" id="s-date" name="s-date" value="" class="datepicker hasDatepicker" title="조회기간 설정 시작일"><button type="button" class="ui-datepicker-trigger fa fa-calendar"></button></span>
			                                        - 
			                                        <span class="search-date"><input type="text" id="s-date2" name="s-date2" value="" class="datepicker hasDatepicker" title="조회기간 설정 종료일"><button type="button" class="ui-datepicker-trigger fa fa-calendar"></button></span>
			                                    </div>
			                                </td>
			                                <th scope="row"><label for="s-type">서비스 구분</label></th>
			                                <td>
			                                    <select id="s-type" name="s-type" title="서비스 구분 선택">
			                                        <option value="">전체</option>
			                                        <option value="">국토정보플랫폼</option>
			                                        <option value="">극지공간정보</option>
			                                        <option value="">GNSS서비스</option>
			                                        <option value="">바로e맵</option>
			                                        <option value="">국토변화정보포털</option>
			                                    </select>
			                                </td>
			                            </tr>
			                        </tbody>
			                    </table>
			                </div>
			            </fieldset>
			        </form>
				</div>
				<div class="meta">
					<div class="description">
						검색의 위치에 상관없이 상/하에 사용 후 margin-position(string)-value(numer) 조정
					</div>
					<div class="highlight">
						
					</div>
				</div>
				
				<div class="demo-control fa"></div>
			</div>

			<p>검색유형-2</p>
			<div class="demo-block">
			<div class="table-vertical type2">
	                <table>
	                    <caption class="blind">통계현황 조회 조건</caption>
	                    <colgroup>
	                        <col style="width:15%;">
	                        <col>
	                        <col style="width:15%;">
	                        <col>
	                        <col style="width:15%;">
	                        <col>
	                    </colgroup>
	                    <tbody>
	                    	<tr>
	                            <th scope="row"><label for="s-type2">점의종류</label></th>
	                            <td colspan="2">
	                                <select id="s-type2" name="s-type2" title="점의종류 선택">
	                                    <option value="">전체</option>
	                                </select>
	                            </td>
	                            <th scope="row"><label for="s-type4">소재지</label></th>
	                            <td colspan="2">
	                                <select id="s-type4" name="s-type4" title="소재지 선택">
	                                    <option value="">전체</option>
	                                </select>
	                            </td>
	                        </tr>
	                        <tr>
	                            <th scope="row"><label for="s-type">사용자 구분</label></th>
	                            <td colspan="5">
	                                <select id="s-type" name="s-type" title="사용자 구분 선택">
	                                    <option value="">전체</option>
	                                    <option value="">사용자ID</option>
	                                    <option value="">사용자명</option>
	                                </select>
	                                <label for="w-type" class="blind">사용자 구분</label>
	                                <input type="text" id="w-type" name="w-type">
	                            </td>
	                        </tr>
	                        <tr>
	                            <th scope="row"><label for="s-map">지도 종류</label></th>
	                            <td>
	                                <select id="s-map" name="s-map" title="챠트 종류 선택">
	                                    <option value="">국토영상정보</option>
	                                </select>
	                            </td>
	                            <th scope="row"><label for="s-purpose">구매목적</label></th>
	                            <td>
	                                <select id="s-purpose" name="s-purpose" title="구매목적 선택">
	                                    <option value="">전체</option>
	                                    <option value="">측량 및 지도제작</option>
	                                </select>
	                            </td>
	                            <th scope="row"><label for="s-how">구매방법</label></th>
	                            <td>
	                                <select id="s-how" name="s-how" title="구매방법 선택">
	                                    <option value="">전체</option>
	                                    <option value="">온라인</option>
	                                    <option value="">방문</option>
	                                </select>
	                            </td>
	                        </tr>
	                        <tr>
	                            <th scope="row"><label for="s-agency">제공기관</label></th>
	                            <td colspan="5">
	                                <select id="s-agency" name="s-agency" title="제공기관 선택">
	                                    <option value="">전체</option>
	                                    <option value="">수원시</option>
	                                    <option value="">인천광역시</option>
	                                </select>
	                            </td>
	                        </tr>
	                        <tr>
	                            <th scope="row"><label for="s-date">조회기간 설정</label></th>
	                            <td colspan="5">
	                                <div class="search-form">
	                                    <div class="bt-area bt-left">
	                                        <button class="bt white bt table mr-5" style="width:70px;">1개월</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">3개월</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">6개월</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">1년</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">2013년</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">2014년</button>
	                                        <button class="bt white bt table mr-5" style="width:70px;">2015년</button>
	                                        <button class="bt white bt table">2016년</button>
	                                    </div>
	                                    <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker hasDatepicker" title="조회기간 설정 시작일"><button type="button" class="ui-datepicker-trigger fa fa-calendar"></button></span>
	                                    - 
	                                    <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker hasDatepicker" title="조회기간 설정 종료일"><button type="button" class="ui-datepicker-trigger fa fa-calendar"></button></span>
	                                </div>
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
            </div>
            <!--  -->
		</div>
		<!--// g-content  -->
	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('../foot.php');
?>