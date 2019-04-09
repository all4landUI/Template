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
		<h2 class="g-title">팝업</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본 공지사항</h3>
			<p>메인 공지사항+알림 팝업</p>
			<div class="demo-block">
				<div class="source">
					<a href="#popup_name2" class="btn-pop-open bt">레이어 팝업열기</a>
					<a href="/guide/windowpopup.php" data-modal-name="이름" data-modal-width="500" data-modal-height="520" class="btn-pop-open bt">윈도우 팝업열기</a>
				</div>
				<div class="meta">
					<div class="description">
						레이어 팝업 <code>a태그 href="#타겟이름" class="btn-pop-open bt"</code> 설정 <br>
						윈도우 팝업 <code>a태그 href="링크주소" data-modal-name="이름" data-modal-width="넓이" data-modal-height="600" class="btn-pop-open bt"</code>설정
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;article class="layer-system" id="popup_name2"&gt; (시스템팝업은 class="layer-system" 설정)
	&lt;!-- modal-container //--&gt;
	&lt;div class="modal-container" style="left:100px;top:100px;width:500px;height:500px;background:#7cb6ce"&gt;
		&lt;div class="modal-content"&gt;
			&lt;!-- modal-body //--&gt;
			&lt;div class="modal-body"&gt;
				&lt;div class="system-title"&gt;
					제목
				&lt;/div&gt;

				&lt;div class="system-content"&gt;
					내용
				&lt;/div&gt;

			&lt;/div&gt;
			&lt;!--// .modal-body --&gt;
			&lt;a href="#popup_name2" class="btn-modal-close fa"&gt;&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;!--// modal-container --&gt;
	&lt;div class="modal-dimmed"&gt;&lt;/div&gt;
&lt;/article&gt;
&lt;!-- .layer-modal --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<p>컨텐츠 기능팝업</p>
			<div class="demo-block">
				<div class="source">
					<a href="#popup_name" class="btn-pop-open bt">레이어 팝업열기</a>
					<a href="/guide/functionpopup.php" data-modal-name="이름" data-modal-width="900" data-modal-height="600" class="btn-pop-open bt">윈도우 팝업열기</a>
				</div>
				<div class="meta">
					<div class="description">
						레이어 팝업 <code>a태그 href="#타겟이름" class="btn-pop-open bt"</code> 설정 <br>
						윈도우 팝업 <code>a태그 data-modal-name="이름" data-modal-width="넓이" data-modal-height="600" class="btn-pop-open bt"</code> 설정
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;article class="layer-modal" id="popup_name"&gt; (기능팝업은 class="layer-modal" 설정)
	&lt;div class="modal-container"&gt;
		&lt;div class="modal-center"&gt;
			&lt;div class="modal-content"&gt;
				&lt;!-- .modal-header //--&gt;
				&lt;header class="modal-header"&gt;
					&lt;h2&gt;제목&lt;/h2&gt;
				&lt;/header&gt;
				&lt;!--// .modal-header --&gt;
				
				&lt;!-- .modal-body //--&gt;
				&lt;div class="modal-body"&gt;
					내용
				&lt;/div&gt;
				&lt;!--// .modal-body --&gt;

				&lt;!-- .modal-foot //--&gt;
				&lt;div class="modal-foot"&gt;
					
				&lt;/div&gt;				
				&lt;!--// .popup-foot  --&gt;
				&lt;a href="#popup_name" class="btn-modal-close fa"&gt;&lt;/a&gt;
			&lt;/div&gt;
		&lt;/div&gt;
	&lt;/div&gt;
	&lt;div class="modal-dimmed"&gt;&lt;/div&gt;
&lt;/article&gt;
&lt;!-- .layer-modal --&gt;</code></pre>

					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
		</div>
		<!--// g-content  -->
	</div>

</div>
<!--// #guidePage -->


<article class="layer-system" id="popup_name2">
	<!-- modal-container //-->
	<div class="modal-container" style="left:100px;top:100px;width:500px;height:500px;background:#7cb6ce">
		<div class="modal-content">
			<!-- modal-body //-->
			<div class="modal-body mCustomScrollbar mCustomScrollbar-y">

				<div class="system-title">
					디자인비즈니스 종합정보<br>
					지원 관련 설문조사
				</div>

				<div class="system-content">
					‘2013년도 서울디자인프론티어기업 육성사업’에 추가 선정된 서울지역 중소기업의 디자인개발과제를 수행할 주관기업(디자인 기업)을 다음과 같이 추가 모집하오니 많은 신청바랍니다.<br>

					□ 모집분야 : 지원과제로 추가 선정된 3개 제품디자인 개발과제 (별첨 참조)<br><br>
					□ 지원내용 및 조건<br>
					- 지원내용 : 시장조사, 기획, 디자인 목업 제작 등 제품디자인 개발<br>
					- 지원금액 : 정부지원금 23,500천원 이내 (개발비의 75% 이내) + 중소기업 부담금<br>
					(개발비의 25% 이상)<br>
					*선정과제에 따라 지원금액이 달라질 수 있음<br>
					- 개발기간 : 3개월 이내<br>
					- 디자인수요기업(중소기업) 및 디자인기업을 각각 선정하여 1:1 매칭 지원<br><br>

					‘2013년도 서울디자인프론티어기업 육성사업’에 추가 선정된 서울지역 중소기업의 디자인개발과제를 수행할 주관기업(디자인 기업)을 다음과 같이 추가 모집하오니 많은 신청바랍니다.<br>

					□ 모집분야 : 지원과제로 추가 선정된 3개 제품디자인 개발과제 (별첨 참조)<br><br>
					□ 지원내용 및 조건<br>
					- 지원내용 : 시장조사, 기획, 디자인 목업 제작 등 제품디자인 개발<br>
					- 지원금액 : 정부지원금 23,500천원 이내 (개발비의 75% 이내) + 중소기업 부담금<br>
					(개발비의 25% 이상)<br>
					*선정과제에 따라 지원금액이 달라질 수 있음<br>
					- 개발기간 : 3개월 이내<br>
					- 디자인수요기업(중소기업) 및 디자인기업을 각각 선정하여 1:1 매칭 지원
				</div>

			</div>
			<!--// .modal-body -->
			<a href="#popup_name2" class="btn-modal-close fa"></a>
		</div>
	</div>
	<!--// modal-container -->
	<div class="modal-dimmed"></div>
</article>
<!-- .layer-modal -->

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
				                </table><br>
								<div class="bt-area">
				                	<button class="bt">확인하러 가기</button>
				                </div>
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
					
				</div>				
				<!--// .popup-foot  -->
				<a href="#popup_name" class="btn-modal-close fa"></a>
			</div>
		</div>
	</div>
	<div class="modal-dimmed"></div>
</article>
<!-- .layer-modal -->

<script>
	$('.mCustomScrollbar-y').mCustomScrollbar();
</script>


<?php
	include_once('./guide.foot.php');
?>