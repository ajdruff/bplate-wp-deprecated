<?php
/*
Template Name: Blog
*/

get_header();?>
<?php load_theme_textdomain( 'glandscape', TEMPLATEPATH . '/languages' );?>
<?php 
			
			$pager = get_option(gblu_blog_pager);
			
			if(get_option('gblu_blog_layout')=='fullwidth'){
			echo gblu_blog('fullwidth',false, $pager);
			}
				
			if(get_option('gblu_blog_layout')=='normal'){
			echo '<div class="content-default">';
			echo gblu_blog('',false, $pager);
			echo '</div>';
			get_sidebar();
			}				
			?>
			

<?php get_footer();?>
