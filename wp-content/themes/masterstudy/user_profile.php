<?php

/*
Template Name: user_profile
*/
get_header();
echo "<h1 class='text-center text-success'>Student Alumni Book</h1><br>";

?>

<div class="stm_single_post">
  <div class="row">

    <div class="col-md-12 text-center">
      <table border="1" style="max-width:700px;margin: 0 auto;" class="table table-responsive">
        <tr class="bg-success">
         <th class="text-center text-primary">ssc passing year</th>
         <th class="text-center text-primary">hsc passing year</th>
         <th class="text-center text-primary">School leaving year</th>
       </tr>
       <tr border="1">
       <td>
        <?php

        global $wpdb;
        $result = $wpdb->get_results ("SELECT meta_value FROM `wp_usermeta` WHERE `meta_key`='ssc_passing' group by meta_value order by meta_value desc");
        foreach ( $result as $print )   {
          echo '
          
              <a href="http://localhost/gmhsc/details-user?foo='.$print->meta_value.'">'. $print->meta_value.'</a>
        <br>
        <hr/>
          ';
        }
        ?>
      </td> 

      <td>
        <?php

        global $wpdb;
        $results = $wpdb->get_results ("SELECT meta_value FROM `wp_usermeta` WHERE `meta_key`='hsc_passing' group by meta_value order by meta_value desc");
        foreach ( $results as $print )   {
          echo '
         
              <a href="http://localhost/gmhsc/hsc-details?foo='.$print->meta_value.'">'. $print->meta_value.'</a>
           <br>
           <hr/>
          ';
        }
        ?>
      </td>  

      <td>
        <?php

        global $wpdb;
        $results = $wpdb->get_results ("SELECT meta_value FROM `wp_usermeta` WHERE `meta_key`='ending_school' group by meta_value order by meta_value desc");
        foreach ( $results as $print )   {
          echo '
          
              <a href="http://localhost/gmhsc/school-leave-year?foo='.$print->meta_value.'">'. $print->meta_value.'</a>
            <br>
            <hr/>
          ';
        }
        ?>
      </td>      
      </tr>
    </table>


  </div>

</div>
</div>
<?php get_footer();?>


	

