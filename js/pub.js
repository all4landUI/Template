
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
					console.log('error')
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
			
			var $btn = $('.btn-pop-open');

			$btn.on('click' , function(event){
				event.stopPropagation();
				var $this = $(this).attr('href').indexOf('#') !== -1;

				if($this === true){
					$($(this).attr('href')).show();
				}
				else {
					var $href   = $(this).attr('href'),
						$width  = $(this).data('modal-width'),
						$height = $(this).data('modal-height'),
						$name   = $(this).data('modal-name');
					window.open($href, $name ,'width='+$width+', height='+$height+'');
				}
				event.preventDefault();
			})

			$('.btn-modal-close').on('click' , function(e){
				event.stopPropagation();
				var $this = $(this).attr('href').indexOf('#') !== -1;

				if($this === true){
					$($(this).attr('href')).hide();
				}
				event.preventDefault();
			})
		},

		head : function(){
			// type체크 
			if($("body").is(".layout-type-3")){
				megaGnb()
			}
			function megaGnb(){
				$('#gnb').on({
					mouseenter : function(){
						$('#header').addClass('megamenu-on');
					},
					mouseleave : function(){
						$('#header').removeClass('megamenu-on');
					}
				})
			}
		},

		location : function(){
			var $location = $(".location");
			
			if( $location.length == 1){
				var $lnb = $('#lnb li');

				$lnb.each(function(idx,key){
					var $this = $.trim($(this).find('a').text());
					var $page = $.trim($('.location li:eq(2)').text());
					if($this == $page){
						$(this).addClass('current')
					}					
				})
			}
		},
		init : function(){
			this.tab();
			this.modal();
			this.head();
			this.location();
		}
	}

	$(document).ready(function(){
		pub.init();
	});

})(jQuery);
