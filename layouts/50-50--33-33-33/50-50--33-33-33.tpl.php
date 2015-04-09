<?php
/**
 * @file
 * Template for the 50-50 33-33-33 page panel layout.
 *
 * This template provides a top row split into two equal regions and a
 * bottom row split into three equal regions.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 */
?>
<div class="container-50-50--33-33-33 clearfix">
  <div class="top-row-50-50--33-33-33 clearfix">
    <div class="top-left-50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
    </div>
    <div class="top-right-50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
    </div>
  </div>
  <div class="bottom-row-50-50--33-33-33 clearfix">
    <div class="bottom-left-50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="bottom-center-50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_center']; ?>
    </div>
    <div class="bottom-right-50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>
