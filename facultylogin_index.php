<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<script src = 'facultylogin_index.js'></script>


<h1 class='login-name'>Faculty Login</h1>
<hr/>

<form action='be_faculty-verification.php' method='post'>
<div class = 'login-form'>
    <h1 class = 'list-name'>Employee No.</h1></br>
    <input type ='text' class = 'input-field'  name='faculty-enrollment-no' id='employee_no' /></br>
    <h1 class = 'list-name'>Password</h1></br>
    <input type = 'password' class ='input-field' name='faculty-password'  id= 'password'  />
    <br/>
    <button type="submit"  class = 'submit-button'>Login</button>
</div>
<form>