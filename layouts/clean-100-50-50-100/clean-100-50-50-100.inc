<?php

// Plugin definition
$plugin = array(
  'title' => t('Clean 100/50/50/100'),
  'category' => t('Western'),
  'icon' => 'clean-100-5050-100.png',
  'theme' => 'clean-100-50-50-100',
  'css' => '../../css/panel-layouts/clean-100-50-50-100.css',
  'regions' => array(
  	'top' => t('100% Top'),
    'left' => t('50% Left side'),
    'right' => t('50% Right side'), 
    'bottom' => t('100% Bottom')
  ),
);
