<?php
//Send email with pdf attachement
$content = '';
$content .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="style.css">
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
    
    $content .= '<body><div class="container">
    <div class="row">
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
                            <h5>AMC REPORT <input type="radio"></h5>
                        </div>
                        <div class="col-sm-3">
                            <h5>SERVICE REPORT <input type="radio"></h5>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h5>SL.NO.</h5>
                                </div>
                                <div class="col-sm-8">
                                    <h5><input type="text" class="form-control" value="1234567895" readonly></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Customer Name:</h5>
                                </div>
                                <div class="col-sm-7">
                                    <h5><input type="text" class="form-control" value="1234567895" readonly></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Date:</h5>
                                </div>
                                <div class="col-sm-9">
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker3" 
                                    value="1234567895" readonly ></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Person Name:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h5>Contact Email:</h5>
                                </div>
                                <div class="col-sm-7"> 
                                    <h5><input type="email" class="form-control" placeholder="E-mail id"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h5>Cell:</h5>
                                </div>
                                <div class="col-sm-9">
                                    <h5><input type="text" class="form-control"></h5>
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
                                <h5><input type="radio"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>Paid Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio"></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3" style="border-left:1px solid black">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>Break Down Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio"></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-2" style="border-left:1px solid black ">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5>AMC Visit</h5>
                                </div>
                                <div class="col-sm-4">
                                    <h5><input type="radio"></h5>
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
                                    <h5> <input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./MODEL:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RATING/KVA:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
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
                                    <h5>ENG/SI.No:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>ALT./SI.No:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PANNEL/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
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
                                <h5>PM/DATE:</h5>
                                </div>
                                <div class="col-sm-6" >
                                    <h5> <input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>PM/TYPE:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>RUN/HRS:</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
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
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker" required></h5>
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
                                    <h5><input class="form-control"placeholder="mm/dd/yyyy" id="datepicker2" required></h5>
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
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4>AMC VISIT CHECK LIST <input type="radio"></h4>
                        </div>
                        <div class="col-sm-4">
                            <h4>SERVICE VISIT CHECK LIST <input type="radio"></h4>
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
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Fuel Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Oil Pressure</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Battery chg</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
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
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in kw</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Load in AMPS</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm-3" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Voltage</h5>
                                </div>
                                <div class="col-sm-6">
                                    <h5><input type="text" class="form-control"></h5>
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
                                    <h5>Check Oil level / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Radiator all Houses/Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Breather / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
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
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Drive Belts / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Check Air Filters / Clean</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
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
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" style="border-right:1px solid black">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check if any / Leakages</h5>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-10">
                                <h5>Check Valve Injector / Adjust</h5>
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox">
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
                                    <h5>Check Battery / Condition</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4" style="border-right:1px solid black">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Exhaust Smoke / Limits</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Start Check Abnormal Sounds/Observe</h5>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox">
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
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>FAILURE DETAILS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CAUSE OF FAILURE:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>WORK CARRIED OUT:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bottom-margin">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>CUSTOMER COMMENTS:</h4>
                        </div>
                        <div class="col-sm-9">
                            <h4><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text here.."></textarea></h4>
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
                            <h5>SIGNATURE</h5>
                        </div>
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                        <h5>SIGNATURE</h5>
                        </div>                      
                    </div>
                    
                </div>
            </div>
        </div>  
    </div>
</div> </body>';

    echo $content; die;


    require_once('html2pdf/html2pdf.class.php');


    $to = 'srinivas@lanciussolutions.com';
    $from = 'srinivas@lanciussolutions.com';
    $subject = 'Test Subject';  

    $html2pdf = new HTML2PDF('P', 'A4', 'fr');

    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));

    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
    $html2pdf->WriteHTML($content);


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
        header('Location: thankyou.php');
    } else {

        $msgerror = 'Main not send';
    }
?>