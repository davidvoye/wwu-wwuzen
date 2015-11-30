<?php
/**
 * @file
 * Template for the Art Home page panel layout.
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
<div class="art-home art-home-container clearfix">
  <div class="art-home art-home-top-row clearfix">
    <div class="art-home art-home-top-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
    </div>
    <div class="art-home art-home-top-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
    </div>
  </div>
  <div class="art-home art-home-bottom-row clearfix">
    <div class="art-home art-home-bottom-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="art-home art-home-bottom-center clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_center']; ?>
    </div>
    <div class="art-home art-home-bottom-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>
