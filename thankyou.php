<?php
ob_start();
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 
$getData = getDataFromTables('site_settings',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData  = $getData->fetch_assoc();
?>
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
		<div class="col-sm-12">
			<div class="border-div">
				<div class="container-fluid bottom-margin">
					<div class="row">
						<div class="col-sm-3">
							<center><h3>VGCS</h3></center>
						</div>
						<div class="col-sm-6">
							<center><h3><?php echo $getSiteSettingsData['admin_title']; ?></h3></center>
						</div>
						<div class="col-sm-3">
							<h5>MOBILE: +91-<?php echo $getSiteSettingsData['mobile']; ?></h5>
							<h5>E-mail: <?php echo $getSiteSettingsData['email']; ?></h5>
						</div>
					</div>
				</div>
				<div class="container-fluid bottom-margin" style="text-align:center">
					<h2>Thank You <br/>
					Form Submitted Successfully.. </h2>
				</div>
			
			
				
		
		</div>	
	</div>
</div>

</body>
</html>