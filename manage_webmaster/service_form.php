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
                    <td><?php echo $row['customer_name'];?></td>
                    <td><a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a></td>
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
                              <div class="col-sm-4">PM/DATE:</div>
                              <div class="col-sm-6"><?php echo $row['pm_date'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">PM/TYPE:</div>
                              <div class="col-sm-6"><?php echo $row['pm_type'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">RUN/HRS:</div>
                              <div class="col-sm-6"><?php echo $row['run_hrs'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">DATE OF INFORMED:</div>
                              <div class="col-sm-6"><?php echo $row['date_of_informed'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">DATE OF VISIT:</div>
                              <div class="col-sm-6"><?php echo $row['date_of_visit'];?></div>
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
                              <div class="col-sm-6"><?php echo $row['water_temp'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Fuel Pressure:</div>
                              <div class="col-sm-6"><?php echo $row['fuel_pressure'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Oil Pressure:</div>
                              <div class="col-sm-6"><?php echo $row['oil_pressure'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Battery chg:</div>
                              <div class="col-sm-6"><?php echo $row['battery_change'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Speed/Freq:</div>
                              <div class="col-sm-6"><?php echo $row['speed_freq'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Load in kw:</div>
                              <div class="col-sm-6"><?php echo $row['load_in_kw'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Load in AMPS:</div>
                              <div class="col-sm-6"><?php echo $row['load_in_amps'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">Voltage:</div>
                              <div class="col-sm-6"><?php echo $row['voltage'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">AMC VISIT CHECK LIST Comments:</div>
                              <div class="col-sm-6"><?php echo $row['amc_visit_check_list_comments'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">FAILURE DETAILS:</div>
                              <div class="col-sm-6"><?php echo $row['failure_details'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">CAUSE OF FAILURE:</div>
                              <div class="col-sm-6"><?php echo $row['cause_of_failure'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">WORK CARRIED OUT:</div>
                              <div class="col-sm-6"><?php echo $row['work_carried_out'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">CUSTOMER COMMENTS:</div>
                              <div class="col-sm-6"><?php echo $row['customer_comments'];?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4">VISIT CHECK LIST:</div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_oil_level_condition'] == 1) echo 'Check Oil level/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_radiator_condition'] == 1) echo 'Check Radiator all Houses/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_breather_clean'] == 1) echo 'Check Breather/Clean';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-6"><?php if($row['check_fuel_condition'] == 1) echo 'Check Fuel/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_drive_belts_condition'] == 1) echo 'Check Drive Belts/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_air_filters_clean'] == 1) echo 'Check Air Filters/Clean';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_coolent_condition'] == 1) echo 'Check Coolent/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_leakages'] == 1) echo 'Check if any/Leakages';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_valve_injector'] == 1) echo 'Check Valve Injector/Adjust';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['check_battery_condition'] == 1) echo 'Check Battery/Condition';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['start_check_exhaust_smoke'] == 1) echo 'Start Check Exhaust Smoke/Limits';?></div>
                            </div>
                            <div class="row">
                              <div class="col-sm-2"></div>
                              <div class="col-sm-4"><?php if($row['start_check_abnormal_sounds'] == 1) echo 'Start Check Abnormal Sounds/Observe';?></div>
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