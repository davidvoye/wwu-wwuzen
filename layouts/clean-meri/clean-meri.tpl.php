<?php

/**
 * @file
 * This is a template providing 6 content areas.
 *
 * Template for a layout with 3 100% rows across the top
 * 60% column on the left and a 40% column on the right, finally, a 100%
 * row across the bottom.
 *
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['row1']: Content in the first row.
 *   - $content['row2']: Content in the second row.
 *   - $content['row3']: Content in the third row.
 *   - $content['left column']: Content in the left column.
 *   - $content['right column']: Content in the right column.
 *   - $content['bottom']: Content in the footer.
 */
?>

<div class="clean-meri-container">

  <div class="wwu-100-percent-first-row" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['row1']; ?>
  </div>

  <div class="wwu-100-percent-second-row" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['row2']; ?>
  </div>

  <div class="wwu-100-percent-third-row" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['row3']; ?>
  </div>

  <div class="wwu-60-percent-left-column" <?php if(!empty($css_id)) {print "id=\"$css_id\"";} ?>>
    <?php print $content['left']; ?>
  </div>

  <div class="wwu-40-percent-right-column" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
   <?php print $content['right']; ?>
  </div>

  <div class="wwu-100-percent-bottom" <?php if (!empty($css_id)) {print "id=\"$css_id\"";} ?>>
   <?php print $content['bottom']; ?>
  </div>

</div>
