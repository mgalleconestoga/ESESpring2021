var msg ='<h2>Browser Window</h2>'; 
msg += '<p>width: ' + window.innerWidth + '</p>'; 
msg += '<p>height: ' + window.innerHeight + '</p>'; 
msg += '<h2>History</h2><p>Pages in history: ' + window.history.length + '</p>';
msg += '<h2>Screen</h2><p>screen width: ' + window.screen.width + '</p>'; 
msg += '<p>screen height: ' + window.screen.height + '</p>'; 
msg += '<h2>Broswer window</h2><p>x-coord: ' + window.screenX + '</p>'; 
msg += '<p>y-coord: ' + window.screenY + '</p>';

var el = document.getElementById('info'); 
el.innerHTML = msg; 

//alert('Current page url: ' + window.location);
//window.print();