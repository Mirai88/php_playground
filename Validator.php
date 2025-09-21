<?php 


class Validator {
    public function validateString($input, $minLength = 1, $maxLength = null) {
        // empty check docs
        return is_string($input) && !empty(trim($input)) && strlen($input) >= $minLength && (is_null($maxLength) || strlen($input) <= $maxLength);
    }

    public function validateEmail($input) {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

}