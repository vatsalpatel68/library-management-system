<?php
    include 'be_connection.php';
    
    session_start();
    $sql = 'select * from transaction;';
    $ans = mysqli_query($conn,$sql);
        $flag = 0;
        while($row = mysqli_fetch_assoc($ans))
        {
            $counter = 1;
            if($flag == 0)
            {
                echo '<tr class="table-row">';
                echo '<th class ="table-header">enrollment no</th>';
                echo '<th class ="table-header">Book id</th>';
                echo '<th class ="table-header">Book name</th>';
                echo '<th class ="table-header">Book auther</th>';
                echo '<th class ="table-header">Book edition</th>';
                echo '<th class ="table-header">Book publisher</th>';
                echo '<th class ="table-header">issue Date</th>';
                echo '<th class ="table-header">issue Time</th>';
                echo '<th class ="table-header">semester</th>';
                
                echo '</tr>';
                $flag = 1;
            }
            echo '<tr class = "table-row"><input type="checkbox" class="checkbox-1" name="select-subject" value = "'.$counter.'" >';
            echo '<td class="book-data">'.$row["enrollment_no"].'</td>';
            echo '<td class="book-data">'.$row['book_id'].'</td>';
            echo '<td class="book-data">'.$row['book_name'].'</td>';
            echo '<td class="book-data">'.$row['book_auther'].'</td>';
            echo '<td class="book-data">'.$row['book_edition'].'</td>';
            echo '<td class="book-data">'.$row['book_publisher'].'</td>';
            echo '<td class="book-data">'.$row['date_issue'].'</td>';
            echo '<td class="book-data">'.$row['time_issue'].'</td>';
            echo '<td class="book-data">'.$row["semester"].'</td>';
            echo '</input></tr>';
            $counter = $counter + 1;
        }
    