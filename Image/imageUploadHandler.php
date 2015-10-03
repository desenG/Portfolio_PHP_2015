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
		        			 VALUES ('%s' ,'%s', %d, %d, '%s', %d, %d, '%s','%s')",
								mysqli_real_escape_string($connect,$image_type),
								mysqli_real_escape_string($connect,$imgfp),
								$image_height,
								$image_width,
								mysqli_real_escape_string($connect,$image_thumb),
								$thumb_height,
								$thumb_width,
								mysqli_real_escape_string($connect,$image_name),
								mysqli_real_escape_string($connect,$_POST['image_ctgy'])
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
