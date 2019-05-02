<div id="sidebar">
        <ul>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                 <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php else: ?>
                //提示用户
                //或者，显示一些默认的边栏效果
            <?php endif; ?>
        </ul>
</div><!--#sidebar-->