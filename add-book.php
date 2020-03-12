<style><?php include 'librarian-clients-panel.css';?></style>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'add-student.css';?></style>
<script src='add-book.js' type='text/javascript'></script>
<h1 class='login-name' id='librarian-name'>Librarian Login</h1>

<hr/>

<div class='librarian-page'  >

    <form action='bd_add_book.php' method='post' class='add-book'>
        <legent class='add-student-class'>Add Books<legend>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='book-id' placeholder='Enter Book ID'/><br>
            <input type='text' class='student-input-field' name='student-name' id='book-name' placeholder='Book Name'/><br>
            <input type='text' class='student-input-field' name='student-semester' id='book-auther' placeholder='Auther name'/><br>
            <input type='number' class='student-input-field' name='student-phone-no' id='book-edition' placeholder='Edition'/><br>
            <input type='number' class='student-input-field' name='student-enrollment-no' id='book-semester' placeholder='Enter Semester'/><br>
            <input type='text' class='student-input-field' name='student-password' id='book-publisher' placeholder='Publisher'/><br>
            <input type='number' class='student-input-field' name='student-phone-no' id='book-copies' placeholder='Copies'/><br>
            <button type="submit" class='student-input-field' id ='book-submit-button' name='book-submit'>ADD Books</button>

    </form>
</div>