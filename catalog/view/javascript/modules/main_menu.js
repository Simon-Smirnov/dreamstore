export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);
        this.modal = this.block.querySelector('.header-bottom_block-catalog_modal');
        this.insertBlock = this.block.querySelector('.header-bottom_block-catalog_about-inner');
        // this.forClientsItem = this.block.querySelector('.modal-menu_content-list_item.clients');
        // this.forClientsList = this.block.querySelector('.modal-menu_content-list2');

        this.block.addEventListener('click', (e) => {
            let target = e.target;
            let targetClassList = target.classList;
            if(targetClassList.contains('header-bottom_block-catalog_btn') || target.closest('.header-bottom_block-catalog_btn')) {
                this.insertBlock.innerHTML = '';
                this.openMenu();
            }
            if(targetClassList.contains('menu-item_link') || target.closest('.menu-item_link')) {
                e.preventDefault();
                let nextElement = target.nextElementSibling;
                if(nextElement.classList.contains('dropdown-menu')) {
                    let cloneInfo = nextElement.cloneNode(true);
                    this.insertBlock.innerHTML = '';
                    this.insertBlock.append(cloneInfo);
                }
            }
            if(targetClassList.contains('modal-menu_content-close') || target.closest('.modal-menu_content-close')) {
                this.closeMenu();
            }
            if(targetClassList.contains('for_clients') || target.closest('.for_clients')) {
                this.openClientsList();
            }
        });
    };

    openMenu() {
        this.modal.classList.add('open');
        this.modal.animate(
            // [{right: '-24em'},{right: '0'},{left: '-24em'},{left: '0'}],
            [{top: '-24em'}, {top: '0'}],
            {duration: 300,iterations: 1,}
        );
    }

    closeMenu() {
        let answer = this.modal.animate(
            [{right: '0'},{right: '-24vw'},],
            {duration: 300,iterations: 1,}
        );
        answer.addEventListener('finish', () => {
            this.modal.classList.remove('open');
            document.body.style.overflowY = 'auto';
        });
    }
    openClientsList() {
        this.forClientsList.classList.toggle('open');
        this.forClientsItem.classList.toggle('open');
    }
}