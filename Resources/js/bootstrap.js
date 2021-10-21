

window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    global.$ = global.jQuery = window.$ = window.jQuery = require('jquery');
    //window.Popper = require('popper.js').default;
    window.Popper = require('@popperjs/core/dist/umd/popper').default;

    require('bootstrap/dist/js/bootstrap.bundle.js');
    /*
 /js/admin-lte.js │ 2.53 MiB  │
 /js/manifest.js │ 7.59 KiB  │
/js/vendor.js │ 13.2 MiB
    */
    //require('bootstrap');
    /*
     /js/admin-lte.js │ 2.75 MiB  │
│   /js/manifest.js │ 7.59 KiB  │
│    /js/vendor.js │ 13 MiB
*/

    //require('bootstrap-sass');

    require('jquery-slimscroll');

    require('fastclick');

    require('icheck');

    // bootstrap-datepicker
    require('bootstrap-datepicker');

    require('admin-lte');
} catch (e) {
    console.log(e);
}

console.log('start');
jQuery.noConflict();

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
