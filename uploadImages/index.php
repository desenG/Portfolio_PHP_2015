<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Storing Images in DB</title>
        <script type="text/javascript" src="../jQueryAssets/jquery.min.js"></script>

</head>
<body>


<section class="container">

	<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
	<select name="image_ctgy">
	<option value="animals">Animals</option>
	<option value="vegetables">Vegetables</option>
	<option value="minerals">Minerals</option>
	</select>
	<br>
	<br>
	Select Image File(First image is Compulsory. Only "jpeg","jpg","jif","jfif","jfi", "gif", "png" Type Image Uploaded. Image Size Should Be Less Than 1000KB.
	):
	<div id="filediv"><input name="file[]" type="file" id="file"/></div>
	<br>
	<br>
	<input type="button" id="add_more" class="upload" value="Add More Files"/>
        <br>
	<br>

	
	<button type="submit" name="post">Post</button>
	</form>
</section>

<script type="text/javascript">
var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
 		//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
 		$('#add_more').click(function() {
 			$(this).before($("<div/>", {
 				id: 'filediv'
 			})
 			.fadeIn('slow').append($("<input/>", {
 				name: 'file[]',
 				type: 'file',
 				id: 'file'
 			}), $("<br/><br/>")));
 		});
 		// Following function will executes on change event of file input to select different file.
 		$('body').on('change', '#file', function() {
 		 if (this.files && this.files[0]) {
 			abc += 1; // Incrementing global variable by 1.
 			var z = abc - 1;
 			var x = $(this).parent().find('#previewimg' + z).remove();
 			$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
 			var reader = new FileReader();
 			reader.onload = imageIsLoaded;
 			reader.readAsDataURL(this.files[0]);
			$(this).hide();
 			$("#abcd" + abc).append($("<img/>", {
 				id: 'img',
 				src: 'x.png',
 				alt: 'delete'
 			}).click(function() {
 				$(this).parent().parent().remove();
		    }));
         }
 	   });
      // To Preview Image
      function imageIsLoaded(e) {
          $('#previewimg' + abc).attr('src', e.target.result);
      };
     $('#upload').click(function(e) {
         var name = $(":file").val();
         if (!name) {
         alert("First Image Must Be Selected");
         e.preventDefault();
         }
     });
 });
</script>

<?php
require_once("../config/db.php");
$imageIDs= array();
$db_connection=null;

if(!isset($_POST['image_ctgy']))
    {
    echo '<p>Please select a category!</p>';
    }
else
    {

        uploadImages();
        /*** give praise and thanks to the php gods ***/
        echo '<p>Thank you for submitting</p>';

    }


/**
 *
 * the upload function
 * 
 * @access public
 *
 * @return void
 *
 */
    function uploadImages()
    {
    	$j = 0;     // Variable for indexing uploaded image.
    	
    	$maxsize      = 1000000;// Approx. 1000kb files can be uploaded.
    	if(!$db_connection)
				$db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);

		$connect=$db_connection;//$this->newBlogId
		if ($connect){

				for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
					// Loop to get individual element from the array
					$validextensions = array("jpeg","jpg","jif","jfif","jfi", "gif", "png");      // Extensions which are allowed.
					$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
					$file_extension = end($ext); // Store extensions in the variable.
					$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
					$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
					if (($_FILES["file"]["size"][$i] < $maxsize)
							&& in_array($file_extension, $validextensions)) {
				
						//file moved to database.
						/***  get the image info. ***/
						$size = getimagesize($_FILES['file']['tmp_name'][$i]);
				
						/*** assign our variables ***/
						$image_type   = $size['mime'];
						$imgfp        = file_get_contents($_FILES['file']['tmp_name'][$i]);//fopen($_FILES['userfile']['tmp_name'], 'rb');
						$image_width  = $size[0];
						$image_height = $size[1];
						$image_size   = $size[3];
						$image_name   = $_FILES['file']['name'][$i];
				
				
						/*** create a second variable for the thumbnail ***/
						$thumb_data = $_FILES['file']['tmp_name'][$i];
				
						/*** get the aspect ratio (height / width) ***/
						$aspectRatio=(float)($size[0] / $size[1]);
				
						/*** the height of the thumbnail ***/
						$thumb_height = 100;
				
						/*** the thumb width is the thumb height/aspectratio ***/
						$thumb_width = $thumb_height * $aspectRatio;
				
				
				
						/***  get the image source ***/
						//$src = ImageCreateFromjpeg($thumb_data);
						switch($image_type)
						{
							case "image/png":
								$src = ImageCreateFromPNG($thumb_data);
								break;
							case "image/jpeg":
							case "image/jpg":
							case "image/jif":
							case "image/jfif":
							case "image/jfi":
								$src = ImageCreateFromjpeg($thumb_data);
								break;
							case "image/gif":
								$src = ImageCreateFromGIF($thumb_data);
								break;
						}
						/*** create the destination image ***/
						$destImage = ImageCreateTrueColor($thumb_width, $thumb_height);
				
						/*** copy and resize the src image to the dest image ***/
						ImageCopyResampled($destImage, $src, 0,0,0,0, $thumb_width, $thumb_height, $size[0], $size[1]);
				
						/*** start output buffering ***/
						ob_start();
				
						/***  export the image ***/
						//imageJPEG($destImage);
						switch($image_type)
						{
							case "image/png":
								imagePNG($destImage);
								break;
							case "image/jpeg":
							case "image/jpg":
							case "image/jif":
							case "image/jfif":
							case "image/jfi":
								imageJPEG($destImage);
								break;
							case "image/gif":
								imageGIF($destImage);
								break;
						}
				
						/*** stick the image content in a variable ***/
						$image_thumb = ob_get_contents();
				
						/*** clean up a little ***/
						ob_end_clean();
				
				
				
						$sql_addImage = sprintf(
								"INSERT INTO testblob (image_type ,image, image_height, image_width, image_thumb, thumb_height, thumb_width, image_name,image_ctgy)
		        			 VALUES ('%s' ,'%s', %d, %d, '%s', %d, %d, '%s',%d)",
								mysqli_real_escape_string($connect,$image_type),
								mysqli_real_escape_string($connect,$imgfp),
								$image_height,
								$image_width,
								mysqli_real_escape_string($connect,$image_thumb),
								$thumb_height,
								$thumb_width,
								mysqli_real_escape_string($connect,$image_name),
								mysqli_real_escape_string($_POST['image_ctgy'])
						);
				
						if(mysqli_query($connect, $sql_addImage)==true)
						{
							echo $j. ').<span id="noerror">Image save to database successfully!.</span><br/><br/>';
						}
						else
						{
							echo $j. ').<span id="error">Cannot add to DB. Please try again!.</span><br/><br/>';
								
						}
					}
					else
					{     //   If File Size And File Type Was Incorrect.
						echo $j. ').<span id="error">***Invalid file Size or Type***!.</span><br/><br/>';
					}
				}
			
			
		}
		else {
			$error = mysqli_connect_error();
			echo $j. ').<span id="error">***Could not connect to the database. Error = '.$error.'.***</span><br/><br/>';
		}
			
    	
    }
?>

</body>
</html>