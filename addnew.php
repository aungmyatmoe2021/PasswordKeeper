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
    <!-- <form action="./saveform.php" method="post">
        <input type="text" name="Title" id="txtTitle">
        <input type="text" name="WebsiteName" id="txtWebsiteName">
        <input type="text" name="UserName" id="txtUserName">
        <input type="text" name="Password" id="txtPassword"> 
        <input type="submit" value="Save">
        <input type="reset" value="Reset">
    </form> -->


    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="register" action="./saveform.php" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="Title" id="txtTitle" placeholder="Title" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>

                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="WebsiteName" id="txtWebsiteName" placeholder="Website Link" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>

                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="UserName" id="txtUserName" placeholder="User Name" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>

                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="Password" id="txtPassword" placeholder="Password" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>
                    
                    
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Save</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>	

                    <button class="button login__submit" type="reset">
                        <span class="button__text">Clear</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <div class="social-icons">
                        <a href="./list.php" class="social-login__icon fa fa-home fa-2s"></a>
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
</body>
</html>