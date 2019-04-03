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
		<h2 class="g-title">팝업</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본 공지사항</h3>
			<p>메인 공지사항+알림 팝업</p>
			<div class="demo-block">
				<div class="source">
					<a href="#popup_name" class="btn-pop-open bt">레이어 팝업열기</a>
					<a href="/guide/functionpopup.php" data-modal-name="이름" data-modal-width="500" data-modal-height="500" class="btn-pop-open bt">윈도우 팝업열기</a>
				</div>
				<div class="meta">
					<div class="description">
						
					</div>
					<div class="highlight">
						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<p>컨텐츠 시스템팝업</p>
			<div class="demo-block">
				<div class="source">
					<a href="#popup_name2" class="btn-pop-open bt">레이어 팝업열기</a>
					<a href="/guide/windowpopup.php" data-modal-name="이름" data-modal-width="500" data-modal-height="500" class="btn-pop-open bt">윈도우 팝업열기</a>
				</div>
				<div class="meta">
					<div class="description">
						
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

<article class="layer-modal" id="popup_name">
	<div class="modal-container">
		<div class="modal-center">
			<div class="modal-content">
				<!-- .popup-header //-->
				<header class="modal-header">
					<h2>민원신청 도움말</h2>
				</header>
				<!--// .popup-header -->
				
				<!-- .popup-body //-->
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
							모든 과정이 중요한 과정이지만 설계 과정은 정말 기획자에게 있어서 정말 중요한 과정입니다. 클라이언트가 원하는 방향, 분석을 통해 얻은 방향 등을 적절하게 조합하여 최상의 결과물을 만들어야하고 이 결과물을 디자이너, 개발자에게 전달했을 때 그들이 쉽게 이해하여 작업에 반영할 수 있도록 해야하기 때문입니다.<br><br>
 
							고객과 디자이너/개발자 사이의 다리 역할!
							그렇게 설계된 내용을 디자이너와 개발자에게 전달하면 디자이너와 개발자는 그에 맞게 작업을 진행하게 됩니다. 그 과정에서 기획자는 초기 디자인 컨셉, 홈페이지 기능, 클라이언트가 원하는 방향 등을 디자이너와 개발자에게 끊임없이 인식시켜주는 역할을 해야합니다. 그렇지 않으면 초기의 기획 방향과 다른 방향으로 흘러갈 수 있기 때문입니다.
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							숨은 조력자<br>
							앞서 말씀드린대로 대부분의 사용자들은 홈페이지에 보이는 화려한 디자인에 먼저 관심을 보입니다. 그래서 그 과정속에 담겨져있는 기획자의 노력은 보이지 않을 수 있습니다. 하지만 본인이 기획한 홈페이지를 방문한 사용자들이 쉽고 편리하게 사용하여 방문객이 늘어나 클라이언트에게도 도움이 된다면, 이것이야말로 웹기획자의 노력의 결실을 맺는 순간 그리고 웹기획자에게는 가장 뿌듯하고 보람을 느낄 수 있는 순간이랍니다.
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<!--// .popup-body -->

				<!-- .popup-foot //-->
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

<article class="layer-system" id="popup_name2" style="left:100px;top:100px;">
	<div class="modal-container">
		<div class="modal-center">
			<div class="modal-content">
				<!-- .popup-header //-->
				<header class="modal-header">
					<h2>민원신청 도움말</h2>
				</header>
				<!--// .popup-header -->
				
				<!-- .popup-body //-->
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
							모든 과정이 중요한 과정이지만 설계 과정은 정말 기획자에게 있어서 정말 중요한 과정입니다. 클라이언트가 원하는 방향, 분석을 통해 얻은 방향 등을 적절하게 조합하여 최상의 결과물을 만들어야하고 이 결과물을 디자이너, 개발자에게 전달했을 때 그들이 쉽게 이해하여 작업에 반영할 수 있도록 해야하기 때문입니다.<br><br>
 
							고객과 디자이너/개발자 사이의 다리 역할!
							그렇게 설계된 내용을 디자이너와 개발자에게 전달하면 디자이너와 개발자는 그에 맞게 작업을 진행하게 됩니다. 그 과정에서 기획자는 초기 디자인 컨셉, 홈페이지 기능, 클라이언트가 원하는 방향 등을 디자이너와 개발자에게 끊임없이 인식시켜주는 역할을 해야합니다. 그렇지 않으면 초기의 기획 방향과 다른 방향으로 흘러갈 수 있기 때문입니다.
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							숨은 조력자<br>
							앞서 말씀드린대로 대부분의 사용자들은 홈페이지에 보이는 화려한 디자인에 먼저 관심을 보입니다. 그래서 그 과정속에 담겨져있는 기획자의 노력은 보이지 않을 수 있습니다. 하지만 본인이 기획한 홈페이지를 방문한 사용자들이 쉽고 편리하게 사용하여 방문객이 늘어나 클라이언트에게도 도움이 된다면, 이것이야말로 웹기획자의 노력의 결실을 맺는 순간 그리고 웹기획자에게는 가장 뿌듯하고 보람을 느낄 수 있는 순간이랍니다.
						</div>
					</div>
					<!--// tab-content  -->
				</div>
				<!--// .popup-body -->

				<!-- .popup-foot //-->
				<div class="modal-foot">
					
				</div>				
				<!--// .popup-foot  -->
				<a href="#popup_name2" class="btn-modal-close fa"></a>
			</div>
		</div>
	</div>
	<div class="modal-dimmed"></div>
</article>
<!-- .layer-modal -->
<?php
	include_once('../foot.php');
?>