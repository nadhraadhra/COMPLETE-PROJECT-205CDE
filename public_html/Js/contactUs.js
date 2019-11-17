// =========================== Defining a function to display error message  ==========================================================//


function printError(elemId, hintMsg) 
{
    document.getElementById(elemId).innerHTML = hintMsg;
}

// =========================== Defining a function to validate the form ==========================================================//

function validateForm() 
{
    
// =========================== Retrieving the values of form elements  ==========================================================//

    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var country = document.contactForm.country.value;
    var message = document.contactForm.message.value;
 
    
   
// =========================== Defining error variables with a default value ==========================================================//

    var nameErr = emailErr = mobileErr = countryErr = messageErr = true;
    
// =========================== Validate Name  ==========================================================//
    
    
    if(name == "") {
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
        var phoneno = /^[0-12]\d{9}$/;
        if(phoneno.test(mobile) === false) {
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

    // =========================== Validate Message  ==========================================================//
    
    
    if(message == "") {
        printError("messageErr", "Please enter your message");
    } else {
        var regex = /^\w{6}$/;                
        if(regex.test(message) === false) {
            printError("messageErr", "Invalid used of characters");
        } else {
            printError("messageErr", "");
            messageErr = false;
        }
    }
    
// =================  Prevent the form from being submitted if there are any errors===========================//
    
    if((nameErr || emailErr || mobileErr || countryErr || messageErr) == true) {
        return false;
    } else {
        
// =================  Creating a string from input data for preview ==========================================//
        
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + name + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Country: " + country + "\n" +
                          "Your Message: " + message + "\n";
                       
        
        
// ================= Display input data in a dialog box before submitting the form ============================ //
       
        alert(dataPreview);
    }
};
    
    
