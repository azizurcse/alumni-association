<?php
global $post; 
$options = get_option('upg_settings');


if(isset($options['editor']) && $options['editor']=='1' )
	$editor=true;
else
	$editor=false;	


$title='';

$abc="";
ob_start ();
if (isset($_POST['user-submitted-title'], $_POST['upg-nonce']) && !empty($_POST['user-submitted-title']) && wp_verify_nonce($_POST['upg-nonce'], 'upg-nonce')) 
$title=sanitize_text_field($_POST['user-submitted-title']);

	if($title=='')
{

	//Form not submitted yet.

}
else
{
		$author = ''; $url = ''; $email = ''; $tags = ''; $captcha = ''; $verify = ''; $content = ''; $category = ''; 
	
		$files = array();
		if (isset($_FILES['user-submitted-image']))
		{
			$files = $_FILES['user-submitted-image'];
		
		}
		
		
		
		if (isset($_POST['user-submitted-content']))  $content  = upg_sanitize_content($_POST['user-submitted-content']);
		if (isset($_POST['cat'])) $category = intval($_POST['cat']);
		
		$content=str_replace("[","[[",$content);
		$content=str_replace("]","]]",$content);
		
		$result = upg_submit($title, $files, $content, $category, $preview);
		
		$post_id = false; 
		if (isset($result['id'])) $post_id = $result['id'];
		
		$error = false;
		if (isset($result['error'])) $error = array_filter(array_unique($result['error']));
		
		 if ($post_id) 
		{
			//Submit extra fields data
			for ($x = 1; $x <= 10; $x++) 
			{
				if (isset($_POST['upg_custom_field_'.$x]))
				add_post_meta($post_id, 'upg_custom_field_'.$x, $_POST['upg_custom_field_'.$x]);
			}
			
			//Ended to submit extra fields
			
			$post   = get_post( $post_id );
			$image=upg_image_src('large',$post);
			
			do_action( "upg_submit_complete");
			
			if(isset($options['publish']) && $options['publish']=='1' )
			{
			
			echo "<h2>".__('Successfully posted.','wp-upg')."</h2>";
			echo "<br><br><a href='".esc_url( get_permalink($post_id) )."' class=\"pure-button\">".__('Click here to view','wp-upg')."</a><br><br>";
			
			}
		else
		{
			echo "<h2>".__('Your submission is under review.','wp-upg')."</h2>";
			
		}
			
			
			//echo "<h1 class=\"archive-title\">".$post->post_title."</h1>";
			//echo "<img src='$image'>";
		}
		else
		{
			if ($error) 
			{
				$e = implode(',', $error);
				$e = trim($e, ',');
			} 
			else 
			{
				$e = 'error';
			}
			
			echo "<h1>".__($e.' error','wp-upg')."</h1>";
		} 
		
	?>

	<?php
}

if(isset($params['layout']))
	$layout=trim($params['layout']);
else
	$layout="basic";


if($layout=="personal")
{
	if(file_exists(upg_BASE_DIR."/layout/form/".$layout."/".get_current_blog_id()."_".$layout."_post_form.php"))
		include(upg_BASE_DIR."/layout/form/".$layout."/".get_current_blog_id()."_".$layout."_post_form.php");
	else
		echo __('Layout Not Found. Check Settings and save update again.','wp-upg').": ".$layout;

}
else
{
	if(file_exists(upg_BASE_DIR."/layout/form/".$layout."/".$layout."_post_form.php"))
		include(upg_BASE_DIR."/layout/form/".$layout."/".$layout."_post_form.php");
	else
		echo __('Layout Not Found. Check Settings and save update again.','wp-upg').": ".$layout;
}
	
	
$abc=ob_get_clean (); 
return $abc;
?>