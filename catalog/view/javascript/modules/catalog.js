export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);
        this.modal = this.block.querySelector('.modal-menu');
        this.forClientsItem = this.block.querySelector('.modal-menu_content-list_item.clients');
        this.forClientsList = this.block.querySelector('.modal-menu_content-list2');

        this.block.addEventListener('click', (e) => {
            let target = e.target;
            let targetClassList = target.classList;
            if(targetClassList.contains('btnOpen') || target.closest('.btnOpen')) {
                this.openMenu();
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
            [{right: '-24em'},{right: '0'},],
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