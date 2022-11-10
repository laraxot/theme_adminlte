/**
 * @link https://www.freecodecamp.org/news/migrate-from-vue2-to-vue3-with-example-project/
 */

var path = require("path");

import { createApp } from 'vue';


const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});


//import Audiojs                              from '../../../../Modules/Theme/Resources/js/components/audioplayer/Audiojs.vue';
import Videojs from '../../../../Modules/Theme/Resources/js/components/videoplayer/Videojs.vue';
//import ExampleComponent                     from '../../../../Modules/Theme/Resources/js/components/ExampleComponent';
import Noui from '../../../../Modules/Theme/Resources/js/components/slider/Noui.vue';



//https://medium.com/spartner/reducing-vue-application-file-size-with-laravel-mix-e483f746d836

//app.component('videoplayer-component', ()=> Videojs);
app.component('v-videoplayer', Videojs);
//app.component('v-slider', () => Noui);
app.component('v-slider', Noui);

app.mount('#app');