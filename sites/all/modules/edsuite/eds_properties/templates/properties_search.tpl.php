<?php

$output = '';
$properties = '';

$gmap = array();
$gmap['#settings'] = gmap_defaults();

$markers = array();
$markertypes = variable_get('gmap_node_markers', array());

if (!empty($nodes)) {
    $gmap['#settings']['latitude']  = $nodes[0]->field_location['und'][0]['latitude'];
    $gmap['#settings']['longitude'] = $nodes[0]->field_location['und'][0]['longitude'];
    $gmap['#settings']['id'] = rand(1000,9999);
    
    $marker_type    = isset($markertypes['eds_properties']) ? $markertypes['eds_properties'] : 'drupal';

    /* Load .ini file */
    $filename       = variable_get('gmap_markerfiles', drupal_get_path('module', 'gmap') .'/markers/'). $marker_type .'.ini';
    $marker_files   = parse_ini_file($filename);
    $marker_array   = explode(",", $marker_files['sequence']);

    foreach ($nodes as $i => $node) {
        
        if ($i >= count($marker_array)) {
            $marker_image = "marker.png";
        } else {
            $marker_image = $marker_array[$i];
        }

        $marker = base_path() . variable_get('gmap_markerfiles', drupal_get_path('module', 'gmap') .'/markers/') . $marker_image;
        
        $markers[] = array(
            'markername' => $marker_type,
            'latitude'   => $nodes[$i]->field_location['und'][0]['latitude'],
            'longitude'  => $nodes[$i]->field_location['und'][0]['longitude'],
            'offset'     => $i,
            'opt'        => array('title' => $node->title),
            'text'       => strtr(theme('eds_property_gmap_info', array('node' => $node)), "'\n\r", '" '),
            'icon' => $marker
        );  
        

        $properties .= '<div class="property-list">';
        $properties .= '<table class="property-list">';
        $properties .= '    <tbody>';
        $properties .= '        <tr>';
        $properties .= '            <td rowspan="6" class="marker"><img src="'. $marker .'"/></td>';
        $properties .= '            <td rowspan="6" class="photo"><a href="'. url('node/' . $node->nid, array('absolute' => TRUE)) .'">';
		if (empty($node->photos)) {
            $properties .= '<img src = "'. image_style_url('eds_properties_search', variable_get('eds_properties_placeholder', "")) .'" alt="" />';
        } else {
			// * TODO - Remove 'und' reference and use Drupal API field_get_items() function
			$image_path = image_style_url('eds_properties_search', $node->field_property_photographs['und'][0]['uri']);
			$properties .= '<img src = "'. $image_path .'" alt="" />';
        }
        $properties .= '</a></td>';

        $add_link_report = '';
        $report_nodetypes = variable_get('eds_report_nodetypes', array());
        if (array_key_exists($node->type, $report_nodetypes)) {
            if ($report_nodetypes[$node->type]['status'] == 1) {
                $add_link_report = eds_report_add_link($node->nid, 'eds_properties', true);
            }
        }
        $properties .= '            <td colspan="2" class="title">' . $add_link_report . $node->title . '</td>';
        $properties .= '        </tr>';
        $properties .= '        <tr>';
        $properties .= '            <td colspan="2" class="price">&nbsp;</td>';
        $properties .= '        </tr>';
        if ($_REQUEST['property_search']['property_type'] == 'Building') {
            $properties .= '        <tr>';
            $properties .= '            <td class="building-type"><strong>' . t('Type') . ':</strong> ' . $node->field_property_type['und'][0]['value'] . '</td>';
            $properties .= '            <td class="sq-footage"><strong>' . t('Total Sq. Ft.') . ':</strong> ' . theme('eds_number', array('value' => $node->field_sq_footage['und'][0]['value'])) . '</td>';
            $properties .= '        </tr>';
        }
        $properties .= '        <tr>';
        $properties .= '            <td class="zoning-type"><strong>' . t('Zoning') . ':</strong> ' . $node->field_zoning_type['und'][0]['value'] . '</td>';
        $properties .= '            <td class="acreage"><strong>' . t('Acreage') . ':</strong> ' . $node->field_acreage['und'][0]['value']. '</td>';
        $properties .= '        </tr>';
        $properties .= '        <tr>';
        $properties .= '            <td colspan="2" class="property-more-information">';
        $properties .= l(t('Click here for more information'), 'node/' . $node->nid, array(), null, null, true);
        $properties .= '<div class="more_mobile">'.l(t('More info'), 'node/' . $node->nid, array(), null, null, true).'</div>';
        $properties .= '                <span class="property-more-info-print-link">See ' . url('eds/property/' . $node->nid) . ' for more information</span>';
        $properties .= '            </td>';
        $properties .= '        </tr>';
        $properties .= '        <tr><td colspan="2">&nbsp;</td></tr>';
        $properties .= '    </tbody>';
        $properties .= '</table>';
        $properties .= '</div>';
    }
    
    //exit;
}


$output .= '<div id="gmap-wrapper">' . theme('gmap', array('element'=> array('#gmap_settings' => $gmap['#settings']))) . '</div>';
$output .= '<script type="text/javascript">
                 mapInit('. json_encode($markers) .','. json_encode($gmap['#settings']) .',"gmap-'. $gmap['#settings']['id'] .'-gmap0",true);
            </script>';



$pager = '';
$element = 0;
$parameters = array();
global $base_url;
$pager .= '<div class="pager">';
$pager .= sprintf("<span class=\"pager_results\">%s %d - %d %s %d</span>", t('Results'), (($cur_page-1) * $limit) + 1, (($cur_page-1) * $limit) + $cur_count, t('of'), $total);
$pager .= '<span class="pager_links">';
if ($cur_page != 1){
    $prev_page = $cur_page -1;
    $pager .= '<a href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . $prev_page . '&page_limit=' .  $limit . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . t('Previous') . '</a>';
}
if (($cur_page*$limit) < $total){
    $next_page = $cur_page +1;
    $pager .= '<a style="margin-left: 15px;" href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . $next_page . '&page_limit=' .  $limit . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . t('Next') . '</a>';
}
$pager .= '</span>';

global $eds_property_defaults;
$page_sizes = variable_get('eds_properties_page_sizes', $eds_property_defaults['page_sizes']);
foreach ($page_sizes as $i => $size) {
    if ($size == $limit) {
        $page_sizes[$i] = $size;
    } else {
        $page_sizes[$i] = '<a href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . 1 . '&page_limit=' .  $size . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . $size . '</a>';
    }
}
$pager .= '(' . t('Page Size') . ': ' . implode(', ', $page_sizes) . ')';

$pager .= '</div>';



$pager_mobile = '';
$pager_mobile .= '<div class="pager_mobile">';
$pager_mobile .= sprintf("<span class=\"pager_results\">%s %d - %d %s %d</span>", t('Results'), (($cur_page-1) * $limit) + 1, (($cur_page-1) * $limit) + $cur_count, t('of'), $total);
$pager_mobile .= '<span class="pager_links">';
if ($cur_page != 1){
    $prev_page = $cur_page -1;
    $pager_mobile .= '<a href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . $prev_page . '&page_limit=' .  $limit . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . t('Previous') . '</a>';
}
if (($cur_page*$limit) < $total){
    $next_page = $cur_page +1;
    $pager_mobile .= '<a style="margin-left: 15px;" href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . $next_page . '&page_limit=' .  $limit . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . t('Next') . '</a>';
}
$pager_mobile .= '</span>';

global $eds_property_defaults;
$page_sizes = variable_get('eds_properties_page_sizes', $eds_property_defaults['page_sizes']);
foreach ($page_sizes as $i => $size) {
    if ($size == $limit) {
        $page_sizes[$i] = $size;
    } else {
        $page_sizes[$i] = '<a href="javascript:void(0)" class="page-size" onclick="fetchPage(\'#ajax-properties\', document.getElementById(\'eds-properties-search-form\').action + \'?page=' . 1 . '&page_limit=' .  $size . '&\' + jQuery(\'#eds-properties-search-form\').serialize());">' . $size . '</a>';
    }
}
$pager_mobile .= '<div class="pager_mobile_title">Page size</div>'.implode(', ', $page_sizes);

$pager_mobile .= '</div>';

$output .= $pager;
$output .= $properties;
$output .= $pager;
$output .= $pager_mobile;
echo $output;
