/*
Themeic Framework Scripts File
Author: Quentin Themeic

*/

jQuery(document).ready(function($){

	$('a.accordion-toggle').click(function(){
		$thisid = $(this).attr('href');
		$detailsid = $thisid+'-details';
		if ($(this,'i.active').length) {
			$(this).find('i').removeClass('active').addClass('inactive');
		}
		if ($($thisid+'.in').length) {
			$($detailsid).stop ( true , false ).fadeOut( 500 );
		} else {
			$('a.accordion-toggle').each(function(index) {
				$('.package-details-container').stop ( true , false ).fadeOut( 500 );
				$(this).parent().find('i').removeClass('active').addClass('inactive');
			});
			$($detailsid).stop ( true , false ).fadeIn( 500 );
			$(this).find('i').removeClass('inactive').addClass('active');
		}
		
	});

	$('.social-icons li').each(function(index) {
	$(this).addClass('rotate');
	});

	$('.ie7 .navbar-inner, .ie8 .navbar-inner').each(function(index) {
	$(this).css({'background' : 'transparent'});
	$(this).css({'background' : 'url(../../img/trans-60.png)'});
	});


});