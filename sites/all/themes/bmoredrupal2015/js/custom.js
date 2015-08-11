(function($) {
new WOW().init();
 $(document).ready(function(){
   var vid = document.getElementById("videobg");
   if (typeof(vid) != "undefined" && vid !== null) {
	 $('.front #header').height($(window).height()+'px');
	 $('.front #block-block-1').height($(window).height()+'px'); 
	vid.playbackRate = 0.2;
   }	
   
   $('.block.block-system.block-menu ul').before('<span class="fa fa-list-ul"></span>');
   $('.block.block-system.block-menu span.fa').click(function(){
	  $(this).next().slideToggle( "slow" ); 
   });
	
 });	 
 $(window).load(function(){
	$('.sponsors-block .view-content h3').each(function(){
	  $(this).addClass($(this).next().attr('class'));
	});
	
	$('.sponsors-block .sponsors-items').before('<ul class="sponsors-filter"></ul>');
	$('.sponsors-filter').append('<li><a href="#" data-filter="*" class="active">All sponsors</a></li>');
	$('.sponsors-block .view-content h3').each(function(){
	  var item = $(this).next().attr('class').split(' ');
	  var itemText = $(this).text().split(' ');
	  $('.sponsors-filter').append('<li><a href="#" data-filter=".'+item[0]+'">'+itemText[0]+'</a></li>');
	});
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
 

