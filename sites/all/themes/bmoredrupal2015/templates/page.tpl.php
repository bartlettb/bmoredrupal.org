<?php ?>

<div id="page-wrapper">
    <div id="header">
        <div class="container section header clearfix">
            <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
            <?php endif; ?>
            <?php if ($site_name || $site_slogan): ?>
            <div id="name-and-slogan">
                <?php if ($site_name): ?>
                <?php if ($title): ?>
                <div id="site-name"><strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong></div>
                <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
                <?php endif; ?>
                <?php endif; ?>

                <?php if ($site_slogan): ?>
                <div id="site-slogan">
                    <?php print $site_slogan; ?>
                </div>
                <?php endif; ?>
            </div>
            <!-- /#name-and-slogan -->
            <?php endif; ?>
            <?php print render($page[ 'header']); ?>
        </div>
        <!-- /.section .header -->
    </div>
    <!-- /#header -->
    <div id="main-wrapper"> 
        <div id="content-wrap" class="container content-wrap clearfix">
            <?php if ($main_menu || $secondary_menu): ?>
            <div id="navigation">
                <div class="container navigation section">
                    <?php print theme( 'links__system_main_menu', array( 'links'=> $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'clearfix')))); ?>
                </div>
                <!-- /.section .navigation -->
            </div>
            <!-- /#navigation -->
            <?php endif; ?>
            <?php print $messages; ?>
            <div id="main" class="main clearfix"> 
                <div id="content" class="column clear-fix"> 
                    <div class="page-content content-column section">
                        <div class="gutter">
                            <?php if ($breadcrumb): ?>
                            <div id="breadcrumb" class="container">
                                <?php print $breadcrumb; ?>
                            </div>
                            <?php endif; ?>
                            <a id="main-content"></a>
                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?>
                            <h1 class="title" id="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>
                            <?php if ($tabs): ?>
                            <div class="tabs">
                                <?php print render($tabs); ?>
                            </div>
                            <?php endif; ?>
                            <?php print render($page[ 'help']); ?>
                            <?php if ($action_links): ?>
                            <ul class="action-links">
                                <?php print render($action_links); ?>
                            </ul>
                            <?php endif; ?>
                            <?php print render($page[ 'content']); ?> 
                        </div>
                    </div>
                    <!-- /.section .content .gutter -->
                </div>
                <!-- /#content --> 
            </div>
            <!-- /#main --> 
        </div>
		<div id="sponsors">
			<div class="sponsors-container section">
				<?php print render($page[ 'sponsors']); ?>
			</div> 
		</div> 
        <!-- /#main-wrapper --> 
    </div>
    <!-- /#content-main --> 
    <div id="footer">
        <div class="container section footer">
            <?php print render($page[ 'footer']); ?>
        </div>
        <!-- /.section -->
    </div>
	<div id="footer-copyrights">
         <p>Powered by Drupal. <span>Built by <a href="http://simpleinformation.com/" target="_blank">Simple Information.</a><span></p>
    </div>
    <!-- /#footer --> 
</div>
<!-- /#page-wrapper -->