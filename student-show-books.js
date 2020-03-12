$(document).ready(function(){
    $.post("bd_student-show-books.php",function(data,status){
        var thelist = document.getElementById("book-table");
            while(thelist.hasChildNodes())
            {
                thelist.removeChild(thelist.lastChild);   
            }
            $("#book-table").append(data);
    })
})