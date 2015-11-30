<?php

// Plugin definition
$plugin = array(
  'title' => t('Art Home'),
  'category' => t('Western'),
  'icon' => 'art-home.png',
  'theme' => 'art-home',
  'css' => '../../css/panel-layouts/art-home.css',
  'regions' => array(
    'top_left' => t('Top Left'),
    'top_right' => t('Top Right'),
    'bottom_left' => t('Bottom Left'),
    'bottom_center' => t('Bottom Center'),
    'bottom_right' => t('Bottom Right')
  ),
);
