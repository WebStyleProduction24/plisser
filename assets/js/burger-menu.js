const burger = document.querySelector('.burger-menu');
const menu = document.querySelector('#menu');
const cross = document.querySelector('.cross'); // Элемент для закрытия меню

// Функция для переключения видимости меню
function toggleMenu() {
    menu.classList.toggle('none-d');
}

// Обработчик клика по иконке меню (burger)
burger.addEventListener('click', toggleMenu);

// Обработчик клика по элементу для закрытия (cross)
cross.addEventListener('click', toggleMenu);
