<?php

namespace Drupal\simplemeta\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for SimpleMeta entities.
 */
class SimplemetaEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
