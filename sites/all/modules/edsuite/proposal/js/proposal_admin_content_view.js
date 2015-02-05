var log_row_id = null;

jQuery(document).ready(function() {
    jQuery('table.log').hide();
    jQuery('a.log').click(function() {
        var row = jQuery(this).parents('tr').eq(0);
        var table = jQuery(this).siblings('table.log').eq(0);

        jQuery('tr.log').remove();
        
        if (log_row_id != jQuery(table).attr('id')) {
            log_row_id = jQuery(table).attr('id');
            jQuery(row).after('<tr class="log"><td colspan="2">&nbsp;</td><td colspan="4" id="log-table"></td></tr>');
            jQuery('#log-table').html('<table>' + jQuery(table).html() + '</table>');
        } else {
            log_row_id = null;
        }
        return(false);
    });
});