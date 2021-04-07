export function parallax() {
    const y = window.scrollY;
    const scale = 1 + y / 4000;
    const translateY = -y / 25;
    return { scale, translateY };
}
