<!--front page-->
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?> role="article">
								<div class="hero--image"><?php the_post_thumbnail('gallery-image'); ?></div>
								<?php
									// args
									$args = array(
										'numberposts'	=> -1,
										'post_type'		=> array (
											'page',
											'post'
										),
										'meta_key'		=> 'include_on_front',
										'meta_value'	=> true
									);


									// query
									$the_query = new WP_Query( $args );

									?>
									<?php if( $the_query->have_posts() ): ?>
										<ul>
										<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
											<li>
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>

									<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								</header>

								<section class="entry-content">

									<?php the_content(); ?>
								</section>

							</article>

							<?php endwhile; endif; ?>


						</main>

				</div>

			</div>

<?php get_footer(); ?>
