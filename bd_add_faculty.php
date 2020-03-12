<?php include 'be_connection.php';

 $faculty_employee_no = $_POST['faculty-employee-no'];
 $faculty_name = $_POST['faculty-name'];
 $faculty_phone_no = $_POST['faculty-phone-no'];
 $faculty_password = $_POST['faculty-password'];
 $faculty_submit  = $_POST['faculty-submit'];

        if(isset($faculty_submit)){
        if($faculty_employee_no >= 100)
        {
        if(isset($faculty_employee_no) && isset( $faculty_name) && isset($faculty_phone_no) && isset($faculty_password)){
        $sql = "INSERT INTO faculty (employee_no,NAME,phone_no,pass) values ($faculty_employee_no ,'$faculty_name',$faculty_phone_no,'$faculty_password');";

        $add = mysqli_query($conn,$sql);

                if($add)
                {
                        $sql2 = "insert into facultybook ( employee_no ) values ($faculty_employee_no)";
                        mysqli_query($conn,$sql2);
                        header("Location:add-faculty.php"); 
                }
                else{
                        echo '<script type="text/javascript">';
                        echo ' alert("User is already exist")';  //not showing an alert box.
                        echo '</script>';
                        header("Location:add-faculty.php?exist");   
                    }        

        }
        else{
                header("Location:add-faculty.php?unvalid data");
        }
        }
        else
        {
                header("Location:add-faculty.php?enter a correct employee id");
        }
    }