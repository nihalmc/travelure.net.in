$(document).ready(function(){ 

//$("#wrapper").css({position:"-100%"});


//$('#wrapper').fadeIn("slow");


			
 $(window).bind('load', function()
    {
      // alert("completed")
	   $(".loading").animate({
			opacity: '0'
			}, 700, 'easeOutExpo', function() {
			// Animation complete.
			
			$(this).remove();
			
			$("#wrapper").fadeIn("slow");
			 $(".vlay").fadeOut("slow");
			//	 $("#wrapper").animate({
			//top: '0px'
			//}, 2000, 'easeOutExpo', function() {
			// Animation complete.
			//});
			
			
			});
		
		var img_w=$("#main_image").width();
		var img_h=$("#main_image").height();
		var c_img_w=$(".column3").width();
		var c_img_h=$(".column3").height();
		
	 
	if(img_w<c_img_w)
	{
		//$("#main_image").attr("width","100%");		
		//$("#main_image").attr("height","auto")	;
	}
	 
	 if(img_h<c_img_h)
	{
		$("#main_image").attr("height","100%");		
		$("#main_image").attr("width","auto");	
	} 
			
    });
			
 });

 