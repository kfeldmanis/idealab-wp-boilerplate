<?php
  $current_cat = get_query_var('cat');
  $count = 3;
?>

<div class="wrapper post-content" >

  <h1><?php single_cat_title(); ?></h1>

  <div class="posts-container" data-count="<?php echo $count; ?>" data-category="<?php echo $current_cat; ?>" data-ajaxurl="<?php echo home_url(); ?>/wp-admin/admin-ajax.php">

    <?php
       $args = array('cat' => $current_cat, 'posts_per_page' => $count);
       $category_posts = new WP_Query($args);
       if($category_posts->have_posts()) : 
          while($category_posts->have_posts()) : 
             $category_posts->the_post();
    ?>

    <div class="post-item">
      <?php the_title(); ?>
<!--       <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read more</a> -->
    </div>
          
    <?php endwhile; else: ?>

      Oops, there are no posts.

    <?php endif;?>

  </div>

  <a class="load-more-posts" href="">Load more posts</a>

</div>