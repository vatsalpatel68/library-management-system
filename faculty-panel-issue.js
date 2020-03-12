var flag = 0;
function changeyear(){

    flag=1;
}

function changesemester(){
    if(flag==1)
    {
        var selectyear = document.getElementById("select-year").value;
        var ele = document.getElementsByName('semester'); 
              
        for(i = 0; i < ele.length; i++) { 
            if(ele[i].checked) 
            {
                var  selectsemester = ele[i].value; 
            }
       }
        var semester = (selectyear-1)*2;
        if(selectsemester == 'odd')
        {
            semester = semester + 1; 
        }
        if(selectsemester == 'even')
        {
            semester = semester + 2;
        }

        $.post("bd_faculty_panel_issue.php",{
            semester : semester
        },function(data,status){
            var thelist = document.getElementById("book-table");
            while(thelist.hasChildNodes())
            {
                thelist.removeChild(thelist.lastChild);   
            }
            $("#book-table").append(data);
        })
        
        
      
    }
}

