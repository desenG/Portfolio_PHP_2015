<?php 

    $to = "jason.desen.guo@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    //mail($to,$subject,$message,$header);
    

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

	echo  '<script type="text/javascript">alert("Mail Sent. Thank you '. $name . ', I will contact you shortly.");window.location.href = "index.php";</script>';
	?>
