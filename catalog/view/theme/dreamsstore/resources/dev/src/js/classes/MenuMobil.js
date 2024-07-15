export default class FooterList {
    constructor(selectorBtnOpen, selectorBtnClose, selectorMenu) {
        this.btnOpen = document.querySelector(selectorBtnOpen);
        this.btnClose = document.querySelector(selectorBtnClose);
        this.menu = document.querySelector(selectorMenu);
        this.header = document.querySelector('.header-bottom');
        this.catalogBtnOpen = document.querySelector('[data-menu-modal-catalog-btn-open]');
        this.catalogBtnClose = document.querySelector('[data-menu-modal-catalog-btn-close]');
        this.catalog = document.querySelector('[data-menu-modal-catalog]');
        if (this.btnOpen && this.menu && this.btnClose) {
            const height = this.header.offsetHeight;
            this.btnOpen.addEventListener('click', (e) => {
                this.menu.classList.add('active');
                this.menu.style.top = (height - 1) + 'px';
                this.btnOpen.style.display = 'none';
                this.btnClose.style.display = 'block';
                document.querySelector('.body').style.overflow = 'hidden';
            });
            this.btnClose.addEventListener('click', (e) => {
                this.menu.classList.remove('active');
                this.menu.style.top = '';
                this.btnOpen.style.display = 'block';
                this.btnClose.style.display = 'none';
                document.querySelector('.body').style.overflow = 'auto';
            });
            this.catalogBtnOpen.addEventListener('click', (e) => {
                this.catalog.classList.add('active');
            });
            this.catalogBtnClose.addEventListener('click', (e) => {
                this.catalog.classList.remove('active');
            });
        }
    }
}