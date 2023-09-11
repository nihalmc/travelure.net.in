<title>STAPATI | Architecture, Planning, Interiors, Calicut, Cochin, Bangalore, Chennai</title>
        <link rel="shortcut icon" href="img/icon.ico">
<?php
	require("connection.php");
	
		
	$result = mysql_query("SELECT * FROM `projects` where id='" . $_GET['id'] . "'");
		
	while($row = mysql_fetch_array($result))
	{
		$name = $row['name'];
		$title = $row['title'];
		$description = $row['description'];
		$status = $row['status'];
		
		$photo = $row['photo'];
		$_SESSION['photo'] = $photo;
	}
?>

<!DOCTYPE html><head>

<meta charset="UTF-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--
		Supersized - Fullscreen Slideshow jQuery Plugin
		Version : 3.2.7
		Site	: www.buildinternet.com/project/supersized
		
		Author	: Sam Dunn
		Company : One Mighty Roar (www.onemightyroar.com)
		License : MIT License / GPL License
	-->

	<head>

		
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />
		
		<link rel="stylesheet" href="slideshow1.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="slideshow2.css" type="text/css" media="screen" />
		
				<script type='text/javascript' src='js/js/jquery.js'></script>
<script type='text/javascript' src="js/jquery.easing.min.js"></script>


				

		 <link href="css/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">	

	

        

         <!-- JavaScript -->

    <script src="js/js/bootstrap.min.js"></script>
     <script src="js/bootstrap.min.js"></script>

    <script src="js/js/plugins.js"></script>	

    <script src="js/js/scripts.js"></script>

	<script src="js/js/helper.js"></script>

	<script src="scripts.js"></script>



<script src="js/js/supersized.3.2.7.min.js"></script>

<script type="text/javascript" src="js/slideshow/supersized.shutter.min.js"></script>

		



		

		
<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   3000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition
					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size & Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images		// Slideshow Images
					
															
                                                           	<?php
			$result = mysql_query("SELECT * FROM `project_images` where project_id='$_GET[id]' and category='L' order by sort_order");
														
			while($row = mysql_fetch_array($result))
			{
		?>
	
															{image : 'admin/<?php echo $row['photo']; ?>', title : 'Image Credit: Maria Kazvan'},
															
																<?php
			}
		?>
															
												],
												
												// Theme Options			   
					progress_bar			:	1,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
		    });		    
		</script>
		
	</head>
    
    	<style>
	@media (max-width: 767px) {
.navbar { background-color: rgba(256, 256, 256, 0.6);}
.navcontainer{ height:80px;}
	
	}
	
	</style>	
	
<body>
	
	<!--****************************************************************
	
	Logo and Image Sprites

	*****************************************************************-->

	<div class="navbar navbar-inverse navbar-fixed-top navcontainer" style="height:80px; background:url(images/headerbg.png) repeat !important;">
 <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

	<a href="home.php"><img class="logo"src="images/logo.png" /></a>
    </div>
    <div style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
			<div class="containericon"> 
			<ul id="navlist" class="nav navbar-nav">
						  <li id="practice"><a href="3_practice_about.php" title="Practice"></a></li>
						  <li id="projects"><a href="6_projects_all.php" title="Projects"></a></li>
						   <li id="news"><a href="11_news.php" title="Media"></a></li>
						  <li id="contact"><a href="12_contact_location.html" title="Contact us"></a></li>
						 <!-- <li id="home"><a href="index.html"></a></li>-->
				</ul> 
                </div>
			</div>
		</div>



<!--****************************************************************
	
	White Margin Adjustments

*****************************************************************-->
	
<!--<div class="adjustment">	</div>
<div class="adjustmenttwo">	</div>-->

	<!--Demo styles (you can delete this block)-->
	
	
	<div class="description">
     <?php
			$result = mysql_query("SELECT * FROM `projects` where id='$_GET[id]'");
														
			while($row = mysql_fetch_array($result))
			{
		?>
		
		<p class="name"><?php echo $row['name']; ?></p>
		<p class="location"><?php  echo $row['title']; ?></p>
        
          <?php
			}
		?>
	</div>
			
	<!--<div class="red">
		<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
		</div>
	</div>

	
	
	<a href="9_projects_commercial.php"><div class="previousproject"> < Back to Project</div><a>
	<a href="9_projects_commercial.php"><div class="nextproject">Back to Project > </div></a>-->



	<!--Thumbnail Navigation-->
	<div id="prevthumb"></div>
	<div id="nextthumb"></div>
	
	<!--Arrow Navigation-->
	<a id="prevslide" class="load-item"></a>
	<a id="nextslide" class="load-item"></a>
	
	<div id="thumb-tray" class="load-item">
		<div id="thumb-back"></div>
		<div id="thumb-forward"></div>
	</div>
	
	<!--Time Bar-->
	<!--<div id="progress-back" class="load-item">
		<div id="progress-bar"></div>
	</div>-->
	
	<!--Control Bar-->
	<div id="controls-wrapper" class="load-item">
		<div id="controls">
			
			<a id="play-button"><img id="pauseplay" src="img/pause.png"/></a>
		
			<!--Slide counter-->
			<!--<div id="slidecounter">
				<span class="slidenumber"></span> / <span class="totalslides"></span>
			</div>-->
			
			<!--Slide captions displayed here-->
			<!--<div id="slidecaption"></div>-->
			
			<!--Thumb Tray button-->
			<!--<a id="tray-button"><img id="tray-arrow" src="img/button-tray-up.png"/></a>-->
			
			<!--Navigation-->
			<ul id="slide-list"></ul>
			
		</div>
	</div>
</body>
</html>
