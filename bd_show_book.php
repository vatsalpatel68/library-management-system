<?php

    include 'be_connection.php';

    $book_data = $_POST['book_data'];
    $book_submit = $_POST['book_submit'];

    if(isset($book_submit))
    {
        if(is_numeric($book_data))
        {
            //it is a book_id;
            $sql = "SELECT * FROM book WHERE book_id = ".$book_data." ;";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res))
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo '<h1 class = "content">Book_id :  '.$row['book_id'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book name :  '.$row['book_name'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book auther :  '.$row['book_auther'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book edition :  '.$row['book_edition'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book publisher :  '.$row['publisher'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Semester :  '.$row['semester'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">No. of copies :  '.$row['copies'].'</h1>';
                    echo '<br>';
                }
            }
            else{
                //there is no book of this id.
                echo "<h1 class = 'content'>There is no book of this book id.</h1>";
            }
        }
        else{
            //it is a book_name;
            
            $sql = "SELECT * FROM book WHERE book_name = ".$book_data." ;";
            $res = mysqli_query($conn,$sql);
            if(mysqli_num_rows($res))
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo '<h1 class = "content">Book_id :  '.$row['book_id'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book name :  '.$row['book_name'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book auther :  '.$row['book_auther'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book edition :  '.$row['book_edition'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Book publisher :  '.$row['publisher'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">Semester :  '.$row['semester'].'</h1>';
                    echo '<br>';
                    echo '<h1 class = "content">No. of copies :  '.$row['copies'].'</h1>';
                    echo '<br>';
                }
            }
            else{
                //there is no book of this name.
                echo "<h1 class = 'content'>There is no book of this name.</h1>";
            }
        }
    }
