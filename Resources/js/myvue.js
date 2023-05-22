/*
import Vue from 'vue';

Vue.config.ignoredElements = [
    'video-js',
];



import VideoPlayer from './components/VideoPlayer.vue';
//import TinymceComponent from './components/TinymceComponent.vue';

new Vue({
    el: '#app',
    components: {
        VideoPlayer
        //,TinymceComponent
    }
})
*/
/*
import { createApp } from 'vue'

//import VideoPlayer from './components/VideoPlayer.vue';
import TinymceComponent from './components/TinymceComponent.vue';

const app = createApp({
    el: '#app',
    components: {
        //VideoPlayer
        TinymceComponent
    }

})
*/

/* Vue 3 syntax */
const app = Vue.createApp({
    // options here
    //el: '#app',
})

app.mounth('#app') // Vue Instance - Root component

app.component('video-player','./components/VideoPlayer.vue');




