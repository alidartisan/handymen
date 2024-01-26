<?php

    $conn = mysqli_connect("localhost", "root", "", "handymen");

    if(!$conn){
        echo "database not established" . die(mysqli_error($conn));
    }