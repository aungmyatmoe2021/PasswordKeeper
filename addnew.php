<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style.css">
    <title>Password Keeper</title>
</head>
<body>
    <?php
        session_start();
    ?>

    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <div style="text-align:center;">Hello Welcome <?php echo $_SESSION['fileName'] ?>
                    <a href='./index.php' class='btn btn-secondary' role='button'>Sing Out</a>
                </div>
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
                        <a href="./list.php" class="social-login__icon fa fa-server fa-2s"></a>
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