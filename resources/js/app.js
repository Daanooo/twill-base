import './bootstrap';

let mobileNavToggles = document.querySelectorAll('.mobile-nav-toggle');
let mobileNavBar = document.getElementById('main-mobile-nav');

mobileNavToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        mobileNavBar.classList.toggle('active');
    });
});