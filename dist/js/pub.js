
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

			$('.modal-close').on('click' , function(e){
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
				layout3_js()
			}
			if($("body").is(".layout-type-2")){
				layout2_js()
			}
			if($("body").is(".layout-type-1")){
				layout1_js()
			}

			function layout1_js(){
				$('#btn_allmenu').on('click' , function(){
			
					$('#sitemap').show().height($(document).height());
					$('.sitemap-open').animate({
						top : 0
					},200)
				})

				$('.btn-sitemap-close').on('click' , function(){
					$('.sitemap-open').animate({
						top : -570+'px'
					},200 , function(){
						$('#sitemap').hide();
					})
				})
			}


			function layout2_js(){
				$(".depth-view>a").on('click' , function(){
					if(!$(this).parent('li').is('.active')){
						$(this).parent('li').addClass('active')
					} else {
						if(!$(this).parent('li').is('.menu_open')){
							$(this).parent('li').removeClass('active')
						}
						
					}
					return false;
				})
			}

			function layout3_js(){
				$('#gnb').on({
					mouseenter : function(){
						$('#header').addClass('megamenu-on');
						if(!$('#fixed_search').is(":hidden")){
							$('#fixed_search').hide();
						}
					},
					mouseleave : function(){
						$('#header').removeClass('megamenu-on');
					}
				});

				$('#btn_allmenu').on('click' , function(){
					var $this = $(this);
					if(!$('#header').is('.megamenu-on')){
						$('#header').addClass('megamenu-on');
						if(!$('#fixed_search').is(":hidden")){
							$('#fixed_search').hide();
						}
					} else {
						$('#header').removeClass('megamenu-on');	
					}
				})
			}
			$('#btn_allsearch').on("click" , function(){
				if($('#fixed_search').is(":hidden")){
					$('#fixed_search').slideDown();
					if($('#header').is('.megamenu-on')){
						$('#header').removeClass('megamenu-on')
					}
				} else {
					$('#fixed_search').slideUp();
				}
			})

			
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

		mCuscroll : function(){
			
			

		},

		init : function(){
			this.tab();
			this.modal();
			this.head();
			this.location();
			this.mCuscroll();
		}
	}

	$(document).ready(function(){
		pub.init();
	});

})(jQuery);

function check_all(f)
{
    var chk = document.getElementsByName("chk[]");

    for (i=0; i<chk.length; i++){
        chk[i].checked = f.chkall.checked;
    }
}