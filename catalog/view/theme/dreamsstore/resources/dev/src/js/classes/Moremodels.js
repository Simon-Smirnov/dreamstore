import AtelierModel from "./AtelierModel.js";

export default class {
    constructor(selector) {
        this.block = document.querySelector(selector);

        if (this.block) {
            this.grid = this.block.querySelector('.atelier-models__grid');
            this.page = 2;
            this.block.addEventListener('click', (e) => {
                const target = e.target;
                if (target.dataset.page) {

                    let controllerUrl = 'index.php?route=information/atelier/showmoremodels';

                    let data = "page=" + this.page;

                    fetch(controllerUrl, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: data
                    })
                        .then(response => {
                            if (!response.ok) {
                                console.log('error');
                                throw new Error('Network response was not ok');
                            }
                            return response.text();
                        })
                        .then(data => {
                            this.grid.insertAdjacentHTML('beforeend', data);
                            this.page++;
                            AtelierModel.destroyAll();
                            AtelierModel.init();
                        })
                        .catch(error => {
                            console.error('Fetch error:', error);
                        });
                }
            });
        }
    }
}