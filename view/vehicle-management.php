<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <title>Vehicle Management | PHP Motors</title>
</head>
<body>
    <div id="body_wrapper">
        <header id="header_wrapper">
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        </header>

        <nav id="navigation_wrapper" class="menu">
        <?php
            echo buildNavMenu($classifications);
        ?>
        </nav>

        <main class="main_wrapper">
            <h1>Vehicle Management</h1>
            <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>
            <p><a href="../vehicles/index.php/?action=add-classification-view">Add a car classifcation.</a></p>
            <p><a href="../vehicles/index.php/?action=add-vehicle-view">Add a vehicle to inventory.</a></p>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>