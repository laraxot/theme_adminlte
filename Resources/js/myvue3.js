/**
 * @link https://www.freecodecamp.org/news/migrate-from-vue2-to-vue3-with-example-project/
 */

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
var path = require("path");

import { createApp } from 'vue';

<<<<<<< HEAD
=======
=======
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
/*
app.config.isCustomElement = tag => tag.startsWith('input-')
*/


import { createApp } from 'vue'
//import TinymceComponent from './components/TinymceComponent.vue';
//import TinymceComponent from './components/wysiwyg/Tinymce2Component.vue';
//import ExampleComponent from '../../../../Modules/Theme/Resources/js/components/ExampleComponent.vue';
<<<<<<< HEAD
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)

const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});


<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 905478d (rebase)
//import Audiojs                              from '../../../../Modules/Theme/Resources/js/components/audioplayer/Audiojs.vue';
import Videojs from '../../../../Modules/Theme/Resources/js/components/videoplayer/Videojs.vue';
//import ExampleComponent                     from '../../../../Modules/Theme/Resources/js/components/ExampleComponent';
import Noui from '../../../../Modules/Theme/Resources/js/components/slider/Noui.vue';



//https://medium.com/spartner/reducing-vue-application-file-size-with-laravel-mix-e483f746d836

//app.component('videoplayer-component', ()=> Videojs);
app.component('v-videoplayer', Videojs);
//app.component('v-slider', () => Noui);
app.component('v-slider', Noui);
<<<<<<< HEAD
=======
=======
//app.component('tinymce-component',TinymceComponent);
//app.component('example-component', ExampleComponent);
>>>>>>> 31d6e3b (first)
=======
//app.component('tinymce-component',TinymceComponent);
//app.component('example-component', ExampleComponent);
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d (rebase)

app.mount('#app');