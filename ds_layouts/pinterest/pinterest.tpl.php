<div class="<?php print $classes;?> clearfix pinterest">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if ($top): ?>
    <div class="ds-top<?php print $top_classes; ?>">
      <?php print $top; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($center): ?>
    <div class="ds-center<?php print $center_classes; ?>">
      <?php print $center; ?>
    </div>
  <?php endif; ?>
    
  <?php if ($bottom): ?>
    <div class="ds-bottom<?php print $bottom_classes; ?>">
      <?php print $bottom ?>
    </div>
  <?php endif; ?>
</div>