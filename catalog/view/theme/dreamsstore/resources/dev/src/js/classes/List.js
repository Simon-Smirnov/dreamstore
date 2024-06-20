export default class {
    constructor(phone) {
        this.lists = document.querySelectorAll('.dropdown-list');
        if (this.lists.length > 0) {
            this.lists.forEach(list => {
                new List(list);
            });
        }
    }
}

class List {
    constructor(list) {
        this.list = list;

        if (this.list) {
            this.list.addEventListener('click', (e) => {
                if (e.target.classList.contains('dropdown-list-item') || e.target.closest('.dropdown-list-item')) {
                    const item = e.target.closest('.dropdown-list-item');
                    item.classList.toggle('open');
                }
            });
        }
    }
}