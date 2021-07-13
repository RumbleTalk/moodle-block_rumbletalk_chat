<?php

    define('AJAX_SCRIPT', true);

    require(__DIR__ . '/../config.php');
    require_once($CFG->libdir . '/filelib.php');

    header('Content-Type: application/json; charset=utf-8');

    echo $data['email'] . " ";
    echo $data['password'];
    // public function validateEmail(&$email)
    // {
    //     if (!is_string($email)) {
    //         return false;
    //     }
    //     $email = trim($email);

    //     return filter_var($email, FILTER_VALIDATE_EMAIL);
    // }

    