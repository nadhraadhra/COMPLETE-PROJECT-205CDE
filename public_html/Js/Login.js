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

    var username = document.loginForm.username.value;
    var password = document.loginForm.password.value;

    
   
// =========================== Defining error variables with a default value ==========================================================//

    var usernameErr = passwordErr =  true;
    

// =========================== Validate Email Address  ==========================================================//
    
       if(username == "") {
        alert("Error:Name cannot be blank!")
        printError("usernameErr", "Please enter your username of 6 to 20 characters");
    } else {
        var regex = /^\w{6,21}$/;                
        if(regex.test(username) === false) {
            printError("usernameErr", "Please enter a valid username");
            
        } else {
            printError("usernameErr", "");
            usernameErr = false;
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
    
    if((usernameErr|| passwordErr) == true) {
        return false;
    } else {
        
// =================  Creating a string from input data for preview ==========================================//
        
        var dataPreview = "You've entered the following details: \n" +
                          "Username: " + username + "\n" +
                          "Password: " + password + "\n";
        
        
// ================= Display input data in a dialog box before submitting the form ============================ //
       
        alert(dataPreview);
    }
};
    
    
    
    
    
    