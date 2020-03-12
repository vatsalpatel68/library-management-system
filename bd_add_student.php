<?php include 'be_connection.php';

 $student_enrollment_no = $_POST['student-enrollment-no'];
 $student_name = $_POST['student-name'];
 $student_semester = $_POST['student-semester'];
 $student_phone_no = $_POST['student-phone-no'];
 $student_password = $_POST['student-password'];
 $student_submit  = $_POST['student-submit'];

         if(isset($student_submit)){

        if(isset($student_enrollment_no) && isset($student_name) && isset($student_semester) && isset($student_phone_no) && isset($student_password)){
        $sql = "INSERT INTO STUDENT (ENROLLMENT_NO,NAME,SEMESTER,PHONE_NO,PASSWRORD) values ($student_enrollment_no,'$student_name',$student_semester,$student_phone_no,'$student_password');";

        $add = mysqli_query($conn,$sql);

                if($add)
                {
                        
                        $sql2 = "insert into studentbook ( enrollment_no ) values ($student_enrollment_no)";
                        mysqli_query($conn,$sql2);
                        header("Location:add-student.php"); 
                }
                else{
                        echo '<script type="text/javascript">';
                        echo ' alert("User is already exist")';  //not showing an alert box.
                        echo '</script>';
                        header("Location:add-student.php?exist");   
                    }        

        }
        else{
                header("Location:add-student.php?unvalid data");
        }

        
}
