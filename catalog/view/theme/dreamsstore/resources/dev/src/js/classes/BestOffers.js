export default class {

    constructor(selector) {

        this.allHrefs = document.querySelectorAll(selector);
        if (this.allHrefs.length > 0) {
            const link = document.querySelector('[data-view-all-link]');
            this.allHrefs.forEach(item => {
                item.addEventListener('click', e => {
                    const target = e.target;
                    if (target.dataset.viewAllHref && target.classList.contains('active')) {
                        const href = target.dataset.viewAllHref;
                        link.href = href;
                    }
                })
            });
        }
    }
}