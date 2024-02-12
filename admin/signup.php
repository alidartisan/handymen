<?php

    require './config.php';
    if(isset($_POST['regmit'])){
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $varif = rand(100000, 999999);
        $enc = sha1(md5($pass));

        $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
        if(!mysqli_num_rows($check)){
             $insert = mysqli_query($conn, "INSERT INTO users (username, password, verifi_code) VALUES ('$user', '$enc', '$varif')"); 

            if($insert){
                header("Location: confirm.php?username=" . $user);
            }else{
                echo "error, not registered.";
            }
        }else{
            header("Location: register.php?err=true");
        }
    }

?>