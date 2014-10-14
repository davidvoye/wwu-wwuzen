<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean wce homepage'),
  'category' => t('Western'),
  'icon' => 'clean-wce-homepage.png',
  'theme' => 'clean-wce-homepage',
  'css' => '../../css/panel-layouts/clean-wce-homepage.css',
  'regions' => array(
    'topleft' => t('Top Left'),
    'top' => t('Top'),
    'topright' => t('Top Right'),
    'middleleft' => t('Middle Left'),
    'middleright' => t('Middle right'),
    'bottomleft' => t('Bottom Left'),
    'bottomright' => t('Bottom Right'),
  ),
);
