<?php

/**
 * @file
 * Contains form_submission_entity.page.inc.
 *
 * Page callback for Form submission entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Form submission entity templates.
 *
 * Default template: form_submission_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_form_submission_entity(array &$variables) {
  // Fetch FormSubmissionEntity Entity Object.
  $form_submission_entity = $variables['elements']['#form_submission_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
