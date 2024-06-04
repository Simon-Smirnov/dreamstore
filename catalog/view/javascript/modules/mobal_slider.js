function updateImageSources() {
    var isMobile = window.innerWidth <= 767; // проверяем, является ли устройство мобильным (ширина экрана меньше или равна 767px)
  
    var slider = document.querySelector('.banner_image-slider'); // получаем элемент слайдера
    var images = slider.querySelectorAll('.swiper-slide img'); // получаем все изображения в слайдере
  
    if (isMobile) { // если устройство мобильное
      for (var i = 0; i < images.length; i++) { // перебираем все изображения в слайдере
        var src = images[i].src; // получаем текущий src изображения
        var newSrc = src.replace(/Frame(\d+)\.png/, 'mobilFrame$1.png'); // заменяем в текущем src "Frame" на "mobilFrame"
        images[i].src = newSrc; // устанавливаем новый src изображения
      }
    } else { // если устройство не мобильное
      for (var i = 0; i < images.length; i++) { // перебираем все изображения в слайдере
        var src = images[i].src; // получаем текущий src изображения
        var newSrc = src.replace(/mobilFrame(\d+)\.png/, 'Frame$1.png'); // заменяем в текущем src "mobilFrame" на "Frame"
        images[i].src = newSrc; // устанавливаем новый src изображения
      }
    }
  }
  
  // вызываем функцию при загрузке страницы, чтобы изображения сразу имели нужные src
  window.addEventListener('DOMContentLoaded', updateImageSources);
  
  // вызываем функцию при изменении размеров окна
  window.addEventListener('resize', updateImageSources);