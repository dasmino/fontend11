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

	
	<!-- Load CSS -->
<!-- 	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/root/";?>css/bootstrap.min.css"> -->
  	<!-- Page level plugin styles START -->
 <!--  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/fancybox/source/jquery.fancybox.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/slider-layer-slider/css/layerslider.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/rateit/src/rateit.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>plugins/toastr/toastr.min.css">
  	<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/animation.css"> -->
  	<!-- Page level plugin styles END -->


	<?php echo ($this->appendCss!='') ? $this->appendCss : '';?>
	<?php echo ($this->_appendPluginsModCss!='') ? $this->_appendPluginsModCss : '';?>

	<!-- Theme styles START -->
	
	<!-- <link href="<?php echo base_url()."themes/default/public/";?>css/global/components.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/default/public/";?>css/layout/style.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/default/public/";?>css/pages/style-shop.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."themes/default/public/";?>css/pages/style-layer-slider.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/default/public/";?>css/layout/style-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()."themes/default/public/";?>css/layout/themes/red.css" rel="stylesheet" id="style-color">
	<link href="<?php echo base_url()."themes/default/public/";?>css/custom.css" rel="stylesheet"> -->
	<!-- Theme styles END -->
	<!--<link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/style.min.css">-->

	<link href="<?php echo base_url()."themes/default/public/";?>css/animate.css" rel="stylesheet"/>
    <link href="<?php echo base_url()."themes/default/public/";?>css/font-awesome.css" rel="stylesheet"/>
    <link href="<?php echo base_url()."themes/default/public/";?>css/uikit.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url()."themes/default/public/";?>css/jquery.mmenu.all.css">
    <link href="<?php echo base_url()."themes/default/public/";?>css/style.css" rel="stylesheet"/>



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
<?php //dd($_web['ava']); ?>

<body class="wrapper">
	<?php require_once "header.php"; ?>
	<?php 
	    if ($_web['uri']['mod']=='home') {
	    	echo "<!-- BEGIN SLIDER -->";
	        // require_once "slider.php";
	        echo "<!-- END SLIDER -->";
	    }
	 ?>
    <!-- Page Content -->
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
	<script type="text/javascript" src="<?php echo base_url()."themes/default/public/root/";?>js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."themes/default/public/root/";?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."themes/default/public/root/";?>js/bootstrap.min.js"></script>
<!-- 	<script src="<?php echo base_url()."themes/default/public/";?>js/layout/scripts/back-to-top.js" type="text/javascript"></script> -->
	<script src="<?php echo base_url()."themes/default/public/";?>plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/toastr/toastr.min.js"></script>
    <!-- END CORE PLUGINS -->
	<!-- Cấm Xóa -->
	
    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='<?php echo base_url()."themes/default/public/";?>plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->
	
    <!-- BEGIN LayerSlider -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/slider-layer-slider/js/greensock.js" type="text/javascript"></script><!-- External libraries: GreenSock -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/slider-layer-slider/js/layerslider.transitions.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/slider-layer-slider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- LayerSlider script files -->
    <script src="<?php echo base_url()."themes/default/public/";?>plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script><!-- LayerSlider script files -->
   <!--  <script src="<?php echo base_url()."themes/default/public/";?>js/pages/scripts/layerslider-init.js" type="text/javascript"></script> -->
    <!-- END LayerSlider -->

	
	<!-- Cấm Xóa -->
    <script src="<?php echo base_url()."themes/default/public/";?>js/layout/scripts/layout.js" type="text/javascript"></script>
	<!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- <script src="<?php echo base_url()."themes/default/public/";?>js/product.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url()."themes/default/public/";?>js/product.new.js" type="text/javascript"></script>
    <?php echo ($this->appendJs!='') ? $this->appendJs : '';?>
	<?php echo ($this->_appendPluginsModJs!='') ? $this->_appendPluginsModJs : '';?>
	<script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>js/script.js"></script>
	<?php echo ($this->_appendJs!='') ? $this->_appendJs : '';?>
	<script>
	$(function(){
		Layout.init();    
		Layout.initTouchspin();
		Product.init();
	});
	</script>

	    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()."themes/default/public/";?>js/uikit.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()."themes/default/public/";?>js/animate.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>js/jquery.mmenu.min.all.js"></script>
    <script src="<?php echo base_url()."themes/default/public/";?>js/ryk.js"></script>



	<!-- Cấm Xóa -->
	    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."themes/default/public/";?>source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."themes/default/public/";?>source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."themes/default/public/";?>source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="<?php echo base_url()."themes/default/public/";?>source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
</body>
</html>

<script>
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
</script>
    <script>
    $(document).ready(function(){

        $('ul.tabs li').click(function(){
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#"+tab_id).addClass('current');
        })

    })
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/593d88b5b3d02e11ecc69509/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->