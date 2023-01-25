import AssignmentList from "./AssignmentList.js";
export default {
    components: {AssignmentList},
    template:`
        <assignment-list :assignments="inProgress" title="In Progress"></assignment-list>
<!--    <section v-show="filters.inProgress.length">-->
<!--        <h2 class="font-bold mb-4">-->
<!--            Assignments-->
<!--        </h2>-->
<!--        <ul>-->
<!--            <li v-for="assignment in filters.inProgress" :key="assignment.id">-->
<!--                <label>-->
<!--                    {{assignment.name}}-->

<!--                    <input type="checkbox" v-model="assignment.complete">-->
<!--                </label>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </section>-->

    <section v-show="filters.completed.length" class="mt-8">
        <h2 class="font-bold mb-4">
            Completed
        </h2>
        <ul>
            <li v-for="assignment in filters.completed" :key="assignment.id">
                <label>
                    {{assignment.name}}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>
    `,

    data() {
        return {
            assignments: [
                {name: 'Finish projects', complete: false, id: 1},
                {name: 'Read chapter 4', complete: false, id: 2},
                {name: 'Finish programming homework', complete: false, id: 3},
            ]
        }
    },

    computed: {
        filters() {
            return {
                inProgress: this.assignments.filter(assignment => !assignment.complete),
                completed: this.assignments.filter(assignment => assignment.complete),
            };
        }
    }
}