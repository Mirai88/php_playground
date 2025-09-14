<?php

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function isUri($string) {
    return $_SERVER['REQUEST_URI'] === $string;
}