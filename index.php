<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="./style.css">
    <title>Password Keeper</title>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" action="./process.php" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="txtUserName" id="txtUserName" placeholder="User name / Email" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="txtPassword" id="txtPassword" class="login__input" placeholder="Password" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>
                    
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Log In Now</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <h3>Register</h3>
                    <div class="social-icons">
                        <a href="./register.php" class="social-login__icon fa fa-registered fa-2s"></a>
                    </div>
                </div>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>
    <?php
        session_start();

        $_SESSION['fileName']='';
    ?>
</body>
</html>