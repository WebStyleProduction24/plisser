window.onscroll = function() { stickifyHeader(); };

var header = document.getElementById("myHeader");
// Получаем начальное положение заголовка
var sticky = header.offsetTop;

function stickifyHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    
    // Добавляется проверка чтобы избежать многократного добавления отступа
    if (!header.style.paddingTop){
       // Добавляем отступ равный высоте header, чтобы страница не "прыгала"
       document.body.style.paddingTop = header.offsetHeight + 'px';
    }
  } else {
    header.classList.remove("sticky");
    // Убираем отступ при возврате header на исходную позицию
    document.body.style.paddingTop = 0;
  }
}
