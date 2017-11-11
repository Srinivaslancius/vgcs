<?php include_once 'admin_includes/main_header.php'; ?>

<?php  
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            
    $id=1;
    $admin_title = $_POST['admin_title'];  
    $email = $_POST['email'];
    $web_pwd = $_POST['web_pwd'];
    $fb_link = $_POST['fb_link'];
    $twitter_link = $_POST['twitter_link'];
    $gplus_link = $_POST['gplus_link'];
    $mobile = $_POST['mobile'];
    $footer_text = $_POST['footer_text'];
    $address = $_POST['address'];
    if($_FILES["logo"]["name"]!='') {
                                          
        $logo = $_FILES["logo"]["name"];        
        $target_dir = "../uploads/logo/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        $getImgUnlink = getImageUnlink('logo','site_settings','id',$id,$target_dir);
        //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder

        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', web_pwd='$web_pwd', fb_link='$fb_link', twitter_link='$twitter_link', gplus_link='$gplus_link', mobile='$mobile', logo = '$logo', footer_text='$footer_text', address='$address' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script type='text/javascript'>window.location='site_settings.php?msg=success'</script>";
            } else {
               echo "<script type='text/javascript'>window.location='site_settings.php?msg=fail'</script>";
            }
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }  else {
        $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', web_pwd='$web_pwd', fb_link='$fb_link', twitter_link='$twitter_link', gplus_link='$gplus_link', mobile='$mobile',footer_text='$footer_text', address='$address' WHERE id = '$id' ";
        if($conn->query($sql) === TRUE){
           echo "<script type='text/javascript'>window.location='site_settings.php?msg=success'</script>";
        } else {
           echo "<script type='text/javascript'>window.location='site_settings.php?msg=fail'</script>";
        }
    }   
    
}
?>

      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Site Settings</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <?php $getSiteSettings = getDataFromTables('site_settings',$status=NULL,$clause='id',$id=1,$activeStatus=NULL,$activeTop=NULL); 
                  $getSiteSettingsData = $getSiteSettings->fetch_assoc(); ?>
                    <label for="form-control-2" class="control-label">Admin Title</label>
                    <input type="text" name="admin_title" class="form-control" id="form-control-2" placeholder="Admin Title" data-error="Please enter a valid Title." value="<?php echo $getSiteSettingsData['admin_title'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Email</label>
                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" id="form-control-2" placeholder="Email" data-error="Please enter a valid email address." value="<?php echo $getSiteSettingsData['email'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Web Password</label>
                    <input type="password" name="web_pwd"class="form-control" id="form-control-2" placeholder="Password" data-error="Please enter Web Password." value="<?php echo $getSiteSettingsData['web_pwd'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="form-control-2" maxlength="10"  pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" placeholder="Mobile" data-error="Please enter a valid Mobile." value="<?php echo $getSiteSettingsData['mobile'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>         

                  <div class="form-group">
                    <img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" accept="image/*" height="100" width="100" id="output"/>
                  </div>      


                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Logo</label>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input name="logo" id="form-control-22" class="file-upload-input" type="file" multiple="multiple" onchange="loadFile(event)" accept="image/*">
                      </label>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Footer Text</label>
                    <input type="text" name="footer_text" class="form-control" id="form-control-2" placeholder="Footer Text" data-error="Please enter a valid Mobile." value="<?php echo $getSiteSettingsData['footer_text'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Address</label>
                    <textarea type="text" name="address" class="form-control" id="form-control-2" placeholder="Address" data-error="Please enter a valid Mobile." required><?php echo $getSiteSettingsData['address'];?></textarea>
                  </div>
                  <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>           
          </div>
        </div>
      </div>
  
<?php include_once 'admin_includes/footer.php'; ?>