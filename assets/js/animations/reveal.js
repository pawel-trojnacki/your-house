import { getPostBlocks } from '../utils/getPostBlocks';

function cb(entires, observer) {
    entires.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.remove('hidden');
            observer.unobserve(entry.target);
        }
    });
}

const options = {
    treshold: 0.3,
};

function addRevealToPostBlocks() {
    const blocks = getPostBlocks();
    if (blocks.length < 1) {
        return;
    }
    blocks.forEach((block) => {
        block.classList.add('fade-in-reveal');
    });
}

export default function reveal() {
    if (!window.IntersectionObserver) {
        return;
    }

    addRevealToPostBlocks();

    const itemList = document.querySelectorAll('.fade-in-reveal');
    const items = Array.from(itemList);

    if (items.length < 1) {
        return;
    }

    items.forEach((item) => {
        item.classList.add('hidden');
    });

    let observer = new IntersectionObserver(cb, options);
    items.forEach((item) => {
        observer.observe(item);
    });
}
