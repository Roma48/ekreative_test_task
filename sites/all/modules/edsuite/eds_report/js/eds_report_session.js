/**
 * Creates function AJAX function call to set variable
 */
/**
 * Use JQuery to POST to menu call back name and variable to be set in session ID.
 *
 * nid_list is a variable which is look like &nid_list[0]=16 &nid_list[1]=17.
 * object - this is an object, that pass to the function.
 * node_type - this is a type of the node, which contain noes, that must be add to report.
 * nid - id of the node.
 */

function updateCounts(counts)
{
    for (var type in counts) {
        console.log(jQuery('#' + type + '_count'));
        jQuery('#' + type + '_count').html(counts[type].toString());
    }
}

function removeNode(object, id, node_type)
{
    jQuery(object.parentNode.parentNode).remove();
    jQuery('#node-' + id).remove();
    var node_divs = jQuery('#' + node_type + '-list div');
    if (node_divs.length == 0) {
        jQuery('#' + node_type).remove();
    }
}

function removeAllNode(object)
{
    jQuery(object.parentNode.parentNode).hide();        
    //jQuery('#block-system-main').remove();
}

function report_node_toggle(nid_list, object, node_type, nid) 
{
    if (object.className == "add") {
        // Call path_add_node to save nid_list to the custom report
        jQuery.ajax({
             type   : "POST",
             url    : Drupal.settings.edsuite.report.path_add_node,
             dataType: "json",
             data   : 'sid=' + Drupal.settings.edsuite.report.sess + '&node_type=' + node_type + nid_list,
             success: function(json)
             {
                 updateCounts(json.counts);
                 object.title = json.tooltip;
//                 object.tooltipText = json.tooltip;
                 // Check if this is the last add link
                 if (jQuery(".add").length == 0) {
                     jQuery(".add_all").each( function(){
                         jQuery(this).click();
                     });
                 }

             }
        });
        
        // Change link to the Remove
        jQuery(object).removeClass("add");
        jQuery(object).addClass("remove");
        object.innerHTML = Drupal.settings.edsuite.report.remove_text;
    } else {

        
        // Call path_remove_node to remove nid_list from the custom report
        jQuery.ajax({
             type   : "POST",
             url    : Drupal.settings.edsuite.report.path_remove_node,
             dataType: "json",
             data   : 'sid=' + Drupal.settings.edsuite.report.sess + '&node_type=' + node_type + nid_list,
             success: function(json)
             {

                 updateCounts(json.counts);
                 object.title = json.tooltip;

                 jQuery(".remove_all").each( function() {
                     jQuery(this).removeClass("remove_all");
                     jQuery(this).addClass("add_all");
                     if (!location.href.match('eds/report')) {
                         this.innerHTML = Drupal.settings.edsuite.report.add_all_text;
                         this.title = json.tooltip_all;
                     }

                     }


                 );
                 if (location.href.match('eds/report')) {
                     var count_all = 0;
                     var counts = json.counts;
                     for (var type in counts) {
                         if (counts[type]){
                             count_all++;
                         }
                     }
                     if (!count_all) {
                         jQuery('.report_change_all').remove();
                     }
                 }
             }
        });
        // Change link to the Add
        jQuery(object).removeClass("remove");
        jQuery(object).addClass("add");
        object.innerHTML = Drupal.settings.edsuite.report.add_text; 
        
        if (location.href.match('eds/report')) {
            removeNode(object, nid, node_type);
        }       
    }
    return false;
}
/**
 * Add or Remove all nodes to the Custom Report
 */
function report_all_node_toggle(nid_list, object, node_type)
{    
    if (object.className == "add_all") {
        // Call path_add_node to save nid_list to the custom report
        jQuery.ajax({
             type   : "POST",
             url    : Drupal.settings.edsuite.report.path_add_node,
             dataType: "json",
             data   : 'sid=' + Drupal.settings.edsuite.report.sess + '&all=all&node_type=' + node_type + nid_list,
             success: function(json) {
                 updateCounts(json.counts);
                 object.title = json.tooltip_all;
//                 object.tooltipText = json.tooltip_all;
                 
                // Add all nodes
                jQuery("a.add").each(function(i){
                    jQuery(this).click();
                });
        
                // Change link to the "remove"
                jQuery(object).removeClass("add_all");
                jQuery(object).addClass("remove_all");
                object.innerHTML = Drupal.settings.edsuite.report.remove_all_text;
             }
        });
      } else {
        // Call path_remove_node to remove nid_list from the custom report
        jQuery.ajax({
             type    : "POST",
             url     : Drupal.settings.edsuite.report.path_remove_node,
             dataType: "json",
             data    : 'sid=' + Drupal.settings.edsuite.report.sess + '&all=all&node_type=' + node_type + nid_list,
             success: function(json) {				 
                 updateCounts(json.counts);
                 object.title = json.tooltip_all;
//                 object.tooltipText = json.tooltip_all;
               
			    // Remove all nodes
                jQuery("a.remove").each(function(i){
                    jQuery(this).click();
                });
        		
                // Change link to the "add"
                jQuery(object).removeClass("remove_all");
                jQuery(object).addClass("add_all");
                object.innerHTML = Drupal.settings.edsuite.report.add_all_text;
                // reset_title(object);
				
				// Redirect to Report Information page
				if (location.href.match('eds/report')) {
					window.location.href = '/eds/report/information';
		        }       
             }
        });
        if (location.href.match('eds/report')) {
            removeAllNode(object);
        }       
    }
}

function report_reset()
{
    // Call path_remove_node to remove nid_list from the custom report
    jQuery.ajax({
         type    : "POST",
         url     : Drupal.settings.edsuite.report.path_reset,
         data    : 'sid=' + Drupal.settings.edsuite.report.sess,
         success : function(msg) {
            var count = parseInt(msg);
            if (isNaN (msg)) {
                return false;
            }
             // Set counter
            jQuery('.counter').html(msg);

     }
    });
    
    jQuery('.remove').each(function(){
        // Change link to the Add       
        jQuery(this).removeClass("remove");
        jQuery(this).addClass("add");
        this.innerHTML = Drupal.settings.edsuite.report.add_text;
    });
    
    jQuery('.remove_all').each(function(){
         // Change link to the "add"
        jQuery(this).removeClass("remove_all");
        jQuery(this).addClass("add_all");
        this.innerHTML = Drupal.settings.edsuite.report.add_all_text;
    });
    
     if (window.resetremoveAllNode) {
        removeAllNode(object);
    }       
}

function void_href()
{
    jQuery('a.add').attr('href', 'javascript:void(0);');
    jQuery('a.remove').attr('href', 'javascript:void(0);');
    jQuery('a.add_all').attr('href', 'javascript:void(0);');
    jQuery('a.remove_all').attr('href', 'javascript:void(0);');
    jQuery('#reset_report').attr('href', 'javascript:void(0);');
}

/**
 * If there is at least 1 node added to the Custom report, we show custom_report, else we show report_information.
 */
function view_report()
{
    var empty_report = true;
    var last_counter = jQuery('.counter:last');
    jQuery('.counter').each(function() {
        
        if (this.innerHTML != "0") {
            empty_report = false;
            jQuery('.view-custom-report a').attr('href', Drupal.settings.edsuite.report.report_url);
            jQuery('.view-custom-report a').attr('target', '_blank');
        } 
        
        if ((last_counter[0] == this) && empty_report) {
            jQuery('.view-custom-report a').attr('href', Drupal.settings.edsuite.report.information_url);
            jQuery('.view-custom-report a').attr('target', '_black');
        }

    });

}

// href attribute is only for pages with disabled JS
jQuery(document).ready(function(){
    void_href();
//    jQuery('.report_change span a').tooltip({
//        showBody: " - ",
//        track: true,
//        showURL: false,
//        fixPNG: true,
//        extraClass: "report"
//    });
//    jQuery('.add_all_content span a').tooltip({
//        showBody: " - ",
//        track: true,
//        showURL: false,
//        fixPNG: true,
//        extraClass: "report"
//    });
});
