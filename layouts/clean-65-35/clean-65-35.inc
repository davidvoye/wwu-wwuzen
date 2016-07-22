<?php

/**
 * @file
 * Plugin definition.
 */

$plugin = array(
  'title' => t('Clean 65/35'),
  'category' => t('Western'),
  'icon' => 'clean-65-35.png',
  'theme' => 'clean-65-35',
  'css' => '../../css/panel-layouts/clean-65-35.css',
  'regions' => array(
    'top' => t('100% Top'),
    'left' => t('65% Left side'),
    'right' => t('35% Right side'),
    'bottom' => t('100% Bottom')
  ),
);
