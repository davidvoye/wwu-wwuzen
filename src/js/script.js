/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an anonymous closure. See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

  /**This is to stop Chrome from flashing styles to the screen on page load
   * http://www.learningjquery.com/2008/10/1-way-to-avoid-the-flash-of-unstyled-content/
   * The following code runs after the body loads which then allows the menu to appear.
   */
  Drupal.behaviors.noTransitionFlash = {
    attach: function () {
      $('html').removeClass('preload');
    }
  };

  // START SITE NAME TYPOGRAPHY
  Drupal.behaviors.siteNameTypography = {
    attach: function (context) {
      if (context == document) {
        var siteName = $(".site-name p").text();
        var typographyAnd = siteName.replace("and", "<span class=\"diminutive-type\">and</span>");
        var typographyCollegeOf = typographyAnd.replace("College of", "<span class=\"diminutive-type\">College of</span>");
        var typographyDepartmentOf = typographyAnd.replace("Department of", "<span class=\"diminutive-type\">Department of</span>");
        var typographyDivisionOf = typographyAnd.replace("Division of", "<span class=\"diminutive-type\">Division of</span>");
        var typographyOfficeOf = typographyAnd.replace("Office of", "<span class=\"diminutive-type\">Office of</span>");

        $('.site-name p span:contains(College of)').replaceWith(typographyCollegeOf);
        $('.site-name p span:contains(Department of)').replaceWith(typographyDepartmentOf);
        $('.site-name p span:contains(Division of)').replaceWith(typographyDivisionOf);
        $('.site-name p span:contains(Office of)').replaceWith(typographyOfficeOf);
      }
    }
  };
  // END SITE NAME TYPOGRAPHY

  // START SEARCH TOGGLE ON CLICK
  Drupal.behaviors.searchSlider = {
    attach: function (context) {
      $('.western-search > button', context).click(function () {
        var search = $('.western-search-widget');
        var searchInput = $('.western-search-widget').find('form:first').find('input:first');
        //var searchInput = document.getElementById("edit-search-keys");
        if (search.is(':visible')) {
          search.hide("slide", { direction: "right" }, 400);
        } else {
          search.show("slide", { direction: "right" }, 200);
          searchInput.focus();
        }
      });
    }
  };
  // END SEARCH TOGGLE ON CLICK

  // START QUICK LINKS TOGGLE ON CLICK
  Drupal.behaviors.mobileWwuMenu = {
    attach: function (context) {
      $('.western-quick-links button', context).click(function () {
        var $quicklinks = $('.western-quick-links ul');

        if ($quicklinks.is(':visible')) {
          $quicklinks.hide("slide", { direction: "right" }, 400);
        } else {
          $quicklinks.show("slide", { direction: "right" }, 200, function() {
            $quicklinks.css({
              'display': 'table'
            });
          });
        }
      });
    }
  };
  // END QUICK LINKS TOGGLE ON CLICK

  // START MOBILE MAIN MENU TOGGLE ON CLICK
  Drupal.behaviors.mobileWwuMainMenu = {
    attach: function (context) {
      var $mainMenu,
          $mobileMainNav,
          $subMenus;

      $mobileMainNav = $('.mobile-main-nav', context);
      $mainMenu = $('#main-menu div > ul.menu');
      $subMenus = $mainMenu.find('ul');

      $mobileMainNav.click(function () {
        if ($mainMenu.is(':visible')) {
          $mainMenu.css('display', 'block');
          $mainMenu.find('.opened').removeClass('opened');
          $mainMenu.slideUp();
          $subMenus.slideUp();
        } else {
          $mainMenu.slideDown({
            complete: function () {
              $mainMenu.css('display', 'table');
            }
          });
        }
      });
    }
  };
  //END MOBILE MAIN MENU TOGGLE ON CLICK

  // START MENU EXPANSION ON CLICK
  Drupal.behaviors.menuExpansion = {
    attach: function (context) {
      var $links,
          $menuItems,
          $submenuParents,
          $window;

      function bindHandlers() {
        $submenuParents.unbind('click', clickSubmenuParent);
        $links.unbind('click', clickLink);

        if ($window.width() <= 800) {
          $submenuParents.click(clickSubmenuParent);
          $links.click(clickLink);
        }
      }

      function clickLink(event) {
        event.stopPropagation();
      }

      function clickSubmenuParent() {
        var $opened,
            $this;

        $this = $(this);

        if ($this.hasClass('opened')) {
          $this.removeClass('opened');
          $this.find('.opened').removeClass('opened');
          $this.find('ul').slideUp();
        } else {
          $opened = $this.siblings('.opened');
          $opened.removeClass('opened');
          $opened.find('.opened').removeClass('opened');
          $opened.find('ul').slideUp();
          $this.addClass('opened');
          $this.children('ul').slideDown();
        }
      }

      $window = $(window, context);
      $menuItems = $('#main-menu div > ul.menu li', context);
      $submenuParents = $menuItems.has('ul');
      $links = $menuItems.find('a');

      $menuItems.click(function (event) {
        event.stopPropagation();
      });

      $window.resize(function () {
        bindHandlers();
      });

      bindHandlers();
    }
  };
  // END MENU EXPANSION ON CLICK

  // START MOBILE MAIN MENU AND QUICK LINKS TOGGLE ON RESIZE
  Drupal.behaviors.toggleMenuOnResize = {
    attach: function (context) {
      var $mainMenu,
          $subMenus,
          $quicklinks,
          $window;

      function bindHandlers() {
        $window.unbind('resize', resizeWindow);

        if ($window.width() <= 801) {
          $window.resize(resizeWindow);
        }
      }

      function resizeWindow() {
        if ($window.width() > 800) {
          $mainMenu.removeAttr('style');
          $subMenus.removeAttr('style');
          $mainMenu.find('.opened').removeClass('opened');
          $quicklinks.css('display','table');
        } else {
          $quicklinks.css('display','none');
        }
      }

      $mainMenu = $('#main-menu div > ul.menu');
      $subMenus = $mainMenu.find('ul');
      $quicklinks = $('.western-quick-links ul');
      $window = $(window, context);
      $window.resize(bindHandlers);
      bindHandlers();
    }
  };
  // END MOBILE MAIN MENU AND QUICK LINKS TOGGLE ON RESIZE

  // START Tooltips for the staff and faculty directories
  Drupal.behaviors.userModuleIcons = {
    attach: function (context) {
      $('.user-module div', context).click(function(){
        if($(this).hasClass('tooltip')){
          $(this).removeClass('tooltip');
        } else {
          $(this).addClass('tooltip').siblings().removeClass('tooltip');
        }
      });
    }
  };
  // END Tooltips for the staff and faculty directories

  // START Slideshow image links
  Drupal.behaviors.slideshowImageLinks = {
    attach: function () {
      $('.slides li').each(function () {
        var $this,
            $link;

        $this = $(this);
        $link = $this.find('.flex-caption a');

        if ($link.length > 0) {
          $this.find('img')
            .wrap($('<a/>', {
              'href': $link.attr('href')
            }))
            .attr('title', $link.text());
        }
      });
    }
  };
  //END Slideshow image links

  // START Accordion menu no-children fix
  Drupal.behaviors.accordionMenuFix = {
    attach: function (context) {
      $('.accordion-menu-wrapper', context).on('accordionbeforeactivate', function (event, ui) {
        if ($(ui.newHeader).hasClass('no-children')) {
          return false;
        }
      });
    }
  };
  // END Accordion menu no-children fix

})(jQuery, Drupal, this, this.document);
