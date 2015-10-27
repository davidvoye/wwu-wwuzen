<?php
/**
 * @file
 * Template for the 100 50-50 33-33-33 page panel layout.
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
<div class="container-100--50-50--33-33-33 clearfix">
    <div class="top-row-100--50-50--33-33-33 clearfix">
    <div class="top-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top']; ?>
    </div>
  
  </div>
    <div class="middle-row-100--50-50--33-33-33 clearfix">
    <div class="middle-left-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['middle_left']; ?>
    </div>
    <div class="middle-right-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['middle_right']; ?>
    </div>
  </div>
  <div class="bottom-row-100--50-50--33-33-33 clearfix">
    <div class="bottom-left-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="bottom-center-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_center']; ?>
    </div>
    <div class="bottom-right-100--50-50--33-33-33 clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>
