<?php
session_start();
$_SESSION["id"] = $_GET["id"];
$id=$_SESSION["id"];

if(!is_user_logged_in()) {
wp_redirect("http://localhost/gmhsc/wp-login.php?id=".$id."");
}else{
?>

<?php



/*
Template Name: User_information
*/
get_header();
$id=$_SESSION["id"];
//$id=$_GET['id'];
// global $wp_query;
// if (isset($wp_query->query_vars['id']))
// {
// $year= $wp_query->query_vars['id'];

// }



			global $wpdb;
			$result = $wpdb->get_results ("SELECT meta_key,meta_value FROM `wp_usermeta` WHERE user_id='$id'");
			
				$meta = get_user_meta($id);
				$profile_picture = urldecode($meta['profile_picture'][0]);
				$f1_name=$meta['first_friend'][0];
				$f2_name=$meta['second_friend'][0];
				$f3_name=$meta['third_friend'][0];
				$f4_name=$meta['fourth_friend'][0];
				$f5_name=$meta['fifth_friend'][0];
				$f6_name=$meta['sixth_friend'][0];
				
				

			
?>
<div class="container">
	<div class="row">
	<br>
	  <div class="col-md-12 text-center">
	  	<img style="margin-left: 5px;" src="<?php echo $profile_picture;?>" class="img-circle" width="150px">
	  </div>
	  <div class="col-md-12">
	  <h3 class="text-center" style="margin-top: 15px;"><?php echo $meta['first_name'][0];?></h3>
	 <p class="text-center" style="margin-bottom: 0px;"><?php echo $meta['ssc_passing'][0];?>- <?php echo $meta['ssc_passing'][0] +1;?></p>
	 <p class="text-center" style="margin-top: 0px;"><?php echo $meta['address_in_bangladesh'][0];?></p>

	  </div>
	</div>
	<div class="row">
	
		<div class="col-md-6">
			<h4>Professional Informations</h4>
			<hr>
			<table id="mytable" style="border-collapse: unset;">
			<tr>
			<td><div class="col-md-10 line-break mobile-size">

				<label>Name:</label>
				<label>Nick Name:</label>
				<label>Father Name:</label>
				<label>Blood</label>
				<label>Hobby:</label>
				<label>Email:</label>
				<label>Telephone:</label>
				<label>Mobile:</label>
				<label>Current Address:</label>
				<label>Address in Bangaldesh:</label>
			</div></td>
			

<?php 
	 // $args = array(
  //               'ID'         => $id
                
  //               );
  //             $user = get_users( $id );
  //            // foreach($users as $user){
  //               $user_email = $user->user_email;
            //}
	// $user_email_result = $wpdb->g$meta = get_user_meta($id);et_results ("SELECT user_email FROM `wp_users` where ID=$id");
	// print_r($user_email_result);
	$user_info = get_userdata($id);
	  $mailadresje = $user_info->user_email;
	  

?>
			
			<td><div class="col-md-12 line-break mobile-size">
				<label><?php echo $meta['first_name'][0];?></label>
				<label><?php echo $meta['nickname'][0];?></label>
				<label><?php echo $meta['father'][0];?></label>
				<label><?php echo $meta['blood'][0];?></label>
				<label><?php echo $meta['hobby'][0];?></label>
				<label><?php 
					echo $mailadresje;
				?></label>
				<label><?php echo $meta['telephone'][0];?></label>
				<label><?php echo $meta['mobile'][0];?></label>
				<label><?php echo $meta['current_address'][0];?></label>
				<label><?php echo $meta['address_in_bangladesh'][0];?></label>
			</div></td>
			</tr>
			</table>
		</div>
		
		<div class="col-md-6">
			<h4>Alumni Informations</h4>
			<hr>
			<table id="mytable" style="border-collapse: unset;">
			<tr>
			<td><div class="col-md-10 line-break mobile-size">
				<label>Starting School Year:</label>
				<label>Ending School Year:</label>
				<label>SSC Passing Year:</label>
				<label>HSC Passing Year:</label>
				<label>Field Of Study:</label>
				<label>First Friend:</label> 
				<label>Second Friend:</label> 
				<label>Third Friend:</label> 
				<label>Fourth Friend:</label> 
				<label>Fifth Friend:</label> 
				<label>Sixth Friend:</label> 
			</div></td>
			<td><div class="col-md-12 line-break mobile-size">
				<label><?php echo $meta['starting_school'][0];?></label>
				<label><?php echo $meta['ending_school'][0];?></label>
				<label><?php echo $meta['ssc_passing'][0];?></label>
				<label><?php echo $meta['hsc_passing'][0];?></label>
				<label><?php echo $meta['f_of_study'][0];?></label>
				<label><?php echo str_replace(',', ', mobile :-', $f1_name);?></label> 
				<label><?php echo str_replace(',', ', mobile :-', $f2_name);?></label> 
				<label><?php echo str_replace(',', ', mobile :-', $f3_name);?></label> 
				<label><?php echo str_replace(',', ', mobile :-', $f4_name);?></label> 
				<label><?php echo str_replace(',', ', mobile :-', $f5_name);?></label> 
				<label><?php echo str_replace(',', ', mobile :-', $f6_name);?></label> 
			</div></td>
			</tr>
			
			</table>
		</div>
		
	</div><br>
	<div class="row">
	
		<div class="col-md-6">
			<h4>Current Employment</h4>
			<hr>
			<table id="mytable" style="border-collapse: unset;">
			<tr>
			<td class="td-width"><div class="col-md-10 line-break mobile-size">
				<label>Job Title</label>
				<label>Company Name</label>
				<label>Company Address</label>
				
			</div></td>
			<td class="td-width"><div class="col-md-12 line-break mobile-size">
				<label><?php echo $meta['job_title'][0];?></label>
				<label><?php echo $meta['company_name'][0];?></label>
				<label><?php echo $meta['company_address'][0];?></label>
				
			</div></td>
			</tr>
			</table>
		</div>
		<div class="col-md-6">
			<h4>About Me</h4>
			<hr>
			<p><?php echo $meta['about_me'][0];?></p>
		</div>
		
		
	</div>

	<!-- this is i like to area start-->
	<div class="row">
		<div class="col-md-12">
			<h4>I Want</h4>
			<hr>
			<div class="col-md-4">
				<h5 class="bg-info text-info text-center">Alumni e-newsletter</h5>
			</div>
			<div class="col-md-4">
				<h5 class="bg-info text-info text-center">Employment Information</h5>
			</div>
			<div class="col-md-4">
				<h5 class="bg-info text-info text-center">Updates About the GMHSC Trust</h5>
			</div>
			<div class="col-md-4">
				<h5 class="bg-info text-info text-center">To Support Current Students Who Suffer Financial Hardship</h5>
			</div>
			<div class="col-md-4">
				<h5 class="bg-info text-info text-center">To Contribute GMHSC Students Scholarship Scheme</h5>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

<?php }
session_destroy();
 ?>