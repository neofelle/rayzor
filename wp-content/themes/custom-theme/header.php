<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl-carousel/owl.theme.default.min.css"/>
	<?php wp_head(); ?>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
<ul class="navigation">
	<?php                   
        $header_number    = $GLOBALS['cgv']['default-contact-number'];
        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
        if( $cf_header_number != "" ){
            $header_number = $cf_header_number;	
        }
    ?>	

	<li class="nav-item contact-menu">
		<i style="margin-left:10px;margin-top: 12px;margin-right: 10px;font-size: 17px;color:#3a7136;" class="fa fa-phone left contact-icon" aria-hidden="true"></i>
		<a style="color:#3a7136;" class="contact" href="tel:+<?php echo str_replace("-", "", $header_number); ?>" style="font-size: 16px;color:#3a7136;"><?php echo $header_number; ?></a>
	</li>

	<?php 
		$v = 0;
		$menuargs = array(
			"theme_location" => "primary",
			"menu_class" => "s-menu",
			"menu_id" => "main-menu",
		);
		$items = wp_get_nav_menu_items( 'main-menu', $menuargs); 
	?> 
	<?php foreach( $items as $item ){ ?>
    	<li class="nav-item"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
    <?php } ?>
</ul>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<div class="site-wrap" style="background-color: #fbfbfb;">
	<section class="desktop-menu" style="position: relative;top:0px;left:0px;bottom: 0px;width: 100%;z-index: 10;height: 120px;background-color: #fefffa;">
		<div class="col-xs-1 col-md-3 left header-logo no-space">
			<a href="<?php echo get_option('home'); ?>">
				<?php the_custom_logo(); ?>
			</a>
		</div>
		<div class="col-md-12" style="text-align: right;background-color: #000000;padding-top: 5px;padding-bottom: 5px;">	
			<p class="rayzor-header" style="position: relative;top: 5px;"><span style="color:#cacaca;">Rayzors Edge Tree Service of Connecticut is fully licensed and insured.</span><span style="color: #cacaca;font-weight: 600;">LIC# B-3218</span></p>
		</div>
		<div class="col-md-12" style="background: #fbfbfb;text-align: right;background-color: white;padding-top: 10px;padding-bottom: 5px;border-bottom: 1px solid #e5e5e5;">	
			<?php                   
			        $header_number    = $GLOBALS['cgv']['default-contact-number'];
			        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
			        if( $cf_header_number != "" ){
			            $header_number = $cf_header_number;
			        }
			 ?>			
			<h2 style="margin-top: 13px;font-family:'ubuntu_bold';letter-spacing: 1px;"><span style="color:#3a7136;">
					<i class="fa fa-phone contact-icon" aria-hidden="true"></i>
				    <a style="color:#3a7136;font-weight:600;font-size: 34px;" href="tel:+<?php echo str_replace("-", "", $header_number); ?>"><?php echo $header_number; ?></a>
					</span></h2>
		</div>
		<div class="col-md-12 no-space" style="height: 69px;  border-bottom: 1px solid #e5e5e5;">
			<div class="col-md-3 no-space" style="background: #fbfbfb;  border-bottom: 1px solid #e5e5e5;">

			</div>
			<div class="col-md-9 no-space" style="background: #fbfbfb;  border-bottom: 1px solid #e5e5e5;">
				<nav id="menu" role="navigation">
					<?php 
						$v = 0;
						$menuargs = array(
							"theme_location" => "primary",
							"menu_class" => "s-menu",
							"menu_id" => "main-menu",
						);
						$items = wp_get_nav_menu_items( 'main-menu', $menuargs); 
					?> 
					<ul class="menu-header" style="">
						<?php foreach( $items as $item ){ ?>
								<li><a href="<?php echo $item->url; ?>" class="uppercase right"><?php echo $item->title; ?></a></li>
						
						<?php } ?>	
						<?php                   
					        $header_number    = $GLOBALS['cgv']['default-contact-number'];
					        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
					        if( $cf_header_number != "" ){
					            $header_number = $cf_header_number;
					        }
					    ?>
					</ul>
				</nav>	
			</div>			

		</div>
	</section>
	<section class="mobile-menu" style="margin-bottom:0px;position: relative;top:0px;left:0px;bottom: 0px;width: 100%;z-index: 10;height: 60px;background-color: #ececec;box-shadow: 3px 1px 20px #484848;">
		<div class="col-md-12" style="padding-top: 0px;margin-bottom: 0px;padding-right: 0px;padding-left: 0px;">
			<div class="container full-screen-mobile">
				<div class="col-xs-1 left header-logo">
					<nav id="menu" role="navigation">
						<ul class="menu-header-mobile">
							<li><label for="nav-trigger"><i class="fa fa-bars" style="color:black" aria-hidden="true"></i></label></li>
						</ul>
					</nav>			
				</div>
				<div class="col-xs-3 left header-logo" style="padding-top: 10px;margin-left: 10px;">
					<a href="<?php echo get_option('home'); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<div class="col-xs-7 right contact-mobile header-logo" style="padding-top: 10px;margin-left: 10px;">
					<?php                   
				        $header_number    = $GLOBALS['cgv']['default-contact-number'];
				        $cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
				        if( $cf_header_number != "" ){
				            $header_number = $cf_header_number;
				        }
				    ?>
				    <p class="right" style="font-size: 22px;color: #3a7136;font-weight: bold;margin-top: 6px;"><a style="color:#3a7136;" class="contact" href="tel:+<?php echo str_replace("-", "", $header_number); ?>" style="font-size: 16px;color:#3a7136;"><?php echo $header_number; ?></a></p>
					<i style="margin-top: 6px;margin-right: 10px;font-size: 21px;color:#3a7136;" class="fa fa-phone right contact-icon" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>

