<?php
error_reporting(1);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['lid'];
$sql = "SELECT * FROM service_form WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$mailto = $row['contact_email'];
$mailfrom = "venugopal.7@hotmail.com";
$mailsubject = "VGCS Service Details";
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

 $content .= '
     <style>
     table {
     border-collapse: collapse;
     }

     table{
      width:800px;
      margin:0 auto;
     }

     td{
     border: 1px solid #e2e2e2;
     padding: 10px; 
     max-width:520px;
     word-wrap: break-word;
     }


     </style>

   ';

$content .= '<style>
    .container{
border:2px solid gray;
width:1000px;
padding-left:0px;
margin-bottom:50px;
}
th, td {
text-align: left;
border-bottom:1px solid gray;
}

th{
background-color:#d8d8d8;
text-align:center;
}
</style>';


$content .= '<div class="container" style="padding-right:0px">         
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>' . $row['company_name'] . '</th>
        <th></th>
        <th>MOBILE:+91-9849257587<br>E-mail:venugopal.7@hotmail.com</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>REPORT TYPE:</td>
        <td>'.$report_type.'</td>
        <td>SL.NO.</td>
        <td>' . $row['sl_no'] . '</td>
        <td>Date:' . $row['customer_date'] . '</td>

      </tr>
       <tr>
        <td>Customer Name:' . $row['customer_name'] . '</td>
        <td>EQID:' . $row['dj_id'] . '</td>
        <td>Contact Person Name:' . $row['contact_person_name'] . '</td>
        <td>Email:' . $row['contact_email'] . '</td>
        <td>Cell:' . $row['contact_mobile'] . '</td>
      </tr>
        <tr>
        <td>VISIT TYPE:</td>
        <td>' . $row['visiting_type'] . '</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>ENG/Eqp Id:' . $row['eng_eqp_id'] . '</td>
        <td></td>
        <td>ALT./MODEL:' . $row['alt_model'] . '</td>
        <td></td>
        <td>RATING/KVA:' . $row['rating_kva'] . '</td>
      </tr>
      <tr>
        <td>ENG/SI.No:' . $row['eng_sl_no'] . '</td>
        <td></td>
        <td>ALT./SI.No:' . $row['alt_sl_no'] . '</td>
        <td></td>
        <td>PANNEL/TYPE:' . $row['pannel_type'] . '</td>
      </tr>
       <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>RUN/HRS:' . $row['run_hrs'] . '</td>
      </tr>
      <tr>
        <td>DATE OF VISIT:' . $row['date_of_informed'] . '</td>
        <td></td>
        <td></td>
        <td></td>
        <td>LOCATION:' . $row['location'] . '</td>
      </tr>
      <tr>
        <td><strong>VISIT CHECK LIST:</strong></td>
        <td></td>
        <td>' . $row['visit_checklist_type'] . '</td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>Water Temp (10°C-98°C):' . $row['water_temp'] . '</td>
        <td>Fuel Pressure:' . $row['fuel_pressure'] . '</td>
        <td>Oil Pressure (1.5-7kg):' . $row['oil_pressure'] . '</td>
        <td>Battery chg:' . $row['battery_change'] . '</td>
        <td></td>
      </tr>
       <tr>
        <td>Speed/Freq:' . $row['speed_freq'] . '</td>
        <td>Load in kw:' . $row['load_in_kw'] . '</td>
        <td>Load in AMPS:' . $row['load_in_amps'] . '</td>
        <td>Voltage:' . $row['voltage'] . '</td>
        <td></td>
      </tr>
      <tr>
        <td>Check Oil level / Condition:' . $check_oil_level_condition . '</td>
        <td></td>
        <td>Check Radiator all Houses/Condition:' . $check_radiator_condition . '</td>
        <td></td>
        <td>Check Breather/Clean:' . $check_breather_clean . '</td>
      </tr>
       <tr>
        <td>Check Fuel/Condition:' . $check_fuel_condition. '</td>
        <td></td>
        <td>Check Drive Belts/Condition' . $check_drive_belts_condition . '</td>
        <td></td>
        <td>Check Air Filters/Clean:' . $check_air_filters_clean . '</td>
      </tr>
       <tr>
        <td>Check Coolent/Condition:' . $check_coolent_condition . '</td>
        <td></td>
        <td>Check if any/Leakages:' . $check_leakages. '</td>
        <td></td>
        <td>Check Valve Injector/Adjust:' . $check_valve_injector . '</td>
      </tr>
       <tr>
        <td>Check Battery/Condition:' . $check_battery_condition . '</td>
        <td></td>
        <td>Start Check Exhaust Smoke/Limits:' . $start_check_exhaust_smoke . '</td>
        <td></td>
        <td>Start Check Abnormal Sounds/Observe:' . $start_check_abnormal_sounds. '</td>
      </tr>
      <tr>
        <td>AMC VISIT CHECK LIST Comments if any:</td>
        <td></td>
        <td>' . $row['amc_visit_check_list_comments'] . '</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>FAILURE DETAILS:</td>
        <td></td>
        <td>' . $row['failure_details'] . '</td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>CAUSE OF FAILURE:</td>
        <td></td>
        <td>' . $row['cause_of_failure'] . '</td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>WORK CARRIED OUT:</td>
        <td></td>
        <td>' . $row['work_carried_out'] . '</td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>CUSTOMER COMMENTS:</td>
        <td></td>
        <td>' . $row['customer_comments'] . '</td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>INCHARGE</td>
        <td></td>
        <td></td>
        <td></td>
        <td>SERVICE ENGINEER</td>
      </tr>
       <tr>
        <td style="border-bottom:0px">SIGNATURE</td>
        <td style="border-bottom:0px"></td>
        <td style="border-bottom:0px"></td>
        <td style="border-bottom:0px"></td>
        <td style="border-bottom:0px">SIGNATURE</td>
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


$to = $mailto;
$from = $mailfrom;
$subject = $mailsubject;

$message = "<p>Dear ". $row['customer_name'] . ", <br /><br />Please see the VGCS Service Details attachment.</p><br /><br />Thank You<br/>VGCS.";
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

    header("Location: thank_you.php?id=".$id."");
    echo $msgsuccess = 'Mail Send Successfully'; die;
} else {

    $msgerror = 'Main not send';
}
?>