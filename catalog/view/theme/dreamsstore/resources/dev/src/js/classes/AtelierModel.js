import Modal from "./Modal.js";
import Slider from "./Slider.js";

export default class AtelierModel {
    constructor(model) {
        this.open_button = model
        this.loadDataHandler = this.loadData.bind(this);
        this.open_button.addEventListener('click', this.loadDataHandler);
        // this.open_button.addEventListener('click', this.loadData.bind(this))

        this.content = document.querySelector('[data-atelier-content]')
    }

    async loadData() {
        const body = new FormData()
        body.append('id', this.open_button.dataset.atelierModel)

        let response = await fetch('/index.php?route=information/atelier/showOneModel', {
            method: 'POST',
            body: body
        })

        response = await response.json()

        if (response.html) {
            this.content.innerHTML = response.html

            Modal.openTarget('atelier_model')

            Slider.init()
        }
    }

    destroy() {
        this.open_button.removeEventListener('click', this.loadDataHandler);
        this.content.innerHTML = ''; // очистка контента, если нужно
        // также можно добавить удаление модальных окон и слайдеров, если это необходимо
    }

    static init() {
        this.instances = [];
        const _models = document.querySelectorAll('[data-atelier-model]')

        // if (_models.length) {
        //     _models.forEach(model => new AtelierModel(model))
        // }

        if (_models.length) {
            _models.forEach(model => this.instances.push(new AtelierModel(model)));
        }
    }

    static destroyAll() {
        if (this.instances && this.instances.length) {
            this.instances.forEach(instance => instance.destroy());
            this.instances = []; // Очистка массива после удаления всех экземпляров
        }
    }
}

document.addEventListener('DOMContentLoaded', function () {
    AtelierModel.init()
})