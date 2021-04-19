export function getActiveTab() {
    const menuItemsList = document.querySelectorAll('.menu-item-desktop');
    const menuItems = Array.from(menuItemsList);
    if (menuItems.length < 1) {
        return;
    }

    const pagenamePathId = 2;
    const homepageTabId = 0;

    const pathname = window.location.pathname;
    const pathElements = pathname.split('/');
    const path = pathElements[pagenamePathId];

    let activeTab;
    if (!path) {
        activeTab = menuItems[homepageTabId];
    }

    if (path) {
        activeTab = menuItems.find(
            (item) => item.textContent.toLowerCase() === path
        );
    }

    return activeTab;
}
