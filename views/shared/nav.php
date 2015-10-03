<?php 


session_save_path('./cgi-bin/tmp');
session_start();
if(isset($_GET['language']) && trim($_GET['language'])=="CH") {$_SESSION['language']="Chinese";}
if(isset($_GET['language']) && trim($_GET['language'])=="EN") {$_SESSION['language']="English";}
if(isset($_GET['language']) && trim($_GET['language'])=="FR") $_SESSION['language']="French";
include_once("config/stringVar.php");

?>

<script type="text/javascript">
	//$('body').css('backgroundColor', "#F8F8F8").css('backgroundImage', 'none');
</script>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><spand class="color_1">Desen</spand><spand class="color_white"> Guo<span class="font_2">Software Developer for hire</span></spand></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li id="homelink"><a href="index.php">
			<?= S_NAV_HOME?>
			</a></li>
<!-- 			<li id="cvlink"><a href="index.php?page=cv"> -->
			<?//=S_NAV_RESUME?>
<!-- 			</a></li> -->
<!-- 			<li id="contactlink"><a href="index.php?page=contact"> -->
			<?//=S_NAV_CONTACT?>
<!-- 			</a></li> -->
			<li id="bloglink"><a href="blog.php"><?=S_NAV_BLOG?></a></li>
			<li ><a href="Blog"><?=S_NAV_BLOG?>Text Admin</a></li>
			<li ><a href="Image">Image Admin</a></li>
			<li ><a href="Portfolio">Portfolio Admin</a></li>
				        <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php if(!isset($_SESSION['language'])) echo 'Languages'; else echo $_SESSION['language']?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php if(strpos($url=$_SERVER["REQUEST_URI"], '?') !== FALSE)  {if(strpos($url, 'language')!== FALSE)  echo str_replace(array("EN","FR"),"CH",$url); else echo $url.'&language=CH';} else echo $url.'?language=CH';?>">Chinese</a></li>
                <li><a href="<?php if(strpos($url=$_SERVER["REQUEST_URI"], '?') !== FALSE)  {if(strpos($url, 'language')!== FALSE)  echo str_replace(array("EN","CH"),"FR",$url); else echo $url.'&language=FR';} else echo $url.'?language=FR';?>">French</a></li>
                <li><a href="<?php if(strpos($url=$_SERVER["REQUEST_URI"], '?') !== FALSE)  {if(strpos($url, 'language')!== FALSE)  echo str_replace(array("CH","FR"),"EN",$url); else echo $url.'&language=EN';} else echo $url.'?language=EN';?>">English</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



