<?php
include "manage_webmaster/admin_includes/config.php";

       // echo "<pre>"; print_r($_POST); die;
      //If success
      $report_type = $_POST['report_type'];
      $sl_no = $_POST['sl_no'];
      $customer_name = $_POST['customer_name'];
      $c_date = date_create($_POST['customer_date']);      
      $customer_date = date_format($c_date,"Y-m-d");
      $contact_person_name = $_POST['contact_person_name'];                                 
      $contact_email = $_POST['contact_email'];
      $contact_mobile = $_POST['contact_mobile'];
      $visiting_type = $_POST['visiting_type'];
      $eng_eqp_id = $_POST['eng_eqp_id'];
      $alt_model = $_POST['alt_model'];
      $rating_kva = $_POST['rating_kva'];
      $eng_sl_no = $_POST['eng_sl_no'];
      $alt_sl_no = $_POST['alt_sl_no'];
      $pm_date = $_POST['pm_date'];
      $pm_type = $_POST['pm_type'];                                 
      $run_hrs = $_POST['run_hrs'];
      $date_inf = date_create($_POST['date_of_informed']);
      $date_of_informed = date_format($date_inf,"Y-m-d");

      $date_vsrt = date_create($_POST['date_of_visit']);
      $date_of_visit = date_format($date_vsrt,"Y-m-d");

      
      $location = $_POST['location'];
      $visit_checklist_type = $_POST['visit_checklist_type'];
      $water_temp = $_POST['water_temp'];
      $fuel_pressure = $_POST['fuel_pressure'];
      $oil_pressure = $_POST['oil_pressure'];
      $battery_change = $_POST['battery_change'];
      $speed_freq = $_POST['speed_freq'];
      $load_in_kw = $_POST['load_in_kw'];
      $load_in_amps = $_POST['load_in_amps'];
      $voltage = $_POST['voltage'];
      $amc_visit_check_list_comments = $_POST['amc_visit_check_list_comments'];
      $failure_details = $_POST['failure_details'];
      $cause_of_failure = $_POST['cause_of_failure'];
      $work_carried_out = $_POST['work_carried_out'];
      $customer_comments = $_POST['customer_comments'];

      //checkbox for AMC serivces
      $check_oil_level_condition = $_POST['check_oil_level_condition'];
      $check_radiator_condition = $_POST['check_radiator_condition'];
      $check_breather_clean = $_POST['check_breather_clean'];
      $check_fuel_condition = $_POST['check_fuel_condition'];
      $check_drive_belts_condition = $_POST['check_drive_belts_condition'];
      $check_air_filters_clean = $_POST['check_air_filters_clean'];
      $check_coolent_condition = $_POST['check_coolent_condition'];
      $check_leakages = $_POST['check_leakages'];
      $check_valve_injector = $_POST['check_valve_injector'];
      $check_battery_condition = $_POST['check_battery_condition'];
      $start_check_exhaust_smoke = $_POST['start_check_exhaust_smoke'];
      $start_check_abnormal_sounds = $_POST['start_check_abnormal_sounds'];
      //End checkbox list
      $created_at = date("Y-m-d h:i:s");

      $sql = "INSERT INTO service_form (`report_type`,`sl_no`,`customer_name`,`customer_date` ,`contact_person_name` ,`contact_email` , `contact_mobile`,`visiting_type` ,`eng_eqp_id` , `alt_model`, `rating_kva`, `eng_sl_no` ,`alt_sl_no` , `pm_date` , `pm_type` , `run_hrs` , `date_of_informed` ,`date_of_visit`,`location`,`visit_checklist_type`,`water_temp`,`fuel_pressure`,`oil_pressure`,`battery_change`,`speed_freq`,`load_in_kw`,`load_in_amps`,`voltage`,`amc_visit_check_list_comments`,`failure_details`,`cause_of_failure`,`work_carried_out`,`customer_comments`,`check_oil_level_condition`,`check_radiator_condition`,`check_breather_clean`,`check_fuel_condition`,`check_drive_belts_condition`,`check_air_filters_clean`,`check_coolent_condition`,`check_leakages`,`check_valve_injector`,`check_battery_condition`,`start_check_exhaust_smoke`,`start_check_abnormal_sounds`,`created_at`) VALUES ('$report_type','$sl_no','$customer_name','$customer_date','$contact_person_name','$contact_email','$contact_mobile','$visiting_type','$eng_eqp_id','$alt_model','$rating_kva','$eng_sl_no','$alt_sl_no','$pm_date','$pm_type','$run_hrs','$date_of_informed','$date_of_visit','$location','$visit_checklist_type','$water_temp','$fuel_pressure','$oil_pressure','$battery_change','$speed_freq','$load_in_kw','$load_in_amps','$voltage','$amc_visit_check_list_comments','$failure_details','$cause_of_failure','$work_carried_out','$customer_comments','$check_oil_level_condition','$check_radiator_condition','$check_breather_clean','$check_fuel_condition','$check_drive_belts_condition','$check_air_filters_clean','$check_coolent_condition','$check_leakages','$check_valve_injector','$check_battery_condition','$start_check_exhaust_smoke','$start_check_abnormal_sounds','$created_at')"; 
      $conn->query($sql);

     //Radio buttons 

     if(isset($_POST['report_type']) && $_POST['report_type'] == 'AMC REPORT') { 
        $report_type1 = 'checked=checked';
     } else {
        $report_type1 = "";
     }

     if(isset($_POST['report_type']) && $_POST['report_type'] == 'SERVICE REPORT') { 
        $report_type2 = 'checked=checked';
     } else {
        $report_type2 = "";
     }

     if(isset($_POST['visiting_type']) && $_POST['visiting_type'] == 'Commissioning Visit') { 
        $visit_type1 = 'checked=checked';
     } else {
        $visit_type1 = "";
     }

     if(isset($_POST['visiting_type']) && $_POST['visiting_type'] == 'Paid Visit') { 
        $visit_type2 = 'checked=checked';
     } else {
        $visit_type2 = "";
     }

     if(isset($_POST['visiting_type']) && $_POST['visiting_type'] == 'Break Down Visit') { 
        $visit_type3 = 'checked=checked';
     } else {
        $visit_type3 = "";
     }

     if(isset($_POST['visiting_type']) && $_POST['visiting_type'] == 'AMC Visit') { 
        $visit_type4 = 'checked=checked';
     } else {
        $visit_type4 = "";
     }

     //end here radio buttons
     
     //Check chebox conditions here
     if(isset($_POST['check_oil_level_condition']) && $_POST['check_oil_level_condition'] == 1) { 
        $check_oil_level_condition_check = 'checked=checked';
     } else {
        $check_oil_level_condition_check = "";
     }

     if(isset($_POST['check_radiator_condition']) && $_POST['check_radiator_condition'] == 1) { 
        $check_radiator_condition_check = 'checked=checked';
     } else {
        $check_radiator_condition_check = "";
     }

     if(isset($_POST['check_breather_clean']) && $_POST['check_breather_clean'] == 1) { 
        $check_breather_clean_check = 'checked=checked';
     } else {
        $check_breather_clean_check = "";
     }

     if(isset($_POST['check_fuel_condition']) && $_POST['check_fuel_condition'] == 1) { 
        $check_fuel_condition_check = 'checked=checked';
     } else {
        $check_fuel_condition_check = "";
     }

     if(isset($_POST['check_drive_belts_condition']) && $_POST['check_drive_belts_condition'] == 1) { 
        $check_drive_belts_condition_check = 'checked=checked';
     } else {
        $check_drive_belts_condition_check = "";
     }

     if(isset($_POST['check_air_filters_clean']) && $_POST['check_air_filters_clean'] == 1) { 
        $check_air_filters_clean_check = 'checked=checked';
     } else {
        $check_air_filters_clean_check = "";
     }

     if(isset($_POST['check_coolent_condition']) && $_POST['check_coolent_condition'] == 1) { 
        $check_coolent_condition_check = 'checked=checked';
     } else {
        $check_coolent_condition_check = "";
     }

     if(isset($_POST['check_leakages']) && $_POST['check_leakages'] == 1) { 
        $check_leakages_check = 'checked=checked';
     } else {
        $check_leakages_check = "";
     }

     if(isset($_POST['check_valve_injector']) && $_POST['check_valve_injector'] == 1) { 
        $check_valve_injector_check = 'checked=checked';
     } else {
        $check_valve_injector_check = "";
     }

     if(isset($_POST['check_battery_condition']) && $_POST['check_battery_condition'] == 1) { 
        $check_battery_condition_check = 'checked=checked';
     } else {
        $check_battery_condition_check = "";
     }

     if(isset($_POST['start_check_exhaust_smoke']) && $_POST['start_check_exhaust_smoke'] == 1) { 
        $start_check_exhaust_smoke_check = 'checked=checked';
     } else {
        $start_check_exhaust_smoke_check = "";
     }

     if(isset($_POST['start_check_abnormal_sounds']) && $_POST['start_check_abnormal_sounds'] == 1) { 
        $start_check_abnormal_sounds_check = 'checked=checked';
     } else {
        $start_check_abnormal_sounds_check = "";
     }
    

    $mailto = "srinivas@lanciussolutions.com";
    $mailfrom = "harikanthnakka9@gmail.com";
    $mailsubject = 'Test Subject';  


    $content = '';    

    $content .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
  body{
   overflow-x: hidden;
  }
  .border-div{
  border:2px solid black;
  margin: 10px 0;
  width:795px;
  }
   
   .bottom-margin{
  border-bottom: 1px solid black;
  }
  h3{
  font-weight:bold;
  color:#154360 !important;
  }
  h5{
  font-size:15px;
  font-weight:bold;
  color:#4c4c4c !important;
  }
  h4{
  font-weight:bold;
  color:#154360 !important;
  }
  h6{
  color:#b2b2b2;
  }
  .glyphicon-time{
  font-size:20px;
  margin-top:8px;
  text-align:right;
  }
  .btn-lg{
      background-color:#154360 !important;
  }
 </style>';
    
    
    $content .= '<div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h3>VGCS</h3>
                        </div>
                        <div class="col-sm-6">
                            <h3>VENUS GENIE CARE SERVICES</h3>
                        </div>
                        <div class="col-sm-3">
                            <h5>MOBILE: +91-98492575</h5>
                            <h5>E-mail: venugopal.7@hotmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>REPORT TYPE:</h4>
                        </div>
                        <div class="col-sm-3">
                            <h5>AMC REPORT <input type="radio" '.$report_type1.'></h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>SERVICE REPORT <input type="radio" '.$report_type2.'></h5>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>SL.NO.</h5>
                                </div>
                                <div class="col-sm-8">
                                    <h5><input type="text" class="form-control" value="'.$sl_no.'" readonly></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Customer Name:</h5>
                                </div>
                                <div class="col-sm-7">
                                    <h5><input type="text" class="form-control" value="'.$customer_name.'" readonly></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Date:</h5>
                                </div>
                                <div class="col-sm-9">
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker3" 
                                    value="'.$customer_date.'" readonly ></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Person Name:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="text" class="form-control" value="'.$contact_person_name.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Email:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="email" class="form-control" value="'.$contact_email.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Cell:</h5>
                                </div>
                                <div class="col-sm-9">
                                    <h5><input type="text" class="form-control" value="'.$contact_mobile.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-2">
                            <h5>VISIT TYPE:</h5>
                        </div>
                        <div class="col-sm-3" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                <h5>Commissioning Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                <h5><input type="radio" '.$visit_type1.'></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>Paid Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio" '.$visit_type2.'></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>Break Down Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio" '.$visit_type3.'></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-2" style="border-left:1px solid black ">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>AMC Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio" '.$visit_type4.'></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ENG/Eqp Id:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$eng_eqp_id.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./MODEL:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$alt_model.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RATING/KVA:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$rating_kva.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ENG/SI.No:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$eng_sl_no.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./SI.No:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$alt_sl_no.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PANNEL/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$eng_sl_no.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                <h5>PM/DATE:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$eng_sl_no.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PM/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$pm_type.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RUN/HRS:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$run_hrs.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>DATE OF INFORMED:</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker" value="'.$date_of_informed.'"></h5>
                                </div>
                                <div class="col-sm-2">
                                    <h5><span class="glyphicon glyphicon-time"></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>DATE OF VISIT:</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker2" value="'.$date_of_visit.'"></h5>
                                </div>
                                <div class="col-sm-2">
                                    <h5><span class="glyphicon glyphicon-time"></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>LOCATION:</h5>
                                </div>
                                <div class="col-sm-6"> 
                                    <h5><input type="text" class="form-control" value="'.$location.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4>AMC VISIT CHECK LIST <input type="radio" '.$report_type1.'></h4>
                        </div>
                        <div class="col-sm-4">
                            <h4>SERVICE VISIT CHECK LIST <input type="radio" '.$report_type2.'></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Water Temp</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$water_temp.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Fuel Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$fuel_pressure.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Oil Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$oil_pressure.'"></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Battery chg</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$battery_change.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
                
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Speed/Freq</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$speed_freq.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in kw</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$load_in_kw.'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in AMPS</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$load_in_amps.'"></h5>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Voltage</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$voltage.'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Oil level / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" value="'.$check_oil_level_condition_check.'">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Radiator all Houses/Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" value="'.$check_radiator_condition_check.'">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Breather / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" value="'.$check_breather_clean.'">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Fuel / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$check_fuel_condition_check.'>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Drive Belts / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$check_drive_belts_condition_check.'>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Air Filters / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$check_air_filters_clean_check.'>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                    <div class="col-sm-4" style="border-right:1px solid black">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check Coolent / Condition</h5>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" '.$check_coolent_condition_check.'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="border-right:1px solid black">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check if any / Leakages</h5>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" '.$check_leakages_check.'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check Valve Injector / Adjust</h5>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" '.$check_valve_injector_check.'>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Battery / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$check_battery_condition_check.'>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Exhaust Smoke / Limits</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$start_check_exhaust_smoke_check.'>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Abnormal Sounds/Observe</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" '.$start_check_abnormal_sounds_check.'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>AMC VISIT CHECK LIST Comments if any:</h4>
                        </div>
                        <div class="col-sm-7">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >'.$amc_visit_check_list_comments.'</textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>FAILURE DETAILS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$failure_details.'</textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CAUSE OF FAILURE:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$cause_of_failure.'</textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>WORK CARRIED OUT:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$work_carried_out.'</textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CUSTOMER COMMENTS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$customer_comments.'</textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin" style="border-bottom:0px">
                    <div class="row">
                        <div class="col-sm-8">
                            <h5>INCHARGE</h5>
                        </div>
                        <div class="col-sm-4">
                            <h5>SERVICE ENGINEER</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <h5>SIGNATURE</h5>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                        <h5>SIGNATURE</h5>
                        </div>                      
                    </div>
                    
                </div>';

    //echo $content; die;


    require_once('html2pdf/html2pdf.class.php');


    $to = $mailto;
    $from = $mailfrom;
    $subject = $mailsubject;

    $html2pdf = new HTML2PDF('P', 'A4', 'fr');

    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));

    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
    $html2pdf->WriteHTML($content);


    $message = "<p>Please see the attachment.</p>";
    $separator = md5(time());
    $eol = PHP_EOL;
    $filename = "pdf-document.pdf";
    $pdfdoc = $html2pdf->Output('', 'S');
    $attachment = chunk_split(base64_encode($pdfdoc));

    $headers = "From: " . $from . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;

    $body = '';

    $body .= "Content-Transfer-Encoding: 7bit" . $eol;
    $body .= "This is a MIME encoded message." . $eol; //had one more .$eol


    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
    $body .= $message . $eol;


    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol . $eol;
    $body .= $attachment . $eol;
    $body .= "--" . $separator . "--";

    if (mail($to, $subject, $body, $headers)) {

        echo $msgsuccess = 'Mail Send Successfully';
        //header('Location: thankyou.php');
    } else {

        $msgerror = 'Main not send';
    }
?>