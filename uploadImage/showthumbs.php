<?php

/*** some basic sanity checks ***/
if(filter_has_var(INPUT_GET, "image_id") !== false && filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT) !== false)
    {
    /*** assign the image id ***/
    $image_id = filter_input(INPUT_GET, "image_id", FILTER_SANITIZE_NUMBER_INT);
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
        $sql = "SELECT image_thumb, image_type FROM testblob WHERE image_id=$image_id";

        /*** prepare the sql ***/
        $stmt = $dbh->prepare($sql);

        /*** exceute the query ***/
        $stmt->execute(); 

        /*** set the fetch mode to associative array ***/
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        /*** set the header for the image ***/
        $array = $stmt->fetch();

        /*** check we have a single image and type ***/
        if(sizeof($array) == 2)
            {
            /*** set the headers and display the image ***/
            header("Content-type: ".$array['image_type']);

            /*** output the image ***/
            echo $array['image_thumb'];
            }
        else
            {
            throw new Exception("Out of bounds Error");
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
    }
else
    {
    echo 'Please use a real id number';
    }
?>