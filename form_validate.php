<?php
session_start();

    function old($field, $default = '') {
        return $_REQUEST[$field] ?? $default;
    }

    function length($value, $min, $max = NULL) {
        if ($max) {
            return strlen($value) < $min || strlen($value) > $max; 
        }
            return strlen($value) > $min; 
    }

    function email($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    

    $errores = [];


    function addError($field, $message) {
        global $errores;
        $errores[$field] = $message; 
    }

    function hasError($field) {
        global $errores;
        return isset($errores[$field]);
    }

    function getError($field) {
        global $errores;
        return $errores[$field];
    }

    function isValid() {
        global $errores;
        return empty($errores);
    }


