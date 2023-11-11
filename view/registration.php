<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <title>Registration | PHP Motors</title>
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
                <h1>Sign Up</h1>
                
                <?php
                    if (isset($message)) {
                        echo $message;
                    }
                ?>

                <!-- action sends to the account controller -->
                <form id="form-design" class="user-management" action="/phpmotors/accounts/index.php" method="post">
                    <div>
                        <label for="clientFirstname">Enter your first name:</label>
                        <input type="text" id="fname" name="clientFirstname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required>
                    </div>

                    <div>
                        <label for="clientLastname">Enter your last name:</label>
                        <input type="text" id="lname" name="clientLastname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> required>
                    </div>

                    <div>
                        <label for="clientEmail">Enter your email:</label>
                        <input type="email" id="email" name="clientEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}">
                    </div>

                    <div>
                        <label for="clientPassword">Enter your password:</label>
                        <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span> 
                        <input type="password" id="password" name="clientPassword" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}$">
                    </div>

                    <div>
                        <input type="submit" name="submit" id="add-user" value="register">
                    </div>

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="register-user">
                </form>

                <div class="link">Have an account?<a href="/phpmotors/accounts/index.php?action=login-view" title="Go to login page."> Login</a></div>
            </div>
        </main>

        <footer id="footer_wrapper">
            <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>
</html>