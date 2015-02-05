<?php

$class = '';
    if ($sticky) { $class .= ' sticky'; }
    if (!$status) { $class .= ' node-unpublished'; }
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> <?php print $class; ?> clearfix"<?php print $attributes; ?>>
	<?php if (isset($node->add_report)): ?>
	<?php print $node->add_report; ?>
	<?php endif; ?>
    	
	<?php print render($title_prefix); ?>
	<?php if (!$page): ?>
	<h2<?php print $title_attributes; ?>>
	    <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
	</h2>
	<?php endif; ?>
	<?php if ($view_mode != 'node_embed') print render($title_suffix); ?>
    	
	<?php if ($display_submitted): ?>
	<div class="meta submitted">
		<?php print $user_picture; ?>
		<?php print $submitted; ?>
	</div>
	<?php endif; ?>

	<div class="content" <?php print $content_attributes; ?>>
	  	<?php
			hide($content['comments']);
			hide($content['links']);
			print render($content);
		?>
		<?php
		if (isset($node->book_children)): ?>
			<?php print $node->book_children['#value']; ?>
		<?php endif; ?>
	</div>

    <?php
	    if ($view_mode != 'node_embed') {
		    // Remove the "Add new comment" link on the teaser page or if the comment
		    // form is being displayed on the same page.
		    if ($teaser || !empty($content['comments']['comment_form'])) {
		        unset($content['links']['comment']['#links']['comment-add']);
		    }
		    // Only display the wrapper div if there are links.
        
		    $links = render($content['links']);
		    if ($links): ?>
		        <div class="links">
		            <?php print $links; ?>
		        </div>
		    <?php endif; ?>
		    <?php print render($content['comments']);
	    }
    ?>
</div>
