<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean Energy'),
  'category' => t('Western'),
  'icon' => 'clean-energy.png',
  'theme' => 'clean-energy',
  'css' => '../../css/panel-layouts/clean-energy.css',
  'regions' => array(
    'top_left' => t('Top Left Column'),
    'top_right' => t('Top Right Column'),
    'bottom_left' => t('Bottom Left Column'),
    'bottom_right' => t('Bottom Right Column')
  ),
);
