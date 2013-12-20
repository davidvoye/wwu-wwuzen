<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean CHSS'),
  'category' => t('Western'),
  'icon' => 'clean-chss.png',
  'theme' => 'clean-chss',
  'css' => '../../css/panel-layouts/clean-chss.css',
  'regions' => array(
    'top_left' => t('Top Left'),
    'top_right' => t('Top Right'),
    'middle_left' => t('Middle Left'),
    'middle_center' => t('Middle Center'),
    'middle_right' => t('Middle Right'),
    'bottom_left' => t('Bottom Left'),
    'bottom_right' => t('Bottom Right')
  ),
);
