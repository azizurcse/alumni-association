<?php
/**
 * Template Name: multiple image upload
 *
 */




global $wpdb;
$parent_term = term_exists( '2400', '2400' ); // array is returned if taxonomy is given

wp_insert_term(
  '2400', // the term 
  '2400', // the taxonomy
  array(
    'description'=> 'A yummy apple.',
    'slug' => '2400',
    'parent'=> '190'  // get numeric term id
  )
);