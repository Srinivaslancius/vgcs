<?php
error_reporting(1);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['lid'];

$mailto = "srinivas@lanciussolutions.com";
$mailfrom = "srinud8008@gmail.com";
$mailsubject = "VGCS Service Details";
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
        <th>VGCS</th>
        <th></th>
        <th>VENUS GENIE CARE SERVICES</th>
        <th></th>
        <th>MOBILE:+91-9849257587<br>E-mail:venugopal.7@hotmail.com</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>REPORT TYPE:</td>
        <td>AMC REPORT</td>
        <td></td>
        <td>SL.NO.</td>
        <td>Date:</td>

      </tr>
       <tr>
        <td>Customer Name:</td>
        <td></td>
        <td>Email:</td>
        <td></td>
        <td>Cell:</td>
      </tr>
        <tr>
        <td>VISIT TYPE:</td>
        <td>Commissioning Visit</td>
        <td>Paid Visit</td>
        <td>Break Down Visit</td>
        <td>AMC Visit</td>
      </tr>
      <tr>
        <td>ENG/Eqp Id:</td>
        <td></td>
        <td>ALT./MODEL:</td>
        <td></td>
        <td>RATING/KVA:</td>
      </tr>
      <tr>
        <td>ENG/SI.No:</td>
        <td></td>
        <td>ALT./SI.No:</td>
        <td></td>
        <td>PANNEL/TYPE:</td>
      </tr>
       <tr>
        <td>PM/DATE:</td>
        <td></td>
        <td>PM/TYPE:</td>
        <td></td>
        <td>RUN/HRS:</td>
      </tr>
      <tr>
        <td>DATE OF INFORMED:</td>
        <td></td>
        <td>DATE OF VISIT:</td>
        <td></td>
        <td>LOCATION:</td>
      </tr>
      <tr>
        <td>AMC VISIT CHECK LIST </td>
        <td></td>
        <td></td>
        <td></td>
        <td>SERVICE VISIT CHECK LIST</td>
      </tr>
       <tr>
        <td>Water Temp</td>
        <td>Fuel Pressure</td>
        <td>Oil Pressure</td>
        <td>Battery chg</td>
        <td></td>
      </tr>
       <tr>
        <td>Speed/Freq</td>
        <td>Load in kw</td>
        <td>Load in AMPS</td>
        <td>Voltage</td>
        <td></td>
      </tr>
      <tr>
        <td>Check Oil level / Condition</td>
        <td></td>
        <td>Check Radiator all Houses/Condition</td>
        <td></td>
        <td>Check Breather / Clean</td>
      </tr>
       <tr>
        <td>Check Fuel / Condition</td>
        <td></td>
        <td>Check Drive Belts / Condition</td>
        <td></td>
        <td>Check Air Filters / Clean</td>
      </tr>
       <tr>
        <td>Check Coolent / Condition</td>
        <td></td>
        <td>Check if any / Leakages</td>
        <td></td>
        <td>Check Valve Injector / Adjust</td>
      </tr>
       <tr>
        <td>Check Battery / Condition</td>
        <td></td>
        <td>Start Check Exhaust Smoke / Limits</td>
        <td></td>
        <td>Start Check Abnormal Sounds/Observe</td>
      </tr>
      <tr>
        <td>AMC VISIT CHECK LIST Comments if any:</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>FAILURE DETAILS:</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>CAUSE OF FAILURE:</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>WORK CARRIED OUT:</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
       <tr>
        <td>CUSTOMER COMMENTS:</td>
        <td></td>
        <td></td>
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