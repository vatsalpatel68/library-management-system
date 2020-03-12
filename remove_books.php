<style><?php include 'librarian-clients-panel.css';?></style>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'add-student.css';?></style>
<script src='remove-book.js' type='text/javascript'></script>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>

<hr/>

<div class='librarian-page'  >

    <form action='bd_remove_book.php' method='post' class='Remove-book'>
        <legent class='add-student-class'>Remove Books<legend>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='book-id' placeholder='Enter Book ID'/><br>
            <input type='number' class='student-input-field' name='student-phone-no' id='book-copies' placeholder='Copies'/><br>
            <button type="submit" class='student-input-field' id ='book-submit-button' name='book-submit'>Remove Books</button>

    </form>
</div>