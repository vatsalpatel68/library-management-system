<?php

 include 'be_connection.php';

 $book_id = $_POST['book_id'];
 $book_copies = $_POST['book_copies'];
 $book_submit_button = $_POST['book_submit_button'];

 if(isset($book_submit_button))
 {
     $sql1 = "SELECT * FROM  book WHERE book_id = ".$book_id." ;";
     $res1 = mysqli_query($conn,$sql1);
     if(mysqli_num_rows($res1))
     {
         while($ans = mysqli_fetch_assoc($res1))
        {
            if($book_copies > $ans['copies'])
            {
                echo 'There are only '.$ans['copies'] . ' books;';
                exit();
            }
            else
            {
                $difference = $ans['copies'] - $book_copies;
                $sql2 = "update book set copies = ".$difference." where book_id = ".$book_id.' ;';
                $suc = mysqli_query($conn,$sql2);
                if($suc)
                {
                    echo 'successfully updated';
                }

            }
        }          
        
    }
     else
     {
         echo 'nodata';
         exit();
     }
 }