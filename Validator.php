<?php 


class Validator {
    public static function validateString($input) {
        // empty check docs
        return is_string($input) && !empty(trim($input));
    }
}