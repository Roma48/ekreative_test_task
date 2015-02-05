var hide = true;
var togglingMap = false;
var currentMapId = null;
var currentMapStyle = null;
var delay = 150;
var start = 0;

function fetchPage(id, viewUrl)
{
    var contentBlock = jQuery('#content');
    var contentOverlayBlock = jQuery('<div id="contentOverlayBlock" />');
    contentOverlayBlock.css({ 
        "width": contentBlock.css("width"), 
        "height": contentBlock.css("height"), 
        "position": "absolute",
        "z-index" : 1000,
        "background": "none"
    });
    
    contentBlock.prepend(contentOverlayBlock);
    
    jQuery('#ajax-properties').empty();
    jQuery('#ajax-busy').show();

    jQuery.getJSON(viewUrl, {id: id}, function(json) {

        jQuery(id).html(json.data);
        
        jQuery('div.pager a').each(function() {
            var url = jQuery(this).attr('href');
    	    jQuery(this).click(function() {
    	        fetchPage('#ajax-properties', url);
				jQuery('html, body').animate({ scrollTop: jQuery("#ajax-properties .pager").offset().top - 80 }, 1000);
    	    });
            jQuery(this).attr('href', 'javascript:void(0);');
    	});
    	
        eval(json.script);
        if (currentMapStyle && typeof currentMapStyle == 'object') {
            var style = {};
            jQuery.each(currentMapStyle, function(i, val) { style[i] = val; });
            jQuery(currentMapId).css(style);
        } else {
            jQuery(currentMapId).attr('style', currentMapStyle);
        }
        //mapInit();
        
        jQuery('#ajax-busy').hide();
        jQuery('#contentOverlayBlock').remove();

	});
		
	return false;
}

/**
 * Called if slider is changed
 */
function sliderChange(e, ui) 
{
    /* Calling "moveTo" sends a null event, ignore these (used in reset_slider() and jQuery(window).resize()) */
    if (e != null) {
        setTimeout(function() {start++; update(start, ui.handle)}, delay);
    }
}

function update(updated_start, page) 
{
    if (start != updated_start) {
        return false;
    }
    var data = jQuery("#eds-properties-search-form").serialize();
    if (typeof page == 'number') {
        data += "&page=" + page;
    }
    
    result = fetchPage('#ajax-properties', document.getElementById('eds-properties-search-form').action + '?' + data);
    start = 0;
    return result;
}

jQuery(document).ready(function() {
    jQuery("#hide_map").click(function(){

        if(togglingMap) {
            return(null);
        }
        togglingMap = true;
        if(hide) {
            jQuery('#gmap-wrapper').fadeTo('normal', 0.33, function() { 
                jQuery('#gmap-wrapper').slideUp('normal', function() {
                    jQuery('#hide_map').html('Show Map');
                    togglingMap = false;
                    currentMapStyle = jQuery('#gmap-wrapper').attr('style');
                    currentMapId = '#gmap-wrapper';
                });
            });
            hide = false;
        } else {
            if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ Drupal.gmap.setup(); }
            jQuery('#gmap-wrapper').show().slideDown().fadeTo('normal', 1, function() {
                jQuery('#hide_map').html('Hide Map');
                togglingMap = false;
                currentMapStyle = jQuery('#gmap-wrapper').attr('style');
                currentMapId = '#gmap-wrapper';
            });
            hide = true;
        }
    });

    jQuery("#edit-submit").remove();
    jQuery(":radio:checked[name='property_search[property_type]']").each(function(i) {
        if(this.value == 'Site') {
            jQuery(".building-only").parent().hide();
            jQuery(".site-only").parent().show();

            jQuery(".building-only").attr("disabled","disabled");
            jQuery(".site-only").removeAttr("disabled");
        } else {
            jQuery(".building-only").parent().show();
            jQuery(".site-only").parent().hide();

            jQuery(".building-only").removeAttr("disabled");
            jQuery(".site-only").attr("disabled","disabled");
        }
    });
    
    jQuery(":radio[name='property_search[property_type]']").click(function() {
        jQuery(".building-only").parent().toggle();
        jQuery(".site-only").parent().toggle();

        if (jQuery(".building-only").parent().css("display") == "none") {
            jQuery(".building-only").attr("disabled","disabled");
            jQuery(".site-only").removeAttr("disabled");
        } else {
            jQuery(".building-only").removeAttr("disabled");
            jQuery(".site-only").attr("disabled","disabled");
        }

        jQuery('#eds-properties-search-form .slider').each( function() { reset_slider(this); } );
        
        setSliderSegments();
    });

    jQuery("#eds-properties-search-form").change( function() {start++; setTimeout('update('+start+');', delay); } );
    jQuery("#eds-properties-search-form input").change( function() { start++; setTimeout('update('+start+');', delay); } );
    jQuery("#eds-properties-search-form select").change( function() { start++; setTimeout('update('+start+');', delay); } );

	/* For IE which cannot decide when things change */
	jQuery("#eds-properties-search-form input[type='radio']").click( function() { start++; setTimeout('update('+start+');', delay); } );
	jQuery("#eds-properties-search-form input[type='checkbox']").click( function() { start++; setTimeout('update('+start+');', delay); } );
	jQuery("#eds-properties-search-form input[type='radio']").unbind('change');
	jQuery("#eds-properties-search-form input[type='checkbox']").unbind('change');

    jQuery("#reset").click( function() {
        console.log(this);
        jQuery('#eds-properties-search-form .slider').each( function() { reset_slider(this); } );  
        jQuery(this).change();
    } );

    var filter_status = 0;
    jQuery('.search_form_toogle').click(function(){
        if (filter_status == 0){
            jQuery('.search_form_toogle').addClass('active');
            jQuery('.property-search-form').show();
            filter_status = 1;
        }
        else {
            jQuery('.search_form_toogle').removeClass('active');
            jQuery('.property-search-form').hide();
            filter_status = 0;
        }
    });
});