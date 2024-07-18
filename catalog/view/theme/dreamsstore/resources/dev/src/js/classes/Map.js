export let maps = []

export default class Map {
    constructor(map) {
        this.map = map
        this.wrapper = this.map.closest('.map-wrapper-js')

        window.addEventListener('scroll', () => {
            clearTimeout(this.timer);
            this.timer = setTimeout(() => this.checkMap(), 100)
        });
        this.checkMap();
    }

    checkMap() {
        let top = this.wrapper.getBoundingClientRect().top;
        if (!this.initmap && top < 1000) {
            this.initmap = true;
            this.loaded = this.isMyScriptLoaded('https://api-maps.yandex.ru/2.1/?apikey=8d3f91ef-9421-4a2a-b077-ef7ee901ce89&lang=ru_RU')

            if (!this.loaded) {
                window.script_map = document.createElement("script");
                window.script_map.src = "https://api-maps.yandex.ru/2.1/?apikey=8d3f91ef-9421-4a2a-b077-ef7ee901ce89&lang=ru_RU";
                document.head.append(window.script_map);
            }

            window.script_map.onload = () => {
                ymaps.ready(this.create_map.bind(this));
            }

        }
    }

    create_map() {
        this.point = this.map.dataset.point
        this.coords = this.point.split(',')

        this.map.innerHTML = ''
        const myMap = new ymaps.Map(this.map, {
            center: this.coords,
            zoom: 15
        });
        var myPlacemark = new ymaps.Placemark(this.coords, {}, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: window.assets + '/assets/images/icons/point.svg',
            iconImageSize: [32, 32],
            iconOffset: [-16, -16]
        });
        myMap.geoObjects.add(myPlacemark);
    }

    isMyScriptLoaded(url) {
        var scripts = document.getElementsByTagName('script');
        for (var i = scripts.length; i--;) {
            if (scripts[i].src == url) return true;
        }
        return false;
    }

    static reInit() {
        maps = []

        Map.init()
    }

    static init() {
        const _maps = document.querySelectorAll('.map-js')

        if (_maps.length) {
            _maps.forEach(map => maps.push(new Map(map)))
        }
    }
}

Map.init()