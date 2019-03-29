
/**
 ** 2019.03.28 오승준 
**/

;(function($){
	'use strict';

	var pub = {
		tab : function(){
			
			var $btn = $(".wrap_tabcont li a");
			$btn.on("click" , function(event){
				var $this = $(this);
				event.stopPropagation()
				var $tg = $this.attr("href").split("#");
					$tg = $tg[1];
				if($tg === null || $tg === undefined){
					new error;
				}
				if($this.parent().is(".active")){
					
				} else {
					$this.parents(".wrap_tabcont").siblings(".tab-content").find("[data-panel='"+$tg+"']").addClass("active").siblings("div").removeClass("active")
					$this.parent().addClass("active").siblings('li').removeClass('active');
				}
				event.preventDefault();
			})
		},

		modal : function(options){
			
		},

		init : function(){
			this.tab();
		}
	}

	$(document).ready(function(){
		pub.init();
	});

})(jQuery);
