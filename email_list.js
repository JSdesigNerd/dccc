"use strict"
// this page edited to match fields in index2.php
const $ = selector => document.querySelector(selector);

const joinList = evt => {
    // get user entries from text boxes
    const email1 = $("#email_1").value;
    const email2 = $("#email_2").value;
    const firstName = $("#first_name").value;
    
    // check user entries
    let isValid = true;
    if (email1 == "") { 
        $("#email1_error").textContent = "Email is required.";
        isValid = false;
    } else { 
        $("#email1_error").textContent = ""; 
    }

    if (email1 != email2) { 
        $("#email2_error").textContent = "Emails must match.";
        isValid = false;
    } else { 
        $("#email2_error").textContent = ""; 
    }

    if (screenName == "") {
        $("#screenName_error").textContent = "Screen name is required.";
        isValid = false;
    } else { 
        $("#screenName_error").textContent = ""; 
    }

    // cancel form submit if any user entries are invalid
    if ( !isValid ) {
        evt.preventDefault(); 
    }
};

const clearForm = () => {
    // clear text boxes
    $("#email1").value = "";
    $("#email2").value = "";
    $("#screenName").value = "";

    // clear span elements
    $("#email1_error").textContent = "*";
    $("#email2_error").textContent = "*";
    $("#fscreenName_error").textContent = "*"; 

    // set focus on first text box after resetting the form
    $("#email1").focus();
};

document.addEventListener("DOMContentLoaded", () => {
    // hook up click events for both buttons
    $("#JamOn").addEventListener("click", JamOn);
    $("#clearForm").addEventListener("click", clearForm);

    // set focus on first text box after the form loads
    $("#email1").focus();
});
