/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// =========================== Defining a function to display error message  ==========================================================//


function printError(elemId, hintMsg) 
{
    document.getElementById(elemId).innerHTML = hintMsg;
}

// =========================== Defining a function to validate the form ==========================================================//

function validateForm() 
{
    
// =========================== Retrieving the values of form elements  ==========================================================//

    var email = document.loginForm.email.value;
    var password = document.loginForm.password.value;

    
   
// =========================== Defining error variables with a default value ==========================================================//

    var emailErr = passwordErr =  true;
    

// =========================== Validate Email Address  ==========================================================//
    
    
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }

    
// =========================== Validate Password  ==========================================================//
    
    if(password == "") {
        printError("passwordErr", "Please enter valid password");
    } else {
        printError("passwordErr", "");
        passwordErr = false;
    }
        
// ============================ Regular expression for basic Password validation  ================================//
        
        var strongRegex =   /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

        
        if(strongRegex.test(password) === false) {
            printError("passwordErr", "Please enter a valid password at least 8 character");
        } else{
            printError("passwordErr", "");
            passwordErr = false;
        }
    
   
// =================  Prevent the form from being submitted if there are any errors===========================//
    
    if((emailErr|| passwordErr) == true) {
        return false;
    } else {
        
// =================  Creating a string from input data for preview ==========================================//
        
        var dataPreview = "You've entered the following details: \n" +
                          "Email Address: " + email + "\n" +
                          "Password: " + password + "\n";
        
        
// ================= Display input data in a dialog box before submitting the form ============================ //
       
        alert(dataPreview);
    }
};
    
    
    
    
    