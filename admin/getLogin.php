<?php

    require './config.php';
     
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $msg = "";

    if(empty($username) && empty($password)){
        $msg = "both feilds are required.";
    }else{
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
                if(mysqli_num_rows($check)){
                    while($row = mysqli_fetch_assoc($check)){
                        //$_SESSION['login'] = $row['id'];
                        $msg = "logged in.";
                    }
                }
    }

    echo $msg;

?>