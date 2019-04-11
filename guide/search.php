<?php

	include_once('./guide.head.php');
?>
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
		                        <button type="button" class="bt search"></button>	
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
<pre><code class="language-html">&lt;!-- search-form //--&gt;
&lt;div class="search-form"&gt;
	&lt;form action="" class="float-right"&gt;
	    &lt;fieldset&gt;
	        &lt;legend&gt;리스트 검색&lt;/legend&gt;
	        &lt;label for="s-type" class="blind"&gt;서비스 구분&lt;/label&gt;
	        &lt;select id="s-type" name="w-type"&gt;
	            &lt;option value=""&gt;전체&lt;/option&gt;
	        &lt;/select&gt;

	        &lt;label for="s-require" class="blind"&gt;검색 조건 선택&lt;/label&gt;
	        &lt;select id="s-require" name="w-require"&gt;
	            &lt;option value=""&gt;전체&lt;/option&gt;
	        &lt;/select&gt;

	        &lt;label for="s-input" class="blind"&gt;검색어 입력&lt;/label&gt;
	        &lt;input type="text" id="s-input" name="s-input" value=""&gt;
	        &lt;button type="button" class="bt"&gt;검색&lt;/button&gt;	
	    &lt;/fieldset&gt;
	&lt;/form&gt;
	&lt;p class="count float-left"&gt;게시글 수 &lt;em&gt;17&lt;/em&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;!--// search-form --&gt;</code></pre>
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
					                                <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
		                                            - 
		                                            <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>
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
<pre><code class="language-html">&lt;form action=""&gt;
    &lt;fieldset&gt;
        &lt;legend&gt;선택 배경지도 통계 조회 조건 선택&lt;/legend&gt;
        &lt;div class="table-vertical type2"&gt;
            &lt;table&gt;
                &lt;caption class="blind"&gt;페이지뷰 현황 조회 조건&lt;/caption&gt;
                &lt;colgroup&gt;
                    &lt;col style="width:150px;"&gt;
                    &lt;col&gt;
                    &lt;col style="width:150px;"&gt;
                    &lt;col&gt;
                &lt;/colgroup&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row"&gt;&lt;label for="s-date"&gt;조회기간&lt;/label&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="search-form"&gt;
                                &lt;span class="search-date"&gt;&lt;input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"&gt;&lt;/span&gt;
                                - 
								&lt;span class="search-date"&gt;&lt;input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"&gt;&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;th scope="row"&gt;&lt;label for="s-type"&gt;서비스 구분&lt;/label&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;select id="s-type" name="s-type" title="서비스 구분 선택"&gt;
                                &lt;option value=""&gt;전체&lt;/option&gt;
                                &lt;option value=""&gt;국토정보플랫폼&lt;/option&gt;
                                &lt;option value=""&gt;극지공간정보&lt;/option&gt;
                                &lt;option value=""&gt;GNSS서비스&lt;/option&gt;
                                &lt;option value=""&gt;바로e맵&lt;/option&gt;
                                &lt;option value=""&gt;국토변화정보포털&lt;/option&gt;
                            &lt;/select&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;</code></pre>
					</div>
				</div>
				
				<div class="demo-control fa"></div>
			</div>

			<p>검색유형-2</p>
			<div class="demo-block">
				<div class="source">
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
		                                        <button class="bt">1개월</button>
		                                        <button class="bt">3개월</button>
		                                        <button class="bt">6개월</button>
		                                        <button class="bt">1년</button>
		                                        <button class="bt">2013년</button>
		                                        <button class="bt">2014년</button>
		                                        <button class="bt">2015년</button>
		                                        <button class="bt">2016년</button>
		                                    </div>
		                                    <span class="search-date"><input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"></span>
		                                    - 
		                                    <span class="search-date"><input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"></span>
		                                </div>
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
			        </div>
		        </div>
		        <div class="meta">
					<div class="description">
						검색의 위치에 상관없이 상/하에 사용 후 margin-position(string)-value(numer) 조정
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;div class="table-vertical type2"&gt;
    &lt;table&gt;
        &lt;caption class="blind"&gt;통계현황 조회 조건&lt;/caption&gt;
        &lt;colgroup&gt;
            &lt;col style="width:15%;"&gt;
            &lt;col&gt;
            &lt;col style="width:15%;"&gt;
            &lt;col&gt;
            &lt;col style="width:15%;"&gt;
            &lt;col&gt;
        &lt;/colgroup&gt;
        &lt;tbody&gt;
        	&lt;tr&gt;
                &lt;th scope="row"&gt;&lt;label for="s-type2"&gt;점의종류&lt;/label&gt;&lt;/th&gt;
                &lt;td colspan="2"&gt;
                    &lt;select id="s-type2" name="s-type2" title="점의종류 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
                &lt;th scope="row"&gt;&lt;label for="s-type4"&gt;소재지&lt;/label&gt;&lt;/th&gt;
                &lt;td colspan="2"&gt;
                    &lt;select id="s-type4" name="s-type4" title="소재지 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;label for="s-type"&gt;사용자 구분&lt;/label&gt;&lt;/th&gt;
                &lt;td colspan="5"&gt;
                    &lt;select id="s-type" name="s-type" title="사용자 구분 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                        &lt;option value=""&gt;사용자ID&lt;/option&gt;
                        &lt;option value=""&gt;사용자명&lt;/option&gt;
                    &lt;/select&gt;
                    &lt;label for="w-type" class="blind"&gt;사용자 구분&lt;/label&gt;
                    &lt;input type="text" id="w-type" name="w-type"&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;label for="s-map"&gt;지도 종류&lt;/label&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;select id="s-map" name="s-map" title="챠트 종류 선택"&gt;
                        &lt;option value=""&gt;국토영상정보&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
                &lt;th scope="row"&gt;&lt;label for="s-purpose"&gt;구매목적&lt;/label&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;select id="s-purpose" name="s-purpose" title="구매목적 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                        &lt;option value=""&gt;측량 및 지도제작&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
                &lt;th scope="row"&gt;&lt;label for="s-how"&gt;구매방법&lt;/label&gt;&lt;/th&gt;
                &lt;td&gt;
                    &lt;select id="s-how" name="s-how" title="구매방법 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                        &lt;option value=""&gt;온라인&lt;/option&gt;
                        &lt;option value=""&gt;방문&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;label for="s-agency"&gt;제공기관&lt;/label&gt;&lt;/th&gt;
                &lt;td colspan="5"&gt;
                    &lt;select id="s-agency" name="s-agency" title="제공기관 선택"&gt;
                        &lt;option value=""&gt;전체&lt;/option&gt;
                        &lt;option value=""&gt;수원시&lt;/option&gt;
                        &lt;option value=""&gt;인천광역시&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;&lt;label for="s-date"&gt;조회기간 설정&lt;/label&gt;&lt;/th&gt;
                &lt;td colspan="5"&gt;
                    &lt;div class="search-form"&gt;
                        &lt;div class="bt-area bt-left"&gt;
                            &lt;button class="bt"&gt;1개월&lt;/button&gt;
                            &lt;button class="bt"&gt;3개월&lt;/button&gt;
                            &lt;button class="bt"&gt;6개월&lt;/button&gt;
                            &lt;button class="bt"&gt;1년&lt;/button&gt;
                            &lt;button class="bt"&gt;2013년&lt;/button&gt;
                            &lt;button class="bt"&gt;2014년&lt;/button&gt;
                            &lt;button class="bt"&gt;2015년&lt;/button&gt;
                            &lt;button class="bt"&gt;2016년&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;span class="search-date"&gt;&lt;input type="text" id="s-date" name="" value="" class="datepicker" title="조회기간 설정 시작일"&gt;&lt;/span&gt;
                        - 
                        &lt;span class="search-date"&gt;&lt;input type="text" id="s-date2" name="" value="" class="datepicker" title="조회기간 설정 종료일"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
					</div>
				</div>
		        <div class="demo-control fa"></div>
            </div>
            <p>검색유형-3</p>
            <div class="demo-block">
            	<div class="source">
            		<form>
            			<div class="table-vertical">
            				<table>
            					<caption>검색</caption>
            					<colgroup>
            						<col style="width:150px">
            						<col>
            					</colgroup>
            					<tbody>
            						<tr>
            							<th>기관선택</th>
            							<td>
            								<div>
            									<button role="button" class="bt btn-pop-open" href="#popup_name">기관검색</button>
            									<span class="line-height-30 margin-left-10">
            										"기관찾기" 버튼 또는 "기관유형"을 선택 하시기 바랍니다.
            									</span>
            								</div>
            								<div class="input-group margin-top-10">
            									<label><input type="radio" name="s1" id="">정부기관</label>
            									<label><input type="radio" name="s1" id="">지방자치단체</label>
            									<label><input type="radio" name="s1" id="">교육청</label>
            									<label><input type="radio" name="s1" id="">공공기관</label>

            									<span>＊기관유형별 그룹 검색이 가능합니다.</span>
            								</div>
            							</td>
            						</tr>
            						<tr>
            							<th>검색어</th>
            							<td>            								
            								<input type="text" class="width-400"><button type="submit" class="bt margin-left-10 search"></button>
            								<p class="margin-top-10">＊출장, 휴가등 일반문서를 포함해서 검색하시려면 상세검색에서 "일반문서 포함" 항목을 체크하고 검색해주세요.</p>
            							</td>
            						</tr>
            						<tr>
            							<th>기간설정</th>
            							<td>
											<div>
												<a href="#" class="bt">일주일</a>
												<a href="#" class="bt">최근1개월</a>
												<a href="#" class="bt">최근3개월</a>
												<a href="#" class="bt">기간설정</a>
											</div>
											<p class="margin-top-10">
												<span>＊</span>아래는 최근 1개월간의 자료입니다. 더 보시려면 <span>기간설정</span>의 날짜를 조정하시기 바랍니다. <br>
												<span>＊</span>원활한 검색서비스를 위해 검색기간은 1년을 넘을 수 없습니다.
											</p>
            							</td>
            						</tr>
            					</tbody>
            				</table>
            			</div>
            		</form>
            	</div>
            	<div class="meta">
					<div class="description">
						다중 키워드 샘플
					</div>
	            	<div class="highlight">
<pre><code class="language-html">&lt;form&gt;
  &lt;div class="table-vertical"&gt;
  	&lt;table&gt;
  		&lt;caption&gt;검색&lt;/caption&gt;
  		&lt;colgroup&gt;
  			&lt;col style="width:150px"&gt;
  			&lt;col&gt;
  		&lt;/colgroup&gt;
  		&lt;tbody&gt;
  			&lt;tr&gt;
  				&lt;th&gt;기관선택&lt;/th&gt;
  				&lt;td&gt;
  					&lt;div&gt;
  						&lt;button role="button" class="bt"&gt;기관검색&lt;/button&gt;
  						&lt;span class="line-height-30 margin-left-10"&gt;
  							"기관찾기" 버튼 또는 "기관유형"을 선택 하시기 바랍니다.
  						&lt;/span&gt;
  					&lt;/div&gt;
  					&lt;div class="input-group margin-top-10"&gt;
  						&lt;label&gt;&lt;input type="radio" name="s1" id=""&gt;정부기관&lt;/label&gt;
  						&lt;label&gt;&lt;input type="radio" name="s1" id=""&gt;지방자치단체&lt;/label&gt;
  						&lt;label&gt;&lt;input type="radio" name="s1" id=""&gt;교육청&lt;/label&gt;
  						&lt;label&gt;&lt;input type="radio" name="s1" id=""&gt;공공기관&lt;/label&gt;

  						&lt;span&gt;＊기관유형별 그룹 검색이 가능합니다.&lt;/span&gt;
  					&lt;/div&gt;
  				&lt;/td&gt;
  			&lt;/tr&gt;
  			&lt;tr&gt;
  				&lt;th&gt;검색어&lt;/th&gt;
  				&lt;td&gt;            								
  					&lt;input type="text" class="width-400"&gt;&lt;button type="submit" class="bt margin-left-10"&gt;검색&lt;/button&gt;
  					&lt;p class="margin-top-10"&gt;＊출장, 휴가등 일반문서를 포함해서 검색하시려면 상세검색에서 "일반문서 포함" 항목을 체크하고 검색해주세요.&lt;/p&gt;
  				&lt;/td&gt;
  			&lt;/tr&gt;
  			&lt;tr&gt;
  				&lt;th&gt;기간설정&lt;/th&gt;
  				&lt;td&gt;
  						&lt;div&gt;
  							&lt;a href="#" class="bt"&gt;일주일&lt;/a&gt;
  							&lt;a href="#" class="bt"&gt;최근1개월&lt;/a&gt;
  							&lt;a href="#" class="bt"&gt;최근3개월&lt;/a&gt;
  							&lt;a href="#" class="bt"&gt;기간설정&lt;/a&gt;
  						&lt;/div&gt;
  						&lt;p class="margin-top-10"&gt;
  							&lt;span&gt;＊&lt;/span&gt;아래는 최근 1개월간의 자료입니다. 더 보시려면 &lt;span&gt;기간설정&lt;/span&gt;의 날짜를 조정하시기 바랍니다. &lt;br&gt;
  							&lt;span&gt;＊&lt;/span&gt;원활한 검색서비스를 위해 검색기간은 1년을 넘을 수 없습니다.
  						&lt;/p&gt;
  				&lt;/td&gt;
  			&lt;/tr&gt;
  		&lt;/tbody&gt;
  	&lt;/table&gt;
  &lt;/div&gt;
  &lt;/form&gt;</code></pre>
	  				</div>
            	</div>
            	<div class="demo-control fa"></div>
            </div>
            <!--  -->
		</div>
		<!--// g-content  -->
	</div>

</div>
<!--// #guidePage -->



<article class="layer-modal" id="popup_name">
	<div class="modal-container">
		<div class="modal-center">
			<div class="modal-content" style="width: 900px">
				<!-- .modal-header //-->
				<header class="modal-header">
					<h2>민원신청 도움말</h2>
				</header>
				<!--// .modal-header -->
				
				<!-- .modal-body //-->
				<div class="modal-body">
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont tab-column-2 margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li>
							<li><a href="#tab_example2">탭메뉴02</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							<p>
							모든 과정이 중요한 과정이지만 설계 과정은 정말 기획자에게 있어서 정말 중요한 과정입니다. 클라이언트가 원하는 방향, 분석을 통해 얻은 방향 등을 적절하게 조합하여 최상의 결과물을 만들어야하고 이 결과물을 디자이너, 개발자에게 전달했을 때 그들이 쉽게 이해하여 작업에 반영할 수 있도록 해야하기 때문입니다.<br><br>
 							</p>
 							<p>
							고객과 디자이너/개발자 사이의 다리 역할!
							그렇게 설계된 내용을 디자이너와 개발자에게 전달하면 디자이너와 개발자는 그에 맞게 작업을 진행하게 됩니다. 그 과정에서 기획자는 초기 디자인 컨셉, 홈페이지 기능, 클라이언트가 원하는 방향 등을 디자이너와 개발자에게 끊임없이 인식시켜주는 역할을 해야합니다. 그렇지 않으면 초기의 기획 방향과 다른 방향으로 흘러갈 수 있기 때문입니다.
							</p><br>
							<div class="table-vertical margin-bottom-15">
				                <h3 class="title-table">구글 크롬 설치파일</h3>
				                <table>
				                    <caption class="blind">공지사항 등록</caption>
				                    <colgroup>
				                        <col style="width:150px;">
				                        <col>
				                        <col style="width:150px;">
				                        <col>
				                    </colgroup>
				                    <tbody>
				                        <tr>
				                            <th scope="row">구분</th>
				                            <td colspan="3">국토정보플랫폼</td>
				                        </tr>
				                        <tr>
				                            <th scope="row">등록일자</th>
				                            <td>2016.07.30</td>
				                            <th scope="row">조회수</th>
				                            <td>1110</td>
				                        </tr>
				                        <tr>
				                            <th scope="row">담당자</th>
				                            <td>국토정보</td>
				                            <th scope="row">담당부서</th>
				                            <td>국토조사과</td>
				                        </tr>
				                        
				                    </tbody>
				                </table>
				            </div>
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							숨은 조력자<br>
							앞서 말씀드린대로 대부분의 사용자들은 홈페이지에 보이는 화려한 디자인에 먼저 관심을 보입니다. 그래서 그 과정속에 담겨져있는 기획자의 노력은 보이지 않을 수 있습니다. 하지만 본인이 기획한 홈페이지를 방문한 사용자들이 쉽고 편리하게 사용하여 방문객이 늘어나 클라이언트에게도 도움이 된다면, 이것이야말로 웹기획자의 노력의 결실을 맺는 순간 그리고 웹기획자에게는 가장 뿌듯하고 보람을 느낄 수 있는 순간이랍니다.
						</div>

					</div>
					<!--// tab-content  -->
				</div>
				<!--// .modal-body -->

				<!-- .modal-foot //-->
				<div class="modal-foot">
					<div class="bt-area">
						<a href="#popup_name" class="bt modal-close">확인</a>
						<a href="#popup_name" class="bt modal-close">취소</a>
					</div>
				</div>

				<!--// .popup-foot  -->
				<a href="#popup_name" class="btn-modal-close modal-close fa"></a>
			</div>
		</div>
	</div>
	<div class="modal-dimmed"></div>
</article>
<!-- .layer-modal -->


<?php
	include_once('./guide.foot.php');
?>