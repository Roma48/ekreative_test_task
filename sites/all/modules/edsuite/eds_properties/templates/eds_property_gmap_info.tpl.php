<?php

$output = '<div class="gmap-popup info-window" style="width: 275px">';
$output .= '    <div class="gmap-popup title edit" id="node-' . $node->nid . '-title">' . l(check_plain($node->title), 'eds/property/' . $node->nid) . '</div>';
$output .= '    <div class="gmap-popup location" id="node-' . $node->nid . '-location">';
$output .= '        <span class="edit street" id="node-' . $node->nid . '-street">' . check_plain($node->field_location['und'][0]['street']) . '</span>,';
$output .= '        <span class="edit city" id="node-' . $node->nid . '-city">' . check_plain($node->field_location['und'][0]['city']) . '</span>,';
$output .= '        <span class="edit province" id="node-' . $node->nid . '-province">' . check_plain($node->field_location['und'][0]['province']) . '</span>';
$output .= '    </div>';

if($node->field_property_type['und'][0]['value'] == 'Building') {
    $output .= '    <table>';
    $output .= '        <tbody>';
    $output .= '            <tr>';
    $output .= '                <td rowspan="4" class="gmap-popup photo" id="node-' . $node->nid . '-photo">';
    if (empty($node->photos)) {
        $output .= theme('image_style', array('style_name' => 'eds_properties_search', 'path' => variable_get('eds_properties_placeholder', ""), 'alt' => t('No image available'), 'title' => t('No image available')));
    } else {
        $output .= theme('image_style', array('style_name' => 'eds_properties_search', 'path' =>  basename($node->photos[0])));
    }
    $output .= '                </td>';
    $output .= '                <td class="gmap-popup sq_footage edit first" id="node-' . $node->nid . '-sq_footage">' . theme('eds_sq_ft', array('value' => $node->field_sq_footage['und'][0]['value'])) . '</td>';
    $output .= '            </tr>';
    $output .= '            <tr>';
    $output .= '                <td class="gmap-popup acreage edit" id="node-' . $node->nid . '-acreage">' . theme('eds_number', array('value' => $node->field_acreage['und'][0]['value'])) . ' acres</td>';
    $output .= '            </tr>';
    $output .= '            <tr>';
    $output .= '                <td class="gmap-popup building_type edit" id="node-' . $node->nid . '-building_type">' . check_plain($node->field_building_type['und'][0]['value']) . '</td>';
    $output .= '            </tr>';
    $output .= '            <tr>';
    $output .= '                <td class="gmap-popup price last" id="node-' . $node->nid . '-price">&nbsp; ';
    $output .= ' </td>';
    $output .= '            </tr>';
    $output .= '        </tbody>';
    $output .= '    </table>';
} else {
    $output .= '        <table>';
    $output .= '            <tbody>';
    $output .= '                <tr>';
    $output .= '                    <td rowspan="3" class="gmap-popup photo" id="node-' . $node->nid . '-photo">';
    if (empty($node->photos)) {
        $output .= theme('image_style', array('style_name' => 'eds_properties_search', 'path' => variable_get('eds_properties_placeholder', ""), 'alt' => t('No image available'), 'title' => t('No image available')));
    } else {
        $output .= theme('image_style', array('style_name' => 'eds_properties_search', 'path' => basename($node->photos[0]), 'alt' => '', 'title' => ''));
    }
    $output .= '                    </td>';
    $output .= '                    <td class="gmap-popup acreage edit first" id="node-' . $node->nid . '-acreage">' . theme('eds_number', array('value' => $node->field_acreage['und'][0]['value'])) . ' acres</td>';
    $output .= '                </tr>';
    $output .= '                <tr>';
    $output .= '                    <td class="gmap-popup rail_access edit" id="node-' . $node->nid . '-rail_access">' . t('Rail Access') . ': ';
    switch ($node->field_rail_access['und'][0]['value']) {
        case YES:
            $output .= t('Yes');
            break;

        case NO:
            $output .= t('No');
            break;

        case POSSIBLE:
            $output .= t('Possible');
            break;
    }
    $output .= '</td>';
    $output .= '                </tr>';
    $output .= '                <tr>';
    $output .= '                    <td class="gmap-popup price last" id="node-' . $node->nid . '-price">&nbsp;';
    $output .= ' </td>';
    $output .= '                </tr>';
    $output .= '            </tbody>';
    $output .= '        </table>';
}

$output .= '    <div class="gmap-popup body" id="node-' . $node->nid . '-body">';

$teaser_size = 120;

$teaser = $node->field_teaser['und'][0]['value'];
if (strlen($teaser) > $teaser_size) {
    $teaser = substr(strip_tags($teaser), 0, $teaser_size);
    $teaser = substr_replace($teaser, ' &hellip;', strrpos($teaser, ' '));
}
$output .= $teaser;

$output .= '    </div>';

$output .= '    <div class="gmap-popup view" id="node-' . $node->nid . '-view">' . l(t('View Property Detail'), 'eds/property/' . $node->nid) . '</div>';
$output .= '</div>';
echo $output;