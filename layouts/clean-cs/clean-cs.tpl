<?php
/**
 * @file
 * Template for a 2 column Clean Huxley panel layout.
 *
 * This template provides a two column panel display layout with minimal markup.
 * Edited by Amy Brown September 2013
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="clean-cs cs-homepage-top-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top-left']; ?>
</div>
<div class="clean-cs cs-homepage-top-right-column">
	<?php print $content['top-right']; ?>
</div>

<div class="clean-cs cs-homepage-upper-middle-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top-left']; ?>
</div>
<div class="clean-cs cs-homepage-upper-middle-right-column">
	<?php print $content['top-right']; ?>
</div>

<div class="clean-cs cs-homepage-lower-middle-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top-left']; ?>
</div>
<div class="clean-cs cs-homepage-lower-middle-right-column">
	<?php print $content['top-right']; ?>
</div>

<div class="clean-cs cs-homepage-bottom-row">
<section class="clean-cs cs-homepage-bottom-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['bottom-left']; ?>
</section>
<section class="clean-cs cs-homepage-bottom-right-column">
	<?php print $content['bottom-right']; ?>
</section>
</div>