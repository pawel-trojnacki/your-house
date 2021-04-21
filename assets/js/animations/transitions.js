import Swup from 'swup';
import SwupFadeTheme from '@swup/fade-theme';
import parallax from '../animations/parallax';
import {
    navIndicator,
    navIndicatorTransition,
} from '../animations/nav-indicator';
import reveal from './reveal';

function init() {
    parallax();
    navIndicator();
    reveal();
}

function onContentReplaced() {
    window.scrollTo(0, 0);
    parallax();
    navIndicatorTransition();
    reveal();
}

export default function transitions() {
    init();

    const swup = new Swup({
        plugins: [new SwupFadeTheme()],
    });

    swup.on('contentReplaced', onContentReplaced);
}
