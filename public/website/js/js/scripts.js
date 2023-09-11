/*
Themeic Framework Scripts File
Author: Quentin Themeic

*/

jQuery(document).ready(function($){


	
	$('.vcenter').each(function(index) {
		$thisheight = $(this).height();
		$parentheight = $(this).parent().height();
		$(this).animate({'marginTop' : (($parentheight - $thisheight)/2)+'px'}, 500);
	});


      
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });

	  
	  
// 	$('#slider').nivoSlider();

	$('.themeic-tooltip').tooltip();
	$('.popover').popover();
	$('.popover-bottom').popover({placement : 'bottom'});
	$('.typeahead').typeahead();
	$('body').find('.widget').addClass('well nav');
	$('.comment-reply-link, .comment-edit-link').each(function(index) {
	$(this).addClass('label label-info');
	});
	$('#cancel-comment-reply-link').each(function(index) {
	$(this).addClass('btn btn-primary');
	});
	$('#author-details h5 a').each(function(index) {
		$thistitle = $(this).attr('title');
		$(this).attr('rel', 'tooltip');
		$(this).addClass('themeic-tooltip');
		$(this).attr('data-original-title', $thistitle);
		$(this).attr('title', '');
		$(this).tooltip();
	});
	$('.widget').find('.widgettitle').addClass('nav-header');
	$('#wp-calendar').find('caption').addClass('nav-header').css({'text-align' : 'left', 'display' : 'table-caption'});
	$('.widget').find('ul').addClass('nav nav-list');
	$('.pagination').find ('i').addClass('active');
	$('.pagination').find ('a i').removeClass('active');
	$('.accordion, .accordion-body, .accordion-group').find('> p').remove();
	$('.widget_search').removeClass('well');
	$('.widget_search form fieldset div .well').css({'margin-bottom' : 0+'px'});
	$('#wp-calendar tbody td a').each(function(index) {
		$thistitle = $(this).attr('title');
		$(this).attr('data-content', $thistitle);
		$(this).attr('title', '');
		$(this).attr('rel', 'popover');
		$(this).attr('data-original-title', 'On This Day');
		$(this).popover({
		placement : 'left'
		});
	});
	
	$('.textwidget').each(function(index) {
		$thistext = $(this).text();
			if ($thistext == "") {
				$(this).html('<p class="alert" style="margin-bottom : 0px;">Please add some content to this text widget</p>');
			}
	});
});