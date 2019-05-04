<?php get_header();?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="header-zuozhe">
            <?php the_title();?>
        </div><!-- .header-zuozhe -->
    </div><!-- .header -->
    <div class="content">
        <div class="zhangjie">
            <?php the_content();?>
        </div><!-- .zhangjie -->
        <div class="pn">
            <span class="next">
                <?php next_post_link('%link→','下一章: %title');?>
            </span>
            <span class="previous">
                <?php previous_post_link('←%link','上一章: %title');?>
            </span>
            <div class="clear"></div><!-- .clear -->
        </div><!-- .pn -->
        <div class="pinglun">
            <?php comments_template();?>
        </div><!-- .pinglun -->
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer();?>