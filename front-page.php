<!--front page-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

								<?php
									// args
									$args = array(
										'numberposts'	=> -1,
										'post_type'		=> array (
											'page',
											'post',
											'image_links'
										),
										'meta_key'		=> 'include_on_front',
										'meta_value'	=> true
									);


									// query
									$the_query = new WP_Query( $args );

									?>
									<?php if( $the_query->have_posts() ): ?>
										<ul class="row block-navigation block-navigation__blocks">
										<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<li class="col-xs-5 col-sm-4 block">
												<?php if (get_field('external_link') ) : ?>
													<a href="<?php the_field('external_link'); ?>" <?php if (get_field('open_in_new_tab') ) : ?>target="_blank"<?php endif;?>>
													<?php else : ?>
												<a href="<?php the_permalink(); ?>">
												<?php endif; ?>
												<?php the_post_thumbnail('halcyon-front-page'); ?>
												<div class="overlay">
													<div>
															<?php the_title(); ?>
													</div>
												</div>
												</a>
											</li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>

									<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

						</main>

				</div>

			</div>
<?php get_footer(); ?>
