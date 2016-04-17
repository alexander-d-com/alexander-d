<?php 
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
 ?>

<?php
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function modify_read_more_link() {
return '<a class="more-link" href="' . get_permalink() . '">
<button type="button" class="btn-read-more pull-right">Read more...</button></a>';
}
 ?>
