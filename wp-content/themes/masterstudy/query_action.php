<?php 
/**
 * Template Name: query_action_page
 *
 */
get_header();
// $tablename = $wpdb->prefix."terms";
// $year="2001";
// $query=$wpdb->get_results("SELECT * FROM $tablename WHERE name = '".$year."'");
// if ($query == null) {

// insert in wp_terms  table start
// $wp_terms_table = $wpdb->prefix . "terms";
// $terms_saveFieldArray=array( 
// 'name' => '2220',
// 'slug'=>'2220');

// }
//Insert Into Database


// $terms_saveFieldArrayanother=array( 
// 'name' => '2221',
// 'slug'=>'2221');
// $results=$wpdb->insert( $wp_terms_table, $terms_saveFieldArray);
// $results=$wpdb->insert( $wp_terms_table, $terms_saveFieldArrayanother);
// // insert in wp_terms  table end

// $lastInsertId = $wpdb->insert_id;
// $lastSecondid=$lastInsertId - 1;

// if($results == 1){
	

// 	$wp_term_taxonomy_table = $wpdb->prefix . "term_taxonomy";
// 	$taxonomy_saveFieldArray=array( 
// 	'term_id' =>$lastSecondid,
// 	'taxonomy'=>'upg_cate');
	
	
// 	$taxonomy_saveFieldArrayanother=array( 
// 	'term_id' =>$lastInsertId,
// 	'taxonomy'=>'upg_cate','parent'=>$lastSecondid);
// 	//Insert Into Database
// 	$wpdb->insert( $wp_term_taxonomy_table, $taxonomy_saveFieldArray);
// 	$wpdb->insert( $wp_term_taxonomy_table, $taxonomy_saveFieldArrayanother);
	
// }else{
// 	echo "no information can not entry";
// }




//get the last inert end code

// $lastid=$lastInsertId;
// echo $lastid;



// global $wpdb;
// $wpdb->query( $wpdb->prepare(
//     "INSERT INTO wp_terms (name, slug) VALUES (%s, %s )",
//     array(
//         '2007',
//         '2007'
//     )
// ));
// $get_id = $wpdb->get_row("SHOW TABLE STATUS LIKE 'wp_terms'"); 
// $last_id = $get_id>Auto_increment;
// echo $last_id;
// if($lastInsertId > 0){
// 	$wpdb->query( $wpdb->prepare(
//     "INSERT INTO wp_term_taxonomy (term_id, taxonomy) VALUES (%d, %s )",
//     array(
//         '$lastInsertId',
//         'upg_cate'
//     )
// ));
// }
// $next_id = $last_id + 1;
global $wpdb;
$author_query="SELECT post_author FROM `wp_posts` WHERE post_parent !='0' AND post_type='attachment' group BY post_author";
$author_id_lists=$wpdb->get_results($author_query);
?>
</br>
</br>
<ul class="list-inline text-center">
<?php

foreach ($author_id_lists as $author_id_list) {?>
<!-- <li><a href="http://localhost/gmhsc/user-information?author_id="<?php echo $author_id_list->post_author;?>"><?php echo $author_id_list->post_author;?></a></li> -->
<?php
$id=5;
	echo '<a href="http://localhost/gmhsc/specific-author-image-list?author_id='.$author_id_list->post_author.'" style="font-size:40px;">'.$author_id_list->post_author.'</a>';
	?>
<?php
}
?>
</ul>

//extra
<?php $args = array(
			'orderby'      => $settings['orderby'], 
    		'order'        => $settings['order'],
    		'hide_empty'   => $settings['hide_empty'], 
			'parent'       => $settings['term_id'],
			'hierarchical' => false
  		);
		
		$terms = get_terms( 'upg_cate', $args );
		?>
<?php


$querys="SELECT post_title,guid FROM `wp_posts` WHERE `post_author`='10' AND `post_parent`!='0' AND `post_type`='attachment'";
$pageposts = $wpdb->get_results($querys);
?>

<table class="table table-bordered">
<tr>
<th>Title</th>
<th>Image Link</th>
</tr>
<?php foreach ($pageposts as $pagepost){ ?>
<tr>
	<td><?php echo $pagepost->post_title;?></td>
	<td><img width="200px" height="180px" src="<?php echo $pagepost->guid;?>"></td>
</tr>
<?php }
?>
</table>
