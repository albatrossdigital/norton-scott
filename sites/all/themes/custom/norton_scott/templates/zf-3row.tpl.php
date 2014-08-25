<?php
/**
 * @file
 * Template for Zurb Foundation Three row Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-3row <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="row reverse">
    <div class="medium-8 columns">
    <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
      <?php print $header; ?>
    </<?php print $header_wrapper ?>>
    </div>
  </div>

  <div class="row">
    <div class="medium-3 columns">
    <<?php print $ds_content_wrapper ?> class="group-content<?php print $ds_content_classes; ?>">
      <?php print $ds_content; ?>
    </<?php print $ds_content_wrapper ?>>
    </div>
  </div>

  <div class="row">
    <div class="medium-1 columns">
    <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </<?php print $footer_wrapper ?>>
    </div>
  </div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
