<?php get_header();?>
        <div id="content" class="archive">
            <div class="breadcrumb">
                <span class="location">您现在的位置：</span>
                <?php lingfeng_breadcrumbs();?>
            </div><!--.breadcrumb面包屑导航-->
            <ul class="postlist">
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <div class="meta">
                        <span><?php the_time('Y-m-d H:i:s');?></span>
                        <span>作者：<?php the_author_posts_link();?> </span>
                        <span>分类：<?php the_category(',');?></span>
                        <span>浏览：<?php echo getPostViews( $post->ID );?></span>
                        <span>评论：<?php comments_popup_link('暂无评论','1条','%条');?></span>
                    </div><!--.meta-->
                    <div class="excerpt">
                        <?php echo lingfeng_strimwidth(get_the_content(),256);?>
                    </div><!--.excerpt-->
                </li>
            <?php endwhile; ?>
            <?php else:?>
                <li>
                    <p>没有搜索到任何内容，请更换关键词重新搜索</p>

                </li>
            <?php endif; ?>
            </ul><!--.postlist-->
            <?php lingfeng_pagenavi();?>
        </div><!--#content-->
        <?php get_sidebar();?>
        <?php get_footer();?>