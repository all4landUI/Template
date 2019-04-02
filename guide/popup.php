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
					<a href="/windowpopup.php" data-modal-name="이름" data-modal-width="500" data-modal-height="500" class="btn-pop-open bt">윈도우 팝업열기</a>
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
					<a href="#popup_name" class="btn-pop-open bt">레이어 팝업열기</a>
					<a href="/windowpopup.php" data-modal-name="이름" data-modal-width="500" data-modal-height="500" class="btn-pop-open bt">윈도우 팝업열기</a>
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
							팝업 탭메뉴 01
						</div>
						<div class="tab-panel" data-panel="tab_example2">
							팝업 탭메뉴 02
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
<!-- .layer-popup -->
<?php
	include_once('../foot.php');
?>