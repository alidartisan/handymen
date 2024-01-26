<?php

    unset($_SESSION['login']);
    session_destroy();

?>

<script>
    window.location.href = "index.php";
</script>