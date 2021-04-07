import { parallax } from './utils/parallax';
const background = document.querySelector('.header-image');
// const headerInner = document.querySelector('.header-inner');

const startHeaderInnerPosition = -100;

function backgroundTransform() {
    const { scale, translateY } = parallax();
    background.style.transform = `scale(${scale}) translateY(${translateY}%)`;
    // headerInner.style.transform = `translateY(${
    //     startHeaderInnerPosition + +translateY
    // }%)`;
}

window.addEventListener('scroll', backgroundTransform);
