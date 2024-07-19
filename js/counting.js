// Item-count
let Increment = document.getElementById('Increment');
let deIncrement = document.getElementById('deIncrement');
let countingCart = document.getElementById('counting');
let numberIncrement = 1;

 Increment.addEventListener('click', function(){
   numberIncrement++
   countingCart.textContent = numberIncrement
 });
 deIncrement.addEventListener('click', function(){
   numberIncrement--
   countingCart.textContent = numberIncrement
 });
