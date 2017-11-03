<?php
include "manage_webmaster/admin_includes/config.php";

       // echo "<pre>"; print_r($_POST); die;
      //If success
      $report_type = $_POST['report_type'];
      $dj_id = $_POST['dj_id'];
      $company_name = $_POST['company_name'];
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
      $pannel_type = $_POST['pannel_type'];
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

      $sql = "INSERT INTO service_form (`report_type`,`dj_id`,`company_name`,`sl_no`,`customer_name`,`customer_date` ,`contact_person_name` ,`contact_email` , `contact_mobile`,`visiting_type` ,`eng_eqp_id` , `alt_model`, `rating_kva`, `eng_sl_no` ,`alt_sl_no` ,`pannel_type` , `pm_date` , `pm_type` , `run_hrs` , `date_of_informed` ,`date_of_visit`,`location`,`visit_checklist_type`,`water_temp`,`fuel_pressure`,`oil_pressure`,`battery_change`,`speed_freq`,`load_in_kw`,`load_in_amps`,`voltage`,`amc_visit_check_list_comments`,`failure_details`,`cause_of_failure`,`work_carried_out`,`customer_comments`,`check_oil_level_condition`,`check_radiator_condition`,`check_breather_clean`,`check_fuel_condition`,`check_drive_belts_condition`,`check_air_filters_clean`,`check_coolent_condition`,`check_leakages`,`check_valve_injector`,`check_battery_condition`,`start_check_exhaust_smoke`,`start_check_abnormal_sounds`,`created_at`) VALUES ('$report_type','$dj_id','$company_name','$sl_no','$customer_name','$customer_date','$contact_person_name','$contact_email','$contact_mobile','$visiting_type','$eng_eqp_id','$alt_model','$rating_kva','$eng_sl_no','$alt_sl_no','$pannel_type','$pm_date','$pm_type','$run_hrs','$date_of_informed','$date_of_visit','$location','$visit_checklist_type','$water_temp','$fuel_pressure','$oil_pressure','$battery_change','$speed_freq','$load_in_kw','$load_in_amps','$voltage','$amc_visit_check_list_comments','$failure_details','$cause_of_failure','$work_carried_out','$customer_comments','$check_oil_level_condition','$check_radiator_condition','$check_breather_clean','$check_fuel_condition','$check_drive_belts_condition','$check_air_filters_clean','$check_coolent_condition','$check_leakages','$check_valve_injector','$check_battery_condition','$start_check_exhaust_smoke','$start_check_abnormal_sounds','$created_at')";
      if($conn->query($sql) == TRUE)
      {
        $last_id = $conn->insert_id;
      }

      header("Location: send_email.php?lid=".$last_id."");
?>