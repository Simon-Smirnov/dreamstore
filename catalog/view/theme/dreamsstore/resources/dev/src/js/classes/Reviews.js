export default class {

    images = {};

    constructor(selector) {
        this.form = document.querySelector(selector);
        if (this.form) {
            this.immageBlock = this.form.querySelector('.modal__size-images');
            this.form.addEventListener('submit', (e) => {
                e.preventDefault();
                this.form.querySelectorAll('.error').forEach(error => error.textContent = '');
                const data = new FormData(this.form);
                fetch('index.php?route=information/reviews/add', {
                    method: 'POST',
                    body: data,
                })
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        }
                        throw new Error('Network response was not ok.');
                    })
                    .then(data => {
                        if (data.errors !== undefined) {
                            for (const errorKey in data.errors) {
                                if (this.form.querySelector('.' + errorKey + '-error')) {
                                    this.form.querySelector('.' + errorKey + '-error').textContent = data.errors[errorKey];
                                }
                            }
                        } else if (data.success !== undefined) {
                            this.form.closest('.modal__box').innerHTML = '<div class="modal__success">' + data.success + '</div>';
                        }
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                    });
            });
            this.form.addEventListener('change', (e) => {
                const target = e.target;
                if (target.name && target.name === 'image[]') {
                    const files = target.files;
                    if (files.length > 0) {
                        for (let i = 0; i < files.length; i++) {
                            const fileType = files[i].type;
                            const fileName = files[i].name.toLowerCase();
                            if (fileType.startsWith('image/') && (fileName.endsWith('.jpg') || fileName.endsWith('.jpeg') || fileName.endsWith('.png'))) {
                                this.images[target.dataset.num] = files[i];
                                target.hidden = true;
                                let input = document.createElement('input');
                                input.classList.add('modal__attach_input');
                                input.name = 'image[]';
                                input.type = 'file';
                                input.dataset.num = +target.dataset.num + 1;
                                target.after(input);
                                this.form.append(target);
                            }
                        }
                    }
                    this.renderImages(target);
                }
            });
            this.form.addEventListener('click', (e) => {
                const target = e.target;
                if (target.classList.contains('close_image') || target.closest('.close_image')) {
                    let item = target.closest('.close_image');
                    const num = item.dataset.num;
                    // if (document.querySelector('download-image-' + num)) {
                    //     document.querySelector('download-image-' + num).remove();
                    // }
                    delete this.images[num];
                    // if (this.form.querySelector('[name="image[]"] [data-num="' + num + '"]')) {
                    //     this.form.querySelector('[name="image[]"] [data-num="' + num + '"]').remove();
                    // }
                    this.form.querySelectorAll('[name="image[]"]').forEach(input => {
                        if (input.dataset.num == num) {
                            input.remove();
                        }
                    });
                    //this.renderImages(target);
                    target.closest('.download-image').remove();
                }
            });
        }
    }

    renderImages(target) {
        this.immageBlock.innerHTML = '';

        for (let imageKey in this.images) {
            const reader = new FileReader();
            reader.onload = (e) => {
                const div = document.createElement('div');
                div.classList.add('download-image-' + imageKey);
                div.classList.add('download-image');
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('thumbnail');
                div.appendChild(img);
                const close = document.createElement('div');
                close.classList.add('close_image');
                close.dataset.num = imageKey;
                close.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg"><use xlink:href="/sprite.svg#icon_cross"></use></svg>';
                div.appendChild(close);
                this.immageBlock.appendChild(div);
            }
            reader.readAsDataURL(this.images[imageKey]);
        }
    }
}