
$(document).ready(function(){
    $("form").submit(function(e){
        e.preventDefault();
        var book_id = $('.book_input_id').val();
        if(book_id == '')
        {
            location.reload(true);
        }
        else
        {
        $.post("bd_student-panel-issue2.php",{
            book_id : book_id
        },function(data,status)
        {
           $(".result-text").html(data);
        })
    }
    })
})