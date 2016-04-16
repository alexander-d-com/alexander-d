<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <section class="article">
    <div class="article-title">
        <?php the_title(); ?>
    </div><!--end post header-->
    <div class="article-content">
        <?php the_content(); ?>
    </div><!--end entry-->
  </section><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="pagination">

    <div class="alignleft"><?php next_posts_link( '
    <button type="button" class="btn-pagination">
      <span class="stretch"><
      </span>
    </button>' ); ?></div>
    <div class="alignright"><?php previous_posts_link( '
    <button type="button" class="btn-pagination">
      <span class="stretch">>
      </span>
    </button>
    ' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
