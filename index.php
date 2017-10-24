<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>
<?php  
  if (!isset($_POST['submit']))  {
      
  } else  {
      //If success
      $report_type = $_POST['report_type'];
      $sl_no = $_POST['sl_no'];
      $customer_name = $_POST['customer_name'];
      $customer_date = $_POST['customer_date'];
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
      $date_of_informed = $_POST['date_of_informed'];
      $date_of_visit = $_POST['date_of_visit'];
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
  
      $sql = "INSERT INTO service_form (`report_type`,`sl_no`,`customer_name`,`customer_date` ,`contact_person_name` ,`contact_email` , `contact_mobile`,`visiting_type` ,`eng_eqp_id` , `alt_model`, `rating_kva`, `eng_sl_no` ,`alt_sl_no` , `pm_date` , `pm_type` , `run_hrs` , `date_of_informed` ,`date_of_visit`,`location`,`visit_checklist_type`,`water_temp`,`fuel_pressure`,`oil_pressure`,`battery_change`,`speed_freq`,`load_in_kw`,`load_in_amps`,`voltage`,`amc_visit_check_list_comments`,`failure_details`,`cause_of_failure`,`work_carried_out`,`customer_comments`,`check_oil_level_condition`,`check_radiator_condition`,`check_breather_clean`,`check_fuel_condition`,`check_drive_belts_condition`,`check_air_filters_clean`,`check_coolent_condition`,`check_leakages`,`check_valve_injector`,`check_battery_condition`,`start_check_exhaust_smoke`,`start_check_abnormal_sounds`) VALUES ('$report_type','$sl_no','$customer_name','$customer_date','$contact_person_name','$contact_email','$contact_mobile','$visiting_type','$eng_eqp_id','$alt_model','$rating_kva','$eng_sl_no','$alt_sl_no','$pm_date','$pm_type','$run_hrs','$date_of_informed','$date_of_visit','$location','$visit_checklist_type','$water_temp','$fuel_pressure','$oil_pressure','$battery_change','$speed_freq','$load_in_kw','$load_in_amps','$voltage','$amc_visit_check_list_comments','$failure_details','$cause_of_failure','$work_carried_out','$customer_comments','$check_oil_level_condition','$check_radiator_condition','$check_breather_clean','$check_fuel_condition','$check_drive_belts_condition','$check_air_filters_clean','$check_coolent_condition','$check_leakages','$check_valve_injector','$check_battery_condition','$start_check_exhaust_smoke','$start_check_abnormal_sounds')"; die;


      if($conn->query($sql) === TRUE){
         echo "uploaded successfully";
      } else {
         echo "not uploaded successfully";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VENUS GENIE CARE SERVICES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<form method="post" action="">
		<div class="col-sm-12">
			<div class="border-div">
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<center><h3>VGCS</h3></center>
						</div>
						<div class="col-sm-6">
							<center><h3><?php echo $getSiteSettingsData['admin_title']; ?></h3></center>
						</div>
						<div class="col-sm-3">
							<h5>MOBILE: +91-<?php echo $getSiteSettingsData['mobile']; ?></h5>
							<h5>E-mail: <?php echo $getSiteSettingsData['email']; ?></h5>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>REPORT TYPE:</h4>
						</div>
						<div class="col-sm-3">
							<h5>AMC REPORT <input type="radio" name="report_type" value="AMC REPORT"></h5>
						</div>
						<div class="col-sm-3">
							<h5>SERVICE REPORT <input type="radio" name="report_type" value="SERVICE REPORT"></h5>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-4">
									<h5>SL.NO.</h5>
								</div>
								<div class="col-sm-8">
									<h5><input type="text" class="form-control" name="sl_no"></h5>
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
									<h5><input type="text" class="form-control" name="customer_name"></h5>
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
									<h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker3" name="customer_date" required></h5>
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
									<h5><input type="text" class="form-control" name="contact_person_name"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-5">
									<h5>Contact Email:</h5>
								</div>
								<div class="col-sm-7"> 
									<h5><input type="email" class="form-control" placeholder="E-mail id" name="contact_email"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-3">
									<h5>Cell:</h5>
								</div>
								<div class="col-sm-9">
									<h5><input type="text" class="form-control" name="contact_mobile" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)"></h5>
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
								<h5><input type="radio" name="visiting_type" value="Commissioning Visit"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-2" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-8">
									<h5>Paid Visit</h5>
								</div>
								<div class="col-sm-4">
									<h5><input type="radio" name="visiting_type" value="Paid Visit"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-8">
									<h5>Break Down Visit</h5>
								</div>
								<div class="col-sm-4">
									<h5><input type="radio" name="visiting_type" value="Break Down Visit"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-2" style="border-left:1px solid black ">
							<div class="row">
								<div class="col-sm-8">
									<h5>AMC Visit</h5>
								</div>
								<div class="col-sm-4">
									<h5><input type="radio" name="visiting_type" value="AMC Visit"></h5>
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
									<h5> <input type="text" class="form-control" name="eng_eqp_id"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="alt_model"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="rating_kva"></h5>
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
									<h5> <input type="text" class="form-control" name="eng_sl_no"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./SI.No:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="alt_sl_no"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>PANNEL/TYPE:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="pannel_type"></h5>
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
									<h5> <input type="text" class="form-control" name="pm_date"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>PM/TYPE:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="pm_type"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RUN/HRS:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="run_hrs"></h5>
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
									<h5><input class="form-control"placeholder="mm/dd/yyyy" name="date_of_informed" id="datepicker" required></h5>
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
									<h5><input class="form-control"placeholder="mm/dd/yyyy" name="date_of_visit" id="datepicker2" required></h5>
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
									<h5><input type="text" class="form-control" name="location"></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-8">
							<h4>AMC VISIT CHECK LIST <input type="radio" name="visit_checklist_type" value="AMC VISIT CHECK LIST"></h4>
						</div>
						<div class="col-sm-4">
							<h4>SERVICE VISIT CHECK LIST <input type="radio" name="visit_checklist_type" value="SERVICE VISIT CHECK LIST"></h4>
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
									<h5><input type="text" class="form-control" name="water_temp"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Fuel Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="fuel_pressure"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Oil Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="oil_pressure"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Battery chg</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="battery_change"></h5>
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
									<h5><input type="text" class="form-control" name="speed_freq"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in kw</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="load_in_kw"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in AMPS</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="load_in_amps"></h5>
								</div>
							</div>
						</div>
					<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Voltage</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="voltage"></h5>
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
									<input type="checkbox" name="check_oil_level_condition"  >
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Radiator all Houses/Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check_radiator_condition" >
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Breather / Clean</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check_breather_clean" >
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
									<input type="checkbox" name="check_fuel_condition" >
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Drive Belts / Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check_drive_belts_condition"  >
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Air Filters / Clean</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check_air_filters_clean"  >
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
								<input type="checkbox" name="check_coolent_condition" >
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="border-right:1px solid black">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check if any / Leakages</h5>
							</div>
							<div class="col-sm-2">
								<input type="checkbox" name="check_leakages" >
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check Valve Injector / Adjust</h5>
							</div>
							<div class="col-sm-2">
								<input type="checkbox" name="check_valve_injector"  >
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
									<input type="checkbox" name="check_battery_condition" >
								</div>
							</div>
						</div>

						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Exhaust Smoke / Limits</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="start_check_exhaust_smoke" >
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Abnormal Sounds/Observe</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="start_check_abnormal_sounds" >
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
							<h4><textarea class="form-control" name="amc_visit_check_list_comments" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>FAILURE DETAILS:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" name="failure_details" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CAUSE OF FAILURE:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" name="cause_of_failure" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>WORK CARRIED OUT:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" name="work_carried_out" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CUSTOMER COMMENTS:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" name="customer_comments" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
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
					<div class="row" style="margin-bottom:10px">
						<div class="col-sm-12">
							<center><button type="submit" name="submit" class="btn btn-primary active btn-lg">Submit</button></center>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>	
	</div>
</div>

<script>
	$( function() {
	   	$( "#datepicker, #datepicker2, #datepicker3" ).datepicker();
	} );
</script>
</body>
</html>

<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
  }
</script>