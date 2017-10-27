<?php
error_reporting(1);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['lid'];

$mailto = "srinivas@lanciussolutions.com";
$mailfrom = "harikanthnakka9@gmail.com";
$mailsubject = "Email Attch";
/* break description content every after 100 character. */


$sql = "SELECT * FROM service_form WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row['check_oil_level_condition'] == 0) {
	$check_oil_level_condition = nil; 
}
else {
	$check_oil_level_condition = $row['check_oil_level_condition'];	
}
if ($row['check_radiator_condition'] == 0) {
	$check_radiator_condition = nil; 
}
else {
	$check_radiator_condition = $row['check_radiator_condition'];	
}
if ($row['check_breather_clean'] == 0) {
	$check_breather_clean = nil; 
}
else {
	$check_breather_clean = $row['check_breather_clean'];	
}
if ($row['check_fuel_condition'] == 0) {
	$check_fuel_condition = nil; 
}
else {
	$check_fuel_condition = $row['check_fuel_condition'];	
}
if ($row['check_drive_belts_condition'] == 0) {
	$check_drive_belts_condition = nil; 
}
else {
	$check_drive_belts_condition = $row['check_drive_belts_condition'];	
}
if ($row['check_air_filters_clean'] == 0) {
	$check_air_filters_clean = nil; 
}
else {
	$check_air_filters_clean = $row['check_air_filters_clean'];	
}
if ($row['check_coolent_condition'] == 0) {
	$check_coolent_condition = nil; 
}
else {
	$check_coolent_condition = $row['check_coolent_condition'];	
}
if ($row['check_leakages'] == 0) {
	$check_leakages = nil; 
}
else {
	$check_leakages = $row['check_leakages'];	
}
if ($row['check_valve_injector'] == 0) {
	$check_valve_injector = nil; 
}
else {
	$check_valve_injector = $row['check_valve_injector'];	
}
if ($row['check_battery_condition'] == 0) {
	$check_battery_condition = nil; 
}
else {
	$check_battery_condition = $row['check_battery_condition'];	
}
if ($row['start_check_exhaust_smoke'] == 0) {
	$start_check_exhaust_smoke = nil; 
}
else {
	$start_check_exhaust_smoke = $row['start_check_exhaust_smoke'];	
}
if ($row['start_check_abnormal_sounds'] == 0) {
	$start_check_abnormal_sounds = nil; 
}
else {
	$start_check_abnormal_sounds = $row['start_check_abnormal_sounds'];	
}
if ($row['report_type'] == 'AMC REPORT') {
	$report_type = 'AMC REPORT'; 
}
else {
	$report_type = 'SERVICE REPORT'; 	
}
if ($row['visiting_type'] == 'Commissioning Visit') {
	$visit_type1 = 'Commissioning Visit'; 
}
elseif ($row['visiting_type'] == 'Paid Visit') {
	$visit_type1 = 'Paid Visit'; 
}
elseif ($row['visiting_type'] == 'Break Down Visit') {
	$visit_type1 = 'Break Down Visit'; 
}
else {
	$visit_type1 = 'AMC Visit'; 	
}
if ($row['visit_checklist_type'] == 'AMC VISIT CHECK LIST ') {
	$visit_checklist_type = 'AMC VISIT CHECK LIST '; 
}
else {
	$visit_checklist_type = 'SERVICE VISIT CHECK LIST '; 	
}

$content = '';


/* you css */

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

$content .= '<table>';

$content .= '<tr><div class="container-fluid bottom-margin">
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
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>REPORT TYPE:</h4>
                        </div>
                        <div class="col-sm-3">
                            <h5>'.$report_type.'</h5>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>SL.NO.</h5>
                                </div>
                                <div class="col-sm-8">
                                    <h5><input type="text" class="form-control" value="'.$row['sl_no'].'" readonly></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Customer Name:</h5>
                                </div>
                                <div class="col-sm-7">
                                    <h5><input type="text" class="form-control" value="'.$row['customer_name'].'" readonly></h5>
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
                                    value="'.$row['customer_date'].'" readonly ></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Person Name:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="text" class="form-control" value="'.$row['contact_person_name'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Email:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="email" class="form-control" value="'.$row['contact_email'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Cell:</h5>
                                </div>
                                <div class="col-sm-9">
                                    <h5><input type="text" class="form-control" value="'.$row['contact_mobile'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-2">
                            <h5>VISIT TYPE:</h5>
                        </div>
                        <div class="col-sm-3" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                <h5>'.$visit_type1.'</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ENG/Eqp Id:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$row['eng_eqp_id'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./MODEL:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['alt_model'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RATING/KVA:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['rating_kva'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ENG/SI.No:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$row['eng_sl_no'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./SI.No:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['alt_sl_no'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PANNEL/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['pannel_type'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                <h5>PM/DATE:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control" value="'.$row['pm_date'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PM/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['pm_type'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RUN/HRS:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['run_hrs'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>DATE OF INFORMED:</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker" value="'.$row['date_of_informed'].'"></h5>
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
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker2" value="'.$row['date_of_visit'].'"></h5>
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
                                    <h5><input type="text" class="form-control" value="'.$row['location'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4>Visit CHECK LIST TYPE : </h4>
                        </div>
                        <div class="col-sm-4">
                        <strong>'.$visit_checklist_type.'</strong>
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
                                    <h5><input type="text" class="form-control" value="'.$row['water_temp'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Fuel Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['fuel_pressure'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Oil Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['oil_pressure'].'"></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Battery chg</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['battery_change'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Speed/Freq</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['speed_freq'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in kw</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['load_in_kw'].'"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in AMPS</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['load_in_amps'].'"></h5>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Voltage</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control" value="'.$row['voltage'].'"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Oil level / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$check_oil_level_condition.'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Radiator all Houses/Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$check_radiator_condition.'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Breather / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$check_breather_clean.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Fuel / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p> '.$check_fuel_condition.'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Drive Belts / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p> '.$check_drive_belts_condition.'</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Air Filters / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$check_air_filters_clean.'</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                    <div class="col-sm-4" style="border-right:1px solid black">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check Coolent / Condition</h5>
                            </div>
                            <div class="col-sm-2">
                                <p> '.$check_coolent_condition.'</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="border-right:1px solid black">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check if any / Leakages</h5>
                            </div>
                            <div class="col-sm-2">
                                <p>'.$check_leakages.'</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check Valve Injector / Adjust</h5>
                            </div>
                            <div class="col-sm-2">
                                <p>'.$check_valve_injector.'</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Battery / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$check_battery_condition.'</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Exhaust Smoke / Limits</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p.'.$start_check_exhaust_smoke.'</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Abnormal Sounds/Observe</h5>
                                </div>
                                <div class="col-sm-2">
                                    <p>'.$start_check_abnormal_sounds.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>AMC VISIT CHECK LIST Comments if any:</h4>
                        </div>
                        <div class="col-sm-7">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >'.$row['amc_visit_check_list_comments'].'</textarea></h4>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>FAILURE DETAILS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$row['failure_details'].'</textarea></h4>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CAUSE OF FAILURE:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$row['cause_of_failure'].'</textarea></h4>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>WORK CARRIED OUT:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$row['work_carried_out'].'</textarea></h4>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CUSTOMER COMMENTS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here..">'.$row['customer_comments'].'</textarea></h4>
                        </div>
                    </div>
                </div></tr>';
$content .= '<tr><div class="container-fluid bottom-margin" style="border-bottom:0px">
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
                    
                </div></tr>';

$content .= '</table>';
//echo $content; die;

require_once('html2pdf/html2pdf.class.php');


$html2pdf = new HTML2PDF('P', 'A4', 'fr');

$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));

$html2pdf = new HTML2PDF('P', 'A4', 'fr');
$html2pdf->WriteHTML($content);


$to = $mailto;
$from = $mailfrom;
$subject = $mailsubject;

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

    echo $msgsuccess = 'Mail Send Successfully'; die;
} else {

    $msgerror = 'Main not send';
}
?>