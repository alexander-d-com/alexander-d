<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

<section class="article">
  <div class="article-title">Grumpy wizards make toxic brew for the evil Queen and Jack.</div>
  <div class="article-content">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
    nascetur ridiculus mus.
    br
    br
    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
    massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
  </div><a href="article.html">
    <button type="button" class="btn-read-more pull-right">Read more...</button></a>
</section>
<div class="pagination">
  <a href="#">
    <button type="button" class="btn-pagination"> <span class="stretch"><</span>
    </button>
  </a>
  <a href="#">
    <button type="button" class="btn-pagination"> <span class="stretch">></span>
    </button>
  </a>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
