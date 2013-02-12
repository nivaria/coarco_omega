<div class="<?php print $classes;?> clearfix fiveregions">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <?php if ($top && $top!="&nbsp;" ): ?>
    <div class="ds-top<?php print $top_classes; ?>" >
      <?php print $top; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($left && $left!="&nbsp;" ): ?>
    <div class="ds-left<?php print $left_classes; ?>" >
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($center && $center!="&nbsp;" ): ?>
    <div class="ds-center<?php print $center_classes; ?>" >
      <?php print $center; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($right && $right!="&nbsp;" ): ?>
    <div class="ds-right<?php print $right_classes; ?>" >
      <?php print $right; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($bottom && $bottom!="&nbsp;" ): ?>
    <div class="ds-bottom<?php print $bottom_classes; ?>" >
      <?php print $bottom ?>
    </div>
  <?php endif; ?>
</div>