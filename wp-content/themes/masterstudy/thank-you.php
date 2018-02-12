<?php
/**
 * Template Name: Thank You
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
//Gathering information
$Name = $_REQUEST['Name'];
$Father = $_REQUEST['Father'];
$Blood = $_REQUEST['Blood'];
$Hobby = $_REQUEST['Hobby'];
$Email = $_REQUEST['Email'];
$Telephone = $_REQUEST['Telephone'];
$Mobile = $_REQUEST['Mobile'];
$Current_Address = $_REQUEST['Current_Address'];
$Address_In_Bangladesh = $_REQUEST['Address_In_Bangladesh'];
$Starting_school = $_REQUEST['Starting_school'];
$Ending_school = $_REQUEST['Ending_school'];
$SSC_passing = $_REQUEST['SSC_passing'];
$HSC_passing = $_REQUEST['HSC_passing'];
$F_of_study = $_REQUEST['F_of_study'];
$First_friend = $_REQUEST['First_friend'];
$Second_friend = $_REQUEST['Second_friend'];
$Third_friend = $_REQUEST['Third_friend'];
$Fourth_friend = $_REQUEST['Fourth_friend'];
$Fifth_friend = $_REQUEST['Fifth_friend'];
$Sixth_friend = $_REQUEST['Sixth_friend'];
$Profile_picture = $_REQUEST['Profile_picture'];
$School_picture = $_REQUEST['School_picture'];
$Currently_in_employment = $_REQUEST['Currently_in_employment'];
$Job_title = $_REQUEST['Job_title'];
$Company_name = $_REQUEST['Company_name'];
$Company_address = $_REQUEST['Company_address'];
$About_me = $_REQUEST['About_me'];
$Alumni_e_newsletter = $_REQUEST['Alumni_e_newsletter'];
$Employment_information = $_REQUEST['Employment_information'];
$GMHSC_trust = $_REQUEST['GMHSC_trust'];
$Financial_hardship= $_REQUEST['Financial_hardship'];
$Scholarship_scheme = $_REQUEST['Scholarship_scheme'];

$user_name_temp = explode('@',$Email);
$user_name = $user_name_temp[0];
$password = $user_name_temp[0];
//Creating a user
$user_id = username_exists( $user_name );
if ( !$user_id and email_exists($Email) == false ) {
    $user_id = wp_create_user( $user_name, $password, $Email );
    if($user_id){
        //Updating user data
        wp_update_user(
            array(
                'ID'          =>    $user_id,
                'first_name'    =>    $Name
            )
        );
        //Updating user meta
        update_user_meta($user_id,'father',$Father);
        update_user_meta($user_id,'blood',$Blood);
        update_user_meta($user_id,'hobby',$Hobby);
        //update_user_meta($user_id,'email',$Email);
        update_user_meta($user_id,'telephone',$Telephone);
        update_user_meta($user_id,'mobile',$Mobile);
        update_user_meta($user_id,'current_address',$Current_Address);
        update_user_meta($user_id,'address_in_bangladesh',$Address_In_Bangladesh);
        update_user_meta($user_id,'starting_school',$Starting_school);
        update_user_meta($user_id,'ending_school',$Ending_school);
        update_user_meta($user_id,'ssc_passing',$SSC_passing);
        update_user_meta($user_id,'hsc_passing',$HSC_passing);
        update_user_meta($user_id,'f_of_study',$F_of_study);
        update_user_meta($user_id,'first_friend',$First_friend);
        update_user_meta($user_id,'second_friend',$Second_friend);
        update_user_meta($user_id,'third_friend',$Third_friend);
        update_user_meta($user_id,'fourth_friend',$Fourth_friend);
        update_user_meta($user_id,'fifth_friend',$Fifth_friend);
        update_user_meta($user_id,'sixth_friend',$Sixth_friend);
        update_user_meta($user_id,'profile_picture',$Profile_picture);
        update_user_meta($user_id,'school_picture',$School_picture);
        update_user_meta($user_id,'currently_in_employment',$Currently_in_employment);
        update_user_meta($user_id,'job_title',$Job_title);
        update_user_meta($user_id,'company_name',$Company_name);
        update_user_meta($user_id,'company_address',$Company_address);
        update_user_meta($user_id,'about_me',$About_me);
        update_user_meta($user_id,'alumni_e_newsletter',$Alumni_e_newsletter);
        update_user_meta($user_id,'employment_information',$Employment_information);
        update_user_meta($user_id,'gmhsc_trust',$GMHSC_trust);
        update_user_meta($user_id,'financial_hardship',$Financial_hardship);
        update_user_meta($user_id,'scholarship_scheme',$Scholarship_scheme);

/**
* image gallery create code start
 */

        global $wpdb;
        $tablename = $wpdb->prefix."terms";
        $query=$wpdb->get_results("SELECT * FROM $tablename WHERE name = '".$SSC_passing."'");
        if ($query == null) {
        $wp_terms_table = $wpdb->prefix . "terms";
        $terms_saveFieldArray=array( 
        'name' => $SSC_passing,
        'slug'=>$SSC_passing);

        //Insert Into Database
        $results=$wpdb->insert( $wp_terms_table, $terms_saveFieldArray);

        $lastInsertId = $wpdb->insert_id;
        // echo $lastInsertId . "one";
            if($results == 1){
                // echo $lastInsertId . "two";
                $wp_term_taxonomy_table = $wpdb->prefix . "term_taxonomy";
                $taxonomy_saveFieldArray=array( 
                'term_id' =>$lastInsertId,
                'taxonomy'=>'upg_cate');

                //Insert Into Database
                $wpdb->insert( $wp_term_taxonomy_table, $taxonomy_saveFieldArray);

            }
        
        }

        

/**
* image gallery create code end
 */

        //Code for email
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $subj = 'Welcome to Gm-HSC';
        $body = "Welcome to GM-HSC Alumni Associaltion<br />Login : ".get_site_url()."/wp-login.php<br />Username : ".$user_name."<br />Password: ".$password;
        wp_mail( $Email, $subj, $body , $headers );
        echo '<br><div class="container bg-success" style="padding:10px;"><h2 class="text-center">Thank you for the registration , <span class="text-primary">Please check your email</span></h2></div>';
    }
    else
    {
        echo '<div class="container"><h1>Your Email already exist</h1></div>';
    }
} else
{
    echo '<div class="container"><h1>Your Email already exist</h1></div>';
}

get_footer();
