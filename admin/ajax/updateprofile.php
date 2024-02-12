<?php
    require "../config.php";

    $name = $_POST['name'];
    $father = $_POST['father'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $pid = $_POST['pid'];

    $query = mysqli_query($conn, "UPDATE profile SET full_name='$name',father_name='$father',email='$email',address='$address',phone='$phone',submit_on= date('Y-m-d') WHERE user_id = '$pid'");

    if(!$query){
        echo "error";
    }