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
$(document).ready(function() {
	
	// START SEARCH SLIDER CODE
	$('#search a').click(function() {
		var search = $('#search');
		search.hide("slide",{direction: 'right'}, 300);
		$('#links').animate({left: '440px'}, 300);
	});
	
	$('#s-toggle').click(function() {
		var search = $('#search');
		if (search.is(':visible')) {
			window.location.href = 'http://www.wwu.edu/gsearch/' + $('#query').val();
		} else {
			search.show("slide",{direction: 'right'}, 300);
			if ($('#push').is(':checked')) {$('#links').animate({left: '140px'}, 300)};
			$('#query').select();
		};
	});
	$('form').submit(function() {
		window.location.href = 'http://www.wwu.edu/gsearch/' + $('#query').val();
		return false;
	});
	// END SEARCH SLIDER CODE
	
	
});

})(jQuery, Drupal, this, this.document);
