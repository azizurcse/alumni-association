<?php 
/**
 * Template Name: Author-Image-list-page
 *
 */
get_header();
$author_id=$_GET['author_id'];
global $wpdb;

$author_query="SELECT post_title,guid FROM `wp_posts` WHERE `post_parent`!='0' AND `post_type`='attachment 'AND `post_author`='11' ";
// print_r($author_query);

$pageposts = $wpdb->get_results($author_query);
?>

<div class="container">
	<div class="row">
		<h4 class="pull-left"><a href="http://localhost/gmhsc/process-php">Back</a></h4>
		<h2 class="text-center">Users Image List</h2>
	</div>
	<div class="row">
<?php foreach ($pageposts as $pagepost){ ?>

		
	<!-- <td><img width="200px" height="180px" src=""></td> -->
		<div class="col-md-3 col-sm-4 col-xs-6 odude_img"><img class="img-responsive" src="<?php echo $pagepost->guid;?>"/>
		<p class="text-center"><?php echo $pagepost->post_title;?></p>
		</div>

<?php }
?>
    </div>
</div>
<?php 