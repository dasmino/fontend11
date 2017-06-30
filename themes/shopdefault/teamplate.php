<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo ($this->_title!='') ? $this->_title : '<title>'.$_web['settings']['seo_title'].'</title>'."\n";?>
	<?php echo ($this->_description!='') ? $this->_description : '<meta name="description" content="'.$_web['settings']['seo_description'].'">'."\n";?>
	<?php echo ($this->_keywords!='') ? $this->_keywords : '<meta name="keywords" content="'.$_web['settings']['seo_keywords'].'">'."\n";?>
	<?php echo ($this->_author!='') ? $this->_author : ''."\n";?>
	<link rel="shortcut icon" href="<?php echo (isset($_web['settings']['icon']) && $_web['settings']['icon']) ? $_web['base_url_cdn'].$_web['settings']['icon'] : '';?>" type="image/x-icon" />

	
	<!-- Fonts START -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
	<!-- Fonts END -->


	<!-- Load CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/root/";?>css/bootstrap.min.css">
  	<!-- Page level plugin styles START -->
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/fancybox/source/jquery.fancybox.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/slider-layer-slider/css/layerslider.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/rateit/src/rateit.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>plugins/toastr/toastr.min.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>css/animation.css">
  	<!-- Page level plugin styles END -->


	<?php echo ($this->appendCss!='') ? $this->appendCss : '';?>
	<?php echo ($this->_appendPluginsModCss!='') ? $this->_appendPluginsModCss : '';?>

	<!-- Theme styles START -->
	
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/global/components.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/layout/style.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/pages/style-shop.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/pages/style-layer-slider.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/layout/style-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/layout/themes/red.css" rel="stylesheet" id="style-color">
	<link href="<?php echo base_url()."themes/shopdefault/public/";?>css/custom.css" rel="stylesheet">
	<!-- Theme styles END -->
	<!--<link rel="stylesheet" href="<?php echo base_url()."themes/shopdefault/public/";?>css/style.min.css">-->

	<?php echo ($this->_appendCss!='') ? $this->_appendCss : '';?>
	
  	<script type="text/javascript">
    	var baseUrl =  '<?php echo base_url();?>';
  	</script>
  	<!-- TRACKING GOOGLE -->
 	<?php 
  	if (isset($_web['settings']['google_analytics']) && $_web['settings']['google_analytics']!="") {
		echo "<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', '".$_web['settings']['google_analytics']."', 'auto');
			  ga('send', 'pageview');

			</script>";
  	}
   	?>
   <!-- END TRACKING GOOGLE -->

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="ecommerce">
	<?php require_once "header.php"; ?>
	<?php 
	    if ($_web['uri']['mod']=='home') {
	    	echo "<!-- BEGIN SLIDER -->";
	        require_once "slider.php";
	        echo "<!-- END SLIDER -->";
	    }
	 ?>
    <!-- Page Content -->
	chung toi la cong ty thien viet!
    <div class="main">
	    <div class="container">

				<?php 
					require_once DIR_THEME.$_web['theme']['forder_theme'].'/modules/'. $_web['uri']['mod'] . "/view/" . $this->_fileView . ".php";
				?>

		</div>
	</div>
    <!-- /.container -->
    <?php require_once "footer.php"; ?>
    <!-- Cấm Xóa -->
	<script type="text/javascript" src="<?php echo base_url()."themes/shopdefault/public/root/";?>js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."themes/shopdefault/public/root/";?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."themes/shopdefault/public/root/";?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."themes/shopdefault/public/";?>js/layout/scripts/back-to-top.js" type="text/javascript"></script>
	<script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/toastr/toastr.min.js"></script>
    <!-- END CORE PLUGINS -->
	<!-- Cấm Xóa -->
	
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='<?php echo base_url()."themes/shopdefault/public/";?>plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
	
    <!-- BEGIN LayerSlider -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/slider-layer-slider/js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/slider-layer-slider/js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>js/pages/scripts/layerslider-init.js" type="text/javascript"></script>
    <!-- END LayerSlider -->

	
	<!-- Cấm Xóa -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>js/layout/scripts/layout.js" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url()."themes/shopdefault/public/";?>plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- <script src="<?php echo base_url()."themes/shopdefault/public/";?>js/product.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url()."themes/shopdefault/public/";?>js/product.new.js" type="text/javascript"></script>
    <?php echo ($this->appendJs!='') ? $this->appendJs : '';?>
	<?php echo ($this->_appendPluginsModJs!='') ? $this->_appendPluginsModJs : '';?>
	<script type="text/javascript" src="<?php echo base_url()."themes/shopdefault/public/";?>js/script.js"></script>
	<?php echo ($this->_appendJs!='') ? $this->_appendJs : '';?>
	<script>
	$(function(){
		Layout.init();    
		Layout.initTouchspin();
		Product.init();
	});
	</script>
	<!-- Cấm Xóa -->
</body>
</html>

