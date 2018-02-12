<?php
/**
 * Template Name: Edit Profile
 *
 */

get_header();

?>
    <div class="stm_single_post">
        <div class="s_profile">
            <?php
            $user_id = get_current_user_id();
            if (isset($_GET['alumni-edit'])) {
                $name = $_GET['name'];
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
                $Five_classmates_name = $_REQUEST['Five_classmates_name'];
                $Profile_picture = $_REQUEST['Profile_picture'];
                $School_picture = $_REQUEST['School_picture'];
                $Currently_in_employment = $_REQUEST['Currently_in_employment'];
                $Job_title = $_REQUEST['Job_title'];
                $Company_name = $_REQUEST['Company_name'];
                $Company_address = $_REQUEST['Company_address'];
                $Alumni_e_newsletter = $_REQUEST['Alumni_e_newsletter'];
                $Employment_information = $_REQUEST['Employment_information'];
                $GMHSC_trust = $_REQUEST['GMHSC_trust'];
                $Financial_hardship= $_REQUEST['Financial_hardship'];
                $Scholarship_scheme = $_REQUEST['Scholarship_scheme'];
                //Updating intoDB
                update_user_meta($user_id,'name',$name);
                update_user_meta($user_id,'father',$Father);
                update_user_meta($user_id,'blood',$Blood);
                update_user_meta($user_id,'hobby',$Hobby);
                update_user_meta($user_id,'telephone',$Telephone);
                update_user_meta($user_id,'mobile',$Mobile);
                update_user_meta($user_id,'current_address',$Current_Address);
                update_user_meta($user_id,'address_in_bangladesh',$Address_In_Bangladesh);
                update_user_meta($user_id,'starting_school',$Starting_school);
                update_user_meta($user_id,'ending_school',$Ending_school);
                update_user_meta($user_id,'ssc_passing',$SSC_passing);
                update_user_meta($user_id,'hsc_passing',$HSC_passing);
                update_user_meta($user_id,'f_of_study',$F_of_study);
                update_user_meta($user_id,'five_classmates_name',$Five_classmates_name);
                update_user_meta($user_id,'profile_picture',$Profile_picture);
                update_user_meta($user_id,'school_picture',$School_picture);
                update_user_meta($user_id,'currently_in_employment',$Currently_in_employment);
                update_user_meta($user_id,'job_title',$Job_title);
                update_user_meta($user_id,'company_name',$Company_name);
                update_user_meta($user_id,'company_address',$Company_address);
                update_user_meta($user_id,'alumni_e_newsletter',$Alumni_e_newsletter);
                update_user_meta($user_id,'employment_information',$Employment_information);
                update_user_meta($user_id,'gmhsc_trust',$GMHSC_trust);
                update_user_meta($user_id,'financial_hardship',$Financial_hardship);
                update_user_meta($user_id,'scholarship_scheme',$Scholarship_scheme);
            } else {
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
                $Alumni_e_newsletter = $meta['alumni_e_newsletter'][0];
                $Employment_information = $meta['employment_information'][0];
                $GMHSC_trust = $meta['gmhsc_trust'][0];
                $Financial_hardship = $meta['financial_hardship'][0];
                $Scholarship_scheme = $meta['scholarship_scheme'][0];
            }
            ?>
            <form id="edit_profile_form" method="get" action="http://localhost/gmhsc/api/edit_my_profile.php">
                <input type="hidden" name="alumni-edit">


                <div class="gform_body">
                    <div id="gform_page_4_1" class="gform_page">
                        <div class="gform_page_fields">
                            <ul id="gform_fields_4"
                                class="gform_fields top_label form_sublabel_below description_below">
                                <li id="field_4_4"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below">
                                    <h1>Personal Information</h1></li>
                                <li id="field_4_1"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_1">Name<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="name"
                                                                                               id="input_4_1"
                                                                                               type="text" value="<?php echo $name;?>"
                                                                                               class="medium"
                                                                                               tabindex="1"></div>
                                </li>
                                <li id="field_4_2"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_2">Father's Name<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Father"
                                                                                               id="input_4_2"
                                                                                               type="text" value="<?php echo $Father;?>"
                                                                                               class="medium"
                                                                                               tabindex="2"></div>
                                </li>
                                <li id="field_4_3"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_3">Blood Group<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Blood"
                                                                                               id="input_4_3"
                                                                                               type="text" value="<?php echo $Blood;?>"
                                                                                               class="medium"
                                                                                               tabindex="3"></div>
                                </li>
                                <li id="field_4_5"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_5">Hobby<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Hobby"
                                                                                               id="input_4_5"
                                                                                               type="text" value="<?php echo $Hobby;?>"
                                                                                               class="medium"
                                                                                               tabindex="4"></div>
                                </li>
                                <li id="field_4_6"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_6">Email<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_email">
                                        <input name="Email" id="input_4_6" type="text" value="<?php echo $Email;?>" class="medium"
                                               tabindex="5">
                                    </div>
                                </li>
                                <li id="field_4_21"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_21">Telephone<span class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Telephone"
                                                                                               id="input_4_21"
                                                                                               type="text" value="<?php echo $Telephone;?>"
                                                                                               class="medium"
                                                                                               tabindex="6"></div>
                                </li>
                                <li id="field_4_8"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_8">Mobile<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Mobile"
                                                                                               id="input_4_8"
                                                                                               type="text" value="<?php echo $Mobile;?>"
                                                                                               class="medium"
                                                                                               tabindex="7"></div>
                                </li>
                                <li id="field_4_9"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_9">Current Address<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Current_Address"
                                                                                               id="input_4_9"
                                                                                               type="text" value="<?php echo $Current_Address;?>"
                                                                                               class="medium"
                                                                                               tabindex="8"></div>
                                </li>
                                <li id="field_4_10"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_10">Address in Bangladesh<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Address_In_Bangladesh"
                                                                                               id="input_4_10"
                                                                                               type="text" value="<?php echo $Address_In_Bangladesh;?>"
                                                                                               class="medium"
                                                                                               tabindex="9"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div id="gform_page_4_2" class="gform_page" style="display:block;">
                        <div class="gform_page_fields">
                            <ul id="gform_fields_4_2"
                                class="gform_fields top_label form_sublabel_below description_below">
                                <li id="field_4_12"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below">
                                    <h1>Alumni information</h1></li>
                                <li id="field_4_13"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_13">Starting Schooling Year<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Starting_school"
                                                                                               id="input_4_13"
                                                                                               type="text" value="<?php echo $Starting_school;?>"
                                                                                               class="medium"
                                                                                               tabindex="11"></div>
                                </li>
                                <li id="field_4_14"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_14">Ending Schooling Year<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="Ending_school"
                                                                                               id="input_4_14"
                                                                                               type="text" value="<?php echo $Ending_school;?>"
                                                                                               class="medium"
                                                                                               tabindex="12"></div>
                                </li>
                                <li id="field_4_15"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_15">SSC Passsing year<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="SSC_passing"
                                                                                               id="input_4_15"
                                                                                               type="text" value="<?php echo $SSC_passing;?>"
                                                                                               class="medium"
                                                                                               tabindex="13"></div>
                                </li>
                                <li id="field_4_16"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_16">HSC Passsing year<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_text"><input name="HSC_passing"
                                                                                               id="input_4_16"
                                                                                               type="text" value="<?php echo $HSC_passing;?>"
                                                                                               class="medium"
                                                                                               tabindex="14"></div>
                                </li>
                                <li id="field_4_17"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_17">Field of Study<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_select"><select name="F_of_study"
                                                                                                  id="input_4_17"
                                                                                                  class="medium gfield_select select2-hidden-accessible"
                                                                                                  tabindex="-1"
                                                                                                  aria-hidden="true">
                                            <option value="Science">Science</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Arts">Arts</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default"
                                                       dir="ltr" style="width: 100%;"><span class="selection"></span>
                                        </span>

                                    </div>
                                </li>
                                <li id="field_4_18" class="gfield field_sublabel_below field_description_below"><label
                                        class="gfield_label" for="input_4_18">Five best class mate’s name and number (if
                                        any)</label>

                                    <div class="ginput_container ginput_container_textarea">
                                        <textarea name="input_18" id="input_4_18" class="textarea medium" tabindex="16"
                                                  rows="10" cols="50"></textarea>
                                    </div>
                                </li>
                                <li id="field_4_19"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_19">Upload Your picture<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_fileupload"><input type="hidden"
                                                                                                     name="MAX_FILE_SIZE"
                                                                                                     value="<?php echo $Profile_picture;?>"><input
                                            name="Profile_picture" id="input_4_19" type="file" class="medium"
                                            aria-describedby="extensions_message" tabindex="17"><span
                                            id="extensions_message" class="screen-reader-text"></span></div>
                                </li>
                                <li id="field_4_35"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label" for="input_4_35">Upload Your School picture<span
                                            class="gfield_required"></span></label>

                                    <div class="ginput_container ginput_container_fileupload"><input type="hidden"
                                                                                                     name="MAX_FILE_SIZE"
                                                                                                     value="<?php echo $School_picture;?>"><input
                                            name="School_picture" id="input_4_35" type="file" class="medium"
                                            aria-describedby="extensions_message" tabindex="18"><span
                                            id="extensions_message" class="screen-reader-text"></span></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div id="gform_page_4_3" class="gform_page" style="display:block;">
                        <div class="gform_page_fields">
                            <ul id="gform_fields_4_3"
                                class="gform_fields top_label form_sublabel_below description_below">
                                <li id="field_4_23"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below">
                                    <h1>Current Employment</h1></li>
                                <li id="field_4_24" class="gfield field_sublabel_below field_description_below"><label
                                        class="gfield_label">Are You Currently in Employment?</label>

                                    <div class="ginput_container ginput_container_checkbox">
                                        <ul class="gfield_checkbox" id="input_4_24">
                                            <li class="gchoice_4_24_1">
                                                <input name="Currently_in_employment" type="checkbox"
                                                       value="Are You Currently in Employment?" id="choice_4_24_1"
                                                       tabindex="21" <?php if($Currently_in_employment)echo 'checked';?>>
                                                <label for="choice_4_24_1" id="label_4_24_1">Are You Currently in
                                                    Employment?</label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_4_25" class="gfield field_sublabel_below field_description_below"
                                    style="display: block;"><label class="gfield_label" for="input_4_25">Job
                                        Title</label>

                                    <div class="ginput_container ginput_container_text"><input name="Job_title"
                                                                                               id="input_4_25"
                                                                                               type="text" value="<?php echo $Job_title;?>"
                                                                                               class="medium"
                                                                                               tabindex="22"></div>
                                </li>
                                <li id="field_4_26" class="gfield field_sublabel_below field_description_below"
                                    style="display: block;"><label class="gfield_label" for="input_4_26">Company
                                        Name</label>

                                    <div class="ginput_container ginput_container_text"><input name="Company_name"
                                                                                               id="input_4_26"
                                                                                               type="text" value="<?php echo $Company_name;?>"
                                                                                               class="medium"
                                                                                               tabindex="23"></div>
                                </li>
                                <li id="field_4_27" class="gfield field_sublabel_below field_description_below"
                                    style="display: block;"><label class="gfield_label" for="input_4_27">Company
                                        Address</label>

                                    <div class="ginput_container ginput_container_text"><input name="Company_address"
                                                                                               id="input_4_27"
                                                                                               type="text" value="<?php echo $Company_address;?>"
                                                                                               class="medium"
                                                                                               tabindex="24"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div id="gform_page_4_4" class="gform_page" style="display:block;">
                        <div class="gform_page_fields">
                            <ul id="gform_fields_4_4"
                                class="gform_fields top_label form_sublabel_below description_below">
                                <li id="field_4_29"
                                    class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below">
                                    <h1>Welcome to GMHSC Alumni Association</h1></li>
                                <li id="field_4_30"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label">Would You Like to Subscribe to our Alumni
                                        e-newsletter?<span class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_radio">
                                        <ul class="gfield_radio" id="input_4_30">
                                            <li class="gchoice_4_30_0"><input name="input_30" type="radio" value="Yes"
                                                                              id="choice_4_30_0" tabindex="27"><label
                                                    for="choice_4_30_0" id="label_4_30_0">Yes</label></li>
                                            <li class="gchoice_4_30_1"><input name="input_30" type="radio" value="No"
                                                                              id="choice_4_30_1" tabindex="28"><label
                                                    for="choice_4_30_1" id="label_4_30_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_4_31"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label">Would You Like to be Contacted for Employment
                                        Information?<span class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_radio">
                                        <ul class="gfield_radio" id="input_4_31">
                                            <li class="gchoice_4_31_0"><input name="input_31" type="radio" value="Yes"
                                                                              id="choice_4_31_0" tabindex="29"><label
                                                    for="choice_4_31_0" id="label_4_31_0">Yes</label></li>
                                            <li class="gchoice_4_31_1"><input name="input_31" type="radio" value="No"
                                                                              id="choice_4_31_1" tabindex="30"><label
                                                    for="choice_4_31_1" id="label_4_31_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_4_32"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label">Would You Like to Receive Updates About the GMHSC Trust?<span
                                            class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_radio">
                                        <ul class="gfield_radio" id="input_4_32">
                                            <li class="gchoice_4_32_0"><input name="input_32" type="radio" value="Yes"
                                                                              id="choice_4_32_0" tabindex="31"><label
                                                    for="choice_4_32_0" id="label_4_32_0">Yes</label></li>
                                            <li class="gchoice_4_32_1"><input name="input_32" type="radio" value="No"
                                                                              id="choice_4_32_1" tabindex="32"><label
                                                    for="choice_4_32_1" id="label_4_32_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_4_33"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label">Would You be Willing to Support Current Students Who
                                        Suffer Financial Hardship by Paying a Small Subscription Fee of Your
                                        Choice?<span class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_radio">
                                        <ul class="gfield_radio" id="input_4_33">
                                            <li class="gchoice_4_33_0"><input name="input_33" type="radio" value="Yes"
                                                                              id="choice_4_33_0" tabindex="33"><label
                                                    for="choice_4_33_0" id="label_4_33_0">Yes</label></li>
                                            <li class="gchoice_4_33_1"><input name="input_33" type="radio" value="No"
                                                                              id="choice_4_33_1" tabindex="34"><label
                                                    for="choice_4_33_1" id="label_4_33_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                                <li id="field_4_34"
                                    class="gfield gfield_contains_required field_sublabel_below field_description_below">
                                    <label class="gfield_label">Would You be Willing to Contribute GMHSC Students
                                        Scholarship Scheme?<span class="gfield_required">*</span></label>

                                    <div class="ginput_container ginput_container_radio">
                                        <ul class="gfield_radio" id="input_4_34">
                                            <li class="gchoice_4_34_0"><input name="input_34" type="radio" value="Yes"
                                                                              id="choice_4_34_0" tabindex="35"><label
                                                    for="choice_4_34_0" id="label_4_34_0">Yes</label></li>
                                            <li class="gchoice_4_34_1"><input name="input_34" type="radio" value="No"
                                                                              id="choice_4_34_1" tabindex="36"><label
                                                    for="choice_4_34_1" id="label_4_34_1">No</label></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="gform_page_footer top_label">
                            <input type="submit" id="gform_submit_button_4" class="gform_button button" value="Submit" >

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php get_footer(); ?>