const burger = document.querySelector('.burger-menu');
const menu = document.querySelector('#menu');
const cross = document.querySelector('.cross'); // Элемент для закрытия меню

// Функция для переключения видимости меню
function toggleMenu() {
    menu.classList.toggle('none-d');
}

// Эта функция проверяет, открыто ли меню.
function isMenuOpen() {
    return !menu.classList.contains('none-d');
}

// Обработчик клика по иконке меню (burger)
burger.addEventListener('click', function(event) {
    toggleMenu();
    event.stopPropagation(); // Останавливаем всплытие, чтобы клик по бургеру не вызвал закрытие меню через обработчик на document
});

// Обработчик клика по элементу для закрытия (cross)
cross.addEventListener('click', function(event) {
    toggleMenu();
    event.stopPropagation(); // Аналогично предотвратим всплытие, чтобы избежать конфликтов
});

// Добавляем обработчик клика по всей странице, чтобы закрыть меню, если оно открыто.
document.addEventListener('click', function() {
    if (isMenuOpen()) {
        toggleMenu();
    }
});

// Однако, обработчик, добавленный к document, закроет меню даже при клике внутри самого меню.
// Чтобы это предотвратить, добавим обработчик клика и для самого меню, который остановит всплытие события.
menu.addEventListener('click', function(event) {
    event.stopPropagation();
});
