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
<!-- Removed (because can be replaced by body {border-top...}): <div id="top-stripe"></div> -->
<div class="page"> <!-- Replaced #page with .page -->

  <header role="banner">

    <section class="western-header" aria-label="University Links, Search, and Navigation"> <!-- Replace #wwuheader with .western-header -->

      <p class="western-logo"><a href="http://www.wwu.edu">Western Washington University</a></p> <!-- Remove a.wwuLink class. Replace span.wwuLogo and span.wwuLink with p.western-logo -->

      <nav role="navigation" aria-label="University related navigation.">
        <div class="western-quick-links" aria-label="Western Quick Links"> <!-- Replaced div#menu-icons with div.western-quick-links-->
          <!-- Removed: <div class="quick-links" id="mobileWWUmenu"> -->
          <button>Toggle Quick Links</button> <!-- Changed "wwuMobileMenuIcon;?>"" to a <button> -->

          <ul> <!-- Removed ul#wwumenu -->
            <li><a href="http://www.wwu.edu/academic_calendar" title="Calendar"><span aria-hidden="true">c</span> <span>Calendar</span></a></li>
            <li><a href="http://www.wwu.edu/directory" title="Directory"><span aria-hidden="true">d</span> <span>Directory</span></a></li>
            <li><a href="http://www.wwu.edu/index" title="Index"><span aria-hidden="true">i</span> <span>Index</span></a></li>
            <li><a href="http://www.wwu.edu/campusmaps" title="Map"><span aria-hidden="true">l</span> <span>Map</span></a></li>
            <li><a href="http://mywestern.wwu.edu" title="myWestern"><span aria-hidden="true">w</span> <span>myWestern</span></a></li>
          </ul>
        </div> <!-- div.western-quick-links -->

        <div class="western-search" role="search" aria-label="University and Site Search"> <!-- change div.wwusearch to .western-search -->
          <button>Open Search</button> <!-- Removed div#s-toggle and div.icon-size and <a>. Changed to <button> -->
          
          <div class="western-search-widget" style="display:none;"> <!-- Replace div#search with .western-search-widget. Replaced style="display:none;" with div.hide class. -->

            <!-- Display the search box as rendered in template.php wwuzen_preprocess_page() -->
            <?php print $search_box; ?>
          </div> <!-- end div.western-search-widget -->
        </div> <!-- end div.western-search -->

        <button class="mobile-main-nav" aria-label="Open Mobile Main Navigation">Open Main Navigation</button> <!-- Replaced: <div class="main-navigation" id="mobileNavTrigger">
          $wwuMobileMainMenuIcon;?>" alt="Main menu links" class="main-menu-toggle icon-size">
        </div> -->
      </nav> <!-- end nav.western-mobile-icons -->

    </section> <!-- end section.western-header -->

    <section class="college-header current-site" aria-label="College Header"> <!-- Replace #header with .college-header -->
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
     <!-- <div id="collegeheader"> -->
        <!-- Group Logo (banner) and Site Name and Main Menu for Group -->
        <?php if ($logo): ?>
          <div class="college-banner">
            <img src="<?php print $logo;?>">
          </div> <!-- end div.college-banner --> <!-- Removed #logoImage and replaced <img> with <div> and text element-->
        <?php endif; ?>

        <div class="college-name"> <!-- Replace #name-and-slogan with .college-name -->
          <?php if ($site_name): ?>
            <!-- Removed: <h1 id="site-name"> -->
              <p><?php print $site_name; ?></p> <!-- Moved <p> to surround <a> -->
          <?php endif; ?>
        </div> <!-- div.college-name -->
        <!-- Removed site-slogan -->
      </a>
    </section> <!-- end section.college-header.current-site -->

    <!-- Remove: <div id="navigation"> -->
    <nav class="main-nav" id="main-menu" role="navigation" aria-label="Main navigation"> <!-- Added .main-nav -->
      <?php print render($page['navigation']); ?>
    </nav>
    <?php print render($page['header']); ?>

  </header>

  <main role="main"> <!-- Removed #main... so redundant woo! -->
    <header class="page-title"> <!-- Removed #department. Added .page-title from h1 -->
      <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1> <!-- Removed #page-title and replaced .title with .page-title in the <header> element above -->
        <?php endif; ?>
      <?php print $breadcrumb; ?>
    </header>

    <section class="content column"> <!-- Replaced div with section element and replaced #content with .content. Do we need #main-content for Skip to Content? -->
      <?php print render($page['highlighted']); ?>
      <!-- Removed: <a id="main-content"></a> -->
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </section> <!-- section.content -->

    <!-- Add secondary nav in first sidebar -->
    <?php if ($secondary_menu ): ?>
      <nav class="secondary-nav" role="navigation" aria-role="Secondary navigation"> <!-- Replaced #secondary-menu with .secondary-nav -->
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
    <!-- end of secondary nav -->

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="content-sidebar"> <!-- Replaced .sidebars with .content-sidebar -->

        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside> <!-- aside.content-sidebar -->
    <?php endif; ?>

  </main>

</div> <!-- div.page -->

  <footer role="contentinfo"> <!-- removed #footer -->
    <!-- Removed: <div id="footer-wrapper"> -->
      <div class="footer-left"> <!-- Replaced #footer-left with .footer-left -->
        <?php print render($page['footer_left']); ?>
      </div>

      <div class="footer-center"> <!-- Replaced #footer-center with .footer-center -->
        <?php print render($page['footer_center']); ?>
      </div>

      <div class="footer-right" role="complementary"> <!-- Replaced #footer-right with .footer-right -->
          <!-- Removed: <div id="footer-right-heading"> -->
        <h1><span>Western Washington University</span></h1> <!-- Replaced <h3> with <h1> -->
          <div class="western-contact-info"> <!-- Replaced #footer-right-contact-info with .western-contact-info -->
            <!-- Replaced all <img>s with classes on <p>s so they can be made :before pseudo elements -->
            <p>516 High Street<br>
              Bellingham, WA 98225</p> <!-- Replaced with a <br>: <p class="second-address-line"> -->
            <p><a href="tel:3606503000">(360) 650-3000</a></p>
            <p><a href="http://www.wwu.edu/wwucontact/">Contact Western</a></p>
          </div>

          <div class="western-social-media"> <!-- Replaced #footer-right-social-media-icons with .western-social-media -->
            <a href="http://www.facebook.com/westernwashingtonuniversity">Facebook</a>
            <a href="http://www.flickr.com/wwu">Flickr</a>
            <a href="https://twitter.com/#!/WWU">Twitter</a>
            <a href="http://www.youtube.com/wwu">Youtube</a>
            <a href="https://plus.google.com/+wwu/posts">Google Plus</a>
            <a href="http://news.wwu.edu/go/feed/1538/ru/atom/">RSS</a>
          </div>

        <?php print render($page['footer_right']); ?>
      </div>
  </footer> <!-- end footer -->

<?php print render($page['bottom']); ?>