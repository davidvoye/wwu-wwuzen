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
<div class="50-50--33-33-33 50-50--33-33-33-container clearfix">
  <div class="50-50--33-33-33 50-50--33-33-33-top-row clearfix">
    <div class="50-50--33-33-33 50-50--33-33-33-top-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
    </div>
    <div class="50-50--33-33-33 50-50--33-33-33-top-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
    </div>
  </div>
  <div class="50-50--33-33-33 50-50--33-33-33-bottom-row clearfix">
    <div class="50-50--33-33-33 50-50--33-33-33-bottom-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="50-50--33-33-33 50-50--33-33-33-bottom-center clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_center']; ?>
    </div>
    <div class="50-50--33-33-33 50-50--33-33-33-bottom-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>
