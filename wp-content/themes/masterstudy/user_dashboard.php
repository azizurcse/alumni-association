<?php

/*
Template Name: user_edit_dashboard
*/
if(isset($_POST['submit'])){
  if ( !empty( $_POST['Profile_picture'] ) )
  update_user_meta($user_id, 'profile_picture', esc_attr( $_POST['Profile_picture'] ) );

}
if(isset($_POST["submit"])){
  header("Refresh:0; url=http://localhost/gmhsc/user-profile/");
}
get_header();

$user_id = get_current_user_id();

$meta = get_user_meta($user_id);
$name = $meta['first_name'][0];
$Father = $meta['father'][0];
$Blood = $meta['blood'][0];
$Hobby = $meta['hobby'][0];
$Email = $meta['email'][0];
$Telephone = $meta['telephone'][0];
$Mobile = $meta['mobile'][0];
$Current_Address= $meta['current_address'][0];
$Address_In_Bangladesh = $meta['address_in_bangladesh'][0];
$Starting_school = $meta['starting_school'][0];
$Ending_school = $meta['ending_school'][0];
$SSC_passing = $meta['ssc_passing'][0];
$HSC_passing = $meta['hsc_passing'][0];
$F_of_study = $meta['f_of_study'][0];
$Five_classmates_name = $meta['five_classmates_name'][0];
$Profile_picture = $meta['profile_picture'][0];
$School_picture = $meta['school_picture'][0];
$Currently_in_employment = $meta['currently_in_employment'][0];
$Job_title = $meta['job_title'][0];
$Company_name = $meta['company_name'][0];
$Company_address = $meta['company_address'][0];
$Profile_picture = $meta['profile_picture'][0];
$Alumni_e_newsletter = $meta['alumni_e_newsletter'][0];
$Employment_information = $meta['employment_information'][0];
$GMHSC_trust = $meta['gmhsc_trust'][0];
$Financial_hardship = $meta['financial_hardship'][0];
$Scholarship_scheme = $meta['scholarship_scheme'][0];

?>

<div class="container">
  <h2>User Profile</h2>
  <form action="" method="post" enctype="multipart/form-data">

      <div class="row">
          <div class="col-md-12">
            <div class="col-md-6">
              
              <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="first_name" value="<?php echo $name;?>">
          </div>

          <div class="form-group">
            <label for="father">Father's Name:</label>
            <input type="text" class="form-control" id="father"  name="father" value="<?php echo $Father;?>">
          </div>

            <div class="form-group">
              <label for="father">Blood:</label>
              <input type="text" class="form-control" id="father" name="blood" value="<?php echo $Blood;?>">
            </div>
            
            <div class="form-group">
              <label for="father">Hobby:</label>
              <input type="text" class="form-control" id="father" name="hobby" value="<?php echo $Hobby;?>">
            </div>

            <div class="form-group">
              <label for="father">Telephone:</label>
              <input type="text" class="form-control" id="father" name="telephone" value="<?php echo $Telephone;?>">
            </div>
            
            <div class="form-group">
              <label for="father">Mobile:</label>
              <input type="text" class="form-control" id="father" name="mobile" value="<?php echo $Mobile;?>">
            </div>

             <div class="form-group">
              <label for="father">Current Address:</label>
              <input type="text" class="form-control" id="father" name="current_address" value="<?php echo $Current_Address;?>">
            </div>

            <div class="form-group">
              <label for="father">Address in Bangladesh:</label>
              <input type="text" class="form-control" id="father" name="address_in_bangladesh" value="<?php echo $Address_In_Bangladesh;?>">
            </div>

            <div class="form-group">
              <label for="father">Starting School:</label>
              <input type="text" class="form-control" id="father" name="starting_school" value="<?php echo $Starting_school;?>">
            </div>

            <div class="form-group">
              <label for="father">School Leaveing Year:</label>
              <input type="text" class="form-control" id="father" name="ending_school" value="<?php echo $Ending_school;?>">
            </div>

            <div class="form-group">
              <label for="father">SSC Passing Year:</label>
              <input type="text" class="form-control" id="father" name="ssc_passing" value="<?php echo $SSC_passing;?>">
            </div>

           
             <div class="form-group">
              <label for="father">HSC Passing Year:</label>
              <input type="text" class="form-control" id="father" name="hsc_passing" value="<?php echo $HSC_passing;?>">
            </div>


              </div>
              <div class="col-md-6">
                
                <div class="form-group">
              <label for="father">Job Title:</label>
              <input type="text" class="form-control" id="father" name="job_title" value="<?php echo $Job_title;?>">
            </div>

             <div class="form-group">
              <label for="father">Company Name:</label>
              <input type="text" class="form-control" id="father" name="company_name" value="<?php echo $Company_name;?>">
            </div>

            <div class="form-group">
              <label for="father">Company Address:</label>
              <input type="text" class="form-control" id="father" name="company_address" value="<?php echo $Company_address;?>">
            </div>

          <div class="form-group">
              <label for="father">profile Image:</label>
              <input type="file" class="form-control" id="father" name="Profile_picture" value="">
            </div>
            <!--image upload start-->

            <!--image upload stop-->


            <div class="form-group">
              <label for="father">Would You Like to Subscribe to our Alumni
                                                e-newsletter?:</label>

              <div class="radio">
                <label><input type="radio" class="form-control" id="father" name="alumni_e_newsletter" value="Yes" <?php echo ($Alumni_e_newsletter=='Yes')?"checked":"" ;?>>Yes</label>
              </div>
              <div class="radio">
                <label><input type="radio" class="form-control" id="father" name="alumni_e_newsletter" value="No" <?php echo ($Alumni_e_newsletter=='No')?"checked":"" ;?>>No</label>
              </div>

              <div class="form-group">
                <label for="father">Would You Like to be Contacted for Employment
                  Information?:</label>
                  <div class="radio">
                    <label> <input type="radio" class="form-control" id="father" name="employment_information" value="Yes" <?php echo ($Employment_information=='Yes')?"checked":"" ;?>>Yes</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" class="form-control" id="father" name="employment_information" value="No" <?php echo ($Employment_information=='No')?"checked":"" ;?>>No</label>
                  </div>

                </div>

              <div class="form-group">
                <label for="father">Would You Like to Receive Updates About the GMHSC Trust?:</label>
                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="gmhsc_trust" value="Yes" <?php echo ($GMHSC_trust=='Yes')?"checked":"" ;?>>Yes</label>
                </div>
                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="gmhsc_trust" value="No" <?php echo ($GMHSC_trust=='No')?"checked":"" ;?>>No</label>
                </div>

              </div>

              <div class="form-group">
                <label for="father">Would You be Willing to Support Current Students Who
                                                  Suffer Financial Hardship by Paying a Small Subscription Fee of Your
                                                  Choice?:</label>
                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="financial_hardship" value="Yes" <?php echo ($Financial_hardship=='Yes')?"checked":"" ;?>>Yes</label>
                </div>
                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="financial_hardship" value="No" <?php echo ($Financial_hardship=='No')?"checked":"" ;?>>No</label>
                </div>

              </div>


              <div class="form-group">
                <label for="father">Would You be Willing to Contribute GMHSC Students
                                                  Scholarship Scheme?:</label>

                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="scholarship_scheme" value="Yes" <?php echo ($Scholarship_scheme=='Yes')?"checked":"" ;?>>Yes</label>
                </div>
                <div class="radio">
                  <label><input type="radio" class="form-control" id="father" name="scholarship_scheme" value="No" <?php echo ($Scholarship_scheme=='No')?"checked":"" ;?>>No</label>
                </div>

              </div>

                
              </div>
            </div>
          </div>
      </div>
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>

</div>


<?php get_footer();


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

if ( !empty( $_POST['financial_hardship'] ) )
  update_user_meta($user_id, 'financial_hardship', esc_attr( $_POST['financial_hardship'] ) );





?>
