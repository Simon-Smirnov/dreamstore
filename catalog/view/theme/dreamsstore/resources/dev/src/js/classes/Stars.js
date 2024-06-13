export default class {

    constructor(selector) {
        this.blocksStars = document.querySelectorAll(selector);
        if (this.blocksStars.length > 0) {
            this.blocksStars.forEach(block => {
                block.addEventListener('click', (e) => {
                    const target = e.target;
                    if (target.classList.contains('start') || target.closest('.star')) {
                        const star = target.closest('.star');
                        const value = star.querySelector('input').value;
                        const svgs = block.querySelectorAll('.star svg');
                        svgs.forEach(svg => {
                            svg.classList.remove('fill');
                            if (svg.dataset.grade <= value) {
                                svg.classList.add('fill');
                            }
                        });
                    }
                })
            });
        }
    }
}