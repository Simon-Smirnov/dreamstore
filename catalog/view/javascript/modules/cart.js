export default class {

    selectorModal = 'cart-modal';

    constructor(selector) {
        this.block = document.querySelector(selector);
        this.modal = this.block.querySelector('.' + this.selectorModal);

        this.block.addEventListener('click', (e) => {
            let target = e.target;
            let targetClassList = target.classList;
            if(targetClassList.contains('btnCartOpen') || target.closest('.btnCartOpen')) {
                this.openCart();
            }
            if(targetClassList.contains('cart-modal_btnClose') || target.closest('.cart-modal_btnClose')) {
                this.closeCart();
            }
            if(targetClassList.contains(this.selectorModal)) {
                this.closeCart();
            }
        });
    };

    openCart() {
        this.modal.classList.add('open');
        this.modal.animate(
            [{left: '-340px', backgroundColor: '#00000000'},{left: '0', backgroundColor: '#000000e5'},],
            {duration: 300,iterations: 1,}
        );
    }
    closeCart() {
        let answer = this.modal.animate(
            [{left: '0', backgroundColor: '#000000e5'},{left: '-340px', backgroundColor: '#00000000'},],
            {duration: 300,iterations: 1,}
        );
        answer.addEventListener('finish', () => {
            this.modal.classList.remove('open');
            document.body.style.overflowY = 'auto';
        });
    }
}