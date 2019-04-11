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
		<h2 class="g-title">네이게이션</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			
			<h3>네이게이션 타입 선택</h3>
			<!-- <p>
				템플릿 원본자료가 필요하신 분은 메일로 요청 주시기 바랍니다.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;담당자 : UX/UX 기획팀 오승준과장(<a href="mailto:okm7327@all4land.com" target="_blank" class="underline">okm7327@all4land.com</a>)
			</p> -->
			
			<div class="demo-layout--view">
				
				<div class="demo-priview">
					<div class="box">
						<h3>A TYPE</h3>
						<p class="thumbnail">
							<a href="layout_type--1.php" target="_blank"><img src="../../dist/images/dummy/navigation1.gif" alt="이미지설명"></a>
						</p>
					</div>
				</div>

				<div class="demo-priview">
					<div class="box">
						<h3>B TYPE</h3>
						<p class="thumbnail">
							<a href="layout_type--2.php" target="_blank"><img src="../../dist/images/dummy/navigation2.gif" alt="이미지설명"></a>
						</p>
					</div>
				</div>

				<div class="demo-priview">
					<div class="box">
						<h3>C TYPE</h3>
						<p class="thumbnail">
							<a href="layout_type--3.php" target="_blank"><img src="../../dist/images/dummy/navigation3.gif" alt="이미지설명"></a>
						</p>
					</div>
				</div>

			</div>

		</div>
		<!--// g-content  -->
		<script>
			$('.demo-priview input').click(function(e){
				e.stopPropagation()
				var $href = $(this).val();
				window.open($href+".php");

			})
		</script>

	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('./guide.foot.php');
?>