<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title('-',true,'right');?></title>
  <?php wp_head();?>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <div class="fenxiang">
                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                <div class="clear"></div><!-- .clear -->
            </div><!-- .fenxiang -->
            <h1 class="header-top">
                <a href="<?php bloginfo('url');?>">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
                </a>
            </h1><!-- .header-top -->
            <div class="header-nav">
                <?php
                    wp_nav_menu( array(
                      'theme_location'  => 'daohangshang',                                  //[保留]
                      'menu'                    => '',                                  //[可删]
                      'container'               => false,                           //[可删]
                      'container_class' => '',                                  //[可删]
                      'container_id'        => '',                                  //[可删]
                      'menu_class'      => 'menu',                      //[可删]
                      'menu_id'             => '',                                  //[可删]
                      'echo'                    => true,                            //[可删]
                      'fallback_cb'         => 'wp_page_menu',      //[可删]
                      'before'                  => '',                                  //[可删]
                      'after'                       => '',                                  //[可删]
                      'link_before'         => '',                                  //[可删]
                      'link_after'              => '',                                  //[可删]
                      'items_wrap'          => '<ul id="%1$s" class="%2$s">%3$s</ul>',  //[可删]
                      'depth'                   => -1,                               //[可删]
                      'walker'                  => ''                                   //[可删]
                    ) );
                ?>
            </div><!-- .header-nav -->