import { getActiveTab } from '../utils/getActiveTab';

function transformIndicator(indicator, activeTab) {
    const coordinates = activeTab.getBoundingClientRect();
    const { x, width } = coordinates;
    indicator.style.width = width + 'px';
    indicator.style.visibility = 'visible';
    indicator.style.transform = `translateX(${x}px)`;
}

function displayIndicator(indicator) {
    const activeTab = getActiveTab();

    if (!activeTab) {
        return;
    }

    indicator.style.visibility = 'visible';

    transformIndicator(indicator, activeTab);
    window.addEventListener('resize', () => {
        indicator.style.display = 'none';
        transformIndicator(indicator, activeTab);
        indicator.style.display = 'block';
    });
}

export function navIndicator() {
    const indicator = document.querySelector('.nav-indicator');
    if (!indicator) {
        return;
    }

    setTimeout(() => {
        displayIndicator(indicator);
    }, 500);
}

export function navIndicatorTransition() {
    const indicator = document.querySelector('.nav-indicator');
    if (!indicator) {
        return;
    }

    indicator.classList.add('visible');

    displayIndicator(indicator);
}
