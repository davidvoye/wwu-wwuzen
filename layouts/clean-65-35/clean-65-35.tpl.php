<?php

/**
 * @file
 * This is a template providing 4 content areas.
 *
 * Template for a layout with a 100% row across the top
 * 65% column on the left and a 35% column on the right, finally, a 100%
 * row across the bottom.
 *
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>

<div class="clean-65-35-container">

  <div class="wwu-100-percent-top" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['top']; ?>
  </div>

  <div class="wwu-65-percent-left-column" <?php if(!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['left']; ?>
  </div>

  <div class="wwu-35-percent-right-column" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
   <?php print $content['right']; ?>
  </div>

  <div class="wwu-100-percent-bottom" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
   <?php print $content['bottom']; ?>
  </div>

</div>
