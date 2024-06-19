
// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */


try {
    // window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');

    // ### Datatables
    window.JSZip = require( 'jszip' );
	require( 'datatables.net-bs4' );
	require( 'datatables.net-buttons-bs4' );
	require( 'datatables.net-buttons/js/buttons.colVis.js' );
	require( 'datatables.net-buttons/js/buttons.flash.js' );
    require( 'datatables.net-buttons/js/buttons.html5.js' );
	require( 'datatables.net-buttons/js/buttons.print.js' );
	require( 'datatables.net-responsive-bs4' );
	require( 'datatables.net-rowgroup-bs4' );
	require( 'datatables.net-scroller-bs4' );
	require( 'datatables.net-select-bs4' );

	// pdfMake
    var pdfMake = require('pdfmake/build/pdfmake.js');
    var pdfFonts = require('pdfmake/build/vfs_fonts.js');
    pdfMake.vfs = pdfFonts.pdfMake.vfs;

} catch (e) {}


// try {
//     window.Popper = require('popper.js').default;
//     window.$ = window.jQuery = require('jquery');

//     require('bootstrap');
// } catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

// window.axios = require('axios');

// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

// let token = document.head.querySelector('meta[name="csrf-token"]');

// if (token) {
//     window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
// } else {
//     console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
// }

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });


	import './masonry';
	import './charts';
	import './popover';
	import './scrollbar';
	import './search';
	import './sidebar';
	import './skycons';
	import './vectorMaps';
	import './chat';
	// import './datatable';
	import './datetimepicker';
	import './email';
	import './fullcalendar';
	import './googleMaps';
	import './utils';

	// import './sweetalert2';
	 import './selectes';

