<?php

    $librarian_username = $_POST['librarian_enrollment_no'];
    $librarian_password = $_POST['librarian_password'];
    

    if(isset($_POST['submit']))
    {
        if($librarian_username == 'test' && $librarian_password == '1234')
        {
            header("Location:librarian-panel.php");
        }
        else{
            header("Location:librarianlogin_index.php?error=you enter a wrong data");
            
        }
    }
