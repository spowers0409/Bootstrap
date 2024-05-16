<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "spowers0409@gmail.com";

    $subject = "New message from your website";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    mail($to, $subject, $email_content);

    header("Location: contact.html");
}
?>
