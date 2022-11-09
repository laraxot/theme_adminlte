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
<<<<<<< HEAD
<<<<<<< HEAD
    window.dragula = require('dragula');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    window.dragula = require('dragula');
=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    window.dragula = require('dragula');
>>>>>>> d79d738c (up)

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

<<<<<<< HEAD
<<<<<<< HEAD
    window.Swal = global.Swal = require('sweetalert2');
=======
<<<<<<< HEAD
<<<<<<< HEAD
    window.Swal = global.Swal = require('sweetalert2');
=======
    window.Swal = Swal = require('sweetalert2');
>>>>>>> 31d6e3b (first)
=======
    window.Swal = Swal = require('sweetalert2');
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    window.Swal = global.Swal = require('sweetalert2');
>>>>>>> d79d738c (up)

    window.noUiSlider = require('nouislider');

    require('select2');

    const flatpickr = window.flatpickr = require("flatpickr");
    //const it  = window.it = require("flatpickr/dist/l10n/it.js").default.it;
    //import 'flatpickr/src/flatpickr.l10n.it.js';
    // get dynamic locale
    //const getLocale = (locale) => {
    //    const l = require(`flatpickr/dist/l10n/${locale}.js`);
    //    return l.default[locale];
    //};
    //require("flatpickr/dist/l10n/it.js").default.it;
    //l.default['it'];
    //const Italian = require("flatpickr/dist/l10n/it.js").default.it;
    //flatpickr.localize(Italian);
    //require("flatpickr/dist/themes/dark.css");

<<<<<<< HEAD
<<<<<<< HEAD
    const Chart = window.Chart = require('chart.js/auto').default;

=======
<<<<<<< HEAD
<<<<<<< HEAD
    const Chart = window.Chart = require('chart.js/auto').default;

=======
>>>>>>> 31d6e3b (first)
=======
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
    const Chart = window.Chart = require('chart.js/auto').default;

>>>>>>> d79d738c (up)
} catch (e) {
    console.log(e);
}

console.log('start');
/*
jQuery.noConflict();

if (typeof $ == 'undefined') {
    var $ = jQuery;
}
*/



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
<<<<<<< HEAD
<<<<<<< HEAD
// });
=======
<<<<<<< HEAD
<<<<<<< HEAD
// });
=======
// });
>>>>>>> 31d6e3b (first)
=======
// });
>>>>>>> 326067f (Revert "Auxiliary commit to revert individual files from c2e7087aeb40af8c995eee2396b2ddb4f7ee121a")
>>>>>>> 905478d7 (rebase)
=======
// });
>>>>>>> d79d738c (up)
