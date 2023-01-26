export default {
    template: `
    <section class="bg-green-400 px-5 py-5 ">
        <form>
        <h1 class="text-4xl pb-12">
            Sastāvdaļas
        </h1>
            Veids <br>
            <select v-model="form.type"
                    class="pr-14
                    bg-gray-300
                    border-black border-2">
                <option disabled value=""></option>
                <option>Telefons</option>
                <option>Portatīvais dators</option>
                <option>Stacionārais dators</option>
            </select>

            <p class="pt-6 pb-6">
                Modelis <br>
                <input v-model="form.model"
                       placeholder="Ievadiet modeli"
                       class="bg-gray-300 border-black border-2
                       placeholder:text-gray-500"/>
            </p>

            <p class="pb-14">
                Cena <br>
                <input type="number"
                       v-model="form.price"
                       placeholder="Ievadiet cenu"
                       class="bg-gray-300
                       border-black border-2
                       placeholder:text-gray-500"/>
            </p>
            <button @click="saved()" class="bg-blue-400 px-2 py-2 rounded-lg">
                Saglabāt
            </button>
            </form>
        </section>
    `,
    props: {
        form: {
            type: Object
        },
    }
}