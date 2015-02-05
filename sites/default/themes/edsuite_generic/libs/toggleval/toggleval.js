(function ($) {	
$.fn.toggleVal = function(focusClass) {
	this.each(function() {
		$(this).focus(function() {
			// clear value if current value is the default
			if($(this).val() == this.defaultValue) { $(this).val(""); }
			else if($(this).val() == 'Search') { $(this).val(""); }
        
			// if focusClass is set, add the class
			if(focusClass) { $(this).addClass(focusClass); }
		}).blur(function() {
			// restore to the default value if current value is empty
			if($(this).val() == "") { $(this).val(this.defaultValue); }
		
			// if focusClass is set, remove class
			if(focusClass) { $(this).removeClass(focusClass); }
		});
	});
}
})(jQuery);
