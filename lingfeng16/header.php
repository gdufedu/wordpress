<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('-',true,'right');?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
<?php wp_head();?>
</head>
<body>
<div class="header">
    <div class="header-top">
        <div class="header-top-content">
            <a class="rssfeed" href="<?php bloginfo('rss2_url');?>" target="_blank">RSS订阅</a>
            <span class="sitedesc"><?php bloginfo('description');?></span>
        </div><!-- .header-top-content -->
    </div><!-- .header-top -->
    <div class="header-mid">
        <h1 class="site-header">
            <a href="<?php bloginfo('url');?>" rel="home" title="凌风科技"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" /></a>
        </h1>
        <?php get_search_form();?>
    </div><!-- .header-mid -->
    <div class="header-nav">
    <?php
        wp_nav_menu( array(
          'theme_location'              => 'zhudaohang',
          'container'                           => false,
          'depth'                               => -1
        ) );
    ?>
    </div><!-- .header-nav -->
</div><!-- .header -->
<div class="content">
    <div class="bread">
        <div class="location">你现在的位置：</div>
        <div class="breadcrumbs"><?php lingfeng_breadcrumbs();?></div>
        <div class="clear"></div>
    </div><!-- .bread -->
