import Swup from 'swup';
import SwupFadeTheme from '@swup/fade-theme';
import parallax from '../animations/parallax';
import {
    navIndicator,
    navIndicatorTransition,
} from '../animations/nav-indicator';

function init() {
    parallax();
    navIndicator();
}

function onContentReplaced() {
    parallax();
    navIndicatorTransition();
    window.scrollTo(0, 0);
}

export default function transitions() {
    init();

    const swup = new Swup({
        plugins: [new SwupFadeTheme()],
    });

    swup.on('contentReplaced', onContentReplaced);
}
