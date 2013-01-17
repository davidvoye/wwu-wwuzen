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
	attach: function() {

	// START SEARCH SLIDER CODE
	$('#search a').click(function() {
		$('#wwumenu').animate({left: '0x'}, 300);
		$('#wwumenu').css('right', '');
		var search = $('#search');
		search.hide("slide",{direction: "right"}, 300);
	});
	
	$('#s-toggle').click(function() {
		var search = $('#search');
		if (search.is(':visible')) {
			window.location.href = 'http://www.wwu.edu/gsearch/' + $('#query').val();
		} else {
			$('#wwumenu').animate({right: '0px'}, 300);
			$('#wwumenu').css('left', '');
			search.show("slide",{direction: "right"}, 300);
		};
	});
	//$('form').submit(function() {
	//	window.location.href = 'http://www.wwu.edu/gsearch/' + $('#query').val();
	//	return false;
	//});
	// END SEARCH SLIDER CODE
	}
}	

Drupal.behaviors.resizeHeader = {
	attach: function() {	
	//START RESIZE COLLEGE HEADER AND SET HEIGHT CODE
   
 $(window).resize(function() {
 	var divHeight = $("#collegeheader").children().outerHeight(true);
 	var menuHeight = $("#main-menu").outerHeight(true);
 	//add the two heights and 10 more pixels for beneath the menu
 	var totalHeight = divHeight + menuHeight + 10;
 
 	$('#collegeheader').css({'height': totalHeight +"px"});;

	});
	//END RESIZE COLLEGE HEADER CODE 
	}
}

})(jQuery, Drupal, this, this.document);