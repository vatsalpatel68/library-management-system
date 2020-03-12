$(document).ready(function(){

$(".show-form2").submit(function(e){
    e.preventDefault();
    var student_id = $("#student-enrollment-no").val();
    console.log(student_id);
    $.post("bd_show_client2.php",{
        student_id : student_id
    },function(data,status){
        $(".information").html(data);   
    })
})

})