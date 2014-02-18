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

<div class="clean-2x2 clean-2x2-top clean-2x2-container">
	<div class="clean-2x2 clean-2x2-top clean-2x2-left">
		<?php echo $content['top-left']; ?>
	</div>
	<div class="clean-2x2 2x2-top clean-2x2-right">
		<?php echo $content['top-right']; ?>
	</div>
</div>
<div class="clean-2x2 clean-2x2-bottom clean-2x2-container">
	<div class="clean-2x2 clean-2x2-bottom clean-2x2-left">
		<?php echo $content['bottom-left']; ?>
	</div>
	<div class="clean-2x2 2x2-bottom clean-2x2-right">
		<?php echo $content['bottom-right']; ?>
	</div>
</div>
