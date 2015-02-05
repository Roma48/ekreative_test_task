<?php
global $base_url;

//echo '<pre>'; print_r($node); exit;

drupal_add_css(drupal_get_path('module', 'proposal') . '/templates/skins/'. $node->field_skins['und'][0]['value'] . '.css', 'file');

//$styles = '';
//    //if (!empty($node->colors)) {
//        $styles .= '<style type="text/css">';
//        
//        if (isset($node->field_headers['und'][0]['jquery_colorpicker'])){
//            $styles .= 'div.section h1, div.section h2, div.section h3, div.section h4 { color: #' . $node->field_headers['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        if (isset($node->field_links['und'][0]['jquery_colorpicker'])){
//            $styles .= 'div.node a { color: #' . $node->field_links['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        if (isset($node->field_menu_background['und'][0]['jquery_colorpicker'])){
//            $styles .= 'div#proposal-navigation-container { background-color: #' . $node->field_menu_background['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        if (isset($node->field_menu_foreground['und'][0]['jquery_colorpicker'])){
//            $styles .= 'ul#proposal-navigation li.section-navigation-item a { color: #' . $node->field_menu_foreground['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        if (isset($node->field_menu_hover_background['und'][0]['jquery_colorpicker'])){
//            $styles .= 'ul#proposal-navigation li.section-navigation-item a:hover { background-color: #' . $node->field_menu_hover_background['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        if (isset($node->field_menu_hover_foreground['und'][0]['jquery_colorpicker'])){
//            $styles .= 'ul#proposal-navigation li.section-navigation-item a:hover { color: #' . $node->field_menu_hover_foreground['und'][0]['jquery_colorpicker'] . ' !important; }';
//        }
//        
//        $styles .= '</style>';
    //}

//    $control = '';
//    $control .= '<ul class="controls">';
//    $control .= '<li id="print_to_pdf">' . l(t('Convert to PDF'), 'proposal/code/' . $node->field_code['und'][0]['value'] . '/pdf', array('target' => '_blank')) . '</li>';
//    $control .= '<li id="print_report"><a href="#" onclick="print();">' . t('Print Proposal') . '</a></li>';
//    $control .= '<li id="send_email_proposal"><a href="#">' . t('Share Proposal') . '</a></li>';
//    $control .= '</ul>';

    $proposal_header = variable_get('proposal_header', array('logo' => $base_url.'/sites/default/files/logo.png', 'contact' => '', 'email' => variable_get('site_mail', '')));

    $header = '<table id="proposal-header"><tr>';
    $header .= '<td id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</td>';
    $header .= '<td id="proposal-header-contact">' . $proposal_header['contact'] . '</td>';
    $header .= '<td id="proposal-header-email">Email:<br/><a href="mailto:' . $proposal_header['email'] . '">' . $proposal_header['email'] . '</a></td>';
    $header .= '</tr></table>';


    $header .= '<table id="proposal-header-print"><tr>';
    $header .= '<td id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</td></tr><tr>';
    $header .= '<td id="proposal-header-contact">' . $proposal_header['contact'] . '</td></tr><tr>';
    $header .= '<td id="proposal-header-email">Email:<br/><a href="mailto:' . $proposal_header['email'] . '">' . $proposal_header['email'] . '</a></td>';
    $header .= '</tr></table>';
    $output = '';


    
    switch ($node->field_navigation_style['und'][0]['value']) {
        case PROPOSAL_HORIZONTAL_NAVIGATION:
            $class = 'horizontal';
            drupal_add_js(drupal_get_path('module', 'proposal') . '/3rdparty/superfish-1.4.8/js/superfish.js', 'file');
            drupal_add_js(drupal_get_path('module', 'proposal') . '/3rdparty/superfish-1.4.8/js/supersubs.js', 'file');
            drupal_add_js('$(document).ready(function() {$("ul.menu.horizontal").supersubs().superfish();});', 'inline');
            break;

        case PROPOSAL_VERTICAL_NAVIGATION:
        default:
            $class = 'vertical';
            break;
    }

    drupal_add_css(drupal_get_path('module', 'proposal') . '/support/css/proposal-' . $class . '.css', 'file');
    $nav = '<div id="proposal-navigation-container" class="' . $class . '">';
    $nav .= '<ul id="proposal-navigation" class="menu ' . $class . '">';

    $i = 1;
//    foreach ($node->sections as $section) {
//        if ($section['sub-section']) $is_sub = true; else $is_sub = false;
//        if ($node->sections[$i+1]['sub-section']) $next_is_sub = true; else $next_is_sub = false;
//        
//        $prefix = '<li id="proposal-navigation-' . $i .'" class="section-navigation-item"><a href="#">';
//        $suffix = '</a></li>';
//
//        if ($next_is_sub && !$is_sub) {
//            $suffix = '</a><ul class="menu">';
//        }
//        if (!$next_is_sub && $is_sub) {
//            $suffix .= '</ul></li>';
//        }
//        
//        $nav .= $prefix . $section['title'] . $suffix;
//
//        $output .= '<div id="proposal-' . $i . '" class="section">';
//        if (!empty($section['sidebar']['body'])) {
//            $output .= '<div class="sidebar"><h3 class="sidebar-title">' . $section['sidebar']['title'] . '</h3><div class="sidebar-content">' . $section['sidebar']['body'] . '</div></div>';
//        }
//        $output .= '<h2 class="section-title">' . $section['title'] . '</h2><div class="section-content">' . $section['body'] . '</div></div>';
//        $i++;
//    }

    $nav .= '</ul></div>';

    //echo $styles . $control . drupal_get_form('proposal_email_proposal_form', $node) . $header . $nav . $output . '<div id="proposal-footer">Powered by <a href="http://www.edsuite.com/">EDsuite</a></div>';
    echo $styles . $header . $nav . $output . '<div id="proposal-footer">Powered by <a href="http://www.edsuite.com/">EDsuite</a></div>';
    ?>
