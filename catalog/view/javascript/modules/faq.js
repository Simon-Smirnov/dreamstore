export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);

        if(this.block) {
            this.block.addEventListener('click', (e) => {
                let target = e.target;
                let targetClassList = target.classList;
                if(targetClassList.contains('faq_list-item')) {
                    this.switchItem(target);
                } else if(target.closest('.faq_list-item')) {
                    let rightTarget = target.closest('.faq_list-item');
                    this.switchItem(rightTarget);
                }
            });
        }
    };

    switchItem(target) {
        target.classList.toggle('open');
    }
}