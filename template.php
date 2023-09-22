<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="./css/style.css">
    <link rel="stylesheet" media="screen" href="./css/media.css">
    <title>PHP Motors Template</title>
</head>
<body>
    <div id="body_wrapper">
        <header id="header_wrapper">
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
        </header>

        <nav id="navigation_wrapper">
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/navigation.php'; ?>
        </nav>

        <main id="main_wrapper">
            <h1>Content Title Here</h1>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>