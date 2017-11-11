<?php include_once 'admin_includes/main_header.php'; ?>
<?php $sql = "SELECT * FROM `service_form` ORDER BY id DESC";
$getAdminUsersData = $conn->query($sql); $i=1; ?>
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <!-- <a href="add_admin_users.php" style="float:right">Add Admin User</a> -->
            <h3 class="m-t-0 m-b-5">Form Services</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Serial No</th>
                    <th>Report Type</th>
                    <th>Visisting Type</th>
                    <th>Created Date</th>
                    <th>Customer Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getAdminUsersData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['sl_no'];?></td>
                    <td><?php echo $row['report_type'];?></td>
                    <td><?php echo $row['visiting_type'];?></td>
                    <td><?php echo $row['created_at'];?></td>
                    <td><?php echo $row['customer_name'];?></td>
                    <td><a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a></td>
                    <?php
                    if ($row['check_oil_level_condition'] == 0) {
                        $check_oil_level_condition = NO; 
                    }
                    else {
                        $check_oil_level_condition = 'YES'; 
                    }
                    if ($row['check_radiator_condition'] == 0) {
                        $check_radiator_condition = NO; 
                    }
                    else {
                        $check_radiator_condition = 'YES';   
                    }
                    if ($row['check_breather_clean'] == 0) {
                        $check_breather_clean = NO; 
                    }
                    else {
                        $check_breather_clean = 'YES';   
                    }
                    if ($row['check_fuel_condition'] == 0) {
                        $check_fuel_condition = NO; 
                    }
                    else {
                        $check_fuel_condition = 'YES';   
                    }
                    if ($row['check_drive_belts_condition'] == 0) {
                        $check_drive_belts_condition = NO; 
                    }
                    else {
                        $check_drive_belts_condition = 'YES'; 
                    }
                    if ($row['check_air_filters_clean'] == 0) {
                        $check_air_filters_clean = NO; 
                    }
                    else {
                        $check_air_filters_clean = 'YES'; 
                    }
                    if ($row['check_coolent_condition'] == 0) {
                        $check_coolent_condition = NO; 
                    }
                    else {
                        $check_coolent_condition = 'YES'; 
                    }
                    if ($row['check_leakages'] == 0) {
                        $check_leakages = NO; 
                    }
                    else {
                        $check_leakages = 'YES';   
                    }
                    if ($row['check_valve_injector'] == 0) {
                        $check_valve_injector = NO; 
                    }
                    else {
                        $check_valve_injector = 'YES';   
                    }
                    if ($row['check_battery_condition'] == 0) {
                        $check_battery_condition = NO; 
                    }
                    else {
                        $check_battery_condition = 'YES'; 
                    }
                    if ($row['start_check_exhaust_smoke'] == 0) {
                        $start_check_exhaust_smoke = NO; 
                    }
                    else {
                        $start_check_exhaust_smoke = 'YES'; 
                    }
                    if ($row['start_check_abnormal_sounds'] == 0) {
                        $start_check_abnormal_sounds = NO; 
                    }
                    else {
                        $start_check_abnormal_sounds = 'YES'; 
                    }
                    if ($row['water_temp'] == 0) {
                        $water_temp = NO; 
                    }
                    else {
                        $water_temp = $row['water_temp']; 
                    }
                    if ($row['fuel_pressure'] == 0) {
                        $fuel_pressure = NO; 
                    }
                    else {
                        $fuel_pressure = $row['fuel_pressure']; 
                    }
                    if ($row['oil_pressure'] == 0) {
                        $oil_pressure = NO; 
                    }
                    else {
                        $oil_pressure = $row['oil_pressure']; 
                    }
                    if ($row['battery_change'] == 0) {
                        $battery_change = NO; 
                    }
                    else {
                        $battery_change = $row['battery_change']; 
                    }
                    if ($row['speed_freq'] == 0) {
                        $speed_freq = NO; 
                    }
                    else {
                        $speed_freq = $row['speed_freq']; 
                    }
                    if ($row['load_in_kw'] == 0) {
                        $load_in_kw = NO; 
                    }
                    else {
                        $load_in_kw = $row['load_in_kw']; 
                    }
                    if ($row['load_in_amps'] == 0) {
                        $load_in_amps = NO; 
                    }
                    else {
                        $load_in_amps = $row['load_in_amps']; 
                    }
                    if ($row['voltage'] == 0) {
                        $voltage = NO; 
                    }
                    else {
                        $voltage = $row['voltage']; 
                    }
                    if ($row['amc_visit_check_list_comments'] == 0) {
                        $amc_visit_check_list_comments = NO; 
                    }
                    else {
                        $amc_visit_check_list_comments = $row['amc_visit_check_list_comments']; 
                    }
                    if ($row['failure_details'] == 0) {
                        $failure_details = NO; 
                    }
                    else {
                        $failure_details = $row['failure_details']; 
                    }
                    if ($row['cause_of_failure'] == 0) {
                        $cause_of_failure = NO; 
                    }
                    else {
                        $cause_of_failure = $row['cause_of_failure']; 
                    }
                    if ($row['work_carried_out'] == 0) {
                        $work_carried_out = NO; 
                    }
                    else {
                        $work_carried_out = $row['work_carried_out']; 
                    }
                    if ($row['customer_comments'] == 0) {
                        $customer_comments = NO; 
                    }
                    else {
                        $customer_comments = $row['customer_comments']; 
                    }
                    ?>
                     <!-- Open Modal Box  here -->
                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content animated flipInX">
                          <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                              </span>
                            </button>
                            <center><h4 class="modal-title">Form Services Information</h4></center>
                          </div>
                          <div class="modal-body" id="modal_body">
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Company Name:</div>
                              <div class="col-sm-6"><?php echo $row['company_name'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Serial Number:</div>
                              <div class="col-sm-6"><?php echo $row['sl_no'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Report Type:</div>
                              <div class="col-sm-6"><?php echo $row['report_type'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">EQID:</div>
                              <div class="col-sm-6"><?php echo $row['dj_id'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Customer Name:</div>
                              <div class="col-sm-6"><?php echo $row['customer_name'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Customer Date:</div>
                              <div class="col-sm-6"><?php echo $row['customer_date'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"> Contact Person Name:</div>
                              <div class="col-sm-6"><?php echo $row['contact_person_name'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Contact Email:</div>
                              <div class="col-sm-6"><?php echo $row['contact_email'];?></div>
                            </div><div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Contact Mobile:</div>
                              <div class="col-sm-6"><?php echo $row['contact_mobile'];?></div>
                            </div><div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Visiting Type:</div>
                              <div class="col-sm-6"><?php echo $row['visiting_type'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">ENG/Eqp Id:</div>
                              <div class="col-sm-6"><?php echo $row['eng_eqp_id'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">ALT./MODEL:</div>
                              <div class="col-sm-6"><?php echo $row['alt_model'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">RATING/KVA:</div>
                              <div class="col-sm-6"><?php echo $row['rating_kva'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">ENG/SI.No:</div>
                              <div class="col-sm-6"><?php echo $row['eng_sl_no'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">ALT./SI.No:</div>
                              <div class="col-sm-6"><?php echo $row['alt_sl_no'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">RUN/HRS:</div>
                              <div class="col-sm-6"><?php echo $row['run_hrs'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">DATE OF VISIT:</div>
                              <div class="col-sm-6"><?php echo $row['date_of_informed'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">LOCATION:</div>
                              <div class="col-sm-6"><?php echo $row['location'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"> VISIT CHECK LIST:</div>
                              <div class="col-sm-6"><?php echo $row['visit_checklist_type'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Water Temp:</div>
                              <div class="col-sm-6"><?php echo $water_temp;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Oil Temp:</div>
                              <div class="col-sm-6"><?php echo $fuel_pressure;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Oil Pressure:</div>
                              <div class="col-sm-6"><?php echo $oil_pressure;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Battery chg:</div>
                              <div class="col-sm-6"><?php echo $battery_change;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Speed/Freq:</div>
                              <div class="col-sm-6"><?php echo $speed_freq;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Load in kw:</div>
                              <div class="col-sm-6"><?php echo $load_in_kw;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Load in AMPS:</div>
                              <div class="col-sm-6"><?php echo $load_in_amps;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Voltage:</div>
                              <div class="col-sm-6"><?php echo $voltage;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">AMC VISIT CHECK LIST Comments:</div>
                              <div class="col-sm-6"><?php echo $amc_visit_check_list_comments;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">FAILURE DETAILS:</div>
                              <div class="col-sm-6"><?php echo $failure_details;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">CAUSE OF FAILURE:</div>
                              <div class="col-sm-6"><?php echo $cause_of_failure;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">WORK CARRIED OUT:</div>
                              <div class="col-sm-6"><?php echo $work_carried_out;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">CUSTOMER COMMENTS:</div>
                              <div class="col-sm-6"><?php echo $customer_comments;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Oil level/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_oil_level_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Radiator all Houses/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_radiator_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Breather/Clean:</div>
                              <div class="col-sm-6"><?php echo $check_breather_clean;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Fuel/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_fuel_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Drive Belts/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_drive_belts_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Air Filters/Clean:</div>
                              <div class="col-sm-6"><?php echo $check_air_filters_clean;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Coolent/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_coolent_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check if any/Leakages:</div>
                              <div class="col-sm-6"><?php echo $check_leakages;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Valve Injector/Adjust:</div>
                              <div class="col-sm-6"><?php echo $check_valve_injector;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Check Battery/Condition:</div>
                              <div class="col-sm-6"><?php echo $check_battery_condition;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Start Check Exhaust Smoke/Limits:</div>
                              <div class="col-sm-6"><?php echo $start_check_exhaust_smoke;?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Start Check Abnormal Sounds/Observe:</div>
                              <div class="col-sm-6"><?php echo $start_check_abnormal_sounds;?></div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>
                            <style>
                              #modal_body{
                                font-size:14px;
                                padding-top:30px;
                                padding-left: 0px;
                                font-family:Roboto,sans-serif;
                              }
                            </style>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Box  here -->
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>