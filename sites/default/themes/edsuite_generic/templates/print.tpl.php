<?php

$patern_gmap = '/gmap-wrapper/';
$res = array();
if (preg_match($patern_gmap, $print['content'], $res)){
    $preg_coor = '/latitude":"(.*)","longitude":"(.*)","/U';
    $result = array();
    if (preg_match_all($preg_coor, $print['content'], $result, PREG_SET_ORDER)){
        foreach ($result as $value) {
            $lat = $value[1];
            $lng = $value[2];
            $img_text = '<div><img src="http://maps.google.com/maps/api/staticmap?center='.$lat.','.$lng.'&markers='.$lat.','.$lng.'&zoom=12&size=657x475&sensor=false" alt="map" /></div>';
            $lat_for_preg = str_replace('.', '\.', $lat);
            $lng_for_preg = str_replace('.', '\.', $lng);
            $replace_patern = '/<div id="gmap-wrapper">.*latitude":"'.$lat_for_preg.'","longitude":"'.$lng_for_preg.'.*<\/script>/Usm';
            $res_text = preg_replace($replace_patern, $img_text, $print['content']);
            $print['content'] = $res_text;
        }
    }
}
$patern_gmap_proposal = '/mapOpen/';
$res = array();
if (preg_match($patern_gmap_proposal, $print['content'], $res)){
    $preg_coor = '/mapOpen\(\'(.*)\'.*\'(.*)\'/U';
    $result = array();
    if (preg_match_all($preg_coor, $print['content'], $result, PREG_SET_ORDER)){
        foreach ($result as $value) {
            $lat = $value[1];
            $lng = $value[2];
            $img_text = '<div><img src="http://maps.google.com/maps/api/staticmap?center='.$lat.','.$lng.'&markers='.$lat.','.$lng.'&zoom=12&size=600x475&sensor=false" alt="map" /></div>';
            $lat_for_preg = str_replace('.', '\.', $lat);
            $lng_for_preg = str_replace('.', '\.', $lng);
            $replace_patern = '/<br><br><a.*mapOpen.*<\/a>/Usm';
            $res_text = preg_replace($replace_patern, $img_text, $print['content']);
            $print['content'] = $res_text;
        }
    }
}
$tmp_text = $print['content'];
//$tmp_res = array();
//preg_match('/class="csv">.*</Usm', $tmp_text, $tmp_res);
//echo '<pre>';
//var_dump($tmp_text);
//echo '</pre>';
//echo '<pre>';
//var_dump($tmp_res);
//echo '</pre>';
//exit;

$tmp_text = preg_replace('/<div class="report_change_all">.*<\/div><\/div>/Usm', '', $tmp_text);
$tmp_text = preg_replace('/<div class="report_change">.*<\/div><\/div>/Usm', '', $tmp_text);
$tmp_text = preg_replace('/class="to_top">back to top/Usm', '>', $tmp_text);
$tmp_text = preg_replace('/class="csv">.*</Usm', '><', $tmp_text);
//$tmp_text = preg_replace('/<img/Usm', '<img style="margin-bottom:5px;"', $tmp_text);
$tmp_text = preg_replace('/<div id="property-sub-nav">.*<\/div>/Usm', '', $tmp_text);
$tmp_text = preg_replace('/<div id="quicks">.*<\/div>/Usm', '', $tmp_text);
$tmp_text = preg_replace('/<div id="buttons">.*<\/div>/Usm', '', $tmp_text);
$tmp_text = preg_replace('/id="enlarge">Click to Enlarge Photo/Usm', '>', $tmp_text);
$tmp_text = preg_replace('/<a class="colorbox_gallery".*>(.*)<\/a>/Usm', '\\1', $tmp_text);
$tmp_text = preg_replace('/id="left-col"/Usm', 'id="left-col" style="width:100%; margin: 0;"', $tmp_text);
$tmp_text = preg_replace('/id="right-col"/Usm', 'id="right-col" style="width:100%; margin: 0"', $tmp_text);
$tmp_text = preg_replace('/id="proposal-navigation-container"/Usm', 'id="proposal-navigation-container" style="display: none;"', $tmp_text);
//$tmp_text = preg_replace('/id="proposal-0"/Usm', 'id="proposal-0" style="margin-left: 0;"', $tmp_text);
$tmp_text = preg_replace('#<span class="print-footnote"*>(.*)</span>#isU', '', $tmp_text);
$tmp_text .= "<style>
div.section {
display: block !important;
margin-left: 0 !important;
padding: 0 !important;
page-break-after: always ;
page-break-before: auto !important;
}
div.section fieldset {
margin-left: 0;
margin-right: 0;
}
div.section .lightboxGallery img {
 margin-left: 3px;
}
#block-menu-block-1, #block-views-news-block, .contextual-links-wrapper  {
 display: none;
}
#block-block-2 li {
    list-style: none;
}
.node-proposal, .node-proposal .content {
background: #ffffff !important;
}
</style>";
$print['content'] = $tmp_text;

//echo '<pre>';
//var_dump($print['content']);
//echo '</pre>';
//exit;
/**
 * @file
 * Default print module template
 *
 * @ingroup print
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $print['language']; ?>" xml:lang="<?php print $print['language']; ?>">
<head>
    <?php print $print['head']; ?>
    <?php print $print['base_href']; ?>
    <title><?php print $print['title']; ?></title>
    <?php // print $print['scripts']; ?>
    <?php print $print['sendtoprinter']; ?>
    <?php print $print['robots_meta']; ?>
    <?php print $print['favicon']; ?>
    <?php print $print['css']; ?>
</head>
<body>
<?php if (!empty($print['message'])) {
    print '<div class="print-message">'. $print['message'] .'</div><p />';
} ?>
<!--<div class="print-logo">--><?php //print $print['logo']; ?><!--</div>-->


<?
    $finded_stafs = 0;
    $managers = '';
    if($node && count($node->field_staff_manager['und'])>0 && isset($node->field_staff_manager['und'])) {
        foreach ($node->field_staff_manager['und'] as $man) {
            $m = node_load($man['nid']);
            if ($m && $m->type=='staff_manager'){
                $finded_stafs++;

                $managers .= '<table class="manager stuff">';
                $managers .= '<tr><td class="manager_right">';
                $managers .= '<div  class="field">'
                        .(($m->field_staff_prefix['und'][0]['value']!='')?(' '.$m->field_staff_prefix['und'][0]['value']):(''))
                        .(($m->field_lead_first_name['und'][0]['value']!='')?(' '.$m->field_lead_first_name['und'][0]['value']):(''))
                        .(($m->field_last_name['und'][0]['value']!='')?(' '.$m->field_last_name['und'][0]['value']):(''))
                        .(($m->field_lead_sufix['und'][0]['value']!='')?(' '.$m->field_lead_sufix['und'][0]['value']):(''))
                        .(($m->field_professional_designation['und'][0]['value']!='' || $m->field_lead_organization['und'][0]['value']!='' || $m->field_lead_job_title['und'][0]['value']!='')?(' ('):(''))
                        .(($m->field_professional_designation['und'][0]['value']!='')?(''.$m->field_professional_designation['und'][0]['value']):(''))
                        .(($m->field_lead_organization['und'][0]['value']!='')?((($m->field_professional_designation['und'][0]['value']!='')?(', '):('')).$m->field_lead_organization['und'][0]['value']):(''))
                        .(($m->field_lead_job_title['und'][0]['value']!='')?((($m->field_professional_designation['und'][0]['value']!='' || $m->field_professional_designation['und'][0]['value']!='')?(', '):('')).$m->field_lead_job_title['und'][0]['value']):(''))
                        .(($m->field_professional_designation['und'][0]['value']!='' || $m->field_lead_organization['und'][0]['value']!='' || $m->field_lead_job_title['und'][0]['value']!='')?(')'):(''))
                    .'</div>';
                $managers .= (($m->field_lead_website_url['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Web Site: </nobr></label></td><td class="r"><div  class="field"><div class="val">'.$m->field_lead_website_url['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                        .(($m->field_lead_email_address['und'][0]['email']!='')?('<table><tr><td class="l"><label><nobr>Email: </nobr></label></td><td class="r"><div  class="field"><div class="val">'.$m->field_lead_email_address['und'][0]['email'].'</div></div></td></tr></table>'):(''))
                        .(($m->field_lead_phone_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Phone Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_phone_number['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                        .(($m->field_lead_cell_phone_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Cell Phone Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_cell_phone_number['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                        .(($m->field_lead_fax_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Fax Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_fax_number['und'][0]['value'].'</div></div></td></tr></table>'):(''));

                $managers .= '</td></tr></table>';
            }
        }
    } 

    if ($finded_stafs==0) {
    $type = 'staff_manager';
    $row = db_query('SELECT nid FROM {node} WHERE  type = :type', array(':type' => $type))->fetchAll();

    foreach($row as $r) {
        $m = node_load($r->nid);
        if ($m->field_is_main['und'][0]['value']==1) {
            $managers .= '<table class="manager stuff">';
            $managers .= '<tr><td class="manager_right">';
            $managers .= '<div  class="field">'
                    .(($m->field_staff_prefix['und'][0]['value']!='')?(' '.$m->field_staff_prefix['und'][0]['value']):(''))
                    .(($m->field_lead_first_name['und'][0]['value']!='')?(' '.$m->field_lead_first_name['und'][0]['value']):(''))
                    .(($m->field_last_name['und'][0]['value']!='')?(' '.$m->field_last_name['und'][0]['value']):(''))
                    .(($m->field_lead_sufix['und'][0]['value']!='')?(' '.$m->field_lead_sufix['und'][0]['value']):(''))
                    .(($m->field_professional_designation['und'][0]['value']!='' || $m->field_lead_organization['und'][0]['value']!='' || $m->field_lead_job_title['und'][0]['value']!='')?(' ('):(''))
                    .(($m->field_professional_designation['und'][0]['value']!='')?(''.$m->field_professional_designation['und'][0]['value']):(''))
                    .(($m->field_lead_organization['und'][0]['value']!='')?((($m->field_professional_designation['und'][0]['value']!='')?(', '):('')).$m->field_lead_organization['und'][0]['value']):(''))
                    .(($m->field_lead_job_title['und'][0]['value']!='')?((($m->field_professional_designation['und'][0]['value']!='' || $m->field_professional_designation['und'][0]['value']!='')?(', '):('')).$m->field_lead_job_title['und'][0]['value']):(''))
                    .(($m->field_professional_designation['und'][0]['value']!='' || $m->field_lead_organization['und'][0]['value']!='' || $m->field_lead_job_title['und'][0]['value']!='')?(')'):(''))
                .'</div>';
            $managers .= (($m->field_lead_website_url['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Web Site: </nobr></label></td><td class="r"><div  class="field"><div class="val">'.$m->field_lead_website_url['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                    .(($m->field_lead_email_address['und'][0]['email']!='')?('<table><tr><td class="l"><label><nobr>Email: </nobr></label></td><td class="r"><div  class="field"><div class="val">'.$m->field_lead_email_address['und'][0]['email'].'</div></div></td></tr></table>'):(''))
                    .(($m->field_lead_phone_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Phone Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_phone_number['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                    .(($m->field_lead_cell_phone_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Cell Phone Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_cell_phone_number['und'][0]['value'].'</div></div></td></tr></table>'):(''))
                    .(($m->field_lead_fax_number['und'][0]['value']!='')?('<table><tr><td class="l"><label><nobr>Fax Number: </nobr></label></td><td class="r"><div class="field"><div class="val">'.$m->field_lead_fax_number['und'][0]['value'].'</div></div></td></tr></table>'):(''));

            $managers .= '</td></tr></table>';
        }
    }
 }
?>


 
 
 
<? 
if (arg(1)=='report') {?>

<div class="print-logo-report"><img src="<?php echo variable_get('eds_report_logo'); ?>"/></div>

<?
    $type = 'staff_manager';
    $row = db_query('SELECT nid FROM {node} WHERE  type = :type', array(':type' => $type))->fetchAll();
    $managers = '';
    foreach($row as $r) {
        $m = node_load($r->nid);
        if ($m->field_is_main['und'][0]['value']==1) {
        $managers .= '<table class="manager on_report">';
        $managers .= '<tr><td>'
                    .(($m->field_staff_prefix['und'][0]['value']!='')?(' '.$m->field_staff_prefix['und'][0]['value']):(''))
                    .(($m->field_lead_first_name['und'][0]['value']!='')?(' '.$m->field_lead_first_name['und'][0]['value']):(''))
                    .(($m->field_last_name['und'][0]['value']!='')?(' '.$m->field_last_name['und'][0]['value']):(''))
                    .(($m->field_lead_sufix['und'][0]['value']!='')?(' '.$m->field_lead_sufix['und'][0]['value']):(''))
                    .(($m->field_professional_designation['und'][0]['value']!='')?(', '.$m->field_professional_designation['und'][0]['value']):(''))
                    .(($m->field_lead_organization['und'][0]['value']!='')?(', '.$m->field_lead_organization['und'][0]['value']):(''))
                    .(($m->field_lead_job_title['und'][0]['value']!='')?(', '.$m->field_lead_job_title['und'][0]['value']):(''))
                .'</td></tr>';
        $managers .= '<tr><td>'.@$m->field_lead_address['und'][0]['street'].' '.@$m->field_lead_address['und'][0]['additional'].' <br /> '.@$m->field_lead_address['und'][0]['city'].', '. @$m->field_lead_address['und'][0]['province_name'].' '. @$m->field_lead_address['und'][0]['postal_code'].'</td></tr>';
                $managers .= '<tr><td><a href ="'.$m->field_lead_website_url['und'][0]['value'].'">'.$m->field_lead_website_url['und'][0]['value'].'</a></td></tr>';
                $managers .= '<tr><td><a href ="mailto:'.$m->field_lead_email_address['und'][0]['email'].'">'.$m->field_lead_email_address['und'][0]['email'].'</a></td></tr>';
                $managers .= '<tr><td>Phone Number: '.$m->field_lead_phone_number['und'][0]['value'].'</td></tr>';
        $managers .= (($m->field_lead_cell_phone_number['und'][0]['value']!='')?('<tr><td>Cell Phone Number: '.$m->field_lead_cell_phone_number['und'][0]['value'].'</td></tr>'):(''));
        $managers .= (($m->field_lead_fax_number['und'][0]['value']!='')?('<tr><td>Fax Number: '.$m->field_lead_fax_number['und'][0]['value'].'</td></tr>'):(''));
        $managers .='</table>';
        }
    }
    
    print ''.$managers.'<div class="next-page"></div>';
}
?>

<? if (arg(1)!='report' && $node && $node->type!='proposal') {?>
<table class="print-header">
    <tr>
        <td class="left">
            <div class="print-logo"><?php print  $print['logo']; ?></div>
        </td>
        <td class="right">
            <? echo $managers;?>
        </td>
    </tr>
</table>
<? } ?>


<div class="print-breadcrumb"><?php print $print['breadcrumb']; ?></div>
<hr class="print-hr" />
<div class="print-content"><?php print $print['content']; ?></div>
</body>
</html>
