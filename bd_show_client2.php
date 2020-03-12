<?php
 include 'be_connection.php';




    $student_id = $_POST['student_id'];
    if(isset($student_id)){
        $sql = 'SELECT * FROM STUDENT where enrollment_no = '.$student_id.';';
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0)
        {
        
            while($row = mysqli_fetch_assoc($result)){
                    echo '<h1 class = "content">Student id:  '.$row['enrollment_no'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Name:  '.$row['name'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Semester:  '.$row['semester'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Phone no:  '.$row['phone_no'].'</h1>';
                    echo '<br>';
                }
        }
        else{
            echo '<h1 class="contant">No User is Found.</h1>';
        }   
       
    }