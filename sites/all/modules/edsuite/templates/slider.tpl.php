<?php
//echo '<pre>';
//var_dump($element);
//echo '</pre>';
//exit;
$element['#id'] = 'edit-'. implode('-', $element['#parents']) . '-' . $element['#id'];

$path = drupal_get_path('module', 'edsuite');
//drupal_add_css($path .'/support/css/slider.css');
drupal_add_css('http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css');
drupal_add_js($path .'/js/slide_element.js');
drupal_add_js($path .'/js/jquery.ui.touch-punch.min.js');
//drupal_add_js($path .'/js/jquery.ui.js');
drupal_add_library('system', 'ui.slider');
drupal_add_js(
    'jQuery(document).ready( function() { '.
        'add_slider('.
        '"'. $element['#id'] .'",'.
        $element['#stepping'] .','.
        $element['#min_value'] .','.
        $element['#max_value'] .','.
        '"'. $element['#id'] .'-min",'.
        '"'. $element['#id'] .'-max",'.
        $element['#default_min'] .','.
        $element['#default_max'] .');'.
        '} );',
    'inline'
);

_form_set_class($element, array('form-slide'));

$name = array_shift($element['#parents']);
if (count($element['#parents'])) {
    $name .= '['. implode('][', $element['#parents']) .']';
}

// set min and max hidden elements
$min = array(
    '#name' 	  => $name . '[' . $element['#name'] .'-min]',
    '#id' 	 	  => $element['#id'] . '-min',
    '#value' 	  => $element['#min_value'],
    '#attributes' => $element['#attributes'] + array('id' => $element['#id'] . '-min'),
);

$max = array(
    '#name' 	  => $name . '[' . $element['#name'] .'-max]',
    '#id' 	 	  => $element['#id'] . '-max',
    '#value'      => $element['#max_value'],
    '#attributes' => $element['#attributes'] + array('id' => $element['#id'] . '-max'),
);

$output  = theme_hidden(array('element' => $min));
$output .= theme_hidden(array('element' => $max));

//&nbsp;
$output .= <<<SLIDER
&#32{$element['#label_prefix']}
<span id="{$element['#id']}-min-display"></span> -
&#32{$element['#label_prefix']}
<span id="{$element['#id']}-max-display"></span>
&#32{$element['#label_suffix']}
<div class="slider-container">
    <div class="wrapper_left"></div>
    <div id="{$element['#id']}_wrapper" class="slider-wrapper">
        <div class="slider" id="{$element['#id']}">
            <div class="indicator min" tabindex="1"></div>
            <div class="indicator max" tabindex="2"></div>
        </div>
    </div>
    <div class="wrapper_right"></div>
</div>
SLIDER;
//echo '<pre>';
//var_dump($output);
//echo '</pre>';
//exit;

//echo theme('form_element', $element, $output);
// TODO not sure about this/ Need check
echo $output;