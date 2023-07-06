const titles = ['Front-end Developer', 'Ethical Hacker', 'Cybersecurity Researcher'];
let index = 0;

function changeTitle() {
    const titleElement = document.getElementById('title');
    titleElement.textContent = titles[index];
    index = (index + 1) % titles.length;
}

setInterval(changeTitle, 2000); // Change title every 2 seconds (2000 milliseconds)
const hamburgerMenu = document.querySelector('.hamburger-menu');
const offcanvas = document.querySelector('.offcanvas');

hamburgerMenu.addEventListener('click', () => {
    hamburgerMenu.classList.toggle('active');
    offcanvas.classList.toggle('active');
});

