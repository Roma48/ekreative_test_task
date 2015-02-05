<?php

_form_set_class($element, array('form-input'));

// Add inpmin/inpmax class
$min_attributes = $element['#attributes'];
$max_attributes = $element['#attributes'];
if (isset($element['#attributes']['class'])) {
    $min_attributes['class'] .= ' inpmin';
    $max_attributes['class'] .= ' inpmax';
} else {
    $min_attributes['class'] = 'inpmin';
    $max_attributes['class'] = 'inpmax';
}


$min = array(
    '#type'          => 'textfield',
    '#title'         => 'Min',
    '#name' 	     => $element['#name'] .'-min',
    '#id' 	 	     => $element['#id'] .'-min',
    '#value' 	     => $element['#default_min'],
    '#default_value' => $element['#min_value'],
    '#attributes'    => $min_attributes,
    '#parents'       => $element['#parents'],
    '#field_prefix'  => $element['#label_prefix']
);
$max = array(
    '#type'          => 'textfield',
    '#title'         => 'Max',
    '#name'          => $element['#name'] .'-max',
    '#id'            => $element['#id'] .'-max',
    '#value'         => $element['#default_max'],
    '#default_value' => $element['#max_value'],
    '#attributes'    => $max_attributes,
    '#parents'       => $element['#parents'],
    '#field_prefix'  => $element['#label_prefix'],
    '#field_suffix'  => $element['#label_suffix']
);

$output = theme("textfield", array('element' => $min));
$output .= theme("textfield", array('element' => $max));

//echo theme('form_element', $element, $output);
// TODO not sure about this/ Need check
echo theme('form_element', array('element' => $element));