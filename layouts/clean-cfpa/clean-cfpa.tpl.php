<div class="clean-cfpa cfpa-top clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top']; ?>
</div>
<div class="clean-cfpa cfpa-bottom clearfix">
	<div class="clean-cfpa cfpa-bottom-left">
		<?php print $content['bottom-left']; ?>
	</div>
	<div class="clean-cfpa cfpa-bottom-right">
		<div class="clean-cfpa cfpa-bottom-right-top">
			<?php print $content['bottom-right-top']; ?>
		</div>
		<div class="clean-cfpa cfpa-bottom-right-bottom">
			<?php print $content['bottom-right-bottom']; ?>
		</div>
	</div>
</div>
