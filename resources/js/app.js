import {createApp} from 'vue/dist/vue.esm-bundler'

import HomePage from "./HomePage.vue";

createApp({
    components: {
        'home-page': HomePage
    }
}).mount('#app')
