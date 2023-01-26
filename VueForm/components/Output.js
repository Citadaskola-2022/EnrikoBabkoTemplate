import Form from "./Form.js";
export default {
    components: { Form },
    template:`
        <div>
        <p>Tips: {{form.type}}</p>
        <p>Modelis: {{form.model}}</p>
        <p>Cena: {{form.price}}</p>
        </div>
    `,
    props: {
        form: Object
    }

}