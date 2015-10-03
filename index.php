<?php 
	include_once("controller/HomeController.php");

	$controller = new HomeController();
	

?>

<!DOCTYPE html>
<html>

<head>

        <title></title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>


        <!-- CSS | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <link  rel="stylesheet" type="text/css" href="BootstrapAssets/stylesheets/bootstrap.min.css" />

        <!-- CSS | font-awesome -->
        <!-- Credits: http://fortawesome.github.io/Font-Awesome/icons/ -->
        <link rel="stylesheet" type="text/css" href="OtherAssets/FlexyCard/css/font-awesome.min.css" />

        <!-- CSS | animate -->
        <!-- Credits: http://daneden.github.io/animate.css/ -->
        <link rel="stylesheet" type="text/css" href="OtherAssets/FlexyCard/css/animate.min.css" />

        <!-- CSS | Normalize -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <link rel="stylesheet" type="text/css" href="jQueryAssets/jquery.mCustomScrollbar.css" />
       	
        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="OtherAssets/FlexyCard/css/colors/DarkBlue.css" id="colors-style" />

        <!-- CSS | Style -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <link rel="stylesheet" type="text/css" href="OtherAssets/FlexyCard/css/main.css" />

        <!-- CSS | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <link rel="stylesheet" type="text/css" href="OtherAssets/FlexyCard/css/prettyPhoto.css"/> 

		<!-- CSS | Google Fonts -->
        <link href='http://fonts.useso.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="OtherAssets/FlexyCard/images/favicon/favicon.ico">

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/icons/font-awesome-ie7.min.css"/>
        <![endif]-->

        	<link rel="stylesheet" href="css/main.css" media="screen" type="text/css" />
        
         <style>

            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 0px !important;
                }
                .resp-vtabs ul.resp-tabs-list {
                    width: 10%;
                    margin-right: 2px !important;
                }
            }

            @media only screen and (max-width : 800px){

                .widget-profil {
                    float: none !important;
                }
            }

            .widget-profil {
                float: left;
            }

            .resp-vtabs ul.resp-tabs-list {
                float: right;
            }


        </style>
	

<!-- 	<link rel="stylesheet" href="css/main.css" media="screen" type="text/css" /> -->


</head>



<body>
    <header>
        <?php
		include("views/shared/nav.php");
		?> 
    </header>
    </br>


		<?php
		$controller->invoke();
		?>  

 
 
        <!-- jquery | jQuery 1.11.0 -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="jQueryAssets/jquery.min.js"></script>
 		
        <!-- Js | bootstrap -->
        <!-- Credits: http://getbootstrap.com/ -->
        <script type="text/javascript" src="BootstrapAssets/javascripts/bootstrap.min.js"></script> 
        
        <!-- Js | jquery.cycle -->
        <!-- Credits: https://github.com/malsup/cycle2 -->
        <script type="text/javascript" src="jQueryAssets/jquery.cycle2.min.js"></script>
        
        <!-- jquery | rotate and portfolio -->
        <!-- Credits: http://jquery.com -->
        <script type="text/javascript" src="jQueryAssets/jquery.mixitup.min.js"></script> 
        <script type="text/javascript" src="OtherAssets/FlexyCard/js/HeadImage.js"></script>

        <!-- Js | easyResponsiveTabs -->
        <!-- Credits: http://webtrendset.com/demo/easy-responsive-tabs/Index.html -->
        <script type="text/javascript" src="OtherAssets/FlexyCard/js/easyResponsiveTabs.min.js"></script> 

                <!-- Js | jquery.cookie -->
        <!-- Credits: https://github.com/carhartl/jquery-cookie --> 
        <script type="text/javascript" src="OtherAssets/FlexyCard/js/jsSwitcher/jquery.cookie.js"></script>
        
        <!-- Js | mCustomScrollbar -->
        <!-- Credits: http://manos.malihu.gr/jquery-custom-content-scroller -->
        <script type="text/javascript" src="jQueryAssets/jquery.mCustomScrollbar.concat.min.js"></script>		

        <!-- jquery | prettyPhoto -->
        <!-- Credits: http://www.no-margin-for-errors.com/ -->
        <script type="text/javascript" src="jQueryAssets/jquery.prettyPhoto.js"></script>
        
        <!-- Js | gmaps -->
        <!-- Credits: http://maps.google.com/maps/api/js?sensor=true-->
        
        <script type="text/javascript" src="OtherAssets/FlexyCard/js/gmaps.min.js"></script>

 		<!-- Js | Js -->
        <!-- Credits: http://themeforest.net/user/FlexyCodes -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <!-- code js for image rotate -->
        <script type="text/javascript">

     	$( "li" ).removeClass( "active" );
    	$("#homelink").addClass( "active" );
        
            var mouseX;
            var mouseY;
            var imageOne;

            /* Calling the initialization function */
            $(init);

            /* The images need to re-initialize on load and on resize, or else the areas
             * where each image is displayed will be wrong. */
            $(window).load(init);
            $(window).resize(init);

            /* Setting the mousemove event caller */
            $(window).mousemove(getMousePosition);

            /* This function is called on document ready, on load and on resize
             * and initiallizes all the images */
            function init() {

                /* Instanciate the mouse position variables */
                mouseX = 0;
                mouseY = 0;

                /* Instanciate a HeadImage class for every image */
                imageOne = new HeadImage("one");

            }

            /* This function is called on mouse move and gets the mouse position. 
             * It also calls the HeadImage function to display the correct image*/
            function getMousePosition(event) {

                /* Setting the mouse position variables */
                mouseX = event.pageX;
                mouseY = event.pageY;

                /*Calling the setImageDirection function of the HeadImage class
                 * to display the correct image*/
                imageOne.setImageDirection();

            }

        </script>  

    
</body>


</html>

