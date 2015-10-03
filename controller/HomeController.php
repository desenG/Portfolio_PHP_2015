<?php

class HomeController {

	
	public function __construct()  
    {  
    	session_save_path('./cgi-bin/tmp');
    	session_start();
    }

    
	
	public function invoke()
	{
		if (!isset($_GET['page']))
		{
			// no special page is requested, we'll show main
			include './views/home.php';
		}
		else
		{
			// show the requested page
			switch ($_GET['page'])
			{
				case 'cv':
					$this->cv();
					break;
				case 'contact':
					$this->contact();
					break;
				case 'blog':
					$this->blog();
					break;
			}
		}
	}
	
	public function cv()
	{
		include './views/cv.php';
	}

	public function contact()
	{
		include './views/contact.php';
	}
	//navigate to blog page
	public function blog()
	{

		

	}
	
	public function signup()
	{
		include './views/signup.php';
	}
	
}

?>