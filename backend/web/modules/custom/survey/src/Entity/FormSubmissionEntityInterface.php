<?php

namespace Drupal\survey\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Form submission entity entities.
 *
 * @ingroup survey
 */
interface FormSubmissionEntityInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Form submission entity name.
   *
   * @return string
   *   Name of the Form submission entity.
   */
  public function getName();

  /**
   * Sets the Form submission entity name.
   *
   * @param string $name
   *   The Form submission entity name.
   *
   * @return \Drupal\survey\Entity\FormSubmissionEntityInterface
   *   The called Form submission entity entity.
   */
  public function setName($name);

  /**
   * Gets the Form submission entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Form submission entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Form submission entity creation timestamp.
   *
   * @param int $timestamp
   *   The Form submission entity creation timestamp.
   *
   * @return \Drupal\survey\Entity\FormSubmissionEntityInterface
   *   The called Form submission entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Form submission entity published status indicator.
   *
   * Unpublished Form submission entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Form submission entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Form submission entity.
   *
   * @param bool $published
   *   TRUE to set this Form submission entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\survey\Entity\FormSubmissionEntityInterface
   *   The called Form submission entity entity.
   */
  public function setPublished($published);

}
