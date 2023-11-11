<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <title>Add Vehicle | PHP Motors</title>
</head>
<body>
    <div id="body_wrapper">
        <header id="header_wrapper">
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        </header>

        <nav id="navigation_wrapper" class="menu">
        <?php
            echo $navList;
        ?>
        </nav>

        <main class="main_wrapper">
            <h1>Add New Vehicle</h1>
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
            <span>*Please Note: All fields are required.</span>
            <form id="form-design" class="user-management" action="/phpmotors/vehicles/index.php" method="post">
                    <div>
                        <label for="classificationId">Classification</label>
                        <?php echo buildClassList($classifications); ?>
                    </div>

                    <div>
                        <label for="invMake">Vehicle Make</label>
                        <input type="text" <?php if(isset($invMake)){echo "value='$invMake'";}  ?> id="vehicleMake" name="invMake" required pattern="^[a-zA-Z\s]*$">
                    </div>

                    <div>
                        <label for="invModel">Vehicle Model</label>
                        <input type="text" <?php if(isset($invModel)){echo "value='$invModel'";}  ?> id="vehicleModel" name="invModel" required pattern="^[\w\s-]*$">
                    </div>

                    <div>
                        <label for="invDescription">Vehicle Description</label>
                        <textarea rows=5 id="vehicleDescription" name="invDescription" required><?php if(isset($invDescription)) { echo $invDescription;};?></textarea>
                    </div>

                    <div>
                        <label for="invImage">Vehicle Image Path</label>
                        <input type="text" <?php if(isset($invImage)){echo "value='$invImage'";} else { echo "value='/phpmotors/images/no-image.png'";};?> id="vehicleImage" name="invImage" required pattern="^(https:\/\/|http:\/\/|\/){1}.*(\.[A-Za-z]{3,4})$">
                    </div>

                    <div>
                        <label for="invThumbnail">Vehicle Thumbnail Path</label>
                        <input type="text" <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";} else { echo "value='/phpmotors/images/no-image.png'";};?> id="VehicleThumbnail" name="invThumbnail" required pattern="^(https:\/\/|http:\/\/|\/){1}.*(\.[A-Za-z]{3,4})$">
                    </div>

                    <div>
                        <label for="invPrice">Vehicle Price</label>
                        <input type="text" <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?> id="vehiclePrice" name="invPrice" required pattern="^([0-9]*)\.?[0-9]{2,2}?$">
                    </div>

                    <div>
                        <label for="invStock">Amount in Stock</label>
                        <input type="number" <?php if(isset($invStock)){echo "value='$invStock'";}  ?> id="invStock" name="invStock" required>
                    </div>

                    <div>
                        <label for="invColor">Vehicle Color</label>
                        <input type="text" <?php if(isset($invColor)){echo "value='$invColor'";}  ?> id="vehicleColor" name="invColor" required pattern="^[a-zA-Z\s]*$">
                    </div>

                    <div>
                        <input type="submit" name="submit" id="add-vehicle" value="add">
                    </div>
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="add-new-vehicle">
            </form>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>