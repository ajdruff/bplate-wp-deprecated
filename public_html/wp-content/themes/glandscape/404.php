<?php get_header();?>
<!-- TOP IMAGE OR VIDEO -->
<?php if (have_posts()) : the_post();
 if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_top'):
 gblu_post_image('large','','prettyPhoto'); endif;

 if (get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_full'):
 gblu_video(get_post_meta($post->ID,'gblu_videourl',true),'large','','','');
 endif;

 gblu_breadcrumbs();
$sidebarposition = get_option('gblu_sidebarposition'); // Get sidebar position from admin

 endif;

echo '<div id="content-default" class="content-'.$sidebarposition.'">';

									
								echo '<h1>'.__('Can not find page','glandscape').'</h1>';
								echo '<p>'.get_option('gblu_trans_404_message').'</p>';
									
			
echo '</div>';
get_sidebar();
get_footer();?>
