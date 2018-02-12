<?php
/**
 * Template Name: Alumni
 *
 */
get_header();


global $wp_query;
if (isset($wp_query->query_vars['foo']))
{
$year= $wp_query->query_vars['foo'];
}

echo "<h1>hi, Welcome to details page</h1><br>";

?>
		<div class="stm_single_post">
            <div class="s_profile">
                <?php
                $args = array(
                    'role'         => 'subscriber',
                    'fields'       => 'all',
                    'meta_key' => 'ssc_passing',
                    'meta_value' => $year
                );
                $users = get_users( $args );
                foreach($users as $user){
                    $id = $user->ID;
                    $meta = get_user_meta($id);
					$profile_picture = urldecode($meta['profile_picture'][0]);
                    echo '
                        <div class="profile">
                            <div class="p_left">
                                <img src="'.$profile_picture.'">
                            </div>
                            <div class="p_right">
                                <div class="p_info">
                                    <span>Name :</span>
                                    <span>'.$meta['first_name'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Father Name :</span>
                                    <span>'.$meta['father'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Blood Group :</span>
                                    <span>'.$meta['blood'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Hobby :</span>
                                    <span>'.$meta['hobby'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Start Schooling Year :</span>
                                    <span>'.$meta['starting_school'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>End Schooling Year :</span>
                                    <span>'.$meta['ending_school'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>SSC passed Year :</span>
                                    <span>'.$meta['ssc_passing'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>HSC passed Year :</span>
                                    <span>'.$meta['hsc_passing'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Field of Study :</span>
                                    <span>'.$meta['f_of_study'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Five Classmates Names :</span>
                                    <span>'.$meta['five_classmates_name'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Job tiltle :</span>
                                    <span>'.$meta['job_title'][0].'</span>
                                </div>
                                <div class="p_info">
                                    <span>Company Name :</span>
                                    <span>'.$meta['company_name'][0].'</span>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>
            </div>
		</div>
<?php get_footer();?>

