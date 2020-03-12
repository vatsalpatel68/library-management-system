<?php
    session_start();
    if(!$_SESSION['start'])
    {
        Header("Location:studentlogin_index.php");
    }
?>