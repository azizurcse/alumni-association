<?php
// here is the auhtor id fech code 
//jibon query start
if($album != ""){

	global $wpdb;
$author_query="SELECT user_id FROM `wp_usermeta` WHERE meta_key='ssc_passing' AND meta_value='".$album."' ";
$author_id_lists=$wpdb->get_results($author_query);
		if(file_exists(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php"))
		include(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php"); 
	
}
//jibon query end

// here is the authod ids image list code

	global $wpdb;
$author_images="SELECT post_title,guid FROM `wp_posts` WHERE `post_parent`!='0' AND `post_type`='attachment 'AND `post_author`='".$click_post_id."'";
// echo $author_images;
// exit();
$author_image_lists=$wpdb->get_results($author_images);
if(file_exists(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php"))
		include(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php");










			foreach ($users as $user) {?>

		<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" style="<?php echo $show_div;?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
			<?php
			echo '<a href="http://localhost/gmhsc/users-post-gallery-5/?click_user_id='.$user->ID.'">'.$user->ID.'</a>'; ?>	
	</div>
   <!-- $users -->
    <div class="footer" style="text-align:center">
		<?php $user_name=get_userdata( $value->user_id ); 
			echo $user_name->user_nicename;
		?>
	</div>
  </div>
  
  </div>
  	<?php
  	
  }







'%^# Match any youtube URL
                (?:https?://)?  # Optional scheme. Either http or https
                (?:www\.)?      # Optional www subdomain
				(?:m\.)?      # Optional mobile subdomain
                (?:             # Group host alternatives
                  youtu\.be/    # Either youtu.be,
                | youtube\.com  # or youtube.com
                  (?:           # Group path alternatives
                    /embed/     # Either /embed/
                  | /v/         # or /v/
                  | /watch\?v=  # or /watch\?v=
                  )             # End path alternatives.
                )               # End host alternatives.
                ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
                $%x'



// vimeo with

                '%^# Match any youtube URL
                (?:https?://)?  # Optional scheme. Either http or https
                (?:www\.)?      # Optional www subdomain
				(?:m\.)?      # Optional mobile subdomain
                (?:             # Group host alternatives
                  youtu\.be/    # Either youtu.be,
                | youtube\.com  # or youtube.com
                | vimeo\.com 	# vimeo.com
                  (?:           # Group path alternatives
                    /embed/     # Either /embed/
                  | /v/         # or /v/
                  | /watch\?v=  # or /watch\?v=
                  | /channels/staffpicks/ # vimeo extention
                  )             # End path alternatives.
                )               # End host alternatives.
                ([\w-]{9,12})  # Allow 10-12 for 11 char youtube id.
                $%x'

'http://www.youtube.com/embed/'.$youtube_id.''
'http://www.youtube.com/embed/'.$youtube_id.'?rel=0&amp;wmode=transparent'



	<?php 

if($author_id_lists ==0 && $author_image_lists == 0){?>

	<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
     <?php 
     	echo '<a href="'.$preview_large.'" title="'.$thetitle.'" class="'.$preview_type.'" border=0><img src="'.$image.'"></a>';

     ?>
     <?php echo upg_show_icon_grid(); ?>
     	</div>
   
    <div class="footer" style="text-align:center">

	<?php echo $thetitle; ?>
	
	</div>
  </div>
  
  </div>
<?php
}else{


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
			echo '<a href="http://localhost/gmhsc/users-post-gallery-5/'.$album.'/?click_user_id='.$value->user_id.'">'.$value->user_id.'</a>'; ?>	


	
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
<iframe src="https://player.vimeo.com/video/251250546?portrait=0&badge=0" width="640" height="272" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/251250546">Me, by J-Money</a> from <a href="https://vimeo.com/danielbruson">Daniel Bruson</a> on <a href="https://vimeo.com">Vimeo</a>.</p>


<iframe src="https://player.vimeo.com/video/253137697?badge=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/253137697">States Of Matter</a> from <a href="https://vimeo.com/tomaszewicz">Peter Tomaszewicz</a> on <a href="https://vimeo.com">Vimeo</a>.</p>