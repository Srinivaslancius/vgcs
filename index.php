<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>

<?php
error_reporting(0);
$msgerror = '';
$msgsuccess='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



   // if ($_POST['amc_check_report'] == "" || $_POST['service_check_report'] == "" || $_POST['serial_number'] == "" || $_POST['customer_name'] == "" || $_POST['date1'] == "" || $_POST['contact_person_name'] == "" || $_POST['mobile'] == "" || $_POST['commissioning_visit'] == "" || $_POST['paidvisit'] == "" ||  $_POST['break_down_visit'] == "" || $_POST['amcvisit'] == ""|| $_POST['eng_id'] == "" || $_POST['alt_model'] == "" || $_POST['rating_kva'] == "" || $_POST['eng_id1'] == "" || $_POST['alt_modal_1'] == "" || $_POST['rating_kva_1'] == "" || $_POST['eng_id2'] == "" || $_POST['alt_modal_2'] == "" || $_POST['rating_kva_2'] == "" || $_POST['date_of_informed'] == "" || $_POST['date_of_visit'] == "" || $_POST['location'] == "" || $_POST['check12'] == "" || $_POST['check13'] == "" || $_POST['water_temp'] == "" || $_POST['fuel_pressure'] == "" || $_POST['oil_pressure'] == "" || $_POST['battery_chg'] == "" || $_POST['speed_freq'] == "" || $_POST['load_km'] == "" || $_POST['load_amps'] == "" || $_POST['voltage'] == "" || $_POST['check21'] == "" || $_POST['check22'] == "" || $_POST['check23'] == "" || $_POST['check24'] == "" || $_POST['check25'] == "" || $_POST['check26'] == "" || $_POST['check27'] == "" || $_POST['check28'] == "" || $_POST['check29'] == "" || $_POST['check30'] == "" || $_POST['check31'] == "" || $_POST['check32'] == "" || $_POST['amc_visit_check_list'] == "" || $_POST['failure_datails'] == "" || $_POST['cause_of_failure'] == "" || $_POST['work_carried_out'] == "" || $_POST['customer_comments'] == "" || $_POST['incharge_sign'] == "" || $_POST['service_eng_sign'] == "") {

        $msgerror = 'Please Fill all field';
    //} else {

        /**/
        $mailto = "harikanth@lanciussolutions.com";
        $mailfrom = "harikanthnakka9@gmail.com";
        $amc_check_report = $_POST['amc_check_report'];
        $service_check_report = $_POST['service_check_report'];
        $serial_number = $_POST['serial_number'];
        $customer_name = $_POST['customer_name'];
        $date1 = $_POST['date1'];
        $contact_person_name = $_POST['contact_person_name'];
        $mobile = $_POST['mobile'];
        $commissioning_visit = $_POST['commissioning_visit'];
        $paidvisit = $_POST['paidvisit'];
        $break_down_visit = $_POST['break_down_visit'];
        $amcvisit = $_POST['amcvisit'];
        $eng_id = $_POST['eng_id'];
        $alt_model = $_POST['alt_model'];
        $rating_kva = $_POST['rating_kva'];
        $eng_id1 = $_POST['eng_id1'];
        $alt_modal_1 = $_POST['alt_modal_1'];
        $rating_kva_1 = $_POST['rating_kva_1'];
        $eng_id2 = $_POST['eng_id2'];
        $alt_modal_2 = $_POST['alt_modal_2'];
        $rating_kva_2 = $_POST['rating_kva_2'];
        $date_of_informed = $_POST['date_of_informed'];
        $date_of_visit = $_POST['date_of_visit'];
        $location = $_POST['location'];
        $check12 = $_POST['check12'];
        $check13 = $_POST['check13'];
        $water_temp = $_POST['water_temp'];
        $fuel_pressure = $_POST['fuel_pressure'];
        $oil_pressure = $_POST['oil_pressure'];
        $battery_chg = $_POST['battery_chg'];
        $speed_freq = $_POST['speed_freq'];
        $load_km = $_POST['load_km'];
        $load_amps = $_POST['load_amps'];
        $voltage = $_POST['voltage'];
        $check21 = $_POST['check21'];
        $check22 = $_POST['check22'];
        $check23 = $_POST['check23'];
        $check24 = $_POST['check24'];
        $check25 = $_POST['check25'];
        $check26 = $_POST['check26'];
        $check27 = $_POST['check27'];
        $check28 = $_POST['check28'];
        $check29 = $_POST['check29'];
        $check30 = $_POST['check30'];
        $check31 = $_POST['check31'];
        $check32 = $_POST['check32'];
        $amc_visit_check_list = $_POST['amc_visit_check_list'];
        $failure_datails = $_POST['failure_datails'];
        $cause_of_failure = $_POST['cause_of_failure'];
        $work_carried_out = $_POST['work_carried_out'];
        $customer_comments = $_POST['customer_comments'];
        $incharge_sign = $_POST['incharge_sign'];
        $service_eng_sign = $_POST['service_eng_sign'];




        $description = wordwrap($description, 100, "<br />");
        /* break description content every after 100 character. */


        $content = '';

        $content .= '
				<style>
				body{
				   overflow-x: hidden;
				  }
				  .border-div{
				  border:2px solid black;
				  margin: 10px 0;
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


				</style>

				';
        /* you css */



        

        $content .= '<body>
<div class="container">	<div class="row"><div class="col-sm-12">
			<div class="border-div">
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<center><h3>VGCS</h3></center>
						</div>
						<div class="col-sm-6">
							<center><h3>VENUS GENIE CARE SERVICES</h3></center>
						</div>
						<div class="col-sm-3">
							<h5>MOBILE: +91-98492575</h5>
							<h5>E-mail: venugopal.7@hotmail.com</h5>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>REPORT TYPE:</h4>
						</div>
						<div class="col-sm-3">
							<h5>AMC REPORT '.$amc_check_report.'</h5>
						</div>
						<div class="col-sm-3">
							<h5>SERVICE REPORT '.$service_check_report.'</h5>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-4">
									<h5>SL.NO.</h5>
								</div>
								<div class="col-sm-8">
									<h5>'.$serial_number.'</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-3">
									<h5>Customer Name:</h5>
								</div>
								<div class="col-sm-9">
									<h5>'.$customer_name.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-3">
									<h5>Date:</h5>
								</div>
								<div class="col-sm-9">
									<h5>'.$date1.'</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-3">
									<h5>Contact Person Name:</h5>
								</div>
								<div class="col-sm-9"> 
									<h5>'.$contact_person_name.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-3">
									<h5>Cell:</h5>
								</div>
								<div class="col-sm-9">
									<h5>'.$mobile.'</h5>
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
								<h5>'.$commissioning_visit.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-2" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>PaidVisit</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$paidvisit.'</h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-8">
									<h5>Break Down Visit</h5>
								</div>
								<div class="col-sm-4">
									<h5>'.$break_down_visit.'</h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-2" style="border-left:1px solid black ">
							<div class="row">
								<div class="col-sm-6">
									<h5>AMCVisit</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$amcvisit.'</h5>
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
									<h5> '.$eng_id.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$alt_model.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$rating_kva.'</h5>
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
									<h5>'.$eng_id1.' </h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$alt_modal_1.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$rating_kva_1.'</h5>
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
									<h5> '.$eng_id2.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$alt_modal_2.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$rating_kva_2.'</h5>
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
									<h5>'.$date_of_informed.'</h5>
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
									<h5>'.$date_of_visit.'</h5>
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
									<h5>'.$location.'</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-8">
							<h4>AMC VISIT CHECK LIST '.$check12.'</h4>
						</div>
						<div class="col-sm-4">
							<h4>SERVICE VISIT CHECK LIST '.$check13.'</h4>
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
									<h5>'.$water_temp.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Fuel Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$fuel_pressure.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Oil Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$oil_pressure.'</h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Battery chg</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$battery_chg.'</h5>
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
									<h5>'.$speed_freq.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in kw</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$load_km.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in AMPS</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$load_amps.'</h5>
								</div>
							</div>
						</div>
					<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Voltage</h5>
								</div>
								<div class="col-sm-6">
									<h5>'.$voltage.'</h5>
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
									<h5>Check oil level / Condition</h5>
								</div>
								<div class="col-sm-2">
									'.$check21.'
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Radiator all Houses/Condition</h5>
								</div>
								<div class="col-sm-2">
									'.$check22.'
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Breather / Clean</h5>
								</div>
								<div class="col-sm-2">
									'.$check23.'
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
									'.$check24.'
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Drive Belts / Condition</h5>
								</div>
								<div class="col-sm-2">
									'.$check25.'
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Air Filters / Clean</h5>
								</div>
								<div class="col-sm-2">
									'.$check26.'
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
								'.$check27.'
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="border-right:1px solid black">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check if any / Leakages</h5>
							</div>
							<div class="col-sm-2">
								'.$check28.'
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check Valve Injector / Adjust</h5>
							</div>
							<div class="col-sm-2">
								'.$check29.'
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
									<h5>Check battery / Condition</h5>
								</div>
								<div class="col-sm-2">
									'.$check30.'
								</div>
							</div>
						</div>

						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Exhaust Smoke / Limits</h5>
								</div>
								<div class="col-sm-2">
									'.$check31.'
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Abnormal Sounds/Observe</h5>
								</div>
								<div class="col-sm-2">
									'.$check32.'
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
							<h4>'.$amc_visit_check_list.'</h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>FAILURE DETAILS:</h4>
						</div>
						<div class="col-sm-9">
							<h4>'.$failure_datails.'</h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CAUSE OF FAILURE:</h4>
						</div>
						<div class="col-sm-9">
							<h4>'.$cause_of_failure.'</h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>WORK CARRIED OUT:</h4>
						</div>
						<div class="col-sm-9">
							<h4>'.$work_carried_out.'</h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CUSTOMER COMMENTS:</h4>
						</div>
						<div class="col-sm-9">
							<h4>'.$customer_comments.'</h4>
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
							<div class="row">
								<div class="col-sm-3">
									<h5>SIGNATURE</h5>
								</div>
								<div class="col-sm-9">
									<h5>'.$incharge_sign.'</h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-3">
									<h5>SIGNATURE</h5>
								</div>
								<div class="col-sm-9">
									<h5>'.$service_eng_sign.'</h5>
								</div>
							</div>
						</div>						
					</div>
					
				</div>
			</div>
		</div></div> </div></body>';
        

        
        echo $content; die;

        


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

            $msgsuccess = 'Mail Send Successfully';
        } else {

            $msgerror = 'Main not send';
        }


        /**/
    //}
}
?>

<?php
if ($msgerror) {
    ?>
                <div class="alert alert-danger"><?php echo $msgerror; ?></div>
            <?php } else if ($msgsuccess) { ?>
                <div class="alert alert-success"><?php echo $msgsuccess; ?></div>
            <?php } ?>

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
		<form method="post">
		<div class="col-sm-12">
			<div class="border-div">
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<center><h3>VGCS</h3></center>
						</div>
						<div class="col-sm-6">
							<center><h3>VENUS GENIE CARE SERVICES</h3></center>
						</div>
						<div class="col-sm-3">
							<h5>MOBILE: +91-98492575</h5>
							<h5>E-mail: venugopal.7@hotmail.com</h5>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>REPORT TYPE:</h4>
						</div>
						<div class="col-sm-3">
							<h5>AMC REPORT <input type="checkbox" name="amc_check_report" value="<?php echo $_POST['amc_check_report']; ?>"></h5>
						</div>
						<div class="col-sm-3">
							<h5>SERVICE REPORT <input type="checkbox" name="service_check_report" value="<?php echo $_POST['service_check_report']; ?>"></h5>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-4">
									<h5>SL.NO.</h5>
								</div>
								<div class="col-sm-8">
									<h5><input type="text" class="form-control" name="serial_number" value="<?php echo $_POST['serial_number']; ?>"></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-3">
									<h5>Customer Name:</h5>
								</div>
								<div class="col-sm-9">
									<h5><input type="text" class="form-control" name="customer_name" value="<?php echo $_POST['customer_name']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-3">
									<h5>Date:</h5>
								</div>
								<div class="col-sm-9">
									<h5><input class="form-control"placeholder="mm/dd/yyyy" name="date1" id="datepicker3" required value="<?php echo $_POST['date1']; ?>" ></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-9">
							<div class="row">
								<div class="col-sm-3">
									<h5>Contact Person Name:</h5>
								</div>
								<div class="col-sm-9"> 
									<h5><input type="text" class="form-control" name="contact_person_name" value="<?php echo $_POST['contact_person_name']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-3">
									<h5>Cell:</h5>
								</div>
								<div class="col-sm-9">
									<h5><input type="text" class="form-control" name="mobile" value="<?php echo $_POST['mobile']; ?>"></h5>
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
								<h5><input class="form-control" type="text" name="commissioning_visit" value="<?php echo $_POST['commissioning_visit']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-2" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>PaidVisit</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="paidvisit" value="<?php echo $_POST['paidvisit']; ?>"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-left:1px solid black">
							<div class="row">
								<div class="col-sm-8">
									<h5>Break Down Visit</h5>
								</div>
								<div class="col-sm-4">
									<h5><input type="text" class="form-control" name="break_down_visit" value="<?php echo $_POST['break_down_visit']; ?>"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-2" style="border-left:1px solid black ">
							<div class="row">
								<div class="col-sm-6">
									<h5>AMCVisit</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="amcvisit" value="<?php echo $_POST['amcvisit']; ?>"></h5>
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
									<h5> <input type="text" class="form-control" name="eng_id" value="<?php echo $_POST['eng_id']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="alt_model" value="<?php echo $_POST['alt_model']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="rating_kva" value="<?php echo $_POST['rating_kva']; ?>"></h5>
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
									<h5> <input type="text" class="form-control" name="eng_id1" value="<?php echo $_POST['eng_id1']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="alt_modal_1" value="<?php echo $_POST['alt_modal_1']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="rating_kva_1" value="<?php echo $_POST['rating_kva_1']; ?>"></h5>
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
									<h5> <input type="text" class="form-control" name="eng_id2" value="<?php echo $_POST['eng_id2']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>ALT./MODEL:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="alt_modal_2" value="<?php echo $_POST['alt_modal_2']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-6">
									<h5>RATING/KVA:</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="rating_kva_2" value="<?php echo $_POST['rating_kva_2']; ?>"></h5>
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
									<h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker" name="date_of_informed" required value="<?php echo $_POST['date_of_informed']; ?>"></h5>
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
									<h5><input class="form-control"placeholder="mm/dd/yyyy" name="date_of_visit" id="datepicker2" required value="<?php echo $_POST['date_of_visit']; ?>"></h5>
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
									<h5><input type="text" class="form-control" name="location" value="<?php echo $_POST['location']; ?>"></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-8">
							<h4>AMC VISIT CHECK LIST <input type="checkbox" name="check12" value="<?php echo $_POST['check12']; ?>"></h4>
						</div>
						<div class="col-sm-4">
							<h4>SERVICE VISIT CHECK LIST <input type="checkbox" name="check13" value="<?php echo $_POST['check13']; ?>"></h4>
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
									<h5><input type="text" class="form-control" name="water_temp" value="<?php echo $_POST['water_temp']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Fuel Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="fuel_pressure" value="<?php echo $_POST['fuel_pressure']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Oil Pressure</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="oil_pressure" value="<?php echo $_POST['oil_pressure']; ?>"></h5>
								</div>
							</div>
						</div>
						
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Battery chg</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="battery_chg" value="<?php echo $_POST['battery_chg']; ?>"></h5>
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
									<h5><input type="text" class="form-control" name="speed_freq" value="<?php echo $_POST['speed_freq']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in kw</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="load_km" value="<?php echo $_POST['load_km']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Load in AMPS</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="load_amps" value="<?php echo $_POST['load_amps']; ?>"></h5>
								</div>
							</div>
						</div>
					<div class="col-sm-3" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-6">
									<h5>Voltage</h5>
								</div>
								<div class="col-sm-6">
									<h5><input type="text" class="form-control" name="voltage" value="<?php echo $_POST['voltage']; ?>"></h5>
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
									<h5>Check oil level / Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check21" value="<?php echo $_POST['check21']; ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Radiator all Houses/Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check22" value="<?php echo $_POST['check22']; ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Breather / Clean</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check23" value="<?php echo $_POST['check23']; ?>">
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
									<input type="checkbox" name="check24" value="<?php echo $_POST['check24']; ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Drive Belts / Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check25" value="<?php echo $_POST['check25']; ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Check Air Filters / Clean</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check26" value="<?php echo $_POST['check26']; ?>">
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
								<input type="checkbox" name="check27" value="<?php echo $_POST['check27']; ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-4" style="border-right:1px solid black">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check if any / Leakages</h5>
							</div>
							<div class="col-sm-2">
								<input type="checkbox" name="check28" value="<?php echo $_POST['check28']; ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-10">
								<h5>Check Valve Injector / Adjust</h5>
							</div>
							<div class="col-sm-2">
								<input type="checkbox" name="check29" value="<?php echo $_POST['check29']; ?>">
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
									<h5>Check battery / Condition</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check30" value="<?php echo $_POST['check30']; ?>">
								</div>
							</div>
						</div>

						<div class="col-sm-4" style="border-right:1px solid black">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Exhaust Smoke / Limits</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check31" value="<?php echo $_POST['check31']; ?>">
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-10">
									<h5>Start Check Abnormal Sounds/Observe</h5>
								</div>
								<div class="col-sm-2">
									<input type="checkbox" name="check32" value="<?php echo $_POST['check32']; ?>">
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
							<h4><textarea class="form-control" id="exampleFormControlTextarea1" name="amc_visit_check_list" rows="3" placeholder="Text here.." ><?php echo $_POST['amc_visit_check_list']; ?></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>FAILURE DETAILS:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" id="exampleFormControlTextarea1" name="failure_datails" rows="3" placeholder="Text here.."><?php echo $_POST['failure_datails']; ?></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CAUSE OF FAILURE:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" id="exampleFormControlTextarea1" name="cause_of_failure" rows="3" placeholder="Text here.."><?php echo $_POST['cause_of_failure']; ?></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>WORK CARRIED OUT:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" id="exampleFormControlTextarea1" name="work_carried_out" rows="3" placeholder="Text here.."><?php echo $_POST['work_carried_out']; ?></textarea></h4>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<h4>CUSTOMER COMMENTS:</h4>
						</div>
						<div class="col-sm-9">
							<h4><textarea class="form-control" id="exampleFormControlTextarea1" name="customer_comments" rows="3" placeholder="Text here.."><?php echo $_POST['customer_comments']; ?></textarea></h4>
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
							<div class="row">
								<div class="col-sm-3">
									<h5>SIGNATURE</h5>
								</div>
								<div class="col-sm-9">
									<h5><input type="text" class="form-control" name="incharge_sign" value="<?php echo $_POST['incharge_sign']; ?>"></h5>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-3">
									<h5>SIGNATURE</h5>
								</div>
								<div class="col-sm-9">
									<h5><input type="text" class="form-control" name="service_eng_sign" value="<?php echo $_POST['service_eng_sign']; ?>"></h5>
								</div>
							</div>
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