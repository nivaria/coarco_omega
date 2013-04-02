<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function coarco_omega_preprocess_page(&$vars) {
  if (isset($_GET['overlay']) && $_GET['overlay'] == 'true') {
    $vars['theme_hook_suggestions'][] = 'page__overlay';
  }
  $breadcrumb = drupal_get_breadcrumb(); 
  if (isset($vars['node']) && $vars['node']->type == "empresa") {
    $title = isset($vars['node']->field_nombre_comercial_empresa[LANGUAGE_NONE]) ?
      $vars['node']->field_nombre_comercial_empresa[LANGUAGE_NONE][0]['value']
      :
      $vars['node']->title;
    if (count($breadcrumb) < 2) {
      drupal_set_title($title);
      $vars['title'] = $title;
      $breadcrumb[] = $title;
      drupal_set_breadcrumb($breadcrumb);
    }
  }
  else if (!drupal_is_front_page ()) {
    $breadcrumb[] = drupal_get_title();
    drupal_set_breadcrumb($breadcrumb);
  }
}

function coarco_omega_preprocess_html(&$vars) {
  if (isset($_GET['overlay']) && $_GET['overlay'] == 'true') {
    $vars['theme_hook_suggestions'][] = 'html__overlay';
  }
  
  drupal_add_css("http://fonts.googleapis.com/css?family=Armata", "external");
}

function coarco_omega_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode('', $breadcrumb) . '</div>';
    return $output;
  }
}

function coarco_omega_preprocess_mimemail_message(&$variables) {
  global $base_url;
  global $language;
  $variables['logo'] = $base_url . theme_get_setting('logo');
  $variables['front_page'] = url();
  $languages = language_list();
  $language = !empty($variables['recipient']->language) ? $languages[$variables['recipient']->language] : $language;
  $variables['private_area_link'] = l(t('Manage my account', array(), array('language' => $language->language)),
    'user',
    array(
      'language' => $language,
      'attributes' => array(
          'style' => 'color:#FFF;text-decoration:none',
      )
    )
  );  
  $variables['privacy_policy_link'] = l(t('Privacy policy', array(), array('language' => $language->language)),
    'node/48',
    array(
      'language' => $language,
      'attributes' => array(
          'style' => 'color:#FFF;text-decoration:none',
      )
    )
  );  
  $variables['contact_link'] = l(t('Contact', array(), array('language' => $language->language)),
    'node/47',
    array(
      'language' => $language,
      'attributes' => array(
          'style' => 'color:#FFF;text-decoration:none',
      )
    )
  );  
}
