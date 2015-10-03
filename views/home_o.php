<script type="text/javascript">
 	$( "li" ).removeClass( "active" );
	$("#homelink").addClass( "active" );
</script>
   <section class="container panel panel-default panel-body">
        <article class="col-md-4">
            <img alt="Image no exist" width="100%" height="100%"  src="./img/me.jpg" >
        </article>
        <article class="col-md-4">
            <h1 class="font_1 color_1">
                <div><?=S_NAV_Hello?>,</div>
                <div class="font_2"><?=S_HOME_I_am_available_for_hiring ?>.</div>
            </h1>
            <p>
				<?=S_SUMMERY?>
            </p>
            <p><a class="box_w_shader btn btn-primary btn-lg" href="index.php?page=cv" role="button"><?=S_HOME_BUTTON_My_CV ?> &raquo;</a></p>
        </article>
        <article class="col-md-4">
            <h1 class="color_1"><?=S_Telephone ?>:</h1>
            <p>613-406 3813</p>
            <h1 class="color_1"><?=S_Email ?>:</h1>
            <p><a href="mailto:jason.desen.guo@gmail.com">jason.desen.guo@gmail.com</a></p>
        </article> 
    </section> 

    <section class="container ">
        <article class="col-md-4 panel panel-default panel-body1 first-child">
            <h1 class="color_1"><?=S_HOME_Introduce_title ?></h1>
            <p>
            	<?=S_HOME_Introduce_content ?>
            </p>
        </article>
        <article class="col-md-4 panel panel-default panel-body1">
            <h1 class="color_1"><?=S_HOME_FavoriteQuote_title ?></h1>
            <p><?=S_HOME_FavoriteQuote_content ?></p>
        </article>
        <article class="col-md-4 panel panel-default panel-body1">
            <h1 class="color_1">RECENT PROJECT</h1>
            <ul>
                <li>
	            	ASP.NET MVC project.<a href="http://aspspider.info/jasondesenguo">link to the project</a>
	            </li>
            	<li>
	            	Jave EE web project with JBoss Enterprise application server in openshift.<a href="http://desen-j2eepro.rhcloud.com/">link to the project</a>
	            </li>
	            <li>
	            	Design and implement the Blog module feature with PHP in this web site.<a href="blog.php">link to the project</a>
	            </li>
	            <li>
	            	Made Document conversion tools with VS 2013, asp.net MVC, entity framework database first, JQuery, bootstrap.
	            </li>
            </ul>
        </article>  
    </section> 