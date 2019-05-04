<?php get_header();?>
    <div class="header-zuozhe">
            南派三叔经典巨作，最好看的盗墓小说！
        </div><!-- .header-zuozhe -->
    </div><!-- .header -->
    <div class="content">
        <div class="book">
            <h2>‘<?php echo get_query_var('s');?>’的搜索结果</h2>
            <ul>
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="clear"></div><!-- .clear -->
        </div><!-- .book -->
    </div><!-- .content -->
<?php get_footer();?>