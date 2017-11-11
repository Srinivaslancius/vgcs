<?php 
include_once('manage_webmaster/admin_includes/config.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>VGCS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	.container-fluid{
	width: 100%;
	}
		.body{
	width:100% !important; 
	margin:0 !important; 
	padding:0 !important; 
	-webkit-text-size-adjust:none;
	-ms-text-size-adjust:none; 
	
	font-style:normal;
	background-color: #8a98be !important;
	}
	.header{
	background-color:#15317E;
	color:white;
	width:100%;
	}
	.content{
	background-color:#e7eaf2;
	color:#15317E;
	width:100%;
	padding-top:60px;
	text-align:center;
	font-size:14px;
	line-height:18px;
	font-style:normal;
	height:462px;
	font-weight:600;
	}
	h4{
	color: #15317E;}
	
	.logo-responsive{
	max-width: 100%;
	height: auto !important;
	}
	.footer{
	background-color:#15317E;
	color:white;
	width:100%;
	padding-top:9px;
	padding-bottom:5px;
	}
	@media screen and (min-width: 480px) {
		.btn-lg{
		
		}
		}
	</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="container header">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
				<center><img src="logo.png" class="logo-responsive"></center>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					
				</div>
			</div>
		</div>
		<div class="container content">
			<form autocomplete="off" method="post" action="service_form.php" >
              <div class="form-group">
                <h3>Password</h3>
                <center><input type="password" class="form-control" id="form-control-2" placeholder="Password" data-error="Please enter password." required name="password" style="width:30%"></center>
                <div class="help-block with-errors"></div>
              </div>             
              <center><button type="submit" class="btn btn-info btn-block" style="width:30%">Submit</button></center>
            </form>
			
		</div>
		<div class="container footer">
			<center><p>©2015-2017 vgcs. desined by <a href="https://lanciussolutions.com/">Lancius IT Solutions</a></p></center>
		</div>
	</div>
	</body>
</html>