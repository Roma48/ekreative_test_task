<?php
drupal_add_css(drupal_get_path('module', 'eds_properties') . '/support/css/property.css', 'file');
$path_colorbox_css = drupal_get_path('module', 'eds_properties') . '/support/colorbox-master/example2/colorbox.css';
drupal_add_css($path_colorbox_css, 'file');
$path_colorbox_js = drupal_get_path('module', 'eds_properties') . '/support/colorbox-master/jquery.colorbox-min.js';
drupal_add_js($path_colorbox_js, 'file');
if (!$teaser) {
    drupal_add_js(drupal_get_path('module', 'eds_properties') . '/js/property.js', 'file');
    drupal_add_js(drupal_get_path('module', 'eds_properties') . '/js/jquery.cycle.lite.min.js', 'file');
}
$output = theme('eds_property', array('node' => $node, 'teaser' => $teaser));
$class = '';
    if ($sticky) { $class .= ' sticky'; }
    if (!$status) { $class .= ' node-unpublished'; }
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print $class; ?> clearfix"<?php print $attributes; ?>>
	<div class="content" <?php print $content_attributes; ?>>
	<?php
		echo $output;
	?>

	</div>
    <?php
    if (isset($content['links']['comment'])) {
        unset($content['links']['comment']);
    }
    $links = render($content['links']);
    if ($links): ?>
        <div class="links">
            <?php print $links; ?>
        </div>
	<?php endif; ?>
</div>