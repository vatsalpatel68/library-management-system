<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<script src='studentlogin_index.js'></script>


<h1 class='login-name'>Student Login</h1>
<hr/>

<form action='be_student-verification.php' method='post' class='student-login'>
<div class = 'login-form'>
    <h1 class = 'list-name'>Enrollment No.</h1></br>
    <input type ='number' class = 'input-field' name='student-enrollment-no' id='enrollment_no'/></br>
    <h1 class = 'list-name'>Password</h1></br>
    <input type = 'password' class ='input-field' name='student-password' id='password'/>
    <br/>
    <button type="submit"  class = 'submit-button' name='login' id='login'>Login</button>
</div>
<form>