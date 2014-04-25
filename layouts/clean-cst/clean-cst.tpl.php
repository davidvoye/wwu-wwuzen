<?php
/**
 * @file
 * Template for a Clean CST panel layout.
 *
 * This template provides a single top row with three columns below that top row.
 *
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 */
?>

<div class="clean-cst-top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top']; ?>
</div>

<div class="clean-cst-middle-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_left']; ?>
</div>

<div class="clean-cst-middle-center" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_center']; ?>
</div>

<div class="clean-cst-middle-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_right']; ?>
</div>
