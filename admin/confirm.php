<div class="container">
    <form action="" method="post">
        <input type="text" name="_token" id="">
        <button name="verifmit" type="submit">verify</button>
    </form>
</div>

<?php
    require './config.php';
    if(isset($_POST['verifmit'])){
        $token = $_POST['_token'];
        $user = $_GET['username'];
        if(!empty($token)){

            $query = mysqli_query($conn, "SELECT verifi_code AS _token FROM users WHERE username = '$user'");
            if(mysqli_num_rows($query)){
                while($row = mysqli_fetch_assoc($query)){
                    if($row['_token'] == $token){
                        $update = mysqli_query($conn, "UPDATE users SET is_active = 'ON' WHERE username = '$user'");
                        if($update){
                            header("Location: index.php");
                        }
                    }
                }
            }

        }


    }
?>