<?php get_header();?>
    <div class="article">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="entry">
            <h2 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
            <div class="entry-meta">
                <span>
                    <em class="kan"><?php echo getPostViews( get_the_ID() );?></em>
                    <em class="ping">
                        <?php comments_popup_link('0','1','%');?>
                    </em>
                </span>
                <?php the_category(',');?> | <?php the_time('Y年m月d日 H:i:s');?>
                <?php edit_post_link('编辑本文');?>
            </div><!-- .entry-meta -->
            <div class="entry-cnt">
                <div class="entry-thumbnail">
                    <a href="" >
                        <?php if ( has_post_thumbnail() ) : ?>
                             <?php the_post_thumbnail( 'thumbnail' ); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri();?>/images/suolue.jpg" alt="">
                        <?php endif; ?>
                    </a>
                </div><!-- entry-thumbnail -->
                <div class="entry-arch">
                    <?php echo lingfeng_strimwidth(get_the_content(),190);?>
                </div><!-- .entry-arch -->
            </div><!-- .entry-cnt -->
            <div class="entry-tag">
                <a class="more" href="<?php echo get_permalink();?>" >查看全文»</a>
                标签：
                <?php if(has_tag()) : ?>
                    <?php the_tags('',',','');?>
                <?php else: ?>
                    暂无
                <?php endif;?>
                <div class="clear"></div>
            </div><!-- .entry-tag -->
        </div><!-- .entry -->
    <?php endwhile; ?>
        <?php lingfeng_pagenavi();?>
    <?php endif; ?>
    </div><!-- .article -->
        <?php get_sidebar();?>
<?php get_footer();?>