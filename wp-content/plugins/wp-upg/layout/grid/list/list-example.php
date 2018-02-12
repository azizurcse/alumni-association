<div class="pure-u-1 pure-u-md-1-<?php echo $perrow; ?>" id="upg_<?php echo get_the_ID(); ?>">
     <div class="obox"  >
     <div class="body" style="text-align:center" >
	
	
	<?php
	
    $student= '12';
    
			if($permalink=="0")
			{
			echo '<img src="'.$image.'" class="pure-img">';
			}
		else
		{
			if($popup=="on")
			{
			
			echo '<a href="'.$preview_large.'" title="'.$thetitle.'" class="'.$preview_type.'" border=0>'.$album.'<img src="'.$image.'"></a>';
			
			
			}
			else
			{
			echo '<a href="'.$permalink.'" border=0>'.$album.'<img src="'.$image.'"></a>';
			}
		}
		
				?>
				
			<?php echo upg_show_icon_grid(); ?>
			
				
</a>
	
	</div>
   
    <div class="footer" style="text-align:center">

	<?php echo $thetitle; ?>
	
	</div>
  </div>
  
  </div>


<!--- catalog page image list code ->

	global $wpdb;
$author_images="SELECT post_title,guid FROM `wp_posts` WHERE `post_parent`!='0' AND `post_type`='attachment 'AND `post_author`='".$click_post_id."'";
// echo $author_images;
// exit();
$author_image_lists=$wpdb->get_results($author_images);
if(file_exists(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php"))
		include(upg_BASE_DIR."/layout/grid/".$layout."/$layout.php");


