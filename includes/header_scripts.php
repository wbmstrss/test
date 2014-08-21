<?php require("definitions.php"); ?>  

  <link href="<?php echo ROOT_DIR; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>/css/style.css" type="text/css" />

<!-- nivo slider -->
  <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>/js/nivo-slider/nivo-slider.css" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo ROOT_DIR; ?>/js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
  
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
	    effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
	    animSpeed: 500,                 // Slide transition speed
	    pauseTime: 9500,                // How long each slide will show
	    startSlide: 0,                  // Set starting Slide (0 index)
	    directionNav: false,             // Next & Prev navigation
	    controlNav: false,               // 1,2,3... navigation
	    controlNavThumbs: false,        // Use thumbnails for Control Nav
	    pauseOnHover: false,             // Stop animation while hovering
	});
});
</script>
  

<!-- google analytics -->  
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-43058845-1', 'samumed.com');
ga('send', 'pageview');
</script>