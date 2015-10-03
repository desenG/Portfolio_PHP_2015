 <script type="text/javascript">
 	$( "li" ).removeClass( "active" );
	$("#contactlink").addClass( "active" );
</script>
<section class="container">
            <article class="col-md-4">
                <h1 class="font_1 color_1">
                    <div class="font_2">Desen Guo</div>
                </h1>
                </br>
                </br> 
                <p>74 Thornbury Cres. </p>
                <p>Ottawa, ON</p>
                <p><?=S_Telephone ?>: 6134063813</p>
                <p><?=S_Email ?>: <a href="mailto:jason.desen.guo@gmail.com">jason.desen.guo@gmail.com</a></p>
            </article>
            <article class="col-md-8">
                <!--  The form that will be parsed by jQuery before submit  -->
                  <form action="./mail_handler.php" method="post" id="messageForm" novalidate>
                    <fieldset>
                    <legend style="width:auto;"><?=S_CONTACT_Looking_forward_to_answering_your_email ?>.</legend>
                        <p class="form-group">
                            <input id="name" name="name" type="text"  size="25" class="form-control"  placeholder="* Name" />
                        </p>
                        <p class="form-group">
                            <input id="subject" name="subject" type="text"  size="25" class="form-control"  placeholder="* subject" />
                        </p>
                        <p class="form-group">
                            <input id="email" name="email" size="25" class="form-control"  placeholder="* Email"/>
                        </p>
                        <p>
                            <textarea id="message" name="message" size="100" class="form-control" placeholder="* Message"  rows="3"></textarea>
                        </p>
                    </fieldset> 
                    </br>
                    <button type="submit" class="btn btn-default"><?=S_CONTACT_BUTTON_Submit ?></button>

                  </form>


                
            </article> 
    </section>
