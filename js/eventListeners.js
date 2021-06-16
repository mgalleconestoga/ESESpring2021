// Step #1 Select elements
var elUsername = document.getElementById('username');
var elMsg = document.getElementById('feedback');

function checkUsername() {
    if (elUsername.value.length <= 6) {
        elMsg.innerHTML = '<p>Enter username with 6 or more characters</p>';
    } else {
        elMsg.innerHTML = '';           // Clear any error msg
    }
}

elUsername.addEventListener('blur', checkUsername, false);