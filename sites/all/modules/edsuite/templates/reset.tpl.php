<?php

if (isset($element['#attributes']['class'])) {
    $element['#attributes']['class'] = 'form-reset'. $element['#button_type'] .' '. $element['#attributes']['class'];
} else {
    $element['#attributes']['class'] = 'form-'. $element['#button_type'];
}

echo '<input type="reset" '. (empty($element['#name']) ? '' : 'name="'. $element['#name'] .'" ')  .'id="'. $element['#id'].'" value="'. check_plain($element['#value']) .'" '. drupal_attributes($element['#attributes']) ." />\n";