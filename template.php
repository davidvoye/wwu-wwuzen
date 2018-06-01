<?php

/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * A QUICK OVERVIEW OF DRUPAL THEMING
 *
 *   The default HTML for all of Drupal's markup is specified by its modules.
 *   For example, the comment.module provides the default HTML markup and CSS
 *   styling that is wrapped around each comment. Fortunately, each piece of
 *   markup can optionally be overridden by the theme.
 *
 *   Drupal deals with each chunk of content using a "theme hook". The raw
 *   content is placed in PHP variables and passed through the theme hook, which
 *   can either be a template file (which you should already be familiary with)
 *   or a theme function. For example, the "comment" theme hook is implemented
 *   with a comment.tpl.php template file, but the "breadcrumb" theme hooks is
 *   implemented with a theme_breadcrumb() theme function. Regardless if the
 *   theme hook uses a template file or theme function, the template or function
 *   does the same kind of work; it takes the PHP variables passed to it and
 *   wraps the raw content with the desired HTML markup.
 *
 *   Most theme hooks are implemented with template files. Theme hooks that use
 *   theme functions do so for performance reasons - theme_field() is faster
 *   than a field.tpl.php - or for legacy reasons - theme_breadcrumb() has "been
 *   that way forever."
 *
 *   The variables used by theme functions or template files come from a handful
 *   of sources:
 *   - the contents of other theme hooks that have already been rendered into
 *     HTML. For example, the HTML from theme_breadcrumb() is put into the
 *     $breadcrumb variable of the page.tpl.php template file.
 *   - raw data provided directly by a module (often pulled from a database)
 *   - a "render element" provided directly by a module. A render element is a
 *     nested PHP array which contains both content and meta data with hints on
 *     how the content should be rendered. If a variable in a template file is a
 *     render element, it needs to be rendered with the render() function and
 *     then printed using:
 *       <?php print render($variable); ?>
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. With this file you can do three things:
 *   - Modify any theme hooks variables or add your own variables, using
 *     preprocess or process functions.
 *   - Override any theme function. That is, replace a module's default theme
 *     function with one you write.
 *   - Call hook_*_alter() functions which allow you to alter various parts of
 *     Drupal's internals, including the render elements in forms. The most
 *     useful of which include hook_form_alter(), hook_form_FORM_ID_alter(),
 *     and hook_page_alter(). See api.drupal.org for more information about
 *     _alter functions.
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   If a theme hook uses a theme function, Drupal will use the default theme
 *   function unless your theme overrides it. To override a theme function, you
 *   have to first find the theme function that generates the output. (The
 *   api.drupal.org website is a good place to find which file contains which
 *   function.) Then you can copy the original function in its entirety and
 *   paste it in this template.php file, changing the prefix from theme_ to
 *   wwuzen_. For example:
 *
 *     original, found in modules/field/field.module: theme_field()
 *     theme override, found in template.php: wwuzen_field()
 *
 *   where wwuzen is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_field() function.
 *
 *   Note that base themes can also override theme functions. And those
 *   overrides will be used by sub-themes unless the sub-theme chooses to
 *   override again.
 *
 *   Zen core only overrides one theme function. If you wish to override it, you
 *   should first look at how Zen core implements this function:
 *     theme_breadcrumbs()      in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called theme hook suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node--forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and theme hook suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440 and http://drupal.org/node/1089656
 */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function wwuzen_preprocess_html(&$variables, $hook) {
  // Add the slide effect for our search box and wwumenu.
  drupal_add_library('system','ui');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  // $variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function wwuzen_preprocess_page(&$variables, $hook) {
  // Render the search box variable so we can place it in the header.
  $search_box = drupal_get_form('thundersearch_form');
  $variables['search_box'] = drupal_render($search_box);
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function wwuzen_preprocess_node(&$variables, $hook) {
  /*
   * Variables for nodes embedded via Node Embed.
   *
   * The following Node Embed parameters are implemented:
   *   - align: left, right, or center.
   *   - width: 25, 33, 50, 66, 75, 100 (percentages).
   *   - display_title: if "yes", title is displayed.
   *   - title_link: if "yes", title will be displayed as a link to embedded
   *       node.
   */
  if ($variables['view_mode'] === 'node_embed') {
    // Remove remains of escaped ampersands from variable names.
    $ne_vars = array();

    foreach ($variables['node_embed_parameters'] as $key => $val) {
      $k = str_replace('amp;', '', $key);
      $ne_vars[$k] = $val;
    }

    $variables['ne_classes'] = '';

    if (isset($ne_vars['align'])) {
      $variables['ne_classes'] .= ' ' . check_plain($ne_vars['align']);
    }

    if (isset($ne_vars['width'])) {
      $width = filter_var(check_plain($ne_vars['width']), FILTER_SANITIZE_NUMBER_INT);
      $variables['ne_classes'] .= ' helper-width-' . $width . '-percent';
    }

    $variables['ne_display_title'] = isset($ne_vars['display_title']) && strnatcasecmp($ne_vars['display_title'], "yes") === 0;
    $variables['ne_title_link'] = isset($ne_vars['title_link']) && strnatcasecmp($ne_vars['title_link'], "yes") === 0;
  }

  // Optionally, run node-type-specific preprocess functions, like
  // wwuzen_preprocess_node_page() or wwuzen_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;

  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  // if (strpos($variables['region'], 'sidebar_') === 0) {
  //   $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  // }
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function wwuzen_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

/**
 * Alter the node render array.
 *
 * @param $build
 *   An array of variables that comprise the node fields and information.
 */
/*function wwuzen_node_view_alter(&$build) {
  if (isset($build['field_slideshow_images'])) {
    $path = drupal_get_path('theme', 'wwuzen');

    $images_loaded = array(
      'type' => 'file',
      'data' => $path . '/js/imagesloaded.pkgd.min.js',
      'group' => JS_LIBRARY,
    );

    $slideshow_fix = array(
      'type' => 'file',
      'data' => $path . '/js/slideshow-fix.min.js',
      'group' => JS_DEFAULT,
    );

    $build['field_slideshow_images']['#attached']['js'][] = $images_loaded;
    $build['field_slideshow_images']['#attached']['js'][] = $slideshow_fix;
  }
}
*/

/**
 * Perform necessary alterations to JavaScript be it is presented on the page.
 *
 * Various scripts are excluded from the footer as they are needed globally on
 * the page.
 *
 * @param $javascript
 *   The array of JavaScript files that have been added to the page.
 */
function wwuzen_js_alter(&$javascript) {
  foreach ($javascript as &$value) {
    $data = $value['data'];

    if (!is_array($data)) {
      $header = (
        strpos($data, 'ajax') ||
        strpos($data, 'analytics') ||
        strpos($data, 'drupal') ||
        strpos($data, 'imce') ||
        strpos($data, 'jquery') ||
        strpos($data, 'misc')
        // Add addotional footer exlcudes here.
      );
    }
    else {
      $header = FALSE;
    }

    $value['scope'] = ($header) ? 'header' : 'footer';
  }
}

/**
 * Implements theme_menu_link().
 *
 * Allow display of a single link in the main menu as an icon instead of text.
 * The option may be set in the administration page for all sub-themes of
 * wwuzen.
 *
 * @param $variables
 *   The associative array of elements in the current menu.
 */
function wwuzen_menu_link(array $variables) {
  $element = $variables['element'];
  $menu_name = $element['#original_link']['menu_name'];

  if (theme_get_setting('home_icon') === 1 && theme_get_setting('home_path') === $element['#href']) {
    $element['#localized_options']['html'] = TRUE;
    $element['#localized_options']['attributes']['class'][] = 'menu-link-icon';

    $format = "<li%s>%s</li>\n";
    $output = l('<span class="menu-link-text">' . $element['#title'] . '</span>', $element['#href'], $element['#localized_options']);

    $link = sprintf($format, drupal_attributes($element['#attributes']), $output);
  }
  else {
    $link = theme_menu_link($variables);
  }

  return $link;
}

/**
 * Implements theme_date_nav_title().
 */
function wwuzen_date_nav_title($params) {
  $granularity = $params['granularity'];
  $view = $params['view'];
  $date_info = $view->date_info;
  $link = !empty($params['link']) ? $params['link'] : FALSE;
  $format = !empty($params['format']) ? $params['format'] : NULL;

  switch ($granularity) {
    case 'year':
      $title = $date_info->year;
      $date_arg = $date_info->year;
      break;

    case 'month':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'F Y' : 'M');
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month);
      break;

    case 'day':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'l, F j, Y' : 'l, F j');
      $title = date_format_date($date_info->min_date, 'custom', $format);
      $date_arg = $date_info->year . '-' . date_pad($date_info->month) . '-' . date_pad($date_info->day);
      break;

    case 'week':
      $format = !empty($format) ? $format : (empty($date_info->mini) ? 'F j, Y' : 'F j');
      $title = t('Week of @date', array(
        '@date' => date_format_date($date_info->min_date, 'custom', $format),
      ));
      $date_arg = $date_info->year . '-W' . date_pad($date_info->week);
      break;
  }

  if (!empty($date_info->mini) || $link) {
    $attributes = array('title' => t('View full page month'));
    $url = date_pager_url($view, $granularity, $date_arg, TRUE);

    return l($title, $url, array('attributes' => $attributes));
  }
  else {
    return $title;
  }
}

/**
 * Implements theme_preprocess_views_view_unformatted().
 */
function wwuzen_preprocess_views_view_unformatted(&$variables) {
  foreach ($variables['classes'] as $row_index => $row_classes) {
    foreach ($row_classes as $row_class_index => $row_class) {
      $variables['classes'][$row_index][$row_class_index] = drupal_html_class($row_class);
    }

    $variables['classes_array'][$row_index] = implode(' ', $variables['classes'][$row_index]);
  }
}
