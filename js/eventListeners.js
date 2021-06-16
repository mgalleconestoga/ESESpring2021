// Step #1 Select elements
var elUsername = document.getElementById('username');
var elMsg = document.getElementById('feedback');

function checkUsername(minLength) {
    if (elUsername.value.length <= minLength) {
        elMsg.innerHTML = '<p>Enter username with ' + minLength + ' or more characters</p>';
    } else {
        elMsg.innerHTML = '';           // Clear any error msg
    }
}

elUsername.addEventListener('blur', function() {checkUsername(10) }, false);