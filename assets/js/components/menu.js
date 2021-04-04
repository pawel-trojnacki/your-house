const hamburger = document.querySelector('.hamburger');
const navWrapper = document.querySelector('.nav-wrapper-mobile');

const menuList =
    navWrapper?.children[0]?.children[0]?.children[0]?.children ?? null;
const menuArray = menuList ? Array.from(menuList) : null;

function addTransitionDelay() {
    const containerDelay = 0.5;
    if (navWrapper.classList.contains('active')) {
        menuArray.forEach((item, id) => {
            delay = containerDelay + id / 10;
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

if (!!hamburger) {
    hamburger.addEventListener('click', handleMenuButtonClick);
}
