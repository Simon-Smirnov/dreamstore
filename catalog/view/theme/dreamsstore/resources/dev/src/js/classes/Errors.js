import Alert from "./Alert.js";
import Input from "./Input.js";

export default class Errors {
    static show(errors, form) {
        for (let error_key in errors) {
            const error = errors[error_key]
            Alert.add(error, 'error')

            const input = form.querySelector('[name="' + error_key + '"]').closest('.input')
            Input.addError(input)
        }
    }
}