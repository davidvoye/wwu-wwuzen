<?php
/**
 * @file
 * Template for a custom layout built for WesternToday.
 *
 * This template provides a full-width top area, 75%/25% mid area for a sidebar,
 * and 4 columns for news feed views, followed by a final 100% bottom row.
 *
 * Matthew Takemoto January 2017
 * Based on the 75/25 layout by Nigel Packer (February 2014)
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top_1']: Content for the top 100% row.
 *   - $content['top_2']: Same as above but without the white background 
 *   - $content['left_1..2']: Content in the left column. 
 *   - $content['right_1..2']: Content in the right column.
 *   - $content['col_1..4'] Content for one of the four columns.
 *   - $content['bottom'] Content for the bottom 100% row.
 */
?>
<div class="section-wrapper white-bg">
  <div class="wwu-100-percent wt-section top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['top_1']; ?>
  </div> 
</div>

<div class="section-wrapper">
  <div class="wwu-100-percent wt-section top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['top_2']; ?>
  </div> 
</div>

<div class="section-wrapper white-bg">
  <div class="wwu-75-25-container wt-section">
    <div class="wwu-75-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['left_1']; ?>
    </div>
    <div class="wwu-25-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['right_1']; ?>
    </div>
  </div>

  <div class="wwu-75-25-container wt-section">
    <div class="wwu-75-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['left_2']; ?>
    </div>
    <div class="wwu-25-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['right_2']; ?>
    </div>
  </div>
</div>

<div class="section-wrapper white-bg">
  <div class="wwu-4-col-container wt-section">
    <div class="col-1" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['col_1']; ?>
    </div>
    <div class="col-2" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['col_2']; ?>
    </div>
    <div class="col-3" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['col_3']; ?>
    </div>
    <div class="col-4" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
      <?php print $content['col_4']; ?>
    </div>
  </div>
</div>

<div class="section-wrapper">
  <div class="wwu-100-percent wt-section bottom" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
    <?php print $content['bottom']; ?>
  </div> 
</div>

