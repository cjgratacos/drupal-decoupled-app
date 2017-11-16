<?php

namespace Drupal\survey;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Form submission entity entity.
 *
 * @see \Drupal\survey\Entity\FormSubmissionEntity.
 */
class FormSubmissionEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\survey\Entity\FormSubmissionEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished form submission entity entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published form submission entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit form submission entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete form submission entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add form submission entity entities');
  }

}
