/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunkAdminLTE"] = self["webpackChunkAdminLTE"] || []).push([["/js/app"],{

/***/ "./Resources/js/app.js":
/*!*****************************!*\
  !*** ./Resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("/* provided dependency */ var $ = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\n/**\n * First we will load all of this project's JavaScript dependencies which\n * includes Vue and other libraries. It is a great starting point when\n * building robust, powerful web applications using Vue and Laravel.\n */\n__webpack_require__(/*! ./bootstrap */ \"./Resources/js/bootstrap.js\");\n\n__webpack_require__(/*! ./myvue3 */ \"./Resources/js/myvue3.js\"); //import videojs from 'video.js'\n\n/*\nnpm\n\"vue\": \"^2.6.14\",\n        \"vue-loader\": \"^15.9.7\",\n        \"vue-template-compiler\": \"^2.6.14\",\n*/\n\n\n__webpack_require__(/*! ./btnDeleteX2.js */ \"./Resources/js/btnDeleteX2.js\");\n\n__webpack_require__(/*! ./flatpickr.js */ \"./Resources/js/flatpickr.js\"); //$(document).ready(function() {\n\n\n$(function () {\n  $('.i-checks').iCheck({\n    checkboxClass: 'icheckbox_square-blue',\n    radioClass: 'iradio_square-blue'\n  });\n  $('.js-datepicker').datepicker({\n    autoclose: true,\n    todayHighlight: true\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9SZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibWFwcGluZ3MiOiI7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUFBLG1CQUFPLENBQUMsZ0RBQUQsQ0FBUDs7QUFFQUEsbUJBQU8sQ0FBQywwQ0FBRCxDQUFQLEVBRUE7O0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7QUFFQUEsbUJBQU8sQ0FBQyx1REFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLG1EQUFELENBQVAsRUFFQTs7O0FBQ0FDLENBQUMsQ0FBQyxZQUFXO0VBQ1RBLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUMsTUFBZixDQUFzQjtJQUNsQkMsYUFBYSxFQUFFLHVCQURHO0lBRWxCQyxVQUFVLEVBQUU7RUFGTSxDQUF0QjtFQUtBSCxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkksVUFBcEIsQ0FBK0I7SUFDM0JDLFNBQVMsRUFBRSxJQURnQjtJQUUzQkMsY0FBYyxFQUFFO0VBRlcsQ0FBL0I7QUFJSCxDQVZBLENBQUQiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9BZG1pbkxURS8uL1Jlc291cmNlcy9qcy9hcHAuanM/ZWQ4ZSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIEZpcnN0IHdlIHdpbGwgbG9hZCBhbGwgb2YgdGhpcyBwcm9qZWN0J3MgSmF2YVNjcmlwdCBkZXBlbmRlbmNpZXMgd2hpY2hcbiAqIGluY2x1ZGVzIFZ1ZSBhbmQgb3RoZXIgbGlicmFyaWVzLiBJdCBpcyBhIGdyZWF0IHN0YXJ0aW5nIHBvaW50IHdoZW5cbiAqIGJ1aWxkaW5nIHJvYnVzdCwgcG93ZXJmdWwgd2ViIGFwcGxpY2F0aW9ucyB1c2luZyBWdWUgYW5kIExhcmF2ZWwuXG4gKi9cblxucmVxdWlyZSgnLi9ib290c3RyYXAnKTtcblxucmVxdWlyZSgnLi9teXZ1ZTMnKTtcblxuLy9pbXBvcnQgdmlkZW9qcyBmcm9tICd2aWRlby5qcydcbi8qXG5ucG1cblwidnVlXCI6IFwiXjIuNi4xNFwiLFxuICAgICAgICBcInZ1ZS1sb2FkZXJcIjogXCJeMTUuOS43XCIsXG4gICAgICAgIFwidnVlLXRlbXBsYXRlLWNvbXBpbGVyXCI6IFwiXjIuNi4xNFwiLFxuKi9cblxucmVxdWlyZSgnLi9idG5EZWxldGVYMi5qcycpO1xucmVxdWlyZSgnLi9mbGF0cGlja3IuanMnKTtcblxuLy8kKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcbiQoZnVuY3Rpb24oKSB7XG4gICAgJCgnLmktY2hlY2tzJykuaUNoZWNrKHtcbiAgICAgICAgY2hlY2tib3hDbGFzczogJ2ljaGVja2JveF9zcXVhcmUtYmx1ZScsXG4gICAgICAgIHJhZGlvQ2xhc3M6ICdpcmFkaW9fc3F1YXJlLWJsdWUnXG4gICAgfSk7XG5cbiAgICAkKCcuanMtZGF0ZXBpY2tlcicpLmRhdGVwaWNrZXIoe1xuICAgICAgICBhdXRvY2xvc2U6IHRydWUsXG4gICAgICAgIHRvZGF5SGlnaGxpZ2h0OiB0cnVlXG4gICAgfSlcbn0pO1xuIl0sIm5hbWVzIjpbInJlcXVpcmUiLCIkIiwiaUNoZWNrIiwiY2hlY2tib3hDbGFzcyIsInJhZGlvQ2xhc3MiLCJkYXRlcGlja2VyIiwiYXV0b2Nsb3NlIiwidG9kYXlIaWdobGlnaHQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Resources/js/app.js\n");

/***/ }),

/***/ "./Resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./Resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("/* provided dependency */ var __webpack_provided_window_dot_$ = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\n/* provided dependency */ var __webpack_provided_window_dot_jQuery = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\nwindow._ = __webpack_require__(/*! lodash */ \"./node_modules/lodash/lodash.js\");\n/**\n * We'll load jQuery and the Bootstrap jQuery plugin which provides support\n * for JavaScript based Bootstrap features such as modals and tabs. This\n * code may be modified to fit the specific needs of your application.\n */\n\ntry {\n  __webpack_require__.g.$ = __webpack_require__.g.jQuery = __webpack_provided_window_dot_$ = __webpack_provided_window_dot_jQuery = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\"); //window.Popper = require('popper.js').default;\n\n  window.Popper = (__webpack_require__(/*! @popperjs/core/dist/umd/popper */ \"./node_modules/@popperjs/core/dist/umd/popper.js\")[\"default\"]);\n\n  __webpack_require__(/*! bootstrap/dist/js/bootstrap.bundle.js */ \"./node_modules/bootstrap/dist/js/bootstrap.bundle.js\");\n  /*\n  /js/admin-lte.js │ 2.53 MiB  │\n  /js/manifest.js │ 7.59 KiB  │\n  /js/vendor.js │ 13.2 MiB\n  */\n  //require('bootstrap');\n\n  /*\n   /js/admin-lte.js │ 2.75 MiB  │\n  │   /js/manifest.js │ 7.59 KiB  │\n  │    /js/vendor.js │ 13 MiB\n  */\n  //require('bootstrap-sass');\n\n\n  __webpack_require__(/*! jquery-slimscroll */ \"./node_modules/jquery-slimscroll/jquery.slimscroll.js\");\n\n  __webpack_require__(/*! fastclick */ \"./node_modules/fastclick/lib/fastclick.js\");\n\n  __webpack_require__(/*! icheck */ \"./node_modules/icheck/icheck.js\"); // bootstrap-datepicker\n\n\n  __webpack_require__(/*! bootstrap-datepicker */ \"./node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js\");\n\n  __webpack_require__(/*! admin-lte */ \"./node_modules/admin-lte/dist/js/adminlte.min.js\");\n\n  window.Swal = __webpack_require__.g.Swal = __webpack_require__(/*! sweetalert2 */ \"./node_modules/sweetalert2/dist/sweetalert2.all.js\");\n  window.noUiSlider = __webpack_require__(/*! nouislider */ \"./node_modules/nouislider/dist/nouislider.js\");\n\n  __webpack_require__(/*! select2 */ \"./node_modules/select2/dist/js/select2.js\");\n\n  var flatpickr = window.flatpickr = __webpack_require__(/*! flatpickr */ \"./node_modules/flatpickr/dist/esm/index.js\"); //const it  = window.it = require(\"flatpickr/dist/l10n/it.js\").default.it;\n  //import 'flatpickr/src/flatpickr.l10n.it.js';\n  // get dynamic locale\n  //const getLocale = (locale) => {\n  //    const l = require(`flatpickr/dist/l10n/${locale}.js`);\n  //    return l.default[locale];\n  //};\n  //require(\"flatpickr/dist/l10n/it.js\").default.it;\n  //l.default['it'];\n  //const Italian = require(\"flatpickr/dist/l10n/it.js\").default.it;\n  //flatpickr.localize(Italian);\n  //require(\"flatpickr/dist/themes/dark.css\");\n\n} catch (e) {\n  console.log(e);\n}\n\nconsole.log('start');\n/*\njQuery.noConflict();\n\nif (typeof $ == 'undefined') {\n    var $ = jQuery;\n}\n*/\n\n/**\n * We'll load the axios HTTP library which allows us to easily issue requests\n * to our Laravel back-end. This library automatically handles sending the\n * CSRF token as a header based on the value of the \"XSRF\" token cookie.\n */\n\nwindow.axios = __webpack_require__(/*! axios */ \"./node_modules/axios/index.js\");\nwindow.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';\n/**\n * Next we will register the CSRF Token as a common header with Axios so that\n * all outgoing HTTP requests automatically have it attached. This is just\n * a simple convenience so we don't have to attach every token manually.\n */\n\nvar token = document.head.querySelector('meta[name=\"csrf-token\"]');\n\nif (token) {\n  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;\n} else {\n  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');\n}\n/**\n * Echo exposes an expressive API for subscribing to channels and listening\n * for events that are broadcast by Laravel. Echo and event broadcasting\n * allows your team to easily build robust real-time web applications.\n */\n// import Echo from 'laravel-echo'\n// window.Pusher = require('pusher-js');\n// window.Echo = new Echo({\n//     broadcaster: 'pusher',\n//     key: 'your-pusher-key'\n// });//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9SZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzLmpzIiwibWFwcGluZ3MiOiI7O0FBQUFBLE1BQU0sQ0FBQ0MsQ0FBUCxHQUFXQyxtQkFBTyxDQUFDLCtDQUFELENBQWxCO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQSxJQUFJO0VBQ0FDLHFCQUFNLENBQUNDLENBQVAsR0FBV0QscUJBQU0sQ0FBQ0UsTUFBUCxHQUFnQkwsK0JBQUEsR0FBV0Esb0NBQUEsR0FBZ0JFLG1CQUFPLENBQUMsb0RBQUQsQ0FBN0QsQ0FEQSxDQUVBOztFQUNBRixNQUFNLENBQUNNLE1BQVAsR0FBZ0JKLDBIQUFoQjs7RUFFQUEsbUJBQU8sQ0FBQyxtR0FBRCxDQUFQO0VBQ0E7QUFDSjtBQUNBO0FBQ0E7QUFDQTtFQUNJOztFQUNBO0FBQ0o7QUFDQTtBQUNBO0FBQ0E7RUFFSTs7O0VBRUFBLG1CQUFPLENBQUMsZ0ZBQUQsQ0FBUDs7RUFFQUEsbUJBQU8sQ0FBQyw0REFBRCxDQUFQOztFQUVBQSxtQkFBTyxDQUFDLCtDQUFELENBQVAsQ0F4QkEsQ0EwQkE7OztFQUNBQSxtQkFBTyxDQUFDLGlHQUFELENBQVA7O0VBRUFBLG1CQUFPLENBQUMsbUVBQUQsQ0FBUDs7RUFFQUYsTUFBTSxDQUFDTyxJQUFQLEdBQWNKLHFCQUFNLENBQUNJLElBQVAsR0FBY0wsbUJBQU8sQ0FBQyx1RUFBRCxDQUFuQztFQUVBRixNQUFNLENBQUNRLFVBQVAsR0FBb0JOLG1CQUFPLENBQUMsZ0VBQUQsQ0FBM0I7O0VBRUFBLG1CQUFPLENBQUMsMERBQUQsQ0FBUDs7RUFFQSxJQUFNTyxTQUFTLEdBQUdULE1BQU0sQ0FBQ1MsU0FBUCxHQUFtQlAsbUJBQU8sQ0FBQyw2REFBRCxDQUE1QyxDQXJDQSxDQXNDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7RUFDQTtFQUNBO0VBQ0E7O0FBRUgsQ0FuREQsQ0FtREUsT0FBT1EsQ0FBUCxFQUFVO0VBQ1JDLE9BQU8sQ0FBQ0MsR0FBUixDQUFZRixDQUFaO0FBQ0g7O0FBRURDLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLE9BQVo7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFJQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBWixNQUFNLENBQUNhLEtBQVAsR0FBZVgsbUJBQU8sQ0FBQyw0Q0FBRCxDQUF0QjtBQUVBRixNQUFNLENBQUNhLEtBQVAsQ0FBYUMsUUFBYixDQUFzQkMsT0FBdEIsQ0FBOEJDLE1BQTlCLENBQXFDLGtCQUFyQyxJQUEyRCxnQkFBM0Q7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBLElBQUlDLEtBQUssR0FBR0MsUUFBUSxDQUFDQyxJQUFULENBQWNDLGFBQWQsQ0FBNEIseUJBQTVCLENBQVo7O0FBRUEsSUFBSUgsS0FBSixFQUFXO0VBQ1BqQixNQUFNLENBQUNhLEtBQVAsQ0FBYUMsUUFBYixDQUFzQkMsT0FBdEIsQ0FBOEJDLE1BQTlCLENBQXFDLGNBQXJDLElBQXVEQyxLQUFLLENBQUNJLE9BQTdEO0FBQ0gsQ0FGRCxNQUVPO0VBQ0hWLE9BQU8sQ0FBQ1csS0FBUixDQUFjLHVFQUFkO0FBQ0g7QUFFRDtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFFQTtBQUVBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vQWRtaW5MVEUvLi9SZXNvdXJjZXMvanMvYm9vdHN0cmFwLmpzPzMyMTYiXSwic291cmNlc0NvbnRlbnQiOlsid2luZG93Ll8gPSByZXF1aXJlKCdsb2Rhc2gnKTtcblxuLyoqXG4gKiBXZSdsbCBsb2FkIGpRdWVyeSBhbmQgdGhlIEJvb3RzdHJhcCBqUXVlcnkgcGx1Z2luIHdoaWNoIHByb3ZpZGVzIHN1cHBvcnRcbiAqIGZvciBKYXZhU2NyaXB0IGJhc2VkIEJvb3RzdHJhcCBmZWF0dXJlcyBzdWNoIGFzIG1vZGFscyBhbmQgdGFicy4gVGhpc1xuICogY29kZSBtYXkgYmUgbW9kaWZpZWQgdG8gZml0IHRoZSBzcGVjaWZpYyBuZWVkcyBvZiB5b3VyIGFwcGxpY2F0aW9uLlxuICovXG5cbnRyeSB7XG4gICAgZ2xvYmFsLiQgPSBnbG9iYWwualF1ZXJ5ID0gd2luZG93LiQgPSB3aW5kb3cualF1ZXJ5ID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XG4gICAgLy93aW5kb3cuUG9wcGVyID0gcmVxdWlyZSgncG9wcGVyLmpzJykuZGVmYXVsdDtcbiAgICB3aW5kb3cuUG9wcGVyID0gcmVxdWlyZSgnQHBvcHBlcmpzL2NvcmUvZGlzdC91bWQvcG9wcGVyJykuZGVmYXVsdDtcblxuICAgIHJlcXVpcmUoJ2Jvb3RzdHJhcC9kaXN0L2pzL2Jvb3RzdHJhcC5idW5kbGUuanMnKTtcbiAgICAvKlxuIC9qcy9hZG1pbi1sdGUuanMg4pSCIDIuNTMgTWlCICDilIJcbiAvanMvbWFuaWZlc3QuanMg4pSCIDcuNTkgS2lCICDilIJcbi9qcy92ZW5kb3IuanMg4pSCIDEzLjIgTWlCXG4gICAgKi9cbiAgICAvL3JlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xuICAgIC8qXG4gICAgIC9qcy9hZG1pbi1sdGUuanMg4pSCIDIuNzUgTWlCICDilIJcbuKUgiAgIC9qcy9tYW5pZmVzdC5qcyDilIIgNy41OSBLaUIgIOKUglxu4pSCICAgIC9qcy92ZW5kb3IuanMg4pSCIDEzIE1pQlxuKi9cblxuICAgIC8vcmVxdWlyZSgnYm9vdHN0cmFwLXNhc3MnKTtcblxuICAgIHJlcXVpcmUoJ2pxdWVyeS1zbGltc2Nyb2xsJyk7XG5cbiAgICByZXF1aXJlKCdmYXN0Y2xpY2snKTtcblxuICAgIHJlcXVpcmUoJ2ljaGVjaycpO1xuXG4gICAgLy8gYm9vdHN0cmFwLWRhdGVwaWNrZXJcbiAgICByZXF1aXJlKCdib290c3RyYXAtZGF0ZXBpY2tlcicpO1xuXG4gICAgcmVxdWlyZSgnYWRtaW4tbHRlJyk7XG5cbiAgICB3aW5kb3cuU3dhbCA9IGdsb2JhbC5Td2FsID0gcmVxdWlyZSgnc3dlZXRhbGVydDInKTtcblxuICAgIHdpbmRvdy5ub1VpU2xpZGVyID0gcmVxdWlyZSgnbm91aXNsaWRlcicpO1xuXG4gICAgcmVxdWlyZSgnc2VsZWN0MicpO1xuXG4gICAgY29uc3QgZmxhdHBpY2tyID0gd2luZG93LmZsYXRwaWNrciA9IHJlcXVpcmUoXCJmbGF0cGlja3JcIik7XG4gICAgLy9jb25zdCBpdCAgPSB3aW5kb3cuaXQgPSByZXF1aXJlKFwiZmxhdHBpY2tyL2Rpc3QvbDEwbi9pdC5qc1wiKS5kZWZhdWx0Lml0O1xuICAgIC8vaW1wb3J0ICdmbGF0cGlja3Ivc3JjL2ZsYXRwaWNrci5sMTBuLml0LmpzJztcbiAgICAvLyBnZXQgZHluYW1pYyBsb2NhbGVcbiAgICAvL2NvbnN0IGdldExvY2FsZSA9IChsb2NhbGUpID0+IHtcbiAgICAvLyAgICBjb25zdCBsID0gcmVxdWlyZShgZmxhdHBpY2tyL2Rpc3QvbDEwbi8ke2xvY2FsZX0uanNgKTtcbiAgICAvLyAgICByZXR1cm4gbC5kZWZhdWx0W2xvY2FsZV07XG4gICAgLy99O1xuICAgIC8vcmVxdWlyZShcImZsYXRwaWNrci9kaXN0L2wxMG4vaXQuanNcIikuZGVmYXVsdC5pdDtcbiAgICAvL2wuZGVmYXVsdFsnaXQnXTtcbiAgICAvL2NvbnN0IEl0YWxpYW4gPSByZXF1aXJlKFwiZmxhdHBpY2tyL2Rpc3QvbDEwbi9pdC5qc1wiKS5kZWZhdWx0Lml0O1xuICAgIC8vZmxhdHBpY2tyLmxvY2FsaXplKEl0YWxpYW4pO1xuICAgIC8vcmVxdWlyZShcImZsYXRwaWNrci9kaXN0L3RoZW1lcy9kYXJrLmNzc1wiKTtcblxufSBjYXRjaCAoZSkge1xuICAgIGNvbnNvbGUubG9nKGUpO1xufVxuXG5jb25zb2xlLmxvZygnc3RhcnQnKTtcbi8qXG5qUXVlcnkubm9Db25mbGljdCgpO1xuXG5pZiAodHlwZW9mICQgPT0gJ3VuZGVmaW5lZCcpIHtcbiAgICB2YXIgJCA9IGpRdWVyeTtcbn1cbiovXG5cblxuXG4vKipcbiAqIFdlJ2xsIGxvYWQgdGhlIGF4aW9zIEhUVFAgbGlicmFyeSB3aGljaCBhbGxvd3MgdXMgdG8gZWFzaWx5IGlzc3VlIHJlcXVlc3RzXG4gKiB0byBvdXIgTGFyYXZlbCBiYWNrLWVuZC4gVGhpcyBsaWJyYXJ5IGF1dG9tYXRpY2FsbHkgaGFuZGxlcyBzZW5kaW5nIHRoZVxuICogQ1NSRiB0b2tlbiBhcyBhIGhlYWRlciBiYXNlZCBvbiB0aGUgdmFsdWUgb2YgdGhlIFwiWFNSRlwiIHRva2VuIGNvb2tpZS5cbiAqL1xuXG53aW5kb3cuYXhpb3MgPSByZXF1aXJlKCdheGlvcycpO1xuXG53aW5kb3cuYXhpb3MuZGVmYXVsdHMuaGVhZGVycy5jb21tb25bJ1gtUmVxdWVzdGVkLVdpdGgnXSA9ICdYTUxIdHRwUmVxdWVzdCc7XG5cbi8qKlxuICogTmV4dCB3ZSB3aWxsIHJlZ2lzdGVyIHRoZSBDU1JGIFRva2VuIGFzIGEgY29tbW9uIGhlYWRlciB3aXRoIEF4aW9zIHNvIHRoYXRcbiAqIGFsbCBvdXRnb2luZyBIVFRQIHJlcXVlc3RzIGF1dG9tYXRpY2FsbHkgaGF2ZSBpdCBhdHRhY2hlZC4gVGhpcyBpcyBqdXN0XG4gKiBhIHNpbXBsZSBjb252ZW5pZW5jZSBzbyB3ZSBkb24ndCBoYXZlIHRvIGF0dGFjaCBldmVyeSB0b2tlbiBtYW51YWxseS5cbiAqL1xuXG5sZXQgdG9rZW4gPSBkb2N1bWVudC5oZWFkLnF1ZXJ5U2VsZWN0b3IoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKTtcblxuaWYgKHRva2VuKSB7XG4gICAgd2luZG93LmF4aW9zLmRlZmF1bHRzLmhlYWRlcnMuY29tbW9uWydYLUNTUkYtVE9LRU4nXSA9IHRva2VuLmNvbnRlbnQ7XG59IGVsc2Uge1xuICAgIGNvbnNvbGUuZXJyb3IoJ0NTUkYgdG9rZW4gbm90IGZvdW5kOiBodHRwczovL2xhcmF2ZWwuY29tL2RvY3MvY3NyZiNjc3JmLXgtY3NyZi10b2tlbicpO1xufVxuXG4vKipcbiAqIEVjaG8gZXhwb3NlcyBhbiBleHByZXNzaXZlIEFQSSBmb3Igc3Vic2NyaWJpbmcgdG8gY2hhbm5lbHMgYW5kIGxpc3RlbmluZ1xuICogZm9yIGV2ZW50cyB0aGF0IGFyZSBicm9hZGNhc3QgYnkgTGFyYXZlbC4gRWNobyBhbmQgZXZlbnQgYnJvYWRjYXN0aW5nXG4gKiBhbGxvd3MgeW91ciB0ZWFtIHRvIGVhc2lseSBidWlsZCByb2J1c3QgcmVhbC10aW1lIHdlYiBhcHBsaWNhdGlvbnMuXG4gKi9cblxuLy8gaW1wb3J0IEVjaG8gZnJvbSAnbGFyYXZlbC1lY2hvJ1xuXG4vLyB3aW5kb3cuUHVzaGVyID0gcmVxdWlyZSgncHVzaGVyLWpzJyk7XG5cbi8vIHdpbmRvdy5FY2hvID0gbmV3IEVjaG8oe1xuLy8gICAgIGJyb2FkY2FzdGVyOiAncHVzaGVyJyxcbi8vICAgICBrZXk6ICd5b3VyLXB1c2hlci1rZXknXG4vLyB9KTsiXSwibmFtZXMiOlsid2luZG93IiwiXyIsInJlcXVpcmUiLCJnbG9iYWwiLCIkIiwialF1ZXJ5IiwiUG9wcGVyIiwiU3dhbCIsIm5vVWlTbGlkZXIiLCJmbGF0cGlja3IiLCJlIiwiY29uc29sZSIsImxvZyIsImF4aW9zIiwiZGVmYXVsdHMiLCJoZWFkZXJzIiwiY29tbW9uIiwidG9rZW4iLCJkb2N1bWVudCIsImhlYWQiLCJxdWVyeVNlbGVjdG9yIiwiY29udGVudCIsImVycm9yIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./Resources/js/bootstrap.js\n");

/***/ }),

/***/ "./Resources/js/btnDeleteX2.js":
/*!*************************************!*\
  !*** ./Resources/js/btnDeleteX2.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("/* provided dependency */ var $ = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\n//https://gist.github.com/crystrk/32f1fb5d32102537e534b75d443ae297\nvar deleter = {\n  //linkSelector          : \"a[data-delete]\",\n  linkSelector: \"a.btn-confirm-delete\",\n  modalTitle: \"Are you sure?\",\n  modalMessage: \"You will not be able to recover this entry?\",\n  modalConfirmButtonText: \"Yes, delete it!\",\n  laravelToken: null,\n  url: \"/\",\n  init: function init() {\n    $(this.linkSelector).on('click', {\n      self: this\n    }, this.handleClick);\n  },\n  handleClick: function handleClick(event) {\n    event.preventDefault();\n    var self = event.data.self;\n    var link = $(this);\n    self.modalTitle = link.data('title') || self.modalTitle;\n    self.modalMessage = link.data('message') || self.modalMessage;\n    self.modalMessage = self.modalMessage + '[' + link.data('id') + ']';\n    self.modalConfirmButtonText = link.data('button-text') || self.modalConfirmButtonText; //self.url                    = link.attr('href');\n\n    self.url = link.data('href');\n    self.laravelToken = $(\"meta[name=csrf-token]\").attr('content');\n    self.confirmDelete();\n  },\n  confirmDelete: function confirmDelete() {\n    Swal.fire({\n      title: this.modalTitle,\n      text: this.modalMessage,\n      type: \"warning\",\n      showCancelButton: true,\n      confirmButtonColor: \"#DD6B55\",\n      confirmButtonText: this.modalConfirmButtonText //,\n      //closeOnConfirm    : true\n\n    }).then(function (isConfirm) {\n      if (isConfirm.value) {\n        //alert('SI');\n        this.makeDeleteRequest();\n      } else {//alert('NO');\n      }\n    }.bind(this));\n  },\n  makeDeleteRequest: function makeDeleteRequest() {\n    $.ajax({\n      url: this.url,\n      type: \"DELETE\",\n      data: {\n        _method: 'delete',\n        _token: this.laravelToken\n      },\n      success: function success(data) {\n        console.log(data); //$(\"#task\" + task_id).remove();\n        //alert(data);\n\n        Swal.fire(\"Deleted!\", \"Your imaginary file has been deleted.\", \"success\");\n        location.reload();\n      },\n      error: function error(XMLHttpRequest, textStatus, errorThrown) {\n        console.log('url : ' + this.url);\n        console.log('XMLHttpRequest');\n        console.log(XMLHttpRequest); //alert(XMLHttpRequest.responseText);\n\n        $('#div_debug').html(XMLHttpRequest.responseText);\n        console.log('textStatus');\n        console.log(textStatus);\n        console.log('errorThrown');\n        console.log(errorThrown);\n        alert(\"Status: \" + textStatus);\n        alert(\"Error: \" + errorThrown);\n      } //end error\n\n    });\n  },\n  makeDeleteRequest1: function makeDeleteRequest1() {\n    var form = $('<form>', {\n      'method': 'POST',\n      'action': this.url\n    });\n    var token = $('<input>', {\n      'type': 'hidden',\n      'name': '_token',\n      'value': this.laravelToken\n    });\n    var hiddenInput = $('<input>', {\n      'name': '_method',\n      'type': 'hidden',\n      'value': 'DELETE'\n    });\n    return form.append(token, hiddenInput).appendTo('body').submit();\n  }\n};\ndeleter.init();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,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REMsTUFBakQsRUFBUDtFQUNBO0FBbkdZLENBQWQ7QUFzR0FwRCxPQUFPLENBQUNPLElBQVIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9BZG1pbkxURS8uL1Jlc291cmNlcy9qcy9idG5EZWxldGVYMi5qcz9lNGQwIl0sInNvdXJjZXNDb250ZW50IjpbIi8vaHR0cHM6Ly9naXN0LmdpdGh1Yi5jb20vY3J5c3Ryay8zMmYxZmI1ZDMyMTAyNTM3ZTUzNGI3NWQ0NDNhZTI5N1xudmFyIGRlbGV0ZXIgPSB7XG5cblx0Ly9saW5rU2VsZWN0b3IgICAgICAgICAgOiBcImFbZGF0YS1kZWxldGVdXCIsXG5cdGxpbmtTZWxlY3RvciAgICAgICAgICA6IFwiYS5idG4tY29uZmlybS1kZWxldGVcIixcblx0bW9kYWxUaXRsZSAgICAgICAgICAgIDogXCJBcmUgeW91IHN1cmU/XCIsXG5cdG1vZGFsTWVzc2FnZSAgICAgICAgICA6IFwiWW91IHdpbGwgbm90IGJlIGFibGUgdG8gcmVjb3ZlciB0aGlzIGVudHJ5P1wiLFxuXHRtb2RhbENvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgZGVsZXRlIGl0IVwiLFxuXHRsYXJhdmVsVG9rZW4gICAgICAgICAgOiBudWxsLFxuXHR1cmwgICAgICAgICAgICAgICAgICAgOiBcIi9cIixcblxuXHRpbml0OiBmdW5jdGlvbigpIHtcblx0XHQkKHRoaXMubGlua1NlbGVjdG9yKS5vbignY2xpY2snLCB7c2VsZjp0aGlzfSwgdGhpcy5oYW5kbGVDbGljayk7XG5cdH0sXG5cblx0aGFuZGxlQ2xpY2s6IGZ1bmN0aW9uKGV2ZW50KSB7XG5cdFx0ZXZlbnQucHJldmVudERlZmF1bHQoKTtcblxuXHRcdHZhciBzZWxmID0gZXZlbnQuZGF0YS5zZWxmO1xuXHRcdHZhciBsaW5rID0gJCh0aGlzKTtcblxuXHRcdHNlbGYubW9kYWxUaXRsZSAgICAgICAgICAgICA9IGxpbmsuZGF0YSgndGl0bGUnKSB8fCBzZWxmLm1vZGFsVGl0bGU7XG5cdFx0c2VsZi5tb2RhbE1lc3NhZ2UgICAgICAgICAgID0gbGluay5kYXRhKCdtZXNzYWdlJykgfHwgc2VsZi5tb2RhbE1lc3NhZ2U7XG5cdFx0c2VsZi5tb2RhbE1lc3NhZ2UgICAgICAgICAgID0gc2VsZi5tb2RhbE1lc3NhZ2UgKyAnWycrbGluay5kYXRhKCdpZCcpKyddJztcblx0XHRzZWxmLm1vZGFsQ29uZmlybUJ1dHRvblRleHQgPSBsaW5rLmRhdGEoJ2J1dHRvbi10ZXh0JykgfHwgc2VsZi5tb2RhbENvbmZpcm1CdXR0b25UZXh0O1xuXHRcdC8vc2VsZi51cmwgICAgICAgICAgICAgICAgICAgID0gbGluay5hdHRyKCdocmVmJyk7XG5cdFx0c2VsZi51cmwgICAgICAgICAgICAgICAgICAgID0gbGluay5kYXRhKCdocmVmJyk7XG5cdFx0c2VsZi5sYXJhdmVsVG9rZW4gICAgICAgICAgID0gJChcIm1ldGFbbmFtZT1jc3JmLXRva2VuXVwiKS5hdHRyKCdjb250ZW50Jyk7XG5cblx0XHRzZWxmLmNvbmZpcm1EZWxldGUoKTtcblxuXG5cdH0sXG5cblx0Y29uZmlybURlbGV0ZTogZnVuY3Rpb24oKSB7XG5cdFx0U3dhbC5maXJlKHtcblx0XHRcdFx0dGl0bGUgICAgICAgICAgICAgOiB0aGlzLm1vZGFsVGl0bGUsXG5cdFx0XHRcdHRleHQgICAgICAgICAgICAgIDogdGhpcy5tb2RhbE1lc3NhZ2UsXG5cdFx0XHRcdHR5cGUgICAgICAgICAgICAgIDogXCJ3YXJuaW5nXCIsXG5cdFx0XHRcdHNob3dDYW5jZWxCdXR0b24gIDogdHJ1ZSxcblx0XHRcdFx0Y29uZmlybUJ1dHRvbkNvbG9yOiBcIiNERDZCNTVcIixcblx0XHRcdFx0Y29uZmlybUJ1dHRvblRleHQgOiB0aGlzLm1vZGFsQ29uZmlybUJ1dHRvblRleHQgLy8sXG5cdFx0XHRcdC8vY2xvc2VPbkNvbmZpcm0gICAgOiB0cnVlXG5cdFx0XHR9KS50aGVuKGZ1bmN0aW9uKGlzQ29uZmlybSkge1xuXHRcdFx0ICBpZiAoaXNDb25maXJtLnZhbHVlKSB7XG5cdFx0XHRcdC8vYWxlcnQoJ1NJJyk7XG5cdFx0XHRcdHRoaXMubWFrZURlbGV0ZVJlcXVlc3QoKTtcblx0XHRcdCAgfWVsc2V7XG5cdFx0XHRcdC8vYWxlcnQoJ05PJyk7XG5cdFx0XHQgIH1cblx0XHRcdH0uYmluZCh0aGlzKSk7XG5cdH0sXG5cdG1ha2VEZWxldGVSZXF1ZXN0OiBmdW5jdGlvbigpIHtcblx0XHQkLmFqYXgoe1xuXHRcdFx0dXJsOiB0aGlzLnVybCxcblx0XHRcdHR5cGU6IFwiREVMRVRFXCIsXG5cdFx0XHRkYXRhOiB7X21ldGhvZDogJ2RlbGV0ZScsX3Rva2VuIDp0aGlzLmxhcmF2ZWxUb2tlbn0sXG5cdFx0XHRzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSkge1xuXHRcdFx0XHRjb25zb2xlLmxvZyhkYXRhKTtcblx0XHRcdFx0Ly8kKFwiI3Rhc2tcIiArIHRhc2tfaWQpLnJlbW92ZSgpO1xuXHRcdFx0XHQvL2FsZXJ0KGRhdGEpO1xuXHRcdFx0XHRTd2FsLmZpcmUoXCJEZWxldGVkIVwiLCBcIllvdXIgaW1hZ2luYXJ5IGZpbGUgaGFzIGJlZW4gZGVsZXRlZC5cIiwgXCJzdWNjZXNzXCIpO1xuXHRcdFx0XHRsb2NhdGlvbi5yZWxvYWQoKTtcblx0XHRcdH0sXG5cdFx0XHRlcnJvcjogZnVuY3Rpb24oWE1MSHR0cFJlcXVlc3QsIHRleHRTdGF0dXMsIGVycm9yVGhyb3duKSB7XG5cdFx0XHRcdGNvbnNvbGUubG9nKCd1cmwgOiAnK3RoaXMudXJsKTtcblx0XHRcdFx0Y29uc29sZS5sb2coJ1hNTEh0dHBSZXF1ZXN0Jyk7XG5cdFx0XHRcdGNvbnNvbGUubG9nKFhNTEh0dHBSZXF1ZXN0KTtcblx0XHRcdFx0Ly9hbGVydChYTUxIdHRwUmVxdWVzdC5yZXNwb25zZVRleHQpO1xuXHRcdFx0XHQkKCcjZGl2X2RlYnVnJykuaHRtbChYTUxIdHRwUmVxdWVzdC5yZXNwb25zZVRleHQpO1xuXHRcdFx0XHRjb25zb2xlLmxvZygndGV4dFN0YXR1cycpO1xuXHRcdFx0XHRjb25zb2xlLmxvZyh0ZXh0U3RhdHVzKTtcblx0XHRcdFx0Y29uc29sZS5sb2coJ2Vycm9yVGhyb3duJyk7XG5cdFx0XHRcdGNvbnNvbGUubG9nKGVycm9yVGhyb3duKTtcblx0XHRcdFx0YWxlcnQoXCJTdGF0dXM6IFwiICsgdGV4dFN0YXR1cyk7IGFsZXJ0KFwiRXJyb3I6IFwiICsgZXJyb3JUaHJvd24pO1xuXHRcdFx0fS8vZW5kIGVycm9yXG5cdFx0fSk7XG5cdH0sXG5cdG1ha2VEZWxldGVSZXF1ZXN0MTogZnVuY3Rpb24oKSB7XG5cdFx0dmFyIGZvcm0gPVxuXHRcdFx0JCgnPGZvcm0+Jywge1xuXHRcdFx0XHQnbWV0aG9kJzogJ1BPU1QnLFxuXHRcdFx0XHQnYWN0aW9uJzogdGhpcy51cmxcblx0XHRcdH0pO1xuXG5cdFx0dmFyIHRva2VuID1cblx0XHRcdCQoJzxpbnB1dD4nLCB7XG5cdFx0XHRcdCd0eXBlJzogJ2hpZGRlbicsXG5cdFx0XHRcdCduYW1lJzogJ190b2tlbicsXG5cdFx0XHRcdCd2YWx1ZSc6IHRoaXMubGFyYXZlbFRva2VuXG5cdFx0XHR9KTtcblxuXHRcdHZhciBoaWRkZW5JbnB1dCA9XG5cdFx0XHQkKCc8aW5wdXQ+Jywge1xuXHRcdFx0XHQnbmFtZSc6ICdfbWV0aG9kJyxcblx0XHRcdFx0J3R5cGUnOiAnaGlkZGVuJyxcblx0XHRcdFx0J3ZhbHVlJzogJ0RFTEVURSdcblx0XHRcdH0pO1xuXG5cdFx0cmV0dXJuIGZvcm0uYXBwZW5kKHRva2VuLCBoaWRkZW5JbnB1dCkuYXBwZW5kVG8oJ2JvZHknKS5zdWJtaXQoKTtcblx0fVxufTtcblxuZGVsZXRlci5pbml0KCk7XG4iXSwibmFtZXMiOlsiZGVsZXRlciIsImxpbmtTZWxlY3RvciIsIm1vZGFsVGl0bGUiLCJtb2RhbE1lc3NhZ2UiLCJtb2RhbENvbmZpcm1CdXR0b25UZXh0IiwibGFyYXZlbFRva2VuIiwidXJsIiwiaW5pdCIsIiQiLCJvbiIsInNlbGYiLCJoYW5kbGVDbGljayIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJkYXRhIiwibGluayIsImF0dHIiLCJjb25maXJtRGVsZXRlIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsInRleHQiLCJ0eXBlIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25Db2xvciIsImNvbmZpcm1CdXR0b25UZXh0IiwidGhlbiIsImlzQ29uZmlybSIsInZhbHVlIiwibWFrZURlbGV0ZVJlcXVlc3QiLCJiaW5kIiwiYWpheCIsIl9tZXRob2QiLCJfdG9rZW4iLCJzdWNjZXNzIiwiY29uc29sZSIsImxvZyIsImxvY2F0aW9uIiwicmVsb2FkIiwiZXJyb3IiLCJYTUxIdHRwUmVxdWVzdCIsInRleHRTdGF0dXMiLCJlcnJvclRocm93biIsImh0bWwiLCJyZXNwb25zZVRleHQiLCJhbGVydCIsIm1ha2VEZWxldGVSZXF1ZXN0MSIsImZvcm0iLCJ0b2tlbiIsImhpZGRlbklucHV0IiwiYXBwZW5kIiwiYXBwZW5kVG8iLCJzdWJtaXQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Resources/js/btnDeleteX2.js\n");

/***/ }),

/***/ "./Resources/js/flatpickr.js":
/*!***********************************!*\
  !*** ./Resources/js/flatpickr.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("/* provided dependency */ var $ = __webpack_require__(/*! jquery */ \"./node_modules/jquery/dist/jquery.js\");\n$(\".datetime_flatpickr\").flatpickr({\n  wrap: true,\n  //locale: it,\n  //altInput: true,\n  //altFormat: \"F j, Y\",\n  dateFormat: \"d/m/Y H:i\",\n  enableTime: true,\n  time_24hr: true\n});\n$(\".date_flatpickr\").flatpickr({\n  wrap: true,\n  //locale: it,\n  //altInput: true,\n  //altFormat: \"F j, Y\",\n  dateFormat: \"d/m/Y\",\n  //enableTime: true,\n  time_24hr: true\n});\n$(\".time_flatpickr\").flatpickr({\n  wrap: true,\n  //locale: it,\n  //altInput: true,\n  //altFormat: \"F j, Y\",\n  dateFormat: \"H:i\",\n  noCalendar: true,\n  enableTime: true,\n  time_24hr: true\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9SZXNvdXJjZXMvanMvZmxhdHBpY2tyLmpzLmpzIiwibWFwcGluZ3MiOiI7QUFBQUEsQ0FBQyxDQUFDLHFCQUFELENBQUQsQ0FBeUJDLFNBQXpCLENBQW1DO0VBQy9CQyxJQUFJLEVBQUUsSUFEeUI7RUFFL0I7RUFDQTtFQUNBO0VBQ0FDLFVBQVUsRUFBRSxXQUxtQjtFQU0vQkMsVUFBVSxFQUFFLElBTm1CO0VBTy9CQyxTQUFTLEVBQUU7QUFQb0IsQ0FBbkM7QUFXQUwsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJDLFNBQXJCLENBQStCO0VBQzNCQyxJQUFJLEVBQUUsSUFEcUI7RUFFM0I7RUFDQTtFQUNBO0VBQ0FDLFVBQVUsRUFBRSxPQUxlO0VBTTNCO0VBQ0FFLFNBQVMsRUFBRTtBQVBnQixDQUEvQjtBQVVBTCxDQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQkMsU0FBckIsQ0FBK0I7RUFDM0JDLElBQUksRUFBRSxJQURxQjtFQUUzQjtFQUNBO0VBQ0E7RUFDQUMsVUFBVSxFQUFFLEtBTGU7RUFNM0JHLFVBQVUsRUFBRSxJQU5lO0VBTzNCRixVQUFVLEVBQUUsSUFQZTtFQVEzQkMsU0FBUyxFQUFFO0FBUmdCLENBQS9CIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vQWRtaW5MVEUvLi9SZXNvdXJjZXMvanMvZmxhdHBpY2tyLmpzP2RjM2UiXSwic291cmNlc0NvbnRlbnQiOlsiJChcIi5kYXRldGltZV9mbGF0cGlja3JcIikuZmxhdHBpY2tyKHtcbiAgICB3cmFwOiB0cnVlLFxuICAgIC8vbG9jYWxlOiBpdCxcbiAgICAvL2FsdElucHV0OiB0cnVlLFxuICAgIC8vYWx0Rm9ybWF0OiBcIkYgaiwgWVwiLFxuICAgIGRhdGVGb3JtYXQ6IFwiZC9tL1kgSDppXCIsXG4gICAgZW5hYmxlVGltZTogdHJ1ZSxcbiAgICB0aW1lXzI0aHI6IHRydWUsXG5cbn0pO1xuXG4kKFwiLmRhdGVfZmxhdHBpY2tyXCIpLmZsYXRwaWNrcih7XG4gICAgd3JhcDogdHJ1ZSxcbiAgICAvL2xvY2FsZTogaXQsXG4gICAgLy9hbHRJbnB1dDogdHJ1ZSxcbiAgICAvL2FsdEZvcm1hdDogXCJGIGosIFlcIixcbiAgICBkYXRlRm9ybWF0OiBcImQvbS9ZXCIsXG4gICAgLy9lbmFibGVUaW1lOiB0cnVlLFxuICAgIHRpbWVfMjRocjogdHJ1ZSxcbn0pO1xuXG4kKFwiLnRpbWVfZmxhdHBpY2tyXCIpLmZsYXRwaWNrcih7XG4gICAgd3JhcDogdHJ1ZSxcbiAgICAvL2xvY2FsZTogaXQsXG4gICAgLy9hbHRJbnB1dDogdHJ1ZSxcbiAgICAvL2FsdEZvcm1hdDogXCJGIGosIFlcIixcbiAgICBkYXRlRm9ybWF0OiBcIkg6aVwiLFxuICAgIG5vQ2FsZW5kYXI6IHRydWUsXG4gICAgZW5hYmxlVGltZTogdHJ1ZSxcbiAgICB0aW1lXzI0aHI6IHRydWUsXG59KTtcbiJdLCJuYW1lcyI6WyIkIiwiZmxhdHBpY2tyIiwid3JhcCIsImRhdGVGb3JtYXQiLCJlbmFibGVUaW1lIiwidGltZV8yNGhyIiwibm9DYWxlbmRhciJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./Resources/js/flatpickr.js\n");

/***/ }),

/***/ "./Resources/js/myvue3.js":
/*!********************************!*\
  !*** ./Resources/js/myvue3.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ \"./node_modules/vue/dist/vue.esm-bundler.js\");\n/**\n * @link https://www.freecodecamp.org/news/migrate-from-vue2-to-vue3-with-example-project/\n */\n\n/*\napp.config.isCustomElement = tag => tag.startsWith('input-')\n*/\n //import TinymceComponent from './components/TinymceComponent.vue';\n//import TinymceComponent from './components/wysiwyg/Tinymce2Component.vue';\n//import ExampleComponent from '../../../../Modules/Theme/Resources/js/components/ExampleComponent.vue';\n\nvar app = (0,vue__WEBPACK_IMPORTED_MODULE_0__.createApp)({\n  data: function data() {\n    return {\n      count: 0\n    };\n  }\n}); //app.component('tinymce-component',TinymceComponent);\n//app.component('example-component', ExampleComponent);\n\napp.mount('#app');//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9SZXNvdXJjZXMvanMvbXl2dWUzLmpzLmpzIiwibWFwcGluZ3MiOiI7O0FBQUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtDQUlBO0FBQ0E7QUFDQTs7QUFFQSxJQUFNQyxHQUFHLEdBQUdELDhDQUFTLENBQUM7RUFDbEJFLElBRGtCLGtCQUNYO0lBQ0gsT0FBTztNQUNIQyxLQUFLLEVBQUU7SUFESixDQUFQO0VBR0g7QUFMaUIsQ0FBRCxDQUFyQixFQVNBO0FBQ0E7O0FBRUFGLEdBQUcsQ0FBQ0csS0FBSixDQUFVLE1BQVYiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9BZG1pbkxURS8uL1Jlc291cmNlcy9qcy9teXZ1ZTMuanM/YWQ2NCJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIEBsaW5rIGh0dHBzOi8vd3d3LmZyZWVjb2RlY2FtcC5vcmcvbmV3cy9taWdyYXRlLWZyb20tdnVlMi10by12dWUzLXdpdGgtZXhhbXBsZS1wcm9qZWN0L1xuICovXG5cbi8qXG5hcHAuY29uZmlnLmlzQ3VzdG9tRWxlbWVudCA9IHRhZyA9PiB0YWcuc3RhcnRzV2l0aCgnaW5wdXQtJylcbiovXG5cblxuaW1wb3J0IHsgY3JlYXRlQXBwIH0gZnJvbSAndnVlJ1xuLy9pbXBvcnQgVGlueW1jZUNvbXBvbmVudCBmcm9tICcuL2NvbXBvbmVudHMvVGlueW1jZUNvbXBvbmVudC52dWUnO1xuLy9pbXBvcnQgVGlueW1jZUNvbXBvbmVudCBmcm9tICcuL2NvbXBvbmVudHMvd3lzaXd5Zy9UaW55bWNlMkNvbXBvbmVudC52dWUnO1xuLy9pbXBvcnQgRXhhbXBsZUNvbXBvbmVudCBmcm9tICcuLi8uLi8uLi8uLi9Nb2R1bGVzL1RoZW1lL1Jlc291cmNlcy9qcy9jb21wb25lbnRzL0V4YW1wbGVDb21wb25lbnQudnVlJztcblxuY29uc3QgYXBwID0gY3JlYXRlQXBwKHtcbiAgICBkYXRhKCkge1xuICAgICAgICByZXR1cm4ge1xuICAgICAgICAgICAgY291bnQ6IDBcbiAgICAgICAgfVxuICAgIH1cbn0pO1xuXG5cbi8vYXBwLmNvbXBvbmVudCgndGlueW1jZS1jb21wb25lbnQnLFRpbnltY2VDb21wb25lbnQpO1xuLy9hcHAuY29tcG9uZW50KCdleGFtcGxlLWNvbXBvbmVudCcsIEV4YW1wbGVDb21wb25lbnQpO1xuXG5hcHAubW91bnQoJyNhcHAnKTsiXSwibmFtZXMiOlsiY3JlYXRlQXBwIiwiYXBwIiwiZGF0YSIsImNvdW50IiwibW91bnQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Resources/js/myvue3.js\n");

/***/ }),

/***/ "./Resources/sass/app.scss":
/*!*********************************!*\
  !*** ./Resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9SZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9BZG1pbkxURS8uL1Jlc291cmNlcy9zYXNzL2FwcC5zY3NzPzUxYTQiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./Resources/sass/app.scss\n");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["css/app","/js/vendor"], () => (__webpack_exec__("./Resources/js/app.js"), __webpack_exec__("./Resources/sass/app.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);