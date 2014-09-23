<?php
/**
 * @file
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>


<div class="clean-wce top-row-wrapper">

  <div class="clean-wce topleft" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  	<?php print $content['topleft']; ?>
  </div>

  <div class="top-and-top-right">
  <div class="clean-wce top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['top']; ?>
  </div>

  <div class="clean-wce topright" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['topright']; ?>
  </div>
</div>

</div>

<div class="clean-wce middle-row-wrapper">

  <div class="clean-wce middleleft" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['middleleft']; ?>
  </div>

  <div class="clean-wce middleright" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['middleright']; ?>
  </div>

</div>

<div class="clean-wce bottom-row-wrapper">

  <div class="clean-wce bottomleft" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['bottomleft']; ?>
  </div>

  <div class="clean-wce bottomright" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['bottomright']; ?>
  </div>

</div>
