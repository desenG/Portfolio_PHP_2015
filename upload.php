<?php
require_once("config/db.php");

if (isset($_POST['submit'])) {
	$imageIDs= array();
	$j = 0;     // Variable for indexing uploaded image.
	
	$target_path = "uploads/";     // Declaring Path for uploaded images.
	$maxsize      = 100000;// Approx. 100kb files can be uploaded.
	$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
	
	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
		// Loop to get individual element from the array
		$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
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

		  	if ($connect){
	
		  		$sql_addImage = sprintf(
		  				"INSERT INTO images (image_type ,image, image_height, image_width, image_thumb, thumb_height, thumb_width, image_name)
		        			 VALUES ('%s' ,'%s', %d, %d, '%s', %d, %d, '%s')",
		  				mysqli_real_escape_string($connect,$image_type),
		  				mysqli_real_escape_string($connect,$imgfp),
		  				$image_height,
		  				$image_width,
		  				mysqli_real_escape_string($connect,$image_thumb),
		  				$thumb_height,
		  				$thumb_width,
		  				mysqli_real_escape_string($connect,$image_name)
		  		);
		  
		  		if(mysqli_query($connect, $sql_addImage)==true)
		  		{
		  			echo $j. ').<span id="noerror">Image save to database successfully!.</span><br/><br/>';
		  			$lastImageId =mysqli_insert_id($connect);
		  			$imageIDs[]=$lastImageId;
		  			echo '
					<script type="text/javascript">
	    			alert("'.count($imageIDs).'");
	                </script>
						';
		  		}
		  		else 
		  		{
		  			
		  		}
		  	}
		  	else {
		  		$error = mysqli_connect_error();
		  		throw new Exception("Could not connect to the database. Error = $error.<br>");
		  		echo $j. ').<span id="error">***Could not connect to the database. Error = '.$error.'.***</span><br/><br/>';
		  	}
		  	
		  		
		  
		  
		} 
		else 
		{     //   If File Size And File Type Was Incorrect.
		  echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
		}
	}
}
?>