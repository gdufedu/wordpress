<?php get_header();?>
<?php if(is_page('盗墓笔记1')) {?>
    <div class="header-zuozhe">
        盗墓笔记1
    </div><!-- .header-zuozhe -->
</div><!-- .header -->
<div class="content">
    <div class="book">
        <h2>盗墓笔记1</h2>
            <?php
                $my_term = get_term_by('name','盗墓笔记1','category');
                $my_term_id = $my_term->term_id;
                $my_query = new WP_Query(array(
                    'cat'=> $my_term_id,
                    'posts_per_page'=>-1,
                    'order'=>'ASC'
                ));
            ?>
            <ul>
                <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="clear"></div><!-- .clear -->
        </div><!-- .book -->
<?php } elseif(is_page('盗墓笔记2')) {?>
    <div class="header-zuozhe">
        盗墓笔记2
    </div><!-- .header-zuozhe -->
</div><!-- .header -->
<div class="content">
    <div class="book">
        <h2>盗墓笔记2</h2>
            <?php
                $my_term = get_term_by('name','盗墓笔记2','category');
                $my_term_id = $my_term->term_id;
                $my_query = new WP_Query(array(
                    'cat'=> $my_term_id,
                    'posts_per_page'=>-1,
                    'order'=>'ASC'
                ));
            ?>
            <ul>
                <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink();?>" target="_blank"><?php the_title();?></a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="clear"></div><!-- .clear -->
        </div><!-- .book -->
<?php }?>
        <div class="pinglun">
            <?php comments_template();?>
        </div><!-- .pinglun -->
</div><!-- .content -->
<?php get_footer();?>