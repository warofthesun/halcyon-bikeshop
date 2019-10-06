<?php
/*
 Template Name: Links Page
*/
?>
<!--page-links-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content " itemprop="articleBody">

									<?php	the_content(); ?>
									<?php if( get_field('link_type') == 'image' ): ?>
										<?php
											// check if the repeater field has rows of data
											if( have_rows('image_links') ): ?>
												<ul class="row block-navigation block-navigation__blocks">

											  <?php while ( have_rows('image_links') ) : the_row(); ?>
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
										<?php	endif; ?>
									<?php elseif( get_field('link_type') == 'text' ): ?>
										<?php if( have_rows('text_links') ): while ( have_rows('text_links') ) : the_row(); ?>
											<div class="link-section">
													<h2><?php the_sub_field('section_header'); ?></h2>
													<?php if( have_rows('links') ): ?>
													<ul class="row">
														<?php while ( have_rows('links') ) : the_row(); ?>
															<?php
																$link = get_sub_field('url');
																$link_url = $link['url'];
																$link_title = $link['title'];
																$link_target = $link['target'] ? $link['target'] : '_self';
															?>
														<li class="col-xs-6 col-md-4">
															<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
																<?php if(get_sub_field('image') ) : ?>
																	<img src="<?php the_sub_field('image');?>" />
																	<div class="brand-caption">
																		<?php echo esc_html($link_title); ?>
																	</div>
																<?php else: ?>
																	<?php echo esc_html($link_title); ?>
																<?php endif; ?>
															</a>
														</li>
														<?php endwhile; ?>
													</ul>
											</div>
													<?php endif; endwhile; ?>

										<?php	endif; ?>
									<?php endif; ?>


								</section>


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'halcyon' ) . '</span> ', ', ', '</p>' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry ">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'halcyon' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'halcyon' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'Error message', 'halcyon' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
