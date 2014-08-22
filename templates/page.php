<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post(); ?>

  <div class="post-content">
    <?php the_content(); ?>
  </div>

  <?php endwhile;  ?>
<?php endif; ?>