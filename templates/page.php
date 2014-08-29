<?php if ( have_posts() ) :
  while ( have_posts() ) : the_post(); ?>

  <div class="wrapper post-content">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>

  <?php endwhile;  ?>
<?php endif; ?>

<script type="text/javascript">
  post_offset = increment = <?php echo get_option( 'posts_per_page' );?>;
</script>