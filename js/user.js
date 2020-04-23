


regSubBtn = document.getElementById("btnSubmit");

regSubBtn.addEventListener("click", function(event){ 
    var pwd1 = document.getElementById("txtPassword").value;
    var pwd2 = document.getElementById("txtConfirmPassword").value;
    if(pwd1 != pwd2){
        alert("Password does not match!");
        event.preventDefault();
        document.getElementById("txtConfirmPassword").value = "";
    }
    
});