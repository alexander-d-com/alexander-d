<script>
function goBack() {
  window.history.back()
  }
</script>

<section class="article">

  <div class="article-date">
    <?php the_date(); ?>
  </div>

	<div class="article-title">
		<?php the_title(); ?>
	</div><!-- end post header -->

	<div class="article-content">
		<?php
			the_content();
		?>
	</div><!-- end entry -->
</section><!-- end post -->

  <button type="button" class="btn-backToList" onclick="goBack()">
    <span class="stretch">
      < &nbsp;
    </span>
    Back to articles
  </button>
