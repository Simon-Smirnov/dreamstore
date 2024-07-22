export default class Dadata {

    static token = "db4fa69d3e85daeb6df5afd2719518b88b0c69ba";
    static methodApi = "address"; //default
    static url = "http://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/" + this.methodApi;
    static query = "";

    static options = {
        method: "POST",
        mode: "cors",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "Authorization": "Token " + this.token
        },
        body: JSON.stringify({query: this.query})
    }

    static async getData(datas) {
        return new Promise(async resolve => {

            if (datas.methodApi) {
                this.methodApi = datas.methodApi;
            }

            if (datas.query) {
                this.query = datas.query;
                this.options.body = JSON.stringify({query: this.query})
            }

            this.settings = {
                method: "POST",
                mode: "cors",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Authorization": "Token " + this.token
                },
                body: JSON.stringify({query: this.query})
            }

            let result = await fetch(this.url, this.options)

            let data = await result.json();
            resolve(data);
        })
    }
}

// fetch(url, options)
//     .then(response => response.text())
//     .then(result => console.log(result))
//     .catch(error => console.log("error", error));