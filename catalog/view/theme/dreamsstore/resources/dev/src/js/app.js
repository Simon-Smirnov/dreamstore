import './classes/Modal.js'
import './classes/Select.js'
import './classes/Fancybox.js'
// import './classes/Checkout_old.js'
import './classes/Checkout.js'
import Faq from './classes/Faq.js'
import Reviews from './classes/Reviews.js'
import Replies from './classes/Replies.js'
import './classes/Loadmore.js'
import List from './classes/List.js'
import Stars from './classes/Stars.js'
import './classes/AtelierModel.js'
import Moremodels from './classes/Moremodels.js'
import './classes/Mask.js'
import './classes/Slider.js'
import './classes/Alert.js'
import './classes/Tabs.js'
import './classes/SetSizes.js'
import './classes/CookieAccept.js'
import './classes/ToTop.js'
import Product from './classes/Product.js'
import DropdawnCart from './classes/DropdawnCart.js'
import Checkout from "./classes/Checkout.js";
// import './classes/Hover3D.js'
// import './classes/Inputer.js'

document.addEventListener('DOMContentLoaded', function () {
    new Faq('.faq-block');
    new Stars('.stars_grade');
    new Reviews('.review_form');
    new Replies('.vacancy_form');
    new List('.dropdown-list');
    new Moremodels('.atelier-models');
    new Product('[data-products-to-cart]');
    new DropdawnCart('[data-dropdown-cart]', false);
    new DropdawnCart('[data-checkout-cart]', true);
    new Checkout('[data-checkout]');

    // let input = document.querySelector('#modal__attach_input');
    // const fileList = document.getElementById('fileList');
    // if (input) {
    //     input.addEventListener('change', (e) => {
    //         console.log(e.target);
    //         console.log(input.files);
    //
    //         const files = input.files;
    //
    //         if (files.length === 0) {
    //             fileList.innerHTML = '<p>Нет прикрепленных файлов</p>';
    //         } else {
    //             // Перебираем файлы и добавляем их в список
    //             for (let i = 0; i < files.length; i++) {
    //                 const file = files[i];
    //
    //                 // Проверяем, является ли файл изображением
    //                 if (file.type.startsWith('image/')) {
    //                     const reader = new FileReader();
    //
    //                     reader.onload = function (e) {
    //                         const img = document.createElement('img');
    //                         img.src = e.target.result;
    //                         img.classList.add('thumbnail');
    //                         fileList.appendChild(img);
    //                     };
    //
    //                     reader.readAsDataURL(file);
    //                 } else {
    //                     const p = document.createElement('p');
    //                     p.textContent = file.name;
    //                     fileList.appendChild(p);
    //                 }
    //             }
    //         }
    //     })
    // }

})