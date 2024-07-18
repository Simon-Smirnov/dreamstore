export default class {
    constructor() {
        this.contactMap = document.querySelector('[data-contact-map]');
        if (this.contactMap) {
            this.create_map();
        }
    }

    create_map() {
        console.log(this.contactMap);
        // сonsole.log(ymaps);

        // this.map.innerHTML = ''
        const myMap = new ymaps.Map(this.contactMap, {
            center: [55.75399399999374, 37.62209300000001],
            zoom: 16
        });
        var myPlacemark = new ymaps.Placemark([55.75399399999374, 37.62209300000001], {}, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: window.assets + 'images/icons/point.svg',
            iconImageSize: [36, 36],
            iconOffset: [-18, -18]
        });
        myMap.geoObjects.add(myPlacemark);
    }
}