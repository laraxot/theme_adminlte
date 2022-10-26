/**
 * @link https://www.freecodecamp.org/news/migrate-from-vue2-to-vue3-with-example-project/
 */

<<<<<<< HEAD
var path = require("path");

import { createApp } from 'vue';

=======
/*
app.config.isCustomElement = tag => tag.startsWith('input-')
*/


import { createApp } from 'vue'
//import TinymceComponent from './components/TinymceComponent.vue';
//import TinymceComponent from './components/wysiwyg/Tinymce2Component.vue';
//import ExampleComponent from '../../../../Modules/Theme/Resources/js/components/ExampleComponent.vue';
>>>>>>> 31d6e3b (first)

const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});


<<<<<<< HEAD
//import Audiojs                              from '../../../../Modules/Theme/Resources/js/components/audioplayer/Audiojs.vue';
import Videojs from '../../../../Modules/Theme/Resources/js/components/videoplayer/Videojs.vue';
//import ExampleComponent                     from '../../../../Modules/Theme/Resources/js/components/ExampleComponent';
import Noui from '../../../../Modules/Theme/Resources/js/components/slider/Noui.vue';



//https://medium.com/spartner/reducing-vue-application-file-size-with-laravel-mix-e483f746d836

//app.component('videoplayer-component', ()=> Videojs);
app.component('v-videoplayer', Videojs);
//app.component('v-slider', () => Noui);
app.component('v-slider', Noui);
=======
//app.component('tinymce-component',TinymceComponent);
//app.component('example-component', ExampleComponent);
>>>>>>> 31d6e3b (first)

app.mount('#app');