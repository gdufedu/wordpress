        <div class="search">
            <?php get_search_form();?>
        </div><!-- .search -->
        <div class="footer">
            <div class="footer-nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'daohangxia',                                  //[保留]
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
            </div><!-- .footer-nav -->
            <div class="footer-banquan">
                © 2019 南派三叔 盗墓笔记
            </div><!-- .footer-banquan -->
        </div><!-- .footer -->
    </div><!-- .wrap -->
<?php wp_footer();?>
</body>
</html>