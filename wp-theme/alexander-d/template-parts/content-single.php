<script>
function goBack() {
	window.history.back()
}
</script>

<script>
	function goBackOrRoot(url)
	{
		var currentUrl = window.location.href;
		window.history.back();
		setTimeout(function(){
			// if location was not changed in 100 ms, then there is no history back
			if(currentUrl === window.location.href){
				// redirect to site root
				window.location.href = url;
			}
		}, 500);
	}
</script>

<section class="article">

  <div class="article-date">
    <?php the_date(); ?>
		<?php
			echo '<span class="revision pull-right">';

			function rev_count() {
				$post_id = get_the_ID();
				$args = wp_get_post_revisions($post_id);
				return count($args);
			}

			if (rev_count() > 0) {
				echo "Rev. ";
				echo rev_count();
			}

			if (get_the_modified_date() != get_the_date()) {
				echo " | ";
				echo the_modified_date();
			}

			echo "</span>";
		 ?>
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



  <button type="button" class="btn-backToList" onclick="goBackOrRoot('<?php echo get_settings('home'); ?>')">
    <span class="stretch">
      < &nbsp;
    </span>
    Back to articles
  </button>
