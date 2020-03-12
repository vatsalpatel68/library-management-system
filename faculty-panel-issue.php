<?php include 'session2.php'?>
<?php include 'index.php';?>
<style><?php include 'index2.css'?></style>
<style><?php include 'index3.css'?></style>
<script src = 'faculty-panel-issue.js'></script>
<script src = 'faculty-panel-issue2.js'></script>

<ul class='container-student-panel'>
    <a href ='faculty-show-book.php'><li class='student-list-item'>Show my Books</li></a>
    <a href = 'faculty_panel.php'><li class='student-list-item'>Issue a Book</li></a>
</ul>



<div class='student-issue-container'>
<form action="bd_issue_book.php" name='selectbook'method='post' class = 'issue-book-list' >
    <label for="year-selection">Choose a year:</label>
    <select name="yearselection" id='select-year' class='selective-list' onChange='changeyear()'>
        <option value="1" selected >1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
   </select>
   <br>
   <br>
   <br>
   <br> 
   <br>
   <br>
   <label for="semester" class = 'label-2'>Choose a semester:</label>
   <input type='radio' name ='semester' id='select-semester' class='radio-button' value='odd' onChange='changesemester()'>odd</input>
   <input type='radio' name ='semester' id='select-semester2'class='radio-button' value='even'  onChange='changesemester()'>Even</input>
   <br/>


    <table id='book-table'>    
    </table>
    <form action="bd_issue_book.php"  name ='form3' method='post' id ='book-issue-form'>
    <legend class='enter-book-heading'>Enter A book id:</legend>
    <input type="number" name='book-id' class='book_input_id' Placeholder='Book id'>
    <input type="submit" class='submit-button' value='Add Book'>    


    <h1 class='result-text'></h1>
    </form>
</form>
</div>