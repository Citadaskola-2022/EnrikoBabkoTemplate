export default {
    template:`
        <section v-show="filters.inProgress.length">
        <h2 class="font-bold mb-4">
            {{ title }}
        </h2>
        <ul>
            <li v-for="assignment in filters.inProgress" :key="assignment.id">
                <label>
                    {{assignment.name}}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
        </section>
    `

    props: {
        assignments: Array,
        title: String
    }
}