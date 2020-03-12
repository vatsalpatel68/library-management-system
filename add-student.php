<style><?php include 'librarian-clients-panel.css';?></style>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'add-student.css';?></style>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>

<hr/>

<div class='librarian-page'  >

    <form action='bd_add_student.php' method='post' class='student_form'>
        <legent class='add-student-class'>Add student<legend>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='student-enrollment-no' placeholder='Enrollment no.'/><br>
            <input type='text' class='student-input-field' name='student-name' id='student-name' placeholder='Name'/><br>
            <input type='number' class='student-input-field' name='student-semester' id='student-semester' placeholder='Semester'/><br>
            <input type='number' class='student-input-field' name='student-phone-no' id='student-phone-no' placeholder='Phone-no.'/><br>
            <input type='password' class='student-input-field' name='student-password' id='student-password' placeholder='Password'/><br>
            <button type="submit" class='student-input-field' id ='student-submit-button' name='student-submit'>Create an Account</button>

    </form>
</div>