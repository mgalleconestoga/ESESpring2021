alert('Hello');

var today = new Date();
today.setHours(13);
var hourNow = today.getHours();
var greeting; 
var el;

if (hourNow> 18) {
    greeting = 'Good evening';
} else if (hourNow > 12) {
    greeting = 'Good afternoon';
} else if (hourNow > 0) {
    greeting = 'Good Morning';
} else {
    greeting = 'Welcome';
}

el = document.getElementById('greet');
el.innerHTML = greeting; 

var hour = today.getHours();
document.write('The time is ' + hour);