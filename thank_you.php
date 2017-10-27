<?php
error_reporting(1);
include "manage_webmaster/admin_includes/config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM service_form WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
.one{
	color:green;
	font-size:65px;
	}
</style>
<div class="text-center">
  <h1 class="display-3 one">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for VGCS SERVICE DETAILS Attachment.</p>
  <hr>
  <p>
    <strong><?php echo $row['customer_name'];?></strong>
  </p>
  <p>
    <strong><?php echo $row['contact_email'];?></strong>
  </p>
  <p>
    <strong><?php echo $row['contact_mobile'];?></strong>
  </p>
</div>