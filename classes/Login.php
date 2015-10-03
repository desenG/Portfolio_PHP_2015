<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {


    	// create/read session, absolutely necessary
    	session_save_path('./cgi-bin/tmp');
    	session_start();
    }

    public function IsAdminCreated()
    {
    	// Create connection
    	$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
    
    	// change character set to utf8 and check it
    	if (!$this->db_connection->set_charset("utf8")) {
    		$this->errors[] = $this->db_connection->error;
    	}
    	 
    
    	 
    	// if no connection errors (= working database connection)
    	if (!$this->db_connection->connect_errno) {
    		 
    		$result=$this->db_connection->query("SELECT count(*) as total from users;");
    		// if this user exists
    		if ($result->num_rows == 1) {
    			 
    			// get result row (as an object)
    			$result_row =$result->fetch_object();
    			if($result_row->total>0)
    			{
    				return true;
    			}
    		}
    		return false;
    
    	}
    	else
    	{
    		//$this->errors[] = "Database connection problem.";
    		echo '
					<script type="text/javascript">
	    			alert("Database connection problem.");
	                </script>
						';
    	}
    }
    
    /**
     * log in without post data
     */
    public function dologin()
    {
    	$_SESSION['user_login_status'] = 1;
    }
    /**
     * log in with post data
     */
    public function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) 
        {
            $this->errors[] = "Username field was empty.";
        } 
        elseif (empty($_POST['user_password'])) 
        {
            $this->errors[] = "Password field was empty.";
        } 
        elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) 
        {        	 
        	$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
        	        	 
        	
            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }



            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escape the POST stuff
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                // database query, getting all the info of the selected user (allows login via email address in the
                // username field)
                $sql = "SELECT user_name, user_hash
                        FROM users
                        WHERE user_name = '" . $user_name .  "';";
                
                
                
                $result_of_login_check = $this->db_connection->query($sql);

                // if this user exists
                if ($result_of_login_check->num_rows == 1) {
                	
                    // get result row (as an object)
                    $result_row = $result_of_login_check->fetch_object();

                    // using PHP 5.5's password_verify() function to check if the provided password fits
                    // the hash of that user's password
                    
                    if ((md5($_POST['user_password'])==$result_row->user_hash)) 
                    {
                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['user_login_status'] = 2;
                        
                        

                    } 
                    else 
                    {
                        $this->errors[] = "Wrong password. Try again.";
                    }
                } else {
                    $this->errors[] = "This user does not exist.";
                }
            } else {
                $this->errors[] = "Database connection problem.";
            }
        }
    }
    
    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "You have been logged out.";

    }
   
    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLogIn()
    {
    	if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
    		return true;
    	}
    	// default return
    	return false;
    }
    

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {

        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 2) {
            return true;
        }
        // default return
        return false;
    }
    
    public function getLogedInUserName()
    {

    	if($this->isUserLoggedIn())
    	return $_SESSION['user_name'];
    	return null;
    }
}
