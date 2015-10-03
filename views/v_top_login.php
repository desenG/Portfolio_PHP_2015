<section class="container">
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="user_name" placeholder="Name" autocomplete="on" />
		<input type="password" name="user_password" placeholder="Password" autocomplete="on" />
		<br>
		<button type="submit" name="signin" value="login">Log In</button>
		<button type="submit" name="signin" value="cancel">Cancel</button>
	</form> 
</section>