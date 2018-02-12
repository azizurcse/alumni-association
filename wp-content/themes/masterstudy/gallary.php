<?php 
/*
Template Name: Gallary
*/

get_header();
?>

<?php 
if(!is_user_logged_in()) {

}else{
	?>
	<div class="container">
	
	<div class="gf_browser_gecko gform_wrapper" id="gform_wrapper_7"><form method="post" enctype="multipart/form-data" id="gform_7" action="/gmhsc/change-profile-image/">
		<div class="gform_body"><ul id="gform_fields_7" class="gform_fields top_label form_sublabel_below description_below"><li id="field_7_1" class="gfield field_sublabel_below field_description_below"><label class="gfield_label" for="input_7_1">Change Image</label><div class="ginput_container ginput_container_fileupload"><input name="MAX_FILE_SIZE" value="2097152" type="hidden"><input name="input_1" id="input_7_1" class="medium" aria-describedby="extensions_message" tabindex="1" type="file"><span id="extensions_message" class="screen-reader-text"></span></div></li>
	</ul></div>
	<div class="gform_footer top_label"> <input id="gform_submit_button_7" class="gform_button button" value="Submit" tabindex="2" onclick="if(window[&quot;gf_submitting_7&quot;]){return false;}  window[&quot;gf_submitting_7&quot;]=true;  " type="submit"> 
		<input class="gform_hidden" name="is_submit_7" value="1" type="hidden">
		<input class="gform_hidden" name="gform_submit" value="7" type="hidden">
		
		<input class="gform_hidden" name="gform_unique_id" value="" type="hidden">
		<input class="gform_hidden" name="state_7" value="WyJbXSIsIjQ4OGYyMWRjZTRjMmQ5YzlkMDMyYzRlODVlMjdjNzMyIl0=" type="hidden">
		<input class="gform_hidden" name="gform_target_page_number_7" id="gform_target_page_number_7" value="0" type="hidden">
		<input class="gform_hidden" name="gform_source_page_number_7" id="gform_source_page_number_7" value="1" type="hidden">
		<input name="gform_field_values" value="" type="hidden">
		
	</div>
</form>
</div><script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"http:\/\/localhost\/gmhsc\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"http:\/\/localhost\/gmhsc\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 7) {} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [7, 1]) } ); </script>


<div class="clearfix">
</div>
</div>
<?php
}
?>
<?php get_footer();?>