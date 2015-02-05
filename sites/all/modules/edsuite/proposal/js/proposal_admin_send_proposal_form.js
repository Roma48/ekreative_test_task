jQuery(document).ready(function() {
    jQuery('#proposal-admin-send-proposal-form').submit(function() {
        return confirm("This will send the proposal email.  Are you ready to send it?");
    });
});