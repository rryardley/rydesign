<?php

// define variables and set to empty values

  $name = $email = $message = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message']

    $email_from = 'RRYDesigns@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name./n".
                    "User Email: $visitor_email./n".
                      "User Message: $message./n";

    $to = "RRYDesigns@gmail.com";

    $headers = "From: $email_from /r/n";

    $headers .= "Reply-To: $visitor_email /r/n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    echo "Thank you, I'll be in touch!";
  } else {
    echo "Error, please try again or contact me directly.";
  }
  

 ?>
