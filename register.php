<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <link rel="stylesheet" href="./style.css">
    <title>Password Keeper : Register</title>
</head>
<body>
    <!-- <form action="./registerprocess.php" method="post">
        <input type="text" name="txtUserName" id="txtUserName">
        <input type="password" name="txtPassword" id="txtPassword">
        <input type="password" name="txtRePassword" id="txtRePassword">
        <input type="button" id="btnRegister" value="Register">
        <input type="reset" value="Clear">
    </form> -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="register" action="./registerprocess.php" method="post">
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
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" name="txtRePassword" id="txtRePassword" class="login__input" placeholder="Retype Password" autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');">
                    </div>
                    
                    <button class="button login__submit" type="button" id="btnRegister">
                        <span class="button__text">Register</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>	
                    <button class="button login__submit" type="reset">
                        <span class="button__text">Clear</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>			
                </form>
                
                <div class="social-login">
                    <div class="social-icons">
                        <a href="./index.php" class="social-login__icon fa fa-home fa-2s"></a>
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


    <script>
        $("#btnRegister").click(function(){
            if($("#txtPassword").val() != $("#txtRePassword").val()){
                alert("Your Password are not the same");
            }else{
                window.location.href =`./registerprocess.php?username=${$("#txtUserName").val()}&password=${$("#txtPassword").val()}`;
            }
        })
    </script>
</body>
</html>