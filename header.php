<?php 
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<?php 
	// Get the favicon.
	$favicon = IMAGES . '/images/icons/favicon.png';

	// Get the custom touch icon.
	$touch_icon = IMAGES . '/images/icons/apple-touch-icon-152x152-precomposed.png';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicon and Apple Icons -->
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $touch_icon; ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container full-wrap">
	<!-- HEADER -->
	<header class="site-header" role="banner">
		
        <div class="row top-logo top">
           <div class="col-md-12">
              
                <div class="menu">
                    
                  <nav class="navbar navbar-default menu-row" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">  <img src="<?php bloginfo('template_url'); ?>/images/plain_logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                       <?php 
                            $header_menu = array(
                                'menu' => 'header-menu',
                                'theme_location'  => 'header-menu',
                                'container' => false,
                                'menu_class'      => 'menu',
                                'menu_id' => 'header_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s menu nav navbar-nav pull-right">%3$s</ul>'
                             
                            );
                            wp_nav_menu( $header_menu );
                        ?>
                                
                    </div>
                  </nav> 
                                    
                </div><!-- / Menu -->
            </div>
        </div>
        <div class="row redbanner top">
           <div class="col-md-12">
                <div class="col-md-7 leftof-banner">
                    <p><h1><span><img src="<?php bloginfo('template_url'); ?>/images/img-devices.gif" alt="img-responsive"></span>A multipurpose template with a                         modern flat design</h1></p>
                    <p>
                        <img src="<?php bloginfo('template_url'); ?>/images/icon_play.gif" alt="" class="img-gt"><br/>
                        <img src="<?php bloginfo('template_url'); ?>/images/icon_play.gif" alt="" class="img-gt"><br/>
                        <img src="<?php bloginfo('template_url'); ?>/images/icon_play.gif" alt="" class="img-gt"><br/>
                        <img src="<?php bloginfo('template_url'); ?>/images/icon_play.gif" alt="" class="img-gt"><br/>
                        <img src="<?php bloginfo('template_url'); ?>/images/icon_play.gif" alt="" class="img-gt"><br/>
                    </p>
                    <p>
                        <button class="btn btn-primary btn-xl">Learn More</button>
                        <button class="btn btn-primary btn-xl">Join Now</button>
                    </p>

                </div>
                <div class="col-md-5 rightof-banner"><img src="<?php bloginfo('template_url'); ?>/images/screen.gif" alt="img-screen"></div>
            </div>
        </div>
        <!-- /HEADER -->
		
		
		
	</header> <!-- end site-header -->
	

	<!-- MAIN CONTENT AREA -->
	<!-- <div class="container"> -->
		<div class="row main-content"> 