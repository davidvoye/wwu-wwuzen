(function ($, Drupal, window, document, undefined) {
$(document).ready(function() {
  var switched = false;
  var updateTables = function() {
    if (($(window).width() < 767) && !switched ){
      $("table.responsive").each(function(i, element) {
      	columns = $(element).find("tr:nth-child(1) td").length
      	if (columns > 1) {
      	  switched = true;
          splitTable($(element));
    	} else {
    		$(element).removeClass("responsive");
    	}
      });
    }
    else if (switched && ($(window).width() > 767)) {
      $("table.responsive").each(function(i, element) {
      	switched = false;
        unsplitTable($(element));
      });
    }
  };
   
  $(window).load(updateTables);
  $(window).on("redraw",function(){switched=false;updateTables();}); // An event to listen for
  $(window).on("resize", updateTables);
   
	
	function splitTable(original)
	{
		original.wrap("<div class='table-wrapper' />");
		
		var copy = original.clone();
		copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
		copy.removeClass("responsive");
		
		original.closest(".table-wrapper").append(copy);
		copy.wrap("<div class='pinned' />");
		original.wrap("<div class='scrollable' />");

    setCellHeights(original, copy);
	}
	
	function unsplitTable(original) {
      original.closest(".table-wrapper").find(".pinned").remove();
      original.unwrap();
      original.unwrap();
      var tr = original.find('tr');
      tr.each(function (index) {
      	$(this).height('');
      });
	}

  function setCellHeights(original, copy) {
    var tr = original.find('tr'),
        tr_copy = copy.find('tr'),
        heights = [];

    tr.each(function (index) {
      var self = $(this),
          tx = self.find('th, td');

      tx.each(function () {
        var height = $(this).outerHeight(true);
        heights[index] = heights[index] || 0;
        if (height > heights[index]) heights[index] = height;
      });

    });

    tr_copy.each(function (index) {
      $(this).height(heights[index]);
    });
    tr.each(function (index) {
      $(this).height(heights[index]);
    });
  }

});
})(jQuery, Drupal, this, this.document);
