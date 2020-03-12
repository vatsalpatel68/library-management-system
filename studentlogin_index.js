$(document).ready(function(){
    $(".student-login").submit(function(e){
        e.preventDefault();
        var enrollment_no = $("#enrollment_no").val();
        var password = $("#password").val();

        if(Boolean(enrollment_no) && Boolean(password))
        {
            $.post("be_student-verification.php",{
                enrollment_no : enrollment_no,
                password : password,
            },function(data,status){
                if(data == 'fail')
                {
                    alert("User is not exist.");
                    location.reload();
                }
                if(data == 'true')
                {
                    window.location.href = "/wt/student_panel.php";
                }
            })
        }
        else{
            alert("ENTER A VALID DATA;");
            location.reload();
        }
    })
})