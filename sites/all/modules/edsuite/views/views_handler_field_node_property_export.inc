<?php
/**
* Field handler to present a clone node link.
*
* Closely modeled after views/modules/node/views_handler_field_node_link_edit.inc
*/
class views_handler_field_node_property_export extends views_handler_field_node_link {
  /**
   * Renders the link.
   */
    function render_link($node, $values)
    {

        if ($node->type == 'eds_properties') {
            $this->options['alter']['make_link'] = true;
            $this->options['alter']['path'] = "node/{$node->nid}/property-export-csv";
            $this->options['alter']['query'] = drupal_get_destination();

            $text = !empty($this->options['text']) ? $this->options['text'] : t('export');
            return $text;
        } else {
            return false;
        }
    }
}