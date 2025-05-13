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
    <title>Password Keeper</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <section class="vh-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div>Hello Welcome <?php echo $_SESSION['fileName'] ?>
                    <a href='./index.php' class='btn btn-danger' role='button'>Sing Out</a>
                    </div>
                <div class="col col-lg-12 col-xl-12">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <?php
                    if(isset($_SESSION['fileName'])){
                        echo "<table class='table mb-4'>"
                                        ."<thead>"
                                            ."<tr>"
                                            ."<th scope='col'>Title</th>"
                                            ."<th scope='col'>Website Link</th>"
                                            ."<th scope='col'>User Name</th>"
                                            ."<th scope='col'>Password</th>"
                                            ."</tr>"
                                        ."</thead>";
                                    echo "<tbody>";
                        if (file_exists("./".$_SESSION['fileName'].".txt")){
                            $file = fopen("./".$_SESSION['fileName'].".txt", "r") or die("");
                            $data = array();
                            while(!feof($file)){
                                array_push($data,explode("     ", fgets($file)));
                            }
                            for($i=0; $i<count($data);$i++){
                                if (isset($data[$i][0])){
                                    echo "<td>".$data[$i][0] ."</td>";
                                }else{
                                    echo "<td></td>";
                                }
                                if (isset($data[$i][1])){
                                echo "<td><a href='https://".$data[$i][1]."' target='_blank'>".$data[$i][1] ."</a></td>";
                            }else{
                                echo "<td></td>";
                            }
                            if (isset($data[$i][2])){
                                echo "<td>".$data[$i][2] ."</td>";
                            }
                            else{
                                echo "<td></td>";
                            }
                            if (isset($data[$i][3])){
                                echo "<td>".$data[$i][3] ."<td>";
                            }else{
                                echo "<td></td>";
                            }
                            echo "</tr>";
                            }
                            fclose($file);
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "<a href='./addnew.php' class='btn btn-primary' role='button'>Add New</a>";
                    }
                ?>

                        </div>
                    </div>
                </div>
            </div>
    </section>               
</body>
</html>