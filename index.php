<?php
/**
 * The index template file
 * 
 * @package bootstrap-voilla
 */

get_header();
?>
				<div class="col-md-12 content-area">
					<main class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						<?php
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_footer(); ?>