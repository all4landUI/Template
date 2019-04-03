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
            									<button role="button" class="bt">기관검색</button>
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
            								<input type="text" class="width-400"><button type="submit" class="bt margin-left-10">검색</button>
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

<?php
	include_once('../foot.php');
?>