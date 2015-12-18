<?php
/**
 * @file
 * Clean CBE panel layout.
 */

/**
 * Plugin definition.
 */
$plugin = array(
  'title' => t('Clean CBE'),
  'category' => t('Western'),
  'icon' => 'clean-cbe.png',
  'theme' => 'clean-cbe',
  'css' => '../../css/panel-layouts/clean-cbe.css',
  'regions' => array(
    'feature' => t('Feature'),
    'tabs' => t('Tabs'),
    'aside' => t('Aside'),
  ),
);
