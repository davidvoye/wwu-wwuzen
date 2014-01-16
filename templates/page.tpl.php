<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<div class="page">

  <header role="banner">

    <section class="western-header" aria-label="University Links, Search, and Navigation">
      <span class="western-logo"><a href="http://www.wwu.edu">Western Washington University</a></span>

      <nav role="navigation" aria-label="University related navigation.">

        <div class="western-quick-links" aria-label="Western Quick Links">
          <button role="button" aria-pressed="false" aria-label="Toggle Quick Links">Toggle Quick Links</button>
          <ul>
            <li><a href="http://www.wwu.edu/academic_calendar" title="Calendar"><span aria-hidden="true">c</span> <span>Calendar</span></a></li>
            <li><a href="http://www.wwu.edu/directory" title="Directory"><span aria-hidden="true">d</span> <span>Directory</span></a></li>
            <li><a href="http://www.wwu.edu/index" title="Index"><span aria-hidden="true">i</span> <span>Index</span></a></li>
            <li><a href="http://www.wwu.edu/campusmaps" title="Map"><span aria-hidden="true">l</span> <span>Map</span></a></li>
            <li><a href="http://mywestern.wwu.edu" title="myWestern"><span aria-hidden="true">w</span> <span>myWestern</span></a></li>
          </ul>
        </div>

        <div class="western-search" role="search" aria-label="University and Site Search">
          <button role="button" aria-pressed="false" aria-label="Open the search box">Open Search</button>

          <div class="western-search-widget">
            <?php print $search_box; ?>
          </div>
        </div>

        <button class="mobile-main-nav" role="button" aria-pressed="false" aria-label="Open Mobile Main Navigation">Open Main Navigation</button>
      </nav>

    </section>

    <div>
      <section class="site-header" aria-label="Site Header">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <?php if ($logo): ?>
            <div class="site-banner"><img src="<?php print $logo;?>" alt=""></div>
          <?php endif; ?>
          <div class="site-name">
            <?php if ($site_name): ?>
              <p><span><?php print $site_name; ?></span></p>
            <?php endif; ?>
          </div>
        </a>
      </section>

      <nav class="main-nav" id="main-menu" role="navigation" aria-label="Main navigation">
        <?php print render($page['navigation']); ?>
      </nav>
      <?php print render($page['header']); ?>
    </div>

  </header>

  <main role="main">
    <header class="page-title">
      <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
      <?php print $breadcrumb; ?>
    </header>

    <section class="content column">
      <?php print render($page['highlighted']); ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </section>

    <?php if ($secondary_menu ): ?>
      <nav class="secondary-nav" role="navigation" aria-role="Secondary navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
        'heading' => array(
          'text' => $secondary_menu_heading,
          'level' => 'h2',
          'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="content-sidebar">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </main>

</div> <!-- end div.page -->

  <footer role="contentinfo">
    <div class="footer-wrapper">

      <div class="footer-left">
        <?php print render($page['footer_left']); ?>
      </div>

      <div class="footer-center">
        <?php print render($page['footer_center']); ?>
          <div class="western-privacy-statement">
            <a href="http://www.wwu.edu/privacy/">Website Privacy Statement</a>
          </div>
      </div>

      <div class="footer-right" role="complementary">
        <h1><a href="http://www.wwu.edu">Western Washington University</a></h1>

          <div class="western-contact-info">
            <p class="western-address">516 High Street<br>
              Bellingham, WA 98225</p>
            <p class="western-telephone"><a href="tel:3606503000">(360) 650-3000</a></p>
            <p class="western-contact"><a href="http://www.wwu.edu/wwucontact/">Contact Western</a></p>
          </div>

          <div class="western-social-media">
            <ul>
              <li><a class="westernIcons-FacebookIcon" href="http://www.facebook.com/westernwashingtonuniversity">Facebook</a></li>
              <li><a class="westernIcons-FlickrIcon" href="http://www.flickr.com/wwu">Flickr</a></li>
              <li><a class="westernIcons-TwitterIcon" href="https://twitter.com/#!/WWU">Twitter</a></li>
              <li><a class="westernIcons-YouTubeIcon" href="http://www.youtube.com/wwu">Youtube</a></li>
              <li><a class="westernIcons-GooglePlusIcon" href="https://plus.google.com/+wwu/posts">Google Plus</a></li>
              <li><a class="westernIcons-RSSicon" href="http://news.wwu.edu/go/feed/1538/ru/atom/">RSS</a></li>
            </ul>
          </div>


        <?php print render($page['footer_right']); ?>
      </div>
    </div> <!-- end div.footer-wrapper -->
  </footer>

<?php print render($page['bottom']); ?>
