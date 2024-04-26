const smallScreenWidth = 575; // Пороговое значение ширины экрана для малых устройств
const mediumScreenWidth = 991; // Пороговое значение ширины экрана для средних устройств
const screenWidth = window.innerWidth;

// Функция для изменения значения calc_id в зависимости от ширины экрана
function setCalcId() {
    if (screenWidth <= smallScreenWidth) {
        return 'calc-js-small'; // Для малых устройств
    } else if (screenWidth <= mediumScreenWidth) {
        return 'calc-js-medium'; // Для средних устройств
    } else {
        return 'calc-js-large'; // Для больших устройств
    }
}

// Функция для изменения значения calc_text в зависимости от ширины экрана
function setCalcText() {
    if (screenWidth <= smallScreenWidth) {
        return 'Калькулятор'; // Для малых устройств
    } else {
        return 'Нажмите для рассчета'; // Для остальных устройств
    }
}

// Инициализация calc_id и calc_text при загрузке страницы
let calc_id = setCalcId();
let calc_text = setCalcText();

// Обновление calc_id и calc_text при изменении размера окна
window.addEventListener('resize', function() {
    calc_id = setCalcId();
    calc_text = setCalcText();
});

const
    calc_class = 'btn-calc', // invoke btn class string
    calc_style = '', // invoke btn style string
    calc_css = '', // path external css file
    calc_exist_btn = null, // selector exists btn in html
    calc_credential = 'eyJpZCI6IjEzODAiLCJuYW1lIjoicGxpc3Nlci5ydSIsInVyTGljbyI6bnVsbCwiZW1haWwiOiJtYWlsQHBsaXNzZXIucnUiLCJ0ZWwiOiI4IDgwMCAyMjItMzYtNTUiLCJhY3R1YWxub3N0IjoiMSIsImRvc3R1cCI6IjUiLCJtZW51QWNjZXNzIjoiIiwibGFzdERhdGUiOm51bGwsInZpc29yIjpudWxsLCJpZFNrbGFkIjoiMCIsImlkdGlwIjoiNSIsInRpcCI6ItCX0LDQvNC10YDRidC40Lov0JzQvtC90YLQsNC20L3QuNC6IiwiY2FsY3MiOiLQn9C70LjRgdGB0LUs0JLRgdGC0LDQstC90LDRjyzQntCx0YvRh9C90LDRjyzQlNC10YLRgdC60LDRjyzQqNGC0L7RgNGLINC/0LvQuNGB0YHQtSxTbGltLFNsaW1Qcm8sU21hcnQs0JTQvtGB0YLQsNCy0LrQsCzQn9C+0LrRgNCw0YHQutCwIiwiaWRrb250ciI6IjI4NyIsImtvbnRyIjoi0JrQu9C40LXQvdGCIn0=', // credential
    calc_width = '900px', // modal window
    calc_height = '100%', // modal window
    calc_host = 'https://calc.plisser.pro', // app address
    calc_redirect = '/dashboard' // open page
;