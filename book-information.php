<style><?php include 'librarian-clients-panel.css';?></style>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'add-student.css';?></style>
<script src='book-information.js' type='text/javascript'></script>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>

<hr/>

<div class='librarian-page'  >

    <form action='bd_show_book.php' method='post' class='show-book'>
        <legent class='add-student-class'>Books Detail<legend>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='book-id' placeholder='Enter Book ID'/><br>
       
            <button type="submit" class='student-input-field' id ='book-submit-button' name='book-submit'>Show Book detail</button>

    </form>
</div>


<div class='information' style ="margin-top:-250px;"></div>