<?php
ob_start();
error_reporting(0);
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 


	$pwd=$_POST["password"];
	$sql1 = "SELECT * FROM site_settings WHERE web_pwd = '$pwd'";
	$result1 = $conn->query($sql1);	
	if($result1->num_rows!=0) {

$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();

$sql = "SELECT * FROM service_form ORDER BY sl_no DESC";
$result = $conn->query($sql);
$getServiceData = $result->fetch_assoc(); ?>
<!DOCTYPE html>
<html lang="en" style="overflow-x:auto;">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
  <title>VENUS GENIE CARE SERVICES</title>
  
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
width:1000px;
padding-left:0px;
margin-bottom:50px;
}
.table{
-moz-height:1280px !important;
-webkit-height:1200px !important;
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
	font-size:5px;
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
        <th colspan="2">
		<a href="index.php"><img src="vgcs1.png"><a/></th>
		
        <th colspan="3" style="padding-right:30px"><div class="form-group">
		  <label for="sel1"></label>
		  <select class="form-control colr" id="sel1" name="company_name">
			<option style="font-size:9px">VENUS GENIE CARE SERVICES</option>
			<option style="font-size:9px" >MEDHA ELECTRICAL CONTRACT</option>
		  </select>
		</div></th>
						
        <th style="padding-top:20px; font-size:15px">Mobile:+91-<?php echo $getSiteSettingsData['mobile'];?><br>Mail:<?php echo $getSiteSettingsData['email'];?></th>		
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="font-size:15px"><b>REPORT TYPE:</b></td>
        <td>AMC REPORT :<input type="radio" name="report_type" value="AMC REPORT" required></td>
		<td style="text-align:center" colspan="2">SERVICE REPORT : <input type="radio" name="report_type" value="SERVICE REPORT" required></td>
		<td style="text-align:center">SL.NO.</td>
		<?php if($result->num_rows > 0) {  
		$last_id = $getServiceData['sl_no']; 
		$sl_no = $last_id+1;?>
		<td><input type="text" readonly class="form-control" name="sl_no" id="sl_no" required value="<?php echo $sl_no; ?>"></td>
		<?php } 
		else {  $sl_no = 1; ?>
			<td><input type="text" readonly class="form-control" name="sl_no" id="sl_no" required value="<?php echo $sl_no; ?>"></td>
		<?php } ?>

      </tr>
	  <tr>
	<td>DATE OF INFORMED :</td>
        <td><input class="form-control" placeholder="mm/dd/yyyy" id="datepicker1" name="customer_date" required></td>		
		 <td style="text-align:center">EQID :</td>
		<td>
			<form class="form-inline">
			<div class="input-group">
			<input type="text" class="form-control" name="dj_id" id="dj_id" size="15" required>
			<div class="input-group-btn">
			<button type="button" class="btn btn-primary search">Search</button>
			</div>
			</div>
			</form></td>
			<td>DATE OF VISIT :</td>
		<td><input class="form-control"placeholder="mm/dd/yyyy" name="date_of_informed" id="datepicker2" required></td>
	
      </tr>
       <tr>
        <td>Customer Name :</td>
        <td colspan="2"><input type="text" class="form-control" name="customer_name" id="customer_name" required></td>
		<td colspan="2" style="padding-left:100px">Contact Person Name :</td>
        <td><input type="text" class="form-control" name="contact_person_name" id="contact_person_name" required></td>    
      </tr>
	  
	   <tr>
           
		<td>Mobile Number :</td>
		<td><input type="text" class="form-control" name="contact_mobile" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" id="contact_mobile"></td>
		 <td style="text-align:center">E-mail :</td>
		<td><input type="email" class="form-control" placeholder="E-mail id" id="contact_email" required name="contact_email"></td>
		<td style="text-align:center">Location :</td>
		<td><input type="text" class="form-control" name="location"></td>
      </tr>
	  
	    <tr>
        <td style="border-right:1px solid gray;">VISIT TYPE :</td>
        <td style="border-right:1px solid gray" colspan="2"><center>Commissioning Visit <input type="radio" name="visiting_type" value="Commissioning Visit" required></center></td>
        <td style="border-left:1px solid gray;border-right:1px solid gray"><center>Paid Visit <input type="radio" name="visiting_type" value="Paid Visit" required></center></td>
		<td style="border-right:1px solid gray;"><center>AMC Visit <input type="radio" name="visiting_type" value="Break Down Visit" required></td></center>
		<td><center>Breakdown Visit <input type="radio" name="visiting_type" value="AMC Visit" required></center></td>
		
      </tr>
	  <tr colspan="6">
        <td style="border-right:1px solid gray">ENG/Eqp Id :</td>
		<td style="border-right:1px solid gray;border-left:1px solid gray"><input type="text" class="form-control" name="eng_eqp_id" id="eng_eqp_id" required></td>
        <td>RATING/KVA :</td>
		<td style="border-left:1px solid gray;"><input type="text" class="form-control" name="rating_kva" id="rating_kva" required></td>
		
		<td style="border-left:1px solid gray;border-right:1px solid gray"><center>ALT./MODEL:</center></td>
		<td><input type="text" class="form-control" name="alt_model" id="alt_model" required></td>
        
      </tr>
	  <tr>
        <td style="border-right:1px solid gray">ENG/SI.No :</td>
		<td style="border-right:1px solid gray;border-left:1px solid gray"><input type="text" class="form-control" name="eng_sl_no" id="eng_sl_no"></td>
		  <td>PANNEL/TYPE:</td>
		<td style="border-left:1px solid gray;"><input type="text" class="form-control" name="pannel_type" id="pannel_type" required></td>
        <td style="border-left:1px solid gray;border-right:1px solid gray"><center>ALT./SI.No :</center></td>
		<td><input type="text" class="form-control" name="alt_sl_no" id="alt_sl_no"></td>
      
      </tr>
	   <tr>
        <td style="border-right:1px solid gray;">RUN/HRS :</td>
		<td style="border-right:1px solid gray;"><input type="text" class="form-control" name="run_hrs" id="run_hrs" ></td>
		<td></td>
		 <td style="border-right:1px solid gray;"></td>
		 <td style="border-right:1px solid gray;"><center>TOTAL/HRS :</center></td>
		 <td><input type="text" class="form-control" name="total_hours" id="total_hours"></td>
		

      </tr>
	  <tr>
        <td colspan="2" style="font-size:16px"><b>AMC VISIT CHECK LIST</b> <input type="radio" name="visit_checklist_type" value="AMC VISIT CHECK LIST" required></td>
		<td></td>
		<td></td>
        <td colspan="2" style="font-size:16px"><b>SERVICE VISIT CHECK LIST</b> <input type="radio" name="visit_checklist_type" value="SERVICE VISIT CHECK LIST" required></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray">Water Temp<small>(10¡ÆC-98¡ÆC)</small></td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="water_temp"></td>
		<td style="border-right:1px solid gray">Oil Temp</td>
		<td style="border-right:1px solid gray"><input type="text" class="form-control" name="fuel_pressure"></td>
        <td style="border-right:1px solid gray;">Oilpressure<small>(1.5kg-7kg)</small></td>
		<td style=";padding-right:50px"><input type="text" class="form-control" name="oil_pressure"></td>
      </tr>
	   <tr>
        <td style="border-right:1px solid gray">Speed/Freq</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="speed_freq"></td>
		<td style="border-right:1px solid gray">Load in kw</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="load_in_kw"></td>
        <td style="border-right:1px solid gray">Load in AMPS</td>
		 <td style=";padding-right:50px"><input type="text" class="form-control" name="load_in_amps"></td>       
      </tr>
	  
	  <tr>
	  <td style="border-right:1px solid gray">Battery chg</td>
		 <td style="border-right:1px solid gray"><input type="text" class="form-control" name="battery_change"></td>
		<td></td>
		 <td style="border-right:1px solid gray"></td>
        <td style="border-right:1px solid gray">Voltage</td>
		 <td style=";padding-right:50px"><input type="text" class="form-control" name="voltage"></td>      
      </tr>
	  
	  <tr>
	  <td style="border-right:1px solid gray;"colspan="2">Check Radiator all Hoses / Condition <input type="checkbox" name="check_radiator_condition" value="<?php if($_POST['check_radiator_condition'] = "checked") { echo 1; } else { echo 0; } ?>"></td>
        <td style="border-right:1px solid gray" colspan="2">Check Oil level / Condition <input type="checkbox" name="check_oil_level_condition" value="<?php if($_POST['check_oil_level_condition'] == "checked") { echo 1; } else { echo 0; } ?>" ></td>
	
        
		
        <td colspan="2">Check Breather / Clean <input type="checkbox" name="check_breather_clean" value="<?php if($_POST['check_breather_clean'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
      </tr>
	   <tr>
	   <td style="border-right:1px solid gray;"colspan="2">Check Drive Belts / Condition <input type="checkbox" name="check_drive_belts_condition" value="<?php if($_POST['check_drive_belts_condition'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>
        <td style="border-right:1px solid gray"colspan="2">Check Fuel / Condition <input type="checkbox" name="check_fuel_condition" value="<?php if($_POST['check_fuel_condition'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
        
		
        <td colspan="2">Check Air Filters / Clean <input type="checkbox" name="check_air_filters_clean" value="<?php if($_POST['check_air_filters_clean'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>
		
      </tr>
	   <tr>
	   <td style="border-right:1px solid gray;"colspan="2">Check if any / Leakages <input type="checkbox" name="check_leakages" value="<?php if($_POST['check_leakages'] = "checked") {echo 1;} else { echo 0;} ?>"></td>	
        <td style="border-right:1px solid gray"colspan="2">Check Coolent / Condition <input type="checkbox" name="check_coolent_condition" value="<?php if($_POST['check_coolent_condition'] = "checked") {echo 1;} else { echo 0;} ?>" ></td>		
        
        <td colspan="2">Check Valve Injector / Adjust <input type="checkbox" name="check_valve_injector"  value="<?php if($_POST['check_valve_injector'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
      </tr>
	   <tr>
	   <td style="border-right:1px solid gray;"colspan="2">Start Check Exhaust Smoke / Limits <input type="checkbox" name="start_check_exhaust_smoke" value="<?php if($_POST['start_check_exhaust_smoke'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
        <td style="border-right:1px solid gray"colspan="2">Check Battery / Condition <input type="checkbox" name="check_battery_condition" value="<?php if($_POST['check_battery_condition'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
        
	
        <td colspan="2">Start Check Abnormal Sounds / Observe <input type="checkbox" name="start_check_abnormal_sounds" value="<?php if($_POST['start_check_abnormal_sounds'] = "checked") {echo 1;} else { echo 0;} ?>"></td>
		
      </tr>
	  <tr>
	  <td>AMC VISIT CHECK LIST Comments if any :</td>
        <td colspan="5"><textarea class="form-control" name="amc_visit_check_list_comments" rows="4" cols="90"></textarea></td>		
      </tr>
	  <tr >
	   <td>FAILURE DETAILS :</td>
        <td colspan="5" ><textarea class="form-control" name="failure_details" rows="4" cols="90"></textarea></td>
      </tr>
	   <tr>
	   <td>CAUSE OF FAILURE :</td>
        <td colspan="5"><textarea  class="form-control" name="cause_of_failure" rows="4" cols="90"></textarea></td>
      </tr>
	   <tr>
	    <td>WORK CARRIED OUT :</td>
        <td colspan="5"><textarea  class="form-control" name="work_carried_out" rows="4" cols="90"></textarea></td>
		
      </tr>
	   <tr>
	   <td>CUSTOMER COMMENTS:</td>
        <td colspan="5"><textarea  class="form-control" name="customer_comments" rows="4" cols="90"></textarea></td>
      </tr>
	
	  <tr>
	  <td colspan="6" style="border-bottom:0px">Note: Above uploaded details which we have taken from the equipment displayed parameters. This is system generated data signature is not required.</td>
	  </tr>
	  <tr>
  <td colspan="4"></td>
  <td colspan="2" style="padding-left:100px">-Save the paper and Save the Trees.</td>
	  </tr>
	    <tr>
	  <td colspan="2" style="border:0px"></td>
	  <td colspan="2" style="border:0px"><center><button type="submit" name="submit" class="btn btn-primary active">Submit</button></center></td>
	<td colspan="2" style="border:0px"></td>
      </tr>
    </tbody>
  </table>
</form>
</div>
<?php } else { echo "<script type='text/javascript'>alert('Please Enter Valid Password');window.location='password.php'</script>"; }  ?>
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
	          		$("#customer_name").val('');
	          		$("#dj_id").val('');
	          	} else {

	          		var data = value.split(",");
		            $('#contact_person_name').val(data[0]);
		            $('#contact_mobile').val(data[1]);
		            $('#contact_email').val(data[2]);
		            $('#eng_eqp_id').val(data[3]);
		            $('#alt_model').val(data[4]);
		            $('#rating_kva').val(data[5]);
		            $('#pannel_type').val(data[6]);
		            $('#run_hrs').val(data[7]);
		            $('#eng_sl_no').val(data[8]);
		            $('#alt_sl_no').val(data[9]);
	          	}
	          	
	          }
	        });

	    } else {
	    	alert("Please Enter Customer Name AND EQ Id");	    	
	    	//$("#customer_name").val('');
	        //$("#dj_id").val('');
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
