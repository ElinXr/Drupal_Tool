<?php

/**
 * @file
 * Provides a message.
 */

/**
 * implements hook_help().
 *
 * @param $route_name
 * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
 *
 * @return string|void
 */
function nm_tool_help($route_name, \Drupal\Core\Routing\RouteMatchInterface $route_match){
  // provides help text to the user via the UI.
  switch ($route_name) {
    // Provides help text for the block module.
    case 'help.page.nm_tool':
      $output = '<h3>' . t('About') . '</h3>';
      $output .= '<p>' . t('This module will print a message ') . '</p>';
      return $output;
  }

}
