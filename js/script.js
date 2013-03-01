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

//$("#site-name:contains('and')").wrapInner("<span class="site-name-and"></div>");

Drupal.behaviors.siteNameTypography = {
		attach: function () {
		var siteName = $("#site-name").text();
		var titleAnd = $("#site-name:contains('and')").text().replace("and", "<span class=\"site-name-and\">and</span>");
		var test = siteName.replace(siteName, titleAnd);
		$('#site-name a span').replaceWith(test);

		//var titleCollegeOf = $("#site-name:contains('College of')").text().replace("College of", "<span class=\"site-name-college-of\">College of</span>");
		//var siteName = $("#site-name").text();
		//var test = siteName.replace(siteName, titleCollegeOf);
		//$('#site-name a span').replaceWith(test);
		
		//var pattern = /and/i;
		//alert(test);

		//var titleAnd = $("#site-name a span:contains('and')").text()
		//.filter(titleAnd).wrap("<b/>");
		//$("#site-name a span:contains('and')").contents().filter(function(){ return this.nodeType != 1; }).wrap("<em/>");
	}
}

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
	
	Drupal.behaviors.mobileWwuMenu = {
		attach: function () {

	// START SEARCH TOGGLE CODE

		$('#mobileWWUmenu').click(function () {
			var search = $('#wwumenu');
			if (search.is(':visible')) {
				search.slideToggle();
			} else {
				search.slideToggle(400);
		}
	});
	// END SEARCH TOGGLE CODE
    }
 }

	// START MAIN MENU TOGGLE CODE
	Drupal.behaviors.mobileWwuMainMenu = {
		attach: function () {

	// START SEARCH TOGGLE CODE

		$('#mobileNavTrigger').click(function () {
			var mainMenu = $('#main-menu ul.menu');
			if (mainMenu.is(':visible')) {
				mainMenu.slideToggle();
			} else {
				mainMenu.slideToggle(400);
		}
	});
	// END MAIN MENU TOGGLE CODE
	}
}
	// START MENU EXPANSION CODE
	Drupal.behaviors.menuExpansion = {
		attach: function () {
		$(".expanded").click(function(e) {
		  if ($(this).hasClass("opened")) {
		    $(this).children().children().hide();
		    //$(this).parent().children().show();
		    $(this).removeClass("opened");
		    // Close all children as well
		    var x = $(this).children().children("li");
		    while (x.size() > 0) {
	      	x.removeClass("opened");
	      	x.children().children().hide();
	      	x = x.children().children("li");
	    	}
	   	} else {
	     	$(this).children().children().show();
	     	$(this).parent().children().not(this).removeClass("opened");
	     	$(this).parent().children().not(this).children().children().hide();
	     	$(this).addClass("opened");
	   	}
		  e.stopPropagation();
		});
	
	// END MENU EXPANSION CODE
	}
}


Drupal.behaviors.resizeHeader = {
                attach: function () {
                //START RESIZE COLLEGE HEADER AND SET HEIGHT CODE

                $(window).resize(function () {
                                var divHeight = $("#collegeheader").children().outerHeight(true);
                                var menuHeight = $("#main-menu").outerHeight(true);
                                //For the mobile views we need another container to use since main menu is collapsed
                                var nameAndSlogan = $("#name-and-slogan").outerHeight(true);

                                //add the two heights and 10 more pixels to compensate for space beneath the main menu
                                var totalHeightWithMenu = divHeight + menuHeight + 10;
                                var totalHeightSansMenu = divHeight + nameAndSlogan;
                                //Testing for a condition forces the height to be calculated. 
                                if (totalHeightSansMenu <= 61) { 
                                                totalHeightSansMenu = totalHeightSansMenu + 19;
                                                $('#collegeheader').css({'height': totalHeightSansMenu + "px"});
                                } else if (totalHeightSansMenu <= 84) { 
                                                totalHeightSansMenu = totalHeightSansMenu + 1;
                                                $('#collegeheader').css({'height': totalHeightSansMenu + "px"});
                                } else {
                                                $('#collegeheader').css({'height': totalHeightWithMenu + "px"});
                                }


                                });
                //END RESIZE COLLEGE HEADER CODE 
                }

}


})(jQuery, Drupal, this, this.document);