$(document).ready(function(){
    $(".Remove-book").submit(function(e){
        e.preventDefault();
        var book_id = $("#book-id").val();
        var book_copies = $("#book-copies").val();
        var book_submit_button = $("#book-submit-button").val();
        if(Boolean(book_id) && Boolean(book_copies))
        {
            $.post("bd_remove_book.php",{
                book_id : book_id,
                book_copies : book_copies,
                book_submit_button : book_submit_button
            },function(data,status){
                alert(data);
                location.reload();
            })
        }
        else{
            alert("Enter a valid Data.");
            location.reload();
        }
    })
})