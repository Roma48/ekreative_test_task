<?php

echo '<div id="ajax-busy">' . theme('image', array ('path' => $GLOBALS['base_url'] . '/' . drupal_get_path('module', 'edsuite') . '/support/images/ajax-loader-lg.gif', 'alt' => 'Progress')) . "&nbsp;&nbsp; " . $content . '</div>';