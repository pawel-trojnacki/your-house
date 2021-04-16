import barba from '@barba/core';
import barbaCss from '@barba/css';
import parallax from './parallax';

barba.use(barbaCss);

barba.hooks.enter(() => {
    window.scrollTo(0, 0);
    parallax();
});

barba.init({
    transitions: {
        name: 'cover',
        to: ['cover'],
        leave() {},
        enter() {},
    },
});
