<?php
  function load_posts(){
    
        $post_contents = "";

        $cat = $_POST['category'];
        $post_offset = $_POST['post_offset'];
        $count = $_POST['count'];

        $args = array('cat' => $cat, 'offset' => $post_offset, 'posts_per_page' => $count);

        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) : 
          while($category_posts->have_posts()) : 
            $category_posts->the_post(); ?>

            <div class="post-item">
            <?php the_title(); ?>
            </div>

          <?php endwhile;
        endif;         

       die($post_contents);
    } 

    add_action( 'wp_ajax_nopriv_load_posts', 'load_posts' );
    add_action( 'wp_ajax_load_posts', 'load_posts' );
  ?>