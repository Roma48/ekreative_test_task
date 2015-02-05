<?php
global $base_url;
?>
<?php if ($page['custom_report']): ?>
<div id="custom-report">
    <?php print render($page['custom_report']); ?>
</div>
<?php endif; ?>

<div id="site-container" class="search">
    <div id="header-container">
        <div id="header" class="wrap-inner">

            <?php if ($logo): ?>
            <div id="logo">
                <a href="<?php echo $base_url;?>"><img src="<?php echo $logo;?>" alt="<?php echo $site_name;?>"title="<?php echo $site_name;?>"/></a>
            </div>
            <?php endif; ?>

            <?php if ($page['header']) : ?>
            <div id="header-region">
                <?php print render($page['header']); ?>
            </div>
            <?php endif; ?>

            <?php if ($page['navigation']) : ?>
            <div id="navigation">
                <?php print render($page['navigation']); ?>
            </div>
            <?php endif; ?>


            <span class="clearer"></span>
        </div>
    </div>

    <div id="body-container">
        <div id="center" class="wrap-inner">

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

                <!--                    --><?php //print render($page['help']); ?>
                <?php if ($action_links): ?>
                <ul class="action-links">
                    <?php print render($action_links); ?>
                </ul>
                <?php endif; ?>

                <?php print render($page['content']); ?>
            </div>

            <?php if ($page['right_column']): ?>
            <div id="sidebar-right" class="sidebar">
                <?php print render($page['right_column']); ?>
            </div>
            <?php endif; ?>
            <span class="clearer">&nbsp;</span>

        </div>
    </div>


    <div id="footer-container">
        <div id="footer" class="wrap-inner">
            <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
            <span class="clearer"></span>
            <?php endif; ?>
        </div>
        <span class="clearer"></span>
    </div>
</div>
<?php if (isset($closure)) print $closure; ?>
