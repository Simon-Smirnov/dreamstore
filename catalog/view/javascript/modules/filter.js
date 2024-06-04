export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);
        if(this.block) {
            this.modal = this.block.querySelector('.filter-modal');
            this.block.addEventListener('click', (e) => {
                let target = e.target;
                let targetClassList = target.classList;
                if(targetClassList.contains('filter-btn-modal') || target.closest('.filter-btn-modal')) {
                    this.openFilter();
                }
                if(targetClassList.contains('filter-content-close') || target.closest('.filter-content-close')) {
                    this.closeFilter();
                }
                if(targetClassList.contains(this.selectorModal)) {
                    this.closeFilter();
                }
            });
        }
    };

    openFilter() {
        this.block.classList.add('open');
        this.modal.animate(
            [{left: '-900px', backgroundColor: '#00000000'},{left: '0', backgroundColor: '#000000e5'},],
            {duration: 300,iterations: 1,}
        );
    }
    closeFilter() {
        let answer = this.modal.animate(
            [{left: '0', backgroundColor: '#000000e5'},{left: '-900px', backgroundColor: '#00000000'},],
            {duration: 300,iterations: 1,}
        );
        answer.addEventListener('finish', () => {
            this.block.classList.remove('open');
            document.body.style.overflowY = 'auto';
        });
    }
}