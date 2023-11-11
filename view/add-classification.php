<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <title>Add Classification | PHP Motors</title>
</head>
<body>
    <div id="body_wrapper">
        <header id="header_wrapper">
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        </header>

        <nav id="navigation_wrapper" class="menu">
        <?php
            echo $navList        
        ?>
        </nav>

        <main class="main_wrapper">
            <div class="formContainer">
                <h1>Add New Vehicle Classification</h1>

                <?php
                if (isset($message)) {
                    echo $message;
                }
                ?>
                <form id="form-design" class="user-management" action="/phpmotors/vehicles/index.php" method="post">
                    <div>
                        <label for="classificationName">Classification Name</label>
                        <input type="text" id="classificationName" name="classificationName" required pattern="[\w\s]*">
                    </div>
                    <div>
                        <input type="submit" name="submit" id="add-classification" value="Add">
                    </div>
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="add-new-classification">
                </form>
            </div>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>