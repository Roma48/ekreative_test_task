var delay = 150;
var start = 0;

/**
 * Fetches the new data and puts it inline and eval script.
 */
function fetchItemsCount(form_id, viewUrl)
{
    //console.log(form_id, viewUrl);
    jQuery(form_id + " p.count").addClass('wait');
    
    jQuery.getJSON(viewUrl, {form_id: form_id} , function(json) {
        jQuery(form_id + " p.count").removeClass('wait');
        // insert html data in element id
        //console.log(json.data);
        jQuery(form_id + " p.count").html(json.data);
        // evaluate script
        eval(json.script);

	});
	
	return false;
}
/**
 * Called if slider is changed
 */
function sliderChange(e, ui) 
{
//    console.log(e);
//    console.log(ui);
    /* Calling "moveTo" sends a null event, ignore these (used in reset_slider() and jQuery(window).resize()) */
    if (e != null) {
        setTimeout(function() {start++; update(start, ui.handle)}, delay);
    }
}

/**
 * Update a counter of the number of items that match the search criteria via AJAX
 */
function update(updated_start, element) 
{
    //console.log(element);
    
    if (start != updated_start) {
        return false;
    }
    
    var id = '#' + jQuery(element).parents('form').attr('id');

    result = fetchItemsCount(id, Drupal.settings.edsuite.properties.count_url + '?' + jQuery(id).serialize());
	
    start = 0;
    return;
}

jQuery(document).ready(function() {
    jQuery(".form-slide.acreage").addClass("site-only");
    jQuery(":radio:checked[name='property_search[property_type]']").each(function() {
        var id = '#' + jQuery(this).parents('form').attr('id');
        if(this.value == 'Site') {
            jQuery(id + " .building-only").parent().hide();
            jQuery(id + " .site-only").parent().show();

            jQuery(id + " .building-only input").attr("disabled","disabled");
            jQuery(id + " .site-only input").removeAttr("disabled");
        } else {
            jQuery(id + " .building-only").parent().show();
            jQuery(id + " .site-only").parent().hide();

            jQuery(id + " .building-only input").removeAttr("disabled");
            jQuery(id + " .site-only input").attr("disabled","disabled");
        }
    });
    
    jQuery(":radio[name='property_search[property_type]']").click(function() {
        var id = '#' + jQuery(this).parents('form').attr('id');
        if(this.value == 'Site') {
            jQuery(id + " .building-only").parent().hide();
            jQuery(id + " .site-only").parent().show();

            jQuery(id + " .building-only input").attr("disabled","disabled");
            jQuery(id + " .site-only input").removeAttr("disabled");
        } else {
            jQuery(id + " .building-only").parent().show();
            jQuery(id + " .site-only").parent().hide();

            jQuery(id + " .building-only input").removeAttr("disabled");
            jQuery(id + " .site-only input").attr("disabled","disabled");
        }

        jQuery(id + " .slider").each( function() { reset_slider(this); } );
        jQuery(id + " select").each( function() { this.selectedIndex = 0; });
        
        setSliderSegments();
    });

    //jQuery(".properties-search").change( function() { var e = this; setTimeout(function() {start++; update(start, e)}, delay); } );
    jQuery(".properties-search input").change( function() { var e = this; setTimeout(function() {start++; update(start, e)}, delay); } );
    jQuery(".properties-search select").change( function() { var e = this; setTimeout(function() {start++; update(start, e)}, delay); } );

    jQuery(".edit-reset").click( function() {
        var id = '#' + jQuery(this).parents('form').attr('id');
        jQuery(id + " .slider").each( function() {
            reset_slider(this);
        } );
        jQuery(this).change();
    } );
});