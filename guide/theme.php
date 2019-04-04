<?php

	include_once('./guide.head.php');
?>

<style>
	.demo-view{padding:15px;border:1px solid #ddd;}
	.background_view{display:inline-block;}
	.background_view+.background_view{margin-left:5px;}
	.background_view div{height:100px;width:100px;position:relative;text-align:center;color:#333;}
	.background_view div:before{content:"";display:inline-block;vertical-align:middle;height:100%;}
	.background_view span{padding-top:5px;display:inline-block;}
	.border_view{width:100%;padding:5px;color:#fff;}
	.border_view+.border_view{margin-top:5px;}
</style>
<!-- #guidePage //-->
<div id="guidePage">
	<?php
		include_once('./guide-menu.php');
	?>
	<div id="guideContent">
		<!-- guide-title //-->
		<h2 class="g-title">테마</h2>
		<!--// guide-title -->
		
		<!-- g-content //-->
		<div class="g-content">
			<h3>기본 내용</h3>
			<ul class="list_comm list_st3 margin-top-5">
				<li>해당 사이트의 브랜드 컬러가 있다면, 그에 따라 변경해서 제공</li>	
				<li>브랜드색 , 버튼색 , 폼 보더색 , 테이블색에 대하여, 변수로 제공</li>	
				<li>현재는 기본타입만 완성</li>
			</ul>
			<h3>테마-기본형</h3>

			<p>버튼</p>
			<div class="demo-view">
				<a href="#" class="bt">기본</a>
				<a href="#" class="bt bt-1">등록</a>
				<a href="#" class="bt bt-2">확인</a>
				<a href="#" class="bt bt-3">수정</a>
				<a href="#" class="bt bt-4">취소</a>
				<a href="#" class="bt bt-5">삭제</a>
				<a href="#" class="bt bt-6">목록</a>
				<br>
				<br>
				<a href="#" class="bt bt-bg">기본</a>
				<a href="#" class="bt bt-bg-1">등록</a>
				<a href="#" class="bt bt-bg-2">확인</a>
				<a href="#" class="bt bt-bg-3">수정</a>
				<a href="#" class="bt bt-bg-4">취소</a>
				<a href="#" class="bt bt-bg-5">삭제</a>
				<a href="#" class="bt bt-bg-6">목록</a>
			</div>
			<p>배경색</p>
			<div class="demo-view">
				<div class="background_view">
					<div style="background:#3c8dbc;">
						#3c8dbc
					</div>
					<span>배경색</span>
				</div>
				<div class="background_view">
					<div style="background:#f9f9f9;">
						#f9f9f9
					</div>
					<span>테이블 th</span>
				</div>
				
			</div>

			

			<p>기본 보더색</p>
			<div class="demo-view">
				<div class="border_view" style="background:#ddd">기본</div>
				<div class="border_view" style="background:#767676">테이블 상단</div>
				<div class="border_view" style="background:#e0e0e0">테이블 th,td</div>
				<div class="border_view" style="background:#3c8dbc">강조</div>
			</div>
		</div>
		<!--// g-content  -->

	</div>

</div>
<!--// #guidePage -->

<?php
	include_once('./guide.foot.php');
?>