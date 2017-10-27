export function typeWriter() {
    var i = 0;
    var txt = 'The Cake Is A Lie.';
    var speed = 50;
    if (i < txt.length) {
        document.getElementById("demo$").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}