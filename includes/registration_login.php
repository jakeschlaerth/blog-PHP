<?php
    // variable declarations
    $username = "";
    $email = "";
    $errors = array();

    // register new user
    if (isset($_POST['reg_user'])) {
        // recieve all input values from the form
        $username = esc($_POST['username']);
    }