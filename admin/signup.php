<?php

    require './config.php';

    if(isset($_POST['regmit'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $varif = rand(100000, 999999);
        $enc = sha1(md5($pass));
        
        $insert = mysqli_query($conn, "INSERT INTO users (username, password, verifi_code) VALUES ('$user', '$enc', '$varif')"); 

        if($insert){
            header("Location: index.php");
        }else{
            echo "error, not registered.";
        }

    }

?>