<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Introduction to SPL</title>
<link rel="stylesheet" type="text/css" href="./tutorial.css" />
<style type="text/css">
div.thumb {
  float: left;
  width: 25%;
  border: thin silver solid;
  margin: 0.5em;
  padding: 0.5em;
}
div.thumb p {
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
}
</style>
</head>
<body>
<h2>Thumbnails</h2>
<p>By Kevin Waterson</p>

<?php
/*** Check the $_GET variable ***/
   try    {
          /*** connect to the database ***/
		$db_host = "localhost";
        $db_name = "microBlog";
        $db_user = "root";
        $db_password = "root";
        	
        $dbh = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_password);
        
          /*** set the PDO error mode to exception ***/
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          /*** The sql statement ***/
          $sql = "SELECT image_id, thumb_height, thumb_width, image_type, image_name FROM testblob";

          /*** prepare the sql ***/
          $stmt = $dbh->prepare($sql);

          /*** exceute the query ***/
          $stmt->execute(); 

          /*** set the fetch mode to associative array ***/
          $stmt->setFetchMode(PDO::FETCH_ASSOC);

          /*** set the header for the image ***/
          foreach($stmt->fetchAll() as $array)
              {
            echo '<div class="thumb" style="width: '.$array['thumb_width'].'px; height: '.$array['thumb_height'].'px;">
            <p><a href="showfile.php?image_id='.$array['image_id'].'">
            <img src="showthumbs.php?image_id='.$array['image_id'].'" alt="'.$array['image_name'].' /">
            </a></p>
            <p>'.$array['image_name'].'</p></div>';
            }
        }
     catch(PDOException $e)
        {
        echo $e->getMessage();
        }
     catch(Exception $e)
        {
        echo $e->getMessage();
        }
?>

</body>
</html>