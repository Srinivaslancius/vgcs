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
$content .= '<tr><td>PM/DATE:</td>   <td>' . $row['pm_date'] . '</td> </tr>';
$content .= '<tr><td>PM/TYPE:</td>   <td>' . $row['pm_type'] . '</td> </tr>';
$content .= '<tr><td>RUN/HRS:</td>   <td>' . $row['run_hrs'] . '</td> </tr>';
$content .= '<tr><td>DATE OF INFORMED:</td>   <td>' . $row['date_of_informed'] . '</td> </tr>';
$content .= '<tr><td>DATE OF VISIT:</td>   <td>' . $row['date_of_visit'] . '</td> </tr>';
$content .= '<tr><td>LOCATION:</td>   <td>' . $row['location'] . '</td> </tr>';
$content .= '<tr><td>VISIT CHECK LIST TYPE:</td>   <td>' . $row['visit_checklist_type'] . '</td> </tr>';

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