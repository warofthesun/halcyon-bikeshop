
			<div class="store-information">
				<h2>Contact</h2>
				<div class="border"></div>
				<div class="store-information__container">
					<div class="phone-number"><?php the_field('phone_number', 'option'); ?></div>
					<div class="address"><?php the_field('address', 'option'); ?></div>
					<?php
						// check if the repeater field has rows of data
						if( have_rows('store_hours', 'option') ): ?>
							<div class="hours">
								<h3>hours</h3>
								<ul>


						 <?php	// loop through the rows of data
						    while ( have_rows('store_hours', 'option') ) : the_row(); ?>


						       <li>
										 <?php the_sub_field('hours'); ?>
									 </li>

						  <?php  endwhile;

						else :

						    // no rows found

						endif;

						?>

						</ul>
					</div>
				</div>
				<div class="border"></div>
				<?php the_field('store_map', 'option'); ?>
			</div>
			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap row">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links ',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'halcyon' ),   // nav name
    					'menu_class' => 'nav footer-nav ',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'halcyon_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/halcyon.php ?>
		<?php wp_footer(); ?>



	</body>

</html> <!-- end of site. what a ride! -->
