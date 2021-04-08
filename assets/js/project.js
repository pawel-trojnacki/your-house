import { parallax } from './utils/parallax';
const image = document.querySelector('.project-image');

function backgroundTransform() {
    const { scale, translateY } = parallax();
    image.style.transform = `scale(${scale}) translateY(${translateY}%)`;
}

window.addEventListener('scroll', backgroundTransform);
