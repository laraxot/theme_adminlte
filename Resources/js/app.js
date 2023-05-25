/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// require('./myvue3');

require('./alpine');

//import videojs from 'video.js'
/*
npm
"vue": "^2.6.14",
        "vue-loader": "^15.9.7",
        "vue-template-compiler": "^2.6.14",
*/

require('./btnDeleteX2.js');
require('./flatpickr.js');

//$(document).ready(function() {
$(function() {
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue'
    });

    $('.js-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
    })
});

//require('./splade.js');

