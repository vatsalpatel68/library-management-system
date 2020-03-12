<?php 
    include 'be_connection.php'; 
    $enrollment_no = $_POST['enrollment_no'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM student WHERE ENROLLMENT_NO = '.$enrollment_no.' ;';   

    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            if($row['passwrord'] == $password)
            {
                session_start();
                $_SESSION['enrollment_no'] = $enrollment_no;
                $_SESSION['start']  = true;
                echo 'true';
            }   
            else
            {
                echo 'fail';
            }
        }
    }
    else
    {
        echo 'fail';
    }