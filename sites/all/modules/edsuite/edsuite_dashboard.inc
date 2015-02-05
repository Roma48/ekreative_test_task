<?php
/**
 * edsuite_dashboard.inc - All the Dashbaord code in one place.
 * $Id$
 */

/**
 * This function defines and creates the Dashboard for inclusion in the site
 */
function edsuite_dashboard()
{
    global $user;
    if ($user->uid == 0) {
        return '';
    }

    $pid = variable_get('eds_dashboard_use_menu', "");
    if ($pid != "") {
        $menu = menu_get_menu();
        
        $dashboard_menu = '<ul id="dashboard-menu" class="links">' . menu_tree($pid) . '</ul>';
    } else {
        $dashboard_menu = '';
        $dashboard_menu .= '<ul id="dashboard-menu" class="links">';
        $dashboard_menu .= theme('edsuite_dashboard_menu_tree', array('menu' => edsuite_dashboard_menu_structure()));
        $dashboard_menu .= '</ul>';
    }

    drupal_add_css(drupal_get_path('module', 'edsuite') . '/support/css/dashboard.css');
    // drupal_add_js(drupal_get_path('module', 'edsuite') . '/js/superfish.js');
    // drupal_add_js(drupal_get_path('module', 'edsuite') . '/js/dashboard.js');
    drupal_add_js(drupal_get_path('module', 'edsuite') . '/js/dashboard.pack.js'); /* This one has superfish and dashboard js files packed together into one */
    if ($user->picture) {
        $image = theme('image_style', array('style_name' => 'eds_dashboard_photo', 'path' => $user->picture, 'alt' => $user->name, 'title' => $user->name, 'attributes' => array('id' => 'dashboard-photo')));
    } else {
        $image = theme('image', array('path' => drupal_get_path('module', 'edsuite') . '/support/images/dashboard-default-profile-picture.gif', 'alt' => $user->name, 'title' => $user->name, 'attributes' => array('id' => 'dashboard-photo')));
    }
    return theme('edsuite_dashboard', array('user' => $user, 'image' => $image, 'menu' => $dashboard_menu));
}

/**
 * Returns an array defining the menu structure for the dashboard
 */
function edsuite_dashboard_menu_structure()
{
    global $user;
    $modules = module_list();

    $structure[0] = array('path' => "admin/user/user", 'title' => t('Accounts'), 'weight' => -2, 'type' => 374);
    $structure[0]['children'][] = array('path' => "admin/user/user/create", 'title' => t('Add a New Account'), 'weight' => 0, 'type' => 118);
    $structure[0]['children'][] = array('path' => "user/" . $user->uid . "/edit", 'title' => t('Edit My Account'), 'weight' => 0, 'type' => 118);
    $structure[0]['children'][] = array('path' => "admin/user/user", 'title' => t('List User Accounts'), 'weight' => 0, 'type' => 118);
 
    $structure[1] = array('path' => "news", 'title' => t('News & Blog'), 'weight' => -2, 'type' => 374);
    $structure[1]['children'][] = array('path' => "node/add/story", 'title' => t('Submit News Story'), 'weight' => -2, 'type' => 118);
    if (array_key_exists('blog', $modules)) {
        $structure[1]['children'][] = array('path' => "node/add/blog", 'title' => t('Post Blog Entry'), 'weight' => -1, 'type' => 118);
    }
    if (array_key_exists('comment', $modules)) {
        $structure[1]['children'][] = array('path' => "admin/content/comment/list/approval", 'title' => t('Comments Approval Queue'), 'weight' => 0, 'type' => 118);
    }
 
    if (array_key_exists('book', $modules)) {
        $structure[2] = array('path' => "community-profile", 'title' => t('Community Profile'), 'weight' => -1, 'type' => 374);
        $structure[2]['children'][] = array('path' => "node/add/book", 'title' => t('Add New Topic'), 'weight' => 0, 'type' => 118);
        $structure[2]['children'][] = array('path' => "community-profile", 'title' => t('Edit Existing Topic'), 'weight' => 0, 'type' => 118);
    }
 
    if (array_key_exists('eds_properties', $modules)) {
        $structure[3] = array('path' => "eds/properties", 'title' => t('Available Property'), 'weight' => 0, 'type' => 374);
        $structure[3]['children'][] = array('path' => "admin/content/properties", 'title' => t('Edit Property'), 'weight' => -1, 'type' => 118);
        $structure[3]['children'][] = array('path' => "node/add/eds-properties/building", 'title' => t('Add New Building'), 'weight' => 0, 'type' => 118);
        $structure[3]['children'][] = array('path' => "node/add/eds-properties/site", 'title' => t('Add New Site'), 'weight' => 0, 'type' => 118);
        $structure[3]['children'][] = array('path' => "node/add/eds-demographics", 'title' => t('Create Demographic Report'), 'weight' => 0, 'type' => 118);
    }

    if (array_key_exists('block', $modules)) {
        $structure[4] = array('path' => "admin/build/block", 'title' => t('Blocks'), 'weight' => 0, 'type' => 374);
        $structure[4]['children'][] = array('path' => "admin/build/block", 'title' => t('Edit Existing Block'), 'weight' => -1, 'type' => 118);
        $structure[4]['children'][] = array('path' => "admin/build/block/add", 'title' => t('Add New Block'), 'weight' => 0, 'type' => 118);
    }
 
    $structure[5] = array('path' => "node/add", 'title' => t('Content'), 'weight' => 1, 'type' => 374);
    $structure[5]['children'][] = array('path' => "node/add/page", 'title' => t('Create New Page'), 'weight' => 0, 'type' => 118);
    $structure[5]['children'][] = array('path' => "admin/build/menu", 'title' => t('Edit Navigation'), 'weight' => 0, 'type' => 118);
    $structure[5]['children'][] = array('path' => "admin/content/node", 'title' => t('Recent Posts'), 'weight' => 0, 'type' => 118);
    if (array_key_exists('webform', $modules)) {
        $structure[5]['children'][] = array('path' => "node/add/webform", 'title' => t('Create a Webform'), 'weight' => 1, 'type' => 118);
    }

    if (array_key_exists('proposal', $modules)) {
        $structure[6] = array('path' => "admin/content/proposals", 'title' => t('Proposals'), 'weight' => 1, 'type' => 374);
        $structure[6]['children'][] = array('path' => "proposal/category/add", 'title' => t('Add a Library Category'), 'weight' => 0, 'type' => 118);
        $structure[6]['children'][] = array('path' => "node/add/library", 'title' => t('Add to the Library'), 'weight' => 0, 'type' => 118);
        $structure[6]['children'][] = array('path' => "admin/content/proposals", 'title' => t('List Proposals'), 'weight' => 0, 'type' => 118);
        $structure[6]['children'][] = array('path' => "node/add/proposal", 'title' => t('Create New Proposal'), 'weight' => 0, 'type' => 118);
     }

    return $structure;
}

/**
 * This funciton will take the above menu structure and create a "custom" Drupal menu
 */
function edsuite_import_dashboard($name = "Dashboard")
{
    $structure = edsuite_dashboard_menu_structure();
    
    $main = array('title' => $name, 'type' => 115);
    menu_save_item($main);

    foreach ($structure as $item) {
        $item['pid'] = $main['mid'];
        menu_save_item($item);
        if (array_key_exists('children', $item)) {
            foreach ($item['children'] as $child) {
                if ($child['title'] === t('Edit My Account')) {
                    $child['path'] = 'user';
                }
                $child['pid'] = $item['mid'];
                menu_save_item($child);
            }
        }
    }
    
    // $accounts = array('pid' => $main['mid'], 'title' => t('Accounts'), 'path' => "admin/user/user", 'weight' => -2, 'type' => 374);
    // menu_save_item($accounts);
    // $item = array('pid' => $accounts['mid'], 'title' => t('Add a New Account'), 'path' => "admin/user/user/create", 'weight' => 0, 'type' => 118);
    // menu_save_item($item);
}

///**
// * Theme the dashboard
// *
// * $user - the global $user object
// * $image - the html <img> tag to use for the thumbnail
// * $menu - the html menu tree to be displayed (usually the result of theme('edsuite_dashboard_menu_tree', ...)
// */
//function theme_edsuite_dashboard($user, $image, $menu)
//{
//    $output = '<div id="dashboard">';
//
//    $output .= '<div id="dashboard-header">';
//
//    $output .= '<div id="dashboard-welcome">';
//    $output .= l(t('Logout'), 'logout') . ' <span class="separator">|</span> ' . t('Welcome') . ': ' . l($user->name, 'user/' . $user->uid) . $image;
//    $output .= '</div>';
//
//    $output .= '<a href="http://www.edsuite.com" target="_blank">' . theme('image', drupal_get_path('module', 'edsuite') . '/support/images/edsuite_logo.png', 'EDSuite', 'EDSuite', array('id' => 'edsuite_logo')) . '</a>';
//    $output .= '<span id="get-started-now">' . t('Get Started Now!') . '</span>';
//
//    $output .= '</div>';
//
//    $output .= $menu;
//    $output .= '<span class="clearer"> </span>';
//
//    $output .= '</div>';
//
//    return $output;
//}
//
///**
// * Theme a single menu item
// */
//function theme_edsuite_dashboard_menu_item($item = array())
//{
//    if (array_key_exists('children', $item)) {
//        $class = "expanded";
//        $close = "";
//    } else {
//        $class = "leaf";
//        $close = '</li>';
//    }
//    $output = '<li class="' . $class . '">' . l($item['title'], $item['path']) . $close;
//    return $output;
//}
//
///**
// * Theme the menu tree structure for the dashboard
// */
//function theme_edsuite_dashboard_menu_tree($menu = array())
//{
//    $output = '';
//    foreach ($menu as $item) {
//        $output .= theme('edsuite_dashboard_menu_item', $item);
//        if (array_key_exists('children', $item)) {
//            $output .= '<ul class="menu">' . theme('edsuite_dashboard_menu_tree', $item['children']) . '</ul></li>';
//        }
//    }
//    return $output;
//}