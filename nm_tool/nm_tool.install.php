<?php

/**
 * @file
 * Install, uninstall and update hooks for Tool module.
 */

use Drupal\user\RoleInterface;

/**
 * Implements hook_install().
 */
function nm_tool_install() {
  user_role_change_permissions(RoleInterface::AUTHENTICATED_ID, array(
    'generate tool message' => TRUE,
  ));
}
