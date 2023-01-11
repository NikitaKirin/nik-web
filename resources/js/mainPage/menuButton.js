export const menuButton = () => {
    const menuButton = document.querySelector('.menu-button');
    const menuNav = document.querySelector('.menu-nav');
    menuButton.onclick = (e) => {
        e.preventDefault();
        e.currentTarget.classList.toggle('menu-button-active');
        menuNav.classList.toggle('menu-nav-active');
    }
}