<?php

use Framework\Validator;

$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';


if(Validator::validateString($title, 5, 255) && Validator::validateString($description)) {
    // Proceed with creating the note
    echo "Note created successfully";
} else {
    // Handle validation errors
    echo "Invalid input";
}
