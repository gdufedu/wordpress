<?php get_header();?>
        <div id="content" class="archive post">
            <div class="breadcrumb">
            <span class="location">您现在的位置:</span>
                <?php lingfeng_breadcrumbs();?>
            </div><!--.breadcrumb面包屑导航-->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php setPostViews($post->ID);?>
            <div class="single">
                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <div class="meta singlemeta">
                    <span><?php the_time('Y-m-d H:i:s');?></span>
                    <span>作者：<?php the_author_posts_link();?> </span>
                    <span>浏览：<?php echo getPostViews( $post->ID );?></span>
                    <span>评论：<?php comments_popup_link('暂无评论','1条','%条');?></span>
                </div><!--.meta-->
                <div class="entry">
                    <?php the_content();?>
                </div><!--.entry-->
            <?php comments_template();?>
            </div><!--.single-->
            <?php endwhile; ?>
            <?php endif; ?>
        </div><!--#content-->
<?php get_sidebar();?>
<?php get_footer();?>