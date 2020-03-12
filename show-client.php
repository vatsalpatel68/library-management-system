<style><?php include 'librarian-clients-panel.css';?></style>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'add-student.css';?></style>
<script src ='show-client.js' type = 'text/javascript'></script>
<script src='show-client2.js' type='text/javascript'></script>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>
<hr/>

<div class='librarian-page'  >

    <form action='bd_show_client.php' method='post' class='show-form'>
        <legent class='add-student-class' style='font-size:35px;'>Show Faculty Detail <legend>
            <input type='number' class='student-input-field' name='faculty-employee-no' id='faculty-employee-no' placeholder='Employee no.'/><br>
            <button type="submit" class='student-input-field' id ='faculty-submit-button' name='submit'>show detail</button>

    </form>

</div>

<div class='librarian-page'  >

    <form action='bd_show_client2.php' method='post' class='show-form2'>
        <legent class='add-student-class' style='font-size:35px;'>Show Student Detail <legend>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='student-enrollment-no' placeholder='Student enrollment no.'/><br>
            <button type="submit" class='student-input-field' id ='student-submit-button' name='submit'>show detail</button>

    </form>

</div>

<div class='information'>


</div>