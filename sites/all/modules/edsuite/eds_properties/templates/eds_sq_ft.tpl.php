<?php

global $eds_property_defaults;
echo theme('eds_number', array('value' => $value)) . ' ' . variable_get('eds_properties_sqft_suffix', $eds_property_defaults['sqft_suffix']);