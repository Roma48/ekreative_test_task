<?php
require_once('views_handler_field_node_proposal_send_email.inc');
require_once('views_handler_field_node_property_export.inc');

/**
* Implements hook_views_data_alter()
*/
function edsuite_views_data_alter(&$views_data) {
    $views_data['node']['proposal_send_email'] = array(
        'field' => array(
            'title' => t('Proposal send email'),
            'help' => t('Provide a link to send proposal email'),
            'handler' => 'views_handler_field_node_proposal_send_email',
        ),
    );
    
    $views_data['node']['property_export'] = array(
        'field' => array(
            'title' => t('Property export to csv'),
            'help' => t('Export property to csv file'),
            'handler' => 'views_handler_field_node_property_export',
        ),
    );    
}
