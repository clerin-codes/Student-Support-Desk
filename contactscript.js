
function validation(){
    if(document.form.name.value==""){
        document.getElementById("para").innerHTML="Enter Name*";
        return false;
    }
    else if(document.form.email.value==""){  
        document.getElementById("para").innerHTML="Enter Email*";
        return false;
    }
    else if(document.form.subject.value==""){
        document.getElementById("para").innerHTML="Enter Subject*";
        return false;
    }
    else if(document.form.message.value==""){
        document.getElementById("para").innerHTML="Enter Message*";
        return false;
    }
    
}

var form = document.getElementById("myForm");

// Add event listener to form submit
form.addEventListener("submit", function(event) {
    // Get the checkbox element
    var checkbox = document.getElementById("checkbox");

    // Check if the checkbox is checked
    if (!checkbox.checked) {
        // If checkbox is not checked, prevent form submission
        event.preventDefault();
        alert("Please agree to the terms.");
    }
});
