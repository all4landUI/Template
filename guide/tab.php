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
		<h2 class="g-title">탭</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>가로형</h3>
			<p>기본 가로형</p>
			<div class="demo-block">
				<div class="source">
					<button class="tab-add bt">탭추가</button><br><br>
					<script>
						$(function(){
							$('.tab-add').click(function(e){
								var cont = $(this).siblings('.wrap_tabcont').find('li').length+1;
								$(this).siblings('.wrap_tabcont').find('ul').append('<li><a href="#tab_example'+cont+'">탭메뉴'+cont+'</a></li>');
							})
						})
					</script>

					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont margin-bottom-10">
						<ul class="x-scroll">
							<li class="active"><a href="#tab_example1">탭메뉴01</a></li><li><a href="#tab_example2">탭메뉴02</a></li><li><a href="#tab_example3">탭메뉴03</a></li><li><a href="#tab_example4">탭메뉴04</a></li>
						</ul>
					</div>
					<!--// .wrap_tabcont -->

					<!-- tab-content //-->
					<div class="tab-content">
						<div class="tab-panel active" data-panel="tab_example1">
							<p>올포랜드의 심볼마크와 로고는 도시와 자연공간을 대표하는 녹색과 파란색 바탕에 계획의 개념인 선을 가미하여 공간과 인간의 조화를 나타내는 이미지를 형성한다.<br>또한 회사의 전문 사업분야를 의미함으로써 상승적 이미지 창출은 물론 조직구성원에게 새로운 가치관과 행동양식을 갖추는 단계로까지 승화시켜 올포랜드의 기업이미지를<br>확고히 하는 데 핵심적 역할을 하고 있다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							<p>웹페이지를 제작하기 위해 사용되는 HTML4을 XML에 맞도록 재정의한 언어 입니다. html과 다른 점은 html보다 조금더 구조화된 형식과 엄격한 문법을 가지고 있습니다.<br>
							예를 들어 모든 요소는 반드시 시작과 함께 종료를 표현해야함, 소문자사용, 속성값의 생략 불가능,모든 속성값에 인용부호, 특수문자 변환사용,<br>
							사용또한 xhtml은 html과 다르게 HTML 4.01의 후속 버전이 아닌 별개로 분리된 xml의 응용 버전이라 볼 수 있습니다.<br><br>
							장점은 html보다 웹사이트 검색기능 향상과 복잡한 데이터 처리에 보다 쉽다는 장점을 가지고 있고, html의 단점을 보안하기 위해 만들어진 언어 입니다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							<p >UI는 User interface의 준말로 / 말 그대로 사용자 — 인터페이스를 의미합니다. 현업에서도 사용자 인터페이스, 혹은 인터페이스라고 표현을 하는데 이용하는 대상이 사람(또는 동물)일 경우 그냥 인터페이스라고 줄여서 표현하기도 합니다.<br><br>

							인터페이스(영어: interface, 문화어: 대면부, 결합부 또는 접속기)사물 간 또는 사물과 인간 간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미한다.<br>
							(* https://ko.wikipedia.org/wiki/인터페이스)<br>
							인터페이스는 위에 내용처럼 사물 간 또는 사물과 사용자간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미합니다</p>
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
						<code>class="wrap_tabcont"</code>의 a태그의 <code>href="#data-panel-name"</code> 을 넣어서 사용한다.<br>
						<code>class="tab-panel"</code>에는 꼭 <code>data-panel="data-panel-name"</code>을 넣어사용한다.<br>
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- .wrap_tabcont //--&gt;
&lt;div class="wrap_tabcont margin-bottom-10"&gt;
	&lt;ul&gt;
		&lt;li class="active"&gt;&lt;a href="#tab_example1"&gt;탭메뉴01&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example2"&gt;탭메뉴02&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example3"&gt;탭메뉴03&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example4"&gt;탭메뉴04&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;!--// .wrap_tabcont --&gt;

&lt;!-- tab-content //--&gt;
&lt;div class="tab-content"&gt;
	&lt;div class="tab-panel active" data-panel="tab_example1"&gt;
		
	&lt;/div&gt;
	&lt;div class="tab-panel" data-panel="tab_example2"&gt;
	
	&lt;/div&gt;
	&lt;div class="tab-panel" data-panel="tab_example3"&gt;
		
	&lt;/div&gt;
	&lt;div class="tab-panel" data-panel="tab_example4"&gt;
		
	&lt;/div&gt;
&lt;/div&gt;
&lt;!--// tab-content  --&gt;</code></pre>
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
							<p>올포랜드의 심볼마크와 로고는 도시와 자연공간을 대표하는 녹색과 파란색 바탕에 계획의 개념인 선을 가미하여 공간과 인간의 조화를 나타내는 이미지를 형성한다.<br>또한 회사의 전문 사업분야를 의미함으로써 상승적 이미지 창출은 물론 조직구성원에게 새로운 가치관과 행동양식을 갖추는 단계로까지 승화시켜 올포랜드의 기업이미지를<br>확고히 하는 데 핵심적 역할을 하고 있다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							<p>웹페이지를 제작하기 위해 사용되는 HTML4을 XML에 맞도록 재정의한 언어 입니다. html과 다른 점은 html보다 조금더 구조화된 형식과 엄격한 문법을 가지고 있습니다.<br>
							예를 들어 모든 요소는 반드시 시작과 함께 종료를 표현해야함, 소문자사용, 속성값의 생략 불가능,모든 속성값에 인용부호, 특수문자 변환사용,<br>
							사용또한 xhtml은 html과 다르게 HTML 4.01의 후속 버전이 아닌 별개로 분리된 xml의 응용 버전이라 볼 수 있습니다.<br><br>
							장점은 html보다 웹사이트 검색기능 향상과 복잡한 데이터 처리에 보다 쉽다는 장점을 가지고 있고, html의 단점을 보안하기 위해 만들어진 언어 입니다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							<p >UI는 User interface의 준말로 / 말 그대로 사용자 — 인터페이스를 의미합니다. 현업에서도 사용자 인터페이스, 혹은 인터페이스라고 표현을 하는데 이용하는 대상이 사람(또는 동물)일 경우 그냥 인터페이스라고 줄여서 표현하기도 합니다.<br><br>

							인터페이스(영어: interface, 문화어: 대면부, 결합부 또는 접속기)사물 간 또는 사물과 인간 간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미한다.<br>
							(* https://ko.wikipedia.org/wiki/인터페이스)<br>
							인터페이스는 위에 내용처럼 사물 간 또는 사물과 사용자간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미합니다</p>
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
						<code>class="width-100"</code> 최대 500까지 사용가능
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- .wrap_tabcont //--&gt;
&lt;div class="wrap_tabcont margin-bottom-10"&gt;
	&lt;ul&gt;
		&lt;li class="active"&gt;&lt;a href="#tab_example1" class="width-100"&gt;탭메뉴01&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example2" class="width-150"&gt;탭메뉴02&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example3" class="width-200"&gt;탭메뉴03&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example4"&gt;탭메뉴04&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;!--// .wrap_tabcont --&gt;</code></pre>
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
							<p>올포랜드의 심볼마크와 로고는 도시와 자연공간을 대표하는 녹색과 파란색 바탕에 계획의 개념인 선을 가미하여 공간과 인간의 조화를 나타내는 이미지를 형성한다.<br>또한 회사의 전문 사업분야를 의미함으로써 상승적 이미지 창출은 물론 조직구성원에게 새로운 가치관과 행동양식을 갖추는 단계로까지 승화시켜 올포랜드의 기업이미지를<br>확고히 하는 데 핵심적 역할을 하고 있다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							<p>웹페이지를 제작하기 위해 사용되는 HTML4을 XML에 맞도록 재정의한 언어 입니다. html과 다른 점은 html보다 조금더 구조화된 형식과 엄격한 문법을 가지고 있습니다.<br>
							예를 들어 모든 요소는 반드시 시작과 함께 종료를 표현해야함, 소문자사용, 속성값의 생략 불가능,모든 속성값에 인용부호, 특수문자 변환사용,<br>
							사용또한 xhtml은 html과 다르게 HTML 4.01의 후속 버전이 아닌 별개로 분리된 xml의 응용 버전이라 볼 수 있습니다.<br><br>
							장점은 html보다 웹사이트 검색기능 향상과 복잡한 데이터 처리에 보다 쉽다는 장점을 가지고 있고, html의 단점을 보안하기 위해 만들어진 언어 입니다.</p>
						</div>
						<div class="tab-panel" data-panel="tab_example3">
							<p >UI는 User interface의 준말로 / 말 그대로 사용자 — 인터페이스를 의미합니다. 현업에서도 사용자 인터페이스, 혹은 인터페이스라고 표현을 하는데 이용하는 대상이 사람(또는 동물)일 경우 그냥 인터페이스라고 줄여서 표현하기도 합니다.<br><br>

							인터페이스(영어: interface, 문화어: 대면부, 결합부 또는 접속기)사물 간 또는 사물과 인간 간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미한다.<br>
							(* https://ko.wikipedia.org/wiki/인터페이스)<br>
							인터페이스는 위에 내용처럼 사물 간 또는 사물과 사용자간의 의사소통이 가능하도록 일시적 혹은 영속적인 접근을 목적으로 만들어진 물리적, 가상적 매개체를 의미합니다</p>
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
						<code>class="wrap_tabcont tab-column-4"</code> 사용 최대 1~10
					</div>
					<div class="highlight">
<pre><code class="language-html">&lt;!-- .wrap_tabcont //--&gt;
&lt;div class="wrap_tabcont tab-column-4 margin-bottom-10"&gt;
	&lt;ul&gt;
		&lt;li class="active"&gt;&lt;a href="#tab_example1"&gt;탭메뉴01&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example2"&gt;탭메뉴02&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example3"&gt;탭메뉴03&lt;/a&gt;&lt;/li&gt;
		&lt;li&gt;&lt;a href="#tab_example4"&gt;탭메뉴04&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
&lt;!--// .wrap_tabcont --&gt;</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>아이콘 탭</h3>
			<p>각 해당 맞는 이미지를 넣는다.</p>
			<div class="demo-block">
				<div class="source">
					
					<!-- .wrap_tabcont //-->
					<div class="wrap_tabcont tab-column-4 margin-bottom-10">
						<ul>
							<li class="active">
								<a href="#tab_example1">
									<i class="fa fa-area-chart"></i>
									탭메뉴01
								</a>
							</li>
							<li>
								<a href="#tab_example2">
									<i class="fa fa-bar-chart"></i>
									탭메뉴02
								</a>
							</li>
							<li>
								<a href="#tab_example3">
									<i class="fa fa-bar-chart-o"></i>
									탭메뉴03
								</a>
							</li>
							<li>
								<a href="#tab_example4">
									<i class="fa fa-share-alt"></i>
									탭메뉴04
								</a>
							</li>
							
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
						각 탭에 맞는 아이콘을 넣는다.
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