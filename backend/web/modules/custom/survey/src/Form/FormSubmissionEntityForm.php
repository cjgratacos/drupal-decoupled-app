<?php

namespace Drupal\survey\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Form submission entity edit forms.
 *
 * @ingroup survey
 */
class FormSubmissionEntityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\survey\Entity\FormSubmissionEntity */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = &$this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Form submission entity.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Form submission entity.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.form_submission_entity.canonical', ['form_submission_entity' => $entity->id()]);
  }

}
