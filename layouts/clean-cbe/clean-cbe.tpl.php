<?php
/**
 * @file
 * Template file for clean-cbe panel layout.
 *
 * Template for panel layout with main section at the top, followed by a 2/3
 * left colume and a 1/3 right column below.
 */
?>
<section class="clean-cbe clean-cbe-container">

  <section class="clean-cbe clean-cbe-feature">
    <?php echo $content['feature'] ?>
  </section>

  <section class="clean-cbe clean-cbe-tabs">
    <?php echo $content['tabs'] ?>
  </section>

  <section class="clean-cbe clean-cbe-aside">
    <?php echo $content['aside'] ?>
  </section>

</section>
