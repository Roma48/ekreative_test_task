<div id="node-<?php print $node->nid; ?>" class="node <?php print $node->type; ?>">
<?php if ($page == 0): ?>
    <table class="summary">
        <tr>
            <td class="company_name"><?php print t($title) ?></td>
            <td class="category">
				<?php 
					$field = field_view_field('node', $node, 'field_eds_directory_category', array('label' => 'hidden')); 
					print render($field);
				?>
			</td>
            <td class="website">
				<?php 
					$field = field_view_field('node', $node, 'field_eds_directory_website', array('label' => 'hidden')); 
					print render($field);
				?>
			</td>
            <td class="expand">+</td>
        </tr>
    </table>
<?php endif; ?>
	<div class="content">
	    <?php if ($page == 0): ?>
	        <h2><?php print $title ?></h2>
	    <?php endif; ?>
        <?php if (isset($node->field_eds_directory_location)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_location', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_type)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_type', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_category)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_category', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_employees)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_employees', array('label' => 'inline')); 
				print render($field); 
			?>
	    <?php endif; ?>
        <?php if (isset($node->field_eds_directory_distribution)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_distribution', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_address)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_address', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_city)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_city', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_state)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_state', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_zip)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_zip', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_first_name)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_first_name', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_last_name)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_last_name', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_title)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_title', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_hr)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_hr', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_purchasing)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_purchasing', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_phone)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_phone', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_fax)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_fax', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_email)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_email', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
        <?php if (isset($node->field_eds_directory_website)): ?>
            <?php 
				$field = field_view_field('node', $node, 'field_eds_directory_website', array('label' => 'inline')); 
				print render($field); 
			?>
        <?php endif; ?>
	</div>
</div>