/* 2/21/2011 */
jQuery.noConflict();
var featureScrollID, diffBetwnScrollDivs;
var curImgNum=0;
var totalImages = 0;
//var numOfFlash = 0;

function changeBG(id){

	jQuery('.visual_wrap').children().eq(curImgNum).hide();

	jQuery('#background_change').children().eq(curImgNum).removeClass('active');
    curImgNum = id - 1;
    rotateImage();     

}

jQuery(document).ready(function(){

		jQuery("ul.top_nav > li, ul.top_nav li li").hover(
			function(){
				jQuery(this).children('ul').stop(true,true).slideDown(); jQuery(this).addClass('slctNav')
			},
			function(){
				jQuery(this).children('ul').slideUp(); jQuery(this).removeClass('slctNav')
			}
		);
		
		/*rotating ramdom image code */
		if(jQuery('.visual_wrap').hasClass('homeWrap')){
			totalImages=jQuery('.visual_wrap').children().length;
			 //alert(totalImages)
			curImgNum=Math.floor(Math.random()*totalImages);// - numOfFlash;
			//curImgNum = 5;
			rotateImage();    
			setInterval('rotateImage()',80000);
		
		}

           
		//keep it static for divisionhome
		if(jQuery('.visual_wrap').hasClass('division_home1')){
			chkImgLoad(0);
		}

		featureDlWidth=jQuery('#add_contIn ul li:first').outerWidth()*jQuery('ul.collection_detail_list li').length;
		diffBetwnScrollDivs=featureDlWidth-jQuery('.collection_detailIn').width(); //alert(diffBetwnScrollDivs);
		
		if(jQuery('#add_contIn ul').length > 0){
			featureDlWidth=jQuery('#add_contIn ul li:first').outerWidth()*jQuery('#add_contIn ul li').length;
			diffBetwnScrollDivs=featureDlWidth-jQuery('#add_contIn').width(); //alert(diffBetwnScrollDivs);
			
			total=jQuery('#add_contIn ul li').length;
			jQuery('#add_contIn ul').css('width',featureDlWidth);
			jQuery('#add_cont .butn_pre, #add_cont .butn_next').click(
				function(){
					if(jQuery(this).is('#add_cont .butn_next')){
						scrollFeature(-1,238,total);}
					else
						scrollFeature(1,238,total);
				},
				function(){}
			);
		}
		
		
		
		
		jQuery("input.src_butn").hover(
			function(){jQuery(this).css('background-position','left -20px')},
			function(){jQuery(this).css('background-position','left top')}
		);

	/*     product feature navigation   */
		 
	    jQuery('ul.tab_list').children().removeClass('slctTab');
	    
	    var url = window.location.href;
		url = url.split("product.jsp");
	    defVal = true;
	    
	    //loop through all link and find what index link is at
	    jQuery('ul.tab_list li a').each(function(index) {
	    	//just take whats after the page variable in url	
	        temp = jQuery(this).attr('href').split("product.jsp");
	      	if(temp[1] == url[1]){
				jQuery('ul.tab_list').children().eq(index).addClass('slctTab');
	           	defVal = false;
		 	}
	  	});
	
	/*    end product feature navigation   */
				
});


function rotateImage(){
	
	var prev=curImgNum;

  	if((curImgNum + 1) >= totalImages){
      	curImgNum = 0;
      	id="globalhome" + (curImgNum);

  	}else{
      	curImgNum=curImgNum+1;
    	id="globalhome" + (curImgNum);

  	}
    jQuery('.visual_wrap').children().eq(prev).hide();
    jQuery('#background_change').children().eq(prev).removeClass('active');
	jQuery('#buttons').children('.google-button').hide();
	jQuery('body').attr('id',id);
	jQuery('.visual_wrap').children().eq(curImgNum).show();
	jQuery('#buttons').children('.google-button').eq(curImgNum).show();
	jQuery('#background_change').children().eq(curImgNum).addClass('active');
	 
}

function chkImgLoad(id){
			jQuery('#visual_wrap').children().eq(id).load(function() {
			// Remove attributes in case img-element has set width and height
		
			jQuery(this).removeAttr("width").css({ width: ""}); // Remove css dimensions as well
			
			var imgW = this.width;
			var winW = jQuery(window).width();

			if(imgW > winW){
				var a=(imgW - winW)/2;
				jQuery(this).css('left', -a + 'px').css('border', '1px transparent');
			}
			else{
				var a=(winW-imgW)/2;
				jQuery(this).css('left', a+'px').css('border', '1px transparent');
			}
			
		})
		.each(function(){
			if(this.complete || (jQuery.browser.msie && parseInt(jQuery.browser.version) == 6))
				jQuery(this).trigger("load");
		});        
}

var curPos=0;
function scrollFeature(direction,width,total){
	var total_width=width*total;
	if(direction == -1){
		if((total_width-(width*4)) > -curPos){
			curPos=curPos-width;
			jQuery('#add_contIn ul').animate({'left' : curPos+'px'});
		}
	}
	else{
		if(-curPos > 0){
			curPos=curPos+width;
			jQuery('#add_contIn ul').animate({'left' : curPos+'px'});
		}
	}
	
}




