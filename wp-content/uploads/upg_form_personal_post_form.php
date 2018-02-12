
<form class="pure-form pure-form-stacked" method="post" enctype="multipart/form-data" action="">

<input type="hidden" id="name" name="user-submitted-title" value="No Title">
<input type='hidden' name='user-submitted-content' value='No Information'>
<input type='hidden' name='cat' value='2'>
<fieldset>
        

		<div class="pure-control-group">
		
            <?php
			$put="";
			ob_start ();
				?>
					<label for="file"><?php _e('Select Image', 'wp-upg'); ?></label>
				  <input class="pure-input-1-2 pure-input-rounded" id="file" name="user-submitted-image[]" type="file" size="25" 
				  <?php
					if($options['image_required']=='1')
					{
						echo "required";
					}
					?>>
				
				<?php
			$put=ob_get_clean (); 
			echo apply_filters('upg_bulk_limit_submit_form',$put);

			?>
			
		
		</div>
	
		  <ul>
		  <li><?php echo _e('Only picture files are allowed.','wp-upg') ?></li>
		  <li><?php echo _e('Maximum upload file size limit is','wp-upg') ?> <b><?php //echo ini_get('post_max_size'); ?> <?php echo size_format( wp_max_upload_size() ); ?></b></li>
		  </ul>
        
		
		<?php
		//Display 5 custom fields loop
		for ($x = 1; $x <= 5; $x++) 
		{
			if($options['upg_custom_field_'.$x.'_show_front']=='on')
			{
				if($options['upg_custom_field_type_'.$x]=='checkbox')
				{
					?>
					<div class="pure-control-group">
					<label for="upg_custom_field_<?php echo $x; ?>" class="pure-checkbox"> 
					<input type="checkbox" name="upg_custom_field_<?php echo $x; ?>" value="<?php echo 'upg_custom_field_'.$x.'_checked'; ?>" >
					<?php echo $options['upg_custom_field_'.$x]; ?> 
					
					</label> 
					
					</div>
					<?php
				}
				else
				{
			?>
			<div class="pure-control-group">
					<label for="upg_custom_field_<?php echo $x; ?>">
					<?php echo $options['upg_custom_field_'.$x]; ?> </label>
					<input type="text" name="upg_custom_field_<?php echo $x; ?>" class="pure-input-1 pure-input-rounded">
					</div>
			
			<?php
				}
			}
		}
		
		?>
		
		
			<?php
		do_action( "upg_submit_form");
		?>
		
		 <div class="pure-controls">
			<button type="submit" name="SN" class="pure-button pure-button-primary"><i class="fa fa-upload fa-lg"></i> <?php esc_html_e( 'Post', 'wp-upg' ); ?></button>
			<?php wp_nonce_field('upg-nonce', 'upg-nonce', false); ?>
		</div>
</fieldset>
</form>	
	
