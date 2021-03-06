<!--front page-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<a name="page-content"></a>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; endif; ?>
							<?php
								// check if the repeater field has rows of data
								if( have_rows('image_links', 'option') ): ?>
									<ul class="row block-navigation block-navigation__blocks">

									<?php while ( have_rows('image_links', 'option') ) : the_row(); ?>
										<li class="block">

											<a href="<?php the_sub_field('link'); ?>">
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
