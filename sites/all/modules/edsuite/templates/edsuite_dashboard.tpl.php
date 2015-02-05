<?php

$output = '<div id="dashboard">';

$output .= '<div id="dashboard-header">';

$output .= '<div id="dashboard-welcome">';
$output .= l(t('Logout'), 'logout') . ' <span class="separator">|</span> ' . t('Welcome') . ': ' . l($user->name, 'user/' . $user->uid) . $image;
$output .= '</div>';

$output .= '<a href="http://www.edsuite.com" target="_blank">' . theme('image', array('path' => drupal_get_path('module', 'edsuite') . '/support/images/edsuite_logo.png', 'alt' => 'EDSuite', 'title' => 'EDSuite', 'attributes' => array('id' => 'edsuite_logo'))) . '</a>';
$output .= '<span id="get-started-now">' . t('Get Started Now!') . '</span>';

$output .= '</div>';

$output .= $menu;
$output .= '<span class="clearer"> </span>';

$output .= '</div>';

echo $output;