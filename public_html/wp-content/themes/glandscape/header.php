<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>
<?php gblu_enqueue_theme_js();?>
<?php load_theme_textdomain( 'glandscape', TEMPLATEPATH . '/languages' );?>
<?php wp_head(); ?>
<meta name="kill_dropdown" content="<?php echo get_option('gblu_dropdown');?>" />
<meta name="cycle_slider_timeout" content="<?php echo get_option('gblu_cycle_slider_timeout'); ?>" />
<meta name="cycle_slider_effect" content="<?php echo get_option('gblu_cycle_slider_effect'); ?>" />
<meta name="nivo_slider_effect" content="<?php echo get_option('gblu_nivo_slider_effect'); ?>" />
<meta name="nivo_slider_timeout" content="<?php echo get_option('gblu_nivo_slider_timeout'); ?>" />
<meta name="nivo_slider_slices" content="<?php echo get_option('gblu_nivo_slider_slices'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/lib/css/skins/<?php echo get_option('gblu_mycolourscheme');?>.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/lib/css/prettyPhoto.css"/>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.kwicks.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/custom.js"></script>
<?php if(get_option('gblu_enable_config')== true):?>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/lib/scripts/jquery.cookie.js"></script>
<?php endif;?>
<!-- / demo script -->
<?php // styleString();?>
<!--<script>
		$(function() {   
		
			var theWindow        = $(window),
			    $bg              = $("#bg"),
			    aspectRatio      = $bg.width() / $bg.height();
			    			    		
			function resizeBg() {
				
				if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
				    $bg
				    	.removeClass()
				    	.addClass('bgheight');
				} else {
				    $bg
				    	.removeClass()
				    	.addClass('bgwidth');
				}
							
			}
			                   			
			theWindow.resize(function() {
				resizeBg();
			}).trigger("resize");
		
		});
	</script>
-->
</head>
<body>
<img src="<?php echo get_template_directory_uri();?>/lib/img/theme/landscape-bg.jpg" id="bg" alt="">
<div id="wrapper">
<div id="inner">
<div id="header">
			<div id="header_top"><div id="topquote"><?php echo get_option('gblu_slogan');?></div>
			</div>
            
			<div id="header_center">
						<div id="logo">
									<a href="<?php echo home_url(); ?>" title="<?php echo $home_page_name;?>" ><img src="<?php echo get_template_directory_uri();?>/lib/img/theme/landscape-logo.jpg" alt="<?php echo $home_page_name;?>" title="Gottlieb Landscape Design"/> </a>
									
						</div>
                         
						<!--<?php if (get_option('gblu_disable_search_header')== false):?>
						<div id="searchform" style="margin-top:<?php echo get_option('gblu_search_margin');?>px;">
									<form action="<?php echo site_url();?>" method="get" id="searchform_header">
												<p>
															<input type="text" value="" name="s" id="s"/>
															<input type="submit" value="<?php _e('Search','glandscape');?>" />
												</p>
									</form>
						</div>
						<?php endif;?> -->
			</div>
			<div id="primary">
						<?php if(has_nav_menu('primary')):?>
						<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_container' => 'div', 'container_id' => 'primary-menu','menu_class' => '',  'theme_location' => 'primary'));?>
						<?php endif;?>
			</div>
            <div id="facebook"><a target="_blank" href="https://www.facebook.com/pages/Gottlieb-Landscape-Design/134478396606869"><img src="wp-content/themes/glandscape/lib/img/theme/facebook.png" width="35" height="35" alt="Facebook" title="Visit Gottlieb Landscape Facebook Page"/></a></div>
          
</div>
<!-- End header -->
<!-- PAGE CONTENT -->
<div id="content">