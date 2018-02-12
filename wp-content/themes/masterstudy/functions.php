<?php
	

session_start();


	$inc_path = get_template_directory() . '/inc';
	
	$widgets_path = get_template_directory() . '/inc/widgets';
	define('STM_DOMAIN', 'stm_domain');
	
		// Theme setups
		
		// Custom code and theme main setups
		require_once( $inc_path . '/setup.php' );
		
		// Enqueue scripts and styles for theme
		require_once( $inc_path . '/scripts_styles.php' );
		
		// Customizer opt
		require_once ( $inc_path . '/redux-framework/admin-init.php' );
		//require_once( $inc_path . '/customizer/setup.php' );
		
		// Required plugins for theme
		require_once( $inc_path . '/tgm/tgm-plugin-registration.php' );
		
		// Visual composer custom modules
		if ( in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
			require_once( $inc_path . '/visual_composer.php' );
		}

		// Custom code for any outputs modifying
		require_once( $inc_path . '/payment.php' );
		require_once( $inc_path . '/custom.php' );
		
		// Custom code for woocommerce modifying
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
		    require_once( $inc_path . '/woocommerce_setups.php' );
		    
		    // Custom Woo widget
		    require_once( $widgets_path . '/woo_popular_courses.php' );
		}
		
		// Mailchimp widget
		require_once( $widgets_path . '/mailchimp.php' );
		require_once( $widgets_path . '/contacts.php' );
		require_once( $widgets_path . '/pages.php' );
		require_once( $widgets_path . '/socials.php' );
		require_once( $widgets_path . '/recent_posts.php' );
		require_once( $widgets_path . '/working_hours.php' );
			
		// Less compiler only in stm dev area
		$stm_uri = str_replace('www.', '',$_SERVER['HTTP_HOST'] );
		
		if(preg_match('/.stm/', $stm_uri)) {
			require_once( $inc_path . '/less/lessc.connect.php' );
		}


add_filter('query_vars', 'parameter_queryvars' );
 
function parameter_queryvars( $qvars )
{
$qvars[] = 'foo';
return $qvars;
}



/**
 * WordPress function for redirecting users on login based on user role
 */


function my_login_redirect( $url, $request, $user ){
	
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
        if( $user->has_cap( 'administrator' ) ) {
            $url = admin_url();
        }elseif (!empty($_SESSION["id"])) {
        	 $url = home_url('/user-information?id='.$_SESSION["id"].'');
        }

         else {
           $url = home_url('/user-profile/');
        }
    }
    return $url;
}
add_filter('login_redirect', 'my_login_redirect', 10, 3 );



function get_term_meta( $term_id, $key = '', $single = false ) {
    // Bail if term meta table is not installed.
    if ( get_option( 'db_version' ) < 34370 ) {
        return false;
    }
 
    return get_metadata( 'term', $term_id, $key, $single );
}


function update_term_meta( $term_id, $meta_key, $meta_value, $prev_value = '' ) {
    // Bail if term meta table is not installed.
    if ( get_option( 'db_version' ) < 34370 ) {
        return false;
    }
 
    if ( wp_term_is_shared( $term_id ) ) {
        return new WP_Error( 'ambiguous_term_id', __( 'Term meta cannot be added to terms that are shared between taxonomies.'), $term_id );
    }
 
    $updated = update_metadata( 'term', $term_id, $meta_key, $meta_value, $prev_value );
 
    // Bust term query cache.
    if ( $updated ) {
        wp_cache_set( 'last_changed', microtime(), 'terms' );
    }
 
    return $updated;
}


// function kv_handle_attachment($file_handler,$post_id,$set_thu=false) {
// 	// check to make sure its a successful upload
// 	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

// 	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
// 	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
// 	require_once(ABSPATH . "wp-admin" . '/includes/media.php');

// 	$attach_id = media_handle_upload( $file_handler, $post_id );

//          // If you want to set a featured image frmo your uploads. 
// 	if ($set_thu) set_post_thumbnail($post_id, $attach_id);
// 	return $attach_id;
// }

require get_template_directory() . '/inc/customer_shortcodes.php';