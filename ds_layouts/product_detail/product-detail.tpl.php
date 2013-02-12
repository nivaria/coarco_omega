<div class="<?php print $classes;?> clearfix product-detail">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
    
  <?php if ($product_left): ?>
    <div class="ds-product-left<?php print $product_left_classes; ?>" >
      <?php print $product_left; ?>
    </div>
  <?php endif; ?>
  
  <?php if ($product_top || $product_center || $product_bottom || $product_links): ?>
    <?php if ($product_top): ?>
      <div class="ds-product-top<?php print $product_top_classes; ?>" >
        <?php print $product_top; ?>
      </div>
    <?php endif; ?>
    <?php if ($product_center): ?>
      <div class="ds-product-center<?php print $product_center_classes; ?>" >
        <?php print $product_center; ?>
      </div>
    <?php endif; ?>
    <?php if ($product_bottom): ?>
      <div class="ds-product-bottom<?php print $product_bottom_classes; ?>" >
        <?php print $product_bottom; ?>
      </div>
    <?php endif; ?>
    <?php if ($product_links): ?>
      <div class="ds-product-links<?php print $product_links_classes; ?>" >
        <?php print $product_links ?>
      </div>
    <?php endif; ?>  
  <?php endif; ?>
  <?php if ($product_foot): ?>
    <div class="ds-product-foot<?php print $product_foot_classes; ?>" >
      <?php print $product_foot ?>
    </div>
  <?php endif; ?>  
</div>