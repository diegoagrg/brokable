<?php

namespace Drupal\simplemeta;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of SimpleMeta entities.
 *
 * @ingroup simplemeta
 */
class SimplemetaEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('SimpleMeta ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\simplemeta\Entity\SimplemetaEntity */
    $row['id'] = $entity->id();
    $row['name'] = Link::fromTextAndUrl(
      $entity->label(),
      new Url(
        'entity.simplemeta.edit_form', [
          'simplemeta' => $entity->id(),
        ]
      )
    );
    return $row + parent::buildRow($entity);
  }

}
