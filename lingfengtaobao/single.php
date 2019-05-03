<?php get_header();?>
<div class="container">
    <div class="bread">
        您现在的位置:
        <?php
            lingfeng_breadcrumbs();
        ?>
    </div><!-- .bread -->
    <div class="single">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="post">
            <div class="jianjie">
                <div class="dasuo">
                    <?php if ( has_post_thumbnail() ) : ?>
                         <?php the_post_thumbnail( 'dthumbnail' ); ?>
                    <?php endif; ?>
                </div><!-- .dasuo -->
                <div class="info">
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <div class="you">
                        优惠价:<strong><?php echo get_post_meta(get_the_ID(),'youhuijia',true);?></strong>元<br>
                        服  务:免运费 货到付款 品牌专卖<br>
                        商  家:<a href="<?php echo get_post_meta(get_the_ID(),'tuiguanglianjie',true);?>" target="_blank"><?php echo get_post_meta(get_the_ID(),'shangjia',true);?></a><br>
                        信  誉:<img src="<?php echo get_template_directory_uri();?>/images/rz.gif" alt=""><br>
                    </div><!-- .you -->
                    <div class="gomai">
                        <a href="<?php echo get_post_meta(get_the_ID(),'tuiguanglianjie',true);?>" class="liji" target="_blank">
                            <img src="<?php echo get_template_directory_uri();?>/images/btn_buy.gif" alt="立即购买">
                        </a>
                        <a href="<?php echo get_post_meta(get_the_ID(),'tuiguanglianjie',true);?>" class="kankan" target="_blank">
                            <img src="<?php echo get_template_directory_uri();?>/images/btn_mall.gif" alt="去商城看看">
                        </a>
                    </div><!-- .gomai -->
                </div><!-- .info -->
                <div class="clear"></div><!-- .clear -->
            </div><!-- .jianjie -->
            <div class="xiangxi">
                <div class="xxtitle">
                    <h2><span>详细信息</span><?php the_title();?></h2>
                </div><!-- .xxtitle -->
                <div class="xxcontent">
                    <?php the_content();?>
                </div><!-- .xxcontent -->
            </div><!-- .xiangxi -->
        </div><!-- .post -->
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="tonglei">
            <div class="tltitle">
                <h2><span>同类产品</span></h2>
            </div><!-- .tltitle -->
            <div class="tlist">
                <?php
                    $term_ids = wp_get_object_terms(get_query_var('p'),'category',array(
                            order=>'ASC',
                            orderby=>'term_id',
                            fields=>'ids'
                        ));
                    $my_query = new WP_Query(array(
                            'category__in'=>$term_ids,
                            'posts_per_page'=>10,
                            'post__not_in'=>array(get_query_var('p'))
                        ));
                ?>
                <ul>
                    <?php if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <li>
                            <div class="pic">
                                <?php if ( has_post_thumbnail() ) : ?>
                                     <?php the_post_thumbnail( 'tonglei' ); ?>
                                <?php endif; ?>
                            </div><!-- .pic -->
                            <h3>
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </h3>
                            <div class="jiage">
                                <span><?php echo get_post_meta(get_the_ID(),'youhuijia',true);?></span>元
                            </div><!-- .jiage -->
                        </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <div class="clear"></div><!-- .clear -->
            </div><!-- .tlist -->
        </div><!-- .tonglei -->
    </div><!-- .single -->
    <div class="sidebar">
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
                <li>
                    <div class="spic">
                       <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'cebian' ); ?>
                        <?php endif; ?>
                    </div><!-- .spic -->
                    <div class="sjiage">
                        优惠价<span><?php echo get_post_meta(get_the_ID(),'youhuijia',true);?></span>元
                    </div><!-- .sjiage -->
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div><!-- .sidebar -->
    <div class="clear"></div><!-- .clear -->
</div><!-- .container -->
<?php get_footer();?>