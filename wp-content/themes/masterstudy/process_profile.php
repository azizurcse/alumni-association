<?php 
/*
Template Name: process_php
*/

if ( !empty( $_POST['first_name'] ) )
  update_user_meta( $user_id, 'first_name', esc_attr( $_POST['first_name'] ) );

if ( !empty( $_POST['father'] ) )
  update_user_meta($user_id, 'father', esc_attr( $_POST['father'] ) );

if ( !empty( $_POST['blood'] ) )
  update_user_meta($user_id, 'blood', esc_attr( $_POST['blood'] ) );

if ( !empty( $_POST['hobby'] ) )
  update_user_meta($user_id, 'hobby', esc_attr( $_POST['hobby'] ) );

if ( !empty( $_POST['telephone'] ) )
  update_user_meta($user_id, 'telephone', esc_attr( $_POST['telephone'] ) );

if ( !empty( $_POST['mobile'] ) )
  update_user_meta($user_id, 'mobile', esc_attr( $_POST['mobile'] ) );

if ( !empty( $_POST['current_address'] ) )
  update_user_meta($user_id, 'current_address', esc_attr( $_POST['current_address'] ) );

if ( !empty( $_POST['address_in_bangladesh'] ) )
  update_user_meta($user_id, 'address_in_bangladesh', esc_attr( $_POST['address_in_bangladesh'] ) );

if ( !empty( $_POST['starting_school'] ) )
  update_user_meta($user_id, 'starting_school', esc_attr( $_POST['starting_school'] ) );

if ( !empty( $_POST['ending_school'] ) )
  update_user_meta($user_id, 'ending_school', esc_attr( $_POST['ending_school'] ) );

if ( !empty( $_POST['ssc_passing'] ) )
  update_user_meta($user_id, 'ssc_passing', esc_attr( $_POST['ssc_passing'] ) );

if ( !empty( $_POST['hsc_passing'] ) )
  update_user_meta($user_id, 'hsc_passing', esc_attr( $_POST['hsc_passing'] ) );

if ( !empty( $_POST['job_title'] ) )
  update_user_meta($user_id, 'job_title', esc_attr( $_POST['job_title'] ) );

if ( !empty( $_POST['company_name'] ) )
  update_user_meta($user_id, 'company_name', esc_attr( $_POST['company_name'] ) );

if ( !empty( $_POST['company_address'] ) )
  update_user_meta($user_id, 'company_address', esc_attr( $_POST['company_address'] ) );

if ( !empty( $_POST['alumni_e_newsletter'] ) )
  update_user_meta($user_id, 'alumni_e_newsletter', esc_attr( $_POST['alumni_e_newsletter'] ) );

if ( !empty( $_POST['employment_information'] ) )
  update_user_meta($user_id, 'employment_information', esc_attr( $_POST['employment_information'] ) );

if ( !empty( $_POST['gmhsc_trust'] ) )
  update_user_meta($user_id, 'gmhsc_trust', esc_attr( $_POST['gmhsc_trust'] ) );

if ( !empty( $_POST['financial_hardship+'] ) )
  update_user_meta($user_id, 'financial_hardship', esc_attr( $_POST['financial_hardship'] ) );

if(!empty($user_id)){
  wp_redirect("http://localhost/gmhsc/register_profile_dashboard.php");
}

?>