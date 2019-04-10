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
		<h2 class="g-title">테이블</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본형 - 가로형</h3>
			<p>가장 기본형식으로써, 각 테이블간의 간격은 설정해야함</p>
			<div class="demo-block">
				<div class="source">
					<!-- table-horizontal //-->
					<div class="table-horizontal">
		                <table>
		                    <colgroup>
		                        <col style="width: 110px;">
		                        <col>
		                        <col style="width: 80px;">
		                        <col style="width: 80px;">
		                        <col style="width: 190px;">
		                        <col style="width: 190px;">
		                    </colgroup>
		                    <caption class="blind">표 정보 가로형</caption>
		                    <thead>
		                        <tr>
		                            <th scope="col" rowspan="2">중점<br>추진과제</th>
		                            <th scope="col" rowspan="2">세부 추진과제</th>
		                            <th scope="col" rowspan="2">목표<br>(착수)</th>
		                            <th scope="col" rowspan="2">예산<br>(억원)</th>
		                            <th scope="col" colspan="2">추진주체</th>
		                        </tr>
		                        <tr>
		                            <th scope="col">주관</th>
		                            <th scope="col">협조</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <th scope="row">합계</th>
		                            <td>&nbsp;</td>
		                            <td>&nbsp;</td>
		                            <td>1,071</td>
		                            <td>&nbsp;</td>
		                            <td>&nbsp;</td>
		                        </tr>
		                        <tr>
		                            <th scope="row" rowspan="9">1) 육상기인<br>오염원관리</th>
		                            <td>1-1. 하수관로 및 환경기초시설 확충</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">857.4</td>
		                            <td>강진군·완도군·해남군·<br>장흥군(상하수도사업소)</td>
		                            <td>환경부(생활하수과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-1) 강진군 공공하수시설 설치</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">266</td>
		                            <td>강진군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-2) 완도군 소규모 공공하수시설 설치</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">530</td>
		                            <td>완도군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-3) 해남군 소규모 공공하수시설 설치</td>
		                            <td class="text-center">2015</td>
		                            <td class="text-center">14.4</td>
		                            <td>해남군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-4) 장흥군 공공하수시설 설치</td>
		                            <td class="text-center">2015</td>
		                            <td class="text-center">47</td>
		                            <td>장흥군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>1-2. 해양환경을 고려한 방조제 관리</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">93.5</td>
		                            <td>농림축산식품부<br>(농업기반과),<br>강진군<br>(해양산림과, 안전건설과),<br>완도군(해양수산과)</td>
		                            <td>해양수산부<br>(해양환경정책과,<br>양식산업과),<br>국립수산과학원(어장환경과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-2-1) 사내방조제 담수호 최적 관리방안 마련</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">5</td>
		                            <td>강진군(해양산림과,<br>안전건설과),<br>완도군(해양수산과)</td>
		                            <td>농림축산식품부<br>(농업기반과),<br>해양수산부(해양환경정책과,<br>양식산업과),<br>국립수산과학원(어장환경과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-2-2) 노후 방조제 시설 개․보수</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">88.5</td>
		                            <td>농림축산식품부(농업기반과)</td>
		                            <td>강진군(안전건설과)</td>
		                        </tr>
		                        <tr>
		                            <td>1-3. 육상양식장 배출수 수질관리 강화 및 정기점검</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">0.8</td>
		                            <td>전라남도(환경관리과)</td>
		                            <td>완도군(환경녹지과)</td>
		                        </tr>
		                        <tr>
		                            <th scope="row" rowspan="4">2) 해양환경 개선</th>
		                            <td>2-1. 해양환경 오염원인 규명 및 해양환경 개선</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">8</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과)<br>완도군(해양수산과)</td>
		                        </tr>
		                        <tr>
		                            <td>(2-1-1) 도암만 하계 수질 정밀지단 및 개선계획<br><span></span>수립</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">5</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과)</td>
		                        </tr>
		                        <tr>
		                            <td>(2-1-2) 퇴적물 오염원조사 및 저감방안 마련</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">3</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과),<br>완도군(해양수산과)</td>
		                        </tr>
		                        <tr>
		                            <td>2-2. 퇴적물 환경개선을 위한 정화․복원</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">15</td>
		                            <td>해양수산부(해양보전과,<br>양식산업과)</td>
		                            <td>강진군(해양산림과),<br>완도군, 해남군,<br>장흥군 (해양수산과)</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <!--// table-horizontal -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="table-horizontal"</code>를 기본으로 사용함.
					</div>
					<div class="highlight">
<pre><code class="language-html">	
&lt;!-- Table wrap --&gt;
    &lt;div class="table-horizontal"&gt;
        &lt;table&gt;
            &lt;colgroup&gt;
                &lt;col style="width: 110px;"&gt;
                &lt;col&gt;
                &lt;col style="width: 80px;"&gt;
                &lt;col style="width: 80px;"&gt;
                &lt;col style="width: 190px;"&gt;
                &lt;col style="width: 190px;"&gt;
            &lt;/colgroup&gt;
            &lt;caption class="blind"&gt;표 정보&lt;/caption&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th scope="col" rowspan="2"&gt;중점&lt;br&gt;추진과제&lt;/th&gt;
                    &lt;th scope="col" rowspan="2"&gt;세부 추진과제&lt;/th&gt;
                    &lt;th scope="col" rowspan="2"&gt;목표&lt;br&gt;(착수)&lt;/th&gt;
                    &lt;th scope="col" rowspan="2"&gt;예산&lt;br&gt;(억원)&lt;/th&gt;
                    &lt;th scope="col" colspan="2"&gt;추진주체&lt;/th&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="col"&gt;주관&lt;/th&gt;
                    &lt;th scope="col"&gt;협조&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;tr&gt;
                    &lt;th scope="row"&gt;합계&lt;/th&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td&gt;1,071&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="row" rowspan="9"&gt;1) 육상기인&lt;br&gt;오염원관리&lt;/th&gt;
                    &lt;td&gt;1-1. 하수관로 및 환경기초시설 확충&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;857.4&lt;/td&gt;
                    &lt;td&gt;강진군·완도군·해남군·&lt;br&gt;장흥군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;환경부(생활하수과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-1) 강진군 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;266&lt;/td&gt;
                    &lt;td&gt;강진군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-2) 완도군 소규모 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;530&lt;/td&gt;
                    &lt;td&gt;완도군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-3) 해남군 소규모 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;2015&lt;/td&gt;
                    &lt;td class="text-center"&gt;14.4&lt;/td&gt;
                    &lt;td&gt;해남군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-4) 장흥군 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;2015&lt;/td&gt;
                    &lt;td class="text-center"&gt;47&lt;/td&gt;
                    &lt;td&gt;장흥군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;1-2. 해양환경을 고려한 방조제 관리&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;93.5&lt;/td&gt;
                    &lt;td&gt;농림축산식품부&lt;br&gt;(농업기반과),&lt;br&gt;강진군&lt;br&gt;(해양산림과, 안전건설과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                    &lt;td&gt;해양수산부&lt;br&gt;(해양환경정책과,&lt;br&gt;양식산업과),&lt;br&gt;국립수산과학원(어장환경과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-2-1) 사내방조제 담수호 최적 관리방안 마련&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과,&lt;br&gt;안전건설과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                    &lt;td&gt;농림축산식품부&lt;br&gt;(농업기반과),&lt;br&gt;해양수산부(해양환경정책과,&lt;br&gt;양식산업과),&lt;br&gt;국립수산과학원(어장환경과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-2-2) 노후 방조제 시설 개․보수&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;88.5&lt;/td&gt;
                    &lt;td&gt;농림축산식품부(농업기반과)&lt;/td&gt;
                    &lt;td&gt;강진군(안전건설과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;1-3. 육상양식장 배출수 수질관리 강화 및 정기점검&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;0.8&lt;/td&gt;
                    &lt;td&gt;전라남도(환경관리과)&lt;/td&gt;
                    &lt;td&gt;완도군(환경녹지과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="row" rowspan="7"&gt;2) 해양환경 개선&lt;/th&gt;
                    &lt;td&gt;2-1. 해양환경 오염원인 규명 및 해양환경 개선&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;8&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과)&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-1-1) 도암만 하계 수질 정밀지단 및 개선계획&lt;br&gt;&lt;span&gt;&lt;/span&gt;수립&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-1-2) 퇴적물 오염원조사 및 저감방안 마련&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;3&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;2-2. 퇴적물 환경개선을 위한 정화․복원&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;15&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양보전과,&lt;br&gt;양식산업과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군,&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-2-1) 오염 우심해역 퇴적물 복원사업&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2018)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양보전과)&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-2-2) 어장 퇴적물 정화사업&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;10&lt;/td&gt;
                    &lt;td&gt;해양수산부(양식산업과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군,&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;2-3. 해양쓰레기 수거․처리&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;20.1&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양보전과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;해남군,&lt;br&gt;장흥군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan="5"&gt;3) 해양 생태계&lt;br&gt;보호 및 &lt;br&gt;서식지 관리&lt;/th&gt;
                    &lt;td&gt;3-1. 강진군 연안 바다목장 사업&lt;/td&gt;
                    &lt;td class="text-center"&gt;2015&lt;/td&gt;
                    &lt;td class="text-center"&gt;50&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과)&lt;/td&gt;
                    &lt;td&gt;수산자원관리공단&lt;br&gt;(남해지사 자원조성실)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;3-2. 생태계 기반 어장 관리&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;3&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과),&lt;br&gt;해양수산부(양식산업과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군,&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;3-3. 환경 친화적 양식어구 및 부산물 관리&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;10&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과),&lt;br&gt;해양수산부(양식산업과)&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(3-3-1) 양식 해조류 부산물 재활용&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(3-3-2) 개량부자 공급&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;해양수산부(양식산업과)&lt;/td&gt;
                    &lt;td&gt;완도군(해양수산과&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th rowspan="7"&gt;4) 해양환경&lt;br&gt;관리 역량 강화&lt;/th&gt;
                    &lt;td&gt;4-1. 완도․도암만 환경보전해역 관리기반 구축&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2015)&lt;/td&gt;
                    &lt;td class="text-center"&gt;3&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;목포지방해양항만청&lt;br&gt;(해양환경과),&lt;br&gt;국립수산과학원&lt;br&gt;(남서해수산연구소),&lt;br&gt;전라남도(해양항만과),&lt;br&gt;강진군(해양산림과), 완도군,&lt;br&gt;해남군, 장흥군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;4-2. 완도․도암만 과학적 진단체계 개선&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;4.3&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과,&lt;br&gt;해양생태과),&lt;br&gt;농림축산식품부(농업기반과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(4-2-1) 연안습지 및 해양생태계 통합조사&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;2&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양생태과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(4-2-2) 보호종 서식실태 시범조사&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;2&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양생태과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(4-2-3) 해양환경 모니터체제 강화&lt;/td&gt;
                    &lt;td class="text-center"&gt;2014&lt;/td&gt;
                    &lt;td class="text-center"&gt;-&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(4-2-4) 담수호 수질 모니터링 실시&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;0.3&lt;/td&gt;
                    &lt;td&gt;농림축산식품부(농업기반과)&lt;/td&gt;
                    &lt;td&gt;-&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;4-3. 환경관리해역 관리역량 강화 및 홍보&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;6&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;목포지방해양항만청&lt;br&gt;(해양환경과)&lt;br&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;
&lt;!-- Table wrap --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>기본형 - 세로형</h3>
			<p>가장 기본형식으로써, 각 테이블간의 간격은 설정해야함</p>
			<div class="demo-block">
				<div class="source">
					<!-- table-vertical //-->
					<div class="table-vertical">
		                <table>
		                    <colgroup>
		                        <col style="width: 110px;">
		                        <col>
		                        <col style="width: 80px;">
		                        <col style="width: 80px;">
		                        <col style="width: 190px;">
		                        <col style="width: 190px;">
		                    </colgroup>
		                    <caption class="blind">표 정보 세로형</caption>
		                    <tbody>
		                    	<tr>
		                            <th scope="col" rowspan="2">중점<br>추진과제</th>
		                            <td scope="col" rowspan="2">세부 추진과제</td>
		                            <td scope="col" rowspan="2" class="text-center">목표<br>(착수)</td>
		                            <td scope="col" rowspan="2" class="text-center">예산<br>(억원)</td>
		                            <td scope="col" colspan="2" class="text-center">추진주체</td>
		                        </tr>
		                        <tr>
		                            <td scope="col" class="text-center">주관</td>
		                            <td scope="col" class="text-center">협조</td>
		                        </tr>
		                        <tr>
		                            <th scope="row">합계</th>
		                            <td>&nbsp;</td>
		                            <td>&nbsp;</td>
		                            <td class="text-center">1,071</td>
		                            <td>&nbsp;</td>
		                            <td>&nbsp;</td>
		                        </tr>
		                        <tr>
		                            <th scope="row" rowspan="9">1) 육상기인<br>오염원관리</th>
		                            <td>1-1. 하수관로 및 환경기초시설 확충</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">857.4</td>
		                            <td>강진군·완도군·해남군·<br>장흥군(상하수도사업소)</td>
		                            <td>환경부(생활하수과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-1) 강진군 공공하수시설 설치</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">266</td>
		                            <td>강진군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-2) 완도군 소규모 공공하수시설 설치</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">530</td>
		                            <td>완도군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-3) 해남군 소규모 공공하수시설 설치</td>
		                            <td class="text-center">2015</td>
		                            <td class="text-center">14.4</td>
		                            <td>해남군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>(1-1-4) 장흥군 공공하수시설 설치</td>
		                            <td class="text-center">2015</td>
		                            <td class="text-center">47</td>
		                            <td>장흥군(상하수도사업소)</td>
		                            <td>〃</td>
		                        </tr>
		                        <tr>
		                            <td>1-2. 해양환경을 고려한 방조제 관리</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">93.5</td>
		                            <td>농림축산식품부<br>(농업기반과),<br>강진군<br>(해양산림과, 안전건설과),<br>완도군(해양수산과)</td>
		                            <td>해양수산부<br>(해양환경정책과,<br>양식산업과),<br>국립수산과학원(어장환경과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-2-1) 사내방조제 담수호 최적 관리방안 마련</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">5</td>
		                            <td>강진군(해양산림과,<br>안전건설과),<br>완도군(해양수산과)</td>
		                            <td>농림축산식품부<br>(농업기반과),<br>해양수산부(해양환경정책과,<br>양식산업과),<br>국립수산과학원(어장환경과)</td>
		                        </tr>
		                        <tr>
		                            <td>(1-2-2) 노후 방조제 시설 개․보수</td>
		                            <td class="text-center">(2014)</td>
		                            <td class="text-center">88.5</td>
		                            <td>농림축산식품부(농업기반과)</td>
		                            <td>강진군(안전건설과)</td>
		                        </tr>
		                        <tr>
		                            <td>1-3. 육상양식장 배출수 수질관리 강화 및 정기점검</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">0.8</td>
		                            <td>전라남도(환경관리과)</td>
		                            <td>완도군(환경녹지과)</td>
		                        </tr>
		                        <tr>
		                            <th scope="row" rowspan="4">2) 해양환경 개선</th>
		                            <td>2-1. 해양환경 오염원인 규명 및 해양환경 개선</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">8</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과)<br>완도군(해양수산과)</td>
		                        </tr>
		                        <tr>
		                            <td>(2-1-1) 도암만 하계 수질 정밀지단 및 개선계획<br><span></span>수립</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">5</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과)</td>
		                        </tr>
		                        <tr>
		                            <td>(2-1-2) 퇴적물 오염원조사 및 저감방안 마련</td>
		                            <td class="text-center">(2016)</td>
		                            <td class="text-center">3</td>
		                            <td>해양수산부(해양환경정책과)</td>
		                            <td>강진군(해양산림과),<br>완도군(해양수산과)</td>
		                        </tr>
		                        <tr>
		                            <td>2-2. 퇴적물 환경개선을 위한 정화․복원</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">15</td> 
		                            <td>해양수산부(해양보전과,<br>양식산업과)</td> 
		                            <td>강진군(해양산림과),<br>완도군, 해남군,<br>장흥군 (해양수산과)</td>
		                        </tr>
		                        <tr>
		                        	<th>해양수산부(해양보전과</th>
		                            <td>2-2. 퇴적물 환경개선을 위한 정화․복원</td>
		                            <td class="text-center">&nbsp;</td>
		                            <td class="text-center">15</td>
		                            <td>해양수산부(해양보전과,<br>양식산업과)</td>
		                            <td>강진군(해양산림과),<br>완도군, 해남군,<br>장흥군 (해양수산과)</td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		            <!--// table-vertical -->
				</div>
				<div class="meta">
					<div class="description">
						<code>class="table-vertical"</code>를 기본으로 사용함.
					</div>
					<div class="highlight">
<pre><code class="language-html">
&lt;!-- table-vertical //--&gt;
	&lt;div class="table-vertical"&gt;
        &lt;table&gt;
            &lt;colgroup&gt;
                &lt;col style="width: 110px;"&gt;
                &lt;col&gt;
                &lt;col style="width: 80px;"&gt;
                &lt;col style="width: 80px;"&gt;
                &lt;col style="width: 190px;"&gt;
                &lt;col style="width: 190px;"&gt;
            &lt;/colgroup&gt;
            &lt;caption class="blind"&gt;표 정보 세로형&lt;/caption&gt;
            &lt;tbody&gt;
            	&lt;tr&gt;
                    &lt;th scope="col" rowspan="2"&gt;중점&lt;br&gt;추진과제&lt;/th&gt;
                    &lt;td scope="col" rowspan="2"&gt;세부 추진과제&lt;/td&gt;
                    &lt;td scope="col" rowspan="2" class="text-center"&gt;목표&lt;br&gt;(착수)&lt;/td&gt;
                    &lt;td scope="col" rowspan="2" class="text-center"&gt;예산&lt;br&gt;(억원)&lt;/td&gt;
                    &lt;td scope="col" colspan="2" class="text-center"&gt;추진주체&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td scope="col" class="text-center"&gt;주관&lt;/td&gt;
                    &lt;td scope="col" class="text-center"&gt;협조&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="row"&gt;합계&lt;/th&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;1,071&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                    &lt;td&gt;&nbsp;&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="row" rowspan="9"&gt;1) 육상기인&lt;br&gt;오염원관리&lt;/th&gt;
                    &lt;td&gt;1-1. 하수관로 및 환경기초시설 확충&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;857.4&lt;/td&gt;
                    &lt;td&gt;강진군·완도군·해남군·&lt;br&gt;장흥군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;환경부(생활하수과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-1) 강진군 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;266&lt;/td&gt;
                    &lt;td&gt;강진군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-2) 완도군 소규모 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;530&lt;/td&gt;
                    &lt;td&gt;완도군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-3) 해남군 소규모 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;2015&lt;/td&gt;
                    &lt;td class="text-center"&gt;14.4&lt;/td&gt;
                    &lt;td&gt;해남군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-1-4) 장흥군 공공하수시설 설치&lt;/td&gt;
                    &lt;td class="text-center"&gt;2015&lt;/td&gt;
                    &lt;td class="text-center"&gt;47&lt;/td&gt;
                    &lt;td&gt;장흥군(상하수도사업소)&lt;/td&gt;
                    &lt;td&gt;〃&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;1-2. 해양환경을 고려한 방조제 관리&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;93.5&lt;/td&gt;
                    &lt;td&gt;농림축산식품부&lt;br&gt;(농업기반과),&lt;br&gt;강진군&lt;br&gt;(해양산림과, 안전건설과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                    &lt;td&gt;해양수산부&lt;br&gt;(해양환경정책과,&lt;br&gt;양식산업과),&lt;br&gt;국립수산과학원(어장환경과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-2-1) 사내방조제 담수호 최적 관리방안 마련&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과,&lt;br&gt;안전건설과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                    &lt;td&gt;농림축산식품부&lt;br&gt;(농업기반과),&lt;br&gt;해양수산부(해양환경정책과,&lt;br&gt;양식산업과),&lt;br&gt;국립수산과학원(어장환경과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(1-2-2) 노후 방조제 시설 개․보수&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2014)&lt;/td&gt;
                    &lt;td class="text-center"&gt;88.5&lt;/td&gt;
                    &lt;td&gt;농림축산식품부(농업기반과)&lt;/td&gt;
                    &lt;td&gt;강진군(안전건설과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;1-3. 육상양식장 배출수 수질관리 강화 및 정기점검&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;0.8&lt;/td&gt;
                    &lt;td&gt;전라남도(환경관리과)&lt;/td&gt;
                    &lt;td&gt;완도군(환경녹지과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;th scope="row" rowspan="4"&gt;2) 해양환경 개선&lt;/th&gt;
                    &lt;td&gt;2-1. 해양환경 오염원인 규명 및 해양환경 개선&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;8&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과)&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-1-1) 도암만 하계 수질 정밀지단 및 개선계획&lt;br&gt;&lt;span&gt;&lt;/span&gt;수립&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;5&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;(2-1-2) 퇴적물 오염원조사 및 저감방안 마련&lt;/td&gt;
                    &lt;td class="text-center"&gt;(2016)&lt;/td&gt;
                    &lt;td class="text-center"&gt;3&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양환경정책과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군(해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                    &lt;td&gt;2-2. 퇴적물 환경개선을 위한 정화․복원&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;15&lt;/td&gt; 
                    &lt;td&gt;해양수산부(해양보전과,&lt;br&gt;양식산업과)&lt;/td&gt; 
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군,&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
                &lt;tr&gt;
                	&lt;th&gt;해양수산부(해양보전과&lt;/th&gt;
                    &lt;td&gt;2-2. 퇴적물 환경개선을 위한 정화․복원&lt;/td&gt;
                    &lt;td class="text-center"&gt;&nbsp;&lt;/td&gt;
                    &lt;td class="text-center"&gt;15&lt;/td&gt;
                    &lt;td&gt;해양수산부(해양보전과,&lt;br&gt;양식산업과)&lt;/td&gt;
                    &lt;td&gt;강진군(해양산림과),&lt;br&gt;완도군, 해남군,&lt;br&gt;장흥군 (해양수산과)&lt;/td&gt;
                &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;/div&gt;
&lt;!--// table-vertical --&gt;</code></pre>
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
	include_once('./guide.foot.php');
?>