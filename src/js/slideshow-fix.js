/**
 * @file
 * Flexslider image caption height fix.
 */

(function ($, Drupal, window, document, undefined) {

  Drupal.behaviors.slideshowCaption = {

    attach: function (context) {
      $('.flexslider .slides', context).imagesLoaded(function () {
        $('.flex-caption', context).each(function () {
          var height;
          var imageHeight;
          var topMargin;
          var $this;

          $this = $(this);
          containerHeight = $this.closest('ul').height();
          imageHeight = $this.prev('img').height();
          height = $this.height();
          topMargin = (containerHeight - height - imageHeight) / 2;

          $this.css({
            'position': 'relative',
            'margin-top': topMargin
          });
        });
      });
    }

  };

})(jQuery, Drupal, this, this.document);
