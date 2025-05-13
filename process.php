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
    <?php
        session_start();
        $username = $_POST['txtUserName'];
        $pwd = $_POST['txtPassword'];

        // $systemPwdEncode = funcPwdEncodeDecode($pwd,12);
        
        $usercredentials = fopen("./usercredentials.txt", "r") or die("Something Wrong!!!");
        $success = false;
        while(!feof($usercredentials)){
            if(($username." ".$pwd) == rtrim(fgets($usercredentials))){
                $success = true;
            }
        }
        fclose($usercredentials);


        if($success){
            $_SESSION['fileName']=$username;
            header("location:addnew.php");
            exit();
        }else{
            echo '<div class="container">'
                // .'<div class="screen">'
                    .'<div class="screen__content">'
                        .'<div class="social-login">'
                            .'<h3 style="color:black;font-weight:bolder;font-size:larger;">Your username or password is incorrect!</h3>'
                            .'<div class="social-icons">'
                                .'<a href="./index.php" class="social-login__icon fa fa-home fa-2s" style="color:black;" ></a>'
                            .'</div>'
                        .'</div>'
                    .'</div>'
                    .'<div class="screen__background">'
                        .'<span class="screen__background__shape screen__background__shape4"></span>'
                        .'<span class="screen__background__shape screen__background__shape3"></span>'		
                        .'<span class="screen__background__shape screen__background__shape2"></span>'
                        .'<span class="screen__background__shape screen__background__shape1"></span>'
                    .'</div>'		
                // .'</div>'
            .'</div>';
        }

        

        function funcPwdEncodeDecode($pwd, $number){
            $pwdResult = "";
            for($i=0;$i<strlen($pwd);$i++){
                $pwdResult .= chr(ord($pwd[$i]) + $number);
            }
            return $pwdResult;
        }
    ?>
</body>
</html>