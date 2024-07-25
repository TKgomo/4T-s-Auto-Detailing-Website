// With the code below we are adding a three line bar on a mobile and tablet device to be able to open up the verticall navigation bar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navigationBar');

if(bar){
    bar.addEventListener('click',() => {
        nav.classList.add('active');
    })
}

if(close){
    bar.addEventListener('click',() => {
        nav.classList.remove('active');
    })
}

// The code ends here for you close and open vertical bar!

document.addEventListener("DOMContentLoaded", function() {
    const bubbles = document.querySelectorAll("#testimonials .bub img");

    bubbles.forEach((bubble) => {
        bubble.addEventListener("click", function() {
            bubble.classList.add("pop");
        });
    });
});

