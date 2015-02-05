<?php
global $base_url;
?>
<?php if ($page['custom_report']): ?>
<div id="custom-report">
    <?php print render($page['custom_report']); ?>
</div>
<?php endif; ?>
<div id="site-container">
    <div id="header-container">
        <div id="header" class='clearfix'>
            <?php if ($logo): ?>
            <div id="logo">
                <a href="<?php echo $base_url;?>"><img src="<?php echo $logo;?>" alt="<?php echo $site_name;?>" title="<?php echo $site_name;?>"/></a>
            </div>
            <?php endif; ?>

            <?php if($page['header']) : ?>
            <div id="header-region">
                <?php print render($page['header']); ?>
            </div>
            <?php endif; ?>

			<?php if($page['navigation']) : ?>
            <div id="navigation">
                <?php print render($page['navigation']); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
	<div id="body-container">
	    <div id="body_wrap1">
	        <div id="body_wrap2" class='clearfix'>
	        	<div id="center">
	                <?php if ($page['banner']) : ?>
	                    <div id="banner">
	                        <?php print render($page['banner']); ?>
	                    </div>
	                <?php endif; ?>          
	                <div id="content">
	                    <?php print render($title_prefix); ?>
	                    <?php if ($title): ?>
	                    <h1 class="title" id="page-title">
	                        <?php print $title; ?>
	                    </h1>
	                    <?php endif; ?>
	                    <?php print render($title_suffix); ?>
	                    <?php if ($tabs): ?>
	                    <div class="tabs">
	                        <?php print render($tabs); ?>
	                    </div>
	                    <?php endif; ?>

	                    <?php if ($action_links): ?>
	                    <ul class="action-links">
	                        <?php print render($action_links); ?>
	                    </ul>
	                    <?php endif; ?>
	                    <?php print render($page['content']); ?>
						
					    <?php if ($page['front_top_features']) : ?>
					        <div id="front-top-features">
					            <?php print render($page['front_top_features']); ?>
					        </div>
					    <?php endif; ?>
	                </div>
	            </div>
	            <?php if ($page['sidebar_second']): ?>
	                <div id="sidebar-second" class="sidebar">
	                    <?php print render($page['sidebar_second']); ?>
	                </div>
	            <?php endif; ?>
	        </div>
	    </div>
	</div>
		
    <div id="footer-container">
        <div id="footer" class='clearfix'>
            <?php if ($page['footer']): ?>
                <?php print render($page['footer']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if (isset($closure)) print $closure; ?>