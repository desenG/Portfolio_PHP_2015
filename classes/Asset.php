<?php
/**
 * Class registration
 * handles the user registration
 */
class Asset
{
    /**@var object $db_connection The database connection*/
    private $db_connection = null;
    /**@var array $errors Collection of error messages*/
    public $errors = array();
    /**@var array $messages Collection of success / neutral messages */
    public $messages = array();
    
    public $blog_subject;
    
    public $blog_text;
    
    public $relativelink;
    
    public $author;
    
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
		
		/*** check if a file was uploaded ***/
		if( is_uploaded_file($_FILES['userfile']['tmp_name']) && getimagesize($_FILES['userfile']['tmp_name']) != false)
		{
			

		    /***  get the image info. ***/
		    $size = getimagesize($_FILES['userfile']['tmp_name']);
		
		    /*** assign our variables ***/
		    $image_type   = $size['mime'];
		    $imgfp        = file_get_contents($_FILES['userfile']['tmp_name']);//fopen($_FILES['userfile']['tmp_name'], 'rb');
		    $image_width  = $size[0];
		    $image_height = $size[1];
		    $image_size   = $size[3];
		    $image_name   = $_FILES['userfile']['name'];
		    $maxsize      = 99999999;
		
		    /***  check the file is less than the maximum file size ***/
		    if($_FILES['userfile']['size'] < $maxsize )
	        {
		        /*** create a second variable for the thumbnail ***/
		        $thumb_data = $_FILES['userfile']['tmp_name'];
		
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
	        	  default:
	        	  	throw new Exception("Unsupported Image Format. Only png,jpeg and gif!");
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
		        

		        
		        $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
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
		        		$lastImageId =mysqli_insert_id($connect);

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
		        			 
		        			$sql_addblog = sprintf(
		        					"INSERT INTO blog (blog_subject,blog_text,image_id,user_id)
		        					 VALUES ('%s','%s',%d,%d)",
		        					mysqli_real_escape_string($connect, $this->blog_subject),
		        					mysqli_real_escape_string($connect,$this->blog_text),
		        					$lastImageId,
		        					$user_id
		        					);

		        			if(!mysqli_query($connect, $sql_addblog))
		        			{

		        				mysqli_query($connect, "DELETE FROM images WHERE image_id = ".$lastImageId);
		        				throw new Exception("Add new blog failed. Try again.");
		        			}
		        			else {
		        				$lastblogId =mysqli_insert_id($connect);
		        				 
		        				if($this->relativelink!="")
		        				{
		        					$sql_updateblog = sprintf(
		        							"update blog set relativelink ='%s' 
		        							 WHERE blog_id=%d",
		        							mysqli_real_escape_string($connect,$this->relativelink),
		        							$lastblogId
		        							);
		        		
		        					if(mysqli_query($connect, $sql_updateblog))
		        					{
		        						mysqli_query($connect, "DELETE FROM images WHERE image_id = ".$lastImageId);
		        						mysqli_query($connect, "DELETE FROM blog WHERE blog_id = ".$lastblogId);
		        						throw new Exception("Add new blog failed. Try again.");
		        					}
		        		
		        				}
		        		
		        			}
		        		}
		        		else
		        		{
		        			mysqli_query($connect, "DELETE FROM images WHERE image_id = ".$lastId);
		        			throw new Exception("Add new blog failed. Relogin and Try again.");
		        		}
		        	}
		        
		        }else{
		        	$error = mysqli_connect_error();
		        	throw new Exception("Could not connect to the database. Error = $error.<br>");
		        }
	
	        }
		    else
		    {
		    	/*** throw an exception is image is not of type ***/
		    	throw new Exception("File Size Error");
		    }			
		}
		else
		{
		    
		}
	}
	
	public function displayList(){
		// Create connection
		$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
		
		$landing="";
		
		if ($connect){
		
			$sqlQuery = " SELECT b.blog_id, b.blog_subject, b.blog_text, b.relativelink, b.time_stamp "
						.",u.user_name "
						.",i.image_id, i.thumb_height, i.thumb_width, i.image_type, i.image_name "
						."FROM blog b "
 						."inner join users u " 
 						."on b.user_id = u.user_id "
						."inner join images i " 
						."on b.image_id = i.image_id"
						.";"
						;			
			$result = mysqli_query($connect, $sqlQuery);
		
			if( $result )
			{
				while( $row = mysqli_fetch_assoc($result) )
				{					
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
								<a href="'.$row['relativelink'].'">'.$row['relativelink'].'</a>			
					            </br>
					            </br>
					        </article>
					        <article class="col-md-4">
								<div class="thumb" style="width: '.$row['thumb_width'].'px; height: '.$row['thumb_height'].'px;">
 		            				<p>
										<a href="showfile.php?image_id='.$row['image_id'].'">
 		            						<img src="showthumbs.php?image_id='.$row['image_id'].'" alt="'.$row['image_name'].' /">
 		            					</a>
 		            				</p>
 		            			</div>					        
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