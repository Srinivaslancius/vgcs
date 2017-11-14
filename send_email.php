<?php
error_reporting(0);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['lid'];
$sql = "SELECT * FROM service_form WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

/* break description content every after 100 character. */


$content = '';

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

require("mailtest.php/class.phpmailer.php");


$content .='<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
$content .='<link rel="stylesheet" href="/resources/demos/style.css">';
$content .= '
     <style>
.container{
border:2px solid gray;
width:960px;
margin-top:70px;
margin-bottom:50px;
}
.table{
-moz-height:1280px !important;
-webkit-height:1200px !important;
}
th, td {
    text-align:left;
  font-size:15px;  
  font-weight:600;
  padding:6px;
  border-bottom:1px solid gray;
  color:#15317E;
  } 
  th{
  text-align:center;
  font-size:13px;
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

.colr{
color:#15317E;
 font-size: 21px !important;
 font-weight:700 !important;
 height: 35px;
}
  </style>

   ';

$content .= '<div class="container" style="border:1px solid black; padding:0px">         
  <table class="table">
    <thead>
      <tr>
        <th>
    <img src="vgcs1.png"></th>
    
        <th colspan="3" style="font-size:20px; font-weight:bold; padding-top:30px;">' . $row['company_name'] . '</th>
            
        <th style="padding-top:20px"colspan="2">Mobile:+91-9849257587<br>Mail:venugopal.7@hotmail.com</th>    
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>REPORT TYPE:</td>
        <td style="color:black" colspan="2">'.$report_type.'</td>
     <td style="text-align:center" ></td>
    <td style="text-align:center">SL.NO.</td>
    <td style="color:black">' . $row['sl_no'] . '</td>
      </tr>
    <tr>
  <td>DATE OF INFORMED :</td>
        <td style="color:black">' . $row['customer_date'] . '</td>
    <td></td>
    
    <td colspan="2" style="padding-left:150px">DATE OF VISIT :</td>
    <td style="color:black">' . $row['date_of_informed'] . '</td>
    
      </tr>
       <tr>
        <td>Customer Name :</td>
        <td style="color:black">' . $row['customer_name'] . '</td>
        <td style="text-align:center">EQID :</td>
    <td style="color:black">
      ' . $row['dj_id'] . '
    </td>
    <td style="text-align:center">Location :</td>
    <td style="color:black">' . wordwrap( $row['location'],15,"<br>\n" ) .'</td>
      </tr>
    
     <tr>
        <td>Contact Person Name :</td>
        <td style="color:black">' . wordwrap( $row['contact_person_name'],15,"<br>\n" ) . '</td>
        <td style="text-align:center">E-mail :</td>
    <td style="color:black">' . wordwrap($row['contact_email'],15,"<br>\n") . '</td>
    <td style="text-align:center">Cell :</td>
    <td style="color:black">' . $row['contact_mobile'] . '</td>
      </tr>
    
      <tr>
        <td>VISIT TYPE :</td>
        <td colspan="2" style="color:black">' . $row['visiting_type'] . '</td>
        <td></td>
    <td></td>
    <td></td>
    
      </tr>
    <tr colspan="6">
        <td style="border-right:1px solid gray">ENG/Eqp Id :</td>
    <td style="border-right:1px solid gray;border-left:1px solid gray;color:black">' . $row['eng_eqp_id'] . '</td>
        <td style="border-right:1px solid gray">ALT./MODEL:</td>
    <td style="border-right:1px solid gray;color:black">' . $row['alt_model'] . '</td>
        <td>RATING/KVA :</td>
    <td style="border-left:1px solid gray;color:black">' . $row['rating_kva'] . '</td>
    
      </tr>
    <tr>
        <td style="border-right:1px solid gray">ENG/SI.No :</td>
    <td style="border-right:1px solid gray;border-left:1px solid gray;color:black">' . $row['eng_sl_no'] . '</td>
        <td style="border-right:1px solid gray">ALT./SI.No :</td>
    <td style="border-right:1px solid gray;color:black">' . $row['alt_sl_no'] . '</td>
        <td>PANNEL/TYPE:</td>
    <td style="border-left:1px solid gray;color:black">' . $row['pannel_type'] . '</td>
      </tr>
     <tr>
        <td style="border-right:1px solid gray;">RUN/HRS :</td>
    <td style="border-right:1px solid gray;color:black">' . $row['run_hrs'] . '</td>
    <td></td>
     <td></td>
     <td></td>
     <td></td>
    

      </tr>
    <tr>
        <td colspan="2">VISIT CHECK LIST:</td>
    <td colspan="2" style="color:black">' . $row['visit_checklist_type'] . '</td>
    <td></td>
        <td></td>
      </tr>
     <tr>
        <td style="border-right:1px solid gray">Water Temp<br><small>(10째C-98째C)</small></td>
     <td style="border-right:1px solid gray;color:black">' . $row['water_temp'] . '</td>
    <td style="border-right:1px solid gray">Oil Temp</td>
    <td style="border-right:1px solid gray;color:black">' . $row['fuel_pressure'] . '</td>
        <td style="border-right:1px solid gray">Oil Pressure<br><small>(1.5kg-7kg)</small></td>
    <td style="color:black">' . $row['oil_pressure'] . '</td>
      </tr>
     <tr>
        <td style="border-right:1px solid gray">Speed/Freq</td>
     <td style="border-right:1px solid gray;color:black">' . $row['speed_freq'] . '</td>
    <td style="border-right:1px solid gray">Load in kw</td>
     <td style="border-right:1px solid gray;color:black">' . $row['load_in_kw'] . '</td>
        <td style="border-right:1px solid gray">Load in AMPS</td>
     <td style="color:black">' . $row['load_in_amps'] . '</td>       
      </tr>
    
    <tr>
    <td style="border-right:1px solid gray">Battery chg</td>
     <td style="border-right:1px solid gray;color:black">' . $row['battery_change'] . '</td>
    <td></td>
     <td style="border-right:1px solid gray"></td>
        <td style="border-right:1px solid gray">Voltage</td>
     <td style="color:black">' . $row['voltage'] . '</td>      
      </tr>
    
    <tr>
        <td style="border-right:1px solid gray" >Check Oil level / Condition :<span style="color:black">' . $check_oil_level_condition . '</span></td>
  
        <td style="border-right:1px solid gray;"colspan="2">Check Radiator all Houses/Condition :<span style="color:black">' . $check_radiator_condition . '</span></td>
    
        <td colspan="3">Check Breather / Clean :<span style="color:black">' . $check_breather_clean . '</span></td>
    
      </tr>
     <tr>
        <td style="border-right:1px solid gray" >Check Fuel / Condition :<span style="color:black">' . $check_fuel_condition. '</span></td>
    
        <td style="border-right:1px solid gray" colspan="2">Check Drive Belts / Condition :<span style="color:black">' . $check_drive_belts_condition . '</span></td>
    
        <td colspan="3">Check Air Filters / Clean :<span style="color:black">' . $check_air_filters_clean . '</span></td>
    
      </tr>
     <tr>
        <td style="border-right:1px solid gray" >Check Coolent / Condition :<span style="color:black">' . $check_coolent_condition . '</span></td>    
        <td style="border-right:1px solid gray" colspan="2">Check if any / Leakages :<span style="color:black">' . $check_leakages. '</span></td>  
        <td colspan="3">Check Valve Injector / Adjust :<span style="color:black">' . $check_valve_injector . '</span></td>
      </tr>
     <tr>
        <td style="border-right:1px solid gray" >Check Battery / Condition :<span style="color:black">' . $check_battery_condition . '</span></td>
    
        <td style="border-right:1px solid gray" colspan="2">Start Check Exhaust Smoke/Limits :<span style="color:black">' . $start_check_exhaust_smoke . '</span></td>
  
        <td colspan="3">Start Check Abnormal Sounds/Observe :<span style="color:black">' . $start_check_abnormal_sounds. '</span></td>
    
      </tr>
    <tr>
    <td>AMC VISIT CHECK LIST Comments if any :</td>
        <td colspan="5" style="color:black; text-align:justify">' . wordwrap($row['amc_visit_check_list_comments'],100,"<br>\n") . '</td>    
      </tr>
    <tr >
     <td>FAILURE DETAILS :</td>
        <td colspan="5" style="color:black; text-align:justify">' . wordwrap($row['failure_details'],100,"<br>\n") . '</td>
      </tr>
     <tr>
     <td>CAUSE OF FAILURE :</td>
        <td colspan="5" style="color:black; text-align:justify">' . wordwrap($row['cause_of_failure'],100,"<br>\n") . '</td>
      </tr>
     <tr>
      <td>WORK CARRIED OUT :</td>
        <td colspan="5" style="color:black; text-align:justify">' . wordwrap($row['work_carried_out'],100,"<br>\n") . '</td>
    
      </tr>
     <tr>
     <td>CUSTOMER COMMENTS :</td>
        <td colspan="5" style="color:black; text-align:justify">' . wordwrap($row['customer_comments'],100,"<br>\n") . '</td>
      </tr>
  
    <tr>
    <td colspan="6" style="border-bottom:0px">Note: Above uploaded details which we have taken from the equipment displayed parameters. This is system generated data, signature is not required.</td>
    </tr>
    <tr>
    <td colspan="4"></td>
  <td colspan="2">-Save the paper and Save the Trees.</td>
      </tr>
    </tbody>
  </table>
</div>';


//echo $content; die;

require_once('html2pdf/html2pdf.class.php');


$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));

$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('generate_reports/'.$id.'.pdf', 'F');

//Email atatchemnt
$path = "generate_reports/".$id.".pdf";
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "vgcs.in";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "info@vgcs.in";
$mail->Password = "Admin@123";

$mail->From = "info@vgcs.in";
$mail->FromName = "VGCS SERVICE DETAILS";
//Set email to and cc
$mail->AddAddress($row['contact_email']);
$sql1 = "SELECT * FROM site_settings WHERE id='1'";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$mail->AddCC($row1['email'], 'Venu Gopal');
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);
$mail->Subject = "VGCS SERVICE DETAILS";
$mail->Body ="<p>Dear ". $row['customer_name'] . ", <br /><br />Please see the VGCS Service Details attachment.</p><br /><br />Thank You<br/>VGCS. ";
$mail->AddAttachment($path, '', $encoding = 'base64', $type = 'application/pdf'); 
$mail->CharSet="windows-1251";
$mail->CharSet="utf-8";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";
header("Location: thank_you.php?id=".$id."");
?>