<?php
/**
 * @file
 * Template for CFPA department landing page panels
 */
?>
<div class="cfpa-department-container clearfix">
  <div class="cfpa-department-top-row clearfix">
    <div class="cfpa-department-top-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
    </div>
    <div class="cfpa-department-top-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
    </div>
  </div>
  <div class="cfpa-department-bottom-row clearfix">
    <div class="cfpa-department-bottom-left clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>
    <div class="cfpa-department-bottom-middle clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_middle']; ?>
    </div>
    <div class="cfpa-department-bottom-right clearfix" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>

