import { scroll } from '../utils/scroll';

function homepageParallax() {
    const background = document.querySelector('.header-image');

    function backgroundTransform() {
        const { scale, translateY } = scroll();
        background.style.transform = `scale(${scale}) translateY(${translateY}%)`;
    }

    if (!!background) {
        window.addEventListener('scroll', backgroundTransform);
    }
}

function projectParallax() {
    const image = document.querySelector('.project-image');

    function backgroundTransform() {
        const { scale, translateY } = scroll();
        image.style.transform = `scale(${scale}) translateY(${translateY}%)`;
    }

    if (!!image) {
        window.addEventListener('scroll', backgroundTransform);
    }
}

export default function parallax() {
    homepageParallax();
    projectParallax();
}
