<?php
if (arg(0)=='printpdf' && empty($node->field_property_photographs)) { 
    $output =  '';   
} else {
    

$output = '';

$output .= ' <div id="photos">';
$output .= '  <div class="title">' . t('Photos') . '</div>';
$output .= '   <div id="image-Container">';

$imagecache_setting = 'eds_properties_photo';
$style_add = '';
if($teaser) {
    $imagecache_setting = 'eds_properties_search';
    $style_add = 'style="display: block; float: left;"';
}
if (empty($node->field_property_photographs)) {
    $output .= '<img src="'.image_style_url($imagecache_setting, variable_get('eds_properties_placeholder', "")). '" alt="'.t('No image available').'" title="'.t('No image available').'"/>';
} else {
    foreach ($node->field_property_photographs['und'] as $photo) {
        $img = '<img src="'.image_style_url($imagecache_setting, $photo['uri']). '" alt="'.$photo['alt'].'" title="'.$photo['title'].'"/>';
        $output .= '<a class="colorbox_gallery" '. $style_add .' href="' . str_replace('+', '%20', url(file_create_url($photo['uri']))) . '" rel="gall" title="' . $photo['title'] . '">' . $img . '</a>';
    }
}
$output .= '        </div>';

if (!empty($node->field_property_photographs) && !$teaser) {
    $output .= '        <div id="buttons">';
    $output .= '            <img id="prev" alt="' . t('Previous photo') . '" src="' . base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/button-pre.gif" />';
    $output .= '            <img id="play" alt="' . t('Play') . '" src="' . base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/button-play.gif" />';
    $output .= '            <img id="pause" alt="' . t('Pause') . '" src="' . base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/button-pause.gif" />';
    $output .= '            <img id="next" alt="' . t('Next photo') . '" src="' . base_path() . drupal_get_path('module', 'eds_properties') . '/support/images/button-next.gif" />';
    $output .= '        </div>';

    $output .= '        <div id="count-photo">' . count($node->field_property_photographs['und']) . ' '. t('Photos') . '</div>';

    $output .= '        <div id="buttons-enlarge">';
    $output .= '            <a href="#" id="enlarge">' . t('Click to Enlarge Photo') . '</a>';
    $output .= '        </div>';
    $output .= '        <div id="slideshow-status"></div>';
}
$output .= '        <div class="clearer"> </div>';
$output .= '    </div><!-- .photo end -->';

}

echo $output;