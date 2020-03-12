<?php
    session_start();
    if(!$_SESSION['start2'])
    {
        Header("Location:facultylogin_index.php");
    }
?>