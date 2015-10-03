<?php
require_once("config/db.php");
require_once("classes/Login.php");
require_once("classes/Registration.php");
require_once("classes/Blog.php");


class BlogController {

	public $login;
	public $blog;
	public $registration;
	public $state;
	public function __construct()  
    {  

    	session_save_path('./cgi-bin/tmp');
    	session_start();

    	$this->login = new Login();
    	    	
    	$this->blog = new Blog();
    	
    	$this->registration = new Registration();
    	
    	$this->handleForm();
    }

    public function handleForm()
    {
    	//login relevant
    	if (isset($_GET["logout"])) {
    		$this->login->doLogout();
    	}
    	if (isset($_POST["lander"]) && $_POST["lander"]=='login') {
    		$this->login->dologin();
    	}
    	if (isset($_POST["lander"]) && $_POST["lander"]=='signup') {
			$this->state="signup";
    	}
    	// login via post data (if user just submitted a login form)
    	if (isset($_POST["signin"]) && $_POST["signin"]=='login')
    	{
    		$this->login->dologinWithPostData();

    	    if(count($this->login->errors)>0)
    		{
    			echo '<script type="text/javascript">alert("'.implode(" ",$this->login->errors).'");</script>';
    		}
    		
    	}
    	if (isset($_POST["signin"]) && $_POST["signin"]=='cancel')
    	{
    		$this->login->doLogout();
    	}
    	//register relevant
    	if (isset($_POST["signup"]) && $_POST["signup"]=='register') {
    		$this->registration->registerNewUser();
    		$this->state="signup";

    		if(count($this->registration->errors)>0)
    		{
    			echo '<script type="text/javascript">alert("'.implode(" ",$this->registration->errors).'");</script>';
    		}
    		//header('Location: ./blog.php');
    	}
    	else if (isset($_POST["signup"]) && $_POST["signup"]=='cancel')
    	{
    		//header('Location: ./blog.php');
    	}
    	
    	if($this->login->isUserLogIn())
    	{
    		
    		$this->state="login";
    	}
    	
    	if($this->login->isUserLoggedIn())
    	{
    		$this->state="logedIn";
    	}
    	

    	if (isset($_POST["post"])) { 



    		
    		if(trim($_POST['subject'])!="" && trim($_POST['text'])!="")
    		{
    			try {

    				$this->blog->upload();
    				
    				/*** give praise and thanks to the php gods ***/
    				echo '
				<script type="text/javascript">
    			alert("Thank you for submitting");
                </script>
					';
    				
    				//echo '<p>Thank you for submitting</p>';
    			}
    			catch(Exception $e)
    			{
	    			echo '
					<script type="text/javascript">
	    			alert("'.$e->getMessage().'");
	                </script>
						';
    			}
    		}
    		else
    		{
    			//echo '<p>subject and article shouldnot be empty</p>';
    			echo '
					<script type="text/javascript">
	    			alert("subject and article shouldnot be empty");
	                </script>
						';
    		}
    	}
    }
    
	
	public function invoke()
	{
		//show signup page or show top
		switch($this->state)
		{
			case "signup":
				include("./views/signup.php");
				break;
			case "login":
				include("./views/v_top_login.php");
				echo "<br>";
				$this->blog->displayList();
				break;
			case "logedIn":
				include("./views/v_top_loggedIn.php");
				echo "<br>";
				$this->blog->displayList();
				include("./views/v_bottom_loggedIn.php");
				//include("./views/tinymce.php");
				break;
			default:
				include("./views/v_top_loggedOut.php");
				echo "<br>";
				$this->blog->displayList();
		}
	}
	
	

	
}

?>