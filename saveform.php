<?php
    session_start();
    $title = $_POST['Title'];
    $websiteName = $_POST['WebsiteName'];
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];

    if(isset($_SESSION['fileName'])){
        $file = fopen("./".$_SESSION['fileName'].".txt", "a");
        $data = "\n".$title."     ".$websiteName."     ".$userName."     ".$password;
        fwrite($file, $data);
        fclose($file);
    }
    header("location:addnew.php");
?>