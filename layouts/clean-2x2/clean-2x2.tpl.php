<?php
/**
 * @file
 * Template for a layout with two stacked sections, each with two columns.
 *
 * This template provides a two column panel display layout with minimal markup.
 * Concieved by Nigel Packer in 2014
 *
 */
?>

<div class="clean-2x2 top">
	<div class="clean-2x2 top-left">
		<?php echo $content['top-left']; ?>
	</div>
	<div class="clean-2x2 top-right">
		<?php echo $content['top-right']; ?>
	</div>
</div>
<div class="clean-2x2 bottom">
	<div class="clean-2x2 bottom-left">
		<?php echo $content['bottom-left']; ?>
	</div>
	<div class="clean-2x2 bottom-right">
		<?php echo $content['bottom-right']; ?>
	</div>
</div>
