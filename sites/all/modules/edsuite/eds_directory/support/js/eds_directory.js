(function ($) {
	/*
	 * Expand and collapse EDS Directory details
	 */
	$(document).ready(function(){
		$(".eds_directory .expand").click(function() {		
		    $(this).parents(".eds_directory").eq(0).find(".content").toggle();
		    if ($(this).html() == '+') {
		        $(this).html("&ndash;");
		        $(this).parents("table.summary").eq(0).addClass("active");
		    } else {
		        $(this).html("+");
		        $(this).parents("table.summary").eq(0).removeClass("active");
		    }
		});	
		
		/*
		 * Hack: Make sure the Filter form always submits to eds/directory instead of eds/directory/{ letter }
		 */
		$('.view-eds-directory .view-filters form').attr('action', '/eds/directory');
	});
})(jQuery);