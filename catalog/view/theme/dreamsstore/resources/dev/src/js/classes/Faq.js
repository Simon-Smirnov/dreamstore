export default class {

    constructor(selector) {
        this.faq = document.querySelector(selector);
        if (this.faq) {
            this.questionsAsnwersBlock = this.faq.querySelector('.faq-block_list');
            this.allItems = this.faq.querySelectorAll('.faq-block_nav-list_item');
            this.faq.addEventListener('click', (e) => {
                let target = e.target;
                if (this.checkElement(target, 'faq-block_nav-list_item-link')) {
                    this.allItems.forEach(item => {
                        item.classList.remove('active');
                    });
                    let block = target.closest('.faq-block_nav-list_item');
                    block.classList.add('active');
                    let copyContent = block.querySelector('.faq-content').cloneNode(true);
                    copyContent.classList.add('open')
                    this.questionsAsnwersBlock.innerHTML = "";
                    this.questionsAsnwersBlock.append(copyContent);
                }
                if (this.checkElement(target, 'faq-content_list-item')) {
                    let block = target.closest('.faq-content_list-item');
                    block.querySelector('.faq-content_list-item_answer').classList.toggle('open');
                    block.querySelector('.faq-content_list-item_title-svg').classList.toggle('open');
                }
            });
        }
    }

    checkElement(target, selector) {
        if (target.classList.contains(selector) || target.closest('.' + selector)) {
            return true;
        }
        return false;
    }

}