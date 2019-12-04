<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title; ?> </title>
    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
	<link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="assets/vendors/normalize-css/normalize.css" rel="stylesheet">
	<!-- Font Awesome W3School -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- NProgress -->
	<link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <link href="assets/build/css/style.css" rel="stylesheet">
    <style>
    @media (min-width: 992px) {
        footer {
            margin-left: 0px;
        }
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="page-title">
            <div class="text_center">
                <h3>Teaching Staff Recuritment</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- page content -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <!-- Nav tabs -->
                        <div class="row">
                            <div class="col-lg-10 offset-2">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <span class="nav-link active" data-toggle="tab" href="#personal">
                                            <i class='fa fa-user' aria-hidden="true"></i>
                                        </span>
									</li>
									<li class="nav-item">
                                        <span class="nav-link" data-toggle="tab" href="#communication">
										<i class="fa fa-address-book"></i>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link" data-toggle="tab" href="#education">
                                            <i class='fa fa-graduation-cap' aria-hidden="true"></i>
                                        </span>
                                    </li>
                                    <li class="nav-item">
                                        <span class="nav-link" data-toggle="tab" href="#eperience">
                                            <i class='fa fa-briefcase' aria-hidden="true"></i>
										</span>
									</li>
									<li class="nav-item">
                                        <span class="nav-link" data-toggle="tab" href="#menu3">
                                            <i class='fa fa-trophy' aria-hidden="true"></i>
									</span>
									</li>
									<li class="nav-item">
                                        <span class="nav-link" data-toggle="tab" href="#menu4">
                                            <i class='fa fa-history' aria-hidden="true"></i>
									</span>
                                    </li>
                                </ul>
                            </div>                     
							
						</div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="container mt-1">
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="personal" class="container tab-pane active">
											<h3>Personal Information</h3>
											<hr/>
											<form class="form-label-left input_mask">
											   <div class='row'>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="fname" placeholder="First Name" required="required"/>
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="lname" name='lname' placeholder="Last Name" required="required"/>
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 input-group date has-feedback required" id='myDatepicker2'>
														<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Data of birth" required="required"/>
														<div class="input-group-addon"><span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span></div>
													</div>
													<div class="col-md-3 col-sm-3 form-group has-feedback required" style='margin-top: 7px;'>
														<span class="col-md-3 col-sm-3 control-label">Gender</span>
														<input type="radio" value="Male" id="male" class='form-control1' name="optionsRadios" checked> Male	
                                                        <input type="radio" value="Female" id="female" class='form-control1' name="optionsRadios"> Female                                                        
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 form-group has-feedback required">
                                                    <select class="form-control" tabindex="-1">
																<option>----- Married Status -----</option>
																<option value="Married">Married</option>
																<option value="Un-Married">Un-Married</option>																																
															</select>														
                                                    </div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email" required="required"/>
														<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="inputSuccess5" maxlength="10" placeholder="+91">
														<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="f_h_name" name='f_h_name' maxlength="10" placeholder="Father's/Husband Name">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation' placeholder="Father's/Husband Cccupation">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation' placeholder="Nationality">
														<span class="fa fa-flag form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation'  placeholder="Religion">
														<span class="fa fa-vihara form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
															<select class="form-control has-feedback-left" tabindex="-1">
																<option>----- Select Community -----</option>
																<option value="OC">OC</option>
																<option value="BC">BC</option>
																<option value="MBC">MBC</option>
																<option value="SC">SC</option>
																<option value="ST">ST</option>
																<option value="PH">PH</option>																
															</select>
														<span class="fa fa-bookmark form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation' maxlength="10"  placeholder="Caste">
														<span class="far fa-circle form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation' maxlength="10"  placeholder="Mother Tonque">
														<span class="fa fa-volume-up form-control-feedback left" aria-hidden="true"></span>
													</div>
													<div class="col-md-6 col-sm-6 form-group has-feedback required">
														<input type="text" class="form-control has-feedback-left" id="occupation" name='occupation' maxlength="10"  placeholder="Native Place">
														<span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>												
													<div class="ln_solid"></div>
													<div class="form-group row">
														<div class="col-md-9 col-sm-9">
														<!-- <button type="button" class="btn btn-primary">Cancel</button>
														<button class="btn btn-primary" type="reset">Reset</button> -->
														<button type="submit" data-toggle="tab" href="#communication" class="btn btn-success">Next</button>
														</div>
													</div> 
                    						</form>                                            
                                        </div>
                                        <div id="communication" class="container tab-pane fade">
                                            <h3>Communication Information</h3><hr/>

                                            <form class="form-label-left input_mask" name="commun_form">
											   <div class='row'>
                                               <div class="col-lg-6">
                                               <h5><u>Present Address</u></h5>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" name='phone' id="phone" maxlength="10" placeholder="+91">
														<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
													</div>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" id="street_add" name='street_add' placeholder="Street address">
														<span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
													</div>                                               													
													<div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='city' name='city'>
																<option>----- Select City -----</option>
																<option value="Erode">Erode</option>
																<option value="Salem">Salem</option>
																<option value="Dharmapuri">Dharmapuri</option>																
															</select>														    
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='state' name='state'>
																<option>----- Select State -----</option>
																<option value="Tamilnadu">Tamilnadu</option>
																<option value="Kerala">Kerala</option>
																<option value="Karnataka">Karnataka</option>																
															</select>														
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='country' name='country' disabled>
																<option>----- Select Country -----</option>
																<option value="India" selected>India</option>																
															</select>														
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" id="pin" name='pin' maxlength="6"  placeholder="PIN">
														<span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
													</div>  
                                                    <div class="col-md-8 col-sm-8 form-group">                                                        
                                                        <span class='error'></span>		
                                                    <label class="col-md-8 col-sm-8 control-label">Same present address as permanent address?</label>
                                                        <input type="checkbox" class="form-control" id="copy_address" name='copy_address'>                                                        												
													</div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <h5><u>Permanent Address</u></h5> 
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" name='phone2' id="phone2" maxlength="10" placeholder="+91">
														<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
													</div>                                                   
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" id="street_add2" name='street_add2' placeholder="Street address">
														<span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
													</div>                                               													
													<div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='city2' name='city2'>
																<option>----- Select City -----</option>
																<option value="Erode">Erode</option>
																<option value="Salem">Salem</option>
																<option value="Dharmapuri">Dharmapuri</option>																
															</select>														    
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='state2' name='state2'>
																<option>----- Select State -----</option>
																<option value="Tamilnadu">Tamilnadu</option>
																<option value="Kerala">Kerala</option>
																<option value="Karnataka">Karnataka</option>																
															</select>														
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 form-group has-feedback">
															<select class="form-control has-feedback-left" id='country2' name='country2' disabled>
																<option>----- Select Country -----</option>
																<option value="India" selected>India</option>																
															</select>														
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 form-group has-feedback">
														<input type="text" class="form-control has-feedback-left" id="pin2" name='pin2' maxlength="6"  placeholder="PIN">
														<span class="fa fa-map-marker-alt form-control-feedback left" aria-hidden="true"></span>
													</div>  
                                                    </div>
                                                </div>
                                                    <div class="ln_solid"></div>
													<div class="form-group row">
														<div class="col-md-9 col-sm-9">
														<!-- <button type="button" class="btn btn-primary">Cancel</button>
														<button class="btn btn-primary" type="reset">Reset</button> -->
														<button type="submit" data-toggle="tab" id="communication" class="btn btn-success">Next</button>
														</div>
													</div>                                                
                                            </form>
                                        </div>
                                        <div id="education" class="container tab-pane fade">
                                            <h3>Education Information</h3>
                                            <hr/>
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
                                                <th> Remove </th>
                                                <thead>
                                                <tbody>
                                                <form class="form-inline" role="form" id="educationFrm" action="<?php echo base_url() ?>create" method="POST">
                                                    <tr class="txtMult1">
                                                        <td><span></span></td>
                                                        <td><input type="text" name="college[]" class="form-control val2" id="college" placeholder="Enter College"></td>
                                                        <td><input type="text" name="university[]" id="university" class="form-control val3" placeholder="Enter University"/></td>
                                                        <td><input type="text" name="designation[]" id="designation" class="form-control val4" placeholder="Enter Designation" /></td>
                                                        <td><input type="text" name="doj[]" id='doj' class="form-control val5" placeholder="YYYY/MM/DD"/></td>
                                                        <td><input type="text" name="dol[]" id="dol" class="form-control val6" placeholder="YYYY/MM/DD"/></td>
                                                        <td><input type="text" name="yoj[]" id="yoj" class="form-control val7" placeholder="YYYY/MM/DD"/></td> 
                                                        <td><input type="text" name="perc[]" id="perc" class="form-control val8" placeholder="%" style="width:50px;"/></td> 
                                                                                                                
                                                    </tr>
                                                </tbody>
                                             </table>
                                                <div class="form-group">
                                                    <input type="submit" id="create_data" class="btn btn-success" id="btn btn-success" value="Next">
                                                </div>                                                
                                            </form>
                                            <div class='text-center add-row'>                                                
                                                    <button id="insert-more1" class="btn btn-sm btn-info float-right" type="">Add Row</button>
                                            </div>
                                            
                                        </div>
                                        <div id="eperience" class="container tab-pane fade">
                                            <h3>Teaching Experience Information</h3><hr/>
                                            <table class="table table-bordered table-striped" id="add_row2">
                                                    <thead>
                                                    <th>S.No</th>
                                                    <th>College</th> 
                                                    <th>Affiliated University</th>
                                                    <th>Designation</th>
                                                    <th>Date of Joining</th>
                                                    <th>Date of Leaving</th>
                                                    <th>Total Experience</th>
                                                    <thead>
                                                    <tbody>
                                                    <form class="form-inline" role="form" id="experienceFrm" action="<?php echo base_url() ?>create" method="POST">
                                                        <tr class="txtMult2">
                                                            <td><input type="text" name="exp_id[]" class="form-control val1" id="exp_id" placeholder="" style="width:50px;" ></td>
                                                            <td><input type="text" name="college[]" class="form-control val2" id="college" placeholder="Enter College"></td>
                                                            <td><input type="text" name="university[]" id="university" class="form-control val3" placeholder="Enter University"/></td>
                                                            <td><input type="text" name="designation[]" id="designation" class="form-control val4" placeholder="Enter Designation" /></td>
                                                            <td><input type="text" name="doj[]" id='doj' class="form-control val5" placeholder="YYYY/MM/DD"/></td>
                                                            <td><input type="text" name="dol[]" id="dol" class="form-control val6" placeholder="YYYY/MM/DD"/></td>
                                                            <td><input type="text"name="tot_exp[]" id="tot_exp" class="form-control val7" placeholder="YYYY/MM/DD"/></td>                                                        
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                    <div class="form-group">
                                                        <input type="submit" id="create_data" class="btn btn-success" id="btn btn-success" value="Next">
                                                    </div>                                                
                                                </form>
                                                <div class='text-center add-row'>                                                
                                                        <button id="insert-more2" class="btn btn-sm btn-info float-right" type="">Add Row</button>
                                                </div>
										</div>
										<div id="menu3" class="container tab-pane fade">
                                        <h3>Achievement Information</h3><hr/>
                                            <form class="form-label-left input_mask">
											   <div class='row'>													
													<div class="col-md-10 col-sm-10 form-group">
														<label class="col-md-4 col-sm-4 control-label">Whether SET/NET passed?</label>
														<input type="radio" value="Yes" id="male" class='form-control1' name="optionsRadios"> Yes	
                                                        <input type="radio" value="No" id="female" class='form-control1' name="optionsRadios"> No                                                        
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">No. of Articles published in National Journals</label>
														<select class="col-md-1 col-sm-1 form-control" id='nat_journals' name='nat_journals'>
																<option>----- Select -----</option>
																<option value="0" selected>0</option>
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
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">No. of Articles published in International Journals</label>
														<select class="col-md-1 col-sm-1 form-control" id='nat_journals' name='nat_journals'>
																<option>----- Select -----</option>
																<option value="0" selected>0</option>
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
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">No. of Confrences / Seminner Presentation</label>
														<select class="col-md-1 col-sm-1 form-control" id='nat_journals' name='nat_journals'>
																<option>----- Select -----</option>
																<option value="0" selected>0</option>
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
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">Books / Chapter - Published</label>
														<select class="col-md-1 col-sm-1 form-control" id='nat_journals' name='nat_journals'>
																<option>----- Select -----</option>
																<option value="0" selected>0</option>
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
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">Languages Known - specify</label>
														<input type="text" class="col-md-6 col-sm-6 form-control" id="street_add2" name='street_add2' placeholder="Enter languages">
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 form-group">
														<label class="col-md-4 col-sm-4 control-label">Proficiency in English</label>
														<input type="checkbox" value="Yes" id="male" class='form-control1' name="optionsRadios"> Read	
                                                        <input type="checkbox" value="No" id="female" class='form-control1' name="optionsRadios"> Speak
                                                        <input type="checkbox" value="No" id="female" class='form-control1' name="optionsRadios"> Write                                                        
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                        <label class="col-md-4 col-sm-4 control-label">Typing Lower / Higher in Tamil</label>
														<select class="col-md-2 col-sm-2 form-control" id='nat_journals' name='nat_journals'>
                                                                <option>----- Select -----</option>
                                                                <option value="Lower">Lower</option>
																<option value="Higher">Higher</option>								                                                               
															</select>														
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 form-group">
                                                    <label class="col-md-4 col-sm-4 control-label">Typing Lower / Higher in English</label>
														<select class="col-md-2 col-sm-2 form-control" id='nat_journals' name='nat_journals'>
                                                                <option>----- Select -----</option>
                                                                <option value="Lower">Lower</option>
																<option value="Higher">Higher</option>								                                                               
															</select>													
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
													<div class="form-group row">
														<div class="col-md-9 col-sm-9">
														<!-- <button type="button" class="btn btn-primary">Cancel</button>
														<button class="btn btn-primary" type="reset">Reset</button> -->
														<button type="submit" data-toggle="tab" id="communication" class="btn btn-success">Next</button>
														</div>
												</div>
                                            </form>
                                        </div>
										<div id="menu4" class="container tab-pane fade">
										<h3>Joining Information</h3><hr/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="text-center">
                 <a href="#">Mahendra College Institions</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>


    <!-- jQuery -->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
	<script src="assets/vendors/fastclick/lib/fastclick.js"></script>
	<script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="assets/vendors/moment/min/moment.min.js"></script>
    <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- validator -->
    <script src="assets/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
	<script src="assets/build/js/custom.min.js"></script>

	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	
	<script  type="text/javascript">
   	$(function () {
                $('#myDatepicker').datetimepicker();
    });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD-MM-YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

<script>
    //add rows
    $("#insert-more1").click(function () {
     $("#add_row1").each(function () {
         var tds = '<tr class="txtMult1">';
         jQuery.each($('tr:last td', this), function () {
             tds += '<td>' + $(this).html() + '</td>';
             //<td><button id="insert-more1" class="btn btn-sm btn-info float-right" type=""><i class='fa fa-close'></button></td>
         });
         tds += '</tr>';
         if ($('tbody', this).length > 0) {
             $('tbody', this).append(tds);
         } else {
             $(this).append(tds);
         }
     });
});

//add rows
$("#insert-more2").click(function () {
     $("#add_row2").each(function () {
         var tds = '<tr class="txtMult2">';
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
$("#education_table").on("keyup", ".txtMult input", multInputs);

//function for get total and grand total
function multInputs() {
    var mult = 0;
    $("tr.txtMult").each(function () {
        var val1 = $('.val1', this).val();
        var val2 = $('.val2', this).val();
        var val3 = $('.val3', this).val();
        var val4 = $('.val4', this).val();
         var total = (val1 * val2 ) + (val3 * val4);
        $('.multTotal',this).text(total);
        $('#txtmultTotal',this).val(total);
        mult += total;
    });
    $("#grandTotal").text(mult);
    $('#txtgrandTotal').val(mult);
}

$(document).ready(function (){
    
    //fill data
    var btnedit='';
    var btndelete = '';
        fillgrid();
        // add data
        $("#frmadd").submit(function (e){
            e.preventDefault();
            $("#loader").show();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url:url,
                type:'POST',
                data:data
            }).done(function (data){
                $("#response").html(data);
                $("#loader").hide();
                fillgrid();
            });
        });

});


function setAddress(){
    if($('#phone').val() != ''){
        $('.success').html('Sucessfully copied..');
     if($("#copy_address").is(":checked")) {
            $('#phone2').val($('#phone').val());
            $('#street_add2').val($('#street_add').val());
            $('#city2').val($('#city').val());
            $('#state2').val($('#state').val());
            $('#pin2').val($('#pin').val());
            $('#phone2').attr('disabled', 'disabled');
            $('#street_add2').attr('disabled', 'disabled');    
            $('#city2').attr('disabled', 'disabled');    
            $('#state2').attr('disabled', 'disabled');    
            $('#pin2').attr('disabled', 'disabled');
        } else {
            $('#phone2').removeAttr('disabled');
            $('#street_add2').removeAttr('disabled');
            $('#city2').removeAttr('disabled');   
            $('#state2').removeAttr('disabled');    
            $('#pin2').removeAttr('disabled');
        }
    }else{
      $('.error').html('Please fill the address first..??');
      $("#copy_address").prop("checked", false);
  }
}

$('#copy_address').click(function(){
  setAddress();
});
</script>

</body>

</html>