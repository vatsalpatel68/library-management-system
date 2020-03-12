<?php
    include 'be_connection.php';

    $book_id = $_POST['book_id'];
    $book_name  = $_POST['book_name'];
    $book_auther = $_POST['book_auther'];
    $book_edition = $_POST['book_edition'];
    $book_publisher = $_POST['book_publisher'];
    $book_semester = $_POST['book_semester'];
    $book_copies = $_POST['book_copies'];
    $book_submit_button = $_POST["book_submit_button"];

    if(isset($book_submit_button)){
            $sql = "INSERT INTO book (book_id,book_name,book_auther,book_edition,semester,publisher,copies)
                values($book_id,'$book_name','$book_auther' , $book_edition,$book_semester,'$book_publisher',$book_copies);";

            $res = mysqli_query($conn,$sql);

            if($res)
            {
                echo 'true';
                
            }
            else{
                echo 'false';
            }
}