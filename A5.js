function clicked(){

    console.log("button clicked!")
}

setTimeout(function() {
    alert("Welcome");
}, 2000);

setInterval(function() {
    console.log("Hello");
}, 1000);

 document.getElementById('b1').addEventListener('click', function() {
     document.querySelector('#main').style.backgroundColor = 'black'});