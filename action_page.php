<?php

$otheremail = $_POST["email"]; //<-----This will be the enquirers' email
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$country = $_POST["country"];
$subject = $_POST["subject"];

//set this to your email
$to = "aprositosakis@yahoo.gr";

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. " .
        " Here are the details:\n Name: $fname \n " .
        "Last Name: $lname\n".
        "Email: $otheremail\n" .
        "\n Message: \n $subject \n ";

$headers = "From: $otheremail\n";

$headers .= "Reply-To: $email_address";

mail($to, $email_subject, $email_body, $headers);

//redirect to the 'thank you' page

header("Location: thank_you.html");
?>