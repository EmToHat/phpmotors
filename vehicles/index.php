<?php
    // Vehicles Controller


    // Get the database connection file
    require_once '../library/connections.php';

    // Functions Library
    require_once '../library/functions.php';

    // Get the accounts model
    require_once '../model/accounts-model.php';

    // Get the vehicle model
    require_once '../model/vehicles-model.php';

    // Get the PHP Motors model for use as needed
    require_once '../model/main-model.php';


    // Get the array of classifications
    $classifications = getClassifications();


    // Build the navigation menu
    $navList = buildNavMenu($classifications);


    // Build the classification list
    $classificationList = buildClassList($classifications);

    //echo $navList;
    //exit;


    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
    }


    switch ($action) {
        // Deliver Classification View
        case 'add-classification-view':
            include '../view/add-classification.php';
            break;

        // Deliver Vehicle View
        case 'add-vehicle-view':
            include '../view/add-vehicle.php';
            break;

        // Add New Classification
        case 'add-new-classification':
            // Filter and store the classification data
            $classificationName = filter_input(INPUT_POST, 'classificationName', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_AMP);
            
            // Check classification Name
            $checkClassName = checkClassName($classificationName);

             /* Make validation code */
            // Function to verify the name exists or not 
            $existingClassification = checkClassNameExists($classificationName);

            // Verify if classification Name exists
            if ($existingClassification) {
                $message = "<p>Classification '$classificationName' already exists. Please choose a different name.</p>";
                include '../view/add-classification.php';
                exit;
            }
            
            // Check for missing input
            if(empty($checkClassName)) {
                $message = "<p>Please provide a classification name.</p>";
                // Return visitor to form to add a classification.
                include '../view/add-classification.php';
                exit;
            }

            // Insert the data to the database
            $regOutcome = newClassification( $classificationName );

            // Check and report the result
                // should return visitor to vehicle management view
            if ($regOutcome === 1) {
                header('Location: ../vehicles/index.php');
                exit;
            } else {
                $message = "<p>Registration of classification $classificationName failed. Please try again.</p>";
                include '../view/add-classification.php';
                exit;
            }

            break;

        // Add New Vehicle
        case 'add-new-vehicle':
            // Filter and store the vehicle data.
            $invMake = filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_STRING);
            $invModel = filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_STRING);
            $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_STRING);
            $invImage = filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_STRING);
            $invThumbnail = filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_STRING);
            $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $invStock = filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT);
            $invColor = filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_STRING);
            $classificationId = filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_STRING);

            /* Make validation code */
            // Validate the stored data
            //$invMake = validateinvMake($invMake);
            //$invModel = validateinvModel($invModel);
            //$invImage = validateinvImage($invImage);
            //$invThumbnail = validateinvThumbnail($invThumbnail);
            //$invPrice = validateinvPrice($invPrice);
            //$invStock = validateinvStock($invStock);
            //$invColor = validateinvColor($invColor);
            //$classificationId = validateClassificationId($classificationId);

            // Checks if any of the inputs are empty
            if (empty($classificationId) || empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor)) {
                $message = '<p>Please provide information for all empty fields.</p>';
                include '../view/add-vehicle.php';
                exit;
            }

            // Insert the data to the database
            $regOutcome = newVehicle( $invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId );

            // Check and report the result
            if ($regOutcome === 1) {
                $message = "<p>The $invMake $invModel was added successfully!</p>";
                include '../view/add-vehicle.php';
                exit;
            } else {
                $message = "<p>Registration of $invMake $invModel failed. Please try again.</p>";
                include '../view/add-vehicle.php';
                exit;
            }

            break;

            
        default:
            include '../view/vehicle-management.php';
            break;
    }
?>