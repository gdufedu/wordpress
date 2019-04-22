    <div class="sidebar">
        <ul id="primary-sidebar" class="primary-sidebar widget-area">
            <?php if ( is_active_sidebar('sidebar-1' ) ) : ?>
                 <?php dynamic_sidebar('sidebar-1' ); ?>
            <?php else: ?>
                <li>请到后台添加小工具</li>
            <?php endif; ?>
        </ul>
    </div><!-- .sidebar -->