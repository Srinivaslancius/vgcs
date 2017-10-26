<?php
error_reporting(1);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['lid'];

$mailto = "srinivas@lanciussolutions.com";
$mailfrom = "harikanthnakka9@gmail.com";
$mailsubject = "Email Attch";
/* break description content every after 100 character. */


$content = '';

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
/* you css */

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


$content .= '<table>';

$content .= '<tr><td>REPORT TYPE:</td> <td>' . $row['report_type'] . '</td> </tr>';
$content .= '<tr><td>SL.NO:</td>   <td>' . $row['sl_no'] . '</td> </tr>';
$content .= '<tr><td>Customer Name:</td>   <td>' . $row['customer_name'] . '</td> </tr>';
$content .= '<tr><td>Date:</td>   <td>' . $row['customer_date'] . '</td> </tr>';
$content .= '<tr><td>Contact Person Name:</td>   <td>' . $row['contact_person_name'] . '</td> </tr>';
$content .= '<tr><td>Contact Email:</td>   <td>' . $row['contact_email'] . '</td> </tr>';
$content .= '<tr><td>Cell:</td>   <td>' . $row['contact_mobile'] . '</td> </tr>';
$content .= '<tr><td>VISIT TYPE:</td>   <td>' . $row['visiting_type'] . '</td> </tr>';
$content .= '<tr><td>ENG/Eqp Id:</td>   <td>' . $row['eng_eqp_id'] . '</td> </tr>';
$content .= '<tr><td>ALT./MODEL:</td>   <td>' . $row['alt_model'] . '</td> </tr>';
$content .= '<tr><td>RATING/KVA:</td>   <td>' . $row['rating_kva'] . '</td> </tr>';
$content .= '<tr><td>ENG/SI.No:</td>   <td>' . $row['eng_sl_no'] . '</td> </tr>';
$content .= '<tr><td>ALT./SI.No:</td>   <td>' . $row['alt_sl_no'] . '</td> </tr>';
$content .= '<tr><td>PANNEL/TYPE:</td>   <td>' . $row['pannel_type'] . '</td> </tr>';
$content .= '<tr><td>PM/DATE:</td>   <td>' . $row['pm_date'] . '</td> </tr>';
$content .= '<tr><td>PM/TYPE:</td>   <td>' . $row['pm_type'] . '</td> </tr>';
$content .= '<tr><td>RUN/HRS:</td>   <td>' . $row['run_hrs'] . '</td> </tr>';
$content .= '<tr><td>DATE OF INFORMED:</td>   <td>' . $row['date_of_informed'] . '</td> </tr>';
$content .= '<tr><td>DATE OF VISIT:</td>   <td>' . $row['date_of_visit'] . '</td> </tr>';
$content .= '<tr><td>LOCATION:</td>   <td>' . $row['location'] . '</td> </tr>';
$content .= '<tr><td>VISIT CHECK LIST TYPE:</td>   <td>' . $row['visit_checklist_type'] . '</td> </tr>';
$content .= '<tr><td>Water Temp:</td>   <td>' . $row['water_temp'] . '</td> </tr>';
$content .= '<tr><td>Fuel Pressure:</td>   <td>' . $row['fuel_pressure'] . '</td> </tr>';
$content .= '<tr><td>Oil Pressure:</td>   <td>' . $row['oil_pressure'] . '</td> </tr>';
$content .= '<tr><td>Battery chg:</td>   <td>' . $row['battery_change'] . '</td> </tr>';
$content .= '<tr><td>Speed/Freq:</td>   <td>' . $row['speed_freq'] . '</td> </tr>';
$content .= '<tr><td>Speed/Freq:</td>   <td>' . $row['load_in_kw'] . '</td> </tr>';
$content .= '<tr><td>Load in AMPS:</td>   <td>' . $row['load_in_amps'] . '</td> </tr>';
$content .= '<tr><td>Voltage:</td>   <td>' . $row['voltage'] . '</td> </tr>';
$content .= '<tr><td>Check Oil level / Condition:</td>   <td>' . $check_oil_level_condition . '</td> </tr>';
$content .= '<tr><td>Check Radiator all Houses/Condition:</td>   <td>' . $check_radiator_condition . '</td> </tr>';
$content .= '<tr><td>Check Breather / Clean:</td>   <td>' . $check_breather_clean . '</td> </tr>';
$content .= '<tr><td>Check Fuel / Condition:</td>   <td>' . $check_fuel_condition. '</td> </tr>';
$content .= '<tr><td>Check Drive Belts / Condition:</td>   <td>' . $check_drive_belts_condition . '</td> </tr>';
$content .= '<tr><td>Check Air Filters / Clean:</td>   <td>' . $check_air_filters_clean . '</td> </tr>';
$content .= '<tr><td>Check Coolent / Condition:</td>   <td>' . $check_coolent_condition . '</td> </tr>';
$content .= '<tr><td>Check if any / Leakages:</td>   <td>' . $check_leakages. '</td> </tr>';
$content .= '<tr><td>Check Valve Injector / Adjust:</td>   <td>' . $check_valve_injector . '</td> </tr>';
$content .= '<tr><td>Check Battery / Condition:</td>   <td>' . $check_battery_condition . '</td> </tr>';
$content .= '<tr><td>Start Check Exhaust Smoke / Limits:</td>   <td>' . $start_check_exhaust_smoke . '</td> </tr>';
$content .= '<tr><td>Start Check Abnormal Sounds/Observe:</td>   <td>' . $start_check_abnormal_sounds. '</td> </tr>';
$content .= '<tr><td>AMC VISIT CHECK LIST Comments if any:</td>   <td>' . $row['amc_visit_check_list_comments'] . '</td> </tr>';
$content .= '<tr><td>FAILURE DETAILS:</td>   <td>' . $row['failure_details'] . '</td> </tr>';
$content .= '<tr><td>CAUSE OF FAILURE:</td>   <td>' . $row['cause_of_failure'] . '</td> </tr>';
$content .= '<tr><td>WORK CARRIED OUT:</td>   <td>' . $row['work_carried_out'] . '</td> </tr>';
$content .= '<tr><td>CUSTOMER COMMENTS:</td>   <td>' . $row['customer_comments'] . '</td> </tr>';

$content .= '</table>';

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