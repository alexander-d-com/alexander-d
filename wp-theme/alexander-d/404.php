<?php get_header(); ?>

<section class="article">
  <div class="article-title">Oops. Something went weird.</div>
  <div class="article-content">
    The page you were looking for could not be found, but if you need it that
    bad just send me a mail and I’ll be back to you asap.
  </div>
</section>
<div class="funnybunny">
  <img src="<?php echo get_bloginfo('template_directory');?>/img/bunny.svg">
  <span class="img-text">404</span>
</div>
<a href="<?php echo get_settings('home'); ?>">
  <button type="button" class="btn-backToList">
    <span class="stretch">
      < &nbsp;
    </span>Back to home
  </button>
</a>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
