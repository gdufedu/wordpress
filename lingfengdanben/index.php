<?php get_header();?>
            <div class="header-zuozhe">
                南派三叔经典巨作，最好看的盗墓小说！
            </div><!-- .header-zuozhe -->
        </div><!-- .header -->
        <div class="content">
            <div class="book">
                <?php
                    $my_term = get_term_by('name','盗墓笔记1','category');
                    $my_term_id = $my_term->term_id;
                    $my_query = new WP_Query(array(
                        'cat'=> $my_term_id,
                        'posts_per_page'=>-1,
                        'order'=>'ASC'
                    ));
                ?>
                <h2>盗墓笔记1</h2>
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
            <div class="book">
                <?php
                    $my_term = get_term_by('name','盗墓笔记2','category');
                    $my_term_id = $my_term->term_id;
                    $my_query = new WP_Query(array(
                        'cat'=> $my_term_id,
                        'posts_per_page'=>-1,
                        'order'=>'ASC'
                    ));
                ?>
                <h2>盗墓笔记2</h2>
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
        </div><!-- .content -->
<?php get_footer();?>