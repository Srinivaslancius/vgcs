<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x:auto;">
<head>
  <title>VENUS GENIE CARE SERVICES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
  .container{
border:2px solid gray;
width:970px;
padding-left:0px;
margin-bottom:50px;
height:1005px;
}
th, td {
    text-align:left;
	font-size:14px;
	padding-right:0px;
	font-weight:600;
	border-bottom:1px solid gray;
	color:#15317E;
	}	
	th{
	text-align:center;
	font-size:15px;
	}
	
.form-control{
font-size: smaller;
}

.table>thead>tr>th {
    vertical-align: bottom;
     border-bottom: 1px solid gray;
	 padding:0px;
	 }

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}

	.form-control {
    display: block;
    width: 100%;
    height: 29px;
    padding: 6px 12px;
    font-size: 14px;
    color: #000000;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.btn-primary{
background-color;#15317E !important;
height:29px;
font-size:13px;
}

.colr{
color:#15317E;
 font-size: 21px !important;
 font-weight:700 !important;
 height: 35px;
}
  </style>
</head>
<body>
<div class="container" style="border:1px solid black; padding:0px">
<form method="post" action="email.php">         
  <table class="table">
    <thead>
      <tr>
        <th>
		<img src="vgcs1.png"></th>
		
        <th colspan="3" style="padding-left:40px"><div class="form-group">
						  <label for="sel1"></label>
						  <select class="form-control colr" id="sel1" style="font-size:16px" name="company_name">
							<option>VENUS GENIE CARE SERVICES</option>
							<option>MEDHA ELECTRICAL CONTRACT</option>
						  </select>
						</div></th>
						
        <th style="padding-top:20px; padding-left:110px"colspan="2">Mobile:+91-<?php echo $getSiteSettingsData['mobile'];?><br>Mail:<?php echo $getSiteSettingsData['email'];?></th>		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>REPORT TYPE:</td>
        <td style="text-align:center">AMC REPORT :<input type="radio" name="report_type" value="AMC REPORT"></td>
		 <td style="text-align:center" colspan="2">SERVICE REPORT :<input type="radio" name="report_type" value="SERVICE REPORT"></td>
		<td style="text-align:center">SL.NO.</td>
		<td><input type="text" class="form-control" name="sl_no" id="sl_no" required></td>
      </tr>
	  <tr>
	<td>DATE OF INFORMED :</td>
        <td><input class="form-control" placeholder="mm/dd/yyyy" id="datepicker1" name="customer_date" required></td>
		<td></td>
		
		<td style="text-align:center">DATE OF VISIT :</td>
		<td><input class="form-control"placeholder="mm/dd/yyyy" name="date_of_informed" id="datepicker2" required></td>
		<td></td>
		
		
      </tr>
       <tr>
        <td>Customer Name :</td>
        <td><input type="text" class="form-control" name="customer_name" id="customer_name" required></td>
        <td style="text-align:center">EQID :</td>
		<td>
			<form class="form-inline">
			<div class="input-group">
			<input type="text" class="form-control" name="dj_id" id="dj_id" size="15">
			<div class="input-group-btn">
			<button type="button" class="btn btn-primary search">Search</button>
			</div>
			</div>
			</form>
		</td>
		<td style="text-align:center">Location :</td>
		<td><input type="text" class="form-control" name="location"></td>
      </tr>
	  
	   <tr>
        <td>Contact Person Name :</td>
        <td><input type="text" class="form-control" name="contact_person_name" id="contact_person_name" required></td>
        <td style="text-align:center">E-mail :</td>
		<td><input type="email" class="form-control" placeholder="E-mail id" id="contact_email" required name="contact_email"></td>
		<td style="text-align:center">Cell :</td>
		<td><input type="text" class="form-control" name="contact_mobile" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" id="contact_mobile"></td>
      </tr>
	  
	    <tr>
        <td style="border-right:1px solid gray;">VISIT TYPE :</td>
        <td style="border-right:1px solid gray" colspan="2">Commissioning Visit <input type="radio" name="visiting_type" value="Commissioning Visit"></td>
        <td style="border-left:1px solid gray; border-right:1px solid gray">Paid Visit <input type="radio" name="visiting_type" value="Paid Visit"></td>
		<td style="border-left:1px solid gray; border-right:1px solid gray">Breakdown Visit <input type="radio" name="visiting_type" value="Break Down Visit"></td>
		<td style="border-right:1px solid gray">AMC Visit <input type="radio" name="visiting_type" value="AMC Visit"></td>
		
      </tr>
	  <tr colspan="6">
        <td style="border-right:1px solid gray">ENG/Eqp Id :</td>
		<td style="border-right:1px solid gray;border-left:1px solid gray"><input type="text" class="form-control" name="eng_eqp_id" id="eng_eqp_id" required></td>
        <td style="border-right:1px solid gray">ALT./MODEL:</td>
		<td style="border-right:1px solid gray"><input type="text" class="form-control" name="alt_model" id="alt_model" required></td>
        <td>RATING/KVA :</td>
		<td style="border-left:1px solid gray;"><input type="text" class="form-control" name="rating_kva" id="rating_kva" required></td>
		
      </tr>
	  <tr>
        <td style="border-right:1px solid gray">ENG/SI.No :</td>
		<td style="border-right:1px solid gray;border-left:1px solid gray"><input type="text" class="form-control" name="eng_sl_no" id="eng_sl_no"></td>
        <td style="border-right:1px solid gray">ALT./SI.No :</td>
		<td style="border-right:1px solid gray"><input type="text" class="form-control" name="alt_sl_no" id="alt_sl_no"></td>
        <td>PANNEL/TYPE :</td>
		<td style="border-left:1px solid gray;"><input type="text" class="form-control" name="pannel_type" id="pannel_type" required></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray;">RUN/HRS :</td>
		<td style="border-right:1px solid gray;"><input type="text" class="form-control" name="run_hrs" id="run_hrs" ></td>
		<td></td>
		 <td style="border-right:1px solid gray;"></td>
		 <td style="border-right:1px solid gray;">TOTAL/HRS :</td>
		 <td><input type="text" class="form-control" name="total_hours" id="total_hours"></td>
		

      </tr>
	  <tr>
        <td colspan="2">AMC VISIT CHECK LIST <input type="radio" name="visit_checklist_type" value="AMC VISIT CHECK LIST"></td>
		<td></td>
		<td></td>
        <td colspan="2">SERVICE VISIT CHECK LIST <input type="radio" name="visit_checklist_type" value="SERVICE VISIT CHECK LIST"></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray">Water Temp<br><small>(10°C-98°C)</small></td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="water_temp" style="width:70px"></td>
		<td style="border-right:1px solid gray">Oil Temp</td>
		<td style="border-right:1px solid gray"><input type="text" class="form-control" name="fuel_pressure" style="width:70px"></td>
        <td style="border-right:1px solid gray">Oil Pressure<br><small>(1.5kg-7kg)</small></td>
		<td style="border-right:1px solid gray"><input type="text" class="form-control" name="oil_pressure" style="width:70px"></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray">Speed/Freq</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="speed_freq" style="width:70px"></td>
		<td style="border-right:1px solid gray">Load in kw</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="load_in_kw" style="width:70px"></td>
        <td style="border-right:1px solid gray">Load in AMPS</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="load_in_amps" style="width:70px"></td>       
      </tr>
	  
	  <tr>
	  <td style="border-right:1px solid gray">Battery chg</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="battery_change" style="width:70px"></td>
		<td></td>
		 <td style="border-right:1px solid gray"></td>
        <td style="border-right:1px solid gray">Voltage</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="voltage" style="width:70px"></td>      
      </tr>
	  
	  <tr>
        <td style="border-right:1px solid gray" colspan="2">Check Oil level / Condition <input type="checkbox" name="check_oil_level_condition" value="<?php if($_POST['check_oil_level_condition'] == "checked") { echo 1; } else { echo 0; } ?>" ></td>
	
        <td style="border-right:1px solid gray;"colspan="2">Check Radiator all Houses/Condition<input type="checkbox" name="check_radiator_condition" value="<?php if($_POST['check_radiator_condition'] = "checked") { echo 1; } else { echo 0; } ?>"></td>
		
        <td colspan="2">Check Breather / Clean <input type="checkbox" name="check_breather_clean" value="<?php if($_POST['check_breather_clean'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
      </tr>
	   <tr>
        <td style="border-right:1px solid gray" colspan="2">Check Fuel / Condition <input type="checkbox" name="check_fuel_condition" value="<?php if($_POST['check_fuel_condition'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
        <td style="border-right:1px solid gray" colspan="2">Check Drive Belts / Condition <input type="checkbox" name="check_drive_belts_condition" value="<?php if($_POST['check_drive_belts_condition'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>
		
        <td colspan="2">Check Air Filters / Clean <input type="checkbox" name="check_air_filters_clean" value="<?php if($_POST['check_air_filters_clean'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>
		
      </tr>
	   <tr>
        <td style="border-right:1px solid gray" colspan="2">Check Coolent / Condition <input type="checkbox" name="check_coolent_condition" value="<?php if($_POST['check_coolent_condition'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>		
        <td style="border-right:1px solid gray" colspan="2">Check if any / Leakages <input type="checkbox" name="check_leakages" value="<?php if($_POST['check_leakages'] = "checked") {echo 1;} else { echo 0;} ?>"></td>	
        <td colspan="2">Check Valve Injector / Adjust <input type="checkbox" name="check_valve_injector"  value="<?php if($_POST['check_valve_injector'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray" colspan="2">Check Battery / Condition <input type="checkbox" name="check_battery_condition" value="<?php if($_POST['check_battery_condition'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
        <td style="border-right:1px solid gray" colspan="2">Start Check Exhaust Smoke/Limits <input type="checkbox" name="start_check_exhaust_smoke" value="<?php if($_POST['start_check_exhaust_smoke'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
	
        <td colspan="2">Start Check Abnormal Sounds/Observe <input type="checkbox" name="start_check_abnormal_sounds" value="<?php if($_POST['start_check_abnormal_sounds'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
      </tr>
	  <tr>
	  <td>AMC VISIT CHECK LIST Comments if any :</td>
        <td colspan="5"><input type="text" class="form-control" name="amc_visit_check_list_comments"></td>		
      </tr>
	  <tr >
	   <td>FAILURE DETAILS :</td>
        <td colspan="5" ><input type="text" class="form-control" name="failure_details"></td>
      </tr>
	   <tr>
	   <td>CAUSE OF FAILURE :</td>
        <td colspan="5"><input type="text" class="form-control" name="cause_of_failure"></td>
      </tr>
	   <tr>
	    <td>WORK CARRIED OUT :</td>
        <td colspan="5"><input type="text" class="form-control" name="work_carried_out"></td>
		
      </tr>
	   <tr>
	   <td>CUSTOMER COMMENTS :</td>
        <td colspan="5"><input type="text" class="form-control" name="customer_comments"></td>
      </tr>
	
	  <tr>
	  <td colspan="6">Note: Above uploaded details which we have taken from the equipment displayed parameters.</td>
	  </tr>
	  <tr>
	  <td colspan="6">This is system generated data Save the paper and Save the Trees</td>
	  </tr>
	    <tr style="padding-bottom:0px;">
	  <td colspan="2" style="border:0px"></td>
	  <td colspan="2" style="border:0px"><center><button type="submit" name="submit" class="btn btn-primary active">Submit</button></center></td>
	<td colspan="2" style="border:0px"></td>
      </tr>
    </tbody>
  </table>
</form>
</div>
<script>
	$( function() {
	   	$( "#datepicker1, #datepicker2" ).datepicker();
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
$(document).ready(function(){
	$('.search').click(function(){
	    var customer_name = $("#customer_name").val();
	    var dj_id = $("#dj_id").val();
	    if(customer_name!='' && dj_id!='') {

	    	$.ajax({
	          type:"post",
	          url:"get_particular_customer_data.php",
	          data:"&customer_name="+customer_name+"&dj_id="+dj_id,
	          success:function(value){
	          	if(value == 0) {
	          		alert("Customer Not Exists!");
	          	} else {

	          		var data = value.split(",");
		            $('#contact_person_name').val(data[0]);
		            $('#contact_mobile').val(data[1]);
		            $('#contact_email').val(data[2]);
		            $('#sl_no').val(data[3]);
		            $('#eng_eqp_id').val(data[4]);
		            $('#alt_model').val(data[5]);
		            $('#rating_kva').val(data[6]);
		            $('#pannel_type').val(data[7]);
		            $('#run_hrs').val(data[8]);
		            $('#eng_sl_no').val(data[9]);
		            $('#alt_sl_no').val(data[10]);
	          	}
	          	
	          }
	        });

	    } else {
	    	alert("Please Enter Customer Name AND DJ Id");
	    	return false;
	    }	    

	});

	$("#total_hours").blur(function(){
		var total = $("#total_hours").val();
		var run_hrs = $("#run_hrs").val();			
	    $("#run_hrs").val(total - run_hrs);
	}); 

});
</script>