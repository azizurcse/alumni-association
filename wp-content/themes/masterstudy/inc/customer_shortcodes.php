<?php
function get_authors_list($atts) {
	
	global $wpdb;
$author_query="SELECT post_author FROM `wp_posts` WHERE post_parent !='0' AND post_type='attachment' group BY post_author";
$author_id_lists=$wpdb->get_results($author_query);?>
<ul class="text-center">
<?php

foreach ($author_id_lists as $author_id_list) {?>

<?php
$id=5;
	echo '<a href="http://localhost/gmhsc/specific-author-image-list?author_id='.$author_id_list->post_author.'" style="font-size:40px;">'.$author_id_list->post_author.'</a>';
	?>
<?php
}
?>
</ul>
<?php
$myvariable = ob_get_clean();
        return $myvariable;
}

add_shortcode('get_author', 'get_authors_list');



 function list_categories_album( $settings ) {

		$terms = get_terms( 'upg_cate', $args );
?>

		<ul class="text-center">
<?php

foreach ($terms as $term) {?>

<?php
$id=5;
	echo '<li style="list-style:none;"><a href="' . upg_get_category_page_link( $term ) . '">'.$term->name.'</a></li>';
	?>
<?php
}
?>
</ul>
<?php
$myvariable2 = ob_get_clean();
        return $myvariable2;
}
	
add_shortcode('get_album', 'list_categories_album');



function get_image_link(){
	$image=upg_image_src('thumbnail',$post_id);

	return $image;
}

add_shortcode('get_image', 'get_image_link');