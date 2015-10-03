

<?php 
	include_once("controller/BlogController.php");

	$controller = new BlogController();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title></title>



	        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="BootstrapAssets/stylesheets/bootstrap.min.css" />
        
       <script type="text/javascript" src="jQueryAssets/jquery.min.js"></script>
    <script src="BootstrapAssets/javascripts/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="BootstrapAssets/javascripts/ie10-viewport-bug-workaround.js"></script>   
	
	<link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
	
</head>



<body>
    <header>
        <?php
		include("views/shared/nav.php");
		?> 
    </header>
    </br>
    </br>



    </br>
    </br>
    <section id="main">
		<?php
		$controller->invoke();
		?>  
    </section> 
    <footer>
        <p class="container">&copy; 2015 Desen Guo Right</p>
    </footer>



 	<script type="text/javascript">
 	$( "li" ).removeClass( "active" );
	$("#bloglink").addClass( "active" );
	</script>
    
</body>


</html>

