<?php
/*
 Template Name: Full Width
*/
?>
<!--page-full width-->
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
