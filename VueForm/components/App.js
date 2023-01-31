import Form from "./Form.js";
import Output from "./Output.js";
export default {
    components: {
        'Myform': Form,
        'Output': Output
    },
    template:`
        <Myform :form="form">   
        </Myform>
        <Output :form="form">
        </Output>
    `,

    data() {
        return {
            form: {
                type: '',
                model: '',
                price: ''
            }
        }
    },
}