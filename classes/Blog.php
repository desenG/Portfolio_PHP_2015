<?php
/**
 * Class registration
 * handles the user registration
 */
class Blog
{
    /**@var object $db_connection The database connection*/
    private $db_connection = null;
    /**@var array $errors Collection of error messages*/
    public $errors = array();
    /**@var array $messages Collection of success / neutral messages */
    public $messages = array();
    
    public $imageIDs= array();
    
    public $blog_subject;
    
    public $blog_text;
    
    public $relativelink;
    
    public $author;
    
    public $newBlogId;
    
    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$message = new Message();"
     */
    public function __construct()
    {

    	// create/read session, absolutely necessary
    	session_save_path('./cgi-bin/tmp');
    	session_start();
    	
    	
    }
	public function rollbackImages()
	{
		if($this->db_connection)
			$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
		foreach ($this->imageIDs as &$imageID) {
			mysqli_query($connect, "DELETE FROM images WHERE image_id = ".$imageID);
		}
		unset($imageID); // break the reference with the last element
		
	}
    public function uploadImages()
    {
    	$j = 0;     // Variable for indexing uploaded image.
    	
    	$maxsize      = 1000000;// Approx. 1000kb files can be uploaded.
    	if(!$this->db_connection)
				$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);

		$connect=$this->db_connection;//$this->newBlogId
		if ($connect){
			if($this->newBlogId!=null)
			{
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
								"INSERT INTO images (image_type ,image, image_height, image_width, image_thumb, thumb_height, thumb_width, image_name,blog_id)
		        			 VALUES ('%s' ,'%s', %d, %d, '%s', %d, %d, '%s',%d)",
								mysqli_real_escape_string($connect,$image_type),
								mysqli_real_escape_string($connect,$imgfp),
								$image_height,
								$image_width,
								mysqli_real_escape_string($connect,$image_thumb),
								$thumb_height,
								$thumb_width,
								mysqli_real_escape_string($connect,$image_name),
								$this->newBlogId
						);
				
						if(mysqli_query($connect, $sql_addImage)==true)
						{
							//echo $j. ').<span id="noerror">Image save to database successfully!.</span><br/><br/>';
							$lastImageId =mysqli_insert_id($connect);
							$this->imageIDs[]=$lastImageId;
						}
						else
						{
							if(count($this->imageIDs)>0)
								$this->rollbackImages();
							mysqli_query($connect, "DELETE FROM blog WHERE blog_id = ".$this->newBlogId);
								
							throw new Exception("$j. ').Cannot add to DB. Please try again!.");
						}
					}
					else
					{     //   If File Size And File Type Was Incorrect.
						
						if(count($this->imageIDs)>0)
							$this->rollbackImages();
						mysqli_query($connect, "DELETE FROM blog WHERE blog_id = ".$this->newBlogId);
						throw new Exception( $j. ').***Invalid file Size or Type***');
					}
				}
			}
			
		}
		else {
			$error = mysqli_connect_error();
			throw new Exception("Could not connect to the database. Error = $error.<br>");
			//echo $j. ').<span id="error">***Could not connect to the database. Error = '.$error.'.***</span><br/><br/>';
		}
			
    	
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
	public function upload(){
		$this->blog_subject = trim($_POST['subject']);
		$this->blog_text=trim($_POST['text']);
		$this->relativelink=trim($_POST['relativelink']);

		try {


				
			if(!$this->db_connection)
				$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
				
			$connect=$this->db_connection;
			if ($connect){
				//check current user
				$user_name=$_SESSION['user_name'];
				$sql = "SELECT user_id
                        FROM users
                        WHERE user_name = '" . $user_name .  "';";
				
				
				$result_of_login_check = mysqli_query($connect, $sql);
				
				// if this user exists
				if ($result_of_login_check->num_rows == 1)
				{
						
					// get result row (as an object)
					$result_row = $result_of_login_check->fetch_object();
						
					$user_id= $result_row->user_id;
					//create new blog
					$sql_addblog = sprintf(
							"INSERT INTO blog (blog_subject,blog_text,user_id)
		        					 VALUES ('%s','%s',%d)",
							mysqli_real_escape_string($connect, $this->blog_subject),
							mysqli_real_escape_string($connect,$this->blog_text),
							$user_id
					);
						
					if(!mysqli_query($connect, $sql_addblog))
					{
						throw new Exception("Add new blog failed. Try again.");
					}
					else 
					{
						$lastblogId =mysqli_insert_id($connect);
						//add relativelink to new blog
						if($this->relativelink!="")
						{
							$sql_updateblog = sprintf(
									"update blog set relativelink ='%s'
		        							 WHERE blog_id=%d",
									mysqli_real_escape_string($connect,$this->relativelink),
									$lastblogId
							);
								
							if(!mysqli_query($connect, $sql_updateblog))
							{
								mysqli_query($connect, "DELETE FROM blog WHERE blog_id = ".$lastblogId);
								throw new Exception("Add new blog failed. Try again.");
							}
								
						}
						$this->newBlogId=$lastblogId;
						//if(count($_FILES['file']['name'])>0 && $_FILES['file']['tmp_name'][0][3]>0)
							$this->uploadImages();
							
					}
				}
				else
				{
					mysqli_query($connect, "DELETE FROM images WHERE image_id = ".$lastId);
					throw new Exception("Add new blog failed. Relogin and Try again.");
				}
			}
			else {
				$error = mysqli_connect_error();
				throw new Exception("Could not connect to the database. Error = $error.<br>");
				//echo $j. ').<span id="error">***Could not connect to the database. Error = '.$error.'.***</span><br/><br/>';
			}
			
			
			
			
		}
		catch (Exception $e)
		{
			echo '
					<script type="text/javascript">
	    			alert("'.$e->getMessage().'");
	                </script>
						';
		}

	}
	
	public function displayList(){

		// Create connection
		$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);

		if ($connect){
		
			$sqlQuery = " SELECT b.blog_id, b.blog_subject, b.blog_text, b.time_stamp "
						.",u.user_name "
						."FROM blog b "
 						."inner join users u " 
 						."on b.user_id = u.user_id "
						.";"
						;			
			$result = mysqli_query($connect, $sqlQuery);
		
			if( $result )
			{

				while( $row = mysqli_fetch_assoc($result) )
				{	

					$output_i="";
					
					$sqlQuery_i = " SELECT * "
							."FROM images "
							."WHERE blog_id = "
							.$row['blog_id']
							.";";
					

					$result_i = mysqli_query($connect, $sqlQuery_i);
					
					if( $result_i )
					{
							while( $row_i = mysqli_fetch_assoc($result_i) )
							{
								$output_i.='
								<div class="thumb" style="width: '.$row['thumb_width'].'px; height: '.$row['thumb_height'].'px;">
 		            				<p>
										<a href="showfile.php?image_id='.$row_i['image_id'].'">
											<img src="showthumbs.php?image_id='.$row_i['image_id'].'" alt="'.$row_i['image_name'].' /">
										</a>
									</p>
 		            			</div>
								<br>
								';
							}
					}	
					
					echo
					'
						<section class="container panel panel-default panel-body">
					        <article class="col-md-8">
					            <h1 class="color_1">
					                <div class="font_1">'.$row['blog_subject'].'</div>
					                <div >by <span style="color:gray">' . $row['user_name'] . '<br>Post on: '.$row['time_stamp'].'</span></div>
					            </h1>
					                		
					            <p>
									'.$row['blog_text'].'
					            </p>
										
					            </br>
					            </br>
					        </article>
					        <article class="col-md-4">
				        		'.$output_i.'
 		            		</article>
					    </section> 
							
							
					';
					
					

				}
			}
			else
			{
				//if $result was not set display error messages from our link
				$this->errors[]="Could not connect to the database. Error =". mysqli_error( $db_link );
				echo "<p>" . mysqli_error( $db_link ) . "</p>\n\t\t";
			}
		
		}else{
			$error = mysql_error();
			$this->errors[]="Could not connect to the database. Error =". $error;
			echo "Could not connect to the database. Error = $error.\n<br>";
		}
		
	}//close populateMessageList
	

	
}//close Message class
?>