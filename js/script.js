/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// Place your code here.

	Drupal.behaviors.searchSlider = {
		attach: function () {

	// START SEARCH TOGGLE CODE

		$('#s-toggle').click(function () {
			var search = $('#search');
			if (search.is(':visible')) {
				search.slideToggle();
			} else {
				search.slideToggle(400);
		}
	});
	// END SEARCH TOGGLE CODE
	}
}

Drupal.behaviors.resizeHeader = {
	attach: function () {
	//START RESIZE COLLEGE HEADER AND SET HEIGHT CODE

	$(window).resize(function () {
		var divHeight = $("#collegeheader").children().outerHeight(true);
		var menuHeight = $("#main-menu").outerHeight(true);

		//add the two heights and 10 more pixels to compensate for space beneath the main menu
		var totalHeight = divHeight + menuHeight + 10;

		$('#collegeheader').css({'height': totalHeight + "px"});

		});
	//END RESIZE COLLEGE HEADER CODE 
	}
}

})(jQuery, Drupal, this, this.document);