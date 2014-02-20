<div class="clean-cfpa cfpa-top clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php print $content['top']; ?>
</div>
<div class="clean-cfpa cfpa-bottom clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<div class="clean-cfpa cfpa-bottom-left" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<?php print $content['bottom-left']; ?>
	</div>
	<div class="clean-cfpa cfpa-bottom-right" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
		<div class="clean-cfpa cfpa-bottom-right-top" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
			<?php print $content['bottom-right-top']; ?>
		</div>
		<div class="clean-cfpa cfpa-bottom-right-bottom" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
			<?php print $content['bottom-right-bottom']; ?>
		</div>
	</div>
</div>
