<?php

require_once dirname(__DIR__) . '/Validator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $errors = [];
    if(!Validator::validateString($name)) $errors['name'] = "Name is required.";
    if(!Validator::validateEmail($email)) $errors['email'] = "Valid email is required.";
    if(!Validator::validateString($message, 5, 500)) $errors['message'] = "Message must be between 5 and 500 characters.";

    if (empty($errors)) {
        // Here you can handle the form submission, e.g., save to a database or send an email
        echo "Thank you, $name. Your message has been received.";
    } else {
        // If there are errors, you can include the form again and display the errors
         view('partials/simple_form', ['errors' => $errors]);
    }
}
?>