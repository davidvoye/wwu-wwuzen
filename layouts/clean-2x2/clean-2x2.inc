<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean 2x2'),
  'category' => t('Western'),
  'icon' => 'clean-2x2.png',
  'theme' => 'clean-2x2',
  'css' => '../../css/panel-layouts/clean-2x2.css',
  'regions' => array(
	'top-left' => t('Top Left'),
    'top-right' => t('Top Right'),
	'bottom-left' => t('Bottom Left'),
	'bottom-right' => t('Bottom Right'),
  ),
);
