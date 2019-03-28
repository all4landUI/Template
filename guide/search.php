<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" href="/plugin/prism/prism.css">
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">

	<nav class="g-navi">
		<ul>
			<li class="g-depth1 g-depth-view"><a href="#">UI PATTEN</a>
				<ul class="g-depth2">
					<li><a href="./board.php">기본게시판</a></li>
					<li><a href="./gallery_board.php">갤러리게시판</a></li>
					<li><a href="./tab.php">탭</a></li>
					<li><a href="./search.php">검색박스</a></li>
					<li><a href="./content.php">컨텐츠</a></li>
				</ul>
			</li>

			<li class="g-depth1 g-depth-view"><a href="#">컴포넌트</a>
				<ul class="g-depth2">
					<li><a href="./form.php">폼</a></li>
					<li><a href="./table.php">테이블</a></li>
					<li><a href="./button.php">버튼</a></li>
				</ul>
			</li>
		</ul>
	</nav>

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
		                        <button type="button" class="bt search">검색</button>	
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
		</div>
		<!--// g-content  -->
	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('../foot.php');
?>