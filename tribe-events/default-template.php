<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Display -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.23
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<!-- default events -->

<div id="content">

	<div id="inner-content" class="wrap row hentry">

		<main id="tribe-events-pg-template" class="tribe-events-pg-template">

				<section class="entry-content " itemprop="articleBody">
					<?php tribe_events_before_html(); ?>
					<?php tribe_get_view(); ?>
					<?php tribe_events_after_html(); ?>
				</section>

		</main> <!-- #tribe-events-pg-template -->

	</div>

</div>
<?php
get_footer();
