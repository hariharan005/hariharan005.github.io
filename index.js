/* For automatically changing the job role */
const titles = ['Front-end Developer', 'Ethical Hacker', 'Cybersecurity Researcher'];
let index = 0;

function changeTitle() {
    const titleElement = document.getElementById('title');
    titleElement.classList.add('splash');
    setTimeout(() => {
        titleElement.textContent = titles[index];
        index = (index + 1) % titles.length;
        titleElement.classList.remove('splash');
    }, 500); // Adjust the duration of the splash animation here (in milliseconds)
}

setInterval(changeTitle, 2000); // Change title every 2 seconds (2000 milliseconds)


/* For  */






