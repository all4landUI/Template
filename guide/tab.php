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
			<li class="g-depth1"><a href="#">Layout</a></li>
			<li class="g-depth1"><a href="#">Theme</a></li>
			<li class="g-depth1 g-depth-view"><a href="#">Element</a>
				<ul class="g-depth2">
					<li><a href="./board.php">List</a></li>
					<li><a href="./gallery_board.php">Gallery</a></li>
					<li><a href="./gallery_board.php">Thumbnail</a></li>
					<li><a href="./search.php">Search Box</a></li>
					<li><a href="./tab.php">Tab</a></li>
					<li><a href="./button.php">Button</a></li>
					<li><a href="./form.php">Form</a></li>
					<li><a href="./table.php">Table</a></li>
					<li><a href="./content.php">Contents</a></li>
					<li><a href="./content.php">Popup</a></li>
				</ul>
			</li>
		</ul>

	</nav>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">탭</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>가로형</h3>
			<p>기본 가로형</p>
			<div class="demo-block">
				<div class="source">
					
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li>
							<li><a href="#tab_example2">탭메뉴02</a></li>
							<li><a href="#tab_example3">탭메뉴03</a></li>
							<li><a href="#tab_example4">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							<p class="m-b10">올포랜드의 심볼마크와 로고는 도시와 자연공간을 대표하는 녹색과 파란색 바탕에 계획의 개념인 선을 가미하여 공간과 인간의 조화를 나타내는 이미지를 형성한다.<br>또한 회사의 전문 사업분야를 의미함으로써 상승적 이미지 창출은 물론 조직구성원에게 새로운 가치관과 행동양식을 갖추는 단계로까지 승화시켜 올포랜드의 기업이미지를<br>확고히 하는 데 핵심적 역할을 하고 있다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							<p>웹페이지를 제작하기 위해 사용되는 HTML4을 XML에 맞도록 재정의한 언어 입니다. html과 다른 점은 html보다 조금더 구조화된 형식과 엄격한 문법을 가지고 있습니다.<br>
							예를 들어 모든 요소는 반드시 시작과 함께 종료를 표현해야함, 소문자사용, 속성값의 생략 불가능,모든 속성값에 인용부호, 특수문자 변환사용,<br>
							사용또한 xhtml은 html과 다르게 HTML 4.01의 후속 버전이 아닌 별개로 분리된 xml의 응용 버전이라 볼 수 있습니다.<br>
							장점은 html보다 웹사이트 검색기능 향상과 복잡한 데이터 처리에 보다 쉽다는 장점을 가지고 있고, html의 단점을 보안하기 위해 만들어진 언어 입니다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							<p class="m-b30">HTML5는 기존의 HTML와 동일한 마크업 언어 입니다. 따라서 기본 골격은 기존 HTML과 다르지 않으며 HTML5는 XHTML에서 발전된 버전 입니다.<br>
							최신HTML로써 추가 플러그인과 엑티브엑스 없이 멀티미디어 즉 동영상과 오디오플레이를 쉽게 볼수 있다는 장점을 지니고 있고, html, css, javascript를 조합하여 대화형 웹사이트 제작 할 수 있습니다.<br>
							HTML4에 기반하고 네임스페이스나 스키마가 없기 때문에 요소(Element)의 끝을 정확히 닫지 않거나 따옴표를 생략해도 괜찮습니다.<br>
							HTML5를 지원하지 않는 브라우저에서도 컨텐츠가 무리없이 출력되도록 설계되었으며, 호환성이 고려된 추가적인 새 요소들이 대거 추가되었습니다.<br>
							HTML5는 HTML4와 XHTML1 문법과 호환되지만, HTML4 일부 SGML(Standard Generalized Markup Language) 문법과는 호환되지 않는 특성을 가지고 있다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example4">
							<ol>
								<li>사이트의 Footer Area는 저작권 명시와 필요 시 사용성을 위해 화면 하단에 구성한다.</li>
								<li>카피라이트는 가급적 시스템 폰트로 표현 작성하며. 폰트를 사용시 타이포그래피 가이드에 위배되지 않은 범위에서 사용한다.</li>
								<li>Footer Area는 올포랜드 UI 아이덴티티 전략의 핵심 영역이므로 반드시 표준을 준수한다.</li>
								<li>Footer Area는 Body Area의 하단에 위치하며 컨텐츠가 화면의 용량보다 적을 경우에도 항상 화면 하단에 규정된 크기로 보여준다.</li>
							</ol>
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<div class="meta">
					<div class="description">
						.wrap_tabcont의 
						a의 href="#data-panel-name" 을 넣어서 사용한다.<br>
						.tab-panel에는 꼭 data-panel="data-panel-name"을 넣어사용한다
					</div>
					<div class="highlight">
						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>세로형</h3>
			<p>기본세로형</p>
			<div class="demo-block">
				<div class="source">
					
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li>
							<li><a href="#tab_example2">탭메뉴02</a></li>
							<li><a href="#tab_example3">탭메뉴03</a></li>
							<li><a href="#tab_example4">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							1
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							2
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							3
						</div>
						<div class="tab-panel" data-panel="tab_example4">
							4
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<div class="meta">
					<div class="description">
						.wrap_tabcont의 
						a의 href="#data-panel-name" 을 넣어서 사용한다.<br>
						.tab-panel에는 꼭 data-panel="data-panel-name"을 넣어사용한다
					</div>
					<div class="highlight">
						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>


			<h3>크기 변경</h3>
			<p>픽셀 조정</p>
			<div class="demo-block">
				<div class="source">
					
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1" class="width-100">탭메뉴01</a></li>
							<li><a href="#tab_example2" class="width-150">탭메뉴02</a></li>
							<li><a href="#tab_example3" class="width-200">탭메뉴03</a></li>
							<li><a href="#tab_example4">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							1
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							2
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							3
						</div>
						<div class="tab-panel" data-panel="tab_example4">
							4
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<div class="meta">
					<div class="description">
						<code>width-1 ~ width-500</code> 사용
					</div>
					<div class="highlight">
						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			<p>개수로 자동 크기 맞춤</p>
			<div class="demo-block">
				<div class="source">
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont tab-column-4 margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li>
							<li><a href="#tab_example2">탭메뉴02</a></li>
							<li><a href="#tab_example3">탭메뉴03</a></li>
							<li><a href="#tab_example4">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							1
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							2
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							3
						</div>
						<div class="tab-panel" data-panel="tab_example4">
							4
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<div class="meta">
					<div class="description">
						<code>tab-column-value(number)</code> 사용 최대 1~10
					</div>
					<div class="highlight">
						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>아이콘</h3>
			<p>아이콘을 넣는다.</p>
			<div class="demo-block">
				<div class="source">
					
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont tab-column-4 margin-bottom-10">
						<ul>
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li>
							<li><a href="#tab_example2">탭메뉴02</a></li>
							<li><a href="#tab_example3">탭메뉴03</a></li>
							<li><a href="#tab_example4">탭메뉴04</a></li>
							<li><a href="#tab_example5">탭메뉴01</a></li>
							<li><a href="#tab_example6">탭메뉴02</a></li>
							<li><a href="#tab_example7">탭메뉴03</a></li>
							<li><a href="#tab_example8">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							1
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							2
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							3
						</div>
						<div class="tab-panel" data-panel="tab_example4">
							4
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<div class="meta">
					<div class="description">
						<code>width-1 ~ width-500</code> 사용
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