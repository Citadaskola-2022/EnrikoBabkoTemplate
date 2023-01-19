export default {
    template:`
    <section v-show="inProgressAssignments.length">
        <h2 class="font-bold mb-4">
            Assignments
        </h2>
        <ul>
            <li v-for="assignment in inProgressAssignments" :key="assignment.id">
                <label>
                    {{assignment.name}}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>

    <section v-show="completedAssignments.length" class="mt-8">
        <h2 class="font-bold mb-4">
            Completed
        </h2>
        <ul>
            <li v-for="assignment in completedAssignments" :key="assignment.id">
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
                    {name:'Finish projects', complete: false, id:1},
                    {name:'Read chapter 4', complete: false, id:2},
                    {name:'Finish programming homework', complete: false, id:3},
                ]
            }
        },

        computed: {
            inProgressAssignments() {
                return this.assignments.filter(assignment => ! assignment.complete);
            },
            completedAssignments() {
                return this.assignments.filter(assignment => assignment.complete);
            }
        }

}