export default class {

    constructor(selector) {
        this.blocks = document.querySelectorAll(selector);
        if (this.blocks.length > 0) {
            this.blocks.forEach(block => {
                let link = block.querySelector('[data-show-more-link]');
                link.addEventListener('click', (e) => {
                    let content = block.querySelector('[data-show-more-content]');
                    content.classList.toggle('showMore');
                });
            });
        }
    }
}