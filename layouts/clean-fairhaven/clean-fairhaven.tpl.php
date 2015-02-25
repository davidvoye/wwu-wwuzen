<?php
/**
 * @file
 * Template for a Clean Fairhaven panel layout.
 *
 * This template provides a two column panel display layout with minimal markup.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 */
?>


<!-- Top row: Introductory blurb/p (left half) and slideshow (right half) -->

<div class="clean-fairhaven-top-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top_left']; ?>
</div>

<div class="clean-fairhaven-top-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top_right']; ?>
</div>


<!-- Middle row: Courses (left thirds), Featured Video (center third) and Calendar (right third) -->

<div class="clean-fairhaven-middle-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_left']; ?>
</div>

<div class="clean-fairhaven-middle-center" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_center']; ?>
</div>

<div class="clean-fairhaven-middle-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_right']; ?>
</div>


<!-- Bottom row: News (left half) and Events (right half) -->

<div class="clean-fairhaven-bottom-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['bottom_left']; ?>
</div>

<div class="clean-fairhaven-bottom-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['bottom_right']; ?>
</div>

