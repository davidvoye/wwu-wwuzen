<?php
/**
 * @file
 * Template for a Clean Fairhaven panel layout.
 *
 * This template provides a two column panel display layout with minimal markup.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one panel
 *   of the layout.
 */
?>

<div class="clean-fairhaven-top-left" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['top_left']; ?>
</div>

<div class="clean-fairhaven-top-right" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['top_right']; ?>
</div>

<div class="clean-fairhaven-sub-top-left" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['sub_top_left']; ?>
</div>

<div class="clean-fairhaven-sub-top-right" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['sub_top_right']; ?>
</div>

<div class="clean-fairhaven-middle-left" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['middle_left']; ?>
</div>

<div class="clean-fairhaven-middle-center" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['middle_center']; ?>
</div>

<div class="clean-fairhaven-middle-right" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['middle_right']; ?>
</div>

<div class="clean-fairhaven-bottom-left" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif ?>>
  <?php print $content['bottom_left']; ?>
</div>

<div class="clean-fairhaven-bottom-right" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php print $content['bottom_right']; ?>
</div>
