<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>
<hr/>

<form action='be_librarian-verification.php' method='post' class ='librarian-login'>
<div class = 'login-form'>
    <h1 class = 'list-name'>Username No.</h1></br>
    <input type ='text' class = 'input-field' id = 'librarian-username' name='librarian_enrollment_no' /></br>
    <h1 class = 'list-name'>Password</h1></br>
    <input type = 'password' class ='input-field' id ='librarian-password' name='librarian_password' />
    <br/>
    <button type="submit"  class = 'submit-button' name='submit'>Login</button>
</div>
</form>

<div class='librarian-page' >

<ul class='librarian-list'>
        <a href = 'librarian-clients-panel.php'><li  class='container-1'>
            <div class='photo'><img class ='image' src='men-women.png' type='image/png'/></div>
            <div class='text'>Clients information</div>
        </li></a>
        <a href = 'book-information.php'><li  class='container-1'>
            <div class='photo'><img src="sample-book.jpg" type='image/jpg' class='image'></div>
            <div class='text'>Book information</div>
        </li></a>
        <a href = 'add-remove-book.php'><li  class='container-1'>
            <div class='photo'><img src='sample-book2.jpg' type='image/jpg' class='image'></div>
            <div class='text'>Add/Remove Boooks</div>
        </li></a>
        <a href = 'books_record.php'><li  class='container-1'>
            <div class='photo'><img src="sample-book3.jpg" type='image/jpg' class='image'></div>
            <div class='text'>Books Record</div>
        </li></a>
    </ul>
   
</div>
