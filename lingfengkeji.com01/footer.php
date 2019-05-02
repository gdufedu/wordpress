      <div class="clear"></div>
    </div><!--#container-->
    <div id="footer">
        <div class="footpage">
            <?php
                /*
                wp_nav_menu( $args )
                @参数 array $args, 传递此参数时用array(成员参数名=>成员参数值)
                特别说明：
                调用导航菜单时，可以直接复制以下代码。然后根据需要删除成员参数
                */
                wp_nav_menu( array(
                  'theme_location'              => 'dibudaohang',
                  'container'                           => false,
                  'menu_class'                  => 'menu',
                  'echo'                                => true,
                  'link_before'                     => '<span class="png">',
                  'link_after'                          => '</span>',
                  'depth'                               => -1
                ) );
            ?>
        </div>
        <p>Copyright © 2014 </p>
        <?php wp_footer();?>
    </div><!--#footer-->
</div><!--#wrap-->
</body>
</html>