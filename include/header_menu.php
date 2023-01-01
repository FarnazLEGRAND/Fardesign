<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <html>
	<head>
	
	<title><?php echo $titre; ?></title>
		<meta name="description" content="<?php echo $description; ?>" />
	<div class="f slp"></div>


	<link href="favicon.ico" type="image/vnd.microsoft.icon" rel="icon" />
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" type="text/css" href="theme/style1.css"  />
		
		<link href="theme/jquery.mCustomScrollbar.css" rel="stylesheet" />
		
	
		
		<script type="text/javascript"  src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript"  src="js/jQueryRotate.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
   	    <script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    	<script src="js/jquery.imagesloaded.min.js" type="text/javascript"></script>
  	    <script src="js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
    	<script src="js/spin.min.js" type="text/javascript"></script>
    	<script src="js/portfolio.js" type="text/javascript"></script>


    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		
			<script type="text/javascript">
		/* tamame samte rast neveshteha orginal */
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					set_width:false, /*optional element width: boolean, pixels, percentage*/
					set_height:false, /*optional element height: boolean, pixels, percentage*/
					horizontalScroll:false, /*scroll horizontally: boolean*/
					scrollInertia:950, /*scrolling inertia: integer (milliseconds)*/
					mouseWheel:true, /*mousewheel support: boolean*/
					mouseWheelPixels:"auto", /*mousewheel pixels amount: integer, "auto"*/
					autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
					autoHideScrollbar:false, /*auto-hide scrollbar when idle*/
					scrollButtons:{ /*scroll buttons*/
						enable:false, /*scroll buttons support: boolean*/
						scrollType:"continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
						scrollSpeed:"auto", /*scroll buttons continuous scrolling speed: integer, "auto"*/
						scrollAmount:40 /*scroll buttons pixels scroll amount: integer (pixels)*/
					},
					advanced:{
						updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
						updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
						autoExpandHorizontalScroll:false, /*auto-expand width for horizontal scrolling: boolean*/
						autoScrollOnFocus:true, /*auto-scroll on focused elements: boolean*/
						normalizeMouseWheelDelta:false /*normalize mouse-wheel delta (-1/1)*/
					},
					contentTouchScroll:true, /*scrolling by touch-swipe content: boolean*/
					callbacks:{
						onScrollStart:function(){}, /*user custom callback function on scroll start event*/
						onScroll:function(){}, /*user custom callback function on scroll event*/
						onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
						onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
						onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
						onTotalScrollBackOffset:0, /*scroll begin reached offset: integer (pixels)*/
						whileScrolling:function(){} /*user custom callback function on scrolling event*/
					},
					theme:"light" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
				});
			});
		})(jQuery); /*fin de page galeri ecrie */
			

			
			
				/* panjere narenji accueil */
				$(document).ready(function(){
				$("#right").hover(function(){
				$(this).animate({'width':'250px'},2000);
				$("#menu1").animate({'width':'270px'},2000);
				$('#right img').animate({'width':'64px'},2000);
				});
				
				$("#right").mouseleave(function(){
					$(this).animate({'width':'16px'},1500);
					$("#menu1").animate({'width':'0px'},1500);
					$('#right img').animate({'width':'0px'},1500);
				});
				
				$("#design").click(function(){
					$("#right").animate({'width':'250px'},2000);
					$("#menu1").animate({'width':'270px'},2000);
					$('#right img').animate({'width':'70px'},2000);
				});
			
			
			
				$("#cube").rotate({animateTo:360});
				
				$("#img_left").mouseenter(function(){
				$(this).css({
				'transform':'perspective(362px) rotateX(360deg) rotateY(-220deg) rotateZ(0deg) translateZ(-40px)',
				'transform-style': 'preserve-3d'
			
				});
				});	
				$("#img_left").mouseleave(function(){
				$(this).css({
				'transform':'perspective(300px) rotateX(360deg) rotateY(180deg) rotateZ(0deg)',
				'transform-style': 'preserve-3d'
				});
				});
			});
			/* fin panjere narenji accueil */
			
	
			 
			 /* interieur scorere*/
			 	(function($){
			$(window).load(function(){
				$("#content_interieur").mCustomScrollbar({
					set_width:false, /*optional element width: boolean, pixels, percentage*/
					set_height:false, /*optional element height: boolean, pixels, percentage*/
					horizontalScroll:false, /*scroll horizontally: boolean*/
					scrollInertia:950, /*scrolling inertia: integer (milliseconds)*/
					mouseWheel:true, /*mousewheel support: boolean*/
					mouseWheelPixels:"auto", /*mousewheel pixels amount: integer, "auto"*/
					autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
					autoHideScrollbar:false, /*auto-hide scrollbar when idle*/
					scrollButtons:{ /*scroll buttons*/
						enable:false, /*scroll buttons support: boolean*/
						scrollType:"continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
						scrollSpeed:"auto", /*scroll buttons continuous scrolling speed: integer, "auto"*/
						scrollAmount:40 /*scroll buttons pixels scroll amount: integer (pixels)*/
					},
					advanced:{
						updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
						updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
						autoExpandHorizontalScroll:false, /*auto-expand width for horizontal scrolling: boolean*/
						autoScrollOnFocus:true, /*auto-scroll on focused elements: boolean*/
						normalizeMouseWheelDelta:false /*normalize mouse-wheel delta (-1/1)*/
					},
					contentTouchScroll:true, /*scrolling by touch-swipe content: boolean*/
					callbacks:{
						onScrollStart:function(){}, /*user custom callback function on scroll start event*/
						onScroll:function(){}, /*user custom callback function on scroll event*/
						onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
						onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
						onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
						onTotalScrollBackOffset:0, /*scroll begin reached offset: integer (pixels)*/
						whileScrolling:function(){} /*user custom callback function on scrolling event*/
					},
					theme:"light" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
				});
			});
		})(jQuery);
		
		
		/*galerie */
		(function($){
			$(window).load(function(){
				$("#gallery").mCustomScrollbar({
					set_width:false, /*optional element width: boolean, pixels, percentage*/
					set_height:false, /*optional element height: boolean, pixels, percentage*/
					horizontalScroll:true, /*scroll horizontally: boolean*/
					scrollInertia:950, /*scrolling inertia: integer (milliseconds)*/
					mouseWheel:true, /*mousewheel support: boolean*/
					mouseWheelPixels:"auto", /*mousewheel pixels amount: integer, "auto"*/
					autoDraggerLength:true, /*auto-adjust scrollbar dragger length: boolean*/
					autoHideScrollbar:false, /*auto-hide scrollbar when idle*/
					scrollButtons:{ /*scroll buttons*/
						enable:false, /*scroll buttons support: boolean*/
						scrollType:"continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
						scrollSpeed:"auto", /*scroll buttons continuous scrolling speed: integer, "auto"*/
						scrollAmount:40 /*scroll buttons pixels scroll amount: integer (pixels)*/
					},
					advanced:{
						updateOnBrowserResize:true, /*update scrollbars on browser resize (for layouts based on percentages): boolean*/
						updateOnContentResize:false, /*auto-update scrollbars on content resize (for dynamic content): boolean*/
						autoExpandHorizontalScroll:false, /*auto-expand width for horizontal scrolling: boolean*/
						autoScrollOnFocus:true, /*auto-scroll on focused elements: boolean*/
						normalizeMouseWheelDelta:false /*normalize mouse-wheel delta (-1/1)*/
					},
					contentTouchScroll:true, /*scrolling by touch-swipe content: boolean*/
					callbacks:{
						onScrollStart:function(){}, /*user custom callback function on scroll start event*/
						onScroll:function(){}, /*user custom callback function on scroll event*/
						onTotalScroll:function(){}, /*user custom callback function on scroll end reached event*/
						onTotalScrollBack:function(){}, /*user custom callback function on scroll begin reached event*/
						onTotalScrollOffset:0, /*scroll end reached offset: integer (pixels)*/
						onTotalScrollBackOffset:0, /*scroll begin reached offset: integer (pixels)*/
						whileScrolling:function(){} /*user custom callback function on scrolling event*/
					},
					theme:"light" /*"light", "dark", "light-2", "dark-2", "light-thick", "dark-thick", "light-thin", "dark-thin"*/
				});
			});
			
			
		})(jQuery);
		/*fin galeri */
		
		
		/* function baraye avaz shodane axs interieur */
					   $(function(){  
				  setInterval(function(){  
					 $(".slideshow ul").animate({marginLeft:-20},800,function(){  
						$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));  
					 })  
				  }, 1500);  
			   });
			
			/* fin scorere interieur*/
			
			
		
		
		
		
		/*sedie design */
	$(document).ready(function(){
		ch1();
		
		function init(){
			$("#dos").css({'height':'0px', 'bottom':'0px'});
			$("#dos1").css({'height':'0px', 'bottom':'0px'});
			$("#ass").css('width','0px');
			$("#pied").css('height','0px');
			$("#pied1").css('height','0px');
			$("#dov").css('width','0px');
			$("#dov1").css('width','0px');
			
		}
		
		function ch3(){
		$("#dos1").animate({height:'199px', bottom:'100px'},3000,function(){
																			$("#ass").animate({width:"84px"},1500,function(){
																				$("#pied1").animate({height:"85px"},1500, function(){init();ch1();});
																			});
																		}
		);
		
		}
		
		
			function ch2(){
		$("#dos").animate({height:'199px', bottom:'100px'},4000,function(){
																			$("#dos1").animate({height:'199px', bottom:'100px'},1500,function(){
																				$("#ass").animate({width:"84px"},1500,function(){
																				$("#dov").animate({width:"84px"},1500,function(){
																				$("#dov1").animate({width:"84px"},1500, function(){init();ch3();});
																				});
																			});
																			});
																		}
		);
		
		}
		
		
				function ch1(){
		$("#dos").animate({height:'199px', bottom:'100px'},3000,function(){
																			$("#ass").animate({width:"82px"},1500,function(){
																				$("#pied").animate({height:"85px"},1500, function(){init();ch2();});
																			});
																		}
		);
		
		}
			/* sedie design */
			
			
			/* sur menu cacher */
	$(".s_menu").click(function(){
					 if($(".s_menu > ul").hasClass('cache')){
					  $(".s_menu > ul").removeClass('cache');
					 $(".s_menu > ul").addClass('show');
					 }
					 else{
					   $(".s_menu > ul").removeClass('show');
					 $(".s_menu > ul").addClass('cache');
					 }
				});
				
		/* fin sur menu cacher */

		
	});	
	

	
	

	
	
	
	
	



 	
			</script>
		
		
		
	
	</head>
	<body>

		
			<div id="head">
				<div id="im"><a href="accueil.php"><img src="img/project-body-sit.png"alt=""/></a></div>
			</div>
			
			<div id="menu">
				<ul>
				<li id="accueil"><a href="accueil.php">ACCUEIL</a></li>
				<li id="design"><a href="design.php" onclick="document.getElementById('menu2').style.display='block';">DESIGN</a></li>				
				<li id="creation"><a href="creation.php" onclick="document.getElementById('menu2').style.display='block';">CREATION</a></li>
				<li id="bio"><a href="bio.php" onclick="document.getElementById('menu2').style.display='block';">BIO</a></li>	
				<li id="Contact"><a href="contact.php">CONTACT</a></li>			
				</ul>
					
			</div>
		
			
     