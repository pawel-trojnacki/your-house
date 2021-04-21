export function getPostBlocks(wrapperSelector = '.single-post-content') {
    const wrapper = document.querySelector(wrapperSelector);
    if (!wrapper) {
        return [];
    }

    const blocks = wrapper.children;
    return Array.from(blocks);
}
