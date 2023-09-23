<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="./css/small.css">
    <link rel="stylesheet" media="screen" href="./css/large.css">
    <title>PHP Motors Home</title>
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
            <section id="welcome">
                <h1>Welcome to PHP Motors!</h1>
                <div class="description">
                    <h2>DMC Delorean</h2>
                    <p>3 Cup Delorean</p>
                    <p>Superman doors</p>
                    <p>Fuzzy dice!</p>
                </div>
                <img src="./images/delorean.jpg" alt="Delorean Car Image">
                <div class="btn"><img src="./images/site/own_today.png" alt="Own Today Image"></div>
            </section>
            <section id="reviews">
                <h1>DMC Delorean Reviews</h1>
                <div class="description2">
                    <ul>
                        <li>"So fast it's almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day!" (4/5)</li>
                        <li>"80s livin and I love it!" (5/5)</li>
                    </ul>
                </div>
            </section>
            <section id="upgrades">
                <h1>Delorean Upgrades</h1>
                <div class="description3">
                    <div class="group">
                        <div class="box"><img class="image" src="./images/upgrades/flux-cap.png" alt="Flux Capacitor Image"></div>
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="group">
                        <div class="box"><img class="image" src="./images/upgrades/flame.jpg" alt="Flame Image"></div>  
                        <a href="#">Flame Decals</a>
                    </div>
                    <div class="group">
                        <div class="box"><img class="image" src="./images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker"></div>
                        <a href="#">Bumper Stickers</a>
                    </div>
                    <div class="group">
                        <div class="box"><img class="image" src="./images/upgrades/hub-cap.jpg" alt="Hub Cap Image"></div>
                        <a href="#">Hub Caps</a>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>