<?php
function ds_product_detail() {
  return array(
    'label' => t('Product detail'),
    'regions' => array(
      'product_left' => t('Left'),
      'product_top' => t('Top'),
      'product_center' => t('Center'),
      'product_bottom' => t('Bottom'),
      'product_links' => t('Links'),
      'product_foot' => t('Foot'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>