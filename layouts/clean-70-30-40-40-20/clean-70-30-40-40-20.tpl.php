<?php
/**
 * @file
 * Template for 70-30 40-40-20 panel layout
 */
?>
<div class="clean-70-30-40-40-20-container">
  <div class="clean-70-30-40-40-20-top-row">
    <div class="clean-70-30-40-40-20-top-left" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
    </div>
    <div class="clean-70-30-40-40-20-top-right" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
    </div>
  </div>
  <div class="clean-70-30-40-40-20-bottom-row">
    <div class="clean-70-30-40-40-20-bottom-left" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="clean-70-30-40-40-20-bottom-middle" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_middle']; ?>
    </div>
    <div class="clean-70-30-40-40-20-bottom-right" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>

