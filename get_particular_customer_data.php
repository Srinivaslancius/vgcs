<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php";
//echo "<pre>"; print_r($_REQUEST); die;
$customer_name = $_POST['customer_name'];
$dj_id = $_POST['dj_id'];
$sql = "SELECT * FROM service_form WHERE customer_name = '$customer_name' OR dj_id = '$dj_id' ORDER BY id DESC";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$contact_person_name = $row['contact_person_name'];
$contact_mobile = $row['contact_mobile'];
$contact_email = $row['contact_email'];
$sl_no = $row['sl_no'];
$eng_eqp_id = $row['eng_eqp_id'];
$alt_model = $row['alt_model'];
$rating_kva = $row['rating_kva'];
$pannel_type = $row['pannel_type'];
$run_hrs = $row['run_hrs'];
if($result->num_rows != 0) {
	echo $contact_person_name.",".$contact_mobile.",".$contact_email.",".$sl_no.",".$eng_eqp_id.",".$alt_model.",".$rating_kva.",".$pannel_type.",".$run_hrs;
} else {
	echo "0";
}

?>