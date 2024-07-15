export default class FooterList {
    constructor(list) {
        this.list = document.querySelector(list);
        if (this.list) {
            this.list.addEventListener('click', (e) => {
                if (e.target.hasAttribute('data-footer-title') || e.target.closest('[data-footer-title]')) {
                    const title = e.target.closest('[data-footer-title]');
                    const item = title.closest('[data-footer-item]');
                    item.classList.toggle('active');
                }
            });
        }
    }
}