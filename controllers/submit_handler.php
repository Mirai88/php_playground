<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $errors = [];
    if(empty($name)) $errors['name'] = "Name is required.";
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Valid email is required.";
    if(empty($message)) $errors['message'] = "Message is required.";
    if(strlen($name) > 15) $errors['name'] = "Name must be less than 15 characters.";

    if (empty($errors)) {
        // Here you can handle the form submission, e.g., save to a database or send an email
        echo "Thank you, $name. Your message has been received.";
    } else {
        // If there are errors, you can include the form again and display the errors
        include dirname(__DIR__) . '/views/partials/simple_form.php';
    }
}
?>