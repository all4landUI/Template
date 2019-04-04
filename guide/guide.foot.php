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