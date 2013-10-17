<?php
/**
 * @file
 * Template for a Clean CHSS panel layout.
 *
 * This template provides a two column panel display layout with minimal markup.
 * Edited by Amy Brown October 2013
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 */
?>


<!--
  Initial Content Designations
  Top row:
  Introductory blurb/p (left two-thirds) and Support CHSS banner (right third)
-->

<div class="clean-chss-top-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top_left']; ?>
</div>

<div class="clean-chss-top-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top_right']; ?>
</div>


<!--
  Initial Content Designations
  Middle row:
  Dean's Lecture Series (left thirds), Slideshow (center third) and About the College banner (right third)
-->

<div class="clean-chss-middle-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_left']; ?>
</div>

<div class="clean-chss-middle-center" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_center']; ?>
</div>

<div class="clean-chss-middle-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['middle_right']; ?>
</div>


<!--
  Initial Content Designations
  Bottom row:
  News (left half) and Events (right half)
-->

<div class="clean-chss-bottom-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['bottom_left']; ?>
</div>

<div class="clean-chss-bottom-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['bottom_right']; ?>
</div>

