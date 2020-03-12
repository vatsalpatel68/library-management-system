<?php 
    include 'be_connection.php'; 
    $employee_no = $_POST['employee_no'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM faculty WHERE employee_no = '.$employee_no.' ;';   

    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            if($row['pass'] == $password)
            {
                session_start();
                $_SESSION['employee_no'] = $employee_no;
                $_SESSION['start2']  = true;
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