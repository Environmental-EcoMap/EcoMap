
<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];

    $recipient = "Ecomap3@gmail.com";
    $formcontent=" From: $name \n";
    $mailheader = "From: $email \r\n";
    $msg =  " $subject \n"."$country \n\n ". " $mailheader ";
    if(mail($recipient, $name, $msg)){
      echo "Thank You! Our team will be with you shortly!" . " -" . "<a href='HomePage.html' style='text-decoration:none;color:#ff0099;text-align:center;'> Return Home</a>";
    }
    else {
      echo ("Error!");
    }
  }
?>
