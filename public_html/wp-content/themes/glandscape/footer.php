</div>

<div id="footer">

			<?php if(get_option('gblu_disable_smi')==false || get_option('gblu_disable_search_footer')== false):?>

			<div class="module">

						<?php 

								if(get_option('gblu_disable_smi')==false){

								include(TEMPLATEPATH.'/lib/includes/sociables.php');

								}

								?>

						<?php if (get_option('gblu_disable_search_footer')== false):?>

						<form action="<?php echo site_url();?>" method="get" id="searchform_footer">

									<p>

												<input type="submit"  value="<?php _e('Search','glandscape');?>" />

												<input type="text" value="" name="s"  class="cleardefault"/>

									</p>

						</form>

						<?php endif;?>

			</div>

			<?php endif;?>

           

			<?php if(has_nav_menu('footer')):?>

			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_container' => 'div', 'container_id' => 'footernav','link_before' => '<span>', 'link_after' => '</span>','menu_class' => '',  'theme_location' => 'footer'));?>

			<?php endif;?>

			<br class="break"/>

			 <div class="footinner">

			<?php if (get_option('gblu_footer')==false):?>

			<div class="one-fourth">

						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 1')){};?>

			</div>

			<div class="one-fourth">

						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 2')){};?>

			</div>

			<div class="one-fourth">

						<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 3')){};?>

			</div>

			<div class="one-fourth last"><?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Column 4')){};?>

            </div>

            </div>

          			<br class="break"/>

			<?php endif;?>

            <div class="footercreditsbox">

			<div id="footercredits"><?php echo get_option('gblu_credits');?></div> <div class="designer"><a title="site design by g-Blu Design" href="http://www.g-blu.com" target="_blank"><img class="alignright size-full wp-image-104" title="Site design by g-Blu design of Maine" src="/wp-content/themes/glandscape/lib/img/theme/g-blu-logo2013.png" alt="" width="150" height="83" /></a></div></div>

						</div>

</div>

</div>

<!-- End content -->

<?php wp_footer();?>

<?php echo get_option('gblu_analytics');?>

</body></html>