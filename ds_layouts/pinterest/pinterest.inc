<?php
function ds_pinterest() {
  return array(
    'label' => t('Pinterest'),
    'regions' => array(
      'top' => t('Top'),
      'center' => t('Center'),
      'bottom' => t('Bottom')
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>