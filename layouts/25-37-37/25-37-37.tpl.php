<?php
/**
 * @file
 * Template for a three column layout with 25-37-37 percentages.
 *
 * This template provides a three-column panel display layout with minimal markup.
 * Created by Nigel Packer July 2014
 */
?>
<div class="layout-25-37-37 container-25-37-37" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="layout-25-37-37 left-column-25-37-37" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['left']; ?>
  </div>
  
  <div class="layout-25-37-37 right-col-group-25-37-37" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

    <div class="layout-25-37-37 middle-column-25-37-37" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['middle']; ?>
    </div>

    <div class="layout-25-37-37 right-column-25-37-37" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['right']; ?>
    </div>

  </div>

</div>
