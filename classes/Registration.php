<?php

/**
 * Class registration
 * handles the user registration
 */
class Registration
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
    	
    	// create/read session, absolutely necessary
    	session_save_path('./cgi-bin/tmp');
    	session_start();
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    public function registerNewUser()
    {


        if (empty($_POST['user_name_new'])) 
        {
            $this->errors[] = "Empty Username";
        } 
        elseif (empty($_POST['user_password_new'])) 
        {
            $this->errors[] = "Empty Password";
        } 
        elseif (strlen($_POST['user_password_new']) < 6) 
        {
            $this->errors[] = "Password has a minimum length of 6 characters";
        } 
        elseif (strlen($_POST['user_name_new']) > 64 || strlen($_POST['user_name_new']) < 2) 
        {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
        } 
        elseif (!filter_var($_POST['user_name_new'], FILTER_VALIDATE_EMAIL)) 
        {
            $this->errors[] = "Invalid email format!";
        } 
        elseif (!empty($_POST['user_name_new'])
            && strlen($_POST['user_name_new']) <= 64
            && strlen($_POST['user_name_new']) >= 2
            && filter_var($_POST['user_name_new'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
        	&& strlen($_POST['user_password_new']) >= 6
        ) 
        {


        	$this->db_connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name_new'], ENT_QUOTES));

                $user_password = md5($_POST['user_password_new']);

                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username is already taken.";
                   
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO users (user_name, user_hash)
                            VALUES('" . $user_name . "', '" . $user_password . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                    	
                    	$_SESSION['user_name'] = $user_name;
                    	$_SESSION['user_login_status'] = 2;
                        $this->messages[] = "Your account has been created successfully. You can now log in.";
                    	
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }

    }
}
