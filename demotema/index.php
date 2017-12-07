<?php get_header(); ?>


  <div class="row justify-content-center">

    <div class="col-sm-8 blog-main">

      <div class="blog-post">

    <?php if ( have_posts() ) : ?>
    	<?php while ( have_posts() ) : the_post(); ?>
    	<!-- do stuff ... -->
        <h2 class="blog-post-title"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <p class="blog-post-meta">By <?php the_author(); ?></p>
        <p><?php the_excerpt();?></p>
        <hr class="style14">

    	<?php endwhile; ?>
    <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
