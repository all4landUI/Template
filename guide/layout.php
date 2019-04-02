<?php
	$guide = true;
	include_once('../head.php');
?>
<link rel="stylesheet" type="text/css" href="/css/guide.css">
<link rel="stylesheet" type="text/css" href="/plugin/prism/prism.css">
<script src="/plugin/prism/prism.js"></script>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>

	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">레이아웃</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			
			<h3>레이아웃 타입 선택</h3>
			<p>
				3가지의 구조변경 타입을 미리보시고, 적용해보세요.
			</p>
			
			<div class="demo-layout--view">
				
				<div class="demo-priview">
					<div class="box">
						<h3>A TYPE</h3>
						<p class="thumbnail"><img src="../../images/thumb/sample.png" alt="이미지설명"></p>
						<div class="check-radio">
							<input type="radio" name="priview" value="layout_type--1">
						</div>
					</div>
				</div>

				<div class="demo-priview">
					<div class="box">
						<h3>B TYPE</h3>
						<p class="thumbnail"><img src="../../images/thumb/sample.png" alt="이미지설명"></p>
						<div class="check-radio">
							<input type="radio" name="priview" value="layout_type--2">
						</div>
					</div>
				</div>

				<div class="demo-priview">
					<div class="box">
						<h3>C TYPE</h3>
						<p class="thumbnail"><img src="../../images/thumb/sample.png" alt="이미지설명"></p>
						<div class="check-radio">
							<input type="radio" name="priview" value="layout_type--3">
						</div>
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
	include_once('../foot.php');
?>