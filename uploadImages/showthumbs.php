<?php
require_once("../config/db.php");

/*** some basic sanity checks ***/
if(filter_has_var(INPUT_GET, "image_id") !== false && filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT) !== false)
    {
    /*** assign the image id ***/
    $image_id = filter_input(INPUT_GET, "image_id", FILTER_SANITIZE_NUMBER_INT);
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
    if ($connect){
	    	$sqlQuery = sprintf(
	    			"SELECT image_thumb FROM images WHERE image_id=%d;",
	    			$image_id
	    	);
	    	$result = mysqli_query($connect, $sqlQuery);
	    	
    		if( $result )
			{					
	    		// get result row (as an object)
	    		$row = $result->fetch_object();
	    		
				$image=$row->image_thumb;
		
				/*** set the headers and display the image ***/
				header("Content-type: ".$imageType);

	    		/*** output the image ***/
	    		echo $image;
			}
    		else
    		{
    			echo "Image:id-".$image_id." not found<br>";
    		}
    }
    else
    {
    	$error = mysqli_connect_error();
    	echo "Could not connect to the database. Error = $error.<br>";
    }
}
else
{
    echo 'Please use a real id number';
}

?>



	