<?php
/**
 * @file
 * Returns the HTML for an embedded slideshow node.
 *
 */
?>

<div class="embed <?php print $ne_classes;?>">
  <?php if ($ne_display_title): ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>>
        <?php if ($ne_title_link): ?>
      	  <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
      	<?php else: ?>
      	  <?php print $title; ?>
      	<?php endif; ?>
      </h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  <?php endif; ?>
  <?php print render($content); ?>
</div>