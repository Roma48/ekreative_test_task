jQuery(document).ready(function() {
    
    jQuery("a.lightboxGallery").lightBox();
    
    jQuery('div.section:first').show();
    jQuery('li.section-navigation-item a').click(function() {
        var id = jQuery(this).parent('li.section-navigation-item').attr('id').replace(/-navigation/, '');
        jQuery('div.section').hide();
        jQuery('#' + id).show();
        return(false);
    });
    
    jQuery('#send_email_proposal a').click(function() {
        jQuery('.send_email').toggle();
        return(false); 
    });
    
    var base_vertical_menu_height = jQuery('div#proposal-navigation-container.vertical').height();
    set_column_height('div.section:visible', 'div.section:visible div.sidebar', {outerHeight: false})

    jQuery('ul#proposal-navigation.vertical li.section-navigation-item a').click(function() {
        set_column_height('div.section:visible', 'div#proposal-navigation-container.vertical', {base_height: base_vertical_menu_height})
        set_column_height('div.section:visible', 'div.section:visible div.sidebar', {outerHeight: false})

        jQuery('li.section-navigation-item ul.menu').hide();
        var li = jQuery(this).parent('li.section-navigation-item');
        jQuery(li).parents('ul.menu').show();
        jQuery(li).children('ul.menu').show();
        if (jQuery(li).parents('ul').length == 1) {
            jQuery('.active').removeClass('active');
            jQuery(li).addClass('active');
        }
        return(false);
    });
    
    jQuery('ul#proposal-navigation.vertical li.section-navigation-item:first a:first').click();
    
    // Regrouping the property lightbox photos
    jQuery('a[rel="lightbox-property-photos"]').each(function() {
        var pid = jQuery(this).parents('div.section').id();
        var rel = jQuery(this).attr('rel');
        jQuery(this).attr('rel', rel + '-' + pid);
    });

//    // Setup the GMaps
//    jQuery('.gmap-map').parents('.section').each(function() {
//        jQuery(this).show();
//        Drupal.gmap.setup();
//    });

});

function set_column_height(master_selector, resize_selector, options) {
    if (typeof options.base_height == "undefined" ) {
        options.base_height = jQuery(resize_selector).height();
    }
    if (typeof options.outerHeight == "undefined" ) {
        options.outerHeight = true;
    }
    
    if (options.outerHeight) {
        if (options.base_height < jQuery(master_selector).outerHeight(true)) {
            jQuery(resize_selector).height(jQuery(master_selector).outerHeight(true));
        } else {
            jQuery(resize_selector).height(options.base_height);
            if (jQuery(master_selector).outerHeight(true) < options.base_height) {
                jQuery(master_selector).height(jQuery(resize_selector).outerHeight(true));
            }
        }
    } else {
        if (options.base_height < jQuery(master_selector).height()) {
            jQuery(resize_selector).height(jQuery(master_selector).height());
        } else {
            jQuery(resize_selector).height(options.base_height);
            if (jQuery(master_selector).outerHeight(true) < options.base_height) {
                jQuery(master_selector).height(jQuery(resize_selector).height());
            }
        }
    }
}

function mapOpen(latitude, longitude, country_name, province_name, city, street, postal_code) {
    
    window.open('https://maps.google.com/maps?q=' + latitude + ' ' + longitude, "Map", "width=1024,height=600,resizable=no,scrollbars=yes,status=yes");
    
    return false;
    
}