<?php
    // This is the main controller


    // Get the database connection file
    require_once 'library/connections.php';

    // Functions Library
    require_once 'library/functions.php';

    // Get the PHP Motors model for use as needed
    require_once 'model/main-model.php';

    // Get the array of classifications
	$classifications = getClassifications();

    //var_dump($classifications);
	//exit;


    // Build the navigation menu
    $navList = buildNavMenu($classifications);

    //echo $navList;
    //exit;

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
    }

    switch ($action) {
        case 'template':
            include 'view/template.php';
        break;
        default:
            include 'view/home.php';
        break;
    }
?>