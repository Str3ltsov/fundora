import './bootstrap';

const toggleMenu = () => {
    const menuButton = document.querySelector('[aria-controls="mobile-menu"]');

    menuButton.addEventListener('click', () => {
        const menu = document.getElementById('mobile-menu')
        menu.classList.toggle('hidden')

        changeMenuButtonIcon()
        changeMenuButtonAriaExpanded()
    })

    const changeMenuButtonIcon = () => {
        const menuOpenIcon = menuButton.querySelector('.block');
        const menuCloseIcon = menuButton.querySelector('.hidden');

        menuOpenIcon.classList.toggle('block');
        menuOpenIcon.classList.toggle('hidden');
        menuCloseIcon.classList.toggle('block');
        menuCloseIcon.classList.toggle('hidden');
    }

    const changeMenuButtonAriaExpanded = () => {
        const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !isExpanded);
    }
}

toggleMenu()