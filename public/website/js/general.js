// JavaScript Document XIENINE.COM
var _width= $(window).width();
var _height=$(window).height();

function hideall()
{
	
	
		
}


$(window).load(function() {
	
    $("#mcs_container").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"auto","yes","yes",10);
	$("#mcs_page").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"auto","yes","yes",10);
	$("#mcs_page2").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"auto","yes","yes",10);
	//$("#mcs_page3").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"auto","yes","yes",10);
	
	if (jQuery.browser.mobile == true) {
	$("#mcs_container").mCustomScrollbarMobile("vertical",200,5); 
	$("#mcs_page").mCustomScrollbarMobile("vertical",200,5); 
	$("#mcs_page2").mCustomScrollbarMobile("vertical",200,5); 
	
	}
	
	


	
 
 });
	
function showDiv(obj) {
    // If there are hidden divs left
	

 $(obj).each(function(index) {
        setTimeout(function(el) {
            el.show("fast");
        }, index * 100, $(this));
		
		//$("#mcs_container").mCustomScrollbar("update");
    });
	
		
}

function resizecontent()
{
	var c_width=$("#content").width();
	var c_height =$("#content").height();
	
	$("#mcs_container").css({'height':(c_height-40)+'px'});
	
	
	// resize main image
}
	
$(document).ready(function(){

	resizecontent();
	
$(".careers_post").click(function(){
	
	var gurl= $(this).attr('role');
	 
	
	if(gurl!="")
	{
		$('#careerdata').html('<span class="loading2">Loading...</span>');
		$.ajax({
		url: gurl,
		success: function(data) {
		$('#careerdata').html(data);
		 
		$("#mcs_page2").mCustomScrollbar("vertical",200,"easeOutCirc",1.05,"auto","yes","yes",10);
		Cufon.replace('h2' , { fontFamily: 'Ubuntu Light'}); 
		 Cufon.replace('h3' , { fontFamily: 'Ubuntu Light'});
		  window.location.hash = gurl;
		}
		});
	}
	
});



$('body').append('<div class="vlay"></div>');
$('.tip').tooltipsy();
/*$('.post_images a').click(function(e){
 e.preventDefault();
 var hre=$(this).attr("href");
 
 $.get(hre, function(data) {
	 
  $('.content_area').html(data);
  
 // alert('Load was performed.');
});

 
 
}); */


$(".peopleright a").click(function(e){
	 e.preventDefault();
	 var rel= $(this).attr('rel');

	if($(this).attr('rel')=='principal-architect')
	{
		$('.peoples_post h2').hide();	
	}
	else
	{
		$('.peoples_post h2').show();	
	}
	$('.peoples_post h2').each(function(index) {
		var atr= '.'+$(this).attr('data')+" li";
		var its='.'+$(this).attr('data')+" .alpha-"+rel;
		
	
		//alert($(its).length);
		if($(its).length==0)
		{
			$(this).hide();
		}
		else
		{
			$(this).show();	
		}
		//alert($(atr).length);
	 
	});
	 
 $(".peopleright a").removeClass("current");
 $(this).addClass("current");
 $(".peoples_post ul li").hide("fast");
  showDiv(".alpha-"+rel);
  $("#mcs_container").mCustomScrollbar("scrollTo","top");
  
  $('.container').css({'top':0});

 
});

$(".studios").click(function(){
	
	$(this).find('.stinfo').animate({  })
	
});

$(".studios").hover(function(e){
	 
 	 $(this).find('.stinfo').animate({opacity: .9})
	 
	},function(e){ 

	  $(this).find('.stinfo').animate({opacity: .8})
	});


$(".a2znav a").click(function(e){
 e.preventDefault();
 
 $(".a2znav a").removeClass("current");
 $(this).addClass("current");
 
 var rel= $(this).attr('rel');
 $(".projects_post ul li").hide("fast");
 //$(".alpha-"+rel).show("fast");
 $('.message').html("  ");
 $('.message').show();

 showDiv(".alpha-"+rel);
 
 
if ($(".alpha-"+rel).length==0)
{
	 //$(".projects_post ul li").show("fast");
	 $('.message').html("No projects in selected criteria. Showing all Projects");
	 $('.message').show();
	 showDiv(".projects_post ul li");
	 
}
 

 	
});

$(".a2znav a").hover(function(e){
	 e.preventDefault();
 	 $(this).animate({color: '#FF7300'})
	 
	},function(e){ 
	e.preventDefault();
 	 $(this).animate({color: '#666666'})
	});


$(".projectgallery  li").hover(function(){
	$(this).find('.anim')	.animate({
			top: '0px'
			}, 800,'easeOutExpo', function() {
			// Animation complete.
			});
		
		$(".info").hide("fast");
	$(this).find('.info').show("fast");		
			
	},function(){$(this).find('.anim').animate({
			top: '-100%'
			}, 800, 'easeOutExpo',function() {
			// Animation complete.
			});
			
			$(".info").hide("fast");
			
			});
			
			
				

$(".peoples_post ul li").hover(function(){
 		$(".peopleinfo").hide("fast");
	$(this).find('.peopleinfo').show("fast");		
			
	},function(){
		
 			$(".peopleinfo").hide("fast");
			
			});
			
			
			
$(".projects_post ul li").hover(function(){
	$(this).find('.anim')	.animate({
			top: '0px'
			}, 800,'easeOutExpo', function() {
			// Animation complete.
			});
		
		$(".info").hide("fast");
	$(this).find('.info').show("fast");		
			
	},function(){$(this).find('.anim').animate({
			top: '-100%'
			}, 800, 'easeOutExpo',function() {
			// Animation complete.
			});
			
			$(".info").hide("fast");
			
			});
			
			
	
$(".socialnav a").hover(function(){$(this).fadeTo('slow',1); }
,
function(){ $(this).fadeTo('slow',0.5);}
);	

$(".searchbtn").hover(function(){
$("#search").fadeIn("fast");
}
,
function(){ 
$("#search").fadeOut("fast");
}
);	


$(window).resize( update_layout );

	$("#menu .sf-menu a").click(function(e){
 		 e.preventDefault();
   		 var target = $(this).attr("href");
		 //alert(target);
		 
		 // $("#wrapper").fadeOut("slow");
		 $("#wrapper").animate({
			opacity: 0
			}, 2000, 'easeOutExpo', function() {
			// Animation complete.
			document.location.href=target;
			});
			
			
		
		 
 		 return false;		 

	});





 
});

function update_layout() {

var _width= $(window).width();
var _height=$(window).height();
var ct_width;
var ct_height;


resizecontent();

if(_width<700 || _height <300 )
{
	 
	$("#footer").fadeOut('fast');
}else
{
	$("#footer").fadeIn('slow');
}

/*
$("#menu").find("*").css({
	"font-size":"10px"
});
*/



	
	 
}