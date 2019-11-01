<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'rrydesigns@gmail.com';
    $subject = 'Website Form';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
      $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
      $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
      $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

      if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
        $name_error = 'Invalid name';
      }
      if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
        $email_error = 'Invalid email';
      }
      if(!isset($name_error) && !isset($email_error)){
        if (mail ($to, $subject, $body)) {
	         header("Location: thankyou/index.html");
	   } else {
	    echo '<p>Something went wrong, try again or contact me directly at rrydesigns@gmail.com.</p>';
	   }
    }
  }
?>
