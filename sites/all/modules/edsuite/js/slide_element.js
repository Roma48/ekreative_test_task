/**
 * Add slider element
 * id - slider id, f.e. '#slider1', 'slider2' (instead '.slider' in jQuery('.slider').Slider( -> jQuery(id).Slider(
 * frac - count of fractions
 * real_min - value of minimum value
 * real_max - value of maximum value
 * observer_min - id of element where minimum value will shown
 * observer_max - id of element where maximum value will shown 
 * default_min - default min value
 * default_max - default max value
 */
function add_slider(id, stepping, real_min, real_max, observer_min, observer_max, default_min, default_max)
{
    
    jQuery('input[@type="hidden"]#'+ observer_min).val(default_min);
    jQuery('#'+ observer_min +"-display").empty();
    valstr = add_comma(default_min) + add_plus(default_min, real_max);
    jQuery('#'+ observer_min +"-display").append(valstr);

    jQuery('input[@type="hidden"]#'+ observer_max).val(default_max);
    jQuery('#'+ observer_max +"-display").empty();
    valstr = add_comma(default_max) + add_plus(default_max, real_max);
    jQuery('#'+ observer_max +"-display").append(valstr);
    
    if (jQuery('#'+id).width() == 0) {
        var width = jQuery('#'+id).parents("form").width() - 13;
        jQuery('#'+id+'_wrapper').width(width);
        jQuery('#'+id).width(width);
        jQuery('#'+id).data("fluid.slider", true);
    } else {
        jQuery('#'+id).data("fluid.slider", false);
    }
	jQuery('#'+id).slider({
        min: real_min,
        max: real_max,
        handle: ".indicator",
        handles: [{start:default_min},{start:default_max}],
        values: [default_min, default_max],
        step: stepping,
        range: true,
        slide: function(e,ui) {

            jQuery('input[@type="hidden"]#'+ observer_min).val(ui.values[0]);
            jQuery('#'+ observer_min +"-display").empty();
            valstr1 = add_comma(ui.values[0]) + add_plus(ui.values[0], real_max);
            jQuery('#'+ observer_min +"-display").append(valstr1);
            
            jQuery('input[@type="hidden"]#'+ observer_max).val(ui.values[1]);
            jQuery('#'+ observer_max +"-display").empty();
            valstr2 = add_comma(ui.values[1]) + add_plus(ui.values[1], real_max);
            jQuery('#'+ observer_max +"-display").append(valstr2);            
        },
        change: sliderChange
    });

}
jQuery(window).resize(function(){
    jQuery(".slider").each(function() {
        var width = jQuery(this).parents("form").width() - 13;
        if (jQuery(this).width() != width && jQuery(this).data("fluid.slider")) {
            jQuery('#' + this.id + '_wrapper').width(width);
            jQuery(this).width(width);
            jQuery(this).slider("moveTo", jQuery(this).slider("value", 1), 1);
            // jQuery(this).slider("moveTo", jQuery(this).slider("value", 0), 0);
        }
    });
});

/**
 * adds  'delimiter' between 'count' symbols
 */
function add_comma(value)
{
    var count = 3;
    var delim = ',';
    var str = value.toString();

    if (str.length <= count) {
        return str;
    }    
    
    var pos = str.length - count;
    
    var new_str = str.substr(pos, pos + count - 1);
    
    pos -= count;
                
    while (pos > 0) {
        new_str = str.substr(pos, pos + count - 1) + delim + new_str;
        pos -= count;
    }
    
    if ((pos + count) > 0) {
        new_str = str.substr(0, pos + count) + delim + new_str;
    }
    
    return new_str;
}

/**
 * Add "+" if this is maximum value
 */
function add_plus(value, real_max)
{
    if (value >= real_max) {
        return '+';
    } else {
        return '';
    }
}
function number_format( number, decimals, dec_point, thousands_sep ) {  // Format a number with grouped thousands
    //
    // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +     bugfix by: Michael White (http://crestidg.com)

    var i, j, kw, kd, km;

    // input sanitation & defaults
    if( isNaN(decimals = Math.abs(decimals)) ){
        decimals = 2;
    }
    if( dec_point == undefined ){
        dec_point = ",";
    }
    if( thousands_sep == undefined ){
        thousands_sep = ".";
    }

    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

    if( (j = i.length) > 3 ){
        j = j % 3;
    } else{
        j = 0;
    }

    km = (j ? i.substr(0, j) + thousands_sep : "");
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
    //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");
    return km + kw + kd;
}

function reset_slider(object)
{
    //setTimeout(function(){
        /* According to the docs weird thigs happen if you set the min first */
        
        var min = jQuery(object).slider("option", "min");
        var max = jQuery(object).slider("option", "max");
        
        jQuery(object).slider('option', 'min', min);
        jQuery(object).slider('option', 'max', max);

        jQuery(object).closest('.form-type-slider').find('span[id*=min-display]').html(number_format(min,0,'.',','));
        jQuery(object).closest('.form-type-slider').find('span[id*=max-display]').html(number_format(max,0,'.',',')+'+');
        
        jQuery(object).closest('.form-type-slider').find('input[id*=min]').val(min);
        jQuery(object).closest('.form-type-slider').find('input[id*=max]').val(max);

        jQuery(object).slider('option', 'values', [min, max]);
    //}, delay);
}
