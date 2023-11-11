<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <title>Login | PHP Motors</title>
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

        <main class="loginsignPG main_wrapper">

            <div class="formContainer">
                <h1>Login</h1>

                <?php
                    if (isset($message)) {
                        echo $message;
                    }
                ?>

                <form id="form-design" class="user-management" action="/phpmotors/accounts/index.php" method="post">
                    <div>
                        <label for="clientEmail">Enter your email:</label>
                        <input type="email" id="email" name="clientEmail" required  <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                    </div>

                    <div>
                        <label for="clientPassword">Enter your password:</label>
                        <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                        <input type="password" id="password" name="clientPassword" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$">
                    </div>

                    <div>
                        <input type="submit" name="submit" id="add-login" value="login">
                    </div>
                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="login">
                </form>
                <div class="link">No account?<a href="/phpmotors/accounts/index.php?action=registration-view" title="Go to registration page."> Sign Up</a></div>
            </div>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>