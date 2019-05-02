<?php get_header();?>
		<div id="content">
			<div class="slide">
				<ul class="bxslider">
			      <li><img src="<?php echo get_template_directory_uri();?>/images/banner01.jpg"  title="图片1"/></li>
			      <li><img src="<?php echo get_template_directory_uri();?>/images/banner02.jpg" title="图片2"></li>
			      <li><img src="<?php  echo get_template_directory_uri();?>/images/banner03.jpg"  title="图片3"/></li>
			      <li><img src="<?php  echo get_template_directory_uri();?>/images/banner04.jpg"  title="图片4"/></li>
			    </ul>
			</div><!--.module-->
			<div class="module">
				<?php
					$redian = get_term_by('name','热点','post_tag');
					$redian_link = get_term_link($redian->term_id,'post_tag');
					$redian_name = $redian->name;
					$redian_bieming = $redian->slug;
				?>
				<h2>
					<a href="<?php echo $redian_link;?>"><?php echo $redian_name;?></a>
					<span><a href="<?php echo $redian_link;?>">更多&gt;&gt;</a></span>
				</h2>
				<ul>
					<?php $my_query = new WP_Query(array(
						'tag'=>$redian_bieming,
						'posts_per_page'=>10
					));?>
					<?php if($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div><!--.module-->
			<div class="homebanner"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/banner01.gif"></a></div><!--.homebanner-->
			<div class="module  left">
				<?php
					$my_term = get_term_by('name','体育新闻','category');
					$my_term_id = $my_term->term_id;
					$my_term_link = get_term_link($my_term_id,'category');
					$my_term_name = $my_term->name;
					$my_term_bieming = $my_term->slug;
				?>
				<h2>
					<a href="<?php echo $my_term_link;?>"><?php echo $my_term_name;?></a>
					<span><a href="<?php echo $my_term_link;?>">更多&gt;&gt;</a></span>
				</h2>
				<ul>
					<?php $my_query = new WP_Query(array(
						'cat'=>$my_term_id,
						'posts_per_page'=>10
					));?>
					<?php if($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div><!--.module-->
			<div class="module">
				<?php
					$my_term = get_term_by('name','国内','post_tag');
					$my_term_id = $my_term->term_id;
					$my_term_link = get_term_link($my_term_id,'post_tag');
					$my_term_name = $my_term->name;
					$my_term_bieming = $my_term->slug;
				?>
				<h2>
					<a href="<?php echo $my_term_link;?>"><?php echo $my_term_name;?></a>
					<span><a href="<?php echo $my_term_link;?>">更多&gt;&gt;</a></span>
				</h2>
				<ul>
					<?php $my_query = new WP_Query(array(
						'tag'=>$my_term_bieming,
						'posts_per_page'=>10
					));?>
					<?php if($my_query->have_posts()):while($my_query->have_posts()):$my_query->the_post();?>
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
					<?php endwhile;?>
					<?php endif;?>
				</ul>
			</div><!--.module-->
			<div class="clear"></div>
	</div><!--#content-->
<?php get_sidebar();?>
<?php get_footer();?>