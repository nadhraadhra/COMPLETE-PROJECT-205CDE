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

    var name = document.signupForm.name.value;
    var email = document.signupForm.email.value;
    var mobile = document.signupForm.mobile.value;
    var country = document.signupForm.country.value;
    var gender = document.signupForm.gender.value;
    var password = document.signupForm.password.value;
    var confirmPassword = document.signupForm.confirmPassword.value;
    
   
// =========================== Defining error variables with a default value ==========================================================//

    var nameErr = emailErr = mobileErr = countryErr = genderErr = passwordErr = confirmPasswordErr = true;
    
// =========================== Validate Name  ==========================================================//
    
    
    if(name == "") {
        alert("Error:Name cannot be blank!")
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    
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
    
// =========================== Validate Mobile Number  ==========================================================//
    
    
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[0-10]\d{10}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
        
// =========================== Validate Country  ==========================================================//
    
    if(country == "Select") {
        printError("countryErr", "Please select your country");
    } else {
        printError("countryErr", "");
        countryErr = false;
    }
    
// =========================== Validate Gender  ==========================================================//
    
    if(gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
    
// =========================== Validate Password  ==========================================================//
    
    if(password == "") {
        printError("passwordErr", "Please enter valid password");
    } else {
        printError("passwordErr", "");
        passwordErr = false;
    }
        
// ============================ Regular expression for basic Password validation  ================================//
        
        var regex =   /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        if(regex.test(password) === false) {
            printError("passwordErr", "Please enter a valid password");
        } else{
            printError("passwordErr", "");
            passwordErr = false;
        }
    
    
// =========================== Validate Confirm Password  ==========================================================//
    
    if(password != confirmPassword) {
        printError("confirmPasswordErr", "Password confirmation doesn't match password. \n \n \n Password confirmation must match password");
    } else {
        printError("confirmPasswordErr", "");
        confirmPasswordErr = false;
    }
    
    
// =================  Prevent the form from being submitted if there are any errors===========================//
    
    if((nameErr || emailErr || mobileErr || countryErr || genderErr || passwordErr || confirmPasswordErr) == true) {
        return false;
    } else {
        
// =================  Creating a string from input data for preview ==========================================//
        
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Gender: " + gender + "\n" +
                          "Password: " + password + "\n";
        
        
// ================= Display input data in a dialog box before submitting the form ============================ //
       
        alert(dataPreview);
    }
};
    
    
    
    
    

