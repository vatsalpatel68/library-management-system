$(document).ready(function(){
    $.post("bd_books_record.php",function(data,status){
        var thelist = document.getElementById("book-table");
        while(thelist.hasChildNodes())
        {
            thelist.removeChild(thelist.lastChild);   
        }
        $("#book-table").append(data);
    });
})