export default {
        template:`
            <button class="bg-green-200 px-4 py-3 disabled:cursor-not-allowed" :disabled="processing"
                style="color:DarkBlue">
                <slot />
            </button>
            `,
        data() {
            return {
                processing: false
            };
        }
}