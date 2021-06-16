// Step #1: Select the elements 
var elForm; 
var firstNameFeedbak, lastNameFeedBack, termsFeedback; 
var firstNameInput, lastNameInput, termsInput;

elForm = document.getElementById('reqAccess');
firstNameFeedback = document.getElementById('firstNameFeedback'); 
lastNameFeedback = document.getElementById('lastNameFeedback'); 
termsFeedback = document.getElementById('termsFeedback'); 
firstNameInput = document.getElementById('fname'); 
lastNameInput = document.getElementById('lname'); 
termsInput = document.getElementById('terms'); 

// Step #2: Declare functions to be called when an event occurs

function checkFirstName(e) {
    if(firstNameInput.value.length < 1){
        firstNameFeedback.innerHTML = '<-- Please enter a first name';  
        e.preventDefault();
    } else {
        firstNameFeedback.innerHTML = ''; 
    }
}

function checkLastName(e) {
    if(lastNameInput.value.length < 1){
        lastNameFeedback.innerHTML = '<-- Please enter a last name';  
        e.preventDefault();
    } else {
        lastNameFeedback.innerHTML = ''; 
    }
}

function checkTerms(e) { 
    if(!termsInput.checked) {
        termsFeedback.innerHTML = '<-- You must agree to the terms!';
        e.preventDefault();
    } else {
        termsFeedback.innerHTML = '';
    }
}

// Step #3: Create Event listeners 
elForm.addEventListener('submit', function(e) { checkFirstName(e); checkLastName(e); checkTerms(e); } , false);
