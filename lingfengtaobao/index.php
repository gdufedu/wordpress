<?php get_header();?>
    <div class="container">
        <div class="hang1">
            <div class="myslide">
                <ul class="bxslider">
                  <li><img src="<?php echo get_template_directory_uri();?>/images/banner01.jpg" /></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/banner02.jpg" /></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/banner03.jpg" /></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/banner04.jpg" /></li>
                </ul>
            </div><!-- .myslide -->
            <div class="xinxi01">
                <?php $my_term = get_term_by('name','热销产品','post_tag');
                      $my_term_id = $my_term->term_id;
                      $my_term_name = $my_term->name;
                      $my_term_link = get_term_link($my_term_id,'post_tag');
                ?>
                <h3><a href="<?php echo $my_term_link;?>"><?php echo $my_term_name;?></a></h3>
                <?php $my_query = new WP_Query(array(
                        'tag_id'=>$my_term_id,
                        'posts_per_page'=>10
                    ));
                ?>
                <ul>
                    <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div><!-- .xinxi01 -->
            <div class="clear"></div><!-- .clear -->
        </div><!-- .hang1 -->
        <div class="xinxi02">
            <div class="cat-header">
                <?php $my_term = get_term_by('name','数码','category');
                      $my_term_id = $my_term->term_id;
                      $my_term_name = $my_term->name;
                      $my_term_link = get_term_link($my_term_id,'category');
                      $pingban_link = get_term_link(3,'category');
                      $bijiben_link = get_term_link(4,'category');
                ?>
                <img src="<?php echo get_template_directory_uri();?>/images/f1.png" alt="">
                <h3><a href="<?php echo $my_term_link;?>"><?php echo $my_term_name;?></a></h3>
                <a href="<?php echo $pingban_link;?>">平板</a>
                <a href="<?php echo $bijiben_link;?>">笔记本</a>
                <div class="clear"></div><!-- .clear -->
            </div><!-- .cat-header -->
            <?php $my_query = new WP_Query(array(
                        'cat'=>$my_term_id,
                        'posts_per_page'=>10
                    ));
            ?>
            <ul>
                <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <li>
                        <div class="cat-suolue">
                            <a href="<?php the_permalink();?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                 <?php the_post_thumbnail( 'thumbnail' ); ?>
                                <?php endif; ?>
                            </a>
                        </div><!-- .cat-suolue -->
                        <h4>
                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                        </h4>
                        <div class="goumai">
                            <div class="gm-left">
                                优惠价<strong>
                                    <?php echo get_post_meta(get_the_ID(),'youhuijia',true);?>
                                </strong>元<br>
                                <a href="<?php echo get_post_meta(get_the_ID(),'tuiguanglianjie',true);?>"><?php echo get_post_meta(get_the_ID(),'shangjia',true);?></a>有售
                            </div><!-- .gm-left -->
                            <div class="gm-right">
                                <a href="<?php echo get_post_meta(get_the_ID(),'tuiguanglianjie',true);?>" target="_blank">购买</a>
                            </div><!-- .gm-right -->
                        </div><!-- .goumai -->
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="clear"></div>
        </div><!-- .xinxi02 -->
    </div><!-- .container -->
<?php get_footer();?>