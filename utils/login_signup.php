<?php
        include 'secret.php';
	include 'connection.php';
        if (isset($_SERVER['HTTP_ORIGIN'])) {
                header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
                header('Access-Control-Allow-Credentials: true');
                header('Access-Control-Max-Age: 86400');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                        // may also be using PUT, PATCH, HEAD etc
                        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

                if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

                exit(0);
        }

        if(empty($_POST["userName"]) || empty($_POST["userEmail"]) || empty($_POST["userPass"]) || empty($_POST["signature"])){
            echo "-2";
            die();
        }
        if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
            echo "-2";
            die();
        }
        if(!preg_match('#[^0-9]#',$_POST["userPass"])){
            echo "-2";
            die();
        }
        if(!preg_match('#[^0-9]#',$_POST["userName"])){
            echo "-2";
            die();
        }
        if(isset($_POST["userName"]) && isset($_POST["userEmail"]) && isset($_POST["userPass"]) && isset($_POST["signature"])){

                $userName=mysqli_real_escape_string($con,$_POST["userName"]);
                $userEmail=mysqli_real_escape_string($con,$_POST["userEmail"]);
                $userPass=mysqli_real_escape_string($con,$_POST["userPass"]);
                $signature=mysqli_real_escape_string($con,$_POST["signature"]);

                $concatenatedText=$userName.$userEmail.$userPass.$secret;
                $mysignature=sha1($concatenatedText);

                if($signature==$mysignature){
                        // Everything Alright
                        $query=mysqli_query($con,"SELECT EXISTS(SELECT * from player WHERE userName='".$userName."' AND userEmail='".$userEmail."' AND userPass='".$userPass."');");
                        $value=mysqli_fetch_array($query)[0];
                        if($value==="1"){       // user found, login
                                $query1=mysqli_query($con, "SELECT level FROM player WHERE userName='".$userName."' AND userEmail='".$userEmail."' AND userPass='".$userPass."';");
                                $row=mysqli_fetch_array($query1);
                                $level=$row['level'];
                                echo $level;
                        }
                        else{
                                $query2=mysqli_query($con,"SELECT EXISTS(SELECT * from player WHERE userName='".$userName."' AND userEmail='".$userEmail."');");
                                $value2=mysqli_fetch_array($query2)[0];
                                if($value2==="1"){
                                        echo "-1";              // Invalid Password
                                }
                                else{
                                        $query3=mysqli_query($con,"SELECT EXISTS(SELECT * from player WHERE userName='".$userName."');");
                                        $value3=mysqli_fetch_array($query3)[0];
                                        $query4=mysqli_query($con,"SELECT EXISTS(SELECT * from player WHERE userEmail='".$userEmail."');");
                                        $value4=mysqli_fetch_array($query4)[0];

                                        if($value3==="1" || $value4==="1"){
                                                echo "-2";      // Invalid username/password
                                        }
                                        else{
                                                $insert=mysqli_query($con,"INSERT INTO player VALUES ('".$userName."','".$userEmail."','".$userPass."',0);");
                                                echo "0";       // Insert new user
                                        }
                                }
                        }
                }
                else{
                        echo "Invalid signature";
                        die();
                }
        }
        else{
                echo "Enter properly please";
        }
?>
