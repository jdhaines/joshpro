<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>JoshPro - Past Work</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" href="/favicon.ico">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body id="home">
	<div class="container">
	<?php require_once('header.php'); ?>
	<div class="bigcontactbox greygradientcontact boxtype">
			<div class="corner TL"></div>
			<div class="corner TR"></div>
			<div class="corner BL"></div>
			<div class="corner BR"></div>
            <div class="slider-wrapper">
				<div id="slider">
                	<a href="work_rmhc.php"><img src="images/rmhc.jpg" alt="Ronald McDonald House Charities of Michiana" data-thumb="images/rmhc_thumb.jpg" /></a>
                    <a href="#"><img src="images/conun.jpg" alt="Construction Unlimited" data-thumb="images/conun_thumb.jpg" /></a>
                </div>
            </div>
          <script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({
   				effect: 'fade',
				controlNavThumbs:true,
				pauseOnHover: true,
				animSpeed: 250, 
  				pauseTime: 2000, 
				directionNav: false,
				});
			});
		</script>
        </div>
	<!--End container div--></div>

</body>
</html>