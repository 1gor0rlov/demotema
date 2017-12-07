<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main role="main" class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">

        <div class="blog-post">
           <h2 class="blog-post-title"><?php the_title(); ?></h2>
           <p><?php the_content(); ?></p>
           <p class="blog-post-meta" align="right">By <?php the_author(); ?></p>

              <?php endwhile; ?>
              <?php endif; ?>

        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
