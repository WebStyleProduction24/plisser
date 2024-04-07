const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click', () => {
    if (menu.classList.contains('d-none')) {
        menu.classList.remove('d-none');
    } else {
        menu.classList.add('d-none');
    }
});


