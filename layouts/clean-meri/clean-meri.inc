<?php

/**
 * @file
 * Plugin definition.
 */

$plugin = array(
  'title' => t('Clean Meri'),
  'category' => t('Western'),
  'icon' => 'clean-meri.png',
  'theme' => 'clean-meri',
  'css' => '../../css/panel-layouts/clean-meri.css',
  'regions' => array(
    'row1' => t('100% First Row'),
    'row2' => t('100% Second Row'),
    'row3' => t('100% Third Row'),
    'left' => t('60% Left side'),
    'right' => t('40% Right side'),
    'bottom' => t('100% Bottom')
  ),
);
