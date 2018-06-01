<?php

/**
 * @file
 * Theme settings callbacks for the WWUZen theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function wwuzen_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  if (is_null($form_state)) {
    $form = array('');
  }

  $form['theme_settings']['home_icon'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Home icon'),
    '#default_value' => theme_get_setting('home_icon'),
    '#description'   => t("Display a link to the front page as an icon instead of text."),
  );

  $form['home_icon_settings'] = array(
    '#type'  => 'fieldset',
    '#title' => t('Home icon settings'),
  );

  $form['home_icon_settings']['home_path'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Home path'),
    '#default_value' => theme_get_setting('home_path'),
    '#description'   => t("Enter the absolute path of the menu link to be replaced. Use '&lt;front&gt;' to match the default landing page for the entire domain."),
  );
}
