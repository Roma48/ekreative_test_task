<?php
//    phptemplate_comment_wrapper(NULL, $node->type);
//    $class = 'node node-type-' . $node->type;
$class = '';
    if ($sticky) { $class .= ' sticky'; }
    if (!$status) { $class .= ' node-unpublished'; }
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print $class; ?> clearfix"<?php print $attributes; ?>>
  <div class="content" <?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
    ?>

<?php
      global $base_url;
    drupal_add_css(drupal_get_path('module', 'proposal') . '/templates/skins/'. $node->field_skin['und'][0]['value'] . '.css', 'file');

    $proposal_header = variable_get('proposal_header', array('logo' => $base_url.'/sites/default/files/logo.png', 'contact' => '', 'email' => variable_get('site_mail', '')));
    $header = '';

    $finded_stafs = 0;
    if($node && isset($node->field_staff_manager['und']) && count($node->field_staff_manager['und'])>0 ) {

        $header1 = '<table id="proposal-header-no-print" class="hide-on print"><tr>';
        $header1 .= '<td id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</td>';
        $header1 .= '<td id="proposal-header-contact2">';

        $header2 = '</td></tr></table>';
                
        $header3 = '<div id="proposal-header"><div>';
        $header3 .= '<div id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</div></div><div>';
        $header3 .= '<div id="proposal-header-contact2"><div>';

        $header4 = '</div></div></div></div>';       

        $managers = '';
        
        foreach ($node->field_staff_manager['und'] as $man) {
            $m = node_load($man['nid']);
            if ($m && $m->type=='staff_manager'){
                
                $finded_stafs++;

                $managers = '<div class="manager stuff">';
             
                $managers .='<div>'
                    .((@$m->field_staff_prefix['und'][0]['value']!='')?(' '.@$m->field_staff_prefix['und'][0]['value']):(''))
                    .((@$m->field_lead_first_name['und'][0]['value']!='')?(' '.@$m->field_lead_first_name['und'][0]['value']):(''))
                    .((@$m->field_last_name['und'][0]['value']!='')?(' '.@$m->field_last_name['und'][0]['value']):(''))
                    .((@$m->field_lead_suffix['und'][0]['value']!='')?(' '.@$m->field_lead_suffix['und'][0]['value']):(''))
                    .((@$m->field_professional_designation['und'][0]['value']!='')?(', '.@$m->field_professional_designation['und'][0]['value']):(''))
                    .((@$m->field_lead_job_title['und'][0]['value']!='')?(', '.@$m->field_lead_job_title['und'][0]['value'].''):(''))
                    .'</div><div>'
                    .((@$m->field_lead_organization['und'][0]['value']!='')?(@$m->field_lead_organization['und'][0]['value']):(''))
                    .'</div><div>'
                    .@$m->field_lead_address['und'][0]['street'].', '.@$m->field_lead_address['und'][0]['additional']
                    .'</div><div>'
                    .@$m->field_lead_address['und'][0]['city'].', '.@$m->field_lead_address['und'][0]['province_name'].', '. @$m->field_lead_address['und'][0]['postal_code'].'<br/>'.'<br/>'
                    .'</div><div>'
                    .((@$m->field_lead_website_url['und'][0]['value']!='')?('<a href = "'.((strpos(@$m->field_lead_website_url['und'][0]['value'],'http')!=false)?(@$m->field_lead_website_url['und'][0]['value']):('http://'.@$m->field_lead_website_url['und'][0]['value'])).'" target="_blank" >'.@$m->field_lead_website_url['und'][0]['value'].'</a>'.''):(''))
                    .'</div><div>'
                    .((@$m->field_lead_email_address['und'][0]['email']!='')?('<a href = "mailto:'.@$m->field_lead_email_address['und'][0]['email'].'" target="_blank" >'.@$m->field_lead_email_address['und'][0]['email'].'</a>'):('')).'</br>'
                    .'</div><div>'
                    .((@$m->field_lead_phone_number['und'][0]['value']!='')?(@$m->field_lead_phone_number['und'][0]['value']):('')).'</br>'
                .'';
                $managers .= '</div></div>';


                $managers2 = '<table><tr><td><div class="manager stuff">';
         
                $managers2 .='<div>'
                    .((@$m->field_staff_prefix['und'][0]['value']!='')?(' '.@$m->field_staff_prefix['und'][0]['value']):(''))
                    .((@$m->field_lead_first_name['und'][0]['value']!='')?(' '.@$m->field_lead_first_name['und'][0]['value']):(''))
                    .((@$m->field_last_name['und'][0]['value']!='')?(' '.@$m->field_last_name['und'][0]['value']):(''))
                    .((@$m->field_lead_suffix['und'][0]['value']!='')?(' '.@$m->field_lead_suffix['und'][0]['value']):(''))
                    .((@$m->field_professional_designation['und'][0]['value']!='')?(', '.@$m->field_professional_designation['und'][0]['value']):(''))
                    .((@$m->field_lead_job_title['und'][0]['value']!='')?(', '.@$m->field_lead_job_title['und'][0]['value'].''):(''))
                    .'</div><div>'
                    .((@$m->field_lead_organization['und'][0]['value']!='')?(@$m->field_lead_organization['und'][0]['value']):(''))
                    .'</div><div>'
                    .@$m->field_lead_address['und'][0]['street'].', '.@$m->field_lead_address['und'][0]['additional']
                    .'</div><div>'
                    .@$m->field_lead_address['und'][0]['city'].', '.@$m->field_lead_address['und'][0]['province_name'].', '. @$m->field_lead_address['und'][0]['postal_code'].'<br/>'.'<br/>'
                    .'</div></div></td><td><div class="manager stuff mar"><div>'
                    .((@$m->field_lead_website_url['und'][0]['value']!='')?('<a href = "'.((strpos(@$m->field_lead_website_url['und'][0]['value'],'http')!=false)?(@$m->field_lead_website_url['und'][0]['value']):('http://'.@$m->field_lead_website_url['und'][0]['value'])).'" target="_blank" >'.@$m->field_lead_website_url['und'][0]['value'].'</a>'.''):(''))
                    .'</div><div>'
                    .((@$m->field_lead_email_address['und'][0]['email']!='')?('<a href = "mailto:'.@$m->field_lead_email_address['und'][0]['email'].'" target="_blank" >'.@$m->field_lead_email_address['und'][0]['email'].'</a>'):('')).'</br>'
                    .'</div><div>'
                    .((@$m->field_lead_phone_number['und'][0]['value']!='')?(@$m->field_lead_phone_number['und'][0]['value']):('')).'</br>'
                        
                .'';
                $managers2 .= '</div></div></td></tr></table>';
                //$managers .= '</td></tr></table>';
            }
        }
        if ($finded_stafs!=0){
            echo $no_print = $header1.$managers.$header2;
            echo $print = $header3.$managers.$header4;
        }
    } 

   // echo $finded_stafs; exit;


    if ($finded_stafs==0){
            $type = 'staff_manager';
            $row = db_query('SELECT nid FROM {node} WHERE  type = :type', array(':type' => $type))->fetchAll();
            $managers = '';
            foreach($row as $r) {
                $m = node_load($r->nid);
                if (@$m->field_is_main['und'][0]['value']==1) {
                    $managers = '<div class="manager stuff">';
                        $managers .='<div>'
                        .((@$m->field_staff_prefix['und'][0]['value']!='')?(' '.@$m->field_staff_prefix['und'][0]['value']):(''))
                        .((@$m->field_lead_first_name['und'][0]['value']!='')?(' '.@$m->field_lead_first_name['und'][0]['value']):(''))
                        .((@$m->field_last_name['und'][0]['value']!='')?(' '.@$m->field_last_name['und'][0]['value']):(''))
                        .((@$m->field_lead_suffix['und'][0]['value']!='')?(' '.@$m->field_lead_suffix['und'][0]['value']):(''))
                        .((@$m->field_professional_designation['und'][0]['value']!='')?(', '.@$m->field_professional_designation['und'][0]['value']):(''))
                        .((@$m->field_lead_job_title['und'][0]['value']!='')?(', '.@$m->field_lead_job_title['und'][0]['value'].''):(''))
                        .'</div><div>'
                        .((@$m->field_lead_organization['und'][0]['value']!='')?(@$m->field_lead_organization['und'][0]['value']):(''))
                        .'</div><div>'
                        .@$m->field_lead_address['und'][0]['street'].', '.@$m->field_lead_address['und'][0]['additional']
                        .'</div><div>'
                        .@$m->field_lead_address['und'][0]['city'].', '.@$m->field_lead_address['und'][0]['province_name'].', '. @$m->field_lead_address['und'][0]['postal_code'].'<br/>'.'<br/>'
                        .'</div><div>'
                        .((@$m->field_lead_website_url['und'][0]['value']!='')?('<a href = "'.((strpos(@$m->field_lead_website_url['und'][0]['value'],'http')!=false)?(@$m->field_lead_website_url['und'][0]['value']):('http://'.@$m->field_lead_website_url['und'][0]['value'])).'" target="_blank" >'.@$m->field_lead_website_url['und'][0]['value'].'</a>'.''):(''))
                        .'</div><div>'
                        .((@$m->field_lead_email_address['und'][0]['email']!='')?('<a href = "mailto:'.@$m->field_lead_email_address['und'][0]['email'].'" target="_blank" >'.@$m->field_lead_email_address['und'][0]['email'].'</a>'):('')).'</br>'    
                        .'</div><div>'
                        .((@$m->field_lead_phone_number['und'][0]['value']!='')?(@$m->field_lead_phone_number['und'][0]['value']):('')).'</br>'
                    .'';
                    $managers .= '</div></div>';


                    $managers2 = '<table><tr><td><div class="manager stuff">';
                        $managers2 .='<div>'
                        .((@$m->field_staff_prefix['und'][0]['value']!='')?(' '.@$m->field_staff_prefix['und'][0]['value']):(''))
                        .((@$m->field_lead_first_name['und'][0]['value']!='')?(' '.@$m->field_lead_first_name['und'][0]['value']):(''))
                        .((@$m->field_last_name['und'][0]['value']!='')?(' '.@$m->field_last_name['und'][0]['value']):(''))
                        .((@$m->field_lead_suffix['und'][0]['value']!='')?(' '.@$m->field_lead_suffix['und'][0]['value']):(''))
                        .((@$m->field_professional_designation['und'][0]['value']!='')?(', '.@$m->field_professional_designation['und'][0]['value']):(''))
                        .((@$m->field_lead_job_title['und'][0]['value']!='')?(', '.@$m->field_lead_job_title['und'][0]['value'].''):(''))
                        .'</div><div>'
                        .((@$m->field_lead_organization['und'][0]['value']!='')?(@$m->field_lead_organization['und'][0]['value']):(''))
                        .'</div><div>'
                        .@$m->field_lead_address['und'][0]['street'].', '.@$m->field_lead_address['und'][0]['additional']
                        .'</div><div>'
                        .@$m->field_lead_address['und'][0]['city'].', '.@$m->field_lead_address['und'][0]['province_name'].', '. @$m->field_lead_address['und'][0]['postal_code'].'<br/>'.'<br/>'
                        .'</div></div></td><td><div class="manager stuff mar"><div>'
                        .((@$m->field_lead_website_url['und'][0]['value']!='')?('<a href = "'.((strpos(@$m->field_lead_website_url['und'][0]['value'],'http')!=false)?(@$m->field_lead_website_url['und'][0]['value']):('http://'.@$m->field_lead_website_url['und'][0]['value'])).'" target="_blank" >'.@$m->field_lead_website_url['und'][0]['value'].'</a>'.''):(''))
                        .'</div><div>'
                        .((@$m->field_lead_email_address['und'][0]['email']!='')?('<a href = "mailto:'.@$m->field_lead_email_address['und'][0]['email'].'" target="_blank" >'.@$m->field_lead_email_address['und'][0]['email'].'</a>'):('')).'</br>'    
                        .'</div><div>'
                        .((@$m->field_lead_phone_number['und'][0]['value']!='')?(@$m->field_lead_phone_number['und'][0]['value']):('')).'</br>'
                    .'';
                    $managers2 .= '</div></div></td></tr></table>';
                }
            }
        $header = '<table id="proposal-header-no-print" class="hide-on print"><tr>';
        $header .= '<td id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</td>';
        $header .= '<td id="proposal-header-contact2">' . $managers2 . '</td>';
        $header .= '</tr></table>';

        $header .= '<table id="proposal-header"><tr>';
        $header .= '<td id="proposal-header-logo">' . theme('image', array('path' => $proposal_header['logo'])) . '</td></tr><tr>';
        $header .= '<td id="proposal-header-contact2"><div>' . $managers . '</div></td>';
        $header .= '</tr></table>';
        
    }

    $output = '';
    $class = 'vertical';

    drupal_add_css(drupal_get_path('module', 'proposal') . '/support/css/proposal-' . $class . '.css', 'file');
    $nav = '<div id="proposal-navigation-container" class="' . $class . '">';
    $nav .= '<ul id="proposal-navigation" class="menu ' . $class . '">';
    $i = 0;
        
    foreach ($node->field_proposal_sections['und'] as $section) {
                
        $nodeSection = field_collection_item_revision_load($section['revision_id']);
        
        if ($nodeSection->field_make_this_a_sub_section['und'][0]['value']) $is_sub = true; else $is_sub = false;
        
        $nodeSectionNext = field_collection_item_revision_load(@$node->field_proposal_sections['und'][$i + 1]['revision_id']);
        
        if ($nodeSectionNext && $nodeSectionNext->field_make_this_a_sub_section['und'][0]['value']) $next_is_sub = true; else $next_is_sub = false;
        
        $prefix = '<li id="proposal-navigation-' . $i .'" class="section-navigation-item"><a href="#">';
        $suffix = '</a></li>';

        if ($next_is_sub && !$is_sub) {
            $suffix = '</a><ul class="menu">';
        }
        if (!$next_is_sub && $is_sub) {
            $suffix .= '</ul></li>';
        }
        
        $nav .= $prefix . $nodeSection->field_section_title['und'][0]['value'] . $suffix;

        $output .= '<div id="proposal-' . $i . '" class="section '.(($i==(count($node->field_proposal_sections['und'])-1))?('last'):('')).'">';

            if (!empty($nodeSection->field_sidebar_body['und'][0]['value'])) {
                $output .= '<div class="sidebar"><h3 class="sidebar-title">' . $nodeSection->field_sidebar_title['und'][0]['value'] . '</h3>
                                <div class="sidebar-content">' . $nodeSection->field_sidebar_body['und'][0]['value'] . '</div>
                            </div>';
            }
                $output .= '<h2 class="section-title">' . $nodeSection->field_section_title['und'][0]['value'] . '</h2>
                            <div class="section-content">' . $nodeSection->field_section_body['und'][0]['value'] . '</div>
                    </div>';
        $i++;
        
    }

    $nav .= '</ul></div>';
    //$form_for_render = drupal_get_form('proposal_email_proposal_form', $node);
    
    echo /*render($form_for_render) .*/ $header . $nav . $output . '<div id="proposal-footer">Powered by <a href="http://www.edsuite.com/">EDsuite</a></div>';
    ?>

      <?php
      if (isset($node->book_children)): ?>
          <?php print $node->book_children['#value']; ?>
          <?php endif; ?>
  </div>

    <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
        unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.

    $links = render($content['links']);
    if ($links):
        ?>
        <div class="links">
            <?php print $links; ?>
        </div>
        <?php endif; ?>

    <?php print render($content['comments']); ?>
</div>      

