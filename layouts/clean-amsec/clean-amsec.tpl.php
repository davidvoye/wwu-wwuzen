<?php
/**
 * @file
 * Template for a stacked one row on top of two column layout.
 */
?>

<div class="clean-amsec clean-amsec-top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top']; ?>
</div>

<div class="clean-amsec clean-amsec-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php print $content['left']; ?>
</div>

<div class="clean-amsec clean-amsec-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['right']; ?>
</div>
