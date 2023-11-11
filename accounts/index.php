<?php
    // This is the Accounts Controller


    // Get the database connection file
    require_once '../library/connections.php';

    // Functions Library
    require_once '../library/functions.php';

    // Get the accounts model
    require_once '../model/accounts-model.php';

    // Get the PHP Motors model for use as needed
    require_once '../model/main-model.php';


    // Get the array of classifications
    $classifications = getClassifications();


    // Build the navigation menu
    $navList = buildNavMenu($classifications);
    


    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
    }


    switch ($action){
        // Deliver Login View
        case 'login-view': 
            include '../view/login.php';
        break;

        // Deliver Register View
        case 'registration-view': 
            //echo 'You are in the registration-view statement.';
            include '../view/registration.php';
        break;

        // Register User
        case 'register-user':
            //include '../view/registration.php';
            //echo 'You are in the register-user statement.';

            // Filter and store the data
            $clientFirstname = filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_STRING);
            $clientLastname = filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_STRING);
            $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            
            // Get the function to check the email
            $checkEmail = checkEmail($clientEmail);

            // Get the function to check the password
            $checkPassword = checkPassword($clientPassword);

            // Check for missing data
            if(empty($clientFirstname) || empty($clientLastname) || empty($checkEmail) || empty($checkPassword)){
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/registration.php';
                exit; 
            }

            // Hash the checked password
            $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);

            // Send the data to the model
            $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
            
            // Check and report the result
            if($regOutcome === 1){
                $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
                
                include '../view/login.php';
                
                exit;
            } else {
                $message = '<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>';
                
                include '../view/registration.php';

                exit;
            }
        break;
    }
?>