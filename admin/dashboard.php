<?php
    include "./includes/sidebar.php";


    ?>
    <div class="main-content">
        <?=include "./includes/topbar.php";?>
        <div class="page-content">
    <?php
    if(!isset($_GET['route'])){
        include "./pages/home.php";
    }else{
        $route = $_GET['route'];
        include "./pages/$route.php";
    }

?>
</div>
</div>