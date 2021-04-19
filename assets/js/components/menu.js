const hamburger = document.querySelector('.hamburger');
const navWrapper = document.querySelector('.nav-wrapper-mobile');
const menuList = document.querySelectorAll('.menu-item');

const menuArray = !!navWrapper && !!menuList ? Array.from(menuList) : null;

function addTransitionDelay() {
    const initialDelay = 0.2;
    if (navWrapper.classList.contains('active')) {
        menuArray.forEach((item, id) => {
            delay = initialDelay + id / 10;
            item.style.transitionDelay = `${delay}s`;
        });
        return;
    }
    menuArray.forEach((item) => {
        delay = 0;
        item.style.transitionDelay = `${delay}s`;
    });
}

function handleMenuButtonClick() {
    if (!!navWrapper) {
        [hamburger, navWrapper].forEach((item) => {
            item.classList.toggle('active');
        });
        addTransitionDelay();
    }
}

function closeMenu() {
    if (navWrapper.classList.contains('active')) {
        [hamburger, navWrapper].forEach((item) => {
            item.classList.remove('active');
        });
        addTransitionDelay();
    }
}

if (!!hamburger) {
    hamburger.addEventListener('click', handleMenuButtonClick);
    menuArray.forEach((item) => {
        item.addEventListener('click', closeMenu);
    });
}
