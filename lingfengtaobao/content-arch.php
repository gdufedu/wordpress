<div class="content">
    <div class="bread">
        您现在的位置:
        <?php
            lingfeng_breadcrumbs();
        ?>
    </div><!-- .bread -->
    <div class="product">
        <ul>
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
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
            <?php else: ?>
                <p>本分类下面暂无信息</p>
            <?php endif; ?>
        </ul>
        <div class="clear"></div><!-- .clear -->
    </div><!-- .product -->
</div><!-- .content -->