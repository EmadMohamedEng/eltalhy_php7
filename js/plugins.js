/******************************************************************************
* by Abdelrahman Haridy 
* Email    : abdelrahman.haridy01@gmail.com
* LinkedIn : http://linkedin.com/pub/abdelrahman-haridy/60/9a3/531/
* Phone    : 002 01020875298, 002 01020875298
* website  : http://ivas.mobi/
******************************************************************************/

/*globals $, window, WOW, blueimp, document */
$(function () {
    'use strict';
	// $(document).ready(function() {
	// 	$('#myModal').modal('show');
	// 	// $("#myModal iframe video").attr("autoplay", 'false');
	// });
	// $("#myModal").on('hidden.bs.modal', function (e) {
	// 	// $("#myModal video").attr("src", $("#myModal video").attr("src"));
	// 	$("#myModal video").attr("src", ' ');
	// 	// $("#myModal iframe video").attr("autoplay", 'false');
	// });
    

    $(".hero-slider").not('.slick-initialized').slick({
        dots: false,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 7000,
        fade: true,
        cssEase: 'linear'
    });
    
    new WOW().init();
    
    $(window).scroll(function () {
        if($(this).scrollTop() > 2 ) {
            $('nav').css({
                'background': 'rgba(120, 95, 55, 0.8)',
                'border-color': 'rgba(34, 34, 34, 0.05)'
            });
            $('nav .navbar-brand').css('height', '70px');
            $('nav .navbar-brand img').css('height', '60px');
            $('.navbar-nav > li > a').css('line-height', '40px');
        } else {
            $('nav').css({
                'background': 'rgba(120, 95, 55, 0.38);',
                'border-color': 'transparent'
            });
            $('nav .navbar-brand').css('height', '80px');
            $('nav .navbar-brand img').css('height', '70px');
            $('.navbar-nav > li > a').css('line-height', '50px');
        }
        
    });
    
    $("#lightGallery").lightGallery();
});
//start portfolio
(function ($) {
    'use strict';
	$.fn.filterable = function(settings) {
		settings = $.extend({
			useHash: false,
			animationSpeed: 1000,
			show: { width: 'show',height: 'show', opacity: 'show' },
			hide: { width: 'hide',height: 'hide', opacity: 'hide' },
			useTags: true,
			tagSelector: '#portfolio-filter a',
			selectedTagClass: 'current',
			allTag: 'all'
		}, settings);
		
		return $(this).each(function(){
		
			/* FILTER: select a tag and filter */
			$(this).bind("filter", function( e, tagToShow ){
				if(settings.useTags){
					$(settings.tagSelector).removeClass(settings.selectedTagClass);
					$(settings.tagSelector + '[href="' + tagToShow + '"]').addClass(settings.selectedTagClass);
				}
				$(this).trigger("filterportfolio", [ tagToShow.substr(1) ]);
			});
		
			/* FILTERPORTFOLIO: pass in a class to show, all others will be hidden */
			$(this).bind("filterportfolio", function( e, classToShow ){
				if(classToShow == settings.allTag){
					$(this).trigger("show");
				}else{
					$(this).trigger("show", [ '.' + classToShow ] );
					$(this).trigger("hide", [ ':not(.' + classToShow + ')' ] );
				}
				if(settings.useHash){
					location.hash = '#' + classToShow;
				}
			});
			
			/* SHOW: show a single class*/
			$(this).bind("show", function( e, selectorToShow ){
				$(this).children(selectorToShow).animate(settings.show, settings.animationSpeed);
			});
			
			/* SHOW: hide a single class*/
			$(this).bind("hide", function( e, selectorToHide ){
				$(this).children(selectorToHide).animate(settings.hide, settings.animationSpeed);	
			});
			
			/* ============ Check URL Hash ====================*/
			if(settings.useHash){
				if(location.hash != '')
					$(this).trigger("filter", [ location.hash ]);
				else
					$(this).trigger("filter", [ '#' + settings.allTag ]);
			}
			
			/* ============ Setup Tags ====================*/
			if(settings.useTags){
				$(settings.tagSelector).click(function(){
					$('#lightGallery').trigger("filter", [ $(this).attr('href') ]);
					
					$(settings.tagSelector).removeClass('current');
					$(this).addClass('current');
				});
			}
		});
	}
})(jQuery);
// end portofolio
$('#lightGallery').filterable();

    