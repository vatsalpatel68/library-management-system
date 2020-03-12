<?php
    include 'be_connection.php';
    session_start();
    $enrollment_no =  $_SESSION['enrollment_no'];
    $book_id = $_POST['book_id'];

        $sql = 'select * from book  where book_id = '.$book_id.' ;';
        $ans = mysqli_query($conn,$sql);

        if(mysqli_num_rows($ans) == 0)
        {
            echo '<h1 class ="error">!there is no book present of this book id</h1>';
        }
        else
        {
            while($row = mysqli_fetch_assoc($ans))
            {
                if($row['copies'] > 0)
                {
                    //there is a book present for an issue in the library.
                    //add entry in transaction.
                    //change copies of that book from the book.
                    //change in studentbook or facultybook.
                    //now time for verification how many books student have?
                    $sql2 = 'select * from studentbook where enrollment_no = '.$enrollment_no.' ;';
                    $ans2 = mysqli_query($conn,$sql2);
                    while($row2 = mysqli_fetch_assoc($ans2))
                    {
                        if($row2['no_books'] < 3)
                        {
                        $book_id2 = $row['book_id'];
                        $book_name2 = $row['book_name'];
                        $book_auther2 = $row['book_auther'];
                        $book_edition2 = $row['book_edition'];
                        $semester2 = $row['semester'];
                        $publisher2 = $row['publisher'];

                        //insert into transaction table.

                        $sql3 = "insert into transaction (enrollment_no , book_id , book_name , book_auther , date_issue ,time_issue , book_edition , book_publisher , semester) values
                        ( $enrollment_no , $book_id2 , '$book_name2' , '$book_auther2' , NOW() , NOW() , $book_edition2 , '$publisher2' , $semester2);";
                        $ans3 = mysqli_query($conn,$sql3);

                        //change into studentbook or facultybook.

                        $new_no_book = $row2['no_books'] + 1;
                        $sql4 = 'update studentbook set no_books = '.$new_no_book.' where enrollment_no = '.$enrollment_no.' ;';
                        $ans4 = mysqli_query($conn,$sql4); 

                        //change into copies of the book in book table.

                        $new_no_book2 = $row['copies'] - 1;
                        $sql5 = 'update book set copies = '.$new_no_book2.' where book_id = '.$book_id.' ;';
                        $ans5 = mysqli_query($conn,$sql5); 

                        echo '<h1 class ="success">book is successfully issued</h1>';

                        }
                        else
                        {
                            echo '<h1 class = "error">!you exceed book issue limit.</h1>';
                            //this portion is when user exceed the no.of issue books.
                        }    
                }
                }
                else
                {
                    //if there is  no  book present in the library.
                    echo '<h1 class="error">!there is no copy present of this book id.</h1>';
                }
            }

        }