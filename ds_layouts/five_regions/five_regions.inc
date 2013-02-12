<?php
function ds_five_regions() {
  return array(
    'label' => t('Five regions'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
      'bottom' => t('Bottom')
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
?>