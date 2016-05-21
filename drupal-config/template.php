<?php
function personal_menu_link__menu(array $variables) {
$element = $variables['element'];
  $sub_menu = '';

  if($element['#attributes']) {
    unset($element['#attributes']['class']);
  }

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function hook_js_alter(&$javascript) {
  // Swap out jQuery to use an updated version of the library. 
  $javascript['misc/jquery.js']['data'] = drupal_get_path('module', 'jquery_update') . '/jquery.js';
}