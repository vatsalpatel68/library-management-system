$(document).ready(function(){
    $(".add-book").submit(function(e){
        e.preventDefault();
        var book_id = $("#book-id").val();
        var book_name = $("#book-name").val();
        var book_auther = $("#book-auther").val();
        var book_edition = $("#book-edition").val();
        var book_semester = $("#book-semester").val();
        var book_publisher = $("#book-publisher").val();
        var book_copies = $("#book-copies").val();
        var book_submit_button = $("#book-submit-button").val();
        
        if(Boolean(book_id) && Boolean(book_name) && Boolean(book_auther) && Boolean(book_edition) && Boolean(book_publisher) && Boolean(book_copies))
        {
            $.post('bd_add_book.php',{
                book_id : book_id,
                book_name : book_name,
                book_auther : book_auther,
                book_edition : book_edition,
                book_semester : book_semester,
                book_publisher : book_publisher,
                book_copies : book_copies,
                book_submit_button : book_submit_button
            },function(data,status){
                if(data === 'true')
                {
                    alert("Books are added successfully;");
                    location.reload();
                }
            })
        }
        else
        {
            alert("Enter a valid data;");
            location.reload();
        }
    })
    })