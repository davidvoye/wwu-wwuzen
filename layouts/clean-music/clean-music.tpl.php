<?php
/**
 * @file
 * Template for a layout with a 66% column on the left, and a 33% column on the right
 * followed by a 33% width for each of three columns below.
 * Edited by Bryce Danz, June 2014.
 *
 *Variables:
 *- $id: An optional CSS
 *- $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top_left_66']: Content in the top left column.
 *   - $content['top_right_33']: Content in the top right column.
 *     $content['bottom_left']: Content in the bottom left column.
 *   - $content['bottom_middle']: Content in the middle column.
 *     $content['bottom_right']: Content in the bottom right column.
 */
?>
<div class="clean-music-container">
  <div class="clean-music-top-row">
  <div class="clean-music-top-left" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_left']; ?>
  </div>

  <div class="clean-music-top-right" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['top_right']; ?>
  </div>

  <div class="clean-music-bottom-row">
    <div class="clean-music-bottom-left" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_left']; ?>
    </div>

    <div class="clean-music-bottom-middle" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_middle']; ?>
    </div>

    <div class="clean-music-bottom-right" <?php if (!empty($css_id)) {print "id=\"$css_id\""; } ?>>
      <?php print $content['bottom_right']; ?>
    </div>
  </div>
</div>

