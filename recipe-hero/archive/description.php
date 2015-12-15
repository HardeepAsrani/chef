<?php
/**
 * Recipe Archive Description
 *
 * @package   Recipe Hero
 * @author    Captain Theme <info@captaintheme.com>
 * @version 	  0.8.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( get_the_content() ) { ?>

	<div class="recipe-archive-content">

		<span itemprop="description">

			<?php the_excerpt(); ?>

		</span>

	</div>

<?php
}