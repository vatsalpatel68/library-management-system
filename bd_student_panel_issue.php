<?php
    include 'be_connection.php';
    $semester = $_POST['semester'];
    
    $sql = 'select * from book where semester = '.$semester.' ;';
    $ans = mysqli_query($conn,$sql);


    if(mysqli_num_rows($ans) == 0)
    {
        echo '<h1>No book is present for this semester</h1>';
    }
    else
    {
        $flag = 0;
        while($row = mysqli_fetch_assoc($ans))
        {
            $counter = 1;
            if($flag == 0)
            {
                echo '<tr class="table-row">';
                echo '<th class ="table-header">Book id</th>';
                echo '<th class ="table-header">Book name</th>';
                echo '<th class ="table-header">Book auther</th>';
                echo '<th class ="table-header">Book edition</th>';
                echo '<th class ="table-header">Book publisher</th>';
                echo '</tr>';
                $flag = 1;
            }
            echo '<tr class = "table-row"><input type="checkbox" class="checkbox-1" name="select-subject" value = "'.$counter.'" >';
            echo '<td class="book-data">'.$row['book_id'].'</td>';
            echo '<td class="book-data">'.$row['book_name'].'</td>';
            echo '<td class="book-data">'.$row['book_auther'].'</td>';
            echo '<td class="book-data">'.$row['book_edition'].'</td>';
            echo '<td class="book-data">'.$row['publisher'].'</td>';
            echo '</input></tr>';
            $counter = $counter + 1;
        }
    }