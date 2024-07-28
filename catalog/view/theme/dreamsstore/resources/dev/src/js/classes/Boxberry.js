export default class Boxberry {

    constructor(selector) {
        this.btnChoose = document.querySelector('[data-shipping-type-boxberry]');
        this.btnOpen = document.querySelector(selector);
        this.pickuppoint = document.querySelector('[data-checkout-pickuppoint]');
        this.blockMap = document.querySelector('#cdek_map');

        if (this.btnChoose && this.btnChoose.checked && this.btnOpen && this.pickuppoint) {
            this.selectPointFnc();
        }

        // $(document).on('click', '[data-boxberry-open=true]', function (e) {
        //     e.preventDefault();
        //     let selectPointLink = e.target;
        //     selectPointFnc(selectPointLink);
        // });

        // $(document).ajaxComplete(function () {
        //     let checkedShippingMethod = $("input[name=shipping_method]:checked").val();
        //     if (checkedShippingMethod !== undefined) {
        //         if (checkedShippingMethod.includes('boxberry.pickup')) {
        //             renderBlocks();
        //             setReadonly();
        //         } else {
        //             renderBlocks();
        //         }
        //     }
        // });

        // $(document).on('click', "input[name=shipping_method]", function () {
        //     let checkedShippingMethod = $("input[name=shipping_method]:checked").val();
        //     if (checkedShippingMethod === 'boxberry.pickup') {
        //         selectPointFnc($('#boxberry-issue_point-link')[0])
        //     } else if (checkedShippingMethod === 'boxberry.pickup_prepaid') {
        //         selectPointFnc($('#boxberry-issue_point-link-prepaid')[0])
        //     }
        //     renderBlocks();
        // });
    }

    selectPointFnc() {
        let classname = this.btnOpen.getAttribute('data-type');
        let city = this.btnOpen.getAttribute('data-boxberry-city').replace('ё', 'е');
        let token = this.btnOpen.getAttribute('data-boxberry-token');
        // let targetStart = selectPointLink.getAttribute('data-boxberry-target-start');
        let order_id = this.btnOpen.getAttribute('data-order-id');
        let weight = this.btnOpen.getAttribute('data-boxberry-weight');
        let width = this.btnOpen.getAttribute('data-boxberry-width');
        let height = this.btnOpen.getAttribute('data-boxberry-height');
        let depth = this.btnOpen.getAttribute('data-boxberry-length');
        let paymentSum = this.btnOpen.getAttribute('data-paymentsum');
        let orderSum = this.btnOpen.getAttribute('data-ordersum');
        let sucrh = this.btnOpen.getAttribute('data-sucrh');
        let api = this.btnOpen.getAttribute('data-api-url');
        if (this.btnOpen.getAttribute('data-class') === 'boxberryDeliverySelf') {
            paymentSum = orderSum;
        } else {
            paymentSum = "0";
        }
        let boxberryPointSelectedHandler = (result) => {
            let addressSplit = result.address.split(',');
            // let insertAddress = '# ' + result.id + ' ' + addressSplit[2].trim() + (addressSplit[3] !== undefined ? addressSplit[3] : '');
            let insertAddress = '# ' + result.id + ' ';
            let prepaid = paymentSum === '0' ? '-prepaid' : '';

            fetch(`index.php?route=extension/shipping/boxberry/selectIssuePoint&issue_point_id=${encodeURIComponent(result.id)}&prepaid=${paymentSum !== "0" ? "0" : "1"}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // предположим, что сервер возвращает JSON
                })
                .then(data => {
                    this.pickuppoint.value = addressSplit.slice(2);
                    document.querySelector('[data-checkout-address]').value = insertAddress;
                    let newEvent = new Event('custom_change', {
                        bubbles: true,
                        cancelable: false
                    });
                    this.btnChoose.dispatchEvent(newEvent);
                    this.setReadonly(insertAddress);
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        };

        boxberry.versionAPI(api);
        boxberry.checkLocation(1);
        boxberry.sucrh(sucrh);
        boxberry.openOnPage('cdek_map');
        // console.log(this.blockMap);
        boxberry.hideOverlay();
        boxberry.init();
        boxberry.open(boxberryPointSelectedHandler, token, city, 0, orderSum, weight, paymentSum, height, width, depth);
    }

    setReadonly(address) {
        console.log('seeeeet');
        // if (address !== undefined) {
        //     if ($('.simplecheckout-block-content').length) {
        //         $('#shipping_address_address_1').val(address).attr('readonly', true);
        //     } else if ($('#onepcheckout').length) {
        //         $("#input-payment-address-1").val(address).attr('readonly', true);
        //     } else {
        //         if ($('#input-shipping-address-1').length) {
        //             $('#input-shipping-address-1').val(address);
        //         }
        //         if ($('#input-payment-address-1').length) {
        //             $('#input-payment-address-1').val(address);
        //         }
        //     }
        // } else {
        //     if ($('.simplecheckout-block-content').length) {
        //         $('#shipping_address_address_1').attr('readonly', true);
        //     }
        //     if ($('#onepcheckout').length) {
        //         $("#input-payment-address-1").attr('readonly', true);
        //     }
        // }
    }

    static init() {
        new Boxberry('[data-boxberry-open=true]');
    }
}

Boxberry.init();