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

$content .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <style>
	.container-fluid{
	     padding-bottom:100px;}
        .table {
            display: table;
            border: 1px solid #808080;
            text-align: center;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            padding:0px;
            margin-bottom: 0;
			
        }

        .table-row {
            display: table-row;
        }

        .table-cell {
            display: table-cell;
            border-bottom: 1px solid #b2b2b2;
          padding-top:7px;
		  padding-bottom:7px;
		  font-size:13px;
        }
        .table-header {
            font-weight: bold;
            background-color: #d8d8d8;
        }
		.text{
		 font-weight: bold;
         background-color: #d8d8d8;}
    </style>';

$content .= '<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VENUS GENIE CARE SERVICES</title
</head>

<body>
    <br><br>
    <div class="container-fluid">
        <div class="row"> 
		<div class="col-sm-2">
		</div>
            <div class="col-sm-8">
                <div class="table">
                    <div class="table-row table-header">
                        <div class="table-cell">VGCS</div> 
						<div class="table-cell"></div>
						<div class="table-cell">VENUS GENIE CARE SERVICES</div>
                        <div class="table-cell"></div>
                        <div class="table-cell">Mobile: +91-9849257587<br>mail:venugopal.7@hotmail.com</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">REPORT TYPE:</div>
                        <div class="table-cell">AMC REPORT</div>
						<div class="table-cell">SERVICE REPORT</div>
                        <div class="table-cell">SL.NO.</div>
                        <div class="table-cell">Date:</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">Customer Name:</div>
						<div class="table-cell"></div>
                        <div class="table-cell">Email:</div>
                        <div class="table-cell"></div>
                        <div class="table-cell">Cell:</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">VISIT TYPE:</div>
                        <div class="table-cell">Commissioning Visit</div>
                        <div class="table-cell">Paid Visit</div>
                        <div class="table-cell">Break Down Visit</div>
						<div class="table-cell">AMC Visit</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">ENG/Eqp Id:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">ALT./MODEL:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">RATING/KVA:</div>                       
                    </div>
					 <div class="table-row">
                        <div class="table-cell">ENG/SI.No:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">ALT./SI.No:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">PANNEL/TYPE:</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">PM/DATE:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">PM/TYPE:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">RUN/HRS:</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">DATE OF INFORMED:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">DATE OF VISIT:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">LOCATION:</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">AMC VISIT CHECK LIST </div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell">SERVICE VISIT CHECK LIST</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Water Temp</div>
						 <div class="table-cell">Fuel Pressure</div>
                        <div class="table-cell">Oil Pressure</div>
						 <div class="table-cell">Battery chg</div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Speed/Freq</div>
						 <div class="table-cell">Load in kw</div>
                        <div class="table-cell">Load in AMPS</div>
						 <div class="table-cell">Voltage</div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Check Oil level / Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Check Radiator all Houses/Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Check Breather / Clean</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Check Fuel / Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Check Drive Belts / Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Check Air Filters / Clean</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Check Coolent/ Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">CCheck if any / Leakages</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Check Valve Injector / Adjust</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">Check Battery / Condition</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Start Check Exhaust Smoke / Limits</div>
						 <div class="table-cell"></div>
                        <div class="table-cell">Start Check Abnormal Sounds/Observe</div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">AMC VISIT CHECK LIST Comments if any:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">FAILURE DETAILS:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">CAUSE OF FAILURE:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">WORK CARRIED OUT:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>                       
                    </div>
					<div class="table-row">
                        <div class="table-cell">CUSTOMER COMMENTS:</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>                       
                    </div>   
					<div class="table-row">
                        <div class="table-cell">INCHARGE</div>
						 <div class="table-cell"></div>
                        <div class="table-cell"></div>
						 <div class="table-cell"></div>
                        <div class="table-cell">SERVICE ENGINEER</div>                       
                    </div>   					
                </div>
            </div>
			<div class="col-sm-2">
        </div>
    </div>
	</div>
</body>
</html>';

                //echo $content; die;

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