// Функция для применения CSS стилей к контейнеру с картой после загрузки страницы
function applyMapStyles() {
    var mapContainer = document.getElementById('map-container');
    mapContainer.style.borderRadius = '24px'; // Устанавливаем радиус фрейма
}

// Добавляем обработчик события загрузки страницы
window.onload = function() {
    applyMapStyles(); // Применяем CSS стили после загрузки страницы
};