$(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault();
        var employee_no = $("#employee_no").val();
        var password = $("#password").val();

        if(Boolean(employee_no) && Boolean(password))
        {
            $.post("bd_faculty-verification.php",{
                employee_no : employee_no,
                password : password,
            },function(data,status){
                if(data == 'fail')
                {
                    alert("User is not exist.");
                    location.reload();
                }
                if(data == 'true')
                {
                    window.location.href = "/wt/faculty_panel.php";
                }
            })
        }
        else{
            alert("ENTER A VALID DATA;");
            location.reload();
        }
    })
})