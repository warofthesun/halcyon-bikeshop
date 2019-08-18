				<div id="shop" class="sidebar col-xs-12 col-sm-4 col-lg-3" role="complementary">

					<?php if ( is_active_sidebar( 'shop' ) ) : ?>

						<?php dynamic_sidebar( 'shop' ); ?>

					<?php else : ?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'halcyon' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
