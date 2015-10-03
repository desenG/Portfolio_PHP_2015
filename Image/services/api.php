<?php
require_once("../../config/db.php");

 	require_once("Rest.inc.php");
	
	class API extends REST {
	
		public $data = "";
		
// 		const DB_SERVER = "localhost";
// 		const DB_USER = "root";
// 		const DB_PASSWORD = "root";
// 		const DB = "microBlog";

		private $db = NULL;
		private $mysqli = NULL;
		public function __construct(){
			parent::__construct();				// Init parent contructor
			$this->dbConnect();					// Initiate Database connection
		}
		
		/*
		 *  Connect to Database
		*/
		private function dbConnect(){
			$this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_NAME);//self::DB_SERVER, self::DB_USER, self::DB_PASSWORD, self::DB);
		}
		
		/*
		 * Dynmically call the method based on the query string
		 */
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['x'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404); // If the method not exist with in this class "Page not found".
		}
				
		private function login(){
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}
			$email = $this->_request['email'];		
			$password = $this->_request['pwd'];
			if(!empty($email) and !empty($password)){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$query="SELECT uid, name, email FROM users WHERE email = '$email' AND password = '".md5($password)."' LIMIT 1";
					$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);

					if($r->num_rows > 0) {
						$result = $r->fetch_assoc();	
						// If success everythig is good send header as "OK" and user details
						$this->response($this->json($result), 200);
					}
					$this->response('', 204);	// If no records "No Content" status
				}
			}
			
			$error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
		}
		
		private function images(){	
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$query="
					SELECT 
					image_id,image_type,image_height,thumb_height,thumb_width,image_ctgy,image_name
					FROM testblob;
					";
			$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);

			if($r->num_rows > 0){
				$result = array();
				while($row = $r->fetch_assoc()){
					$result[] = $row;
				}
				$this->response($this->json($result), 200); // send user details
			}
			$this->response('',204);	// If no records "No Content" status
		}
		private function categories(){
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$query="
					SELECT distinct portfolio_id,portfolio_subject

					FROM portfolio;
					";
			$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
		
			if($r->num_rows > 0){
				$result = array();
				while($row = $r->fetch_assoc()){
					$result[] = $row;
				}
				$this->response($this->json($result), 200); // send user details
			}
			$this->response('',204);	// If no records "No Content" status
		}
		private function image(){	
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$id = (int)$this->_request['id'];
			if($id > 0){	
				$query="SELECT distinct 
				image_id,image_type,image_height,thumb_height,thumb_width,image_ctgy,image_name
				FROM testblob 
				where  image_id=$id";
				$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
				if($r->num_rows > 0) {
					$result = $r->fetch_assoc();	
					$this->response($this->json($result), 200); // send user details
				}
			}
			$this->response('',204);	// If no records "No Content" status
		}
		
		private function insertImage(){
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}

			$image = json_decode(file_get_contents("php://input"),true);
			$column_names = array('imageName', 'email', 'city', 'address', 'country');
			$keys = array_keys($image);
			$columns = '';
			$values = '';
			foreach($column_names as $desired_key){ // Check the image received. If blank insert blank into the array.
			   if(!in_array($desired_key, $keys)) {
			   		$$desired_key = '';
				}else{
					$$desired_key = $image[$desired_key];
				}
				$columns = $columns.$desired_key.',';
				$values = $values."'".$$desired_key."',";
			}
			$query = "INSERT INTO images(".trim($columns,',').") VALUES(".trim($values,',').")";
			if(!empty($image)){
				$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
				$success = array('status' => "Success", "msg" => "Image Created Successfully.", "data" => $image);
				$this->response($this->json($success),200);
			}else
				$this->response('',204);	//"No Content" status
		}
		private function updateImage(){
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}
			$image = json_decode(file_get_contents("php://input"),true);
			$id = (int)$image['id'];
			$column_names = array("image_ctgy","image_name");
			$keys = array_keys($image['image']);
			$columns = '';
			$values = '';
			foreach($column_names as $desired_key){ // Check the image received. If key does not exist, insert blank into the array.
			   if(!in_array($desired_key, $keys)) {
			   		$$desired_key = '';
				}else{
					$$desired_key = $image['image'][$desired_key];
				}
				$columns = $columns.$desired_key."='".$$desired_key."',";
			}
			$query = "UPDATE testblob SET ".trim($columns,',')." WHERE image_id=$id";
			if(!empty($image)){
				$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
				$success = array('status' => "Success", "msg" => "Image ".$id." Updated Successfully.", "data" => $image);
				$this->response($this->json($success),200);
			}else
				$this->response('',204);	// "No Content" status
		}
		
		private function deleteImage(){
			if($this->get_request_method() != "DELETE"){
				$this->response('',406);
			}
			$id = (int)$this->_request['id'];
			if($id > 0){				
				$query="DELETE FROM testblob WHERE image_id = $id";
				$r = $this->mysqli->query($query) or die($this->mysqli->error.__LINE__);
				$success = array('status' => "Success", "msg" => "Successfully deleted one record.");
				$this->response($this->json($success),200);
			}else
				$this->response('',204);	// If no records "No Content" status
		}
		
		/*
		 *	Encode array into JSON
		*/
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>