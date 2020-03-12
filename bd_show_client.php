<?php
 include 'be_connection.php';




    $faculty_id = $_POST['faculty_id'];
    if(isset($faculty_id)){
        $sql = 'SELECT * FROM FACULTY where employee_no = '.$faculty_id.';';
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {
        
            while($row = mysqli_fetch_assoc($result)){
                    echo '<h1 class = "content">Employee id:  '.$row['employee_no'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">name:  '.$row['name'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">phone no:  '.$row['phone_no'].'</h1>';
                    echo '<br>';
                }
        }
        else{
            echo '<h1 class="contant">No User is Found.</h1>';
        }   
       
    }