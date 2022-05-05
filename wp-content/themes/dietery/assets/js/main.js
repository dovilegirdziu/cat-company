// NAV atidarymas ===========================================

// paimamas menu mygtukas
burgerMenuBtn = document.querySelector('.menu-icon');
// paimama expanded-nav sekcija
expandNav = document.querySelector('#expanded-nav');
// paimamas "X" mygtukas expanded-nav sekcijoje
collapseNav = document.querySelector('.fa-xmark');


// menu mygtukas "laukia" paspaudimo ir paspaudus atlieka funkcija
burgerMenuBtn.addEventListener('click', expandMenu);

// atskleidzia/uzskleidzia su animacija menu
function expandMenu() {
    expandNav.classList.toggle("active");
}

// X mygtukas "laukia" paspaudimo ir paspaudus atlieka funkcija
collapseNav.addEventListener('click', collapseMenu);

// uzskleidzia expanded menu
function collapseMenu() {
    expandNav.classList.toggle("active");
}


// Paveiksliuko pakeitimas ======================================

// paima <img> su norima #id
mainImg = document.querySelector('#img-to-change');

// paspaudus ant <img>, ji pakeicia 
mainImg.addEventListener('click', changeImg);

// masyvas su img src
imagesToChange = [
    "http://localhost/wp-content/themes/dietery/assets/images/photos/kittenBelly-paula-pinheiro.jpg",
    "http://localhost/wp-content/themes/dietery/assets/images/photos/catCouple-kelly.jpg",
    "http://localhost/wp-content/themes/dietery/assets/images/photos/nappy-pixabay.jpg",
    "http://localhost/wp-content/themes/dietery/assets/images/photos/sleepyPawludemeula-fernandes.jpg"
];

// isrenka random src is masyvo
function getRandomImg() {
    return imagesToChange[Math.floor(Math.random() * imagesToChange.length)];
}

// pakeicia <img> src i viena is masyvo 
function changeImg() {
    mainImg.src = getRandomImg();
}
