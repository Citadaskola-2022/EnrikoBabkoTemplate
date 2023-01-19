export default {
        template:`
            <button 
                :class="{
                    'bg-green-400 px-4 py-3 disabled:cursor-not-allowed': true,
                    'bg-gray-200': type === 'secondary',
                    'is-loading': processing
                }" 
                :disabled="processing"
                style="color:DarkBlue"
                >
                <slot />
            </button>
            `,
        props: {
            type: {
                type: String,
                default: 'primary'
            },
            processing: {
                type: Boolean,
                default: false
            }
        },

}