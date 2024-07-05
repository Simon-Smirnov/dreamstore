import CartAsyncMethods from "./CartAsyncMethods.js";
import Alert from "./Alert.js";

export default class {

    constructor(selector) {
        this.block = document.querySelector(selector)
        {
            if (this.block) {
                this.block.addEventListener('click', (e) => {
                    const target = e.target;
                    if (target.dataset.giftCardAdd) {
                        this.giftCardId = target.dataset.giftCardAdd;
                        CartAsyncMethods.add(this.giftCardId, 1).then(r => {
                            if (r.success) {
                                this.updateViewMiniCart();
                                Alert.add(r.success);
                                CartAsyncMethods.getQuantityCart().then(r => {
                                    document.querySelector('#cart-total').textContent = r.quantity;
                                })
                            }
                        })
                    }
                })
            }
        }
    }

    async updateViewMiniCart() {
        fetch('index.php?route=common/cart/info')
            .then(response => response.text())
            .then(data => {
                let parser = new DOMParser();
                let doc = parser.parseFromString(data, 'text/html');
                let items = doc.querySelectorAll('.miniCart-dropDawn__inner');
                let cartUl = document.querySelector('.miniCart-dropDawn');
                cartUl.innerHTML = '';  // Очистим текущие элементы
                items.forEach(item => {
                    cartUl.appendChild(item);
                });
            })
            .catch(error => console.error('Error:', error));
    }
}