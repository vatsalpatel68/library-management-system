$(document).ready(function(){
    $(".show-book").submit(function(e){
        e.preventDefault();
        var book_id = $("#book-id").val();
        var book_name = $("#book-name").val();
        var book_submit = $("#book-submit-button").val();

        if(Boolean(book_id) && Boolean(book_name))
        {
            alert("choose any one.");
            location.reload();
        }
        else if(Boolean(book_id))
        {
            $.post("bd_show_book.php",{
                book_data : book_id,
                book_submit : book_submit
            },function(data,status){
                $(".information").html(data);
            });
            
        }
        else if(Boolean(book_name))
        {
            
            $.post("bd_show_book.php",{
                book_data : book_name,
                book_submit : book_submit
            },function(data,status){
                $(".information").html(data);
            });
        }
        else {
            alert("please choose any one.");
            location.reload();
        }
    })
});