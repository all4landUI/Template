<?php if(!$guide) { ?>
<!-- Footer -->
<footer>
	<div class="inner">
		<p class="f-logo">올포랜드 로고</p>
		<ul>
			<li><a href="#"><em>개인정보 처리방침</em></a></li>
			<li><a href="#">저작권정책</a></li>
			<li><a href="#">이메일무단수집거부</a></li>
		</ul>
        <address>서울특별시 금천구 가산디지털1로 145</address>
        <span>TEL : 02 - 855 - 5724</span>
        <span>FAX : 02 - 857 - 5746</span>
        <small>© ALLFORLAND, All rights reserved.</small>

		<select title="관련기관 바로가기" class="family-site">
			<option value="">관련기관목록</option>
		</select>
	</div>
</footer>
<!-- /Footer --> 	
<?php } ?>
<script>
	$(".demo-control").on("click" , function(event){
		event.stopPropagation();
	
		if($(this).is(".active")){
			$(this).prev(".meta").height(0);
			$(this).removeClass('active');
		} else {
			var height = $(this).siblings(".meta").find(".highlight").outerHeight() + $(this).siblings(".meta").find(".description").outerHeight() + 20;
			$(this).prev(".meta").height(height);
			$(this).addClass('active');
		}
	});
</script>

</body>
</html>