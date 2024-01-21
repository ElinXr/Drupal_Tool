<?php

namespace Drupal\nm_tool\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller which provides the hello message.
 */
class ToolController extends ControllerBase {

  /**
   * Display the hello message.
   *
   * @return array
   *   Return markup array.
   */
  public function showMessage() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Tool Message'),
    ];
  }

}
