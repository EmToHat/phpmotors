<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="../css/small.css">
    <link rel="stylesheet" media="screen" href="../css/large.css">
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

        <main class="main_wrapper">
            <div class="php500_wrapper">
                <h1 class="server_error_h1">Server Error</h1>
                <p class="server_error_p">We appologize, our server seems to be experiencing some technical difficulties.</p>
            </div>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>