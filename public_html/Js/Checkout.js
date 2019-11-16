/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkoutForm()
{
    var name = document.forms["checkoutForm"]["First Name"];
    var phone= document.forms["checkoutForm"]["phone"];
    var address = document.forms["checkoutForm"]["address"];
    var email = document.forms["checkoutForms"]["email"];
    
    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (address.value == "")
    {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }
     
}
