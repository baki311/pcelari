const bee = document.getElementById('bee');

function moveBee() {
    const maxX = window.innerWidth - bee.clientWidth;
    const randomX = Math.random() * maxX;

    bee.style.transform = `translate(${randomX}px, -50%)`;
}

moveBee(); 
setInterval(moveBee, 1000);
