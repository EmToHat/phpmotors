<?php
    // Vehicles Model

    /*
     * Contain a function for inserting a new 
     * classification to the carclassifications table. 
     */

    // Function to get classification information from the carclassification table in phpmotors database. 
    function newClassification($classificationName){

        // Create a connection object from the phpmotors connection function
        $db = phpmotorsConnect(); 

        // The SQL statement
        $sql = 'INSERT INTO carclassification 
                            (classificationName)
                    VALUES 
                            (:classificationName)';

        // The next line creates the prepared statement using the phpmotors connection      
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':classificationName', $classificationName, PDO::PARAM_STR);

        // The next line runs the prepared statement 
        $stmt->execute(); 
        
        // Ask how many rows changed as a result of our insert
        $rowsChanged = $stmt->rowCount();
    
        // Close the database interaction
        $stmt->closeCursor();
        
        // Return the indication of success (rows changed)
        return $rowsChanged;
    }

    /*
     * Contain a function for inserting a new vehicle 
     * to the inventory table.
     */

    function newVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $InvColor, $classificationId){
        // Create a connection object using the phpmotors connection function
        $db = phpmotorsConnect();
        
        // The SQL statement
        $sql = 'INSERT INTO inventory 
                        (invMake, invModel, invDescription, invImage, invThumbnail, invPrice, invStock, invColor, classificationId)
                    VALUES 
                        (:invMake, :invModel, :invDescription, :invImage, :invThumbnail, :invPrice, :invStock, :invColor, :classificationId)';
        
        // Create the prepared statement using the phpmotors connection
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':invMake', $invMake, PDO::PARAM_STR);
        $stmt->bindValue(':invModel', $invModel, PDO::PARAM_STR);
        $stmt->bindValue(':invDescription', $invDescription, PDO::PARAM_STR);
        $stmt->bindValue(':invImage', $invImage, PDO::PARAM_STR);
        $stmt->bindValue(':invThumbnail', $invThumbnail, PDO::PARAM_STR);
        $stmt->bindValue(':invPrice', $invPrice, PDO::PARAM_STR);
        $stmt->bindValue(':invStock', $invStock, PDO::PARAM_STR);
        $stmt->bindValue(':invColor', $InvColor, PDO::PARAM_STR);
        $stmt->bindValue(':classificationId', $classificationId, PDO::PARAM_STR);
        
        // Insert the data
        $stmt->execute();
        
        // Ask how many rows changed as a result of our insert
        $rowsChanged = $stmt->rowCount();
        
        // Close the database interaction
        $stmt->closeCursor();
        
        // Return the indication of success (rows changed)
        return $rowsChanged;
    }
?>