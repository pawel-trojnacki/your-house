import barba from '@barba/core';
import barbaCss from '@barba/css';
import parallax from './parallax';
import { navIndicatorTransition } from './nav-indicator';

export default function pageTransitions() {
    barba.use(barbaCss);

    barba.hooks.enter(() => {
        window.scrollTo(0, 0);
        parallax();
    });

    barba.hooks.leave(() => {
        navIndicatorTransition();
    });

    barba.init({
        transitions: {
            name: 'cover',
            to: ['cover'],
            leave() {},
            enter() {},
        },
    });
}
