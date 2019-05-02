<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title('-',true,'right');?></title>
<?php wp_head();?>
</head>
<body>
<div id="wrap">
    <div id="header">
        <div id="top"><?php bloginfo('description');?></div><!--#top-->
        <div id="ban">
            <a href="<?php bloginfo('url');?>">
                <img src="<?php echo get_template_directory_uri();?>/images/logo.png">
            </a>
        </div><!--#ban-->
        <div id="nav">
            <div id="menu">
                <?php
                    /*
                    wp_nav_menu( $args )
                    @参数 array $args, 传递此参数时用array(成员参数名=>成员参数值)
                    特别说明：
                    调用导航菜单时，可以直接复制以下代码。然后根据需要删除成员参数
                    */
                    wp_nav_menu( array(
                      'theme_location'              => 'zhudaohang',
                      'container'                           => 'div',                           //[可删]
                      'container_class'             => 'mainnav',
                      'menu_class'                  => 'menu',
                      'echo'                                => true,
                      'link_before'                     => '<span class="png">',
                      'link_after'                          => '</span>',
                      'depth'                               => -1
                    ) );
                ?>
            </div><!--#menu-->
            <div id="sousuo">
                <div class="search">
                    <?php get_search_form();?>
                </div><!--.search-->
            </div><!--#sousuo-->
        </div><!--#nav-->
    </div><!--#header-->
    <div id="container">