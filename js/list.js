var coolEl = document.getElementsByClassName('cool');
El = coolEl[0]; 
El.setAttribute('class', 'hot');
//console.log(El.className);
El.className = 'cool';
//console.log(El.className);


// innerHTML example
var secondItem = document.querySelector('li#two');
//console.log(secondItem.innerHTML);
secondItem.innerHTML = 'Favorite Foods <ol><li>cookies</li><li>Cake</li><li>chocolate</li></ol>'

// DOM Manipulation 
var newEl = document.createElement('li');   // create new element
var newText = document.createTextNode('Strawberries'); // create text node
newEl.appendChild(newText);                 // Append text node to the new element

//newEl.id='new';
newEl.setAttribute('id','new');             // Set attribute
console.log(newEl.id);

var pos = document.getElementById('list');  // get reference to unordered list
pos.appendChild(newEl);                     // append newEl to unordered list

