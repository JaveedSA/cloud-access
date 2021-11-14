
<?php 
require_once 'authenticate.php';
include 'header.php';?>
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Upload</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add files</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header ms-panel-custome">
                                <h6>Add Files</h6>
                                <a href="#" class="ms-text-primary  "></a>
                            </div>
                            <div class="ms-panel-body">
                            
                            <?php 
error_reporting(0);

include('functions.php');
$file_upload_message = '';
if(isset($_POST["upload_files"])) {
	$file_name = $_FILES['upload_file']['name'];
	$file_size = $_FILES['upload_file']['size'];
	$tmp_file = $_FILES['upload_file']['tmp_name'];
	$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
	$file_extension = getFileExtension($file_name);
	if($file_name) {
		if(in_array($file_extension,$valid_file_formats)) { 
			if($file_size < (100024*100024)) {	
				include('config.php');				
				$new_image_name = time().".".$file_extension;
				if($s3->putObjectFile($tmp_file, $bucket , $new_image_name, S3::ACL_PUBLIC_READ)) {
					$file_upload_message = "File Uploaded Successfully to amazon S3.<br><br>";	
					$uploaded_file_path='http://'.$bucket.'.s3.amazonaws.com/'.$new_image_name;
					$file_upload_message .= '<b>Upload File URL:</b>'.$uploaded_file_path."<br/>";
					$file_upload_message .= "<img src='$uploaded_file_path'/>";
				} else { 
					$file_upload_message = "<br>File upload to amazon s3 failed!. Please try again.";				
				} 	
			} else {
				$file_upload_message = "<br>Maximum allowed image upload size is 1 MB.";
			}
		} else {
			$file_upload_message = "<br>This file format is not allowed, please upload only image file.";
		}
	} else {
		$file_upload_message = "<br>Please select image file to upload.";
	}
}
?>
	<form action="" method='post' enctype="multipart/form-data">
    <div class="col-md-6 mb-3">
                                            <label for="validationCustom01"> Upload Image</label>
                                            <div class="input-group">
                                                <input type="file" class="form-control" placeholder=""  required name="upload_file">

                                            </div>
                                            <button class="btn btn-primary mt-4 d-inline w-20" type="submit" name="upload_files" value="submit">upload</button>
                                            <br>
                                            <?php 
	if($file_upload_message) {
		echo $file_upload_message;
	}
	?>
                                        </div>

	</form>
		
	
</div>


	
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/perfect-scrollbar.js"> </script>
        <script src="assets/js/jquery-ui.min.js"> </script>
        <!-- Global Required Scripts End -->
        <!-- Page Specific Scripts Start -->
        <script src="assets/js/slick.min.js"> </script>
        <script src="assets/js/moment.js"> </script>
        <script src="assets/js/jquery.webticker.min.js"> </script>
        <!-- Page Specific Scripts Finish -->
        <!-- Mednalytics core JavaScript -->
        <script src="assets/js/framework.js"></script>
        <!-- Settings -->
        <script src="assets/js/settings.js"></script>
         <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script>
bkLib.onDomLoaded(function() {
       new nicEditor({maxHeight : 200}).panelInstance('area');
       new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
 });
</script>
    </body>


</html>
