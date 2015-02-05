/* -------------------------------------------------- *
 * ToggleVal Plugin for jQuery                        *
 * Version 1.0                                        *
 * -------------------------------------------------- *
 * Author:   Aaron Kuzemchak                          *
 * URL:      http://kuzemchak.net/                    *
 * E-mail:   afkuzemchak@gmail.com                    *
 * Date:     8/18/2007                                *
 * -------------------------------------------------- */

jQuery.fn.toggleVal = function(focusClass) {
	this.each(function() {
		jQuery(this).focus(function() {
			// clear value if current value is the default
			if(jQuery(this).val() == this.defaultValue) { jQuery(this).val(""); }
			
			// if focusClass is set, add the class
			if(focusClass) { jQuery(this).addClass(focusClass); }
		}).blur(function() {
			// restore to the default value if current value is empty
			if(jQuery(this).val() == "") { jQuery(this).val(this.defaultValue); }
			
			// if focusClass is set, remove class
			if(focusClass) { jQuery(this).removeClass(focusClass); }
		});
	});
}
jQuery(document).ready(function(){
    jQuery("#login-code").toggleVal('focus');
});