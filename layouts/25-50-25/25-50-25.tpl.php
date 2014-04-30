<?php
/**
 * @file
 * Template for a three-column layout with 25-50-25 width percentages.
 *
 * This template provides a three-column panel display layout with minimal markup.
 * Created by Nigel Packer April 2014
 */
?>
<div class="layout-25-50-25 container-25-50-25" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="layout-25-50-25 left-column-25-50-25" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['left']; ?>
  </div>

  <div class="layout-25-50-25 middle-column-25-50-25" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['middle']; ?>
  </div>

  <div class="layout-25-50-25 right-column-25-50-25" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['right']; ?>
  </div>
</div>
