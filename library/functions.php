<?php
    /*
    * Functions to used in my PHP Motors Project
    */


    // Function to build the navigation menu 
    function buildNavMenu($classifications) {
        $navList = '<ul>';
        
        $navList .= "<li><a href='/phpmotors/' title='View the PHP Motors home page'>Home</a></li>";
        
        foreach ($classifications as $classification) {
            $navList .= "<li><a href='/phpmotors/vehicles/index.php?action=classification&classificationName=".urlencode($classification['classificationName'])."' title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
        }
        
        $navList .= '</ul>';
        
        return $navList;
    }

    // Function to build the classifications list
    function buildClassList($classifications) {
        $classificationList = '<select name="classificationId" id="classificationId" required>';
        
        $classificationList .= '<option value="" disabled selected>-- Choose Vehicle Classification --</option>';
        
        foreach ($classifications as $classification) {
            $classificationList .= "<option value='$classification[classificationId]'";
            
            if(isset($classificationId)) {
                if($classificationId == $classification['classificationId']) {
                    $classificationList .= " selected ";
                }
            }
            
            $classificationList .= ">$classification[classificationName]</option>";
        }
        $classificationList .= '</select>';

        return $classificationList;
    }

    // Function for server side validation of classificationName.
    function checkClassName($classificationName) {
        $pattern = '/^[a-zA-Z\s]+$/';
    
        return preg_match($pattern, $classificationName);
    }

     // Function to check if the classification name exists
    function checkClassNameExists($classificationName) {
        $db = phpmotorsConnect(); 
        $sql = "SELECT classificationName FROM carclassification WHERE classificationName = :classificationName";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':classificationName', $classificationName, PDO::PARAM_STR);
        $stmt->execute();
    
        // Fetch the result
        $existingClassification = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $existingClassification;
    }

    // Function to check the user email
    function checkEmail($clientEmail){
        $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
        
        return $valEmail;
    }

    // Function to check the user password
    // Check the password for a minimum of 8 characters,
    // at least one 1 capital letter, at least 1 number and
    // at least 1 special character
    function checkPassword($clientPassword){
        $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]\s])(?=.*[A-Z])(?=.*[a-z])(?:.{8,})$/';
        
        return preg_match($pattern, $clientPassword);
    }
?>