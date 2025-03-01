
function validation(){
    if(document.formfill.fname.value==""){
        document.getElementById("result").innerHTML="Enter Firstname*";
        return false;
    }
    else if(document.formfill.lname.value==""){  
        document.getElementById("result").innerHTML="Enter Lastname*";
        return false;
    }
    else if(document.formfill.email.value==""){
        document.getElementById("result").innerHTML="Enter your Email*";
        return false;
    }
    else if(document.formfill.pwd.value==""){
        document.getElementById("result").innerHTML="Enter your Password*";
        return false;
    }
    else if(document.formfill.pwd.value.length<5){
        document.getElementById("result").innerHTML="atleast five letters for password*";
        return false;
    }
    else if(document.formfill.repwd.value==""){
        document.getElementById("result").innerHTML="Please re-enter password*";
        return false;
    }
    else if(document.formfill.repwd.value !== document.formfill.pwd.value){
        document.getElementById("result").innerHTML="Password doesn't matched*";
        return false;
    }
}