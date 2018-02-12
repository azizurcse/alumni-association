
<?php
/**
 * Template Name: hsc_Alumni
 *
 */
get_header();


global $wp_query;
if (isset($wp_query->query_vars['foo']))
{
$year= $wp_query->query_vars['foo'];
}

echo "<h1 class='text-center text-success'>$year Year Alumni Book</h1><br>";

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">

             <!--this is php code start-->
            <?php
              $args = array(
                'role'         => 'subscriber',
                'fields'       => 'all',
                'meta_key' => 'hsc_passing',
                
                'meta_value' => $year
                );
              $users = get_users( $args );   
              foreach($users as $user){
                $id = $user->ID;
                $meta = get_user_meta($id);
                $profile_picture = urldecode($meta['profile_picture'][0]);
              echo '
             <div class="col-md-2 text-center">
                <img src="'.$profile_picture.'" class="img-circle" width="80px"> <br>
                <a href="http://localhost/gmhsc/user-information?id='.$id.'">'.$meta['first_name'][0].'</a><br>
                <label>2005-2007</label>
             </div>
            ';
              
          }
          ?>
            <!--this is php code end--> 
           
        </div>
    </div>
</div>
<?php get_footer();?>


