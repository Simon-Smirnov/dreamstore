export default class FooterList {
    constructor(selectorBtnOpen, selectorBtnClose, selectorMenu) {
        this.btnOpen = document.querySelector(selectorBtnOpen);
        this.btnClose = document.querySelector(selectorBtnClose);
        this.menu = document.querySelector(selectorMenu);
        this.header = document.querySelector('.header-bottom');
        this.catalogBtnOpen = document.querySelector('[data-menu-modal-catalog-btn-open]');
        this.catalogBtnFooterOpen = document.querySelector('[data-menu-modal-catalog-footer-btn-open]');
        this.catalogBtnClose = document.querySelector('[data-menu-modal-catalog-btn-close]');
        this.catalog = document.querySelector('[data-menu-modal-catalog]');
        if (this.btnOpen && this.menu && this.btnClose) {
            this.height = this.header.offsetHeight;
            this.btnOpen.addEventListener('click', (e) => {
                this.openMenu();
            });
            this.btnClose.addEventListener('click', (e) => {
                this.menu.classList.remove('active');
                this.menu.style.top = '';
                this.btnOpen.style.display = 'block';
                this.btnClose.style.display = 'none';
                document.body.style.overflow = 'auto';
            });
            this.catalogBtnOpen.addEventListener('click', (e) => {
                this.openCatalog();
            });
            this.catalogBtnFooterOpen.addEventListener('click', (e) => {
                this.openMenu();
                this.openCatalog();
            });
            this.catalogBtnClose.addEventListener('click', (e) => {
                this.catalog.classList.remove('active');
            });
            this.menu.addEventListener('click', (e) => {
                const target = e.target;
                if (target.hasAttribute('data-menu-mobil-child-btn') || target.closest('[data-menu-mobil-child-btn]')) {
                    const parent = target.closest('[data-menu-mobil-child]');
                    parent.classList.toggle('active');
                    if (!parent.classList.contains('active')) {
                        this.catalog.querySelectorAll('[data-menu-mobil-child]').forEach(item => {
                            item.classList.remove('hidden');
                        });
                    } else {
                        this.catalog.querySelectorAll('[data-menu-mobil-child]').forEach(item => {
                            if (!item.classList.contains('active')) {
                                item.classList.add('hidden');
                            }
                        });
                    }
                }
                if (target.hasAttribute('data-menu-mobil-grandchildren-btn') || target.closest('[data-menu-mobil-grandchildren-btn]')) {
                    const parent = target.closest('[data-menu-mobil-grandchildren]');
                    parent.classList.toggle('active');
                }
            })
        }
    }

    openMenu() {
        this.menu.classList.add('active');
        this.menu.style.top = (this.height - 1) + 'px';
        this.btnOpen.style.display = 'none';
        this.btnClose.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    openCatalog() {
        this.catalog.classList.add('active');
        this.catalog.querySelectorAll('[data-menu-mobil-child]').forEach(item => {
            item.classList.remove('active');
            item.classList.remove('hidden');
        });
    }
}