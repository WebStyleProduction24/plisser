const burger = document.querySelector('.burger-menu');
const menu = document.querySelector('#menu');

burger.addEventListener('click', () => {
    if (menu.classList.contains('none-d')) {
        menu.classList.remove('none-d');
    } else {
        menu.classList.add('none-d');
    }
});


