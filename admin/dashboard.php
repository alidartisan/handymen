<?php

    include "./includes/topbar.php";
    include "./includes/sidebar.php";

    if(!isset($_GET['route'])){
        include "./pages/home.php";
    }else{
        $route = $_GET['route'];
        include "./pages/$route.php";
    }

?>