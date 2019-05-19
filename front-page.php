<!--front page-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
								// check if the repeater field has rows of data
								if( have_rows('image_links', 'option') ): ?>
									<ul class="row block-navigation block-navigation__blocks">

									<?php while ( have_rows('image_links', 'option') ) : the_row(); ?>
										<li class="col-xs-5 col-sm-4 block">

											<a href="<?php the_sub_field('link'); ?>" target="_blank">
											<?php
											$image = get_sub_field('image');
											$size = 'halcyon-front-page'; ?>

											<?php echo wp_get_attachment_image( $image, $size ); ?>
											<div class="overlay">
												<div>
														<?php the_sub_field('link_title'); ?>
												</div>
											</div>
											</a>

									 <?php endwhile; ?>
										</li>
									</ul>
							<?php	else : endif; ?>

						</main>

				</div>

			</div>
<?php get_footer(); ?>
