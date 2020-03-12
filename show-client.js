$(document).ready(function(){
    $('.show-form').submit(function(e){
        e.preventDefault();
        var faculty_id = $("#faculty-employee-no").val();
        $.post('bd_show_client.php',{
            faculty_id : faculty_id
        },function(data,status){
            $(".information").html(data);
        })
    });
})