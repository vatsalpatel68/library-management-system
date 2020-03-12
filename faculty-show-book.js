$(document).ready(function(){
    $.post("bd_faculty-show-book.php",function(data,status){
        var thelist = document.getElementById("book-table2");
            while(thelist.hasChildNodes())
            {
                thelist.removeChild(thelist.lastChild);   
            }
            $("#book-table2").append(data);
    })
})