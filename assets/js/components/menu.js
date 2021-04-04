const hamburger = document.querySelector('.hamburger');
const navWrapper = document.querySelector('.nav-wrapper');

function handleMenuButtonClick() {
    navWrapper.classList.toggle('active');
}

hamburger.addEventListener('click', handleMenuButtonClick);
