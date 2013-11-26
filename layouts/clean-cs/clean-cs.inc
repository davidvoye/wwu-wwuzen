<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean CS'),
  'category' => t('Western'),
  'icon' => 'clean-cs.png',
  'theme' => 'clean-cs',
  'css' => '../../css/panel-layouts/clean-cs.css',
  'regions' => array(
    'top-left' => t('Top Left Column'),
    'top-right' => t('Top Right Column'),
    'upper-middle-left' => t('Upper Middle Left Column'),
    'upper-middle-right' => t('Upper Middle Right Column'),
    'lower-middle-left' => t('Lower Middle Left Column'),
    'lower-middle-right' => t('Lower Middle Right Column'),
    'bottom-left' => t('Bottom Left Column'),
    'bottom-right' => t('Bottom Right Column')
  ),
);
