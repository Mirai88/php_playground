<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can handle the form submission, e.g., save to a database or send an email
    echo "Thank you, $name. Your message has been received.";
}
?>