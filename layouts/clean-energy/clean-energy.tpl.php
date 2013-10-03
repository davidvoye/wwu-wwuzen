<?php
/**
 * @file
 * Template for a 2 column Clean Energy panel layout.
 *
 * This template provides a two column panel display layout with minimal markup.
 * Edited by Max Bronsema October 2013
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="clean-energy-top-row">
  <div class="clean-energy-top-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['top_left']; ?>
  </div>

  <div class="clean-energy-top-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['top_right']; ?>
  </div>
</div>

<div class="clean-energy-bottom-row">
  <div class="clean-energy-bottom-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['bottom_left']; ?>
  </div>

  <div class="clean-energy-bottom-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['bottom_right']; ?>
  </div>
</div>

