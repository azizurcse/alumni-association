<?php
/**
 * Template Name: Test
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

$args = array(
    'role'         => 'subscriber',
    'fields'       => 'all'
);
$users = get_users( $args );
foreach($users as $user){
    $id = $user->ID;
    $all_meta_for_user = get_user_meta($id);
    print_r($all_meta_for_user);
}
get_sidebar();
get_footer();
