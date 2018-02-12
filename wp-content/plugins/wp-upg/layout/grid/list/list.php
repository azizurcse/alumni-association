<?php
if($users ==0 && $author_id_lists == 0){?>

	<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
     <?php 
     	echo '<a href="'.$preview_large.'" title="'.$thetitle.'" class="'.$preview_type.'" border=0><img src="'.$image.'" style="height:150px !important;width:150px !important;margin-bottom:8px;"></a>';

     ?>
     <?php echo upg_show_icon_grid()."    ".$video_icon; ?>
     	</div>
   
    <div class="footer" style="text-align:center">

	<?php echo $thetitle; ?>
	
	</div>
  </div>
  
  </div>
<?php
}else{

// if($users !=0){
// echo '<ul id="users">';



foreach($query as $q) { $perrow_author=8; ?>

   <div class="pure-u-1 pure-u-md-1-<?php echo $perrow_author; ?>" style="<?php echo $show_div;?>" id="upg_<?php echo get_the_ID(); ?>">
   <div class="obox"  style="background-image: url('http://localhost/gmhsc/wp-content/uploads/2018/02/avatar-icon.png');background-repeat: no-repeat;">
     <div class="body" style="text-align:center" >
  <!-- <li class="user clearfix"> -->
  
    <!-- <div class="user-data"> -->
 <?php
			echo '<br>'; ?>
      
     </div>
       <!--  </a>
      </h4> -->
 	<div class="footer" style="text-align:center">
		<?php
    $name=get_the_author_meta('display_name', $q->ID);
			echo '<a href="http://localhost/gmhsc/users-post-gallery-5/?click_user_id='.$q->ID.'">'.ucfirst($name).'</a>';
		?>
	</div>
 
    </div>
  <!-- </li> -->
 </div>
  

<?php } 
 
// echo '</ul>';
 
?>
 
<?php
if ($total_users > $total_query) {
echo '<div id="pagination" class="clearfix wp_pagination_custom" style="text-align:center;">';
echo '<span class="pages" style="border:1px solid #BFBFBF;margin:5px;">Pages:</span>';
  $current_page = max(1, get_query_var('paged'));
  echo paginate_links(array(
    'base' => get_pagenum_link(1) . '%_%',
    'format' => 'page/%#%/',
    'current' => $current_page,
    'total' => $total_pages,
    'prev_next'    => false,
    'type'         => 'plain',
    ));
echo '</div>';
//demo new code
	}
}

?>


<!-- start category click and author list show-->
<?php
$hidden_display=$_GET['click_user_id'];
if($author_id_lists ==0 || $author_image_lists != 0){

	$show_div='display:none';
}

	if($author_id_lists !=0){
		foreach ($author_id_lists as $key => $value) {?>

		<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" style="<?php echo $show_div;?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
			<?php
			echo '<a href="http://localhost/gmhsc/users-post-gallery-5/?click_user_id='.$value->user_id.'">'.$value->user_id.'</a>'; ?>	


	
	</div>
   <?php echo upg_show_icon_grid(); ?> 
    <div class="footer" style="text-align:center">
		<?php $user_name=get_userdata( $value->user_id ); 
			echo $user_name->user_nicename;
		?>
	</div>
  </div>
  
  </div>
  	<?php
  	
  }
	}

	if($author_image_lists != 0){
	echo '<a href="http://localhost/gmhsc/users-post-gallery-5/'.$album.'/"><img src="http://localhost/gmhsc/wp-content/uploads/2018/02/left-arrow-image.png" style="width:40px;height:40px;"/></a></br>';


	foreach ($author_image_lists as $key => $value) {?>
		<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
	
	<?php 
		echo '<a href="'.$value->guid.'" class="wp-upg" border=0><img style="height:200px !important;" src="'.$value->guid.'" class="pure-img"><figcaption>image</figcaption> </a>';
	?>
	
	</div>
	<div class="footer" style="text-align:center">
	</div>
  </div>
  	
  </div>
		<?php
	}

}?>
 


 

	