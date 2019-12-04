<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='assets/build/css/recuritment.css' rel='stylesheet'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script src='assets/build/js/recuritment.js'></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
    <h1 class='mr-top'><strong>Teaching Staff Recruitment</strong></h1>
        <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">                
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <div id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="user"><strong>Check User</strong></li>
                                <li id="personal"><strong>Personal Information</strong></li>
                                <li id="communication"><strong>Communication Information</strong></li>
                                <li id="education"><strong>Education Information</strong></li>
                                <li id="experience"><strong>Experience Information</strong></li>
                                <li id="achivement"><strong>Achievements Information</strong></li>
                                <li id="joining"><strong>Joining Information</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <?php if($this->session->flashdata('added')){ ?>
                                <div class="alert alert-danger alert-dismissible col-lg-3 offset-md-4">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Error!</strong> <?php echo $this->session->flashdata('added'); ?>
                            </div>
                            <?php } ?>
                            <fieldset>
                                <form name='checkUser' action='' method='post'>
                                    <div class="form-card">
                                        <div class='offset-4'>
                                            <h2 class="fs-title">Check User</h2> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <span id='email_verify'></span>
                                                    <input type="email" id='email_id' name="email_id" class='form-control col-md-4' value='sureshsubramani1986@gmail.com' placeholder="Enter your e-mail" required />                                                    
                                                    <span id='mobile'></span>
                                                    <span id='phone_verify'></span> 
                                                    <input type="text" id='phone' name="phone_no" class='form-control col-md-4' value='8884074278' maxlength='10' placeholder="Enter your mobile no" required/>                                                     
                                                    <!-- <input type="text" style='display:none' id='base_url' name="base_url" value='<?php echo base_url();?>'/>                                                      -->
                                                </div> 
                                                <span class='col-md-4 error text-right'><span class='error'></span></span>                                                                                                                
                                            </div>
                                            <div class="row">
                                                    <div class="col-12">
                                                        <!-- <label class="col-3" for="captcha">Captcha <span class="required">*</span></label>-->
                                                        <!-- <div class="col-lg-2 col-md-2 col-sm-2">
                                                            <div class="g-recaptcha" data-sitekey="6LeYqMQUAAAAAN5ESVDHgxWRzZwT3UsbLlmWfVhc"></div>
                                                        </div> -->
                                                    </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </form>
                                <input type="button" name="next" id='checkUser' class="next action-button" value="NEXT" /> 
                            </fieldset>
                            <fieldset>
                                <form name='personalInfo' class='personalInfo' action='' method='post'>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> 
                                    <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" class='col-sm-5 col-md-5' id='personal_id' value="0" name="personal_id" />     
                                        <input type="text" class='col-sm-5 col-md-5' id='first_name' name="first_name" placeholder="First Name" required/> 
                                        <input type="text" class='col-sm-5 col-md-5' id='last_name' name="last_name" placeholder="Last Name" required/> 
                                    </div>                                                                     
                                    </div>
                                    <div class="row">
                                    <div class="col-12">
                                        <input type="text" class='col-sm-5 col-md-5' id='dob' name="dob" value='' placeholder="DOB" required/>  
                                        <label>Gender*</label>                                          
                                        <input type="radio" class='col-sm-1 col-md-1' id='gender' name="gender" value='Male' required/> Male
                                        <input type="radio" class='col-sm-1 col-md-1' id='gender' name="gender" value='Femail' required/> Female
                                        </div>
                                    </div>   
                                    <div class="row">
                                    <div class="col-12">
                                    <input type="text" class='col-sm-5 col-md-5' id='father_name' name="father_name" placeholder="Father/Husband Name" required/>
                                    <label>Married Status* :</label>
                                    <input type="radio" class='col-sm-1 col-md-1' id='married_status' name="married_status" value='Married' required/> Married
                                    <input type="radio" class='col-sm-1 col-md-1' id='married_status' name="married_status" value='Un-Married' required/> Un-Married
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class='col-sm-5 col-md-5' id='father_occupation' name="father_occupation" placeholder="Father/Husband Occupation" required/>
                                            <label>Nationality*</label>
                                            <input type="text" class='col-sm-1 col-md-1' id='nationality' name="nationality" value='' required/>
                                            <!-- <select class="list-dt" class='form-control' id='nationality' name='nationality' required>
                                                <option>Indian</option>
                                                <option value='Indian'>Indian</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class='col-sm-5 col-md-5' name='religion' id='religion' placeholder="Religion" required/>
                                            <label>Community*</label>
                                            <select class='list-dt' id='cummunity' name='cummunity' required>
                                                <option>---Select---</option>
                                                <option value="OC">OC</option>
                                                <option value="BC">BC</option>
												<option value="MBC">MBC</option>
												<option value="SC">SC</option>
												<option value="ST">ST</option>
												<option value="PH">PH</option>																	
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-12">
                                        <input type="test" class='col-sm-5 col-md-5' name="caste" id='caste' placeholder="Caste" required/>                                    
                                        <input type="text" class='col-sm-5 col-md-5' name="mother_tongue" id='mother_tongue' maxlength='10' placeholder="Mother Tonque" required/>
                                        </div>
                                    </div>                                          
                                    <div class="row">
                                        <div class="col-12">
                                        <input type="email" class='col-sm-5 col-md-5' name="email_id" id='personal_email_id' placeholder="Email Id" required/>                                    
                                        <input type="text" class='col-sm-5 col-md-5' name="phone_no" id='phone_no' maxlength='10' placeholder="Phone" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                        <input type="text" class='col-sm-5 col-md-5' id='native_place' name="native_place" placeholder="Native Place" required/>
                                        </div>
                                    </div>
                                    <div class="row" style='display:none;'>
                                        <div class="col-12">
                                            <label>Status</label>
                                            <select class="list-dt" class='form-control' id='status' name='status' required>
                                                <option>---Select---</option>
                                                <option value='1' selected>Active</option>
                                                <option value='0'>Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>                                
                                </form> 
                                <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                <input type="submit" name="next" id='personalInfo' class="next action-button" value="NEXT"   />                                
                                
                            </fieldset>
                            <fieldset>
                               <form name='communicationInfo' class='communicationInfo' action='' method='post'>
                                <div class="form-card">
                                    <h2 class="fs-title">Communication Information</h2>
                                    <div class='row'>
                                    <div class="col-lg-6">
                                    <h6><u>Present Address:</u></h6>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <input type="hidden" class='col-sm-5 col-md-5' id='per_com_id' value="0" name="per_com_id" />
                                                <input type="hidden" class='col-sm-5 col-md-5' id='type_of_address_1' value="0" name="type_of_address[]" /> 
                                                <input type="hidden" class='col-sm-5 col-md-5' id='com_id' value="0" name="com_id[]" />  
                                                <input type="text" class="form-control" name='phone_no[]' id="phone_no_1" maxlength="10" placeholder="Mobile Number">                                                
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="street_address_1" name='street_address[]'
                                                    placeholder="Street address">                                                
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='city_1' name='city[]'>
                                                    <option>----- Select City -----</option>
                                                    <option value="Erode">Erode</option>
                                                    <option value="Salem">Salem</option>
                                                    <option value="Dharmapuri">Dharmapuri</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='state_1' name='state[]'>
                                                    <option>----- Select State -----</option>
                                                    <option value="Tamilnadu">Tamilnadu</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='country_1' name='country[]' >
                                                    <option>----- Select Country -----</option>
                                                    <option value="India" selected>India</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                <input type="text" class="form-control" id="pin_no_1" name='pin_no[]' maxlength="6" placeholder="Pin Code">                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">                                                    
                                                    <label>Same present address as permanent address?*</label>
                                                    <span class='error'></span>
                                                    <input type="checkbox" class='col-1 form-control' id="copy_address" name='copy_address[]'>                                                    
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <h6><u>Permanent Address:</u></h6>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <input type="hidden" class='col-sm-5 col-md-5' id='com_id_2' value="0" name="com_id[]" /> 
                                                <input type="hidden" class='col-sm-5 col-md-5' id='type_of_address_2' value="0" name="type_of_address[]" /> 
                                                <input type="text" class="form-control" name='phone_no[]' id="phone_no_2" maxlength="10" placeholder="Alternate Mobile Number">                                                
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" id="street_address_2" name='street_address[]' placeholder="Street address">
                                                
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='city_2' name='city[]'>
                                                    <option>----- Select City -----</option>
                                                    <option value="Erode">Erode</option>
                                                    <option value="Salem">Salem</option>
                                                    <option value="Dharmapuri">Dharmapuri</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='state_2' name='state[]'>
                                                    <option>----- Select State -----</option>
                                                    <option value="Tamilnadu">Tamilnadu</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                </select>
                                            </div>
                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                <select class="form-control" id='country_2' name='country[]' >
                                                    <option>----- Select Country -----</option>
                                                    <option value="India" selected>India</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                <input type="text" class="form-control" id="pin_no_2" name='pin_no[]' maxlength="6" placeholder="Pin Code">
                                            </div>
                                        </div>
                                    </div>
                                    </div> 
                                    </form>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                    <input type="button" name="next" id='communicationInfo' class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <form name='educationInfo' class='educationInfo' action='' method='post'>
                                 <div class="form-card">
                                  <h2 class="fs-title">Education Information</h2>
                                    <div class='row'>
                                    <div class="col-lg-12">
                                    <table class="table table-bordered table-striped" id="add_row1">
                                        <thead>
                                                <th>S.No</th>
                                                <th>Degree</th> 
                                                <th>Subject</th>
                                                <th>College/University/Board</th>
                                                <th>Mode of Study (Regular/Correspondence)</th>
                                                <th>Affiliated University</th>
                                                <th>Year of Passing</th>
                                                <th> % </th>
                                                <thead>
                                                <tbody id='edu_fields'>
                                                <form class="form-inline" role="form" id="educationFrm" action="<?php echo base_url() ?>addEdu" method="POST">
                                                    <tr>
                                                        <td><span>1</span></td>
                                                        <td><input type="text" name="degree[]" id="degree" class="form-control val2" placeholder="Enter Degree"></td>
                                                        <td><input type="text" name="subject[]" id="subject" class="form-control val3" placeholder="Enter Subject"/></td>
                                                        <td><input type="text" name="college[]" id="college" class="form-control val4" placeholder="Enter College/University" /></td>
                                                        <td><input type="text" name="mos[]" id='mos' class="form-control val5" placeholder="Mode of Stydy"/></td>
                                                        <td><input type="text" name="aff_university[]" id="aff_university" class="form-control val6" placeholder="Affiliated University"/></td>
                                                        <td><input type="text" name="yop[]" id="yop" class="form-control val7" placeholder="YYYY"/></td> 
                                                        <td><input type="text" name="percentage[]" id="percentage" class="form-control val8" placeholder="%" style="width:50px;"/></td>                                                                                                                 
                                                    </tr>
                                                </tbody>
                                             </table>
                                             </form>
                                             <div class='text-center add-row'>                                                                                          
                                                <button class="btn btn-sm btn-info float-right" type="" onclick="edu_fields();">Add Row</button>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                </form>
                                <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                <input type="button" name="next" id='educationInfo' class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                <h2 class="fs-title">Experience Information</h2>
                                    <div class='row'>
                                    <div class="col-lg-12">
                                    <table class="table table-bordered table-striped">
                                                    <thead>
                                                    <th>S.No</th>
                                                    <th>College</th> 
                                                    <th>Affiliated University</th>
                                                    <th>Designation</th>
                                                    <th>Date of Joining</th>
                                                    <th>Date of Leaving</th>
                                                    <th>Total Experience</th>
                                                    <thead>
                                                    <form class="form-inline" role="form" id="experienceFrm" action="<?php echo base_url() ?>create" method="POST">
                                                    <tbody id='exp_fields'>                                                    
                                                        <tr>
                                                            <td>1.</td>
                                                            <td><input type="text" name="college[]" class="form-control val1" id="college" placeholder="Enter College"></td>
                                                            <td><input type="text" name="university[]" id="university" class="form-control val2" placeholder="Enter University"/></td>
                                                            <td><input type="text" name="designation[]" id="designation" class="form-control val3" placeholder="Enter Designation" /></td>
                                                            <td><input type="text" name="doj[]" id='doj' class="form-control val4" placeholder="YYYY/MM/DD"/></td>
                                                            <td><input type="text" name="dol[]" id="dol" class="form-control val5" placeholder="YYYY/MM/DD"/></td>
                                                            <td><input type="text"name="tot_exp[]" id="tot_exp" class="form-control val6" placeholder="YYYY/MM/DD"/></td>
                                                        </tr>                                                        
                                                    </tbody>
                                                    </form>
                                                </table> 
                                                <button class="btn btn-sm btn-info float-right" type="" onclick="exp_fields();">Add Row</button>                                                                                            
                                        </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> <input type="button" name="next" class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                              <div class="form-card">
                                <h2 class="fs-title">Achievements Information</h2>
                                    <div class='row'>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                    <div class="col-12">                                   
                                                        <label class='col-2'>Whether SET/NET passed?</label>
                                                        <input type="radio" value="Yes" id="set_net" name="set_net" class='col-1'> Yes
                                                        <input type="radio" value="No" id="set_net" name="set_net" class='col-1'> No
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-12">                                   
                                                        <label class="col-3">No. of Articles published in National Journals :</label>
                                                        <select class="list-dt" id='nat_journals' name='nat_journals'>
                                                                <option>----- Select -----</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                    </div>
                                            </div>                                            
                                            <div class="row">
                                                    <div class="col-12">                                   
                                                    <label class="col-3">No. of Articles published in International Journals :</label>
                                                        <select class="list-dt" id='int_journals' name='nat_journals'>
                                                                <option>----- Select -----</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-12">                                   
                                                    <label class="col-3">No. of Confrences / Seminner Presentation :</label>
                                                        <select class="list-dt" id='sem_journals' name='sem_journals'>
                                                                <option>----- Select -----</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">                                   
                                                    <label class="col-3">No. Books / Chapter - Published :</label>
                                                        <select class="list-dt" id='published_book' name='published_book'>
                                                                <option>----- Select -----</option>
                                                                <option value="0">0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                    </div>
                                            </div>                                            
                                            <div class="row">
                                                <div class="col-12">
                                                <label class="col-2">Languages Known - specify :</label>
                                                <input type="text" class="col-2" id="known_languages" name='known_languages' placeholder="Eg:- Tamil, English">
                                            </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="col-2">Proficiency in English :</label>
                                                    <input type="checkbox" value="Read" id="eng_read" name="eng_read" class='col-1 form-control1'> Read
                                                    <input type="checkbox" value="Speak" id="eng_speak"  name="eng_speak" class='col-1 form-control1'> Speak
                                                    <input type="checkbox" value="Write" id="eng_write" name="eng_write" class='col-1 form-control1'> Write
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="col-3">Typing Lower / Higher in Tamil :</label>
                                                    <select class="list-dt" id='typing_tamil' name='typing_tamil'>
                                                        <option>----- Select -----</option>
                                                        <option value="Lower">Lower</option>
                                                        <option value="Higher">Higher</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="col-3">Typing Lower / Higher in English :</label>
                                                    <select class="list-dt" id='typing_english' name='typing_english'>
                                                        <option>----- Select -----</option>
                                                        <option value="Lower">Lower</option>
                                                        <option value="Higher">Higher</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="col-2">Computer Knowledge :</label>
                                                    <select class="list-dt" id='comp_knowledge' name='comp_knowledge' required>
                                                        <option>----- Select -----</option>
                                                        <option value="Lower">Yes</option>
                                                        <option value="Higher">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> <input type="button" name="next" class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Joining Infromation</h2>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="col-2">Date of Joining :</label>
                                                <input type="text" class="col-2" id="date_of_joining" name='date_of_joining' placeholder="eg:- 15 Days">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="col-2">Current Salary in Month :</label>
                                                <input type="text" class="col-2" id="current_salary" name='current_salary' placeholder="Enter current salary">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="col-2">Expected Salary in Month :</label>
                                                <input type="text" class="col-2" id="expected_salary" name='expected_salary' placeholder="Enter expected salary">
                                            </div>
                                        </div>
                                </div>
                                <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> <input type="button" name="next" class="next action-button" value="NEXT" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully registered with us..</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

$("#personal").click(function() {
            var email_id = $("#first_name").val();
            var phone = $("#phone").val();
            if ($("#email_id").val().length >= 4 && $("#phone").val().length == 10) {
                $.ajax({
                    type: "POST",
                    url: "recruitment/check_user_exist",
                    data: {"email_id": email_id,"phone":phone},
                    success: function(res) {
                        alert(url); console.log(res);
                        if (res == "true") {
                            $("#email_verify").text("");
                        } else {
                            $("#email_verify").text("Already user taken, Please enter phone number then click next to do update..");
                        }
                    }
                });
            } else {
                $("#email_verify").text(""); /*css({ "background-image" "none" })*/
            }
    });

    // $("#phone").keyup(function() {
    //     alert($("#phone").val());
    //      //var email_id = $("#email_id").val();
    //         if ($("#phone").val().length == 10) {
    //             $.ajax({
    //                 type: "POST",
    //                 url: "<?php echo base_url();?>recruitment/check_phone_exist",
    //                 data: "mobile=" + $("#phone").val(),
    //                 success: function(res) {
    //                    // alert(res); console.log(res);
    //                     if (res == "true") {
    //                         $("#phone_verify").text("");
    //                     } else {
    //                         $("#phone_verify").text("Already user taken, Please enter phone number then click next..");
    //                         $("#mobile").text("");
    //                     }
    //                 }
    //             });
    //         } else {
    //             $("#phone_verify").text(""); /*css({ "background-image" "none" })*/
    //         }
    // });

    // //$("#checkUser").click(function () {
    //     $('#checkUser').submit(function(e){
    //         var captcha = $('.g-recaptcha-response').val();
    //         alert(captcha);
    //         var form = $(this);
    //         e.preventDefault();

    //         $.ajax({
    //             type: "POST",
    //             url: "<?php echo site_url('register_staff/personal_info'); ?>",
    //             data: form.serialize(), // <--- THIS IS THE CHANGE
    //             dataType: "html",
    //             success: function(data){
    //                 alert(data);
    //                 //console.log(data);
    //                 //$('#feed-container').prepend(data); 
    //                 // if(captcha)
    //                 //  window.location = "http://localhost/admin_staff/register_staff";  
    //                 // else
    //                 //  window.location = "http://localhost/admin_staff/register_staff";                
    //             },
    //             error: function() { alert("Error posting feed."); }
    //         });
    //     });
    // //});

    $("#phone").keyup(function() {
            if ($("#phone").val().length >= 1) {
                if (validatePhone('txtphone')) {
                    if ($("#phone").val().length < 10 || $("#phone").val().length > 10) {
                        $("#mobile").text("Enter a 10 digit number");
                    } else {
                        $("#mobile").text("Valid");
                    }
                } else {
                    $("#mobile").text("Enter the digits");
                }
            } else {
                $("#mobile").text("");
            }
            function validatePhone(txtPhone) {
                var filter = /^[0-9-+]+$/;
                if (filter.test($("#phone").val())) {
                    return true;
                } else {
                    return false;
                }
            }
        });


    var eduId = 1;
    function edu_fields(){    
        eduId++;
        var objTo = document.getElementById('edu_fields')
        var tableRow = document.createElement("tr");
        tableRow.setAttribute("class", "removeClassEdu_"+eduId);
        var rdiv = 'removeClassEdu_'+eduId;
        tableRow.innerHTML = '<td>'+ eduId +'</td>'+
                              '<td><input type="text" name="degree[]" class="form-control val2" id="degree" placeholder="Enter College"></td>' +
                              '<td><input type="text" name="subject[]" id="subject" class="form-control val3" placeholder="Enter University"/></td>' +
                              '<td><input type="text" name="college[]" id="designation" class="form-control val4" placeholder="Enter Designation" /></td>' +
                              '<td><input type="text" name="mos[]" id="mos" class="form-control val5" placeholder="Mode of Stydy"/></td>' +
                              '<td><input type="text" name="yop[]" id="yop" class="form-control val6" placeholder="Year of Passing"/></td>' +
                              '<td><input type="text" name="yoj[]" id="yoj" class="form-control val7" placeholder="YYYY"/></td>' +
                              '<td><input type="text" name="perc[]" id="perc" class="form-control val8" placeholder="%" style="width:50px;"/></td>' +
                            '<td><button class="btn btn-sm btn-danger" type="button" onclick="remove_edu_fields('+ eduId +');"> <span class="fa fa-trash" aria-hidden="true"></span> </button></td>';
        
        objTo.appendChild(tableRow)
    }

    function remove_edu_fields(eduId) {
        $('.removeClassEdu_'+eduId).remove();
    }

    var expId = 1;
    function exp_fields(){    
        expId++;
        var objTo = document.getElementById('exp_fields')
        var tableRow = document.createElement("tr");
        tableRow.setAttribute("class", "removeClassExp_"+expId);
        var rdiv = 'removeClassExp_'+expId;
        tableRow.innerHTML = '<td>'+ expId +'</td>'+
                            '<td><input type="text" name="college[]" class="form-control val2" id="college" placeholder="Enter College"></td>'+
                            '<td><input type="text" name="university[]" id="university" class="form-control val3" placeholder="Enter University"/></td>'+
                            '<td><input type="text" name="desg[]" id="designation" class="form-control val4" placeholder="Enter Designation" /></td>'+
                            '<td><input type="text" name="doj[]" id="doj" class="form-control val5" placeholder="YYYY/MM/DD"/></td>'+
                            '<td><input type="text" name="dol[]" id="dol" class="form-control val6" placeholder="YYYY/MM/DD"/></td>'+
                            '<td><input type="text"name="tot_exp[]" id="tot_exp" class="form-control val7" placeholder="YYYY/MM/DD"/></td>'+
                            '<td><button class="btn btn-sm btn-danger" type="button" onclick="remove_exp_fields('+ expId +');"> <span class="fa fa-trash" aria-hidden="true"></span> </button></td>';
        
        objTo.appendChild(tableRow)
    }

    function remove_exp_fields(rid) {
        $('.removeClassExp_'+rid).remove();
    }
    

     //add rows
     /*$("#insert-more_1").click(function () {
     $("#add_row1").each(function () {
         var tds = '<tr class="txtMult1">';
         jQuery.each($('tr:last td', this), function () {
             tds += '<td>' + $(this).html() + '</td>';
         });
         tds += '</tr>';
         if ($('tbody', this).length > 0) {
             $('tbody', this).append(tds);
         } else {
             $(this).append(tds);
         }
     });
});

$("#education_table").on("keyup", ".txtMult input", multInputs); */

</script>

</body>
</html>

    

