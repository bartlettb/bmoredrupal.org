(function($) {
new WOW().init();
 $(document).ready(function(){
	 $('#header').height($(window).height()+'px');
	 $('#block-block-1').height($(window).height()+'px'); 
	 var vid = document.getElementById("videobg");
	vid.playbackRate = 0.5;
 });	 
 $(window).load(function(){
		var sponsors_selectors = $('.sponsors-filter li a');
		var sponsors = $('.sponsors-items');
		sponsors.isotope({
			itemSelector : '.sponsors-item',
			layoutMode : 'fitRows'
		});
		
		$(sponsors_selectors).click(function(){
			$(sponsors_selectors).removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			sponsors.isotope({ filter: selector });
			return false;
		});
	});
	$(window).scroll(function(){
    var $nav = $('#block-system-main-menu'); 
    if ($('html').scrollTop() > 0) {
            $nav.stop().animate({
                opacity:'0'
            });
    }else{
            $nav.stop().animate({
                opacity:'1'
            });
        }  
});
})(jQuery);
 

