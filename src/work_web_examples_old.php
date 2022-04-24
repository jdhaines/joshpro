<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>JoshPro - Web Design Examples</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="Shortcut Icon" href="/favicon.ico">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body id="work">
	<div class="container">
	<?php require_once('header.php'); ?>
	<div class="bigcontactbox greygradientcontact boxtype">
			<div class="corner TL"></div>
			<div class="corner TR"></div>
			<div class="corner BL"></div>
			<div class="corner BR"></div>
            <h1>Past and Present Web Design Examples</h1><br />
            <div class="slider-wrapper">
				<div id="slider">
                	<a href="work_rmhc.php"><img src="images/rmhc.jpg" alt="Ronald McDonald House Charities of Michiana" data-thumb="images/rmhc_thumb.jpg" /></a>
                    <a href="work_conun.php"><img src="images/conun.jpg" alt="Construction Unlimited" data-thumb="images/conun_thumb.jpg" /></a>
                    <a href="work_good4som.php"><img src="images/good4som.jpg" alt="Good4Something.com" data-thumb="images/good4som_thumb.jpg" /></a>
                    <a href="work_bloggo.php"><img src="images/bloggo.jpg" alt="Blog at JoshHaines.com" data-thumb="images/bloggo_thumb.jpg" /></a>
                    <a href="work_empics.php"><img src="images/empics.jpg" alt="EmilyPictures.com" data-thumb="images/empics_thumb.jpg" /></a>
                    <a href="work_sbsd.php"><img src="images/sbsd.jpg" alt="SouthBendSD.com" data-thumb="images/sbsd_thumb.jpg" /></a>
                    <a href="work_westside.php"><img src="images/westside.jpg" alt="WestsideRemodel-Construction.com" data-thumb="images/westside_thumb.jpg" /></a>
                    <a href="work_sjvrp.php"><img src="images/sjvrp.jpg" alt="SJVRP.com" data-thumb="images/sjvrp_thumb.jpg" /></a>
                    
                </div>
            </div>
            <p id="bottomtext">*Click the large images for more information about each project*</p>
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