var i = 0;
var txt = 'The Cake Is A Lie.';
var speed = 50;

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("demo$").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}