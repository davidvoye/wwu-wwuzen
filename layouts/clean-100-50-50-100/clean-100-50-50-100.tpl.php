<?php
/**
 * @file
 * Template for a layout with a 100% width column on the top, 50% column on the left a 50% column on the right, and a 100% width column on the bottom.
 *
 * This template provides a one / two column / one panel display layout with minimal markup.
 * Edited by Gregory Sobotka 2014
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *	 - $content['top']: Content in the top column.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *	 - $content['bottom']: Content in the bottom column.
 */
?>
<div class="panel-header clearfix">

	<div class="wwu-100-percent-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<?php print $content['top']; ?>
	</div>

</div>

<div class="wwu-50-50-wrapper clearfix">

	<div class="wwu-50-percent-left-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<?php print $content['left']; ?>
	</div>

	<div class="wwu-50-percent-right-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<?php print $content['right']; ?>
	</div>

</div>

<div class="panel-footer clearfix">

	<div class="wwu-100-percent-column" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<?php print $content['bottom']; ?>
	</div>

</div>