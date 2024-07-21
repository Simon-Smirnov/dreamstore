export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);
        this.modal = this.block.querySelector('.header-bottom_block-catalog_modal');
        this.insertBlock = this.block.querySelector('.header-bottom_block-catalog_about-inner');
        this.headerTop = document.querySelector('.header-top');
        this.headerBottom = document.querySelector('.header-bottom');
        this.innerMenu = this.block.querySelector('.header-bottom_block-catalog_bg');
        // this.forClientsItem = this.block.querySelector('.modal-menu_content-list_item.clients');
        // this.forClientsList = this.block.querySelector('.modal-menu_content-list2');

        document.addEventListener('click', (e) => {
            const target = e.target;
            this.height = (this.headerTop.offsetHeight + this.headerBottom.offsetHeight - 1) + 'px';
            let targetClassList = target.classList;
            if (targetClassList.contains('header-bottom_block-catalog_btn') || target.closest('.header-bottom_block-catalog_btn')) {
                this.insertBlock.innerHTML = '';
                if (this.modal.classList.contains('open')) {
                    this.closeMenu();
                } else {
                    this.openMenu();
                    const items = this.block.querySelectorAll('.menu-item_link');
                    if (items.length > 0) {
                        this.fillContent(e, items[0]);
                        items[0].classList.add('active');
                    }

                }
            } else if (!this.innerMenu.contains(target) && this.modal.classList.contains('open')) {
                this.closeMenu();
            }
            if (targetClassList.contains('menu-item_link') || target.closest('.menu-item_link')) {
                if (target.nextElementSibling.classList.contains('dropdown-menu')) {
                    this.block.querySelectorAll('.menu-item_link').forEach(el => {
                        el.classList.remove('active');
                    });
                    target.classList.add('active');
                    this.fillContent(e);
                }
            }
            if (targetClassList.contains('modal-menu_content-close') || target.closest('.modal-menu_content-close')) {
                this.closeMenu();
            }
            if (targetClassList.contains('for_clients') || target.closest('.for_clients')) {
                this.openClientsList();
            }
        });
    };

    openMenu() {
        this.modal.classList.add('open');
        document.querySelector('.header-bottom_block-catalog_btn').classList.add('open');
        this.modal.style.top = this.height;
        this.modal.animate(
            [{top: '-24em'}, {top: '0'}],
            {duration: 300, iterations: 1,}
        );
        document.body.style.overflowY = 'hidden';
    }

    closeMenu() {
        let answer = this.modal.animate(
            [{top: '0'}, {top: '-48em'},],
            {duration: 300, iterations: 1,}
        );
        answer.addEventListener('finish', () => {
            this.modal.classList.remove('open');
            document.querySelector('.header-bottom_block-catalog_btn').classList.remove('open');
            document.body.style.overflowY = 'auto';
        });
    }

    openClientsList() {
        this.forClientsList.classList.toggle('open');
        this.forClientsItem.classList.toggle('open');
    }

    fillContent(e, element = false) {
        e.preventDefault();
        let nextElement = null;
        if (!element) {
            const target = e.target;
            nextElement = target.nextElementSibling;
        } else {
            nextElement = element.nextElementSibling;
        }
        if (nextElement && nextElement.classList.contains('dropdown-menu')) {
            let cloneInfo = nextElement.cloneNode(true);
            this.insertBlock.innerHTML = '';
            this.insertBlock.append(cloneInfo);
        }
    }
}