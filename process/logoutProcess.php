<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    $_SESSION['user'] = null;
    session_destroy();

    echo '<script>
            window.location = "../page/loginPage.php"
        </script>';
?>