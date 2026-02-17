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

function base_path($path) {
  return BASE_PATH . $path;
}

function view($path, $data = []) {
    extract($data);
    include base_path("views/{$path}.php");
}